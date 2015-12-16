<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 12/16/2015
 * Time: 10:58 AM
 */

namespace frontend\controllers;

use Yii;
use yii\web\Controller;

class DemoController extends Controller
{
    public function actionIndex(){
        $a = Yii::$app->authManager;
        echo '<pre>';
        var_dump($a->getRole('reader'));
        var_dump(Yii::$app->user->can('readCompany'));
    }
}