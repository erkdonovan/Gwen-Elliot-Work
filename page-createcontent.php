<?php /* Template Name: Media Magnet One on One */ ?>

<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title><?php wp_title(''); ?></title>

    <!-- FAV ICON -->
    <link type="image/png" href="http://gwenelliot.com/wp-content/uploads/2015/07/favicon.png" rel="icon">

    <meta name="viewport"      content="width=device-width, initial-scale=1.0">
    
    <!-- <link rel="icon" href="<?php bloginfo('template_url'); ?>/assets/images/apple-touch-icon.png"> -->
    <!-- <link rel="apple-touch-icon" href="<?php bloginfo('template_url'); ?>/assets/images/apple-touch-icon.png"> -->

    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/vendor/flexslider.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/vendor/animate.min.css">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">

    <!-- FONT -->
    <link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

    <script src="<?php bloginfo('template_url'); ?>/assets/js/vendor/modernizr.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="<?php bloginfo('stylesheet_directory');?>/js/scripts.js"></script>
    <?php wp_head(); ?>


</head>
<body <?php echo('id="'.get_body_id().'"' )?> data-docroot="<?php bloginfo('url'); ?>">

<!-- ACTUAL PAGE -->

	<div id="createcontent" class="quote-slider container-fluid no-padding text-center header-image" style="background-image: url('<?php the_field('header_image'); ?>');">
		<div class="container-fluid no-padding text-center media-section">
		  	<div class="header-text">
		  		<img src="<?php the_field('header_gold_text_image'); ?>">
				<?php the_field('top_header_content'); ?>
				<p class="pink-arrow">&#8744;</p>
			</div>
		</div>
	</div>

	<div class="container-fluid no-padding text-center media-section">
	  	<div class="container">
			<?php the_field('main_content_text'); ?>
		</div>
	</div>

<div class="gwen-photo-text grey-bg">

	<div class="no-padding gwen-bg-photo">
		<img src="<?php the_field('about_photo'); ?>">
	</div>

	<div class="container-fluid no-padding media-section">
	  	<div class="container gwen-bg-text">
			<?php the_field('about_text'); ?>
			<div class="company-logos"> 
				<?php if( have_rows('about_company_logos') ): ?>

				<?php while( have_rows('about_company_logos') ): the_row(); 

		// vars
				$image = get_sub_field('logos');

				?>

				<img class="media-company-logos" src="<?php echo $image; ?>">

				<?php endwhile; ?>

			<?php endif; ?>
			
			</div>
		</div>
	</div>
</div>

	<div class="container-fluid no-padding teal-bg">
		<div class="container media-section">

			<?php if( have_rows('testimonials') ): ?>
				<?php $count=0; ?>
			<ul class="slides">

				<?php while( have_rows('testimonials') && $count < 2 ): the_row();
				++$count;


		// vars
				$image = get_sub_field('testimonial_photo');
				$quote = get_sub_field('testimonial_quote');
				$name = get_sub_field('testimonial_name');
				$title = get_sub_field('testimonial_title');

				?>

				<li class="slide">

				<div class="tests">
					<div class="test-img">
						<img src="<?php echo $image; ?>">
					</div>
						<div class="quote-icons quote-icons-left">&#x0201C;</div>
					<div class="test-quote">
						<p class="font-lora"><?php echo $quote; ?></p>
						<p><strong><?php echo $name; ?></strong></p>
						<p><?php echo $title; ?></p>
					</div>
						<div class="quote-icons quote-icons-right">&#x0201D;</div>
				</div>

				</li>

				<?php endwhile; ?>

			</ul>

			<?php endif; ?>

		</div>
	</div>

	<div class="container-fluid no-padding"> <!-- ADD REAPTER -->
	  	<div class="container">
			<h2 class="lorabold-h2"><?php the_field('box_section_title'); ?></h2>

			<?php if( have_rows('box_section_repeater') ): ?>

				<?php while( have_rows('box_section_repeater') ): the_row(); 

		// vars
				$step = get_sub_field('box_section_no');
				$icon = get_sub_field('box_section_icon');
				$text = get_sub_field('box_section_content');

				?>

				<div class="grey-square grey-bg">
					<h2><?php echo $step; ?></h2>
					<img src="<?php echo $icon; ?>">
					<?php echo $text; ?>

				</div>

				<?php endwhile; ?>

			<?php endif; ?>

		</div>
	</div>

	<div class="container-fluid no-padding teal-bg">
		<div class="container media-section">

			<?php if( have_rows('testimonials') ): ?>

			<ul class="slides">

				<?php while( have_rows('testimonials') ): the_row();
			


		// vars
				$image = get_sub_field('testimonial_photo');
				$quote = get_sub_field('testimonial_quote');
				$name = get_sub_field('testimonial_name');
				$title = get_sub_field('testimonial_title');

				?>

				<li class="slide">

				<div class="tests">
					<div class="test-img">
						<img src="<?php echo $image; ?>">
					</div>
						<div class="quote-icons quote-icons-left">&#x0201C;</div>
					<div class="test-quote">
						<p class="font-lora"><?php echo $quote; ?></p>
						<p><strong><?php echo $name; ?></strong></p>
						<p><?php echo $title; ?></p>
					</div>
						<div class="quote-icons quote-icons-right">&#x0201D;</div>
				</div>

				</li>

				<?php endwhile; ?>

			</ul>

			<?php endif; ?>

		</div>
	</div>

	<div class="container-fluid no-padding purple-bg text-center">
	  	<div class="container media-section"> 
			<?php the_field('purple_band_text'); ?>
		</div>
	</div>

	<div class="prism-bg">
		<img src="<?php the_field('prism_image'); ?>">
	</div>

