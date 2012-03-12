<?php
$this->breadcrumbs['P3 Page Metas'] = array('index');$this->breadcrumbs[] = $model->_label;
if(!isset($this->menu) || $this->menu === array()) {
$this->menu=array(
	array('label'=>Yii::t('app', 'Update') , 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>Yii::t('app', 'Delete') , 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>Yii::t('app', 'Create') , 'url'=>array('create')),
	array('label'=>Yii::t('app', 'Manage') , 'url'=>array('admin')),
	/*array('label'=>Yii::t('app', 'List') , 'url'=>array('index')),*/
);
}
?>

<h1><?php echo Yii::t('app', 'View');?> P3PageMeta #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
'data'=>$model,
	'attributes'=>array(
					array(
			'name'=>'id',
			'value'=>($model->id0 !== null)?CHtml::link($model->id0->_label, array('/p3pages/p3Page/view','id'=>$model->id0->id)).' '.CHtml::link(Yii::t('app','Update'), array('/p3pages/p3Page/update','id'=>$model->id0->id), array('class'=>'edit')):'n/a',
			'type'=>'html',
		),
		'status',
		'type',
		'language',
		'treeParent_id',
		'treePosition',
		'begin',
		'end',
		'keywords',
		'customData',
		'label',
		'owner',
		'checkAccessCreate',
		'checkAccessRead',
		'checkAccessUpdate',
		'checkAccessDelete',
		'createdAt',
		'createdBy',
		'modifiedAt',
		'modifiedBy',
		'guid',
		'ancestor_guid',
		'model',
),
	)); ?>


	