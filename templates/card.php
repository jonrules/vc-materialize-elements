<div class="card <?php echo esc_html( $size ); ?> <?php echo esc_html( $class ); ?>">
	<?php if ( $image ) : ?>
		<div class="card-image waves-effect waves-block waves-light <?php echo esc_html( $image_class ); ?>">
			<img src="<?php echo wp_get_attachment_url( $image ); ?>" class="activator" />
			<?php if ( $image_title ): ?>
				<span class="card-title activator <?php if ( $image_title_text_shadow == 'yes' ) echo 'text-shadow'; ?>" style="<?php if ( $image_title_color ) echo 'color:' . $image_title_color; ?>"><?php echo esc_html( $image_title ); ?></span>
			<?php endif; ?>
		</div>
	<?php elseif ( $video_url ): ?>
		<?php $video_url_parts = parse_url( $video_url ); ?>
		<?php $video_url_query_params = array(); ?>
		<?php parse_str( $video_url_parts['query'], $video_url_query_params ); ?>
		<div class="card-image waves-effect waves-block waves-light">
			<?php if ( strpos( $video_url_parts['host'], 'vimeo' ) !== false ): ?>
				<iframe src="https://player.vimeo.com/video<?php echo esc_html( $video_url_parts['path'] ); ?>" width="100%" height="360" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
			<?php else: ?>
				<iframe id="ytplayer" type="text/html" width="100%" height="360"
  src="http://www.youtube.com/embed/<?php echo esc_html( $video_url_query_params['v'] ); ?>?autoplay=0"
  frameborder="0"></iframe>
			<?php endif; ?>
		</div>
	<?php endif; ?>
	<div class="card-content <?php echo esc_html( $content_class ); ?>" style="<?php if ( $content_color ) echo 'color:' . $content_color; ?>">
		<div class="card-excerpt"><?php echo $excerpt; ?> <a href="javascript:;" class="card-show-more activator">Show more</a></div>
	</div>
	<div class="card-reveal <?php echo esc_html( $reveal_class ); ?>" style="<?php if ( $reveal_color ) echo 'color:' . $reveal_color; ?>">
		<span class="card-title" style="<?php if ( $title_color ) echo 'color:' . $title_color; ?>"><?php echo esc_html( $title ); ?> <i class="mdi-navigation-close right"></i></span>
		<?php echo wpautop( $content ); ?>
        </div>
</div>
