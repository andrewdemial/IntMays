<?php

namespace app\modules\doors\models;

use Yii;

/**
 * This is the model class for table "doors".
 *
 * @property integer $id
 * @property string $foto
 * @property string $title
 * @property string $price
 * @property string $description
 * @property integer $firm
 * @property integer $type
 *
 * @property DFirm $firm0
 * @property DType $type0
 */
class Doors extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'doors';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['foto', 'title', 'price', 'description', 'firm', 'type'], 'required'],
            [['description'], 'string'],
            [['firm', 'type'], 'integer'],
            [['foto', 'title', 'price'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'foto' => 'Foto',
            'title' => 'Title',
            'price' => 'Price',
            'description' => 'Description',
            'firm' => 'Firm',
            'type' => 'Type',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFirm0()
    {
        return $this->hasOne(DFirm::className(), ['id' => 'firm']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getType0()
    {
        return $this->hasOne(DType::className(), ['id' => 'type']);
    }
}
