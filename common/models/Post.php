<?php
/**
 * Created by PhpStorm.
 * User: grisha.sapgv
 * Date: 01.05.16
 * Time: 20:21
 */

namespace common\models;


use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;

class Post extends ActiveRecord
{

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%post}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['name', 'required'],
            ['preview', 'required'],
            ['content', 'required'],
            ['active', 'required'],

            ['name,preview,content,active','safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            TimestampBehavior::className(),
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID #',
            'name' => 'Заголовок',
            'active' => 'Новость активна',
            'preview' => 'Превью',
            'content' => 'Содержание',
            'created_at' => 'Дата создания',
            'updated_at' => 'Дата обновления',
        ];
    }

    public function getFormattedDate()
    {
        return \Yii::$app->formatter->asDate($this->created_at);
    }

}