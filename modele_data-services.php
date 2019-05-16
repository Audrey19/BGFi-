<?php
/*
Template Name: services
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
    <div class="data_service_image">
     <img src="<?php echo get_bloginfo('template_url') ?>/assets/images/NYC.png" alt="tunnel">
    </div>
    <div class="data_service_box_content">
        <h1 class="service_title">Conseil</h1>
        <ul class="data_soltions_box_content_list">
            <li><img src="<?php echo get_bloginfo('template_url') ?>/assets/images/arrow-right.png" alt="arrow">Audit, analyse et définition d'architecture</li>
            <li><img src="<?php echo get_bloginfo('template_url') ?>/assets/images/arrow-right.png" alt="arrow">Méthodologie d'accompagnement de projets</li>
            <li><img src="<?php echo get_bloginfo('template_url') ?>/assets/images/arrow-right.png" alt="arrow">Formation et transfert de compétences</li>
        </ul>
        
    </div>
</div>

<div class="data_soltions_box">
    <div class="data_service_image">
        <img src="<?php echo get_bloginfo('template_url') ?>/assets/images/NYC.png" alt="tunnel">
    </div>
    <div class="data_service_box_content">
        <h1 class="service_title">Analytics Factory</h1>
        <ul class="data_soltions_box_content_list">
            <li><img src="<?php echo get_bloginfo('template_url') ?>/assets/images/arrow-right.png" alt="arrow">Une Analytics Factory opérationnelle avec des ressources dédiées</li>
            <li><img src="<?php echo get_bloginfo('template_url') ?>/assets/images/arrow-right.png" alt="arrow">Des projets au forfait</li>
            <li><img src="<?php echo get_bloginfo('template_url') ?>/assets/images/arrow-right.png" alt="arrow">Outils et méthodologies</li>
        </ul>
    </div>
</div>

<div class="data_soltions_box">
    <div class="data_service_image">
        <img src="<?php echo get_bloginfo('template_url') ?>/assets/images/NYC.png" alt="tunnel">
    </div>
    <div class="data_service_box_content">
        <h1 class="service_title">Assitante technique</h1>
        <ul class="data_soltions_box_content_list">
            <li><img src="<?php echo get_bloginfo('template_url') ?>/assets/images/arrow-right.png" alt="arrow">Apport de compétence</li>
            <li><img src="<?php echo get_bloginfo('template_url') ?>/assets/images/arrow-right.png" alt="arrow">Renforcement d'équipe</li>
            <li><img src="<?php echo get_bloginfo('template_url') ?>/assets/images/arrow-right.png" alt="arrow">Gestion de projet (méthode agile et classique)</li>
        </ul>
    </div>
</div>

<div class="data_soltions_box">
    <div class="data_service_image">
        <img src="<?php echo get_bloginfo('template_url') ?>/assets/images/NYC.png" alt="tunnel">
    </div>
    <div class="data_service_box_content">
        <h1 class="service_title">TMA & Support</h1>
        <ul class="data_soltions_box_content_list">
            <li><img src="<?php echo get_bloginfo('template_url') ?>/assets/images/arrow-right.png" alt="arrow">Maintenance de logiciels et systèmes complexes</li>
            <li><img src="<?php echo get_bloginfo('template_url') ?>/assets/images/arrow-right.png" alt="arrow">Renforcement d'équipe support </li>
            <li><img src="<?php echo get_bloginfo('template_url') ?>/assets/images/arrow-right.png" alt="arrow">Maintien des compétences Service Desk</li>
        </ul>
        
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