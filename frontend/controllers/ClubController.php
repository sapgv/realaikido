<?php
/**
 * Created by PhpStorm.
 * User: grisha.sapgv
 * Date: 05.05.16
 * Time: 23:56
 */

namespace frontend\controllers;


use yii\web\Controller;
use frontend\models\ContactForm;
use Yii;


class ClubController extends Controller
{

    public function actionCoaches()
    {

        return $this->render('coaches');

    }

    public function actionGym()
    {

        return $this->render('gym');

    }

    /**
     * Displays contact page.
     *
     * @return mixed
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail(Yii::$app->params['adminEmail'])) {
                Yii::$app->session->setFlash('success', 'Thank you for contacting us. We will respond to you as soon as possible.');
            } else {
                Yii::$app->session->setFlash('error', 'There was an error sending email.');
            }

            return $this->refresh();
        } else {
            return $this->render('contact', [
                'model' => $model,
            ]);
        }
    }
}