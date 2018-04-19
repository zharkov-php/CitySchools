<?php

namespace frontend\modules\comment\controllers;

use frontend\models\Comment;
use frontend\models\User;
use yii\web\Controller;
use yii\web\NotFoundHttpException;

/**
 * Default controller for the `comment` module
 */
class DefaultController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {

        $allComments = Comment::find()->orderBy('id DESC')->all();


        return $this->render('index', [
            'allComments' => $allComments,



        ]);
    }



}
