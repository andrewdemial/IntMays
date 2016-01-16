<?php

namespace app\modules\doors\models;

use Yii;

/**
 * This is the model class for table "d_firm".
 *
 * @property integer $id
 * @property string $title
 *
 * @property DFirmDType[] $dFirmDTypes
 * @property DType[] $types
 * @property Doors[] $doors
 */
class DFirm extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'd_firm';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title'], 'required'],
            [['title'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDFirmDTypes()
    {
        return $this->hasMany(DFirmDType::className(), ['firm' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTypes()
    {
        return $this->hasMany(DType::className(), ['id' => 'type'])->viaTable('d_firm_d_type', ['firm' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDoors()
    {
        return $this->hasMany(Doors::className(), ['firm' => 'id']);
    }
}
