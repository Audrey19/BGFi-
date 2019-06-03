<?php
/*
Template Name: actu
*/
?>
<?php get_header(); ?>
<section class="banner">
    <div class="one_container_title">
        <h1 class="title_data">Blog & News</h1>
        <form action="/" method="get" class="search-form">
            <input placeholder="Recherchez un article" class="search-field" type="text" name="search" id="search" value="<?php the_search_query(); ?>"/>
            <button class="search-submit" type="submit">
                <img alt="Search" src="<?php bloginfo( 'template_url' ); ?>/assets/images/search.svg">
            </button>
        </form>
        <img  class="kenburns-top " src="<?php echo get_bloginfo('template_url') ?>/assets/images/Asset1.svg" alt="logo">
    </div>
</section>






<section class="data_menu">
    <?php wp_nav_menu(array('menu_id' => 'menu_container','theme_location' => 'cinq' )); ?> 
</section>

<section class="case_study">
    <div class="case_study_left">
    <img src="<?php echo get_bloginfo('template_url') ?>/assets/images/bg-picture.png" alt="check">
    </div>
    <div class="case_study_right">
        <h3>CASE STUDY</h3>
        <h1>Le vrai trio gagnant de l'analyse de données en libre service</h1>
        <p>In the last five to six years the FTA satellite receiver has become an everyday household electronic device. People all over the world are </p>
        <button class="btn">Lire l'article</button>
    </div>
</section>

<section class="email">
    <form action="/" method="get" class="search-form">
            <input placeholder="Votre email" class="search-field-mail" type="text" name="search" id="search" value="<?php the_search_query(); ?>"/>
            <button class="search-submit" type="submit">
               submit
            </button>
        </form>
<p>Me tenir au courant des derniers articles publiés ?</p>
</section>

<section class="career_postes">
    <div class="career_postes_cont">
        <div class="career_postes_cont_boxes articles">
            <div class="career_postes_cont_boxes_top">
                <img src="<?php echo get_bloginfo('template_url') ?>/assets/images/bxl.png" alt="check">
            </div>
            <div class="career_postes_cont_boxes_bottom align">
                <p>BRUXELLES</p>
                <h1 class="news-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h1>
            </div>
        </div>

        <div class="career_postes_cont_boxes articles">
            <div class="career_postes_cont_boxes_top">
                <img src="<?php echo get_bloginfo('template_url') ?>/assets/images/bxl.png" alt="check">
            </div>
            <div class="career_postes_cont_boxes_bottom align">
                <p>BRUXELLES</p>
                <h1 class="news-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h1>
            </div>
        </div>

        <div class="career_postes_cont_boxes articles">
            <div class="career_postes_cont_boxes_top">
                <img src="<?php echo get_bloginfo('template_url') ?>/assets/images/bxl.png" alt="check">
            </div>
            <div class="career_postes_cont_boxes_bottom align">
                <p>BRUXELLES</p>
                <h1 class="news-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h1>
            </div>
        </div>

        <div class="career_postes_cont_boxes articles">
            <div class="career_postes_cont_boxes_top">
                <img src="<?php echo get_bloginfo('template_url') ?>/assets/images/bxl.png" alt="check">
            </div>
            <div class="career_postes_cont_boxes_bottom align">
                <p>BRUXELLES</p>
                <h1 class="news-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h1>
            </div>
        </div>

        <div class="career_postes_cont_boxes articles">
            <div class="career_postes_cont_boxes_top">
                <img src="<?php echo get_bloginfo('template_url') ?>/assets/images/bxl.png" alt="check">
            </div>
            <div class="career_postes_cont_boxes_bottom align">
                <p>BRUXELLES</p>
                <h1 class="news-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h1>
            </div>
        </div>

        <div class="career_postes_cont_boxes articles">
            <div class="career_postes_cont_boxes_top">
                <img src="<?php echo get_bloginfo('template_url') ?>/assets/images/bxl.png" alt="check">
            </div>
            <div class="career_postes_cont_boxes_bottom align">
                <p>BRUXELLES</p>
                <h1 class="news-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h1>
            </div>
        </div>

        <div class="career_postes_cont_boxes articles">
            <div class="career_postes_cont_boxes_top">
                <img src="<?php echo get_bloginfo('template_url') ?>/assets/images/bxl.png" alt="check">
            </div>
            <div class="career_postes_cont_boxes_bottom align">
                <p>BRUXELLES</p>
                <h1 class="news-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h1>
            </div>
        </div>

        <div class="career_postes_cont_boxes articles">
            <div class="career_postes_cont_boxes_top">
                <img src="<?php echo get_bloginfo('template_url') ?>/assets/images/bxl.png" alt="check">
            </div>
            <div class="career_postes_cont_boxes_bottom align">
                <p>BRUXELLES</p>
                <h1 class="news-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h1>
            </div>
        </div>

        <div class="career_postes_cont_boxes articles">
            <div class="career_postes_cont_boxes_top">
                <img src="<?php echo get_bloginfo('template_url') ?>/assets/images/bxl.png" alt="check">
            </div>
            <div class="career_postes_cont_boxes_bottom align">
                <p>BRUXELLES</p>
                <h1 class="news-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h1>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>