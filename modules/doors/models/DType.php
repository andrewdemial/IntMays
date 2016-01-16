<?php

namespace app\modules\doors\models;

use Yii;

/**
 * This is the model class for table "d_type".
 *
 * @property integer $id
 * @property integer $type
 *
 * @property DFirmDType[] $dFirmDTypes
 * @property DFirm[] $firms
 * @property Doors[] $doors
 */
class DType extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'd_type';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['type'], 'required'],
            [['type'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'type' => 'Type',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDFirmDTypes()
    {
        return $this->hasMany(DFirmDType::className(), ['type' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFirms()
    {
        return $this->hasMany(DFirm::className(), ['id' => 'firm'])->viaTable('d_firm_d_type', ['type' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDoors()
    {
        return $this->hasMany(Doors::className(), ['type' => 'id']);
    }
}
