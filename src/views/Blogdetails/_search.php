<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model osmansimsek\blogmodule\models\BlogdetailsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="blogdetails-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'blogid') ?>

    <?= $form->field($model, 'blogtitle') ?>

    <?= $form->field($model, 'blogheader') ?>

    <?= $form->field($model, 'blogtext') ?>

    <?= $form->field($model, 'blogauthorname') ?>

    <?php // echo $form->field($model, 'blogauthorlastname') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
