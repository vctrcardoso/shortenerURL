<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;
use CodeIgniter\Validation\StrictRules\CreditCardRules;
use CodeIgniter\Validation\StrictRules\FileRules;
use CodeIgniter\Validation\StrictRules\FormatRules;
use CodeIgniter\Validation\StrictRules\Rules;

class Validation extends BaseConfig
{
    // --------------------------------------------------------------------
    // Setup
    // --------------------------------------------------------------------

    /**
     * Stores the classes that contain the
     * rules that are available.
     *
     * @var string[]
     */
    public array $ruleSets = [
        Rules::class,
        FormatRules::class,
        FileRules::class,
        CreditCardRules::class,
    ];

    /**
     * Specifies the views that are used to display the
     * errors.
     *
     * @var array<string, string>
     */
    public array $templates = [
        'list'   => 'CodeIgniter\Validation\Views\list',
        'single' => 'CodeIgniter\Validation\Views\single',
    ];

    // --------------------------------------------------------------------
    // Rules
    // --------------------------------------------------------------------

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
