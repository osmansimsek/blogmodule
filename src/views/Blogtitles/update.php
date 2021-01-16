<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model osmansimsek\blogmodule\models\Blogtitles */

$this->title = 'Update Blogtitles: ' . $model->blogtitle;
$this->params['breadcrumbs'][] = ['label' => 'Blogtitles', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->blogtitle, 'url' => ['view', 'id' => $model->blogtitle]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="blogtitles-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
