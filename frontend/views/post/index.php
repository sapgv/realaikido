<?php
/**
 * Created by PhpStorm.
 * User: grisha.sapgv
 * Date: 03.05.16
 * Time: 23:29
 */
use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'Новости';

?>


<h2>Новости</h2>


<?foreach ($posts->getModels() as $post): ?>
<div class="row">

    <div class="col-lg-12">

        <?= Html::a($post->name,Url::toRoute(['post/view','id'=>$post->id]),['class'=>'h3'])?>
        <p class="text-muted"><?= $post->getFormattedDate()?></p>

        <p><?= $post->preview;?></p>
    </div>
</div>

<?endforeach;?>

<?
echo \yii\widgets\LinkPager::widget([
    'pagination'=>$posts->pagination,
    'options'=>[
        'class'=>'pagination',
        'style'=>'margin-bottom:0px;'
    ],
]);

?>