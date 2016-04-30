<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Войти';
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-login">
    <div class="row">
        <div class="col-md-7 col-md-offset-5">
            <h1><?= Html::encode($this->title) ?></h1>
        </div>
        <!--       <div class="col-md-6 col-md-offset-4">-->
        <!--           <p>Please fill out the following fields to login:</p>-->
        <!--       </div>-->
    </div>



    <div class="row">
        <!--        <div class="col-lg-5">-->
        <?php $form = ActiveForm::begin(
            [
                'id' => 'login-form',
                'layout' => 'horizontal',
                'fieldConfig' => [
                    'template' => "{label}\n{beginWrapper}\n{input}\n{hint}\n{error}\n{endWrapper}",
                    'horizontalCssClasses' => [
                        'label' => 'col-md-2 col-md-offset-2',
                        'offset' => 'col-md-offset-4',
                        'wrapper' => 'col-md-4',
                        'error' => '',
                        'hint' => '',
                    ],
                ],

            ]
        );
        ?>

        <?= $form->field($model, 'username')->textInput(
            [
                'autofocus' => true,
            ]) ?>

        <?= $form->field($model, 'password')->passwordInput() ?>

        <?= $form->field($model, 'rememberMe')->checkbox() ?>

        <!--                <div style="color:#999;margin:1em 0">-->
        <!--                    If you forgot your password you can --><?//= Html::a('reset it', ['site/request-password-reset']) ?><!--.-->
        <!--                </div>-->

        <div class="form-group">
            <div class="col-md-4 col-md-offset-4">
                <?= Html::submitButton('Войти', ['class' => 'btn btn-default', 'name' => 'login-button']) ?>
            </div>
        </div>

        <?php ActiveForm::end(); ?>
        <!--        </div>-->
    </div>
</div>

