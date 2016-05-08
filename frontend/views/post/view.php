<?php
/**
 * Created by PhpStorm.
 * User: grisha.sapgv
 * Date: 05.05.16
 * Time: 0:46
 */

$this->title = 'Новости';
//$this->params['breadcrumbs'][] = $this->title;
?>

<h3><?= $post->name;?></h3>

<p class="text-muted"><?= $post->getFormattedDate()?></p>
<p><?= $post->content;?></p>

