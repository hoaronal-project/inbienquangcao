<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Project_admin_model extends CI_Model
{

    //input values
    public function input_values()
    {
        $data = array(
            'lang_id' => $this->input->post('lang_id', true),
            'title' => $this->input->post('title', true),
			'customer' => $this->input->post('customer', true),
			'estimation' => $this->input->post('estimation', true),
            'summary' => $this->input->post('summary', true),
            'keywords' => $this->input->post('keywords', true),
            'content' => $this->input->post('content', false),
        );
        return $data;
    }

    //add project
    public function add_project()
    {
        $data = $this->set_data();

        $date_published = $this->input->post('date_published', true);
        if (!empty($date_published)) {
            $data["created_at"] = $date_published;
        }

        if(empty($data["summary"])){
			$data["summary"] = $data["title"];
		}

        $data['user_id'] = user()->id;
        $data['status'] = $this->input->post('status', true);

        return $this->db->insert('projects', $data);
    }

    //update project
    public function update_project($id)
    {
        $data = $this->set_data();

        $data["created_at"] = $this->input->post('date_published', true);

        $publish = $this->input->post('publish', true);
        if (!empty($publish) && $publish == 1) {
            $data["status"] = 1;
        }

        $this->db->where('id', $id);
        return $this->db->update('projects', $data);
    }

    //set project data
    public function set_data()
    {
        $data = $this->input_values();

        if (empty($this->input->post('image_url', true))):
            //add project image
            $image = $this->file_model->get_image($this->input->post('post_image_id', true));

            if (!empty($image)) {
                $data["image_big"] = $image->image_big;
                $data["image_mid"] = $image->image_mid;
                $data["image_small"] = $image->image_small;
                $data["image_slider"] = $image->image_slider;
            }
        endif;

        return $data;

    }

    //check project exists
    public function check_is_project_exists($title)
    {
        $this->db->where('projects.title', $title);
        $query = $this->db->get('projects');
        if ($query->num_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    //get project
    public function get_project($id)
    {
        $this->db->where('projects.id', $id);
        $query = $this->db->get('projects');
        return $query->row();
    }

	//get project
	public function get_project_by_slug($slug)
	{
		$this->db->where('projects.title_slug', $slug);
		$query = $this->db->get('projects');
		return $query->row();
	}

    //get projects count
    public function get_projects_count()
    {
        $user_id = user()->id;
        if (user()->role == "author"):
            $this->db->where('projects.user_id', $user_id);
        endif;

        $this->db->where('projects.status', 1);
        $query = $this->db->get('projects');
        return $query->num_rows();
    }

    //filter by values
    public function filter_projects()
    {
        $data = array(
            'lang_id' => $this->input->get('lang_id', true),
            'author' => $this->input->get('author', true),
            'q' => $this->input->get('q', true),
        );

        $data['q'] = trim($data['q']);

        if (!empty($data['lang_id'])) {
            $this->db->where('projects.lang_id', $data['lang_id']);
        }
        if (!empty($data['q'])) {
            $this->db->like('projects.title', $data['q']);
        }
    }

    //get paginated projects
    public function get_paginated_projects($per_page, $offset, $list)
    {
        $this->filter_projects();
        $this->db->where('projects.status', 1);
        $this->db->order_by('projects.created_at', 'DESC');
        $this->db->limit($per_page, $offset);
        $query = $this->db->get('projects');
        return $query->result();
    }

	//get paginated projects
	public function get_projects_by_type($per_page, $offset, $list)
	{
		$this->filter_projects();
		$this->db->where('projects.status', 1);
		$this->db->where('projects.project_type', 1);
		$this->db->order_by('projects.created_at', 'DESC');
		$this->db->limit($per_page, $offset);
		$query = $this->db->get('projects');
		return $query->result();
	}

	//get paginated projects
	public function get_projects_recent($per_page, $offset, $list)
	{
		$this->filter_projects();
		$this->db->where('projects.status', 1);
		$this->db->order_by('projects.created_at', 'DESC');
		$this->db->limit($per_page, $offset);
		$query = $this->db->get('projects');
		return $query->result();
	}

    //get paginated projects count
    public function get_paginated_projects_count($list)
    {
        $this->filter_projects();
        $this->db->where('projects.status', 1);
        $query = $this->db->get('projects');
        return $query->num_rows();
    }

	//update slug
	public function update_slug($id)
	{
		$project = $this->get_project($id);

		if (empty($project->title_slug) || $project->title_slug == "-") {
			$data = array(
				'title_slug' => $project->id
			);
			$this->db->where('id', $id);
			return $this->db->update('projects', $data);
		} else {
			if ($this->check_is_slug_unique($project->title_slug, $id) == true) {
				$data = array(
					'title_slug' => $project->title_slug . "-" . $project->id
				);

				$this->db->where('id', $id);
				return $this->db->update('projects', $data);
			}
		}
	}

	//check slug
	public function check_is_slug_unique($slug, $id)
	{
		$this->db->where('projects.title_slug', $slug);
		$this->db->where('projects.id !=', $id);
		$query = $this->db->get('projects');
		if ($query->num_rows() > 0) {
			return true;
		} else {
			return false;
		}
	}

    //delete project
    public function delete_project($id)
    {
        $project = $this->get_project($id);

        if (!empty($project)):
            $this->db->where('id', $id);
            return $this->db->delete('projects');
        else:
            return false;
        endif;
    }

    //delete multi project
    public function delete_multi_projects($project_ids)
    {
        if (!empty($project_ids)) {
            foreach ($project_ids as $id) {
                $project = $this->get_project($id);

                if (!empty($project)) {
                    $this->db->where('id', $id);
                    $this->db->delete('projects');
                }
            }
        }

    }
}
