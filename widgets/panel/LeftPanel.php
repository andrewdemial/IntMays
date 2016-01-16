<?php

namespace app\widgets\panel;

use yii\base\Widget;
use app\widgets\panel\PanelAsset;
use yii\helpers\Url;

class LeftPanel extends Widget
{

	public $result;
	public $list;
	public $calendar;
	public $map;
	public $contact;

	public function Init()
	{
		parent::init();
		PanelAsset::register($this->getView());
		$this->result = "<div class='left_panel'>";
		if ($this->list !== null) {
			$this->result .= "<div class='list'><div class='list_title'>" . $this->list['title'] . "</div>";
			$last_st = array_pop($this->list['items']);
			foreach ($this->list['items'] as $item) {
				$this->result .= "<a href='". Url::to([$item['link']]) ."'><div class='link'>" . $item['label'] . "</div></a>";
			}
			$this->result .= "<a href='". Url::to([$last_st['link']]) ."'><div class='last_link'>" . $last_st['label'] . "</div></a></div>";
		}
		if ($this->calendar == true) {
			$this->result .= "<div class='title'>Календар</div>";
			$this->result .= "<table id='calendar2'><thead><tr><td>‹<td colspan='5'><td>›" .
				"<tr><td>Пн<td>Вт<td>Ср<td>Чт<td>Пт<td>Сб<td>Нд</tr><tbody></table>";
		}
		if ($this->map == true) {
			$this->result .= "<a href=''><div class='title'>Катра</div></a>";
			$this->result .= "<div class='map'><table align='center' cellpadding='0' cellspacing='0'>
				<tr><td>
				<script type='text/javascript' charset='utf-8'
				src='https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=ShyC5MAQDtXHodIscC8griwRoqqis39l&width=205&height=205'>
				</script>
				</td></tr>
				</table></div>";
		}
		if ($this->contact == true) {
			$this->result .= "<div class='title'>Контакты</div>
			<div style='padding: 15px; text-align: center; border-bottom: 3px solid #cfdc9f;'>
				<center><b><i>Адреса:</i></b></center>
				Київска область, м. Вишневе,<br/>вул. Святошинська 46
				<center><b><i>Телефони:</i></b></center>
				095-582-17-33, 067-156-51-73</div>";
		}
		$this->result .= "</div>";
	}

	public function run()
	{
		echo $this->result;
	}
}