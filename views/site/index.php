<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Інтер\'єр майстерня';
$this->params['lp_params'] = ['calendar' => true, 'map' => true, 'contact' => true];
?>

<h3>Наші послуги та товари:</h3>
<a href="" class="index_link">
	<div><?= Html::img('@web/images/door.jpg') ?>Вхідні двері</div>
</a>
<a href="" class="index_link">
    <div><?= Html::img('@web/images/inter_door.jpg') ?>Міжкімнатні двері</div>
</a>
<a href="" class="index_link">
    <div><?= Html::img('@web/images/Window.jpg') ?>Металопластикові вікна</div>
</a>
<a href="" class="index_link">
    <div><?= Html::img('@web/images/FontLam.jpg') ?>Ламінат</div>
</a>
<a href="" class="index_link">
    <div><?= Html::img('@web/images/border.jpg') ?>Виготовлення рамок</div>
</a>
<a href="" class="index_link">
    <div><?= Html::img('@web/images/Pict.jpg') ?>Дизайнерські послуги</div>
</a>