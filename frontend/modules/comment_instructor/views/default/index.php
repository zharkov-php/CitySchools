<?php use yii\helpers\Html;
use yii\widgets\LinkPager;
?>
<center><h1>Все комментарии про Инструкторов: </h1></center>
<?php foreach ($allComments as $comment): ?>

    <div class="alert alert-info" role="alert">
        <div class="row">
            <div class="col-md-3">
                <?php echo 'Автор:  '. '<b>' . Html::encode($comment->name). '</b>'?>
            </div>
            <div class="col-md-3">
                <?php echo 'ID - инструктора ' . '<b>' . Html::encode($comment->instructor_id)  . '</b>'?>
            </div>
            <div class="col-md-3">
                <?php echo $comment->getDate() ?>
            </div>
            <div class="col-md-3">
                <?php echo 'Комментарий: № ' .'<b>' . Html::encode($comment->id). '</b>'?>
            </div>
            <b>
        </div>
        <div class="alert alert-info" role="alert">
            <?= Html::encode($comment->text); ?>
            </b>
        </div>
    </div>
    <hr>
<?php endforeach;?>

<?php  // отображаем ссылки на страницы
echo LinkPager::widget([
    'pagination' => $pages,
]);?>
