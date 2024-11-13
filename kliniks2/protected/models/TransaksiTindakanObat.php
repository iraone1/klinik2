<?php

/**
 * This is the model class for table "transaksi_tindakan_obat".
 *
 * The followings are the available columns in table 'transaksi_tindakan_obat':
 * @property integer $id
 * @property integer $id_pasien
 * @property integer $id_tindakan
 * @property integer $id_obat
 * @property integer $id_pegawai
 * @property string $tanggal_tindakan
 *
 * The followings are the available model relations:
 * @property Pasien $idPasien
 * @property Tindakan $idTindakan
 * @property Obat $idObat
 * @property Pegawai $idPegawai
 */
class TransaksiTindakanObat extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'transaksi_tindakan_obat';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('tanggal_tindakan', 'required'),
			array('id_pasien, id_tindakan, id_obat, id_pegawai', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, id_pasien, id_tindakan, id_obat, id_pegawai, tanggal_tindakan', 'safe', 'on'=>'search'),
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
			'idPasien' => array(self::BELONGS_TO, 'Pasien', 'id_pasien'),
			'idTindakan' => array(self::BELONGS_TO, 'Tindakan', 'id_tindakan'),
			'idObat' => array(self::BELONGS_TO, 'Obat', 'id_obat'),
			'idPegawai' => array(self::BELONGS_TO, 'Pegawai', 'id_pegawai'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'id_pasien' => 'Id Pasien',
			'id_tindakan' => 'Id Tindakan',
			'id_obat' => 'Id Obat',
			'id_pegawai' => 'Id Pegawai',
			'tanggal_tindakan' => 'Tanggal Tindakan',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('id_pasien',$this->id_pasien);
		$criteria->compare('id_tindakan',$this->id_tindakan);
		$criteria->compare('id_obat',$this->id_obat);
		$criteria->compare('id_pegawai',$this->id_pegawai);
		$criteria->compare('tanggal_tindakan',$this->tanggal_tindakan,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return TransaksiTindakanObat the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
