<?php get_header(); ?>
		<!-- <div class="callout large home-hero">
			<div class="row column text-center">
				<img src="<?php bloginfo('template_url'); ?>/assets/dest/img/welcome-el-segundo.png" alt="welcome to el segundo">
				<p class="lead">Lorem ipsum dolor sit amet.</p>
			</div>
		</div> -->

		<!-- Main Content -->
		<div class="row">
			
			<div class="large-9 push-3 columns" role="content">

			  <div class="row">
			    <div class="small-12 columns">
			      
			      <h3 class="subheader">News</h3>
			      
			        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			      
			      <article class="post">
			        <a href="<?php the_permalink(); ?>">

			          <?php the_post_thumbnail(); ?>
			        </a>

			        <div class="content">
			        <br>
			          <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			          <p>Written by <strong><?php the_author(); ?></strong></p>
			          <p><?php the_content(); ?></p>
			          <p>___</p>
			          <p><?php echo the_time('l, F jS, Y'); ?></p>
			        </div>
			      </article> 
			      
			    </div>
			  </div>
			<?php endwhile; else : ?>
				<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
			<?php endif; ?>
			  <hr />

			</div>
			<!-- Sidebar -->
			<br>
			<br>
			<aside class="large-3 pull-9 columns">
			  <h5>Categories</h5>
			  <ul class="no-bullet">
			    <li><a href="#">City</a></li>
			    <li><a href="#">School</a></li>
			    <li><a href="#">Beach</a></li>
			    <li><a href="#">Business</a></li>
			    <li><a href="#">Restaurants</a></li>
			  </ul>
			
			  <div class="panel">
			    <h5>Featured</h5>
			    <p>Pork drumstick turkey fugiat. Tri-tip elit turducken pork chop in. Swine short ribs meatball irure bacon nulla pork belly cupidatat meatloaf cow.</p>
			    <a href="#">Read More &rarr;</a>
			  </div>
			</aside>
			<!-- End Sidebar -->
		</div><!-- End of Main Content -->

	<?php get_footer(); ?>
