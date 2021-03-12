<?php
/*
 * Template Name: Front Page
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
    <!-- <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet" /> -->
    <?php wp_head(); ?>
</head>

<body <?php body_class('bg-white text-white antialiased'); ?>>

    <?php do_action('tailpress_site_before'); ?>

	<?php if ( have_posts() ) : ?>

		<?php
		while ( have_posts() ) :
			the_post();
		the_content();
			?>

		<?php endwhile; ?>

	<?php endif; ?>


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
                <!-- <nav class="w-1/2">
				<ul class="flex justify-between text-gray text-sm">
					<li><a href="#">Início</a></li>
					<li><a href="#">Quem somos</a></li>
					<li><a href="#">Nossos serviços</a></li>
					<li><a href="#">Política de privacidade</a></li>
					<li><a href="#">Contato</a></li>
				</ul>
			</nav> -->
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