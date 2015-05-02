<div class="card blue-grey darken-1">
	<?php if ( $image_url ) : ?>
		<div class="card-image waves-effect waves-block waves-light">
			<img src="<?php echo esc_html( $image_url ); ?>" />
			<?php if ( $image_title ): ?>
				<span class="card-title"><?php echo esc_html( $image_title ); ?></span>
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
	<div class="card-content white-text">
		<span class="card-title activator"><?php echo esc_html( $title ); ?></span>
		<?php echo wpautop( $content ); ?>
	</div>
	<div class="card-reveal">
          <span class="card-title"><?php echo esc_html( $title ); ?> <i class="mdi-navigation-close right"></i></span>
		<?php echo wpautop( $content ); ?>
        </div>
	<div class="card-action">
		<a href="#">This is a link</a>
		<a href='#'>This is a link</a>
	</div>
</div>
