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
       
    </section>
<?php get_sidebar(); ?>

<?php get_footer(); ?>