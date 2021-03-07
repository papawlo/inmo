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
					'container_id'    => 'footer-menu',
					'container_class' => 'hidden bg-gray-100 mt-4 p-4 lg:mt-0 lg:p-0 lg:bg-transparent lg:block',
					'menu_class'      => 'lg:flex lg:-mx-4',
					'theme_location'  => 'primary',
					'li_class'        => 'lg:mx-4',
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
				<a href="#" class="w-auto mx-4"><img src="http://localhost/wp-inmo/wp-content/uploads/2021/03/facebook.svg" alt=""></a>
				<a href="#" class="w-auto mx-4"><img src="http://localhost/wp-inmo/wp-content/uploads/2021/03/linkedin.svg" alt=""></a>
				<a href="#" class="w-auto ml-4"><img src="http://localhost/wp-inmo/wp-content/uploads/2021/03/instagram.svg" alt=""></a>
			</div>
		</div>
	</div>
</footer>


<?php wp_footer(); ?>

</body>

</html>