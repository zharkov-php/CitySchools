<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\LinkPager;

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">


        <center><h1>Все автошколы Киева:</h1></center>

    <div class="body-content">
        <div class="row">
            <?php foreach ($avtoshkoly as $avtoshkola): ?>
            <div class="col-md-4">                    <center><h4><b><?php echo '"' . Html::encode($avtoshkola->name) . '"'; ?></b></h4></center>

                <div class="thumbnail">

                    <div class="btn btn-warning"><?php echo Html::encode($avtoshkola->category_widget);  ?></div>
                    <div class="btn btn-danger" ><?php echo 'Обучения от ' . $avtoshkola->price . ' грн'; ?></div>
                    <a href="<?php echo Url::to(['/avtoshkoly/avtoshkola/view', 'id' => $avtoshkola->id]); ?>"> <img src="<?php echo Yii::$app->request->baseUrl . $avtoshkola->card; ?>" /></a>
                        <div class="btn btn-primary"><?php if ($avtoshkola->city == 1){
                                echo 'Киев';
                            }else{
                                echo 'город не указан';
                            } ?></div>

                    <a class="btn btn-info">Количество лайков: <span class="likes-count"><?php echo $avtoshkola->countLikes(); ?></span></a><br>
                    <a class="btn btn-success" href="<?php echo Url::to(['/avtoshkoly/avtoshkola/view', 'id' => $avtoshkola->id]); ?>">Смотреть АвтоШколу &raquo;</a>

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