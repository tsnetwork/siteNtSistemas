<?php $v->layout("_theme") ?>

	<div id="notfound">
		<div class="notfound">
			<div class="notfound-404">
				<h1><?=$error->code ?></h1>
			</div>
			<h2><?=$error->title?></h2>
			<p><?=$error->message?></p>
			<a href="<?=url()?>"><span class="arrow"></span>Voltar à Pagina Inicial</a>
		</div>
	</div>

<!-- This templates was made by Colorlib (https://colorlib.com) -->
