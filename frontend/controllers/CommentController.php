<?php

namespace frontend\controllers;

use frontend\resource\Comment;
use yii\data\ActiveDataProvider;

class CommentController extends MyActiveController
{
    public $modelClass = Comment::class;

    public function actions(): array
    {
        $actions = parent::actions();
        $actions['index']['prepareDataProvider'] = [$this, 'prepareDataProvider'];

        return $actions;
    }

    public function prepareDataProvider(): ActiveDataProvider
    {
        return new ActiveDataProvider([
            'query' => $this->modelClass::find()->andWhere(['post_id' => \Yii::$app->request->get('postId')])
        ]);
    }
}