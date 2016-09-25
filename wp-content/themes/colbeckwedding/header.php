<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Colbeck_Wedding
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<nav class="main-nav">
  <ul>
    <li><a href="#when">When</a></li>
    <li><a href="#where">Where</a></li>
    <li><a href="#info">Info</a></li>
    <li><a href="#gifts">Gifts</a></li>
    <li><a href="#rsvp">RSVP</a></li>
  </ul>
</nav>
<div id="page" class="site">
	<div class="outer-wrap">
		<div class="inner-wrap">

			<div id="content" class="site-content">
