<?php

namespace frontend\modules\kiev\controllers;

use frontend\models\Avtoshkoly;
use yii\web\Controller;

/**
 * Default controller for the `kiev` module
 */
class DefaultController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        $avtoshkoly = Avtoshkoly::find()->all();

        return $this->render('index', [
            'avtoshkoly' => $avtoshkoly
        ]);
    }
}
