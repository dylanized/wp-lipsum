<div class="post">

	<h2><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit, vivamus bibendum elit id commodo suscipit</a></h2>
	
	<p class="post-meta">Posted by <span class="meta-author"><?php the_author_posts_link(); ?></span> on <span class="meta-date"><?php the_time(get_option('date_format')); ?></span></p>
	
	<?php display_lipsum_template('short') ?>		
	
</div>

<div class="post-nav">			
	<div class="alignright"><a href="#" title="">Next &#187;</a></div>	
	<div class="alignleft"><a href="#" title="">&#171; Previous</a></div>
</div>	

<?php display_lipsum_template('comments') ?>