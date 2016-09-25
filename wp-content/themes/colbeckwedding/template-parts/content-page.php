<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Colbeck_Wedding
 */

?>

<article>
	<section id="when" class="grid-70 prefix-15 suffix-15">
		<h2>When</h2>
		<p class="large">The seventh of may two <br>thousand and seventeen</p>
		<p><a class="icon-link" href="#"><i class="fa fa-calendar-plus-o" aria-hidden="true"></i><span>Save the date to your phone</span></a></p>
	</section>

	<section id="where" class="grid-80 prefix-10 suffix-10">
		<h2>Where</h2>
		<div class="grid-50">
			<p class="location-heading"><strong>Ceremony</strong></p>
			<address>
			<strong>Cranage Hall</strong><br>
			Byley Lane<br>
			Holmes Chapel<br>
			Cheshire<br>
			CW4 8EW
			</address>
			<p><a class="icon-link" href="tel:01477536666"><i class="fa fa-phone" aria-hidden="true"></i><span>01477 536 666</span></a></p>
			<p><a class="icon-link" href="#"><i class="fa fa-map-marker" aria-hidden="true"></i><span>Get directions on google maps</span></a></p>
		</div>
		<div class="grid-50">
			<p class="location-heading"><strong>Reception</strong></p>
			<address>
			<strong>St Wilfred's Church</strong><br>
			Byley Lane<br>
			Holmes Chapel<br>
			Cheshire<br>
			CW4 8EW
			</address>
			<p><a class="icon-link" href="tel:01477536666"><i class="fa fa-phone" aria-hidden="true"></i><span>01477 536 666</span></a></p>
			<p><a class="icon-link" href="#"><i class="fa fa-map-marker" aria-hidden="true"></i><span>Get directions on google maps</span></a></p>
		</div>
	</section>

	<section id="info" class="grid-80 prefix-10 suffix-10">
		<h2>Info</h2>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae neque perferendis asperiores quod praesentium temporibus corporis ducimus, illum beatae similique, impedit dignissimos earum officia ratione eligendi ipsa, hic possimus facilis.</p>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae neque perferendis asperiores quod praesentium temporibus corporis ducimus, illum beatae similique, impedit dignissimos earum officia ratione eligendi ipsa, hic possimus facilis.</p>
	</section>

	<section id="gifts" class="grid-80 prefix-10 suffix-10">
		<h2>Gifts</h2>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae neque perferendis asperiores quod praesentium temporibus corporis ducimus, illum beatae similique, impedit dignissimos earum officia ratione eligendi ipsa, hic possimus facilis.</p>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae neque perferendis asperiores quod praesentium temporibus corporis ducimus, illum beatae similique, impedit dignissimos earum officia ratione eligendi ipsa, hic possimus facilis.</p>
	</section>

	<section id="rsvp" class="grid-100">
		<h2>RSVP</h2>
		<div class="grid-90 prefix-5 suffix-5">
			<p><a class="icon-link" href="tel:07702160952"><i class="fa fa-phone" aria-hidden="true"></i><span>Colbeck - 07702160952</span></a> | <a class="icon-link" href="tel:07442808066"><i class="fa fa-phone" aria-hidden="true"></i><span>Bostock - 07442808066</span></a></p>
		</div>
		<div class="form-container grid-70 prefix-15 suffix-15">
			<?php echo do_shortcode('[contact-form-7 id="4" title="RSVP"]'); ?>
		</div>
	</section>

</article>