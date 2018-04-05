<?php
/**
 * Created by PhpStorm.
 * User: A0297
 * Date: 04.04.2018
 * Time: 23:29
 */

namespace frontend\modules\kiev\controllers;

use yii\web\Controller;
use frontend\models\Avtoshkoly;
use yii\web\NotFoundHttpException;

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
}