<div class="banner">
    <h1>Photographe event</h1>
    <?php
    // Configuration des arguments pour récupérer un post de type 'photo' de manière aléatoire
    $args = array(
        'post_type' => 'photo',
        'posts_per_page' => 1,
        'orderby' => "rand",  // Tri aléatoire
    );
    // Création d'une nouvelle instance de WP_Query avec les arguments définis
    $query = new WP_Query($args);
    // Boucle à travers les posts récupérés
    while ($query->have_posts()) :
        $query->the_post();
        // Récupération de l'URL de la photo
        $photoUrl = get_field('photo'); ?>

        <img src="<?php echo esc_url($photoUrl); ?>" alt="<?php the_title_attribute(); ?>">
    <?php endwhile;

    // Réinitialisation des données de post après la boucle WP_Query
    wp_reset_postdata();
    ?>
</div>