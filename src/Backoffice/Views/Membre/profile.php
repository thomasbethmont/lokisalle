<div class="centerize content-wrapper">
	<div class="content-sub-wrapper">
		<div class="content-sub-sub-wrapper">
			<h1 class="font-size-4 page-title"><?php echo $h1 ?></h1>
			<div class="login-wrapper">
			<?php echo $form ?>
			</div>
		</div>
	</div>
</div>


<?php if (!empty($bookings)) : ?>
  <section class=" section bookings-recap">
   <?php
    $tabCaption = 'Vos commandes';
    $TabId = 'bookings-table';
    $tabElements = $bookings;
    include __DIR__.'/../compoments/table.php';
   ?>
</section>
<?php else : ?>
	<div class="notice">
		<p>Vous n'avez pas encore effectué de réservation.</p>
	</div>
<?php endif; ?>
