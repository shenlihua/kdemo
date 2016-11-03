<?php
namespace frontend\controllers;

use Yii;
use yii\web\Controller;

/**
 * Site controller
 */
class SiteController extends Controller
{

    public function actionIndex()
    {
        return $this->render('index');
    }


    public function actionBrands()
    {
        return $this->render('brands');
    }

    public function actionModels()
    {
        return $this->render('models');
    }

    public function actionContact()
    {
        return $this->render('contact');
    }

    public function actionSingle()
    {
        return $this->render('single');
    }

    public function actionError()
    {
        return $this->render('error');
    }
}
