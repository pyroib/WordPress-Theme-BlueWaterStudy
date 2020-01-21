<?php get_header(); ?>
		<div id="content">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<div class="post" id="post-<?php the_ID(); ?>">
					<h1><?php the_title(); ?></h1>
					<div class="entry">
						<?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>
		
						<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
		
					</div>
				</div>
			<?php endwhile; endif; ?>
			<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
		

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





