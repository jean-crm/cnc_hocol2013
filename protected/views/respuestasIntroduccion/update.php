<?php
/* @var $this RespuestasIntroduccionController */
/* @var $model RespuestasIntroduccion */

$this->breadcrumbs=array(
	'Respuestas Introduccions'=>array('index'),
	$model->id_con=>array('view','id'=>$model->id_con),
	'Editar',
);

$this->menu=array(
	array('label'=>'<i class="icon-th-list"></i> Listar', 'url'=>array('index')),
	array('label'=>'<i class="icon-plus-sign"></i> Crear', 'url'=>array('create')),
	array('label'=>'<i class="icon-zoom-in"></i> Detalles', 'url'=>array('view', 'id'=>$model->id_con)),
	array('label'=>'<i class="icon-list-alt"></i> Reporte', 'url'=>array('admin')),
);
?>

<h1>Editar RespuestasIntroduccion <?php echo $model->id_con; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>