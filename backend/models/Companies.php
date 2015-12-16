<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "companies".
 *
 * @property integer $id
 * @property string $name
 * @property string $about
 * @property string $url
 * @property string $logo_url
 */
class Companies extends \yii\db\ActiveRecord implements DataProviderInterface
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'companies';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['about'], 'string'],
            [['name', 'url', 'logo_url'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'about' => 'About',
            'url' => 'Url',
            'logo_url' => 'Logo Url',
        ];
    }
}
