<?php

/**
 * This is the model class for table "empleados".
 *
 * The followings are the available columns in table 'empleados':
 * @property integer $noempleado
 * @property string $nombre
 * @property string $apaterno
 * @property string $amaterno
 * @property integer $perfil_id
 * @property string $genero
 * @property integer $edad
 * @property string $fecnac
 * @property string $correo
 * @property string $fecregistro
 * @property integer $jefe_id
 *
 * The followings are the available model relations:
 * @property Perfiles $perfil
 * @property Empleados $jefe
 * @property Empleados[] $empleado
 */
class Empleados extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Empleados the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'empleados';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('noempleado, nombre, apaterno, perfil_id, genero, fecnac, correo', 'required'),
			array('noempleado, perfil_id, edad, jefe_id', 'numerical', 'integerOnly'=>true),
			array('nombre, apaterno, amaterno, correo', 'length', 'max'=>45),
			array('noempleado, correo', 'unique'),
			array('fecnac', 'date', 'format'=>'yyyy-M-d'),
			array('correo', 'email'),
			array('genero', 'length', 'max'=>1),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('noempleado, nombre, apaterno, amaterno, perfil_id, genero, edad, fecnac, correo, fecregistro, jefe_id', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'perfil' => array(self::BELONGS_TO, 'Perfiles', 'perfil_id'),
			'jefe' => array(self::BELONGS_TO, 'Empleados', 'jefe_id'),
			'empleado' => array(self::HAS_MANY, 'Empleados', 'jefe_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'noempleado' => 'Número de empleado',
			'nombre' => 'Nombre',
			'apaterno' => 'Apellido paterno',
			'amaterno' => 'Apellido materno',
			'perfil_id' => 'Perfil',
			'genero' => 'Género',
			'edad' => 'Edad',
			'fecnac' => 'Fecha de nacimiento',
			'correo' => 'Correo',
			'fecregistro' => 'Fecha de registro',
			'jefe_id' => 'Jefe inmediato',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('noempleado',$this->noempleado);
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('apaterno',$this->apaterno,true);
		$criteria->compare('amaterno',$this->amaterno,true);
		$criteria->compare('perfil_id',$this->perfil_id);
		$criteria->compare('genero',$this->genero,true);
		$criteria->compare('edad',$this->edad);
		$criteria->compare('fecnac',$this->fecnac,true);
		$criteria->compare('correo',$this->correo,true);
		$criteria->compare('fecregistro',$this->fecregistro,true);
		$criteria->compare('jefe_id',$this->jefe_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}