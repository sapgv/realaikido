<?php
/**
 * Created by PhpStorm.
 * User: grisha.sapgv
 * Date: 08.05.16
 * Time: 20:35
 */

namespace backend\controllers;


use yii\helpers\Url;
use yii\web\Controller;
use Yii;

class AdminController extends Controller
{

    public function beforeAction($action)
    {
        // your custom code here, if you want the code to run before action filters,
        // which are triggered on the [[EVENT_BEFORE_ACTION]] event, e.g. PageCache or AccessControl

        if (Yii::$app->user->isGuest and Yii::$app->controller->route != 'site/login') {
            return $this->redirect(Url::toRoute(['site/login']));
        }

        if (!parent::beforeAction($action)) {
            return false;
        }

        // other custom code here

        return true; // or false to not run the action
    }
}