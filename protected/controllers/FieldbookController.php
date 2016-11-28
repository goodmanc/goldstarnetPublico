<?php

class FieldbookController extends AweController {

    /**
     * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
     * using two-column layout. See 'protected/views/layouts/column2.php'.
     */
    public $layout = '//layouts/column2';

    /**
     * @return array action filters
     */
    public function filters() {
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
    public function accessRules() {
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
    public function actionView($id) {
        $this->layout = '//layouts/clear';
        $this->render('view', array(
            'model' => $this->loadModel($id),
        ));
    }

    /**
     * Creates a new model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     */
    public function actionCreate() {
        $model = new Fieldbook;

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['Fieldbook'])) {
            $model->attributes = $_POST['Fieldbook'];
            if ($model->save())
                $this->redirect(array('view', 'pk' => $model->id));
        }
        $this->layout = '//layouts/clear';
        $child_model = FbColAsignada::model()->findAll('fieldbook_id=:fk', array(':fk'=>0));
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
    public function actionUpdate($id) {
        $model = $this->loadModel($id);

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['Fieldbook'])) {
            $model->attributes = $_POST['Fieldbook'];
            if ($model->save())
                $this->redirect(array('update', 'pk' => $model->id));
        }
        $child_model = FbColAsignada::model()->findAll('fieldbook_id=:fk', array(':fk'=>$model->id));
        $this->layout ='//layouts/clear';
        $this->render('update',array(
                'model'=>$model,
                'child_model'=>$child_model,
        ));
        
    }
    
    public function actionIngreso($id) {
        $model = $this->loadModel($id);

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['Fieldbook'])) {
            $model->attributes = $_POST['Fieldbook'];
            if ($model->save())
                $this->redirect(array('view', 'pk' => $model->id));
        }
        $child_model = FbColAsignada::model()->findAll('fieldbook_id=:fk', array(':fk'=>$model->id));
        $this->layout ='//layouts/clear';
        $this->render('ingreso',array(
                'model'=>$model,
                'child_model'=>$child_model,
        ));
        
    }

    /**
     * Deletes a particular model.
     * If deletion is successful, the browser will be redirected to the 'admin' page.
     * @param integer $id the ID of the model to be deleted
     */
    public function actionDelete($id) {
        $this->loadModel($id)->delete();

        // if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
        if (!isset($_GET['ajax']))
            $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
    }

    /**
     * Lists all models.
     */
    public function actionIndex() {
        $model = new Fieldbook('search');
        $model->unsetAttributes();  // clear any default values
        if (isset($_GET['Fieldbook']))
            $model->attributes = $_GET['Fieldbook'];
        $dataProvider = new CActiveDataProvider('Fieldbook');
        $this->render('index', array(
            'model' => $model,
            'dataProvider' => $dataProvider,
        ));
    }

    /**
     * Manages all models.
     */
    public function actionAdmin() {
        $model = new Fieldbook('search');
        $model->unsetAttributes();  // clear any default values
        if (isset($_GET['Fieldbook']))
            $model->attributes = $_GET['Fieldbook'];
        $dataProvider = new CActiveDataProvider('Fieldbook');
        $this->render('admin', array(
            'model' => $model,
            'dataProvider' => $dataProvider,
        ));
    }

    /**
     * List all models in Excel.
     */
    public function actionExcel() {
        $model = new Fieldbook('search');
        $model->unsetAttributes();  // clear any default values
        if (isset($_GET['Fieldbook']))
            $model->attributes = $_GET['Fieldbook'];
        $dataProvider = new CActiveDataProvider('Fieldbook');
        $this->render('excel', array(
            'model' => $model,
            'dataProvider' => $dataProvider,
        ));
    }

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer $id the ID of the model to be loaded
     * @return Fieldbook the loaded model
     * @throws CHttpException
     */
    public function loadModel($id) {
        $model = Fieldbook::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

    /**
     * Performs the AJAX validation.
     * @param Fieldbook $model the model to be validated
     */
    protected function performAjaxValidation($model) {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'fieldbook-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

    public function actionGrid_data() {
        require_once Yii::getPathOfAlias('dhtmlx.connector.grid_connector') . '.php';
        require_once Yii::getPathOfAlias('dhtmlx.connector.db_phpyii') . '.php';
        $id = $_GET['id'];
        $model = $this->loadModel($id);
        $child_model = new FbColAsignada;
        $grid = new GridConnector($child_model, "PHPYii");
        if (!$grid->is_select_mode()) {
            $grid = new GridConnector($child_model, "PHPYii");
        } else {
            $criteria = new CDbCriteria();
            $criteria->select = array('fbcolasignada.id'
                                    , 'fbcolasignada.fieldbook_id'
                                    , 'fbcolasignada.fbColumna_id'
                                    , 'fbcolasignada.status'
            );
            $criteria->condition = 'fieldbook_id = ' . (int) $id;
            $criteria->with = array('fbcolumna');
            $child_model->setDbCriteria($criteria);
            $grid = new GridConnector($child_model, "PHPYii");
        }
        $config = new GridConfiguration();
        $config->setHeader(array("#", "ID", "Fieldbook ID", "Grupo - Columna", "Status"));
        $config->attachHeader("{#stat_count},#numeric_filter,#numeric_filter,#select_filter,#select_filter");
        $config->setColTypes(array("ro", "ro", "ro", "coro", "coro"));
        $config->setColAlign("right,right,right,left,center");
        $config->setInitWidths("50,50,50,400,100");
        $config->setColHidden(array(false, false, true, false, false));
        $config->setColSorting("int,int,int,str,str");
        $config->setColIds("dhxRowNumber,id,fieldbook_id,fbColumna_id,status");

        $grid->set_config($config);
        
        $fbcolumna = new FbColumna;
        $new_criteria = new CDbCriteria();
        $new_criteria->select = array('fbcolumna.id'
                                    , 'fbcolumna.fbGrupoColumna_id'
                                    , 'fbcolumna.nombre'
                                    , 'fbcolumna.orden'
                                    , 'fbGrupoColumna.nombre'
        );
        $new_criteria->with = array('fbGrupoColumna');
        $fbcolumna->setDbCriteria($new_criteria);
        $grid->set_options("fbColumna_id", CHtml::listData($fbcolumna->findAll(array('order'=>'fbGrupoColumna.orden')), 'id', 'fullColumna'));
//        print_r($fbcolumna->findAll());
//        exit;
        $grid->set_options("status",Constants::FBCOLUMNA_STATUS);
        $grid->configure('-', "id", "dhxRowNumber,id,fieldbook_id,fbColumna_id,status");

        $grid->render();
    }


    public function actionGrid_data_ingreso() {
        require_once Yii::getPathOfAlias('dhtmlx.connector.grid_connector') . '.php';
        require_once Yii::getPathOfAlias('dhtmlx.connector.db_phpyii') . '.php';
        $id = $_GET['id'];
        $model = $this->loadModel($id);
        $child_model = new FbColAsignada;
        $grid = new GridConnector($child_model, "PHPYii");
        if (!$grid->is_select_mode()) {
            $grid = new GridConnector($child_model, "PHPYii");
        } else {
            $criteria = new CDbCriteria();
            $criteria->select = array('fbcolasignada.id'
                                    , 'fbcolasignada.fieldbook_id'
                                    , 'fbcolasignada.fbColumna_id'
                                    , 'fbcolasignada.status'
            );
            $criteria->condition = 'fieldbook_id = ' . (int) $id;
            $criteria->with = array('fbcolumna');
            $child_model->setDbCriteria($criteria);
            $grid = new GridConnector($child_model, "PHPYii");
        }
        $config = new GridConfiguration();
        $config->setHeader(array("#", "ID", "Fieldbook ID", "Grupo - Columna", "Status"));
        $config->attachHeader("{#stat_count},#numeric_filter,#numeric_filter,#select_filter,#select_filter");
        $config->setColTypes(array("ro", "ro", "ro", "coro", "coro"));
        $config->setColAlign("right,right,right,left,center");
        $config->setInitWidths("50,50,50,400,100");
        $config->setColHidden(array(false, false, true, false, false));
        $config->setColSorting("int,int,int,str,str");
        $config->setColIds("dhxRowNumber,id,fieldbook_id,fbColumna_id,status");

        $grid->set_config($config);
        
        $fbcolumna = new FbColumna;
        $new_criteria = new CDbCriteria();
        $new_criteria->select = array('fbcolumna.id'
                                    , 'fbcolumna.fbGrupoColumna_id'
                                    , 'fbcolumna.nombre'
                                    , 'fbcolumna.orden'
                                    , 'fbGrupoColumna.nombre'
        );
        $new_criteria->with = array('fbGrupoColumna');
        $fbcolumna->setDbCriteria($new_criteria);
        $grid->set_options("fbColumna_id", CHtml::listData($fbcolumna->findAll(array('order'=>'fbGrupoColumna.orden')), 'id', 'fullColumna'));
//        print_r($fbcolumna->findAll());
//        exit;
        $grid->set_options("status",Constants::FBCOLUMNA_STATUS);
        $grid->configure('-', "id", "dhxRowNumber,id,fieldbook_id,fbColumna_id,status");

        $grid->render();
    }
    
    
}
