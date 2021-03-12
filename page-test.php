<?php
/*
 * Template Name: Test
 * description: Landing Page V1
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <?php wp_head(); ?>
</head>

<body <?php body_class('bg-white text-white antialiased'); ?>>
    <!-- <header>
        <div class="mx-auto container">
            <div class="lg:flex lg:justify-between lg:items-center py-6">
                <div class="flex justify-between items-center">
                    <div>
                        <?php if (has_custom_logo()) { ?>
                            <a href="<?php echo get_bloginfo('url'); ?>">
                                <?php the_custom_logo(); ?>
                            </a>

                        <?php } else { ?>
                            <div class="text-lg uppercase">
                                <a href="<?php echo get_bloginfo('url'); ?>" class="font-extrabold text-lg uppercase">
                                    <?php echo get_bloginfo('name'); ?>
                                </a>
                            </div>

                            <p class="text-sm font-light">
                                <?php echo get_bloginfo('description'); ?>
                            </p>

                        <?php } ?>
                    </div>

                    <div class="lg:hidden">
                        <a href="#" aria-label="Toggle navigation" id="primary-menu-toggle">
                            <svg viewBox="0 0 20 20" class="inline-block w-6 h-6" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <g stroke="none" stroke-width="1" fill="currentColor" fill-rule="evenodd">
                                    <g id="icon-shape">
                                        <path d="M0,3 L20,3 L20,5 L0,5 L0,3 Z M0,9 L20,9 L20,11 L0,11 L0,9 Z M0,15 L20,15 L20,17 L0,17 L0,15 Z" id="Combined-Shape"></path>
                                    </g>
                                </g>
                            </svg>
                        </a>
                    </div>
                </div>

                <?php
                wp_nav_menu(
                    array(
                        'container_id'    => 'primary-menu',
                        'container_class' => 'hidden mt-4 p-4 lg:mt-0 lg:p-0 lg:bg-transparent lg:block',
                        'menu_class'      => 'lg:flex lg:-mx-4',
                        'theme_location'  => 'primary',
                        'li_class'        => 'lg:mx-4 text-nav-gray',
                        'fallback_cb'     => false,
                    )
                );
                ?>
            </div>
        </div>
    </header> -->
    <?php
    /* Start the Loop */
    while (have_posts()) :
        the_post();
        the_content();
    endwhile; // End of the loop.
    ?>

    <?php do_action('tailpress_content_end'); ?>

    <?php do_action('tailpress_content_after'); ?>
    <footer id="rodape" class="bg-dark pt-24 pb-16" role="contentinfo">
        <?php do_action('tailpress_footer'); ?>
        <div class="container max-w-6xl mx-auto m-8">
            <div class="flex flex-col justify-center items-center">
                <img class="" src="http://localhost/wp-inmo/wp-content/uploads/2021/03/logo.png" alt="">
                <p class="w-36 text-xs text-center mt-2">Feito com ❤ em Belo Horizonte CNPJ 38.266.091/0001-84</p>


            </div>
            <div class="w-full mt-16 mb-12">
                <div class="h-px bg-grayish"></div>
            </div>
            <div class="flex">
                <?php
                wp_nav_menu(
                    array(
                        'container'    => 'nav',
                        'container_class' => 'w-1/2',
                        'menu_class'      => 'flex justify-between text-gray text-sm',
                        'theme_location'  => 'footer',
                        'li_class'        => '',
                        'fallback_cb'     => false,
                    )
                );
                ?>

                <div class="flex justify-end w-1/2">
                    <a href="<?php the_field('link-facebook'); ?>" target="_blank" class="w-auto mx-4" title="Facebook"><img src="http://localhost/wp-inmo/wp-content/uploads/2021/03/facebook.svg" alt=""></a>
                    <a href="<?php the_field('link-linkedin'); ?>" target="_blank" class="w-auto mx-4" title="LinkedIn"><img src="http://localhost/wp-inmo/wp-content/uploads/2021/03/linkedin.svg" alt=""></a>
                    <a href="<?php the_field('link-instagram'); ?>" target="_blank" class="w-auto ml-4" title="Instagram"><img src="http://localhost/wp-inmo/wp-content/uploads/2021/03/instagram.svg" alt=""></a>
                </div>
            </div>
        </div>
    </footer>


    <?php wp_footer(); ?>

</body>

</html>