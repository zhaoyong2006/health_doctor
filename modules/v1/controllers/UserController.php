<?php

namespace app\modules\v1\controllers;
use app\components\Controller;
use app\components\MyException;
use yii;


/**
 * Default controller for the `user` module
 */
class UserController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        return $this->render(0,"success");
    }
}
