<aside id="sidebar" class="cases">
	<header>
		<h2>Estudos de caso</h2>
	</header>
	<?php

		$args = array(
		  'orderby' => 'name',
		  'show_count' => 0,
		  'pad_counts' => 0,
		  'hierarchical' => 1,
		  'taxonomy' => 'segments',
		  'title_li' => ''
		);

	?>
	<p>Veja aqui como nossos clientes de diversos segmentos vêm obtendo resultados melhores e mais consistentes em Marketing Digital.</p>
	<h3>Segmentos</h3>
	<ul>
		<?php wp_list_categories($args); ?>
	</ul>
	<?php if ( is_active_sidebar( 'cases-sidebar' ) ) : ?>
	<hr />
	<ul class="widgets">
	<?php dynamic_sidebar( 'cases-sidebar' ); ?>
	</ul>	
<?php endif; ?>

</aside> <!-- #sidebar -->