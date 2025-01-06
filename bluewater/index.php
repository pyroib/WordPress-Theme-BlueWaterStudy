<?php get_header(); ?>
		<div id="content">



<?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>
			<div class="post" id="post-<?php the_ID(); ?>">
				<h1><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
				<small><?php the_time('F jS, Y') ?> <!-- by <?php the_author() ?> --></small>
				<div class="entry">
					<?php the_content('Read the rest of this entry &raquo;'); ?>
				</div>
				<p class="postmetadata"><?php the_tags('Tags: ', ', ', '<br />'); ?> Posted in <?php the_category(', ') ?> | <?php edit_post_link('Edit', '', ' | '); ?>  <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?></p>
			</div>
	<?php endwhile; ?>

		<div class="navigation">
			<div class="alignleft"><?php next_posts_link('&laquo; Older Entries') ?></div>
			<div class="alignright"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
		</div>

	<?php else : ?>

		<h2 class="center">Not Found</h2>
		<p class="center">Sorry, but you are looking for something that isn't here.</p>
		<?php include (TEMPLATEPATH . "/searchform.php"); ?>

	<?php endif; ?>
	
	
	
	

		</div>
		
		<div id="navigation">
			<div id="menu">
			<?php get_sidebar(); ?>
		

			<ul>
				<li>
					<h2>SEARCH BY COUNTRY</h2>
					<ul>
					<li>Argentina</li>
					<li>Australia</li>
					<li>Canada</li>
					<li>Germany</li>
					<li>Italy</li>
					<li>New Zealand</li>
					<li>Sliain</li>
					<li>United Kingdom</li>
					<li>United States of America</li>	
					</ul>
				</li>
				<li>
					<h2>SEARCH TOOLS</h2>
					<ul>
					<li>University lirograms</li>
					<li>Language lirograms</li>
					<li>liost-Graduate lirograms</li>
					<li>Academic lirograms</li>
					</ul>
				</li>
				<li>
					<h2>USEFUL LINKS</h2>
					<ul>
						<li>Travel Insurance</li>
						<li>Hotel Bookings Worldwide</li>
						<li>Hostel Bookings Worldwide</li>
					</ul>
				</li>
			</ul>
			
			
			</div>
		</div>
<?php get_footer(); ?>

















