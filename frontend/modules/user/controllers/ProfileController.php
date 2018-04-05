<?php

namespace frontend\modules\user\controllers;
use yii\web\Controller;
use frontend\models\User;
//se yii\web\NotFoundHttpException;
class ProfileController extends Controller
{
    public function actionView($id)
    {
        return $this->render('view', [
            'user' => $this->findUser($id),
        ]);
    }
    /**
     * @param integer $id
     * @return User
     * @throws NotFoundHttpException
     */
    private function findUser($id)
    {
        if ($user = User::find()->where(['id' => $id])->one()) {
            return $user;
        }
        throw new NotFoundHttpException();
    }
}
