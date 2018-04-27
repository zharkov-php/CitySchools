<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\LinkPager;

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">


        <center><h1>Все автошколы Украины:</h1></center><hr>

    <div class="body-content">
        <div class="row">
            <?php foreach ($avtoshkoly as $avtoshkola): ?>
            <div class="col-md-3">
                <center><h4><b><?php echo '" ' . Html::encode($avtoshkola->name) . ' "'; ?></b></h4></center>
                <center> <div class="btn btn-warning"><?php echo Html::encode($avtoshkola->category_widget);  ?></div>
                    <a href="<?php echo Url::to(['/avtoshkoly/avtoshkola/view', 'id' => $avtoshkola->id]); ?>" class="btn btn-info">Like: <span class="likes-count"><?php echo $avtoshkola->countLikes(); ?></span></a>
                </center>
                <div class="thumbnail">
                    <a href="<?php echo Url::to(['/avtoshkoly/avtoshkola/view', 'id' => $avtoshkola->id]); ?>"> <img src="<?php echo Yii::$app->request->baseUrl . $avtoshkola->card; ?>" /></a>
                </div>
            </div>
            <?php endforeach; ?>

        </div>

    </div>
</div>
<?php  // отображаем ссылки на страницы
echo '<center>' .  LinkPager::widget([
        'pagination' => $pages,
    ]) . '<center>';?>