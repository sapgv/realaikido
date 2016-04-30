<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SignupForm */

use common\models\User;
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Регистрация';
?>
<div class="site-signup">
    <div class="row">
        <div class="col-md-7 col-md-offset-5">
            <h1><?= Html::encode($this->title) ?></h1>
        </div>
    </div>


    <div class="row">
        <?php $form = ActiveForm::begin(
            [
                'id' => 'login-form',
                'layout' => 'horizontal',
                'fieldConfig' => [
                    'template' => "{label}\n{beginWrapper}\n{input}\n{hint}\n{error}\n{endWrapper}",
                    'horizontalCssClasses' => [
                        'label' => 'col-md-2 col-md-offset-2',
                        'offset' => 'col-md-offset-4',
                        'wrapper' => 'col-md-5',
                        'error' => '',
                        'hint' => '',
                    ],
                ],

            ]
        );
        ?>

        <?= $form->field($model, 'username')->textInput() ?>

        <?= $form->field($model, 'email') ?>

        <?= $form->field($model, 'password')->passwordInput() ?>

        <div class="form-group">
            <div class="col-md-4 col-md-offset-4">
                <?= Html::submitButton('Зарегистрироваться', ['class' => 'btn btn-default', 'name' => 'signup-button']) ?>
            </div>
        </div>

        <?php ActiveForm::end(); ?>
    </div>
</div>
