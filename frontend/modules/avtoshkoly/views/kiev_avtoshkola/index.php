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
<div class="site-index">

    <div class="jumbotron">
        <h1>Все автошколы Киева:</h1>
    </div>

    <div class="body-content">

        <div class="row">

            <?php foreach ($avtoshkoly as $avtoshkola): ?>


                <div class="col-lg-4">
                    <h2><?php echo Html::encode($avtoshkola->name); ?></h2>
                    <?php if ($avtoshkola->city == 1){
                        echo 'Киев';
                    }else{
                        echo 'город не указан';
                    } ?>

                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                        dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                        ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                        fugiat nulla pariatur.</p>

                    <p><a class="btn btn-default" href="<?php echo Url::to(['/avtoshkoly/avtoshkola/view', 'id' => $avtoshkola->id]); ?>"><?php echo Html::encode($avtoshkola->name_url); ?></a> Количество лайков: <span class="likes-count"><?php echo $avtoshkola->countLikes(); ?></span></p>

                </div>

            <?php endforeach; ?>

        </div>

    </div>
</div>
<?php  // отображаем ссылки на страницы
echo '<center>' .  LinkPager::widget([
        'pagination' => $pages,
    ]) . '<center>';?>