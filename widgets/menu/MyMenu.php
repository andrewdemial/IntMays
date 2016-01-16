<?php

namespace app\widgets\menu;

use yii\base\Widget;
use yii\helpers\Html;

class MyMenu extends Widget
{

	public $items;
	public $result;

	public function Init()
	{
		parent::init();
		//Подключаем стили
		$this->view->registerCssFile('/IntMays/widgets/menu/css/menu.css');
		//Задаем начальный тег списка
		//'result' - переменная которая хранит html-разметку исходного списка
		$this->result = "<ul class='navigation'>";
		//Выполняем рекурсивную функцию
		$this->option_for_menu($this->items);
		//Добавляем div в конец списка
		$this->result = substr($this->result, 0, count($this->result) - 6) . "<div class='clear'></div>" .
			substr($this->result, count($this->result) - 6);
	}

	//Рекурсивная функция для построения уровня вложености списка
	private function option_for_menu($arr)
	{
		$items = $arr;
		//Запускаем цикл прохода по текущему уровню списка
		foreach ($items as $item) {
			//Проверяем есть ли на уровне значение с ключем 'items'
			if (!array_key_exists('items', $item)) {
				//Формируем елемент списка с открытым тегом
				$this->result .= "<li><a href='" . $item['link'] . "' title='" . $item['label'] . "'>" . $item['label'];
			} else {
				//Формируем название елемента с вложеным уровнем
				$this->result .= "<li><a href='" . $item['link'] . "' title='" . $item['label'] . "'>" . $item['label'];
				//Переменной '$items' присваиваем значение следующего уровня
				$items = $item['items'];
				//Формируем новый список под текущим елементом
				$this->result .= "<ul>";
				//Запускаем рекурсию
				$this->option_for_menu($items);
			}
			//Закрываем открытый тег списка
			$this->result .= "</a></li>";
		}
		//Закрываем список на текущем уровне рекурсии
		$this->result .= "</ul>";
	}

	public function run()
	{
		echo $this->result;
	}
}