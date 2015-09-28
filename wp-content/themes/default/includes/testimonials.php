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
