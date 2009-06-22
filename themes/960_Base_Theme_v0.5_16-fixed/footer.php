<?php
/*
 * Theme Name: 960 Base Theme
 * Theme URI: http://960basetheme.kiuz.it
 * Description: Wordpress theme based on 960 Grid System
 * Author: Domenico Monaco
 * Author URI: http://www.kiuz.it
 * Version: 0.1
 */
?>

</div><!-- end #container -->

<div class="clear">&nbsp;</div>

<div id="siderbar0.1" class="footer-widget grid_6">
	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer Sidebar 0.1') ) : ?><?php endif; ?>   
</div>

<div id="siderbar0.2" class="footer-widget grid_5">
	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer Sidebar 0.2') ) : ?><?php endif; ?>   
</div>

<div id="siderbar0.3" class="footer-widget grid_5">
	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer Sidebar 0.3') ) : ?><?php endif; ?>   
</div>

<div id="siderbar0.4" class="footer-widget grid_16">
	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer Sidebar 0.4') ) : ?><?php endif; ?>   
</div>
        
<div class="clear">&nbsp;</div>

<div class="grid_16" id="site_info">
	<div class="box"><p><b><a href="http://960basetheme.kiuz.it">960 Base Theme</a></b> &middot; Author <b>Domenico M.</b> <a href="http://www.kiuz.it">Kiuz</a> | <a href="http://www.kiuz.it">http://www.kiuz.it</a>
<br /><b>Based on</b> Fluid 960 Grid System - Special Thanks to Original 960 Grid System.</p>
	</div>
</div>

<!-- END footer -->

<div class="clear">&nbsp;</div>

</div><!-- end #wrapper -->

<?php wp_footer(); ?>

</body>
</html>
