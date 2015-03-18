<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package broz-knows
 */
?>

</div>
<!-- #content -->
<footer id="colophon" class="site-footer" role="contentinfo">
<div class="site-info">
<!-- HIDE WIDGETS (ASK CHRIS) <?php dynamic_sidebar( 'footer-widgets' ); ?>
<?php wp_nav_menu( array( 'theme_location' => 'footer', 'menu_id' => 'footer-menu' ) ); ?> -->
<div class="row clearfix">
	<div class="footer_columns">
		<h2 class="h1_footer">Company</h2>
		<p>
			<a href="">About Broz</a>
			<a href="">Broz Blog</a>
			<a href="">Broz Partners & Affiliate Links</a>
			<a href="">Testimonials</a>
		</p>
	</div>

	<div class="footer_columns">
		<h2 class="h1_footer">Services</h2>
		<p>
			<a href="">Apparel & Swag</a>
			<a href="">Web Design</a>
			<a href="">Web Development</a>
			<a href="">Graphic Design</a>
			<a href="">Logo Design</a>
			<a href="">Branding</a>
			<a href="">Search Engine Optimization</a>
		</p>
	</div>
	<div class="footer_columns">
		<h2 class="h1_footer">Broz Blog</h2>
		<p>Successful People Act Quickly, Even If They May Fail
			Is failing important and maybe critical to success? According to this article, it is:In the book Art and Fear, the artists Ted Orland and David Waylon share a story about a ceramics teacher who tried an experiment with his class. The teacher divided the students into two groups.</p>
		</div>
	<div class="footer_columns">
	<div class="footer_social">
		<h2 class="h1_footer">Contact Broz</h2>
		<p><b>(720) 432-308</br></b>
			PO Box 351643</br>
			Westminster, CO 80035</br>
			broz@brozknows.com</br></p>

			<p><fb:like href="http://www.facebook.com/broz.knows" send="false" layout="button_count" width="250" show_faces="false" colorscheme="dark"></fb:like></p>

			<a href="https://twitter.com/mattbrozo" class="twitter-follow-button" data-show-count="false">@mattbrozo</a></p>

			<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

			<!-- Google Plus -->
			<div class="g-follow" data-annotation="bubble" data-height="20" data-href="https://www.google.com/+Brozknows1" data-rel="publisher"></div></p>

			<script type="text/javascript">
			(function() {
				var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
				po.src = 'https://apis.google.com/js/plusone.js';
				var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);})();</script>

				<p><a href="http://www.aiga.org/profile.aspx?uid=199074" target="_blank"><img src="images/aiga_member_since_2010.gif"/></a></p>
	</div>
	</div>
</div>
<p>&copy;Copyright <?php echo date("Y") ?>. Broz LLC.</p>

</div><!-- .site-info -->
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>