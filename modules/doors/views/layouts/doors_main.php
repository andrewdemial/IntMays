<?php $this->beginContent('@app/views/layouts/main.php');
$this->params['lp_params'] = ['calendar' => false, 'map' => false, 'contact' => false,
    'list' => ['title' => 'Таблицы:', 'items' => [
    ['label' => 'Категории', 'link' => 'category/index'],
    ['label' => 'Типы дверей', 'link' => 'type/index'],
    ['label' => 'Фирмы', 'link' => 'firm/index'],
    ['label' => 'Двери', 'link' => 'doors/index'],
]]];

echo $content;

$this->endContent();