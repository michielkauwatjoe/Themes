<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */
?>

</div>
</div>


<?php wp_footer(); ?>

<div id="footerautoalign">
<div id="footer" role="contentinfo">
	<div id="column4">
	<h2>Categories</h2>
	<ul>
	<?php wp_list_categories('hierarchical=true&title_li='); ?>
	</ul>
	</div>

	<div id="column5">
	<h2>Archive</h2>
	<ul>
	<?php wp_get_archives(); ?>
	</ul>
	</div>

	<div id="column1">
	<h2>Pages</h2>
	<ul>
	<?php wp_list_pages('title_li='); ?>
	</ul>

	<?php get_sidebar(); ?>
	<p></p>
	<h2>Admin</h2>
	<div style="float: left">
	<ul>
	<?php wp_register(); ?>
	<?php wp_meta(); ?>
	<li><?php wp_loginout(); ?></li>
	</ul>
	</div>
	</div>

	<div id="column3">
	<h2>On the Web</h2>

	<div>
	<ul id="ontheweb">
	<li><a href="http://www.michielkauwatjoe.com/?feed=rss2">RSS</a></li>
	<li><a href="http://twitter.com/mwkauwatjoe">Twitter</a></li>
	<li><a href="http://www.flickr.com/michielkauwatjoe">Flickr</a></li>
	<li><a href="http://soundcloud.com/michielkauwatjoe">SoundCloud</a></li>
	<li><a href="http://www.mixcloud.com/scope/">MixCloud</a></li>
	<li><a href="http://www.discogs.com/user/al-khwarizmi">Discogs</a></li>
	<li><a href="https://www.github.com/michielkauwatjoe">Github</a></li>
	<li><a href="http://vimeo.com/user304853">Vimeo</a></li>
	<li><a href="http://nl.linkedin.com/in/michielkauwatjoe">LinkedIn</a></li>
	<li><a href="http://www.slideshare.net/michielkauwatjoe">Slideshare</a></li>
	<li><a href="http://stackoverflow.com/users/1966868/michiel-kauw-a-tjoe">Stack Overflow</a></li>
	</ul>

	<h2>Tipping Jar</h2>

	<ul id="ontheweb">
	<li>
	<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
	<input type="hidden" name="cmd" value="_s-xclick">
	<input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----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-----END PKCS7-----
	">
	<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donate_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
	<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
	</form></li>
	
	</ul>

	</div>
	</div>

</div>

<div id="footerchakra">
<img src="/wp-content/themes/michielkauwatjoe/images/sahasrara-chakra-footer.png"/>
</div>
</div>
</body>
</html>
