<?php
/*
Template Name: a-propos
*/
?>
<?php get_header(); ?>

<section class="about_one">
        <h1 class="one_container_title"><?php the_field('title_apropos'); ?></h1>
        <img  class="nasa" src="<?php echo get_bloginfo('template_url') ?>/assets/images/nasa.jpg" alt="logo">
</section>

<section class="about_two">
<?php
    while ( have_rows('repeteur_apropos') ) : the_row(); ?>
        
        <div class="about_two_container_box">
            <h1><?php the_sub_field('number'); ?></h1>
            <p><?php the_sub_field('text'); ?></p>
        </div>
<?php endwhile;?>   

</section>

<section class="about_three">
    <h1><?php the_field('title-two'); ?></h1>

    <?php
    while ( have_rows('repeteur_apropos_two') ) : the_row(); ?>
    <div class="about_three_container">
        <div class="about_three_container_image">
        <?php 
            $imagecard = get_sub_field('image');
            if( !empty($imagecard) ): ?>
                <img src="<?php echo $imagecard['url']; ?>" alt="<?php echo $imagecard['alt']; ?>" />
        <?php endif; ?>
        </div>
        <div class="about_three_container_content">
            <h1><?php the_sub_field('title'); ?></h1>
            <p><?php the_sub_field('textarea'); ?></p>
        </div>
    </div>
    <?php endwhile;?> 

</section>

<section class="about_four">
    <h1 class="first_title"><?php the_field('title-histoire'); ?></h1>
    <div class="variable-width">
        <?php
        while ( have_rows('caroussel') ) : the_row(); ?>
            <div class="slick_variable_box">
                <h3><?php the_sub_field('date'); ?></h3>
                <h1><?php the_sub_field('title-caroussel'); ?></h1>
                <div class="text-carousel"><?php the_sub_field('text-carousel'); ?></div>
            </div>
        <?php endwhile;?> 
    </div> 
</section>


<section class="about_five">
    <h1 class="first_title"><?php the_field('title-equipe'); ?></h1>
        <div class="about_five_box">
    
    <?php $increment = 0;?>
       <?php while ( have_rows('boxes-equipe') ) : the_row();  ?>
         <?php if($increment == 4) {?>
            <div class="resonsive_non"></div>
            <div class="resonsive_non"></div>
        <?php }?>
            <div class="about_five_box_team">
                <?php 
                $image = get_sub_field('photo');
                if( !empty($image) ): ?>
                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
                <?php endif; ?>
                <h1><?php the_sub_field('name'); ?></h1>
                <div class="text-equipe"><?php the_sub_field('status'); ?></div>
                <h2><?php the_sub_field('country'); ?></h2>
            </div>
        <?php $increment++?>
        <?php endwhile;?> 

            <div class="about_five_box_next">
                <h1>Envie de rejoindre l’équipe ?</h1>
            </div>
        </div> 
</section>

<section class="about_six">
    <div class="about_six_content">
        <h1 class= "first_title"><?php the_field('title-video'); ?></h1>
        <p><?php the_field('textarea-video'); ?></p>
        <button class="btn">Voir plus</button>
    </div>
    <div class="embed-container">
	<?php the_field('video'); ?>
</div>
</section>


<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="slick/slick.min.js"></script>

<script>
    $(document).ready(function(){
    $('.variable-width').slick({
        setting-name: setting-value,
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 3,
        autoplay: true,
        autoplaySpeed: 2000,
    });
    });
</script>
<?php get_footer(); ?>