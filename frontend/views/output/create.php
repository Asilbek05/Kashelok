<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Output $model */

$this->title = Yii::t('app', 'Chiqimni kiritish');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Chiqim'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="output-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
