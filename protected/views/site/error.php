<?php
/* @var $this SiteController */
/* @var $error array */

$this->pageTitle = Yii::app()->name . ' - Error';
$this->breadcrumbs = array(
	'Error',
	);
	?>


	<div class="alert alert-error">
		<h2>Error <?php echo $code; ?></h2>
		<?php echo $message; ?>
	</div>