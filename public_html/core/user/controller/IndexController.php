<?php

namespace core\user\controller;

/** 
 * Индексный контроллер пользовательской части
 */
class IndexController extends BaseUser
{
	protected $name;

	protected function inputData()
	{
		// Выпуск №120
		parent::inputData();

		// Выпуск №124- Пользовательская часть | вывод акций (слайдер под верхним меню)
		$sales = $this->model->get('sales', [
			'where' => ['visible' => 1],
			'order' => ['menu_position']
		]);

		$foto_gallery = $this->model->get('foto_gallery', [
			'where' => ['visible' => 1],
			'order' => ['menu_position']
		]);
		$foto_gallery2 = $this->model->get('foto_gallery2', [
			'where' => ['visible' => 1],
			'order' => ['menu_position']
		]);

		// Выпуск №128 - массив преимуществ
		$advantages = $this->model->get('advantages', [
			'where' => ['visible' => 1],
			'order' => ['menu_position'],
			'limit' => 6
		]);

		// Выпуск №128 | Вывод новостей
		/* $news = $this->model->get('news', [
			'where' => ['visible' => 1],
			'order' => ['date'],
			'order_direction' => ['DESC'],
			'limit' => 3
		]); */

		$questions = $this->model->get('questions', [
			'where' => ['visible' => 1],
			'order' => ['menu_position']
		]);


		// Выпуск №125
		//$goods = $this->model->getGoods();

		// собираем переменные в массив и возвращаем в шаблон, что бы они стали доступными при выводе
		return compact('sales', 'foto_gallery', 'foto_gallery2', 'advantages', 'questions');
	}
}
