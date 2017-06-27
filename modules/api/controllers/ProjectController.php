<?php
namespace app\modules\api\controllers;

use yii\filters\ContentNegotiator;
use yii\filters\Cors;
use yii\rest\ActiveController;
use yii\web\Response;

class ProjectController extends ActiveController
{
    public $modelClass = 'app\models\Project';

    public function behaviors()
    {
        $behaviors = parent::behaviors();

        $behaviors['corsFilter' ] = [
            'class' => Cors::className(),
        ];

        $behaviors['contentNegotiator'] = [
            'class' => ContentNegotiator::className(),
            'formats' => [
                'application/json' => Response::FORMAT_JSON,
            ],
        ];

        /*$behaviors['access'] = [
            'class' => \yii\filters\AccessControl::className(),
            'only' => ['create', 'update', 'delete'],
            'rules' => [
                [
                    'actions' => ['create', 'update', 'delete'],
                    'allow' => true,
                    'roles' => ['@'],
                ],
            ],
        ];*/

        return $behaviors;
    }
}