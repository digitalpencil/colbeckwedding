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
		<div class="calendar-links">
			<p class="icon-heading"><i class="fa fa-calendar-plus-o" aria-hidden="true"></i><span>Save the date</span></p>
			<a href="<?php echo get_template_directory_uri(); ?>/downloads/colbeckwedding.ics" class="gold-btn gold-btn--style-a" download><i class="fa fa-apple" aria-hidden="true"></i><span>on iPhone</span></a>
			<a href="https://calendar.google.com/calendar/render?action=TEMPLATE&dates=20170507T120000/20170507T230000&location=Cranage%20Hall%20Byley%20Lane%2C%20Crewe%2C%20CW4%2C%20England&text=Stephen%20%26%20Rosin%27s%20Wedding&details=http%3A%2F%2Fwww.colbeckwedding.co.uk#eventpage_6" class="gold-btn gold-btn--style-a" target="_blank"><i class="fa fa-android" aria-hidden="true"></i><span>on Android</span></a>
		</div>
	</section>

	<section id="where" class="grid-80 prefix-10 suffix-10">
		<h2>Where</h2>
		<div class="grid-50">
			<p class="location-heading"><strong>Ceremony</strong></p>
			<p>7th May 2017, 12:00pm</p>
			<address>
			<strong>St Wilfrids RC Church</strong><br>
			Witton St<br>
			Northwich<br>
			CW9 5NP
			</address>
			<p><a class="icon-link" href="tel:01606 42440"><i class="fa fa-phone" aria-hidden="true"></i><span>01606 42440</span></a></p>
			<p><a class="icon-link" href="https://www.google.co.uk/search?q=st+wilfrids+northwich&oq=st+wilfrids+northwich&aqs=chrome.0.0l6.4284j0j1&sourceid=chrome&ie=UTF-8#q=st wilfrids northwich&tbs=lf:1,lf_ui:1,lf_pqs:EAE&safe=off&rflfq=1&rlha=0&rllag=53254797,-2517325,1078&tbm=lcl&rldimm=11037981811106679089" target="_blank"><i class="fa fa-map-marker" aria-hidden="true"></i><span>Get directions on google maps</span></a></p>
		</div>
		<div class="grid-50">
			<p class="location-heading"><strong>Reception</strong></p>
			<p>7th May 2017, 3:00pm</p>
			<address>
			<strong>Cranage Hall</strong><br>
			Byley Lane<br>
			Holmes Chapel<br>
			Cheshire<br>
			CW4 8EW
			</address>
			<p><a class="icon-link" href="tel:01477536666"><i class="fa fa-phone" aria-hidden="true"></i><span>01477 536 666</span></a></p>
			<p><a class="icon-link" href="https://www.google.co.uk/maps/place/Cranage+Hall/@53.2113432,-2.3781247,17z/data=!3m1!4b1!4m5!3m4!1s0x487a576a2d8d5733:0xcbdfd8fcc0048925!8m2!3d53.21134!4d-2.375936" target="_blank"><i class="fa fa-map-marker" aria-hidden="true"></i><span>Get directions on google maps</span></a></p>
		</div>
	</section>

	<section id="info" class="grid-80 prefix-10 suffix-10">
		<h2>Info</h2>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae neque perferendis asperiores quod praesentium temporibus corporis ducimus, illum beatae similique, impedit dignissimos earum officia ratione eligendi ipsa, hic possimus facilis.</p>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae neque perferendis asperiores quod praesentium temporibus corporis ducimus, illum beatae similique, impedit dignissimos earum officia ratione eligendi ipsa, hic possimus facilis.</p>
	</section>

	<section id="gifts" class="grid-80 prefix-10 suffix-10">
		<h2>Gifts</h2>
		<p>Your presence is gift enough but should you feel obliged, we're very much looking forward to our honeymoon so any contribution towards that is sincerely appreciated!</p>
	</section>

	<section id="rsvp" class="grid-100">
		<h2>RSVP</h2>
		<div class="grid-90 prefix-5 suffix-5">
			<p><a class="icon-link" href="tel:07702160952"><i class="fa fa-phone" aria-hidden="true"></i><span>Colbeck - 07702160952</span></a>&nbsp;&nbsp;|&nbsp;&nbsp;<a class="icon-link" href="tel:07442808066"><i class="fa fa-phone" aria-hidden="true"></i><span>Bostock - 07442808066</span></a></p>
		</div>
		<div class="form-container grid-70 prefix-15 suffix-15">
			<?php echo do_shortcode('[contact-form-7 id="4" title="RSVP"]'); ?>
		</div>
	</section>

</article>