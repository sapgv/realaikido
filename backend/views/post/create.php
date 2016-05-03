<?php
/**
 * Created by PhpStorm.
 * User: grisha.sapgv
 * Date: 03.05.16
 * Time: 23:42
 */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use dosamigos\tinymce\TinyMce;

$this->title = 'Новая новость';
$this->params['breadcrumbs'][] = ['label' => 'Новости', 'url' => ['/posts/index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="box box-widget">
    <div class="box-header">
        <h3 class="box-title"><?=$this->title;?></h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body" style="padding-top: 0px;padding-bottom: 0px;">
        <div class="row">





            <div class="col-lg-12">
                <p>Пожалуйста заполните необходимые поля</p>
                <?php $form = ActiveForm::begin(['id' => 'form-addPost']); ?>

                <?= $form->field($post, 'name') ?>

                <?= $form->field($post, 'preview')->widget(TinyMce::className(), [
                    'options' => ['rows' => 6],
                    'language' => 'ru',
                    'clientOptions' => [
                        'plugins' => [
                            "advlist autolink lists link charmap print preview anchor",
                            "searchreplace visualblocks code fullscreen",
                            "insertdatetime media table contextmenu paste"
                        ],
                        'toolbar' => "undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
                    ]
                ]);?>

                <?= $form->field($post, 'content')->widget(TinyMce::className(), [
                    'options' => ['rows' => 6],
                    'language' => 'ru',
                    'clientOptions' => [
                        'plugins' => [
                            "advlist autolink lists link charmap print preview anchor",
                            "searchreplace visualblocks code fullscreen",
                            "insertdatetime media table contextmenu paste"
                        ],
                        'toolbar' => "undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
                    ]
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

