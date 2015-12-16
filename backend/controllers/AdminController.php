<?php

namespace backend\controllers;

use backend\models\Companies;
use Yii;
use yii\web\Controller;

class AdminController extends Controller
{
    public $layout = 'admin';
    public function actionIndex()
    {
        return $this->render('home',
            ['model' => Companies::findAll(1)]
        );
    }

}
