<?php
$this->breadcrumbs[Yii::t('P3PagesModule.crud', 'Metadata')] = array('admin');
$this->breadcrumbs[$model->{$model->tableSchema->primaryKey}] = array(
    'view',
    'id' => $model->{$model->tableSchema->primaryKey}
);
$this->breadcrumbs[] = Yii::t('P3PagesModule.crud', 'Update');
?>
<?php $this->widget("TbBreadcrumbs", array("links" => $this->breadcrumbs)) ?>

<h1>
    <?php echo Yii::t('P3PagesModule.crud', 'Pages'); ?>
    <small><?php echo Yii::t('P3PagesModule.crud', 'Update Metadata'); ?> #<?php echo $model->id ?></small>
</h1>

<?php $this->renderPartial("_toolbar", array("model" => $model)); ?>
<?php
$this->renderPartial(
    '_form',
    array(
         'model' => $model
    )
);
?>
