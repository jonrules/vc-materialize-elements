<div class="vc-materialize-elements-posts-slider vc-materialize-elements-unslider <?php echo esc_attr( $class ); ?>" style="<?php if ( $background_color ) echo 'background-color:', esc_attr( $background_color ); ?>">
    <ul>
	<?php foreach ( $posts as $post ): ?>
        	<li style="<?php if ( $text_color ) echo 'color:', esc_attr( $text_color ); ?>"><?php echo $post->post_content; ?></li>
        <?php endforeach; ?>
    </ul>
</div>
