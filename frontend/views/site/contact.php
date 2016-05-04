<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Контакты';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-contact">
    <h1><?= Html::encode($this->title) ?></h1>

    <div class="row">

        <div class="col-lg-3">
            <address>
                <strong>Топаев Евгений Николаевич</strong>
                <br>
                <a href="mailto:#">e.topayev@gmail.com</a>
                <br>
                +7 982 648 777 5
                <br>
            </address>


        </div>
        <div class="col-lg-3">

            <address>
                <strong>Дацун Альберт Сергеевич</strong>
                <br>
                <a href="mailto:#">alikdacun@gmail.com</a>
                <br>
                +7 909 002 94 07
                <br>
            </address>
        </div>
        <div class="col-lg-3">

            <address>
                <strong>Тупота Олег Викторович</strong>
                <br>
                <a href="mailto:#">tupotaoleg2015@gmail.com</a>
                <br>
                +7 982 735 03 04
                <br>
            </address>
        </div>
        <div class="col-lg-3">
            <address>
                <strong>Жаркова Татьяна Петровна</strong>
                <br>
                +7 912 297 08 58
                <br>
            </address>

        </div>


    </div>

</div>
