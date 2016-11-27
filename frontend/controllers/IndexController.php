<?php
namespace frontend\controllers;

use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\TeacherContact;


/**
 * Site controller
 */
class IndexController extends Controller
{
    /**
     * @inheritdoc
     */
    
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
     * @return mixed
     */
    public function actionIndex()
    {
        
        $model = new TeacherContact();;

        if ($model->load(Yii::$app->request->post()) && ($model->validate())) {
          
          echo "<pre>";  
          var_dump($model);
          echo "</pre>";
          exit;
      
        } else {
            return $this->render('index', [
                'model' => $model,
            ]);
        }
    }
    
}
