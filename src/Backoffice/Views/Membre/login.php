<div class="centerize content-wrapper">
	<div class="content-sub-wrapper">
		<div class="content-sub-sub-wrapper">
			<h1 class="font-size-4 page-title"><?php echo $title ?></h1>
			<div class="login-wrapper">
			<?php echo $form ?>
			<?php echo $r->getRouteLink('reset_password', 'mot de passe oublié?', 'reset-link', 'reset-link')?>
			</div>
		</div>
	</div>
</div>
