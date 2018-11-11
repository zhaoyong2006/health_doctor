<?php

use yii\helpers\Inflector;
use yii\helpers\StringHelper;

/* @var $this yii\web\View */
/* @var $generator yii\gii\generators\crud\Generator */

/* @var $model \yii\db\ActiveRecord */
$model = new $generator->modelClass();
$safeAttributes = $model->safeAttributes();
if (empty($safeAttributes)) {
    $safeAttributes = $model->attributes();
}

echo "<?php\n";
?>

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model <?= ltrim($generator->modelClass, '\\') ?> */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="<?= Inflector::camel2id(StringHelper::basename($generator->modelClass)) ?>-form">

    <?= "<?php " ?>$form = ActiveForm::begin(
        [
            'options' => [
                'class' => "smart-form"
            ]
        ]
    ); ?>

<?php foreach ($generator->getColumnNames() as $attribute) {
    if (in_array($attribute, $safeAttributes)) {
        $options = '[
            "template" => "<section>{label}\n<label class=\'input\'>{input}</label></section>\n{hint}\n{error}"
        ]';
        echo "    <?= " . $generator->generateActiveField($attribute, $options) . " ?>\n\n";
    }
} ?>
    <div class="form-group">
        <?= "<?= " ?>Html::submitButton($model->isNewRecord ? <?= $generator->generateString('Create') ?> : <?= $generator->generateString('Update') ?>, ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?= "<?php " ?>ActiveForm::end(); ?>

</div>
