<?php

/**
 * This is the model class for table "pembayaran_tagihan".
 *
 * The followings are the available columns in table 'pembayaran_tagihan':
 * @property integer $id
 * @property integer $id_pasien
 * @property string $jumlah
 * @property string $tanggal_pembayaran
 * @property integer $dibayar_oleh
 *
 * The followings are the available model relations:
 * @property Pasien $idPasien
 * @property Pegawai $dibayarOleh
 */
class PembayaranTagihan extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'pembayaran_tagihan';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('tanggal_pembayaran', 'required'),
			array('id_pasien, dibayar_oleh', 'numerical', 'integerOnly'=>true),
			array('jumlah', 'length', 'max'=>10),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, id_pasien, jumlah, tanggal_pembayaran, dibayar_oleh', 'safe', 'on'=>'search'),
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
			'dibayarOleh' => array(self::BELONGS_TO, 'Pegawai', 'dibayar_oleh'),
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
			'jumlah' => 'Jumlah',
			'tanggal_pembayaran' => 'Tanggal Pembayaran',
			'dibayar_oleh' => 'Dibayar Oleh',
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
		$criteria->compare('jumlah',$this->jumlah,true);
		$criteria->compare('tanggal_pembayaran',$this->tanggal_pembayaran,true);
		$criteria->compare('dibayar_oleh',$this->dibayar_oleh);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return PembayaranTagihan the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
