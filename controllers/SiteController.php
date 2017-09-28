<?php

namespace app\controllers;

use app\models\Parners;
use app\models\Partners;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\DataForm;
use app\models\ContactForm;
use app\models\News;

class SiteController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionShop()
    {
        return $this->render('shop');
    }

    public function actionBlog2()
    {
        $partners = Partners::find()->select('ID, name, country,partners_img, info')->all();
        return $this->render('blog2', compact('partners'));
    }

    public function actionBlog()
    {

        $news = News::find()->select('ID, title, text')->all();
        return $this->render('blog', compact('news'));
    }

    public function actionAbout()
    {
        return $this->render('About');
    }

    public function actionContact()
    {
        return $this->render('contact');
    }

    public function actionSingleproduct()
    {
        return $this->render('Singleproduct');
    }
}