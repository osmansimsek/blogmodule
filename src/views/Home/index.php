<?php

use yii\helpers\Html;
use yii\helpers\Url;

/* @var $this yii\web\View */
$this->title = 'Blogdetails';
$this->params['breadcrumbs'][] = $this->title;
$this->registerCssFile('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css');

?>

<h1 class="text-muted">Blog Ekleme Modülüne Hoşgeldiniz</h1>
<div class="container-fluid bg-info" style="height: 60vh;">
    <div class="row" style="height: 60vh;display: flex;align-items: center;">
        <div class="col-sm-6" style="height: 100%;display: flex;align-items: center;">
            <button class="btn btn-danger" style="width: 100%;height: 20%;">
                <?= Html::a('Blog Türü Ekle', ['blogtitles/index'],
                    ['style' => 'display:flex; text-decoration: none; 
                    color: white; font-size: 20px; width:100%; height:100%;
                    align-items: center; justify-content:center;']) ?>
            </button>
        </div>
        <div class="col-sm-6" style="height: 100%;display: flex;align-items: center;">
            <button class="btn btn-danger" style="width: 100%;height: 20%;">
                <?= Html::a('Blog Ekle', ['blogdetails/index'],
                    ['style' => 'display:flex; text-decoration: none; 
                    color: white; font-size: 20px; width:100%; height:100%;
                    align-items: center; justify-content:center;']);
                ?>
            </button>
        </div>
    </div>
</div>


