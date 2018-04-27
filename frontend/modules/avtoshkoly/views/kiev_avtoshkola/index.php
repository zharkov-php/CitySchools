<?php
/**
 * Created by PhpStorm.
 * User: A0297
 * Date: 23.04.2018
 * Time: 15:39
 */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\LinkPager;

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
    <center><h1>Киев и Киевская область:</h1></center><hr>

<?php include 'zone_Kiev_widget.php'; ?><br>
<?php include 'zone_Kiev_Oblast_widget.php'; ?><br>

    <div class="container">
        <?php foreach ($avtoshkoly as $avtoshkola): ?>
        <div class="filterDiv5 <?php echo $avtoshkola->zone_widget;?> ">
            <center><h4><b><?php echo '"' . Html::encode($avtoshkola->name) . '"'; ?></b></h4></center>
            <center> <a href="<?php echo Url::to(['/avtoshkoly/avtoshkola/view', 'id' => $avtoshkola->id]); ?>" class="btn btn-warning">кат. <?php echo Html::encode($avtoshkola->category_widget);  ?></a>
                <a href="<?php echo Url::to(['/avtoshkoly/avtoshkola/view', 'id' => $avtoshkola->id]); ?>" class="btn btn-info">Like: <span class="likes-count"><?php echo $avtoshkola->countLikes(); ?></span></a>
            </center>
            <div class="thumbnail">
                <a href="<?php echo Url::to(['/avtoshkoly/avtoshkola/view', 'id' => $avtoshkola->id]); ?>"> <img src="<?php echo Yii::$app->request->baseUrl . $avtoshkola->card; ?>" /></a>
            </div>
        </div>


     <?php endforeach;?>
    </div>
    </div>



<?php  // отображаем ссылки на страницы
echo '<center>' .  LinkPager::widget([
        'pagination' => $pages,
    ]) . '<center>';?>