	<div class="row">
        <div class="col-md-12">
            <div class="facebook">
                <iframe src="//www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.facebook.com%2FYogaElementsStudio&amp;send=false&amp;layout=button_count&amp;width=450&amp;show_faces=true&amp;font&amp;colorscheme=light&amp;action=like&amp;height=21&amp;appId=115978938547795" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:100%; height:21px;" allowTransparency="true">
                </iframe>
            </div> <!-- end .facebook -->
        </div> <!-- end .col-md-12 -->
	</div> <!-- end .row -->

    <div class="row footer">
        <div class="footer col-md-12">
            <div class="f_logo col-md-2" style="padding-top: 10px;">
            	<a href="<?php echo get_home_url(); ?>">
                	<img src="<?php echo get_bloginfo('template_directory');?>/images/logo-yoga-elements-140x56px.jpg" alt="YOGA Elements" title="YOGA Elements" width="140" height="56" />
                </a>
            </div>
            <div class="col-md-6 footer-menu" style="padding-top: 10px;">
                <?php wp_nav_menu( array( 'theme_location' => 'footer-menu', 'container' => '' ) ); ?>
            </div>
            <div class="address col-md-4" style="padding-top: 10px;">
                <h4>yoga elements</h4>
                <p>185 Dhammalert Building 7th floor<br>
				   Sukhumvit Rd., Klongtoey nua, Wattana,<br>
				   Bangkok, Thailand 10110
                </p>
            </div> <!-- end .address .col-md-4 -->
        </div> <!-- end .footer .col-md-12 -->
    </div> <!-- end .row .footer -->
    
    <div class="call_now">Call to reserve your space <img src="<?php echo get_bloginfo('template_directory');?>/images/phone.gif" alt="" width="12" height="27" class="textmiddle" /><span class="number">0 2255 9552</span>
    </div> <!-- end .call_now -->

  </div><!--end .container .wrapper -->
<?php
    wp_footer();
?>
</body>
</html>
