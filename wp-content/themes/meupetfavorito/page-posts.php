<?php
/* Template Name: Página de Posts */
get_header();
?>

<section class="posts-list container">
  <h2>Últimas Postagens</h2>
  <div class="posts-grid">
    <?php
    $paged = get_query_var('paged') ? get_query_var('paged') : 1;
    $query = new WP_Query([
      'post_type' => 'post',
      'posts_per_page' => 9,
      'paged' => $paged,
      'post_category' => [get_cat_ID('formulario')],
    ]);

    if ($query->have_posts()):
      while ($query->have_posts()): $query->the_post(); ?>
        <article class="post-card">
          <a href="<?php the_permalink(); ?>">
            <?php if (has_post_thumbnail()): ?>
              <div class="thumb"><?php the_post_thumbnail('medium'); ?></div>
            <?php endif; ?>
            <h3><?php the_title(); ?></h3>
          </a>
        </article>
    <?php endwhile;

      the_posts_pagination([
        'mid_size'  => 2,
        'prev_text' => __('« Anterior'),
        'next_text' => __('Próximo »'),
      ]);

      wp_reset_postdata();
    else:
      echo '<p>Nenhuma postagem encontrada.</p>';
    endif;
    ?>
  </div>
</section>

<?php get_footer(); ?>