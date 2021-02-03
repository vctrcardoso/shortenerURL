<?php

namespace Config;

class Validation
{
	//--------------------------------------------------------------------
	// Setup
	//--------------------------------------------------------------------

	/**
	 * Stores the classes that contain the
	 * rules that are available.
	 *
	 * @var array
	 */
	public $ruleSets = [
		\CodeIgniter\Validation\Rules::class,
		\CodeIgniter\Validation\FormatRules::class,
		\CodeIgniter\Validation\FileRules::class,
		\CodeIgniter\Validation\CreditCardRules::class,
	];

	/**
	 * Specifies the views that are used to display the
	 * errors.
	 *
	 * @var array
	 */
	public $templates = [
		'list'   => 'CodeIgniter\Validation\Views\list',
		'single' => 'CodeIgniter\Validation\Views\single',
	];

	//--------------------------------------------------------------------
	// Rules
	//--------------------------------------------------------------------

	public $login =
	[
		'email' =>
		[
			'label' => 'E-mail',
			'rules' => 'required|valid_email|is_not_unique[users.email]',
		],
		'senha' =>
		[
			'label' => 'Senha',
			'rules' => 'required|min_length[8]|max_length[30]',
		],
	];


	public $signup = [
		'nome' => [
			'rules'  => 'required',
			'errors' => [
				'required' => 'You must choose a Username.'
			]
		],
		'email'    => [
			'rules'  => 'required|valid_email|is_unique[users.email]',
			'errors' => [
				'valid_email' => 'Por favor, verifique o campo Email. inválido.'
			]
		],

		'senha'  => [

			'label' => 'Senha',
			'rules' => 'required|min_length[8]|max_length[30]',

		],

		
		'ConfirmarSenha'  => [

			'label' => 'Senha',
			'rules' => 'required|min_length[8]|max_length[30]|matches[senha]',

		]
	];


	public $recup = [
		'email' => [
			'label' => 'E-mail',
			'rules' => 'required|valid_email|is_not_unique[users.email]'
		]
	];

	public $NewPass =[
		'senha' =>
		[
			'label' => 'Senha',
			'rules' => 'required|min_length[8]|max_length[30]',
		],
	];


	public $url = [
		'encurtar' => [
			'label' => 'encurtar',
			'rules' => 'required|min_length[8]|max_length[1000]|trim'
		],
	];


}
