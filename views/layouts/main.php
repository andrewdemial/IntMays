<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use yii\widgets\Menu;
use app\widgets\menu\MyMenu;
use app\widgets\panel\LeftPanel;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
    <div class="header">
        <a href="<?= Html::encode('http://localhost:8888/IntMays/web/'); ?>">
            <div class="logo">
                <center><h2 style="margin-bottom:20px; font-weight: bold; font-size:36px;">Інтер'єр майстерня</h2></center>
                <center>для Вашого затишку</center>
            </div>
        </a>
        <div class="wrap">
            <?= MyMenu::widget(['items' => [
                ['label' => "Головна", 'link' => 'http://localhost:8888/IntMays/web/'],
                ['label' => "Двері", 'link' => '#', 'items' => [
                    ['label' => 'Вхідні', 'link' => '#'],
                    ['label' => 'Міжкімнатні', 'link' => '#'],
                    ['label' => 'Фурнітура', 'link' => '#'],
                    ['label' => 'Фотогалерея', 'link' => '#']
                ]],
                ['label' => 'Металопластикові вікна', 'link' => '#','items' => [
                    ['label' => 'Вікна Т.М. Steko', 'link' => '#'],
                    ['label' => 'Вікна Т.М. Глассо', 'link' => '#'],
                    ['label' => 'Підвіконня', 'link' => '#'],
                    ['label' => 'Фотогалерея', 'link' => '#']
                ]],
                ['label' => 'Ламінат', 'link' => '#', 'items' => [
                    ['label' => 'Т.М. Krono Original', 'link' => '#'],
                    ['label' => 'Фотогалерея', 'link' => '#']
                ]],
                ['label' => 'Виготовлення рамок', 'link' => '#', 'items' => [
                    ['label' => 'Виробництво України', 'link' => '#'],
                    ['label' => 'Виробництво Корея, Китай', 'link' => '#'],
                    ['label' => 'Фотогалерея', 'link' => '#']
                ]],
                ['label' => 'Дизайн послуги', 'link' => '#', 'items' => [
                    ['label' => 'Дизайн проекти', 'link' => '#'],
                    ['label' => 'Написання картин', 'link' => '#'],
                    ['label' => 'Декоративний розпис', 'link' => '#'],
                    ['label' => 'Виготовлення малих архітектурних форм', 'link' => '#']
                ]],
                ['label' => 'Контакти', 'link' => '#'],
            ]]); ?>
            <hr class="line">
            <div class="left">
                <?= isset($this->params['lp_params']) ? LeftPanel::widget($this->params['lp_params']):null; ?>
            </div>
            <div class="content">
                <?= $content ?>
            </div>
            <div class="clear"></div>
        </div>
        <div class="footer">
            <div class="right_p">The site designed by Andrew Demial UA</div>
            <div class="clear"></div>
        </div>
    </div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>