

<?php do_action('tailpress_content_end'); ?>

</div>

<?php do_action('tailpress_content_after'); ?>

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
				<div class="flex flex-wrap">
						<nav class="w-full sm:w-1/2 pb-10 sm:pb-0">
							<?php
							wp_nav_menu(
									array(
											'container_id'    => 'footer-menu',
											'container_class' => 'hidden bg-gray-100 mt-4 p-4 lg:mt-0 lg:p-0 lg:bg-transparent lg:block',
											'menu_class'      => 'lg:flex lg:-mx-4',
											'theme_location'  => 'footer',
											'li_class'        => 'lg:mx-4 text-nav-gray',
											'fallback_cb'     => false,
									)
							);
							?>


						</nav>
						<!-- <nav class="flex justify-center sm:justify-end w-full sm:w-1/2">
							<?php //
							wp_nav_menu(
									array(
											'container_id'    => 'social-menu',
											'container_class' => 'flex justify-end w-1/2',
											'menu_class'      => 'lg:flex lg:-mx-4',
											'theme_location'  => 'social',
											'li_class'        => 'w-auto mx-4',
											'fallback_cb'     => false,
									)
							);
							?>
						</nav> -->
						<div class="flex justify-center sm:justify-end w-full sm:w-1/2">
								<!-- <a href="#" class="w-auto mx-4"><img src="<?php echo get_template_directory_uri() ?>/img/facebook.svg" alt="" /></a> -->
								<a href="https://br.linkedin.com/company/inmoworks" target="_blank" class="w-auto mx-4"><img src="<?php echo get_template_directory_uri() ?>/img/linkedin.svg" alt="" /></a>
								<!-- <a href="#" class="w-auto ml-4"><img src="<?php echo get_template_directory_uri() ?>/img/instagram.svg" alt="" /></a> -->
						</div>
				</div>
		</div>
</div>

<script src="https://unpkg.com/blip-chat-widget" type="text/javascript">
</script>
<script>
		(function () {
				window.onload = function () {
						new BlipChat()            .withAppKey('aW5tb3JvdXRlcjplODg3YzVhYS04NzkwLTQwMzktYmJiZS05YzUyNDczNDgxNjI=')
						.withButton({"color":"#6021B4","icon":""})
						.withCustomCommonUrl('https://chat.blip.ai/')
						.build();
				}
		})();
</script>


<?php do_action('tailpress_footer'); ?>

</div>

<?php wp_footer(); ?>

</body>

</html>
