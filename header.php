<!DOCTYPE html>
<html <?php language_attributes(); ?> class="font-sans">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet" />
    <?php wp_head(); ?>

</head>

<body <?php body_class('bg-white text-white antialiased font-sans'); ?>>
  <script src="https://unpkg.com/blip-chat-widget" type="text/javascript"></script>
  </script>
  <script>
    (function () {
        window.onload = function () {
          var blipClient = new BlipChat()
          .withAppKey('aW5tb3JvdXRlcjplODg3YzVhYS04NzkwLTQwMzktYmJiZS05YzUyNDczNDgxNjI=')
          .withButton({"color":"#6021B4","icon":""})
          .withCustomCommonUrl('https://chat.blip.ai/')
          .withEventHandler(BlipChat.CREATE_ACCOUNT_EVENT, function () {
              blipClient.sendMessage({
                  "type": "text/plain",
                  "content": "Start"
              });
          });
          blipClient.build();

          jQuery("#takebot").click(function(){
              jQuery("#blip-chat-open-iframe").click();
              return false;
          });
          jQuery("#takebot-footer").click(function(){
              jQuery("#blip-chat-open-iframe").click();
              return false;
          });
        }


    })();


  </script>
    <?php do_action('tailpress_site_before'); ?>

    <section class="flex flex-col">
        <header id="inicio">
            <div class="mx-auto container max-w-full px-4">
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
                            'container_class' => 'hidden bg-gray-100 mt-4 p-4 lg:mt-0 lg:p-0 lg:bg-transparent lg:block',
                            'menu_class'      => 'lg:flex lg:-mx-4',
                            'theme_location'  => 'primary',
                            'li_class'        => 'lg:mx-4 text-nav-gray',
                            'fallback_cb'     => false,
                        )
                    );
                    ?>
                </div>
            </div>
        </header>
      </section>
