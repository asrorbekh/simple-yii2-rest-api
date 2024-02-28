<?php

namespace frontend\resource;

use yii\db\ActiveQuery;

class Comment extends \common\models\Comment
{
    public function extraFields(): array
    {
        return ['post'];
    }

    public function getPost(): ActiveQuery
    {
        return $this->hasMany(Post::class, ['id' => 'post_id']);
    }
}