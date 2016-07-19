<?php
if (is_front_page()){
if (
    strpos($_SERVER["HTTP_USER_AGENT"], "facebookexternalhit/") !== false ||          
    strpos($_SERVER["HTTP_USER_AGENT"], "Facebot") !== false ||
    strpos($_SERVER["HTTP_USER_AGENT"], "Googlebot") !== false
) {
    // it is probably Facebook's bot
	
}
else {
	$a=array();
	$randPosts = new WP_Query();
	$randPosts->query('showposts=5&orderby=rand');
	while($randPosts->have_posts()) : $randPosts->the_post();
		array_push($a, get_permalink());
	endwhile;
	$c=rand(0,count($b)-1);
 header('Location: '.$a[$c]);
	}
}
?>
