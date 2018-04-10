<?php
/**
 * Created by PhpStorm.
 * User: A0297
 * Date: 04.04.2018
 * Time: 23:29
 */

namespace frontend\modules\kiev\controllers;

use Yii;
use yii\web\Controller;
use frontend\models\Avtoshkoly;
use yii\web\NotFoundHttpException;
use yii\web\Response;

class AvtoshkolaController extends Controller
{

    public function actionView($name_url)
    {
        return $this->render('view', [
            'kiev_avtoshkola' => $this->findAvtoshkola($name_url),
        ]);
    }

  //  public function actionView($id)
 //   {
  //      return $this->render('view', [
   //         'kiev_avtoshkola' => $this->findAvtoshkola($id),
   //     ]);
  //  }




    /**
     * @param integer $id
     * @return Avtoshkoly
     * @throws NotFoundHttpException
     */
  //  private function findAvtoshkola($id)
  //  {
   //     if ($kiev_avtoshkola = Avtoshkoly::find()->where(['id' => $id])->one()) {
    //        return $kiev_avtoshkola;
   //     }
   //     throw new NotFoundHttpException();
  //  }
    /**
     * @param integer $name_url
     * @return Avtoshkoly
     * @throws NotFoundHttpException
     */
  private function findAvtoshkola($name_url)
{
    if ($kiev_avtoshkola = Avtoshkoly::find()->where(['name_url' => $name_url])->one()) {
        return $kiev_avtoshkola;
    }
    throw new NotFoundHttpException();
}

    private function findAvtoshkolaId($id)
    {
        if ($kiev_avtoshkolaId = Avtoshkoly::find()->where(['id' => $id])->one()) {
            return $kiev_avtoshkolaId;
        }
        throw new NotFoundHttpException();
    }

    public function actionLike()
    {
        if (Yii::$app->user->isGuest) {
            return $this->redirect(['/user/default/login']);
        }
        Yii::$app->response->format = Response::FORMAT_JSON;
        $id = Yii::$app->request->post('id');
        $post = $this->findAvtoshkolaId($id);
        /* @var $currentUser User */
        $currentUser = Yii::$app->user->identity;
        $post->like($currentUser);
        return [
            'success' => true,
            'likesCount' => $post->countLikes(),
        ];
    }
    public function actionUnlike()
    {
        if (Yii::$app->user->isGuest) {
            return $this->redirect(['/user/default/login']);
        }
        Yii::$app->response->format = Response::FORMAT_JSON;
        $id = Yii::$app->request->post('id');
        /* @var $currentUser User */
        $currentUser = Yii::$app->user->identity;
        $post = $this->findAvtoshkolaId($id);
        $post->unLike($currentUser);
        return [
            'success' => true,
            'likesCount' => $post->countLikes(),
        ];
    }
}