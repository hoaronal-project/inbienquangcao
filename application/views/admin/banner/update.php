<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<div class="row">
    <div class="col-lg-4 col-md-12">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title"><?php echo trans('update_image'); ?></h3>
            </div>
            <!-- /.box-header -->

            <!-- form start -->
            <?php echo form_open_multipart('banner/update_banner_image_post'); ?>

            <div class="box-body">
                <!-- include message block -->
                <?php $this->load->view('admin/includes/_messages'); ?>

                <input type="hidden" name="id" value="<?php echo html_escape($image->id); ?>">
                <input type="hidden" name="path_big" value="<?php echo html_escape($image->path_big); ?>">
                <input type="hidden" name="path_small" value="<?php echo html_escape($image->path_small); ?>">
                <div class="form-group">
                    <label><?php echo trans("language"); ?></label>
                    <select name="lang_id" class="form-control" onchange="get_gallery_categories_by_lang(this.value);">
                        <?php foreach ($languages as $language): ?>
                            <option value="<?php echo $language->id; ?>" <?php echo ($image->lang_id == $language->id) ? 'selected' : ''; ?>><?php echo $language->name; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group">
                    <label class="control-label"><?php echo trans('title'); ?></label>
                    <input type="text" class="form-control"
                           name="title" id="title" placeholder="<?php echo trans('title'); ?>"
                           value="<?php echo html_escape($image->title); ?>" <?php echo ($rtl == true) ? 'dir="rtl"' : ''; ?>>
                </div>

                <div class="form-group">
                    <label class="control-label"><?php echo trans('category'); ?></label>
                    <select id="categories" name="category_id" class="form-control" required>
                        <option value=""><?php echo trans('select'); ?></option>
                        <?php foreach ($categories as $item): ?>
                            <?php if ($item->id == $image->category_id): ?>
                                <option value="<?php echo html_escape($item->id); ?>" selected>
                                    <?php echo html_escape($item->name); ?></option>
                            <?php else: ?>
                                <option value="<?php echo html_escape($item->id); ?>"><?php echo html_escape($item->name); ?></option>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </select>
                </div>
				<div class="form-group">
					<div class="row">
						<div class="col-sm-3 col-xs-12 col-lang">
							<label><?php echo trans('visibility'); ?></label>
						</div>
						<div class="col-md-2 col-sm-4 col-xs-12 col-lang">
							<input type="radio" id="rb_visibility_1" name="visibility" value="1" class="flat-red" <?php echo ($image->visibility == 1) ? 'checked' : ''; ?>>&nbsp;&nbsp;
							<label for="rb_visibility_1" class="cursor-pointer"><?php echo trans('show'); ?></label>
						</div>
						<div class="col-md-2 col-sm-4 col-xs-12 col-lang">
							<input type="radio" id="rb_visibility_2" name="visibility" value="0" class="flat-red" <?php echo ($image->visibility == 0) ? 'checked' : ''; ?>>&nbsp;&nbsp;
							<label for="rb_visibility_2" class="cursor-pointer"><?php echo trans('hide'); ?></label>
						</div>
					</div>
				</div>

                <div class="form-group">
                    <label class="control-label"><?php echo trans('image'); ?> </label>
                    <div class="col-sm-12 p0">
                        <div class="row">
                            <div class="col-sm-4">
                                <img src="<?php echo base_url() . html_escape($image->path_small); ?>" alt=""
                                     class="thumbnail img-responsive">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <a class='btn btn-success btn-sm btn-file-upload'>
                                    <?php echo trans('select_image'); ?>
                                    <input type="file" id="Multifileupload" name="file" size="40" accept=".png, .jpg, .jpeg, .gif" style="cursor: pointer;">
                                </a>
                            </div>
                        </div>

                        <div id="MultidvPreview"></div>

                    </div>
                </div>

            </div>
            <!-- /.box-body -->
            <div class="box-footer">
                <button type="submit" class="btn btn-primary pull-right"><?php echo trans('save_changes'); ?></button>
            </div>
            <!-- /.box-footer -->
            <?php echo form_close(); ?><!-- form end -->
        </div>
        <!-- /.box -->
    </div>
</div>
