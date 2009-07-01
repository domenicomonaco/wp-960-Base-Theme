<?php
/*
 * Theme Name: 960Base Theme SIMPLE
 * Theme URI: http://960basetheme.kiuz.it
 * Description: Wordpress theme based on 960 Grid System
 * Author: Domenico Monaco
 * Author URI: http://www.kiuz.it
 * Version: 1.0.0 BETA
 */
?>
</div><!-- end #container -->

<div class="clear">&nbsp;</div>

	<div id="content_bar" class="grid_5">
		<div id="content-region" class="content-widget">
			<?php	if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer Region 0') ) : ?><?php endif; ?> 
		</div><!-- END head-widget -->
	</div>

	<div id="content_bar" class="grid_5">
		<div id="content-region" class="content-widget">
			<?php	if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer Region 1') ) : ?><?php endif; ?> 
		</div><!-- END head-widget -->
	</div>

	<div id="content_bar" class="grid_6">
		<div id="content-region" class="content-widget">
			<?php	if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer Region 2') ) : ?><?php endif; ?> 
		</div><!-- END head-widget -->
	</div>

	<div id="content_bar" class="grid_16">
		<div id="content-region" class="content-widget">
			<?php	if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer Region 3') ) : ?><?php endif; ?> 
		</div><!-- END head-widget -->
	</div>


<div class="grid_16" id="site_info">
<div class="box"><p><b><a href="http://960basetheme.kiuz.it">960 Base Theme</a></b> &middot; Author <b>Domenico M.</b> <a href="http://www.kiuz.it">Kiuz</a> | <a href="http://www.kiuz.it">http://www.kiuz.it</a>
<br /><b>Based on</b> Fluid 960 Grid System - Special Thanks to Original 960 Grid System.</p>
</div>
</div>

<!-- END footer -->

<div class="clear">&nbsp;</div>

</div><!-- end #wrapper -->
		<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/mootools-1.2.1-core.js"></script>
		<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/mootools-1.2-more.js"></script>
		<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/mootools-fluid16-autoselect.js"></script>
</body>
</html>
