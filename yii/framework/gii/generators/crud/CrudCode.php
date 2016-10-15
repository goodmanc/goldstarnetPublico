<?php

class CrudCode extends CCodeModel
{

    public $model;
    public $controller;
    public $baseControllerClass = 'Controller';
    private $_modelClass;
    private $_table;
        
    /** @var int Specifies if ajax validation is enabled. 0 represents false, 1 represents true. */
    public $validation = 1;
    
    public $dateTypes = array('datetime', 'date', 'time', 'timestamp');
    public $booleanTypes = array('tinyint(1)', 'boolean', 'bool', 'bit');
    public $emailFields = array('email', 'e-mail', 'email_address', 'e-mail_address', 'emailaddress', 'e-mailaddress');
    public $imageFields = array(
        'image',
        'picture',
        'photo',
        'pic',
        'profile_pic',
        'profile_picture',
        'avatar',
        'profilepic',
        'profilepicture'
    );
    public $urlFields = array('url', 'link', 'uri', 'homepage', 'webpage', 'website', 'profile_url', 'profile_link');
    public $passwordFields = array('password', 'passwd', 'psswrd', 'pass', 'passcode');
    public $create_time = array(
        'create_time',
        'createtime',
        'created_at',
        'created_on',
        'createdat',
        'created_time',
        'createdtime'
    );
    public $update_time = array(
        'changed',
        'changed_at',
        'updatetime',
        'modified_at',
        'updated_at',
        'updated_on',
        'modified_on',
        'update_time',
        'timestamp',
        'updatedat'
    );
    public $validRelatedRecordBehaviors = array(
        'ActiveRecordRelation' => 'EActiveRecordRelationBehavior',
    );

    public function rules()
    {
        return array_merge(parent::rules(), array(
            array('model, controller', 'filter', 'filter' => 'trim'),
            array('model, controller, baseControllerClass', 'required'),
            array('model', 'match', 'pattern' => '/^\w+[\w+\\.]*$/', 'message' => '{attribute} should only contain word characters and dots.'),
            array('controller', 'match', 'pattern' => '/^\w+[\w+\\/]*$/', 'message' => '{attribute} should only contain word characters and slashes.'),
            array('baseControllerClass', 'match', 'pattern' => '/^[a-zA-Z_\\\\][\w\\\\]*$/', 'message' => '{attribute} should only contain word characters and backslashes.'),
            array('baseControllerClass', 'validateReservedWord', 'skipOnError' => true),
            array('model', 'validateModel'),
            array('baseControllerClass', 'sticky'),
        ));
    }

    public function attributeLabels()
    {
        return array_merge(parent::attributeLabels(), array(
            'model' => 'Model Class',
            'controller' => 'Controller ID',
            'baseControllerClass' => 'Base Controller Class',
        ));
    }

    public function requiredTemplates()
    {
        return array(
            'controller.php',
        );
    }

    public function init()
    {
        if (Yii::app()->db === null)
            throw new CHttpException(500, 'An active "db" connection is required to run this generator.');
        parent::init();
    }

    public function successMessage()
    {
        $link = CHtml::link('try it now', Yii::app()->createUrl($this->controller), array('target' => '_blank'));
        return "The controller has been generated successfully. You may $link.";
    }

    public function validateModel($attribute, $params)
    {
        if ($this->hasErrors('model'))
            return;
        $class = @Yii::import($this->model, true);
        if (!is_string($class) || !$this->classExists($class))
            $this->addError('model', "Class '{$this->model}' does not exist or has syntax error.");
        elseif (!is_subclass_of($class, 'CActiveRecord'))
            $this->addError('model', "'{$this->model}' must extend from CActiveRecord.");
        else
        {
            $table = CActiveRecord::model($class)->tableSchema;
            if ($table->primaryKey === null)
                $this->addError('model', "Table '{$table->name}' does not have a primary key.");
            elseif (is_array($table->primaryKey))
                $this->addError('model', "Table '{$table->name}' has a composite primary key which is not supported by crud generator.");
            else
            {
                $this->_modelClass = $class;
                $this->_table = $table;
            }
        }
    }

    public function prepare()
    {
        $this->files = array();
        $templatePath = $this->templatePath;
        $controllerTemplateFile = $templatePath . DIRECTORY_SEPARATOR . 'controller.php';

        $this->files[] = new CCodeFile(
                $this->controllerFile, $this->render($controllerTemplateFile)
        );

        $files = scandir($templatePath);
        foreach ($files as $file)
        {
            if (is_file($templatePath . '/' . $file) && CFileHelper::getExtension($file) === 'php' && $file !== 'controller.php')
            {
                $this->files[] = new CCodeFile(
                        $this->viewPath . DIRECTORY_SEPARATOR . $file, $this->render($templatePath . '/' . $file)
                );
            }
        }
    }

    public function getModelClass()
    {
        return $this->_modelClass;
    }

    public function getControllerClass()
    {
        if (($pos = strrpos($this->controller, '/')) !== false)
            return ucfirst(substr($this->controller, $pos + 1)) . 'Controller';
        else
            return ucfirst($this->controller) . 'Controller';
    }

