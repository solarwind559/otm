<?php /* Template Name: Homepage */ ?>

<?php get_header(); ?>

<?php
  if( have_posts() ){
    while( have_posts() ){
      the_post();
      the_content();
    }
  }
?>

<?php include_once "template-parts/intro.php" ?>
<?php include_once "template-parts/about.php" ?>
<?php include_once "template-parts/contactus.php" ?>

<?php get_footer(); ?>