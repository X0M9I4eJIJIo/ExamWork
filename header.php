<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Trulia
 */

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="<?= get_template_directory_uri() . 'assets/img/help-cards/neighborhoods.png'?>">
  <link rel="stylesheet" href="assets/css/style.css">
  <title>Trulia</title>
	<?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>
	<div class="wrapper">
<?php wp_body_open(); ?>
