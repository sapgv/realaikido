<?php
/**
 * Created by PhpStorm.
 * User: grisha.sapgv
 * Date: 01.05.16
 * Time: 0:03
 */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\helpers\Url;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>

<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
  <meta charset="<?= Yii::$app->charset ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?= Html::csrfMetaTags() ?>
  <title><?= Html::encode($this->title) ?></title>
  <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>


<div class="navbar-wrapper">

  <div class="container">

    <div class="row">
      <div class="col-lg-6">

      </div>
      <div class="col-lg-6">
        <h2 class="pull-right" style="color: #9d9d9d">+7 (912) 2 800 572</h2>

      </div>
    </div>
  </div>
  <div class="container">

    <?php
    NavBar::begin([
        'brandLabel' => 'Реальное айкидо',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-static-top',
        ],
    ]);
    $menuItems = [
        ['label' => 'Главная', 'url' => ['/site/index']],
        ['label' => 'Новости', 'url' => ['/post/index']],
        [
            'label' => 'Реальное айкидо',
            'items' => [
                ['label' => 'Айкидо', 'url' => ['/real/index']],
                ['label' => 'Любомир  Врачаревич', 'url' => '#'],
                ['label' => 'Мастера', 'url' => ['real/coaches']],
                ['label' => 'Клубы', 'url' => '#'],
            ],
        ],
        ['label' => 'Контакты', 'url' => ['/site/contact']],
    ];
    if (Yii::$app->user->isGuest) {
      $menuItems[] = ['label' => 'Signup', 'url' => ['/site/signup']];
      $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
    } else {

      $menuItems[] = [
          'label' => 'Личный кабинет',
          'items' => [

              ['label' => 'login', 'url' => ['/site/login']],
              ['label' => 'logout', 'url' => '/site/logout'],
          ],
      ];
//        $menuItems[] = '<li>'
//            . Html::beginForm(['/site/logout'], 'post')
//            . Html::submitButton(
//                'Logout (' . Yii::$app->user->identity->username . ')',
//                ['class' => 'btn btn-link']
//            )
//            . Html::endForm()
//            . '</li>';
    }
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-left'],
//        'encodeLabels'=>true,
        'items' => $menuItems,
    ]);



    //    echo Nav::widget([
    //        'items' => [
    //            [
    //                'label' => 'Home',
    //                'url' => ['site/index'],
    ////                'linkOptions' => [...],
    //        ],
    //        [
    //            'label' => 'Dropdown',
    //            'items' => [
    //                ['label' => 'Level 1 - Dropdown A', 'url' => '#'],
    //                '<li class="divider"></li>',
    //                '<li class="dropdown-header">Dropdown Header</li>',
    //                ['label' => 'Level 1 - Dropdown B', 'url' => '#'],
    //            ],
    //        ],
    //        [
    //            'label' => 'Login',
    //            'url' => ['site/login'],
    //            'visible' => Yii::$app->user->isGuest
    //        ],
    //    ],
    //    'options' => ['class' =>'nav navbar-nav navbar-right'], // set this to nav-tab to get tab-styled navigation
    //]);

    NavBar::end();


    ?>


  </div>
</div>

<?if(Yii::$app->controller->route == "site/index"):?>

  <!-- Carousel
================================================== -->
  <div id="myCarousel" class="carousel slide" data-ride="carousel" style="
  background: url(images/img_1.jpg) no-repeat;
    -moz-background-size: 100%; /* Firefox 3.6+ */
    -webkit-background-size: 100%; /* Safari 3.1+ и Chrome 4.0+ */
    -o-background-size: 100%; /* Opera 9.6+ */
    background-size: 100%; /* Современные браузеры */
    height: 560px;">

  </div><!-- /.carousel -->

<?endif;?>
<div class="container" <?php if(Yii::$app->controller->route != "site/index"): ?> style="margin-top: 100px;"<?php endif;?>>
  <?= Breadcrumbs::widget([
      'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
  ]) ?>
  <?= Alert::widget() ?>
  <?= $content ?>
</div>




<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>

