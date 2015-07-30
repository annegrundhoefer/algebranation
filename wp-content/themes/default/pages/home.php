<?php
$objects = get_objects('Home Page', array('experts', 'paragraph', 'video_url', 'title'));
$home = end($objects);
?>
<div class="wrap full mobile-hide">
	<div class="full-video"><div><b></b></div></div>
	<div class="video" data-video="<?php echo $home['video_url'] ?>">
		<div class="wrap">
			<div class="overlay">
				<h1><?php echo $home['title'] ?></h1>
				<?php echo $home['paragraph'] ?>
				<br /><br />
				<a class="btn" target="_blank" href="http://studyedge.com/app" popup="facebook-app">Start Using Algebra Nation</a> &nbsp;
				<a class="btn transparent" id="lrs-button" href="#courses">Stay Informed</a>
			</div>
			<div class="hover">
				<b class="white"></b>
				<b class="blue"></b>
				<span>Intro Video</span>
			</div>
		</div>
	</div>
	<div class="how">
		<span>
			<img src="<?php i() ?>24-7-reviews.png" alt="" width="604" height="346" /><br />
			24/7 review sessions<br />
			<a href="about">Learn More &raquo;</a>
		</span>
		<b>
			=
		</b>
		<span>
			<img src="<?php i() ?>better-grades.png" alt="" width="297" height="360" /><br />
			<a name="courses"></a> <!-- placed here so there is extra space above when scrolling -->
			Better grades in less time<br />
			<a href="about">Learn More &raquo;</a>
		</span>
	</div>
</div>
<a class="mobile-show mobile-video" href="<?php echo $home['video_url'] ?>">
	<img style="display:block" alt="" src="http://studyedge.com.s3.amazonaws.com/images/banners/home.jpg" />
	<span>
		<b></b>
		<img class="play" alt="" src="http://studyedge.com.s3.amazonaws.com/images/play.png" />
	</span>
	<h3>Study Smarter, Not Harder.</h3>
</a>
<div class="wrap full">

	<div class="experts mobile-hide">
		<h2>Meet the Team</h2>
		<div>
			<?php
			$i = $r = 0;
			$expert_ids = explode(',', preg_replace('/[^\d,]/', '', $home['experts']));
			$experts = get_objects($expert_ids, array('name', 'education', 'expertise', 'fact', 'email', 'video_url', 'face_image'), 'id');

			$c = count($experts);
			$show_threes = $c % 4 > 0;

			foreach($expert_ids as $id) {
				if (!isset($experts[$id])) continue;
				$expert = $experts[$id];
				$i++;
				if (($i == 4 && $r % 2 > 0 && $show_threes) || $i == 5) {
					echo '<div class="clear"></div></div><div' . ($r % 2 == 0 && $show_threes ? ' class="three"' : '') . '>';
					$i = 1;
					$r++;
				}
				?>
				<div class="expert" popup="exp-bio">
					<div>
						<img src="<?php echo $expert['face_image'] ?>" alt="" />
						<b></b>
					</div>
					<h4><?php echo $expert['name'] ?></h4>
					<h5><?php echo $expert['expertise'] ?></h5>
					<div style="display:none" class="popup-text"><!-- for popup -->
						<h1><?php echo $expert['name'] ?></h1>
						<div class="col-40"><div class="padded">
							<b>Education:</b> <?php echo $expert['education'] ?><br />
							<b>Study Expert in:</b> <?php echo $expert['expertise'] ?><br />
							<b>Fun Fact:</b> <?php echo $expert['fact'] ?><br />
							<b>Contact:</b> <a href="mailto:<?php echo $expert['email'] ?>"><?php echo $expert['email'] ?></a><br />
						</div></div>
						<div class="col-55 ml-5">
							[video=<?php echo $expert['video_url'] ?>]
						</div>
						<div class="clear"></div>
					</div>
				</div>
				<?php
			}
			?>
			<div class="clear"></div>
		</div>
	</div>
	<div class="mobile-experts mobile-show">
		<h2>The Study Experts</h2>
		<?php
		foreach($expert_ids as $id) {
			if (!isset($experts[$id])) continue;
			$expert = $experts[$id];
			?>
			<div class="expert">
				<div>
					<img src="<?php echo $expert['face_image'] ?>" alt="" />
				</div>
				<h4><?php echo $expert['name'] ?></h4>
				<h5><?php echo $expert['expertise'] ?></h5>
			</div>
			<?php
		}
		?>
		<div class="clear"></div>
	</div>
	<div class="testimonials tk-museo-slab mobile-hide">
		<div class="wrap">
			<?php
			$key = 0;
			$spacer_text = $quotes_text = $testimonials_text = '';
			$quotes = get_objects('Testimonial', array('quote', 'image', 'name', 'position'));

			//Choose 3 random indexes
			$indexes = range(0, count($quotes)-1);
			shuffle($indexes);
			$indexes = array_slice($indexes, 0, 3);

			foreach ($indexes as $index) {
				$quote = $quotes[$index];
				$spacer_text .= '<blockquote' . ($key == 1 ? ' class="active"' : '') . '>&ldquo;' . $quote['quote'] . '&rdquo;</blockquote>';
				$quotes_text .= '<blockquote' . ($key == 1 ? ' class="active"' : '') . '><div>&ldquo;' . $quote['quote'] . '&rdquo;</div></blockquote>';
				$testimonials_text .= '<div class="testimonial' . ($key == 1 ? ' active' : '') . '">' .
						'<span><img src="' . $quote['image'] . '" alt="" /></span>' .
						'<div><h3>' . $quote['name'] . '</h3>' . $quote['position'] . '</div></div>';
				$key++;
			}
			?>
			<div class="spacer">
				<div class="wrap">
					<?php echo $spacer_text ?>
					<div class="clear"></div>
				</div>
			</div>
			<?php
			echo $quotes_text . $testimonials_text;
			?>
			<div class="clear"></div>
		</div>
		<div class="space"></div>
	</div>
	<div class="testimonials tk-museo-slab mobile-show">
		<?php
		$show = 1;
		foreach ($indexes as $index) {
			if (($show--) < 1) break;
			$quote = $quotes[$index];
			echo '<blockquote>&ldquo;' . $quote['quote'] . '&rdquo;</blockquote>' .
				'<div class="testimonial active">' .
					'<span><img src="' . $quote['image'] . '" alt="" /></span>' .
					'<div><h3>' . $quote['name'] . '</h3>' . $quote['position'] . '</div>' .
				'</div><div class="clear"></div>';
		}
		?>
	</div>
</div>
<?php require(get_template_directory() . '/get-our-app.php') ?>
<div class="video-overlay">
	<b></b>
</div>
