<?php
/**
 * @package WordPress
 * @subpackage Study_Edge
 * @since Study Edge 1.0
 */

global $nav;
?>
	<footer class="wrap full">
		<div class="wrap">
			<div class="left mobile-hide">
				<?php $nav->output(false, false) ?>
			</div>
			<div class="right">
				<h3>Stay in Touch</h3>
				<div class="social">
					<a href="http://facebook.com/algebranation" target="_blank"><i class="fa fa-facebook" alt="" /></i></a>
					<a href="http://twitter.com/algebranation" target="_blank"><i class="fa fa-twitter" alt="" /></i></a>
					<a href="http://instagram.com/algebranation" target="_blank"><i class="fa fa-instagram" alt="" /></i></a>
					<a href="http://youtube.com/algebranation" target="_blank"><i class="fa fa-youtube" alt="" /></i></a>
				</div>
				1-888-608-MATH<br />
				<a href="mailto:help@algebranation.com">help@algebranation.com</a><br />
				
			</div>
			<div class="clear"></div>
			<div class="copy">
				Copyright <?php echo date('Y') ?> &copy; <?php bloginfo('name') ?> &nbsp;
				<!--<?php
				define('END_TIME', microtime(true));
				echo (END_TIME - START_TIME)*1000 . " ms";
				?>-->
			</div>
		</div>
	</footer>
	<div id="popup-overlay" popup="close"></div>
	<div id="popup"><div></div></div>
	<?php wp_footer() ?>
</body>
</html>