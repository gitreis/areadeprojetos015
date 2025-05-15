<body container-fluid>
  <?php get_template_part('/parts/header'); ?>
  <?php get_template_part('/parts/hero'); ?>
  <?php
  if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST['post_title']) && !empty($_POST['post_content'])) {
    $post_data = [
      'post_title'    => sanitize_text_field($_POST['post_title']),
      'post_content'  => wp_kses_post($_POST['post_content']),
      'post_status'   => 'publish',
      'post_author'   => get_current_user_id(),
      'post_type'     => 'post'
    ];
    $post_id = wp_insert_post($post_data);
    if ($post_id && !empty($_FILES['featured_image']['name'])) {
      require_once(ABSPATH . 'wp-admin/includes/image.php');
      require_once(ABSPATH . 'wp-admin/includes/file.php');
      require_once(ABSPATH . 'wp-admin/includes/media.php');
      $attach_id = media_handle_upload('featured_image', $post_id);
      if (!is_wp_error($attach_id)) {
        set_post_thumbnail($post_id, $attach_id);
      }
    }
    echo '<p>Postagem criada com sucesso!</p>';
  }
  ?>
  <form method="POST" enctype="multipart/form-data" class="post-form">
    <h2 class="titulo-cadastro">Cadastre seu pet favorito.</h2>
    <p class="dica">Preencha os campos abaixo para criar uma nova postagem.</p>
    <label for="post_title">Título:</label>
    <input type="text" name="post_title" id="post_title" required>

    <label for="post_content">Conteúdo:</label>
    <textarea name="post_content" id="post_content" required></textarea>

    <label for="featured_image">Imagem Destacada:</label>
    <input type="file" name="featured_image" id="featured_image" accept="image/*" required>

    <button type="submit">Publicar Postagem</button>
  </form>
  <?php wp_footer(); ?>
  <?php get_template_part('/parts/footer'); ?>
</body>