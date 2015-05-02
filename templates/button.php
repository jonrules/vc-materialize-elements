<a class="waves-effect waves-light <?php echo ( $type ) ? "btn-{$type}" : 'btn'; ?> <?php echo $class; ?>" <?php echo ( $url ) ? 'href="' . esc_html( $url ) . '"' : ''; ?>><?php 
	echo $content; 
?></a>
