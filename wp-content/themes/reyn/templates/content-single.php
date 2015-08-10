<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class(); ?>>
    <header>
      <p class="entry-meta text-center text-uppercase">
      <?php $cats = get_the_category(); 
        foreach ($cats as $cat){
          echo '<a class="entry-category" href="/category/'. $cat->slug . '">' . $cat->cat_name . '</a> '; 
        } ?>
        </p>
      <h1 class="entry-title"><?php the_title(); ?></h1>
      <?php get_template_part('templates/entry-meta'); ?>
    </header>
    <div class="entry-content">
      <?php the_content(); ?>
    </div>
    <?php //comments_template('/templates/comments.php'); ?>
  </article>
<?php endwhile; ?>
