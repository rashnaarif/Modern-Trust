<!-- 
        Template Name: Home

 -->
<!-- header section -->
<?php 
// Advanced Custom Field 
// Hero Section
$hero_sec_title = get_field('hero_section_title');
$hero_sec_desc = get_field('hero_section_description');
$hero_sec_btn_text = get_field('hero_section_button_text');
$hero_sec_btn_link = get_field('hero_section_button_link');

//Leave Section
$leave_sec_title = get_field('leave_section_title');
$leave_sec_desc = get_field('leave_section_description');
$leave_left_content = get_field('leave_left_content');
$leave_left_btn_text = get_field('leave_left_button_text');
$leave_left_btn_link = get_field('leave_left_button_link');
$leave_right_featuredImage = get_field('leave_right_image');

//mobile app section
$mobile_app_title = get_field('mobile_app_sec_title');
$mobile_app_desc = get_field('mobile_app_sec_description');
$google_img = get_field('google_image');
$app_img = get_field('app_image');


get_header();
?>

    <!-- hero-section -->
    <section class="hero-section">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="hero-content">
                        <h1><?php echo $hero_sec_title ?></h1>
                        <p><?php echo $hero_sec_desc ?></p>
                        <div class="btn-hero">
                            <a href="<?php echo $hero_sec_btn_link ?>"><?php echo $hero_sec_btn_text ?></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-5"></div>
            </div>
        </div>
    </section>

    <!-- Don't leave section -->
    <section class="leave-section">
        <div class="container">
            <div class="row mb-5 text-center">
                <div class="col-md-12">
                    <h2><?php echo $leave_sec_title ?></h2>
                    <p class="leave-main-para"><?php echo $leave_sec_desc ?></p>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="leave-content">
                                <p><?php echo $leave_left_content ?></p>
                                <div class="btn-leave">
                                    <a href="<?php echo $leave_left_btn_link ?>"><?php echo $leave_left_btn_text ?></a>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="leave-image ">
                                <?php if(!empty($leave_right_featuredImage)) : ?>
                                <img src="<?php echo $leave_right_featuredImage['url'] ;?>">
                                  <?php endif; ?>  
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>


    </section>

    <!-- mobile app section -->
    <section class="mobile-app-section">
        <div class="container bg-light text-center">
            <div class="row">
                <div class="col-md-12">
                    <h3><?php echo $mobile_app_title ?></h3>
                    <p><?php echo $mobile_app_desc ?></p>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <?php if(!empty($google_img)) : ?>
                        <a class="google-img" href="#"><img src="<?php echo $google_img['url'] ?>" /></a>
                    <?php endif; ?>
                    <?php if(!empty($app_img)) : ?>
                        <a class="app-img" href="#"><img src="<?php echo $app_img['url'] ?>" /></a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>

    <!-- footer section -->
    <?php get_footer() ?>