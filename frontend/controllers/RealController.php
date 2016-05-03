<?php
/**
 * Created by PhpStorm.
 * User: grisha.sapgv
 * Date: 01.05.16
 * Time: 20:04
 */

namespace frontend\controllers;


use yii\web\Controller;

class RealController extends Controller
{

    public function actionIndex()
    {

        return $this->render('index');

    }


}