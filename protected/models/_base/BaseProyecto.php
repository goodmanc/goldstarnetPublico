<?php

/**
 * This is the model base class for the table "proyecto".
 * DO NOT MODIFY THIS FILE! It is automatically generated by AweCrud.
 * If any changes are necessary, you must set or override the required
 * property or method in class "Proyecto".
 *
 * Columns in table "proyecto" available as properties of the model,
 * followed by relations of table "proyecto" available as properties of the model.
 *
 * @property string $id
 * @property string $nombre
 * @property string $validezInicial
 * @property string $validezFinal
 * @property string $status
 * @property integer $used_by
 * @property string $check_in
 * @property integer $created_by
 * @property string $created
 * @property integer $modified_by
 * @property string $modified
 *
 * @property Contratocliente[] $contratoclientes
 * @property Contratoclientedetalle[] $contratoclientedetalles
 */
abstract class BaseProyecto extends AweActiveRecord {

    public static function model($className=__CLASS__) {
        return parent::model($className);
    }

    public function tableName() {
        return 'proyecto';
    }

    public static function representingColumn() {
        return 'nombre';
    }

    public function rules() {
        return array(
            array(	'id, nombre',
					'required',
					'message' => Yii::t('app', 'Field is required')
			),
            array(	'used_by, created_by, modified_by',
					'numerical',
					'integerOnly'=>true
			),
            array(	'id',
					'length',
					'max'=>20,
					'tooLong' => Yii::t('app', 'Field is required')
			),
            array(	'nombre, validezFinal',
					'length',
					'max'=>50,
					'tooLong' => Yii::t('app', 'Field is required')
			),
            array(	'status',
					'length',
					'max'=>1,
					'tooLong' => Yii::t('app', 'Field is required')
			),
            array(	'validezInicial, check_in, created, modified',
					'safe'
			),
            array('validezInicial, validezFinal, status, used_by, check_in, created_by, created, modified_by, modified',
					'default',
					'setOnEmpty' => true,
					'value' => null
			),
            array('id, nombre, validezInicial, validezFinal, status, used_by, check_in, created_by, created, modified_by, modified', 'safe', 'on'=>'search'),
        );
    }

    public function relations() {
        return array(
            'contratoclientes' => array(self::HAS_MANY, 'Contratocliente', 'proyecto_id'),
            'contratoclientedetalles' => array(self::HAS_MANY, 'Contratoclientedetalle', 'proyecto_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
                'id' => Yii::t('app', 'ID'),
                'nombre' => Yii::t('app', 'Nombre'),
                'validezInicial' => Yii::t('app', 'Validez Inicial'),
                'validezFinal' => Yii::t('app', 'Validez Final'),
                'status' => Yii::t('app', 'Status'),
                'used_by' => Yii::t('app', 'Used By'),
                'check_in' => Yii::t('app', 'Check In'),
                'created_by' => Yii::t('app', 'Created By'),
                'created' => Yii::t('app', 'Created'),
                'modified_by' => Yii::t('app', 'Modified By'),
                'modified' => Yii::t('app', 'Modified'),
                'contratoclientes' => null,
                'contratoclientedetalles' => null,
        );
    }

    public function search() {
        $criteria = new CDbCriteria;

        $criteria->compare('id', $this->id, true);
        $criteria->compare('nombre', $this->nombre, true);
        $criteria->compare('validezInicial', $this->validezInicial, true);
        $criteria->compare('validezFinal', $this->validezFinal, true);
        $criteria->compare('status', $this->status, true);
        $criteria->compare('used_by', $this->used_by);
        $criteria->compare('check_in', $this->check_in, true);
        $criteria->compare('created_by', $this->created_by);
        $criteria->compare('created', $this->created, true);
        $criteria->compare('modified_by', $this->modified_by);
        $criteria->compare('modified', $this->modified, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    public function behaviors() {
        return array_merge(array(
        ), parent::behaviors());
    }
}