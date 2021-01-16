<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model osmansimsek\blogmodule\models\Blogdetails */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="blogdetails-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'blogtitle')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'blogheader')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'blogtext')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'blogauthorname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'blogauthorlastname')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
