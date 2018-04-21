<?php

namespace frontend\modules\instructors\controllers;

use Yii;
use frontend\models\Instructor;
use frontend\modules\instructors\models\InstructorSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * InstructorController implements the CRUD actions for Instructor model.
 */
class InstructorController extends Controller
{
    /**
     * Displays a single Instructor model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'instructor' => $this->findInstructor($id),
        ]);
    }
    /**
     * @param integer $id
     * @return Instructor
     * @throws NotFoundHttpException
     */
    private function findInstructor($id)
    {
        if ($instruktor = Instructor::find()->where(['id' => $id])->one()) {
            return $instruktor;
        }
        throw new NotFoundHttpException();
    }










}
