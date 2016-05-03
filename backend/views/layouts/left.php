<?php
use yii\bootstrap\Nav;
use yii\helpers\Url;

?>
<aside class="main-sidebar">

    <section class="sidebar">


        <?=
        Nav::widget(
            [
                'encodeLabels' => false,
                'options' => ['class' => 'sidebar-menu'],
                'items' => [
                    '<li class="header">Меню</li>',
                    ['label' => '<i class="fa fa-tachometer"></i><span>Главная</span>', 'url' => Url::toRoute(['site/index'])],
                    ['label' => '<i class="fa fa-folder"></i><span>Новости</span>', 'url' => ['/post/index'], 'active'=>$this->context->getUniqueId() ==='post'],

                    ['label' => '<i class="fa fa-cubes"></i><span>Пользователи</span>', 'url' => ['/users/index'], 'active'=>$this->context->getUniqueId() ==='users'],
                    ['label' => '<i class="fa fa-shopping-cart"></i><span>Заказы</span>', 'url' => ['/orders/index'], 'active'=>$this->context->getUniqueId() ==='orders'],
                    [
                        'label' => '<i class="glyphicon glyphicon-lock"></i><span>Sing in</span>', //for basic
                        'url' => ['/site/login'],
                        'visible' =>Yii::$app->user->isGuest
                    ],
                ],
            ]
        );
        ?>



<!--        <ul class="sidebar-menu">-->
<!--            <li class="treeview">-->
<!--                <a href="#">-->
<!--                    <i class="fa fa-share"></i> <span>Same tools</span>-->
<!--                    <i class="fa fa-angle-left pull-right"></i>-->
<!--                </a>-->
<!--                <ul class="treeview-menu">-->
<!--                    <li><a href="--><?//= \yii\helpers\Url::to(['/gii']) ?><!--"><span class="fa fa-file-code-o"></span> Gii</a>-->
<!--                    </li>-->
<!--                    <li><a href="--><?//= \yii\helpers\Url::to(['/debug']) ?><!--"><span class="fa fa-dashboard"></span> Debug</a>-->
<!--                    </li>-->
<!--                    <li>-->
<!--                        <a href="#"><i class="fa fa-circle-o"></i> Level One <i class="fa fa-angle-left pull-right"></i></a>-->
<!--                        <ul class="treeview-menu">-->
<!--                            <li><a href="#"><i class="fa fa-circle-o"></i> Level Two</a></li>-->
<!--                            <li>-->
<!--                                <a href="#">-->
<!--                                    <i class="fa fa-circle-o"></i> Level Two <i class="fa fa-angle-left pull-right"></i>-->
<!--                                </a>-->
<!--                                <ul class="treeview-menu">-->
<!--                                    <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>-->
<!--                                    <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>-->
<!--                                </ul>-->
<!--                            </li>-->
<!--                        </ul>-->
<!--                    </li>-->
<!--                </ul>-->
<!--            </li-->
<!--        </ul>-->

    </section>

</aside>
