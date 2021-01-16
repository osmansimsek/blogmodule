<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model osmansimsek\blogmodule\models\Blogtitles */

$this->title = 'Create Blogtitles';
$this->params['breadcrumbs'][] = ['label' => 'Blogtitles', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="blogtitles-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
