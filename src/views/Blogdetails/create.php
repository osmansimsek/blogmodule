<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model osmansimsek\blogmodule\models\Blogdetails */

$this->title = 'Create Blogdetails';
$this->params['breadcrumbs'][] = ['label' => 'Blogdetails', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="blogdetails-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
