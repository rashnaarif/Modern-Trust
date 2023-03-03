<footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="footer-logo">
                        <?php dynamic_sidebar('footer-one-widget1'); ?>                        
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="social-icons">
                      <?php  dynamic_sidebar('footer-one-widget2');?>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 ">
                    <div class="footer-nav">
                    <?php dynamic_sidebar('footer-two'); ?>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="footer-content">
                    <?php dynamic_sidebar('footer-three'); ?>

                    </div>
                </div>
            </div>

            <div class="bottom-footer">
                <div class="row">
                    <div class="col-md-6">
                        <div class="footer-badge">
                            <?php dynamic_sidebar('bottom-footer-widget1'); ?>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="copyright">
                        <?php dynamic_sidebar('bottom-footer-widget2'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/bootstrap/js/bootstrap.bundle.min.js"></script>
 <?php wp_footer(); ?>
</body>

</html>