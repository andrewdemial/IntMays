<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\doors\models\Doors */

$this->title = 'Update Doors: ' . ' ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Doors', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="doors-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
