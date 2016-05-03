<?php
/**
 * Created by PhpStorm.
 * User: grisha.sapgv
 * Date: 01.05.16
 * Time: 20:31
 */

namespace backend\controllers;


use yii\web\Controller;
use common\models\Post;
use yii\helpers\Url;
use yii\data\ActiveDataProvider;

class PostController extends Controller
{

    public function actionIndex()
    {
        $postQuery = Post::find();

        $PostDataProvider = new ActiveDataProvider([
            'query' => $postQuery,
            'pagination' => array('pageSize' => 5),
        ]);
        return $this->render('index',['posts'=>$PostDataProvider]);

    }

    public function actionView($id)
    {

        $post = Post::find()->where(['id'=>$id])->one();

        return $this->render('view',['post'=>$post]);

    }

    public function actionCreate()
    {

        $post = new Post();

        if ($post->load(\Yii::$app->request->post())) {
            if ($post->save(false)) {
                $this->redirect(Url::toRoute('/post/index'));
            }
        }

        return $this->render('create', [
            'post' => $post,
        ]);

    }

    public function actionEdit($id)
    {

        $post = Post::find()->where(['id'=>$id])->one();

        if ($post->load(\Yii::$app->request->post())) {
            if ($post->save(false)) {
                $this->redirect(Url::toRoute(['/post/view','id'=>$id]));
            }
        }

        return $this->render('edit', [
            'task' => $post,
        ]);

    }
}