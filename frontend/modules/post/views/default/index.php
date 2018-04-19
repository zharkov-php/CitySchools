<?php

use yii\helpers\Url;
/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Привет!!!</h1>

        <p class="lead">You have successfully created your Yii-powered application.</p>

        <p><a class="btn btn-lg btn-success" href="http://www.yiiframework.com">Get started with Yii</a></p>
    </div>

    <div class="body-content">

        <div class="row">
            <?php use yii\helpers\Html;
            use yii\widgets\LinkPager;?>



              <?php foreach ($models as $model): ?>


                <div class="col-lg-4">
                    <h2> <?php echo $model->title; ?></h2>

                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                        dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                        ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                        fugiat nulla pariatur.</p>

                    <p><a class="btn btn-default" href="#"><?php echo Html::encode($model->title); ?>&raquo;</a></p>

                </div>

            <?php endforeach; ?>
            <?php  // отображаем ссылки на страницы
            echo LinkPager::widget([
                'pagination' => $pages,
            ]);?>





        </div>

    </div>
</div>

