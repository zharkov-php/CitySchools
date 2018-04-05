<?php
/**
 * Created by PhpStorm.
 * User: A0297
 * Date: 04.04.2018
 * Time: 23:34
 */
$this->title = $kiev_avtoshkola->title_seo;
//$this->keywords = $kiev_avtoshkola->description_seo;
\Yii::$app->view->registerMetaTag([
    'name' => 'description',
    'content' =>  $kiev_avtoshkola->description_seo
]);
\Yii::$app->view->registerMetaTag([
    'name' => 'keywords',
    'content' =>  $kiev_avtoshkola->keywords_seo
]);

echo $kiev_avtoshkola->name;