<?php

namespace frontend\controllers;

use frontend\resource\Post;

class PostController extends MyActiveController
{
    public $modelClass = Post::class;

}