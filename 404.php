<?php get_header(); ?>
<div id="page-<?php echo get_the_ID();?>-content" class="page-content">
   <?php if ( is_content_restricted() ) :  ?>
      <h1>You must login to see this page.</h1>
      <p>The Old Student website contains information regarding group-sittings with other meditators in your area, old-student courses, dhamma service, dāna, and center development. Please feel free to <a href="mailto:webmaster@dhara.dhamma.org">email the webmaster</a> or <a href="/contact/">contact us</a> if you’re an old student and have forgotten the login information.</p>

      <p>If you haven't yet attended a ten-day course in this tradition, please view <a href="/">our home page</a> or the <a target="_blank" href="https://www.dhamma.org/">International Vipassana page</a> for more information on sitting a ten-day course.
      </p>

      <div id="login-section-404">
         <h2>Login</h2>
         <?php wp_login_form () ?>
      </div>
   <?php else: ?>
      <h1>Page Not Found</h1>
      We're sorry, there is no page at this address.  We have been doing some construction lately, so the page may have been moved.
      <br />
		<br />
      <p>
         <strong>You could</strong>: 
         <ul id="options-404">
            <li>Go to the <a href="<?php get_home_url();?>/">home page</a>.</li>
            <li><a href="/about/the-center/">Read about Dhamma Dharā</a>.</li>
            <li><a href="/courses/what-to-expect/">Read What to Expect on a Course at Dhamma Dharā</a>.</li>
            <li><a href="/about/vipassana/">Read About Vipassana</a>.</li>
            <li><a href="<?php echo get_theme_mod( 'dhamma_schedule_link' ); ?>">Apply</a> to sit or serve a course.</li>
				<?php if ( is_user_logged_in() ): ?>
					<li>Find a regular <a href="<?php get_home_url();?>/os/regions/group-sittings/">Group Sitting</a> in your area. </li>
					<li>Read some <a href="<?php get_home_url(); ?>/category/all-news/">Recent News</a>.</li>
					<li>Read about the <a href="<?php get_home_url();?>/center-development/master-plan/">development history</a> of the center. 
				<?php endif; ?>
            <li>Use the Navigation Menu above to browse.</li>
            <li>Search to find the page you came looking for:<span id="search-404"><?php get_search_form(); ?></span></li>
         </ul>
      </p>
      
   <?php endif; ?>
</div>

<?php get_footer(); ?>
