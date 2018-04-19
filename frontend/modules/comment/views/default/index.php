



<?php use yii\helpers\Html;

foreach ($allComments as $comment): ?>
<div class="alert alert-info" role="alert">
    <div class="row">
        <div class="col-md-4">


<?php echo 'ID - автора коментария ' . '<b>' . $comment->user_id  . '</b>' ?>
        </div>
        <div class="col-md-4">
<?php echo 'ID - автошколы ' . '<b>' . $comment->avtoshkoly_id  . '</b>'?>
        </div>
        <div class="col-md-4">
<?php echo $comment->date ?>
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
