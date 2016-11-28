<?php

class EventController extends Controller {

    public function actionGrid() {
        $this->render('grid');
    }

    public function actionGrid_data() {
        require_once Yii::getPathOfAlias('dhtmlx.connector.grid_connector') . '.php';
        require_once Yii::getPathOfAlias('dhtmlx.connector.db_phpyii') . '.php';
        $model = new ContratoClienteDetalle;
        $grid = new GridConnector($model, "PHPYii");
        if (!$grid->is_select_mode()) {
            $grid = new GridConnector($model, "PHPYii");
        } else {
            $criteria = new CDbCriteria();
            $criteria->select = array('contratoclientedetalle.id', 'contratoclientedetalle.contratoCliente_id', "contratoclientedetalle.variedad_id", "contratoclientedetalle.codigoGoldStar"
                , "contratoclientedetalle.nombreExportacion", "contratoclientedetalle.moneda_id", "contratoclientedetalle.has", "contratoclientedetalle.kgs");
            $criteria->condition = 'contratocliente_id = 1';
            $criteria->with = array('contratoCliente.cliente', 'variedad', 'moneda');
            $model->setDbCriteria($criteria);
            $grid = new GridConnector($model, "PHPYii");
        }
        $config = new GridConfiguration();
        $config->setHeader(array("#", "ID", "Contrato Cliente ID", "Variedad", "Código GoldStar", "Nombre Exportacion", "Moneda", "Has", "Kgs"));
        $config->attachHeader("{#stat_count},#numeric_filter,#numeric_filter,#select_filter,#text_filter,#text_filter,#select_filter,#numeric_filter,#numeric_filter");
        $config->setColTypes(array("ro", "ro", "ro", "coro", "ed", "ed", "coro", "ed", "ed"));
        $config->setInitWidths("50,50,,,,,,,,,,,,,");
        $config->setColHidden(array(false, false, true, false, false, false, false, false, false));
        $config->setColSorting("int,int,int,str,str,str,int,int,int");

        $grid->set_config($config);
        $grid->set_options("variedad_id", CHtml::listData(Variedad::model()->findAllByAttributes(array("cliente_id" => 1)), 'id', Variedad::representingColumn()));
        $grid->set_options("moneda_id", CHtml::listData(Moneda::model()->findAll(), 'id', Moneda::representingColumn()));
        $grid->configure('-', "id", "dhxRowNumber,id,contratoCliente_id,variedad_id,codigoGoldStar,nombreExportacion,moneda_id,hactares,kgs");

        $grid->render();
    }

    public function actionIndex() {
        $this->render('index');
    }

    public function actionScheduler() {
        $this->render('scheduler');
    }

    public function actionScheduler_data() {
        $scheduler = new SchedulerConnector(Events::model(), "PHPYii");
        $scheduler->enable_log("text.log");
        $scheduler->configure("-", "event_id", "start_date, end_date, event_name");
        $scheduler->render();
    }

}
