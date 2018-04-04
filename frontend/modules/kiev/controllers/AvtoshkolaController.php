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
    public function actionView($id)
    {
        return $this->render('view', [
            'kiev_avtoshkola' => $this->findAvtoshkola($id),
        ]);
    }
    /**
     * @param integer $id
     * @return Avtoshkoly
     * @throws NotFoundHttpException
     */
    private function findAvtoshkola($id)
    {
        if ($kiev_avtoshkola = Avtoshkoly::find()->where(['id' => $id])->one()) {
            return $kiev_avtoshkola;
        }
        throw new NotFoundHttpException();
    }
}