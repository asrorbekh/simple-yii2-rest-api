<?php

namespace frontend\resource;

use yii\db\ActiveQuery;

class Post extends \common\models\Post
{
    public function extraFields(): array
    {
        return ['comments', 'createdBy'];
    }


    public function getComments(): ActiveQuery
    {
        return $this->hasMany(Comment::class, ['post_id' => 'id']);
    }
}