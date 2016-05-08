<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'Клуб Реального Айкидо';
?>
<div class="site-index">

   <div class="row">
       <div class="col-lg-3">

           <!-- small box -->
           <div class="small-box bg-green">
               <div class="inner">
                   <h3><?=count($posts)?></h3>

                   <p>Новости</p>
               </div>
               <div class="icon">
                   <i class="ion ion-cube"></i>
               </div>
               <?= Html::a('Перейти <i class="fa fa-arrow-circle-right"></i>', Url::toRoute('/post/index'), [ 'class' => 'small-box-footer' ]) ?>
           </div>

       </div>
   </div>

</div>
