<section id="slideshow">
 

<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>

  </ol>
  <div class="carousel-inner" role="listbox">
     <?php if (have_posts ()) : the_post (); ?>

    <div class="item active">
        <a href="<?php the_permalink();?>"><?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'slider_thumbs' ); } ?></a>
        
      <div class="carousel-caption">
          <article>
          <hgroup> <h2><a id="serv" href="<?php the_permalink();?>"><?php the_title();?></a></h2></hgoup>
            <p id="textoslide"><?php the_excerpt();?></p>
          </article>
      </div>

    </div> 
    
<?php else: ?>
    <H1>no se encontraron artículos</H1>
    <?php endif; ?>
     <?php if (have_posts ()) : while (have_posts ()) : the_post (); ?>

    <div class="item">
        <a href="<?php the_permalink();?>"><?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'slider_thumbs' ); } ?></a>
        
      <div class="carousel-caption">
          <article>
          <hgroup> <h2><a id="serv" href="<?php the_permalink();?>"><?php the_title();?></a></h2></hgoup>
            <p id="textoslide"><?php the_excerpt();?></p>
          </article>
      </div>

    </div> 
    
<?php endwhile; endif; ?>
  </div>
<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

  
</section>