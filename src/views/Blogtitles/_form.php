<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model osmansimsek\blogmodule\models\Blogtitles */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="blogtitles-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'blogtitle')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
