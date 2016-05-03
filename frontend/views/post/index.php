<?php
/**
 * Created by PhpStorm.
 * User: grisha.sapgv
 * Date: 03.05.16
 * Time: 23:29
 */
?>


<h2>Новости</h2>


<?foreach ($posts->getModels() as $post): ?>
<div class="row">

    <div class="col-lg-12">

        <h3><?=$post->name?></h3>
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