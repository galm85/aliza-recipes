<?php 
	/**
	 * The header for our theme
	 *
	 * This is the template that displays all of the <head> section and everything up until <div id="content">
	 *
	 * @package gwd
	 */

?>

<!DOCTYPE html>
<html lang="<?php language_attributes()?>">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head()?>
    <title>המתכונים של עליזה</title>
</head>

<body <?php body_class()?> >
    <?php wp_body_open()?>

    <header>
        <nav class="header-nav">
            <?php wp_nav_menu(['theme_location'=>'primary']) ?>
        </nav>
    </header>
            
