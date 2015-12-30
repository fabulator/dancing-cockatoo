<?php

function dc_sources()
{
    wp_register_script('main-js', get_template_directory_uri() . '/core.js', array('jquery'), wp_get_theme()->version);
    wp_register_style('main-css', get_template_directory_uri() . '/style.css', array(), wp_get_theme()->version);

    wp_enqueue_script('main-js');
    wp_enqueue_style('main-css');
    wp_enqueue_script('comment-reply');
}

add_action('wp_enqueue_scripts', 'dc_sources');

register_sidebar([
    'name'          => 'Postranní panel',
    'id'            => 'sidebar',
    'description'   => 'Hlavní postranní panel',
    'class'         => '',
    'before_widget' => '<li id="%1$s" class="widget %2$s">',
    'after_widget'  => "</li>\n",
    'before_title'  => '<h2 class="widgettitle">',
    'after_title'   => "</h2>\n",
]);

function dc_comment_render($comment, $args, $depth)
{ 
    $wrap = $args['style'] == 'div' ? 'div' : 'li';
    ?>
    <<?php echo $wrap;?> <?php comment_class(); ?> id='li-comment-<?php comment_ID(); ?>'>
        <div id='comment-<?php comment_ID(); ?>' class='comment'>
            <header class="comment-meta comment-author vcard">
                <?php echo get_avatar($comment, $args['avatar_size']); ?>
                <cite class="fn">
                    <?php echo get_comment_author_link(); ?>
                    <a href="<?php echo esc_url( get_comment_link( $comment->comment_ID ) ); ?>">
                        <time datetime="<?php echo  get_comment_time( 'c' );?>">
                            <?php echo get_comment_date(); ?> <?php echo get_comment_time(); ?>
                        </time>
                    </a>
                </cite>
            </header>

            <?php if($comment->comment_approved == '0') { ?>
                <p class="comment-awaiting-moderation">Komentář čeká na schválení.</p>
            <?php } ?>

            <section class="comment-content comment">
                <?php comment_text(); ?>
            </section>

            <div class="reply">
                <?php comment_reply_link(
                    array_merge(
                        $args, 
                        array(
                            'depth' => $depth, 
                            'max_depth' => $args['max_depth']
                            )
                        )
                    ); 
                ?>
            </div>
        </<?php echo $wrap;?>>
    <?php
}
