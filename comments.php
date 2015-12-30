<?php if (have_comments()) { ?>
    <!-- Pokud existují komentáře, zobraz nadpis -->
    <h3 id="comments">
        <?php
            if (get_comments_number() == 1) {
                printf(__('One Response to %s'), '„' . get_the_title() . '“');
            } else {
                printf(_n('%1$s Response to %2$s', '%1$s Responses to %2$s', get_comments_number()),
                    number_format_i18n(get_comments_number()), '„' . get_the_title() . '“');
            }
        ?>
    </h3>

    <!-- A vypiš seznam komentářů -->
    <ol class='commentlist'>
        <?php wp_list_comments(array(
            'style' => 'ol',
            'avatar_size' => 124,
            'callback' => 'dc_comment_render'
            )
        ); ?>
    </ol>

<?php } ?>

<?php if (comments_open()) { ?>
    <!-- Zobraz formulář pro komentáře, pokud jsou povolené -->
    <?php comment_form(); ?>
<?php } else { ?>
    <h3>Komentáře nejsou povoleny.P</h3>
<?php } ?>
