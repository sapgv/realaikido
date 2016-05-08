<?php
/**
 * Created by PhpStorm.
 * User: grisha.sapgv
 * Date: 03.05.16
 * Time: 23:42
 */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use zxbodya\yii2\elfinder\TinyMceElFinder;
use zxbodya\yii2\tinymce\TinyMce;

$this->title = 'Новость';
$this->params['breadcrumbs'][] = ['label' => 'Новости', 'url' => ['/posts/index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="box box-widget">
    <div class="box-header">
        <h3 class="box-title"><?=$this->title;?></h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body" style="padding-top: 0px; padding-bottom: 0px;">
        <div class="row">





            <div class="col-lg-12">
                <p>Пожалуйста заполните необходимые поля</p>
                <?php $form = ActiveForm::begin(['id' => 'form-addPost']); ?>

                <?= $form->field($post, 'name') ?>
                <?= $form->field($post, 'active')->checkbox() ?>
                <?= $form->field($post, 'preview')->widget(TinyMce::className(), [

                    'fileManager' => [
                        'class' => TinyMceElFinder::className(),
                        'connectorRoute' => 'el-finder/connector',
                    ],
                    'options' => ['rows' => 20],
                    'language' => 'ru',

                ]);?>

                <?= $form->field($post, 'content')->widget(TinyMce::className(), [

                    'fileManager' => [
                        'class' => TinyMceElFinder::className(),
                        'connectorRoute' => 'el-finder/connector',
                    ],
                    'options' => ['rows' => 20],
                    'language' => 'ru',

                ]);?>




                <div class="form-group">
                    <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success', 'name' => 'addPost-button']) ?>
                </div>

                <?php ActiveForm::end(); ?>

            </div>
        </div>
    </div>


    <div class="box-footer text-center" style="border-top: none;">

    </div>

</div>

