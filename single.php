<?php get_header(); ?>

<div id="main">
  
    <section id="articles_list">
   
  <?php if (have_posts ()) : while (have_posts ()) : the_post (); ?>
    <article>
      <div class="thumbpage"><a href="<?php the_permalink();?>">
          <?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'list_articles_page' ); } ?>
        </a></div>
          <hgroup><h3><a href="<?php the_permalink();?>"><?php the_title();?></a></h3></hgroup>
          <div class="extract"><?php the_content();?></div>
     </article>
  <?php endwhile; else: ?>
  <H1>no se encontraron artículos</H1>
  <?php endif; ?>
       <div id="comentarios">
      <h3>Comentarios</h3>
      <!-- Integracion con FB -->

  <div class="fb-comments" data-href="<?php echo the_permalink() ?>" data-colorscheme="light" data-numposts="5" data-width="100%"></div>
    </div>
    </section>
<?php get_sidebar(); ?>

<?php get_footer(); ?>
