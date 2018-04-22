<?php

namespace frontend\modules\instructors\controllers;

use frontend\models\CommentsInstructor;
use frontend\models\CommentsInstructorForm;
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
    protected function findModel($id)
    {
        if (($model = Instructor::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
    /**
     * Displays a single Instructor model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        $article = Instructor::findOne($id);
        $comments = $article->comments;

        $commentsInstructorForm = new CommentsInstructorForm();


        $model = new CommentsInstructor();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('view', [
            'instructor' => $this->findInstructor($id),
            'model' => $model,
            'article'=>$article,
            'comments'=>$comments,
            'commentsInstructorForm' => $commentsInstructorForm
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

    public function actionComment($id)
    {
        $model = new CommentsInstructorForm();

        if(Yii::$app->request->isPost)
        {
            $model->load(Yii::$app->request->post());
            if($model->saveComment($id))
            {
                Yii::$app->getSession()->setFlash('comment', 'Вы оставили комментарий');
                return $this->redirect(['/instructors/instructor/view','id'=>$id]);
            }
        }
    }










}
