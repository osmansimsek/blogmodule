<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel osmansimsek\blogmodule\models\BlogtitlesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Blogtitles';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="blogtitles-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Blogtitles', ['create'], ['class' => 'btn btn-success']) ?>
        <?= Html::a('Return Main Menu', ['home/index'], ['class' => 'btn btn-primary']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'blogtitle',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
