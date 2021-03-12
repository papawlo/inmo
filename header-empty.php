<!DOCTYPE html>
<html <?php language_attributes(); ?> class="font-sans">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <link rel="preconnect" href="https://fonts.gstatic.com" />
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
