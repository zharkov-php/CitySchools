<?php
/**
 * Created by PhpStorm.
 * User: A0297
 * Date: 07.04.2018
 * Time: 23:57
 */

/* @var $this yii\web\View */
/* @var $post frontend\models\Post */
use yii\helpers\Html;
?>
<div class="post-default-index">

    <div class="row">

        <div class="col-md-12">
            <?php if ($post->user): ?>
                <?php echo $post->user->username; ?>
            <?php endif; ?>
        </div>



        <div class="col-md-12">
            <?php echo Html::encode($post->description); ?>
        </div>

    </div>



</div>


</div>