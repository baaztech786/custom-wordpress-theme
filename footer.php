<?php
/*
* This template is used display footer
*/
?>
<footer class="site-footer">
    <div class="row ml-0 mr-0 footer-widgets">
        <div class="widget-col col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <?php dynamic_sidebar('footer-1') ?>
        </div>
        <div class="widget-col col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <?php dynamic_sidebar('footer-2') ?>
        </div>
        <div class="widget-col col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <?php dynamic_sidebar('footer-3') ?>
        </div>
    </div>
</footer>
</div><!--#Closing of main container -->

</body>
<?php wp_footer() ?>
</html>
