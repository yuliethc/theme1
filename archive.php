<?php get_header(); ?>

<div id="main">
   
    <section id="articles_list">
    <?php query_posts("paged=$paged"); ?>
  <?php if (have_posts ()) : while (have_posts ()) : the_post (); ?>
    <article>
      <div class="thumb"><a href="<?php the_permalink();?>">
          <?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'list_articles_thumbs' ); } ?>
        </a></div>
          <hgroup><h3><a href="<?php the_permalink();?>"><?php the_title();?></a></h3></hgroup>
          <div class="extract"><?php the_excerpt();?></div>
     </article>
  <?php endwhile; else: ?>
  <H1>no se encontraron artículos</H1>
  <?php endif; ?>
       <div role="button" id="pagination">
          <p>
          <span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span> 
             <?php previous_posts_link('Post Anteriores')?>
             <?php next_posts_link('Post Siguientes')?>
          <span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span>
          </p>  
        </div>
    </section>
<?php get_sidebar(); ?>

<?php get_footer(); ?>
