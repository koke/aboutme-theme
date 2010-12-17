<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<title><?php single_post_title( '' ) ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_directory' ); ?>/common.css" />
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'home' ); ?>/?aboutme_style=1" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<?php wp_head(); ?>
</head>
<body class="aboutme">
    <?php the_post(); ?>
    <section id='card'>
        <h1 id='name'><?php the_title() ?></h1>
        <h2 id='headline'><?php echo get_post_meta($post->ID, 'Headline', true) ?></h2>
        <div id='bio'><?php the_content(); ?></div>
    </section>
    <?php if ( current_user_can( 'edit-page' )): ?>
        <aside id='editor'>
            <ul id='menu'>
                <li id='tab-content'><a href="#content">Content</a></li>
                <li id='tab-bg'><a href="#bg">Background</a></li>
                <li id='tab-fonts'><a href="#fonts">Fonts</a></li>
                <li id='tab-colors'><a href="#colors">Colors</a></li>
            </ul>
            <div id='content' class='tab'>
                <h2>Content</h2>
            </div>
            <div id='bg' class='tab'>
                <h2>Background</h2>
            </div>
            <div id='fonts' class='tab'>
                <h2>Fonts</h2>
            </div>
            <div id='colors' class='tab'>
                <h2>Colors</h2>
            </div>
        </aside>
    <?php endif; ?>
    
    <?php wp_footer(); ?>
</body>
</html>