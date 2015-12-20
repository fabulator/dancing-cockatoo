<?php get_header(); ?>

<div class='main'>
    <div class='content'>

        <h1>Výsledky vyhledávání pro: „<?php echo get_search_query(); ?>“</h1>

        <!--  Cyklus, který projde všechny články v loopu  //-->
        <?php while (have_posts()) { ?>
            <!--  Nastavý aktuální článek jako aktivní  //-->
            <?php the_post(); ?>
            <article <?php post_class(); ?>>
                <h2><a href='<?php the_permalink(); ?>'><?php the_title(); ?></a></h2>
                <?php the_content(); ?><br />
                Kategorie: <?php the_category(', '); ?><br />
                <?php the_tags('Štítky: '); ?><br />
                Publikováno: <?php the_time(); ?> <?php the_date(); ?>
                <hr />
            </article>
        <?php } ?>
    </div>
    <div class='sidebar'>
        <?php get_sidebar(); ?>
    </div>
    <div class='clear'></div>
</div>

<?php get_footer(); ?>
