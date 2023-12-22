<?php

namespace app\controllers;

class LendingController extends \yii\web\Controller
{
    public $layout = 'lending';
    public function actionBlog()
    {
        return $this->render('welcome');
    }
    public function actionInfo()
    {
        return $this->render('info');
    }
    public function actionAbout()
    {
        return $this->render('about');
    }
    public function actionWhy()
    {
        return $this->render('why');
    }
    public function actionTeam()
    {
        return $this->render('team');
    }
    public function actionComment()
    {
        return $this->render('comment');
    }
    public function actionBlogs()
    {
        return $this->render('blogs');
    }
    public function actionContact()
    {
        return $this->render('contact');
    }
}