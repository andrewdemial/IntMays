<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\modules\doors\models\Doors */

$this->title = 'Create Doors';
$this->params['breadcrumbs'][] = ['label' => 'Doors', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="doors-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