<div class="container-fluid no-padding black-out-bullets">
	<div>
	  	<div class="container media-bullets media-section">
			<?php the_field('gold_star_header'); ?>

			<?php if( have_rows('gold_star_bullets') ): ?>

			<ul class="slides">

				<?php while( have_rows('gold_star_bullets') ): the_row(); 

		// vars
				$bullet = get_sub_field('bullet_point');

				?>

				<li class="slide">

				<?php echo $bullet; ?>

				</li>

				<?php endwhile; ?>

			</ul>

			<?php endif; ?>

		</div>
	</div>


	<div class="black-out-photo" style="background-image: url('<?php the_field('gold_star_background_image'); ?>')">
		<div class="black-out">
		  	<div class="container media-section">
				<div class="black-out-img">
					<img src="<?php the_field('gold_bonus_icon'); ?>">
				</div>
				<div class="black-out-text">
				<?php the_field('gold_star_right_text'); ?>
				</div>
			</div>
		</div>
	</div>
</div>

	<div class="container-fluid no-padding dark-teal-bg">
	  	<div class="container bottom-signup">
			<h2><?php the_field('green_bar_header'); ?> <?php the_field('green_bar_cost'); ?></h2>
			<p><?php the_field('green_bar_text'); ?></p>
			<a href="<?php the_field('green_bar_link'); ?>"><?php the_field('green_bar_button_text'); ?></a>
		</div>
	</div>

	<div class="container-fluid no-padding">
	  	<div class="container media-faqs"> 
			<h2><?php the_field('faq_header'); ?></h2>
			<?php if( have_rows('faq_repeater') ): ?>

			<ul class="slides">

				<?php while( have_rows('faq_repeater') ): the_row(); 

		// vars
				$question = get_sub_field('question');
				$answer = get_sub_field('answer');

				?>

					<li><strong><?php echo $question; ?></strong></li>
					<li><?php echo $answer; ?></li>

				<?php endwhile; ?>

			</ul>

			<?php endif; ?>
			<?php the_field('faq_email_line'); ?> <a href="mailto:<?php the_field('faq_email'); ?>"><?php the_field('faq_email'); ?></a>!
		</div>
	</div>

	<div class="container-fluid no-padding grey-bg">
	  	<div class="container bottom-text-area">
			<img src="<?php the_field('bottom_section_photo'); ?>">
			<h2><?php the_field('bottom_section_headline'); ?></h2>
			<a href="<?php the_field('bottom_section_link'); ?>"><?php the_field('bottom_section_link_text'); ?></a>
		</div>
	</div>

<!-- FOOTER -->
    <!-- TODO: Create a Grunt task to merge/compress the following to ~/plugins.js: -->
    <script src="<?php bloginfo('template_url'); ?>/assets/js/vendor/jQuery/jquery-ui.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/assets/js/vendor/jQuery/jquery.easing.1.3.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/assets/js/vendor/jQuery/jquery.flexslider-min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/assets/js/vendor/jQuery/jquery.waypoints.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/assets/js/vendor/jQuery/jquery.validate.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>


    <!-- TODO: Create a Grunt task to merge/compress the following to ~/gwenelliot.js: -->
    <script src="<?php bloginfo('template_url'); ?>/assets/js/gwenelliot/application.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/assets/js/gwenelliot/display/common/footer.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/assets/js/gwenelliot/display/common/header.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/assets/js/gwenelliot/forms/opt-in.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/assets/js/gwenelliot/forms/opt-in-modal.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/assets/js/gwenelliot/display/animation/waypoints.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/assets/js/gwenelliot/utils/jquery-browser-detection.js"></script>

    <?php wp_footer(); ?>

    <script type="text/javascript">window.twttr=(function(d,s,id){var t,js,fjs=d.getElementsByTagName(s)[0];if(d.getElementById(id)){return}js=d.createElement(s);js.id=id;js.src="https://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);return window.twttr||(t={_e:[],ready:function(f){t._e.push(f)}})}(document,"script","twitter-wjs"));</script>

    <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-57288600-1', 'auto');
    ga('send', 'pageview');
    </script>
    <!-- Twitter share script from Alex -->
    <script>
    var pageUrl = window.location.href;
    var twitterLink = document.getElementById('ruthssharebutton').href;
    var fullLink = twitterLink + '&text=' + document.title + ' ' + pageUrl;
    //set the link to point at the new URL
    document.getElementById('ruthssharebutton').setAttribute('href', fullLink);
    </script>
    <!-- FB share script from Alex -->
    <script>
    var pageUrl = window.location.href;
    var fbLink = document.getElementById('ruthsfbsharebutton').href;
    var fullFbLink = fbLink + pageUrl;
    //set the link to point at the new URL
    document.getElementById('ruthsfbsharebutton').setAttribute('href', fullFbLink);
    </script>

</body>
</html>