<?php

/**
 * This is the model base class for the table "especie".
 * DO NOT MODIFY THIS FILE! It is automatically generated by AweCrud.
 * If any changes are necessary, you must set or override the required
 * property or method in class "Especie".
 *
 * Columns in table "especie" available as properties of the model,
 * followed by relations of table "especie" available as properties of the model.
 *
 * @property integer $id
 * @property integer $familia_id
 * @property string $nombre
 * @property string $name
 * @property string $status
 * @property integer $used_by
 * @property string $check_in
 * @property integer $created_by
 * @property string $created
 * @property integer $modified_by
 * @property string $modified
 *
 * @property Familia $familia
 * @property Users $createdBy
 * @property Users $modifiedBy
 * @property Users $usedBy
 * @property Variedad[] $variedads
 */
abstract class BaseEspecie extends AweActiveRecord {


    public static function model($className=__CLASS__) {
        return parent::model($className);
    }

    public function tableName() {
        return 'especie';
    }

    public static function representingColumn() {
        return 'nombre';
    }

    public function rules() {
        return array(
            array(	'familia_id, name, created_by',
					'required',
					'message' => Yii::t('app', 'Field is required')
			),
            array(	'familia_id, used_by, created_by, modified_by',
					'numerical',
					'integerOnly'=>true
			),
            array(	'nombre, name',
					'length',
					'max'=>50,
					'tooLong' => Yii::t('app', 'Field is required')
			),
            array(	'status',
					'length',
					'max'=>1,
					'tooLong' => Yii::t('app', 'Field is required')
			),
            array(	'check_in, created, modified',
					'safe'
			),
            array('nombre, status, used_by, check_in, created, modified_by, modified',
					'default',
					'setOnEmpty' => true,
					'value' => null
			),
            array('id, familia_id, nombre, name, status, used_by, check_in, created_by, created, modified_by, modified', 'safe', 'on'=>'search'),
        );
    }

    public function relations() {
        return array(
            'familia' => array(self::BELONGS_TO, 'Familia', 'familia_id'),
            'createdBy' => array(self::BELONGS_TO, 'Users', 'created_by'),
            'modifiedBy' => array(self::BELONGS_TO, 'Users', 'modified_by'),
            'usedBy' => array(self::BELONGS_TO, 'Users', 'used_by'),
            'variedads' => array(self::HAS_MANY, 'Variedad', 'especie_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
                'id' => Yii::t('app', 'ID'),
                'familia_id' => Yii::t('app', 'Familia'),
                'nombre' => Yii::t('app', 'Nombre'),
                'name' => Yii::t('app', 'Name'),
                'status' => Yii::t('app', 'Status'),
                'used_by' => Yii::t('app', 'Used By'),
                'check_in' => Yii::t('app', 'Check In'),
                'created_by' => Yii::t('app', 'Created By'),
                'created' => Yii::t('app', 'Created'),
                'modified_by' => Yii::t('app', 'Modified By'),
                'modified' => Yii::t('app', 'Modified'),
                'familia' => null,
                'createdBy' => null,
                'modifiedBy' => null,
                'usedBy' => null,
                'variedads' => null,
        );
    }

    public function search() {
        $criteria = new CDbCriteria;

        $criteria->compare('id', $this->id);
        $criteria->compare('familia_id', $this->familia_id);
        $criteria->compare('nombre', $this->nombre, true);
        $criteria->compare('name', $this->name, true);
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