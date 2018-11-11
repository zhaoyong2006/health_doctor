<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\User */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="user-form">

    <?php $form = ActiveForm::begin(
        [
            'options' => [
                'class' => "smart-form"
            ]
        ]
    ); ?>

    <?= $form->field($model, 'username', [
            "template" => "<section>{label}\n<label class='input'>{input}</label></section>\n{hint}\n{error}"
        ])->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'auth_key', [
            "template" => "<section>{label}\n<label class='input'>{input}</label></section>\n{hint}\n{error}"
        ])->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'password_hash', [
            "template" => "<section>{label}\n<label class='input'>{input}</label></section>\n{hint}\n{error}"
        ])->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'password_reset_token', [
            "template" => "<section>{label}\n<label class='input'>{input}</label></section>\n{hint}\n{error}"
        ])->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email', [
            "template" => "<section>{label}\n<label class='input'>{input}</label></section>\n{hint}\n{error}"
        ])->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'role', [
            "template" => "<section>{label}\n<label class='input'>{input}</label></section>\n{hint}\n{error}"
        ])->textInput() ?>

    <?= $form->field($model, 'status', [
            "template" => "<section>{label}\n<label class='input'>{input}</label></section>\n{hint}\n{error}"
        ])->textInput() ?>

    <?= $form->field($model, 'created_at', [
            "template" => "<section>{label}\n<label class='input'>{input}</label></section>\n{hint}\n{error}"
        ])->textInput() ?>

    <?= $form->field($model, 'updated_at', [
            "template" => "<section>{label}\n<label class='input'>{input}</label></section>\n{hint}\n{error}"
        ])->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
