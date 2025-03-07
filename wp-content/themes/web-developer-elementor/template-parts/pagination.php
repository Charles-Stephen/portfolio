<?php if(get_theme_mod('web_developer_elementor_show_pagination', true )== true): ?>
	<?php
		the_posts_pagination( array(
			'prev_text' => esc_html__( 'Previous page', 'web-developer-elementor' ),
			'next_text' => esc_html__( 'Next page', 'web-developer-elementor' ),
		) );
	?>		
<?php endif; ?>