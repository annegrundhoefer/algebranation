<?php get_header(); ?>
<div class="about">
<div class="wrap full">
	<div class="big-image">
		<div class="overlay">
			<div class="wrap">
				<h1>Students</h1>
				<h3>Here at Study Edge, we don't stop at just helping you prepare for exams,<br />
				we give you the tools and flexibility to be successful on your own terms.</h3>
			</div>
		</div>
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
	<div class="clear space mobile-padded"></div>
	<div class="col-40">
		<form class="form-horizontal" method="post" action="google-form-url">
			<div class="form-group no-float">
				<div class="col-40">
					<label for="name" class="control-label">Name</label>
				</div>
				<div class="col-55 ml-5" style="margin-bottom: 15px;" >
					<input type="text" class="form-control" />
				</div>
				<div class="col-40">
					<label for="name" class="control-label">Email</label>
				</div>
				<div class="col-55 ml-5" style="margin-bottom: 15px;" >
					<input type="text" class="form-control" />
				</div>
				<div class="clear"></div>
				<div class="col-40">
					<label for="name" class="control-label">Feedback</label>
				</div>
				<div class="col-55 ml-5" style="margin-bottom: 15px;">
					<textarea class="form-control" rows="5" id="comment" class="form-control"></textarea>
				</div>
				<div class="clear"></div>
			</div>
			<div class="form-group">
				<div class="col-70"></div>
				<div class="col-55" style="text-align: left">
					<input type="submit" class="btn blue" value="Send Feedback" style="margin: 0px auto;"/>
				</div>
			</div>
		</form>
	</div>
	<div class="col-55 ml-5">
		<h2>Feedback</h2>
		<p>Send us feedback using the form on the left.</p>
	</div>
	<div class="clear space mobile-hide"></div>
</div>
<div class="wrap full text-link mobile-hide">
	<div class="wrap">
		<div class="col-55">
			<h1>Get Our Mobile App</h1>
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