    public function getModule()
    {
        if (($pos = strpos($this->controller, '/')) !== false)
        {
            $id = substr($this->controller, 0, $pos);
            if (($module = Yii::app()->getModule($id)) !== null)
                return $module;
        }
        return Yii::app();
    }

    public function getControllerID()
    {
        if ($this->getModule() !== Yii::app())
            $id = substr($this->controller, strpos($this->controller, '/') + 1);
        else
            $id = $this->controller;
        if (($pos = strrpos($id, '/')) !== false)
            $id[$pos + 1] = strtolower($id[$pos + 1]);
        else
            $id[0] = strtolower($id[0]);
        return $id;
    }

    public function getUniqueControllerID()
    {
        $id = $this->controller;
        if (($pos = strrpos($id, '/')) !== false)
            $id[$pos + 1] = strtolower($id[$pos + 1]);
        else
            $id[0] = strtolower($id[0]);
        return $id;
    }

    public function getControllerFile()
    {
        $module = $this->getModule();
        $id = $this->getControllerID();
        if (($pos = strrpos($id, '/')) !== false)
            $id[$pos + 1] = strtoupper($id[$pos + 1]);
        else
            $id[0] = strtoupper($id[0]);
        return $module->getControllerPath() . '/' . $id . 'Controller.php';
    }

    public function getViewPath()
    {
        return $this->getModule()->getViewPath() . '/' . $this->getControllerID();
    }

    public function getTableSchema()
    {
        return $this->_table;
    }

    public function generateInputLabel($modelClass, $column)
    {
        return "CHtml::activeLabelEx(\$model,'{$column->name}')";
    }

    public function generateInputField($modelClass, $column)
    {
        if ($column->type === 'boolean')
            return "CHtml::activeCheckBox(\$model,'{$column->name}')";
        elseif (stripos($column->dbType, 'text') !== false)
            return "CHtml::activeTextArea(\$model,'{$column->name}',array('rows'=>6, 'cols'=>50))";
        else
        {
            if (preg_match('/^(password|pass|passwd|passcode)$/i', $column->name))
                $inputField = 'activePasswordField';
            else
                $inputField = 'activeTextField';

            if ($column->type !== 'string' || $column->size === null)
                return "CHtml::{$inputField}(\$model,'{$column->name}')";
            else
            {
                if (($size = $maxLength = $column->size) > 60)
                    $size = 60;
                return "CHtml::{$inputField}(\$model,'{$column->name}',array('size'=>$size,'maxlength'=>$maxLength))";
            }
        }
    }

    public function generateActiveLabel($modelClass, $column)
    {
        return "\$form->labelEx(\$model,'{$column->name}')";
    }

    public function generateActiveField_old($modelClass, $column, $htmlOptions = array())
    {
        $array_htmlOptions = array();
        $rel = '';
        foreach ($htmlOptions as $key => $value)
        {
            $array_htmlOptions[] = "'{$key}' => '{$value}'";
        }
        if ($column->type === 'boolean')
            return "\$form->checkBox(\$model,'{$column->name}')";
        elseif (stripos($column->dbType, 'text') !== false)
        {
            $array_htmlOptions[] = "'rows'=>6";
            $array_htmlOptions[] = "'cols'=>50";
            return "\$form->textArea(\$model,'{$column->name}',array(" . implode(",", $array_htmlOptions) . "))";
        } else
        {
            if (preg_match('/^(password|pass|passwd|passcode)$/i', $column->name))
                $inputField = 'passwordField';
            elseif ($column->isForeignKey == 1) {
                
                $rel = $this->findRelation($modelClass, $column);
                $inputField = 'textField';
            }
            else
                $inputField = 'textField';

            if ($column->type !== 'string' || $column->size === null)
                return "\$form->{$inputField}(\$model,'{$column->name}',array(" . implode(",", $array_htmlOptions) . "))";
            else
            {
                if (($size = $maxLength = $column->size) > 60)
                    $size = 60;
                return print_r($rel,TRUE)."\$form->{$inputField}(\$model,'{$column->name}',array('size'=>$size,'maxlength'=>$maxLength),array(" . implode(",", $array_htmlOptions) . "))";
            }
        }
    }

