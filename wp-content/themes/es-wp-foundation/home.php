<?php get_header(); ?>

		<div class="callout large home-hero">
			<div class="row column text-center">
				<img src="<?php bloginfo('template_url'); ?>/assets/dest/img/welcome-el-segundo.png" alt="welcome to el segundo">
				<p class="lead">Lorem ipsum dolor sit amet.</p>
			</div>
		</div>

		<!-- Main Content -->
		<div class="row">
			
			<div class="large-9 push-3 columns" role="content">

			  <div class="row">
			    <div class="small-12 columns">
			      
			      <h3 class="subheader">Latest News</h3>
			      
			        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			      
			      <article class="post">
			        <a href="<?php the_permalink(); ?>">

			          <?php the_post_thumbnail(); ?>
			        </a>


			        <div class="content">
			          <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			          <p>Written by <strong><?php the_author(); ?></strong> <span class="verified"></span></p>
			          <p><?php the_excerpt(); ?></p>
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

				<!-- Calendar -->
				<div class="large-3 pull-9 columns ">
				<h3 class="subheader">Calendar</h3>
				  <div class="calendar">
					<div class="month">
					  <a href="#" class="back"></a>
					  <a href="#" class="next"></a>
					  <h5>June</h5>
					  <p>2016</p>
					</div>
					<ul class="weekdays">
					  <li><span href="#">Sun</span></li>
					  <li><span href="#">Mon</span></li>
					  <li><span href="#">Tue</span></li>
					  <li><span href="#">Wed</span></li>
					  <li><span href="#">Thu</span></li>
					  <li><span href="#">Fri</span></li>
					  <li><span href="#">Sat</span></li>
					</ul>
					<ul>
					  <li><a href="#">1</a></li>
					  <li><a href="#">2</a></li>
					  <li><a href="#">3</a></li>
					  <li><a href="#">4</a></li>
					  <li><a href="#">5</a></li>
					  <li><a href="#">6</a></li>
					  <li><a href="#">7</a></li>
					  <li><a href="#">8</a></li>
					  <li><a href="#">9</a></li>
					  <li><a href="#">10</a></li>
					  <li><a href="#" class="active">11</a></li>
					  <li><a href="#">12</a></li>
					  <li><a href="#">13</a></li>
					  <li><a href="#">14</a></li>
					  <li><a href="#">15</a></li>
					  <li><a href="#">16</a></li>
					  <li><a href="#">17</a></li>
					  <li><a href="#">18</a></li>
					  <li><a href="#">19</a></li>
					  <li><a href="#">20</a></li>
					  <li><a href="#">21</a></li>
					  <li><a href="#">22</a></li>
					  <li><a href="#">23</a></li>
					  <li><a href="#">24</a></li>
					  <li><a href="#">25</a></li>
					  <li><a href="#">26</a></li>
					  <li><a href="#">27</a></li>
					  <li><a href="#">28</a></li>
					  <li><a href="#">29</a></li>
					  <li><a href="#">30</a></li>
					</ul>
				  </div>
				</div><!-- End Calendar -->

				<!-- Event Listing -->
				<div class="large-3 pull-9 columns">
				<hr />
				<h3 class="subheader">City Events</h3>
				  <article class="event">

					  <div class="event-date">
						<p class="event-month">June</p>
						<p class="event-day">12</p>
					  </div>

					  <div class="event-desc">
						<h5 class="event-desc-header">16th Annual Author Fair</h5>
						<p class="event-desc-detail"><span class="event-desc-time"></span>El Segundo High School</p>
						<a href="http://bdconf.com/speakers/brandon-arnold/" class="rsvp button">More Details</a>
					  </div>

					</article>

					<article class="event">

					  <div class="event-date">
						<p class="event-month">June</p>
						<p class="event-day">15</p>
					  </div>

					  <div class="event-desc">
						<h5 class="event-desc-header">Parks & Recs Meeting</h5>
						<p class="event-desc-detail"><span class="event-desc-time"></span>El Segundo Public Library</p>
						<a href="http://bdconf.com/speakers/brandon-arnold/" class="rsvp button">More Details</a>
					  </div>

					</article>
				</div><!-- End Event Listing -->
		</div><!-- End of Main Content -->

		<hr>

		<div class="row">
			<div class="medium-4 columns">
				<h3>Headline</h3>
				<p>Vivamus luctus urna sed urna ultricies ac tempor dui sagittis. In condimentum facilisis porta. Sed nec diam eu diam mattis viverra. Nulla fringilla, orci ac euismod semper, magna.</p>
			</div>
			<div class="medium-4 columns">
				<h3>Headline</h3>
				<p>Vivamus luctus urna sed urna ultricies ac tempor dui sagittis. In condimentum facilisis porta. Sed nec diam eu diam mattis viverra. Nulla fringilla, orci ac euismod semper, magna.</p>
			</div>
			<div class="medium-4 columns">
				<h3>Headline</h3>
				<p>Vivamus luctus urna sed urna ultricies ac tempor dui sagittis. In condimentum facilisis porta. Sed nec diam eu diam mattis viverra. Nulla fringilla, orci ac euismod semper, magna.</p>
			</div>
		</div>

		<hr>

		<div class="row column">
			<ul class="vertical medium-horizontal menu expanded text-center">
				<li>
					<a href="#">
						<div class="stat">28</div><span>Visitor</span></a>
				</li>
				<li>
					<a href="#">
						<div class="stat">43</div><span>Services</span></a>
				</li>
				<li>
					<a href="#">
						<div class="stat">95</div><span>Resident</span></a>
				</li>
				<li>
					<a href="#">
						<div class="stat">59</div><span>Business</span></a>
				</li>
				<li>
					<a href="#">
						<div class="stat">18</div><span>Government</span></a>
				</li>
			</ul>
		</div>

	<?php get_footer(); ?>
