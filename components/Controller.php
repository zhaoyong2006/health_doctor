<?php
namespace app\components;

use yii;
use yii\web\Response;

class Controller extends \yii\base\Controller{

    public function init()
    {
        parent::init();
        Yii::$app->response->format = Response::FORMAT_JSON;
    }
    public function render($code, $message = "", $data = []){

        $response = [
            "code" => $code,
            "message" => $message,
            "data" => $data
        ];
        return $response;
    }
}