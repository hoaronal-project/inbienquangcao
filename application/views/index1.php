<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<h1 class="title-index"><?php echo html_escape($home_title); ?></h1>

<?php if ($layout == "layout_1" || $layout == "layout_2" || $layout == "layout_3"): ?>
    <!-- Section: slider -->
    <section id="slider" style="margin-top: 0px;">
        <div class="container-fluid home-slider-container">
            <div class="row">

                <!--Show if enabled-->
                <?php
                if ($general_settings->slider_active == 1) {
                    $this->load->view('partials/_slider', $slider_posts);
                }
                ?>

            </div><!-- /.row -->
        </div> <!-- /.container-fluid -->
    </section>
    <!-- /.Section: slider -->
<?php endif; ?>

<!-- Section: main -->
<section id="main" class="margin-top-30">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-8">
                <div class="content">

                    <?php if ($layout == "layout_4" || $layout == "layout_5" || $layout == "layout_6"): ?>
                        <div class="first-tmp-slider">
                            <!--Show if enabled-->
                            <?php
                            if ($general_settings->slider_active == 1) {
                                $this->load->view('partials/_slider_second', $slider_posts);
                            }
                            ?>
                        </div>
                    <?php endif; ?>


                    <!-- posts -->
                    <div class="col-xs-12 col-sm-12 posts <?php echo ($layout == "layout_3" || $layout == "layout_6") ? 'p-0 posts-boxed' : ''; ?>">
                        <div class="row">
                            <!-- printf posts -->
                            <?php $count = 0; ?>

                            <?php foreach ($posts as $item): ?>

                                <?php if ($count != 0 && $count % 2 == 0): ?>
                                    <div class="col-sm-12 col-xs-12"></div>
                                <?php endif; ?>

                                <!-- post item -->
                                <?php $this->load->view('partials/_post_item', ['item' => $item]); ?>
                                <!-- /.post item -->

                                <?php if ($count == 1): ?>

                                    <?php $this->load->view("partials/_ad_spaces", ["ad_space" => "index_top"]); ?>

                                    <!-- increment count -->
                                <?php endif; ?>

                                <?php $count++; ?>
                            <?php endforeach; ?>
                        </div>
                    </div><!-- /.posts -->

                    <div class="col-xs-12 col-sm-12 col-xs-12">
                        <div class="row">
                            <?php $this->load->view("partials/_ad_spaces", ["ad_space" => "index_bottom"]); ?>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-xs-12">
                        <div class="row">
                            <?php echo $this->pagination->create_links(); ?>
                        </div>
                    </div>

                </div>

            </div>

            <div class="col-xs-12 col-sm-12 col-md-4">
                <!--Sidebar-->
                <?php $this->load->view('partials/_sidebar'); ?>
            </div><!--/col-->

        </div>
    </div>
</section>
<!-- /.Section: main -->