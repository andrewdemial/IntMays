<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\modules\doors\models\DType */

$this->title = 'Create Dtype';
$this->params['breadcrumbs'][] = ['label' => 'Dtypes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dtype-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
