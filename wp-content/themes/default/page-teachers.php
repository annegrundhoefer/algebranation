<?php get_header(); ?>
<div class="teachers">
<div class="wrap full">
	<div class="big-image short">
		<div class="overlay">
			<div class="wrap">
				<h1>Teachers</h1>
				<h3>We give students the EDGE they need with their studies.</h3>
			</div>
		</div>
	</div>
</div>
<div class="wrap mobile-padded">
	<div class="col-40">
		<a class="about-video vid-preview" href="http://studyedge.com.s3.amazonaws.com/videos/parents.mp4">
			<img alt="" src="http://studyedge.com.s3.amazonaws.com/images/about-thumb.png" />
			<b></b>
		</a>
	</div>
	<div class="col-55 ml-5">
		<h2>We are dedicated to providing superior educational services to college students at an affordable price.</h2>
		<p>We are focused on a continuous learning model, as opposed to hosting cram sessions a few days before an exam, which better serves students and ultimately assists them in truly mastering class content. Study Edge offers services for many historically difficult courses. Across the country, these are commonly courses in chemistry, economics, mathematics, statistics, and physics, just to name a few. At the University of Florida, which has an all student average GPA of 3.30, students who are Study Edge membershave an average GPA of 3.53 (based on nearly 10,000 membership submissions)!</p>
		<p>Research has shown that students do not perceive studying as cool. This negative connotation associated with studying is preventing students from reaching their full potential. We have made it our goal at Study Edge to make studying a cool, social activity for students by creating a Study Edge Facebook page, as well as a Facebook, iPhone/iPad, and Android apps. Our presence on Facebook will integrate studying and class discussions into a prominent medium students are already using for socializing.</p>
	</div>
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

	<div class="wrap mobile-padded">
	<div class="col-55">
		<h2>Our content is comprehensive and includes everything from practice problems to Exam Reviews.</h2>
		<p>We know that everyone learns differently, and as such we've developed content to meet the needs of all kinds of learners. All of our material is created by our Study Experts, who have spent years not only becoming experts in their respective areas, but also teaching the material so students can study smarter – not harder!</p>
		<p>Review Sessions are offered in one of two formats depending on your course: live and in-person, or on video through our Facebook and mobile apps. For many classes there are also textbook solutions, old exam solutions, individual concept explanations, solutions to sample questions, and more, all created by the Study Experts. Everything you need to succeed is available on the Study Edge Facebook and mobile apps! Check out the video above to see the type of videos found on our app!</p>
	</div>
	<div class="col-40 ml-5 mobile-hide">
		<img alt="" src="http://studyedge.com.s3.amazonaws.com/images/samples/live-review.jpg" />
	</div>
	<div class="clear space mobile-hide"></div>
	
	</div>
	</div>

<div class="wrap full blue image-cols bigger">
	<div class="wrap">
		<div class="col-3">
			<div>
				<b>+1.2</b>
			</div>
			<h5>Average GPA letter<br />grade improvement</h5>
		</div>
		<div class="col-3">
			<div>
				<b></b><img alt="" src="http://studyedge.com.s3.amazonaws.com/images/glasses.png" />
			</div>
			<h5>More than 40<br />Study Experts</h5>
		</div>
		<div class="col-3">
			<div>
				<b></b><img alt="" src="http://studyedge.com.s3.amazonaws.com/images/beaker.png" />
			</div>
			<h5>One example: 78% of students in<br />CHM2045 use Study Edge<br />to help them in chemistry</h5>
		</div>
	<div class="clear"></div>
	</div>
</div>
	
<div class="wrap full text-link mobile-hide">
	<div class="wrap">
		<div class="col-55">
			<h1>Get Our Mobile App</h1>
			<small>or go to <a href="mobile">studyedge.com/mobile</a></small>
		</div>
		<form id="send-link-form" class="col-40 ml-5" method="post" onsubmit="return false;">
			<i>We will text you a link!</i>
			<input type="text" name="phone" value="Enter Phone Number" />
			<input id="send-link" type="submit" name="send-link" value="Text Link" />
		</form>
		<div id="send-link-form-status"></div>
		<div class="clear"></div>
	</div>
</div>
</div>

<?php get_footer(); ?>