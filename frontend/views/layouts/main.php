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
                ['label' => 'Мастера', 'url' => '#'],
                ['label' => 'Клубы', 'url' => '#'],
            ],
        ],
        ['label' => 'Contact', 'url' => ['/site/contact']],
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
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class=""></li>
      <li data-target="#myCarousel" data-slide-to="1" class=""></li>
      <li data-target="#myCarousel" data-slide-to="2" class="active"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
      <div class="item">
        <img class="first-slide" src="images/img_1.jpg" alt="First slide">
        <div class="container">
          <div class="carousel-caption">
            <h1>Example headline.</h1>
            <p>Note: If you're viewing this page via a <code>file://</code> URL, the "next" and "previous" Glyphicon buttons on the left and right might not load/display properly due to web browser security rules.</p>
            <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
          </div>
        </div>
      </div>
      <div class="item active left">
        <img class="second-slide" src="images/img_2.jpg" alt="Second slide">
        <div class="container">
          <div class="carousel-caption">
            <h1>Another example headline.</h1>
            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
            <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
          </div>
        </div>
      </div>
      <div class="item next left">
        <img class="third-slide" src="images/img_3.jpg" alt="Third slide">
        <div class="container">
          <div class="carousel-caption">
            <h1>One more for good measure.</h1>
            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
            <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
          </div>
        </div>
      </div>
    </div>
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
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

