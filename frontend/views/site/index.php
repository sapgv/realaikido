<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Клуб Реального Айкидо';
?>
<div class="site-index">
    <!-- Marketing messaging and featurettes
================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

        <!-- Three columns of text below the carousel -->
        <div class="row">
            <div class="col-lg-4">
                <img class="img-circle" src="images/coach/topaev.jpg" alt="Generic placeholder image" width="140" height="140">
                <h2><?= Html::a('ТОПАЕВ ЕВГЕНИЙ НИКОЛАЕВИЧ',['club/coaches','#'=>'topaev'],['style'=>' text-decoration:none'])?></h2>
                <p>Черный пояс, II дан РА</p
                <p>Тренер по Реальному Айкидо</p>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
                <img class="img-circle" src="images/coach/dacun.jpg" alt="Generic placeholder image" width="140" height="140">
                <h2><?= Html::a('ДАЦУН АЛЬБЕРТ СЕРГЕЕВИЧ',['club/coaches','#'=>'dacun'],['style'=>' text-decoration:none'])?></h2>
                <p>Черный пояс, I дан РА</p>
                <p>Тренер по Реальному Айкидо</p>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
                <img class="img-circle" src="images/coach/tupota.png" alt="Generic placeholder image" width="140" height="140">
                <h2><?= Html::a('ТУПОТА ОЛЕГ ВИКТОРОВИЧ',['club/coaches','#'=>'tupota'],['style'=>' text-decoration:none'])?></h2>
                <p>Черный пояс, II дан РА</p
                <p>Тренер по Реальному Айкидо</p>
            </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->

        <div class="row">
            <div class="col-lg-4 col-lg-offset-2">
                <img class="img-circle" src="images/coach/domrachev.jpg" alt="Generic placeholder image" width="140" height="140">
                <h2><?= Html::a('ДОМРАЧЕВ ДМИТРИЙ ОЛЕГОВИЧ',['club/coaches','#'=>'domrachev'],['style'=>' text-decoration:none'])?></h2>
                <p>Черный пояс, I дан РА</p>
                <p>Тренер по Реальному Айкидо</p>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4 ">
                <img class="img-circle" src="images/coach/zharkova2.png" alt="Generic placeholder image" width="140" height="140">
                <h2><?= Html::a('ЖАРКОВА ТАТЬЯНА ПЕТРОВНА',['club/coaches','#'=>'zharkova'],['style'=>' text-decoration:none'])?></h2>
                <p>Коричневый пояс, 1 кю РА</p>
                <p>Инструктор по Реальному Айкидо</p>
            </div><!-- /.col-lg-4 -->
            <!-- /.col-lg-4 -->
        </div><!-- /.row -->

        <!-- START THE FEATURETTES -->

        <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading">РЕАЛЬНОЕ АЙКИДО</h2>
                <p class="lead">Cистема самообороны основанное мастером Любомиром Врачаревичем  на базе айкидо и дзю дзюцу</p>
            </div>
            <div class="col-md-5">
                <iframe width="450" height="386" src="https://www.youtube.com/embed/8TSREC_jJzo/0.jpg" frameborder="0" allowfullscreen></iframe>
            </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-7 col-md-push-5">
                <h2 class="featurette-heading">ЛЮБОМИР  ВРАЧАРЕВИЧ</h2>
                <p class="lead">Мастер боевых искусств, основатель Реального айкидо</p>
                    <p class="lead">Имеет ранг 10-го дана от "Международного совета основателей и гранд-мастеров боевых искусств"</p>
            </div>
            <div class="col-md-5 col-md-pull-7">
                <img class="featurette-image img-responsive center-block" data-src="holder.js/500x500/auto" alt="500x500" src="images/lubomir.png" data-holder-rendered="true">
            </div>
        </div>


        <hr class="featurette-divider">

        <!-- /END THE FEATURETTES -->


        <!-- FOOTER -->
        <footer>
            <p class="pull-right"><a href="#">Back to top</a></p>
            <p>© 2015 Company, Inc. · <a href="#">Privacy</a> · <a href="#">Terms</a></p>
        </footer>

    </div><!-- /.container -->
</div>
