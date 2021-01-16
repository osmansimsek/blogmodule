<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model osmansimsek\blogmodule\models\Blogdetails */

$this->title = 'Update Blogdetails: ' . $model->blogid;
$this->params['breadcrumbs'][] = ['label' => 'Blogdetails', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->blogid, 'url' => ['view', 'id' => $model->blogid]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="blogdetails-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
