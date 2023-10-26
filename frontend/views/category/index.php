<?php

use common\models\Category;
use yii\bootstrap5\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;

use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var common\models\CategorySearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = Yii::t('app', 'Kategoriya');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="category-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <div class="container">
    <div class="row">
        <div class="col-lg-4">
            <?= Html::a(Yii::t('app', 'Kategoriya yaratish'), ['create'], ['class' => 'btn btn-warning']) ?>
        </div>
        <div class="col-lg-4">
            <?= Html::a(Yii::t('app', 'Kirimni kiritish'),['/input'], ['class' => 'btn btn-success']) ?>
        </div>
        <div class="col-lg-4">
            <?= Html::a(Yii::t('app', 'Chiqimni kiritish'), ['/output'], ['class' => 'btn btn-danger']) ?>
        </div>

    </div>
    </div>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
            'dataProvider'=> $dataProvider,
            'filterModel' => $searchModel,
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],
                'name',
                [
                    'attribute' => 'type',
                    'format' => 'raw',
                    'value' => function($data){
                        if($data->type == 1){
                            return "<span class='badge rounded-pill bg-success'>Kirim</span>";
                        }
                        else if($data->type==2){
                            return "<span class='badge rounded-pill bg-danger'>Chiqim</span>";
                        }
                    },
                ],
    
                [
                    'class' => ActionColumn::className(),
                    'urlCreator' => function ($action, Category $model, $key, $index, $column) {
                        return Url::toRoute([$action, 'id' => $model->id]);
                     }
                ],
            ],
        
            
        ]); ?>


</div>
