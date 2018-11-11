<?php
namespace app\components;

class Controller extends \yii\base\Controller{

    public function render($code, $message = "", $data = []){

        die(json_encode([
            "code" => $code,
            "message" => $message,
            "data" => $data
        ]));
    }
}