<?php get_header(); ?>

<div class='main'>
    <div class='content'>
        <!--  Cyklus, který projde všechny články v loopu  //-->
        <?php while (have_posts()) { ?>
            <!--  Nastavý aktuální článek jako aktivní  //-->
            <?php the_post(); ?>
            <article <?php post_class(); ?>>
                <h2><?php the_title(); ?></h2>
                <?php the_content(); ?><br />
                Kategorie: <?php the_category(', '); ?><br />
                <?php the_tags('Štítky: '); ?><br />
                Publikováno: <?php the_time(); ?> <?php the_date(); ?>
                <hr />
            </article>

            <!-- Zavolat komentářovou šablonu pouze v případě, že komentáře jsou povolené nebo už nějaké existují -->
            <?php if (comments_open() || get_comments_number()) { ?>
                <?php comments_template(); ?>
            <?php } ?>

        <?php } ?>
    </div>
    <div class='sidebar'>
        <?php get_sidebar(); ?>
    </div>
    <div class='clear'></div>
</div>

<?php get_footer(); ?>
