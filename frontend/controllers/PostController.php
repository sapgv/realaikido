<?php
/**
 * Created by PhpStorm.
 * User: grisha.sapgv
 * Date: 01.05.16
 * Time: 20:25
 */

namespace frontend\controllers;


use common\models\Post;
use yii\data\ActiveDataProvider;
use yii\web\Controller;


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

}