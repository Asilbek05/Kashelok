<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Input $model */

$this->title = Yii::t('app', 'Kirimni kiritish');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Kirim'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="input-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
