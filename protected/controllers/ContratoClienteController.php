<?php

class ContratoClienteController extends AweController
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
                        'rights', // perform access control for CRUD operations
//			'accessControl', // perform access control for CRUD operations
//			'postOnly + delete', // we only allow deletion via POST request
		);
        }

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
                    /*
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
                    */
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
                $this->layout ='//layouts/clear';
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new ContratoCliente;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['ContratoCliente']))
		{
			$model->attributes=$_POST['ContratoCliente'];
			if($model->save())
				$this->redirect(array('update','pk'=>$model->id));
		}
                $this->layout ='//layouts/clear';
                $child_model = ContratoClienteDetalle::model()->findAll('contratoCliente_id=:fk', array(':fk'=>0));

		$this->render('create',array(
			'model'=>$model,
			'child_model'=>$child_model,
		));
	}

	/**
	 * Updates a  particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['ContratoCliente']))
		{
			$model->attributes=$_POST['ContratoCliente'];
			if($model->save())
				$this->redirect(array('update','pk'=>$model->id));
		}
                $child_model = ContratoClienteDetalle::model()->findAll('contratoCliente_id=:fk', array(':fk'=>$model->id));
                $this->layout ='//layouts/clear';
		$this->render('update',array(
			'model'=>$model,
                        'child_model'=>$child_model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$model=new ContratoCliente('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['ContratoCliente']))
			$model->attributes=$_GET['ContratoCliente'];
		$dataProvider=new CActiveDataProvider('ContratoCliente');
		$this->render('index',array(
                        'model'=>$model,
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new ContratoCliente('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['ContratoCliente']))
			$model->attributes=$_GET['ContratoCliente'];
                $dataProvider=new CActiveDataProvider('ContratoCliente');
		$this->render('admin',array(
			'model'=>$model,
                        'dataProvider'=>$dataProvider,
		));
	}
        
	/**
	 * List all models in Excel.
	 */
	public function actionExcel()
	{
		$model=new ContratoCliente('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['ContratoCliente']))
			$model->attributes=$_GET['ContratoCliente'];
                $dataProvider=new CActiveDataProvider('ContratoCliente');
		$this->render('excel',array(
			'model'=>$model,
                        'dataProvider'=>$dataProvider,
		));                
	}
        
        

    public function actionGrid_data() {
        require_once Yii::getPathOfAlias('dhtmlx.connector.grid_connector') . '.php';
        require_once Yii::getPathOfAlias('dhtmlx.connector.db_phpyii') . '.php';
        $id = $_GET['id'];
        $model=$this->loadModel($id);
        $child_model = new ContratoClienteDetalle;
        $grid = new GridConnector($child_model, "PHPYii");
//        print_r($grid);exit;
        if (!$grid->is_select_mode()) {
            $grid = new GridConnector($child_model, "PHPYii");
        } else {
            $criteria = new CDbCriteria();
            $criteria->select = array('contratoclientedetalle.id', 'contratoclientedetalle.contratoCliente_id', "contratoclientedetalle.variedad_id", "contratoclientedetalle.codigoGoldStar"
                , "contratoclientedetalle.nombreExportacion", "contratoclientedetalle.moneda_id", "contratoclientedetalle.base", "contratoclientedetalle.has", "contratoclientedetalle.kgs", "contratoclientedetalle.price");
            $criteria->condition = 'contratocliente_id = ' . (int)$id;
            $criteria->with = array('contratoCliente.cliente', 'variedad', 'moneda');
            $child_model->setDbCriteria($criteria);
            $grid = new GridConnector($child_model, "PHPYii");
        }
        $config = new GridConfiguration();
        $config->setHeader(array("#", "ID", "Contrato Cliente ID", "Variedad", "Código GoldStar", "Nombre Exportacion", "Moneda", "Base", "Has", "Kgs","Precio"));
        $config->attachHeader("{#stat_count},#numeric_filter,#numeric_filter,#select_filter,#text_filter,#text_filter,#select_filter,#numeric_filter,#numeric_filter,#numeric_filter,#numeric_filter");
        $config->setColTypes(array("ro", "ro", "ro", "coro", "ed", "ed", "coro", "edn","edn", "edn", "edn"));
        $config->setColAlign("right,right,right,left,left,left,center,center,right,right,right,right");
        $config->setInitWidths("50,50,50,100,100,100,120,120,120,120,*");
        $config->setColHidden(array(false,false,true,false,false,false,false,false,false,false,false));
        $config->setColSorting("int,int,int,str,str,str,int,int,int,int,int");
        $config->setColIds("dhxRowNumber,id,contratoCliente_id,variedad_id,codigoGoldStar,nombreExportacion,moneda_id,base,has,kg,price");

        $grid->set_config($config);
        $grid->set_options("variedad_id", CHtml::listData(Variedad::model()->findAllByAttributes(array("cliente_id" => $model->cliente_id)), 'id', Variedad::representingColumn()));
        $grid->set_options("moneda_id", CHtml::listData(Moneda::model()->findAll(), 'id', Moneda::representingColumn()));
        $grid->configure('-', "id", "dhxRowNumber,id,contratoCliente_id,variedad_id,codigoGoldStar,nombreExportacion,moneda_id,base,has,kgs,price");

        $grid->render();
    }        

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return ContratoCliente the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=ContratoCliente::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param ContratoCliente $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='contrato-cliente-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
