<?php

/*
Customizable variables

Card: color, opacity
Title: color, font, size
Headline: color, font, size
Bio: color, font, size
Background: image, color, center?
*/

header("Content-Type: text/css");

$front_page = get_option( 'page_on_front' );
$background_id = get_post_thumbnail_id( $front_page );
$background = wp_get_attachment_image_src( $background_id, 'full' );
$background_height = $background[2];

global $wp_admin_bar;
if ($wp_admin_bar) {
    $background_height -= 28;
}
?>

body.aboutme {
    background-color: #000;
    background-image: url(<?php echo $background[0] ?>);
    background-repeat: no-repeat;
    height:<?php echo $background_height ?>px;
    background-position: 50% 50%;
}

#card {
    background-color: rgba(100,100,100,0.3);
}

#name {
    color: #c13;
    font-family: Georgia;
    font-size: 81pt;
}

#headline {
    color: #eee;
    font-family: Georgia;
    font-size: 20pt;
}

#bio {
    color: #ccc;
    font-family: Georgia;
    font-size: 12pt;
}