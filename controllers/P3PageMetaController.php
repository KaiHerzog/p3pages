<?php

class P3PageMetaController extends Controller
{
	public $layout='//layouts/column2';

	public function filters()
	{
		return array(
			'accessControl', 
		);
	}	

	public function accessRules()
	{
		return array(
			array('allow', 
				'actions'=>array('admin','delete','index','view','create','update'),
				'expression' => 'Yii::app()->user->checkAccess("P3pages.P3PageMeta.*")',
			),
			array('deny',  
				'users'=>array('*'),
			),
		);
	}
	
	public function beforeAction($action){
		parent::beforeAction($action);
		// map identifcationColumn to id
		if (!isset($_GET['id']) && isset($_GET['id'])) {
			$model=P3PageMeta::model()->find('id = :id', array(
			':id' => $_GET['id']));
			if ($model !== null) {
				$_GET['id'] = $model->id;
			} else {
				throw new CHttpException(400);
			}
		}
		if ($this->module !== null) {
			$this->breadcrumbs[$this->module->Id] = array('/'.$this->module->Id);
		}
		return true;
	}
	
	public function actionView($id)
	{
		$model = $this->loadModel($id);
		$this->render('view',array(
			'model' => $model,
		));
	}

	public function actionCreate()
	{
		$model = new P3PageMeta;

				$this->performAjaxValidation($model, 'p3-page-meta-form');
    
		if(isset($_POST['P3PageMeta'])) {
			$model->attributes = $_POST['P3PageMeta'];

			try {
    			if($model->save()) {
        			$this->redirect(array('view','id'=>$model->id));
				}
			} catch (Exception $e) {
				$model->addError('id', $e->getMessage());
			}
		} elseif(isset($_GET['P3PageMeta'])) {
				$model->attributes = $_GET['P3PageMeta'];
		}

		$this->render('create',array( 'model'=>$model));
	}


	public function actionUpdate($id)
	{
		$model = $this->loadModel($id);

				$this->performAjaxValidation($model, 'p3-page-meta-form');
		
		if(isset($_POST['P3PageMeta']))
		{
			$model->attributes = $_POST['P3PageMeta'];


			try {
    			if($model->save()) {
        			$this->redirect(array('view','id'=>$model->id));
        		}
			} catch (Exception $e) {
				$model->addError('id', $e->getMessage());
			}	
		}

		$this->render('update',array(
					'model'=>$model,
					));
	}

	public function actionDelete($id)
	{
		if(Yii::app()->request->isPostRequest)
		{
			try {
				$this->loadModel($id)->delete();
			} catch (Exception $e) {
				throw new CHttpException(500,$e->getMessage());
			}

			if(!isset($_GET['ajax']))
			{
					$this->redirect(array('admin'));
			}
		}
		else
			throw new CHttpException(400,
					Yii::t('app', 'Invalid request. Please do not repeat this request again.'));
	}

	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('P3PageMeta');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	public function actionAdmin()
	{
		$model=new P3PageMeta('search');
		$model->unsetAttributes();

		if(isset($_GET['P3PageMeta']))
			$model->attributes = $_GET['P3PageMeta'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	public function loadModel($id)
	{
		$model=P3PageMeta::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,Yii::t('app', 'The requested page does not exist.'));
		return $model;
	}

	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='p3-page-meta-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
