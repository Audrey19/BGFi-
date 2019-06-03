<?php
/*
Template Name: contacts
*/
?>
<?php get_header(); ?>

<section class="bis contact-banner">
    <div class="one_container_title">
        <h1 class="title_data">Contactez-nous</h1>
        <p>Laissez-nous un message et suivez-nous sur les réseaux sociaux !</p>
        <img  class="kenburns-top " src="<?php echo get_bloginfo('template_url') ?>/assets/images/Asset1.svg" alt="logo">
    </div>
</section>

<section class="career_list">
    <ul class="career_list_item">
        <li>GENERAL</li>
        <li>BUSINESS</li>
        <li>CARRIERE</li>
    </ul>
</section>

<section class="career_form">
    <div class="career_form_container">
    </div>
    <?php echo do_shortcode( '[contact-form-7 id="68" title="Formulaire de contact 1"]' ); ?>
</section>

<h1 class="first_title">Nos bureaux</h1>
<section class="contact_bureaux">
        <div class="career_postes_cont_boxes">
            <div class="career_postes_cont_boxes_top">
                <img src="<?php echo get_bloginfo('template_url') ?>/assets/images/bxl.png" alt="check">
            </div>
            <div class="career_postes_cont_boxes_bot">
                <h1>Paris</h1>
                <p>92 avenue des Champs Elysées <br> 75008 Paris  <br> FRANCE</p>
                <p>T +33 1 82 64 51 51</p>
            </div>
        </div>
        <div class="career_postes_cont_boxes">
            <div class="career_postes_cont_boxes_top">
                <img src="<?php echo get_bloginfo('template_url') ?>/assets/images/bxl.png" alt="check">
            </div>
            <div class="career_postes_cont_boxes_bot">
                <h1>Bruxelles</h1>
                <p>Chaussée de Charleroi 112 <br>  1060 Bruxelles<br> BELGIQUE</p>
                <p>T +32 2 645 08 00</p>
            </div>
        </div>
        <div class="career_postes_cont_boxes">
            <div class="career_postes_cont_boxes_top">
                <img src="<?php echo get_bloginfo('template_url') ?>/assets/images/bxl.png" alt="check">
            </div>
            <div class="career_postes_cont_boxes_bot">
                <h1>Tunis</h1>
                <p>Immeuble Khairi bureau B2-5 <br>  Centre Urbain Nord <br>  1082 Tunis <br>  TUNISIE</p>
            </div>
        </div>
        <div class="career_postes_cont_boxes">
            <div class="career_postes_cont_boxes_top">
                <img src="<?php echo get_bloginfo('template_url') ?>/assets/images/bxl.png" alt="check">
            </div>
            <div class="career_postes_cont_boxes_bot">
                <h1>Singapour</h1>
                <p>9 Raffles Place #17 <br> Republic Plaza 2 <br>  048619, Singapore <br>  SINGAPOUR</p>
                <p>T +65 6823 8018</p>
            </div>
        </div>  
</section>


<?php get_footer(); ?>