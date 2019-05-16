<?php
/*
Template Name: solutions
*/
?>
<?php get_header(); ?>
<section class="bis">
    <div class="one_container_title">
        <h1 class="title_data">Data & Analytics</h1>
        <p>La transformation digitale se mène par la donnée. De la compréhension de vos données jusqu'aux utilisateurs finaux. Des plateformes analytiques traditionnelles et modernes à l'analyse en libre service et la Data Science. Nous vous guidons dans la définitions et l'implémentation de votre Data-driven strategy.</p>
        <img  class="kenburns-top " src="<?php echo get_bloginfo('template_url') ?>/assets/images/Asset1.svg" alt="logo">
    </div>
</section>

<section class="data_menu">
    <?php wp_nav_menu(array('menu_id' => 'menu_container','theme_location' => 'quatro' )); ?> 
</section>

<section class="data_solutions">
<div class="data_soltions_box">
    <div class="data_solutions_image">
     <img src="<?php echo get_bloginfo('template_url') ?>/assets/images/tunnel.png" alt="tunnel">
    </div>
    <div class="data_soltions_box_content">
        <h1 class="solutions_title">Performance Management</h1>
        <p>"Les entreprises manquent d'orientation stratégique, principalement parce qu'elles manquent de visibilité et de moyens solides de prévision." -Forrester</p>
        <button class="btn">Voir plus</button>
    </div>
</div>

<div class="data_soltions_box">
    <div class="data_solutions_image">
        <img src="<?php echo get_bloginfo('template_url') ?>/assets/images/nasa.jpg" alt="tunnel">
    </div>
    <div class="data_soltions_box_content">
        <h1 class="solutions_title">Self-service Analytics</h1>
        <p>"93% des utilisateurs métiers déclarent que les outils d’analyse pour préparer et utiliser les données ne sont pas adaptés à leurs besoins." -Havard Business Review</p>
        <button class="btn">Voir plus</button>
    </div>
</div>

<div class="data_soltions_box">
    <div class="data_solutions_image">
        <img src="<?php echo get_bloginfo('template_url') ?>/assets/images/workshop.png" alt="tunnel">
    </div>
    <div class="data_soltions_box_content">
        <h1 class="solutions_title">Migration Corporate Bl</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        <button class="btn">Voir plus</button>
    </div>
</div>
</section>

<section class="projet">
    <div class="projet_container">
        <h1>Partagez votre projet avec nous</h1>
        <button class="btn">Contactez-nous</button>
    </div>
</section>

<?php get_footer(); ?>