   /**
     * Generates and returns the view source code line
     * to create the appropriate active input field based on
     * the model attribute field type on the database.
     * #MethodTracker
     * This method is based on {@link CrudCode::generateActiveField}, from version 1.1.7 (r3135). Changes:
     * <ul>
     * <li>All styling is removed.</li>
     * </ul>
     * @param string $modelClass The model class name.
     * @param CDbColumnSchema $column The column.
     * @return string The source code line for the active field.
     */
    public function generateActiveField($modelClass, $column, $htmlOptions = array())
    {
        $array_htmlOptions = array();
        $rel = '';
        foreach ($htmlOptions as $key => $value)
        {
            $array_htmlOptions[] = "'{$key}' => '{$value}'";
        }        
        if ($column->isForeignKey) {
            $relation = $this->findRelation($modelClass, $column);
            $relatedModelClass = $relation[3];

            $foreignPk = CActiveRecord::model($relatedModelClass)->getTableSchema()->primaryKey;

            $prompt = '';
            if ($column->allowNull && $column->defaultValue == null) {
                $prompt = ", array('prompt' => Yii::t('AweApp', 'None'))";
            }

            if ($this->getUseRelatedRecordBehavior()) {
                //requires EActiveRecordRelationBehavior
                return "\$form->dropDownListRow(\$model, '{$relation[0]}', CHtml::listData({$relatedModelClass}::model()->findAll(), '{$foreignPk}', {$relatedModelClass}::representingColumn()){$prompt})";
            }

            return "\$form->dropDownListRow(\$model, '{$column->name}', CHtml::listData({$relatedModelClass}::model()->findAll(), '{$foreignPk}', {$relatedModelClass}::representingColumn()){$prompt})";
        }

        if($column->name == $this->hasUpload()) {
            return "\$form->fileFieldRow(\$model, '{$column->name}[]', array('multiple' => 'multiple'))";
        } elseif (strtoupper($column->dbType) == 'TINYINT(1)'
            || strtoupper($column->dbType) == 'BIT'
            || strtoupper($column->dbType) == 'BOOL'
            || strtoupper($column->dbType) == 'BOOLEAN'
        ) {
            return "\$form->checkBoxRow(\$model, '{$column->name}')";
        } else {
            if (strtoupper($column->dbType) == 'DATE') {
                return "\$form->datepickerRow(\$model, '{$column->name}', array('prepend'=>'<i class=\"icon-calendar\"></i>'))";
            } else {
                if (stripos($column->dbType, 'text') !== false) { // Start of CrudCode::generateActiveField code.
                    return "\$form->textAreaRow(\$model,'{$column->name}',array('rows'=>6, 'cols'=>50, 'class'=>'span8'))";
                } else {
                    $passwordI18n = Yii::t('AweCrud.app', 'password');
                    $passwordI18n = (isset($passwordI18n) && $passwordI18n !== '') ? '|' . $passwordI18n : '';
                    $pattern = '/^(password|pass|passwd|passcode' . $passwordI18n . ')$/i';
                    if (preg_match($pattern, $column->name)) {
                        $inputField = 'passwordFieldRow';
                    } else {
                        $inputField = 'textFieldRow';
                    }

                    if ($column->type !== 'string' || $column->size === null) {
                        return "\$form->{$inputField}(\$model, '{$column->name}', array('class' => 'span5'))";
                    } else {
                        return "\$form->{$inputField}(\$model, '{$column->name}', array('class' => 'span5', 'maxlength' => $column->size))";
                    }
                }
            }
        } // End of CrudCode::generateActiveField code.
    }
    
    public function getUseRelatedRecordBehavior()
    {
        return array_intersect_key(
            $this->validRelatedRecordBehaviors,
            CActiveRecord::model($this->modelClass)->behaviors()
        );
    }    
    
    public function hasUpload()
    {
        foreach($this->tableSchema->columns as $column)
        {
            if (in_array($column->name, $this->imageFields))
            {
                return $column->name;
                break;
            }
        }

        return false;
    }    
    
    public function guessNameColumn($columns)
    {
        foreach ($columns as $column)
        {
            if (!strcasecmp($column->name, 'name'))
                return $column->name;
        }
        foreach ($columns as $column)
        {
            if (!strcasecmp($column->name, 'title'))
                return $column->name;
        }
        foreach ($columns as $column)
        {
            if ($column->isPrimaryKey)
                return $column->name;
        }
        return 'id';
    }

    /**
     * Finds the relation of the specified column.
     * @param string|AweActiveRecord $modelClass The model class name or a model instance.
     * @param string|CDbColumnSchema $column The column.
     * @return array The relation. The array will have 3 values:
     * 0: the relation name,
     * 1: the relation type (will always be AweActiveRecord::BELONGS_TO),
     * 2: the foreign key (will always be the specified column),
     * 3: the related active record class name.
     * Or null if no matching relation was found.
     */
    public static function findRelation($modelClass, $column)
    {
        if (is_string($modelClass)) {
            $staticModelClass = CActiveRecord::model($modelClass);
        } else {
            $staticModelClass = CActiveRecord::model(get_class($modelClass));
        }

        if (is_string($column)) {
            $column = $staticModelClass->getTableSchema()->getColumn($column);
        }

        if (!$column->isForeignKey) {
            return null;
        }

        $relations = $staticModelClass->relations();
        // Find the relation for this attribute.
        foreach ($relations as $relationName => $relation) {
            // For attributes on this model, relation must be BELONGS_TO.
            if (($relation[0] === AweActiveRecord::BELONGS_TO) && ($relation[2] === $column->name)) {
                return array(
                    $relationName, // the relation name
                    $relation[0], // the relation type
                    $relation[2], // the foreign key
                    $relation[1] // the related active record class name
                );
            }
        }
        // None found.
        return null;
    }
    
    /**
     * @return array
     */
    public function getRelations()
    {
        return CActiveRecord::model($this->modelClass)->relations();
    }    
    
}
