<?php
/*
Plugin Name: TwittLink
Version: 0.2
Plugin URI: http://www.choiz.fr/twittlink
Description: Converts @choiz (or other twitter account) in Twitter's link. It's run in posts, pages and comments.
Author: ChoiZ
Author URI: http://www.choiz.fr/

Thanks to @Severin ;-)

Copyright 2009

Original Plugin Name: Twitter-link By: Joost de Valk - http://yoast.com/

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 2 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
*/

function twittlink($c) {
	$p	= '/([^a-zA-Z0-9])\@([a-zA-Z0-9_]+)/';
	$r	= '\1<a href="http://twitter.com/\2" rel="nofollow" target="_blank">@\2</a>\3';
	return preg_replace($p,$r,$c);
}
// add this function to blog content
add_filter('the_content','twittlink',10);
// add this function to blog comment
add_filter('comment_text','twittlink',10);
?>