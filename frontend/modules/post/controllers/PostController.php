<?php
/**
 * Created by PhpStorm.
 * User: A0297
 * Date: 08.04.2018
 * Time: 0:21
 */

namespace frontend\modules\post\controllers;

use frontend\models\Post;
use yii\web\Controller;

class PostController extends Controller
{
    public function actionView($id)
    {
        return $this->render('view', [
            'post' => $this->findPost($id),
        ]);
    }

    /**
     * @param integer $post
     * @return Post
     * @throws NotFoundHttpException
     */
    private function findPost($id)
    {
        if ($post = Post::find()->where(['post' => $id])->one()) {
            return $post;
        }
        throw new NotFoundHttpException();
    }

}