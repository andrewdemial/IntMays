<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\modules\doors\models\DFirm */

$this->title = 'Create Dfirm';
$this->params['breadcrumbs'][] = ['label' => 'Dfirms', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dfirm-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
