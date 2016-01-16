<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\doors\models\DCategory */

$this->title = 'Update Dcategory: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Dcategories', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="dcategory-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
