<?php
/*
Template Name: domaines
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

<section class="toggle">
<div class="toggle_left">
    <!--<div class="box data-management" data-domaine="data-management">Data Management</div>
    <div class="box data-engineering" data-domaine="data-engineering">Data Engineering</div>
    <div class="box advanced-analytics" data-domaine="advanced-analytics">Advanced Analytics</div>
    <div class="box vertical-solutions" data-domaine="vertical-solutions">Vertical Solutions</div>-->
    <img  class="kenburns-top " src="<?php echo get_bloginfo('template_url') ?>/assets/images/bgfi.svg" alt="logo">
</div>

<div class="toggle_right">
    <div class="container_toggle">
        <div class="domain data-management" data-domaine="data-management">
            <p>1° Data Management</p>   
            <img class="arrow-close" src="<?php echo get_bloginfo('template_url') ?>/assets/images/arrow_down.png" alt="arrow">
            <img class="arrow-open" src="<?php echo get_bloginfo('template_url') ?>/assets/images/arrow-right-white.png" alt="arrow">
        </div>
        <div class="sub-domain">
            <div class="sub-domain-item">
                <img class="loupe" src="<?php echo get_bloginfo('template_url') ?>/assets/images/loup.svg" alt="loup">
                <p>Collecter et stocker vos données</p>
            </div>
            <div class="sub-domain-item">
                <img class="loupe" src="<?php echo get_bloginfo('template_url') ?>/assets/images/loup.svg" alt="arrow">
                <p>Collecter et stocker vos données</p>
            </div>
            <div class="sub-domain-item">
                <img class="loupe" src="<?php echo get_bloginfo('template_url') ?>/assets/images/loup.svg" alt="arrow">
                <p>Collecter et stocker vos données</p>
            </div>
            <a href="">DECOUVRIR CE DOMAIN</a>
        </div>
     </div>
     <div class="container_toggle">
        <div class="domain data-engineering" data-domaine="data-engineering">
            <p>2° Data Engineering</p>   
            <img class="arrow-close" src="<?php echo get_bloginfo('template_url') ?>/assets/images/arrow_down.png" alt="arrow">
            <img class="arrow-open" src="<?php echo get_bloginfo('template_url') ?>/assets/images/arrow-right-white.png" alt="arrow">
        </div>
        <div class="sub-domain">
            <div class="sub-domain-item">
                <img class="loupe" src="<?php echo get_bloginfo('template_url') ?>/assets/images/loup.svg" alt="loup">
                <p>Collecter et stocker vos données</p>
            </div>
            <div class="sub-domain-item">
                <img class="loupe" src="<?php echo get_bloginfo('template_url') ?>/assets/images/loup.svg" alt="arrow">
                <p>Collecter et stocker vos données</p>
            </div>
            <div class="sub-domain-item">
                <img class="loupe" src="<?php echo get_bloginfo('template_url') ?>/assets/images/loup.svg" alt="arrow">
                <p>Collecter et stocker vos données</p>
            </div>
            <a href="">DECOUVRIR CE DOMAIN</a>
        </div>
    </div>
    <div class="container_toggle">
        <div class="domain advanced-analytics" data-domaine="advanced-analytics">
            <p>3° Advanced Analytics</p>   
            <img class="arrow-close" src="<?php echo get_bloginfo('template_url') ?>/assets/images/arrow_down.png" alt="arrow">
            <img class="arrow-open" src="<?php echo get_bloginfo('template_url') ?>/assets/images/arrow-right-white.png" alt="arrow">
        </div>
        <div class="sub-domain">
            <div class="sub-domain-item">
                <img  class="loupe" src="<?php echo get_bloginfo('template_url') ?>/assets/images/loup.svg" alt="loup">
                <p>Collecter et stocker vos données</p>
            </div>
            <div class="sub-domain-item">
                <img class="loupe" src="<?php echo get_bloginfo('template_url') ?>/assets/images/loup.svg" alt="arrow">
                <p>Collecter et stocker vos données</p>
            </div>
            <div class="sub-domain-item">
                <img class="loupe" src="<?php echo get_bloginfo('template_url') ?>/assets/images/loup.svg" alt="arrow">
                <p>Collecter et stocker vos données</p>
            </div>
            <a href="">DECOUVRIR CE DOMAIN</a>
        </div>
    </div>
    <div class="container_toggle">
        <div class="domain vertical-solutions" data-domaine="vertical-solutions">
            <p>4° Vertical Solutions</p>   
            <img class="arrow-close" src="<?php echo get_bloginfo('template_url') ?>/assets/images/arrow_down.png" alt="arrow">
            <img class="arrow-open" src="<?php echo get_bloginfo('template_url') ?>/assets/images/arrow-right-white.png" alt="arrow">
        </div> 
        <div class="sub-domain">
            <div class="sub-domain-item">
                <img class="loupe" src="<?php echo get_bloginfo('template_url') ?>/assets/images/loup.svg" alt="loup">
                <p>Collecter et stocker vos données</p>
            </div>
            <div class="sub-domain-item">
                <img class="loupe" src="<?php echo get_bloginfo('template_url') ?>/assets/images/loup.svg" alt="arrow">
                <p>Collecter et stocker vos données</p>
            </div>
            <div class="sub-domain-item">
                <img class="loupe" src="<?php echo get_bloginfo('template_url') ?>/assets/images/loup.svg" alt="arrow">
                <p>Collecter et stocker vos données</p>
            </div>
            <a href="">DECOUVRIR CE DOMAIN</a>
        </div> 
    </div>
</div>
</section>
<script 
    src="https://code.jquery.com/jquery-1.12.3.js"   
    integrity="sha256-1XMpEtA4eKXNNpXcJ1pmMPs8JV+nwLdEqwiJeCQEkyc="   
    crossorigin="anonymous"></script>
<script src="assets/js/script/jquert.js"></script>

<section class="projet">
    <div class="projet_container">
        <h1>Prêt à lancer votre projet?</h1>
        <button class="btn">Contactez-nous</button>
    </div>
</section>
<?php get_footer(); ?>