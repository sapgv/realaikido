<?php
/**
 * Created by PhpStorm.
 * User: grisha.sapgv
 * Date: 01.05.16
 * Time: 20:36
 */

use yii\grid\ActionColumn;
use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;
use yii\widgets\LinkPager;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Новости';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="box">
    <div class="box-header with-border">

        <h3 class="box-title"><?= Html::encode($this->title) ?></h3>

        <div class="box-tools">
            <div class="input-group input-group-sm" style="width: 150px;">
                <?
                echo Html::a('Добавить новость',Url::toRoute(['post/create']),['class'=>'btn btn-success']);
                ?>
            </div>
        </div>


    </div>




    <div class="box-body">
        <?= GridView::widget([
            'dataProvider' => $posts,
            'layout' => "{items}",
            'tableOptions' => ['class'=>'table table-bordered table-hover'],
            'columns' => [
                // [
                // 'class' => 'yii\grid\SerialColumn',
                // 'header' =>'#'
                // ],
                [
                    'class' => 'yii\grid\DataColumn', // can be omitted, as it is the default
                    'label' => '№',
                    'value' => function ($model) {
                        return $model->id;
                    },
                ],
                [
                    'class' => 'yii\grid\DataColumn', // can be omitted, as it is the default
                    'label' => 'Дата',
                    'format' => ['date', 'php:d.m.Y'],
                    'value' => function ($model) {
                        return $model->created_at;
                    },
                ],

                [
                    'class' => 'yii\grid\DataColumn', // can be omitted, as it is the default
                    'label' => 'Заголовок',
                    'format' => 'raw',
                    'value' => function ($model) {
                        return Html::a($model->name,['post/view','id'=>$model->id]);
                    },
                ],

                [
                    'class' => 'yii\grid\DataColumn', // can be omitted, as it is the default
                    'label' => 'Заголовок',
                    'format' => 'raw',
                    'value' => function ($model) {
                        return
                            Html::a('Просмотр',['post/view','id'=>$model->id],['class'=>'btn btn-xs btn-default'])
                            .
                            Html::a('Редактировать',['post/edit','id'=>$model->id],['class'=>'btn btn-xs btn-warning', 'style'=>'margin-left:10px;']);

                    },
                ],





            ],
        ]); ?>

        <?php

        echo LinkPager::widget([
            'pagination'=>$posts->pagination,
        ]);
        ?>
    </div>


</div>



