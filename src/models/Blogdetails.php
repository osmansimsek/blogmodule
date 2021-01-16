<?php

namespace osmansimsek\blogmodule\models;

use Yii;

/**
 * This is the model class for table "blogdetails".
 *
 * @property int $blogid
 * @property string $blogtitle
 * @property string $blogheader
 * @property string $blogtext
 * @property string $blogauthorname
 * @property string $blogauthorlastname
 *
 * @property Blogtitles $blogtitle0
 */
class Blogdetails extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'blogdetails';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['blogtitle', 'blogheader', 'blogtext', 'blogauthorname', 'blogauthorlastname'], 'required'],
            [['blogtext'], 'string'],
            [['blogtitle'], 'string', 'max' => 100],
            [['blogheader', 'blogauthorname', 'blogauthorlastname'], 'string', 'max' => 255],
            [['blogtitle'], 'exist', 'skipOnError' => true, 'targetClass' => Blogtitles::className(), 'targetAttribute' => ['blogtitle' => 'blogtitle']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'blogid' => 'Blogid',
            'blogtitle' => 'Blogtitle',
            'blogheader' => 'Blogheader',
            'blogtext' => 'Blogtext',
            'blogauthorname' => 'Blogauthorname',
            'blogauthorlastname' => 'Blogauthorlastname',
        ];
    }

    /**
     * Gets query for [[Blogtitle0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBlogtitle0()
    {
        return $this->hasOne(Blogtitles::className(), ['blogtitle' => 'blogtitle']);
    }
}
