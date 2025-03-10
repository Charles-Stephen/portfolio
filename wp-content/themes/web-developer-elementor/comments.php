<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Web Developer Elementor
 */

if ( post_password_required() ) {
    return;
}
?>

<?php if(get_theme_mod( 'web_developer_elementor_post_comment_show_hide', true)) : ?>
    <div id="comments" class="comments-area">
        <?php
        // You can start editing here -- including this comment!
        if ( have_comments() ) : ?>
            <h2 class="comments-title">
                <?php
                $web_developer_elementor_content_width = get_comments_number();
                if ( '1' === $web_developer_elementor_content_width ) {
                    /* translators: %s: post title */
                    printf( esc_html__( 'One thought on &ldquo;%s&rdquo;', 'web-developer-elementor' ), esc_html( get_the_title() ) );
                } else {
                    printf(
                        esc_html(
                            /* translators: 1: number of comments, 2: post title */
                            _nx(
                                '%1$s thought on &ldquo;%2$s&rdquo;',
                                '%1$s thoughts on &ldquo;%2$s&rdquo;',
                                $web_developer_elementor_content_width,
                                'comments title',
                                'web-developer-elementor'
                            )
                        ),
                        esc_html( number_format_i18n( $web_developer_elementor_content_width ) ),
                        esc_html( get_the_title() )
                    );
                }
                ?>
            </h2>
            <?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // Are there comments to navigate through? ?>
                <nav id="comment-nav-above" class="navigation comment-navigation" role="navigation">
                    <h2 class="screen-reader-text"><?php esc_html_e( 'Comment navigation', 'web-developer-elementor' ); ?></h2>
                    <div class="nav-links">
                        <div class="nav-previous"><?php previous_comments_link( esc_html__( 'Older Comments', 'web-developer-elementor' ) ); ?></div>
                        <div class="nav-next"><?php next_comments_link( esc_html__( 'Newer Comments', 'web-developer-elementor' ) ); ?></div>
                    </div>
                </nav>
            <?php endif; // Check for comment navigation. ?>
            <ul class="comment-list">
                <?php
                    wp_list_comments( array( 'callback' => 'web_developer_elementor_comment', 'avatar_size' => 50 ));
                ?>
            </ul>
            <?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // Are there comments to navigate through? ?>
                <nav id="comment-nav-below" class="navigation comment-navigation" role="navigation">
                    <h2 class="screen-reader-text"><?php esc_html_e( 'Comment navigation', 'web-developer-elementor' ); ?></h2>
                    <div class="nav-links">
                        <div class="nav-previous"><?php previous_comments_link( esc_html__( 'Older Comments', 'web-developer-elementor' ) ); ?></div>
                        <div class="nav-next"><?php next_comments_link( esc_html__( 'Newer Comments', 'web-developer-elementor' ) ); ?></div>
                    </div>
                </nav>
            <?php
            endif; // Check for comment navigation.

        endif; // Check for have_comments().

        // If comments are closed and there are comments, let's leave a little note, shall we?
        if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) : ?>
            <p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'web-developer-elementor' ); ?></p>
        <?php
        endif; ?>

        <?php
            comment_form( array(
                'title_reply_before' => '<h2 id="reply-title" class="comment-reply-title">',
                'title_reply_after'  => '</h2>',
            ) );
        ?>
    </div>
<?php endif; ?>