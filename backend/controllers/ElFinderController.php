<?php
/**
 * Created by PhpStorm.
 * User: grisha.sapgv
 * Date: 08.05.16
 * Time: 19:13
 */
namespace backend\controllers;

use Yii;
use yii\web\Controller;
use zxbodya\yii2\elfinder\ConnectorAction;

class ElFinderController extends Controller
{
    public function actions()
    {
        return [
            'connector' => array(
                'class' => ConnectorAction::className(),
                'settings' => array(
                    'root' => Yii::getAlias('@images'),
                    'URL' => Yii::getAlias('@imagesUrl').'/',
                    'rootAlias' => 'Home',
                    'mimeDetect' => 'none'
                )
            ),
        ];
    }
}