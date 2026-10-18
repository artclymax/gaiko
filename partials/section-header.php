<?php 
$title = $args['title'] ?: 'Заголовок';
$descr = $args['descr'] ?: 'Описание';
?>
<div class="section-header">
	<h2 class="section-header__title title-1 descr">
		<?php echo wp_kses_post($title)?>
	</h2>
	<div class="section-header__descr descr">
		<?php echo wp_kses_post($descr)?>
	</div>
</div>