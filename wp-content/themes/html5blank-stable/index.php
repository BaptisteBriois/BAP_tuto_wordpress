<?php get_header(); ?>
<div class="wrapper">
	<main role="main">
		<!-- section -->
		<section>

			<h1><?php _e( 'Latest Posts', 'html5blank' ); ?></h1>

			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>

		</section>
		

		           <div class="wid"> 
		           	<a class="twitter-timeline"  href="https://twitter.com/hashtag/ChangementDheure" data-widget-id="792449639589044224">Tweets sur #ChangementDheure</a>
            <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
            </div>
          
		
		<!-- /section -->
	</main>
	</div>



<?php get_footer(); ?>
