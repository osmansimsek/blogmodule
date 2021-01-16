<?php

namespace osmansimsek\blogmodule\models;

use Yii;

/**
 * This is the model class for table "blogtitles".
 *
 * @property string $blogtitle
 *
 * @property Blogdetails[] $blogdetails
 */
class Blogtitles extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'blogtitles';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['blogtitle'], 'required'],
            [['blogtitle'], 'string', 'max' => 100],
            [['blogtitle'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'blogtitle' => 'Blogtitle',
        ];
    }

    /**
     * Gets query for [[Blogdetails]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBlogdetails()
    {
        return $this->hasMany(Blogdetails::className(), ['blogtitle' => 'blogtitle']);
    }
}
