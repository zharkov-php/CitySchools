<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\Instructor */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Instructors', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="instructor-view">

    <h1><?= Html::encode($this->title) ?></h1>


   <?php  echo $instructor->name;?><hr>
   <?php  echo $instructor->avtoshkoly_id;?>


</div>
