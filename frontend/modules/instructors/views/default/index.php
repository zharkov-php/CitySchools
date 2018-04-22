<?php use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\LinkPager;


$this->title = 'Автошкола, инструкторы Украины || Авто инструктор Украина';
$this->params['breadcrumbs'][] = $this->title;
?>


    <center><h1><b>Инструктора Украины: </b></h1></center>


<div class="row">
  <?php  foreach ($ukraine_allInstructors as $instructor): ?>
        <div class="col-md-3">
            <div class="thumbnail">
                <img src="<?php echo Yii::$app->request->baseUrl . $instructor->image; ?>" />
                <center><h3> <?php echo Html::encode($instructor->name); ?></h3></center>
                <center><h4> <?php echo 'ID - автошколы: ' . $instructor->avtoshkoly_id; ?></h4></center>
                <center><div class="btn btn-danger" ><?php echo $instructor->city; ?></div>
            <div class="btn btn-primary" ><?php echo 'от ' . $instructor->price . ' грн'; ?></div><br><br>
            <div class="btn btn-warning" ><?php echo $instructor->car; ?></div><br><br>
            <div class="btn btn-info" > Количество лайков: <span class="likes-count"><b><?php echo $instructor->countLikes(); ?></b></div></center><br>


                <center><p><a class="btn btn-success" href="<?php echo Url::to(['/instructors/instructor/view', 'id' => $instructor->id]); ?>">Смотреть профиль  &raquo;</a></p></center>

        </div>
        </div>

    <?php  endforeach;?>
</div>

<?php  // отображаем ссылки на страницы
echo LinkPager::widget([
    'pagination' => $pages,
]);?>
