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

    <?php do_action('tailpress_site_before'); ?>

    <section id="inicio" class="min-h-screen flex flex-col">
        <header>
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
        <div class="flex flex-col justify-center items-center mx-auto container px-4 py-12 max-w-6xl">
            <h1 class="text-1xl md:text-2xl font-bold text-center mt-8 text-white leading-tight sm:leading-none	fade">Olá, é bom receber você aqui</h1>
            <p class="mt-10 text-base text-center leading-10 tracking-wide">
                Nós somos a Inmo, estamos aqui para ajudar você na construção do seu
                chatbot.
            </p>

            <p class="mt-2 text-base text-center leading-10 tracking-wide">
                Converse com o <i>Mô</i>, o robô que criamos para entender a sua
                necessidade ;)
            </p>
            <button class="bg-white px-12 py-8 rounded-full text-primary mt-6 focus:ring-4 focus:ring-purple-500 focus:outline-none text-base">FALAR COM MÔ</button>
            <a href="#" class="mt-5 mb-4">Falar no WhatsApp</a>
        </div>
    </section>
    <!-- Bloco 1 - Quem Somos -->
    <section id="quem-somos" class="bg-white py-8">
        <div class="container max-w-6xl sm:p-8 mx-auto">
            <div class="flex flex-wrap">
                <div class="w-full sm:w-1/2 sm:pr-6">
                    <h2 class="text-primary mb-10 font-bold">Quem Somos</h2>
                    <p class="text-gray">
                        A <span class="text-primary-light font-bold">Inmo</span> é especialista em construir conversas automatizadas que
                        facilitam a comunicação entre marcas e pessoas. Somos uma empresa
                        composta por profissionais com mais de 18 anos de experiência de
                        mercado. Nos tornamos experts na utilização do Blip, plataforma para
                        construção, gestão e evolução de chatbots. O <span class="text-blip font-bold">Blip</span> é integrado com os
                        principais canais de mensageria como <span class="text-wa font-bold">WhatsApp</span> e <span class="text-fb font-bold">Facebook Messenger</span>.
                        Ah, o nosso nome vem de <em>Omni</em> ao contrário ;)
                    </p>
                </div>
                <div class="w-full sm:w-1/2 pt-16 sm:pt-0 sm:pl-6">
                    <img class="mx-auto fade" src="<?php echo get_template_directory_uri() ?>/img/happy-bunch.png" alt=""/>
                </div>
            </div>
        </div>
    </section>
    <!-- Bloco 1 - Quem Somos // FIM -->

    <!-- Bloco 2 - nossos serviços -->
    <section id="nossos-servicos" class="bg-gray-light py-24">
        <div class="container max-w-6xl sm:p-8 mx-auto">

            <h2 class="text-primary w-full mb-10 font-bold leading-tight">NOSSOS SERVIÇOS COM BOTS</h2>
            <h3 class="text-gray mt-4">Alguns dos nossos serviços mais</h3>
            <div class="servicos flex flex-wrap mt-12">

                <div class="servico fade w-full sm:w-1/2 md:w-1/4 p-6 flex flex-col flex-grow flex-shrink items-center">
                    <img class="w-20" src="<?php echo get_template_directory_uri() ?>/img/research.svg" alt="" />
                    <h4 class="text-gray-darken font-bold text-base text-center mt-8">Qualificação de leads</h4>
                    <p class="text-gray-dark mt-5 text-center">Integrações com CRMs como Salesforce, SAP, Hubspot, RD Station, Hotmart, Construtor de Vendas.
                    </p>
                </div>

                <div class="servico fade w-full sm:w-1/2 md:w-1/4 p-6 flex flex-col flex-grow flex-shrink items-center">
                    <img class="w-20" src="<?php echo get_template_directory_uri() ?>/img/curriculum-vitae.svg" alt="" />
                    <h4 class="text-gray-darken font-bold text-base text-center mt-8">CRM integrado</h4>
                    <p class="text-gray-dark mt-5 text-center">Integrações com sistemas de tickets tais como ZenDesk e FreshDesk.</p>
                </div>
                <div class="servico fade w-full sm:w-1/2 md:w-1/4 p-6 flex flex-col flex-grow flex-shrink items-center">
                    <img class="w-20" src="<?php echo get_template_directory_uri() ?>/img/mobile-shop.svg" alt="" />
                    <h4 class="text-gray-darken font-bold text-base text-center mt-8">Envio de finanças e compras</h4>
                    <p class="text-gray-dark mt-5 text-center">Geração de boletos e status do pedido com diversos sistemas, entre eles FBits.
                    </p>
                </div>
                <div class="servico fade w-full sm:w-1/2 md:w-1/4 p-6 flex flex-col flex-grow flex-shrink items-center">
                    <img class="w-20" src="<?php echo get_template_directory_uri() ?>/img/consulting.svg" alt="" />
                    <h4 class="text-gray-darken font-bold text-base text-center mt-8">Atendimento humano</h4>
                    <p class="text-gray-dark mt-5 text-center">Atendimento carteirizado, envio de histórico por email e via sistemas.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- Bloco 2 - nossos serviços // FIM -->

    <!-- Bloco 3 - nossos clientes -->
    <section id="nossos-clientes" class="bg-white py-24">
        <div class="container max-w-6xl sm:p-8 mx-auto">
            <div class="flex flex-wrap">
                <div class="w-full sm:w-1/2 pr-6">

                    <h2 class="text-primary mb-10 font-bold">Quem já está conosco</h2>
                    <p class="text-gray w-full sm:w-5/6">
                        Separamos alguns de nossos parceiros que nos ajudam a contar a nossa
                        história e que já usam chatbots em suas operações;
                    </p>
                    <img class="w-auto ml-14 mt-14 hidden sm:inline-block fade" src="<?php echo get_template_directory_uri() ?>/img/party-time.png" />
                </div>
                <div class="w-full sm:w-1/2 pt-16 sm:pt-0 pl-6 fade">
                    <img src="<?php echo get_template_directory_uri() ?>/img/clients.png" alt="" />
                </div>
            </div>
        </div>
    </section>

    <!-- Bloco 3 - nossos clientes // FIM -->

    <!-- Bloco 4 - Pra quem -->
    <section id="para-quem" class="bg-primary-light relative">
        <div class="container max-w-6xl mx-auto">
            <div class="flex flex-wrap text-white">
                <div class="w-full md:w-1/2 p-6 py-24">
                    <h2 class="font-bold mb-5 leading-tight">PARA QUEM A INMO É INDICADA?</h2>
                    <div class="leading-loose">
                      <ul>
                          <li class="pb-5">> Pessoas que já usam o Blip</li>
                          <li class="pb-5">
                              > Projetos de chatbots com escopo pontuais e sem integrações
                              complexas no primeiro momento, com real visão de MVP (primeiro a
                              bicicleta, depois o carro)
                          </li>
                          <li class="pb-5">
                              > Dispostos a serem executados por etapas, que precisam do prazo
                              para início como um diferencial.
                          </li>
                          <li class="pb-5">> Sem necessidade de acompanhamento de um squad recorrente.</li>
                      </ul>
                    </div>
                </div>
                <div class="w-auto w-full md:w-1/2 flex items-end justify-end md:absolute md:right-0 md:bottom-0">
                    <img class="w-1/2" src="<?php echo get_template_directory_uri() ?>/img/bike.png" alt="" />
                    <img class="w-1/2" src="<?php echo get_template_directory_uri() ?>/img/trees.png" alt="" />
                </div>
            </div>
        </div>

    </section>
    <!-- Bloco 4 - Pra quem // FIM -->

    <!-- Bloco 5 - Contato -->

    <section id="contato" class="bg-white py-24">
        <div class="flex flex-col justify-center items-center mx-auto container max-w-6xl">
            <h2 class="text-1xl md:text-2xl font-bold text-primary text-center mt-8 leading-none">Vamos trocar uma ideia?</h2>
            <p class="mt-10 text-base text-center leading-tight text-gray">
                A forma mais rápida de entrar em contato conosco e obter informações específicas para o seu projeto de chatbots é conversando com o Mô. Mas, caso prefira, você pode solicitar contato pelo nosso WhatsApp.
            </p>
            <button class="bg-primary px-12 py-8 rounded-full text-white mt-16 text-base focus:ring-4 focus:ring-purple-500 focus:outline-none">FALAR COM MÔ</button>
            <a href="#" class="mt-5 mb-4 text-gray">Falar no WhatsApp</a>
        </div>
    </section>
    <!-- Bloco 5 - Contato // FIM -->


    <div id="rodape" class="bg-dark pt-24 pb-16">
        <div class="container max-w-6xl sm:p-8 mx-auto">
            <div class="flex flex-col justify-center items-center">
                <img class="" src="<?php echo get_template_directory_uri() ?>/img/logo.png" alt="" class="logo" />
                <p class="w-36 text-xs text-center mt-2">Feito com ❤ em Belo Horizonte CNPJ 38.266.091/0001-84</p>
            </div>
            <div class="w-full mt-16 mb-12">
                <div class="h-px bg-grayish"></div>
            </div>
            <div class="flex">
                <nav class="w-1/2">
                    <ul class="flex justify-between text-gray text-sm">
                        <li><a href="#">Início</a></li>
                        <li><a href="#">Quem somos</a></li>
                        <li><a href="#">Nossos serviços</a></li>
                        <li><a href="#">Política de privacidade</a></li>
                        <li><a href="#">Contato</a></li>
                    </ul>
                </nav>
                <div class="flex justify-end w-1/2">
                    <a href="#" class="w-auto mx-4"><img src="<?php echo get_template_directory_uri() ?>/img/facebook.svg" alt="" /></a>
                    <a href="#" class="w-auto mx-4"><img src="<?php echo get_template_directory_uri() ?>/img/linkedin.svg" alt="" /></a>
                    <a href="#" class="w-auto ml-4"><img src="<?php echo get_template_directory_uri() ?>/img/instagram.svg" alt="" /></a>
                </div>
            </div>
        </div>
    </div>



    <!-- Footer -->
</body>

</html>
