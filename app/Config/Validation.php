<?php

namespace Config;

use CodeIgniter\Validation\CreditCardRules;
use CodeIgniter\Validation\FileRules;
use CodeIgniter\Validation\FormatRules;
use CodeIgniter\Validation\Rules;

class Validation
{
	//--------------------------------------------------------------------
	// Setup
	//--------------------------------------------------------------------

	/**
	 * Stores the classes that contain the
	 * rules that are available.
	 *
	 * @var string[]
	 */
	public $ruleSets = [
		Rules::class,
		FormatRules::class,
		FileRules::class,
		CreditCardRules::class,
		\Myth\Auth\Authentication\Passwords\ValidationRules::class,
	];

	/**
	 * Specifies the views that are used to display the
	 * errors.
	 *
	 * @var array<string, string>
	 */
	public $templates = [
		'list'   => 'CodeIgniter\Validation\Views\list',
		'single' => 'CodeIgniter\Validation\Views\single',
	];

	//--------------------------------------------------------------------
	// Rules
	public $category = [
		'category_name'     => 'required',
		'category_status'     => 'required'
	];

	public $category_errors = [
		'category_name' => [
			'required'    => 'Nama category wajib diisi.',
		],
		'category_status'    => [
			'required' => 'Status category wajib diisi.'
		]
	];



	public $outlet_list = [
		'phone_outlet'     => 'required|is_unique[outlet_list.phone_outlet]|min_length[11]|max_length[12]|numeric',

	];

	public $outlet_list_errors = [
		'phone_outlet' => [
			'required'    => 'Nomor Telepon Outlet wajib diisi.',
			'is_unique' => 'Nomor Pernah Terdaftar, Silahkan Cek Kembali',
			'min_length' => 'Nomor Kurang, Silahkan Cek Kembali',
			'max_length' => 'Nomor Lebih, Silahkan Cek Kembali',
			'numeric' => 'Hanya Menerima Angka, Silahkan Cek Kembali',

		],

	];



	public $adminconfig = [
		'id'           => 'required',
		'username'          => 'required',
		'email'         => 'required',
		'phone'           => 'required',
		'address'        => 'required',
		// 'product_image'         => 'uploaded[product_image]|mime_in[product_image,image/jpg,image/jpeg,image/gif,image/png]|max_size[product_image,1000]',
		// 'product_description'   => 'required'
	];


	public $adminconfig_errors = [
		'id'   => [
			'required'  => 'ID wajib diisi.',
		],
		'username'  => [
			'required'  => 'Username wajib diisi.'
		],
		'email' => [
			'required'  => 'Email wajib diisi.'
		],
		'phone'   => [
			'required'  => 'Phone wajib diisi.'
		],
		'address' => [
			'required'  => 'Address wajib diisi.'
		],

	];



	public $product = [
		'order_55'           => 'required',
		'order_12'          => 'required',
		'product_price'         => 'required',
		'product_sku'           => 'required',
		'product_status'        => 'required',
		'product_image'         => 'uploaded[product_image]|mime_in[product_image,image/jpg,image/jpeg,image/gif,image/png]|max_size[product_image,1000]',
		'product_description'   => 'required'
	];

	public $test = [
		'order_55'           => 'required',
		'order_12'          => 'required',

	];

	public $product_errors = [
		'category_id'   => [
			'required'  => 'Nama category wajib diisi.',
		],
		'product_name'  => [
			'required'  => 'Nama product wajib diisi.'
		],
		'product_price' => [
			'required'  => 'Harga product wajib diisi.'
		],
		'product_sku'   => [
			'required'  => 'Kode product wajib diisi.'
		],
		'product_status' => [
			'required'  => 'Status product wajib diisi.'
		],
		'product_image' => [
			'mime_in'   => 'Gambar product hanya boleh diisi dengan jpg, jpeg, png atau gif.',
			'max_size'  => 'Gambar product maksimal 1mb',
			'uploaded'  => 'Gambar product wajib diisi'
		],
		'product_description'   => [
			'required'          => 'Description product wajib diisi.'
		]
	];
	//--------------------------------------------------------------------
}
