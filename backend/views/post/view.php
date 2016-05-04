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
use yii\helpers\Url;

$this->title = 'Новость';
$this->params['breadcrumbs'][] = ['label' => 'Новости', 'url' => ['/posts/index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="box box-widget">
    <div class="box-header">
        <h3 class="box-title"><?=$this->title;?></h3>

        <div class="box-tools">
            <div class="input-group input-group-sm" style="width: 150px;">
                <?
                echo Html::a('Редактировать',Url::toRoute(['post/edit','id'=>$post->id]),['class'=>'btn btn-success']);
                ?>
            </div>
        </div>
    </div>


    <!-- /.box-header -->
    <div class="box-body" style="padding-top: 0px;padding-bottom: 0px;">
        <div class="row">





            <div class="col-lg-12">

                <h2><?= $post->name ?></h2>
                <?
                if ($post->active) {
                    echo Html::tag('span','Новость активна',['class'=>'label label-success']);
                }
                else {
                    echo Html::tag('span','Новость в архиве',['class'=>'label label-warning']);
                }
                ?>

                <h4>Превью</h4>
                <p><?= $post->preview;?></p>
                <h4>Содержание</h4>
                <p><?= $post->content;?></p>



            </div>
        </div>
    </div>


    <div class="box-footer text-center" style="border-top: none;">

    </div>

</div>

