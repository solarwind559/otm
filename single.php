<?php get_header(); ?>
<main class="main-content">
  <div class="container">
    <?php if ( function_exists('yoast_breadcrumb') ) {
      $before = '<div class="breadcrumb-wrap"><p class="breadcrumbs">';
      $after = '</p></div>';
      yoast_breadcrumb( $before, $after);
    } ?>
    <div class="row">

      <div class="col-12 col-md-8">
        <section class="content">
          <?php get_template_part('loops/single-post', get_post_format()); ?>
        </section><!--/.content-->
      </div><!--/.col-->

      <div class="col-12 col-md-4">
        <?php get_sidebar(); ?>
      </div><!--/.col-->

    </div><!--/.row-->
  </div><!--/.container-->
</main>
<?php get_footer(); ?>
