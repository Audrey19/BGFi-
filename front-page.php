<?php
/*
Template Name: front-page
*/
?>
<?php get_header(); ?>

<section class="one">
    <div class="one_container_title">
        <h1><?php the_field('title'); ?></h1>
        <p><?php the_field('sub-title'); ?></p>
        <button class="btn margin_small">En savoir plus sur BGFi</button>
        <img  class="kenburns-top " src="<?php echo get_bloginfo('template_url') ?>/assets/images/Asset1.svg" alt="logo">
    </div>
    <a class="scroll colorWhite textalign-center">Scroll</a>
</section>

<section class="two">
<?php while ( have_rows('columns_frontPage') ) : the_row();?>
        <div class="two_box">
            <div class="two_box_image">
            <?php if( get_sub_field('logo') ): ?>
                    <img src="<?php the_sub_field('logo'); ?>">
            <?php endif; ?>
            </div>
            <h1 class="sub_title_pink"><?php the_sub_field('title'); ?></h1>
            <p class="paragraphe_grey"><?php the_sub_field('sub-title'); ?></p>
        </div>
<?php endwhile; ?>
</section>

<section class="three">
    <div class="three_container">
        <h1><?php the_field('title_two'); ?></h1>
        <p><?php the_field('sub-title_two'); ?></p>
    </div>
</section>

<section class="four">
    <div class="four_container">
    <?php while ( have_rows('actu_frontPage') ) : the_row();?>
        <div class="four_container_box">
        <?php if( get_sub_field('image') ): ?>
                    <img src="<?php the_sub_field('image'); ?>">
            <?php endif; ?>
            <h1><?php the_sub_field('title'); ?></h1>
            <a class="btn link" href="http://localhost:81/bgfi/solution-page/">Lire plus</a>
        </div>
    <?php endwhile; ?>
    </div>
</section>

<section class="five">
        <div class="five_container_box1">
            <p><?php the_field('texte'); ?></p>
        </div>
        <div class="five_container_box2">
        <?php while ( have_rows('logos_frontPage') ) : the_row();?>
            <?php if( get_sub_field('logo') ): ?>
            <div class="logos">
                        <img src="<?php the_sub_field('logo'); ?>">
            </div>
            <?php endif; ?>
        <?php endwhile; ?>
        </div>
</section>

<?php get_footer(); ?>