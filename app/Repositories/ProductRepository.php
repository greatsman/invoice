<?php

namespace App\Repositories;

//PANGGIL MODEL USER
use App\Product;

class ProductRepository
{
	protected $product;

	public function __construct(Product $product)
	{
        //Instance model User ke dalam property user
	    $this->product = $product;
    }
    
    //MEMBUAT FUNGSI UNTUK MENGAMBIL DATA YANG TELAH DI PAGINATE
    //DAN DIFUNGSI INI TELAH DIURUTKAN BERDASARKAN CREATED_AT
    //FUNGSI INI MEMINTA PARAMETER JUMLAH DATA YANG AKAN DITAMPILKAN
    public function getPaginate($per_page)
    {
        return $this->product->orderBy('created_at', 'DESC')->paginate($per_page);
    }

    //MEMBUAT FUNGSI UNTUK MENGAMBIL DATA BERDASARKAN ID
	public function find($id)
	{
		return $this->user->find($id);
	}

    //MEMBUAT FUNGSI UNTUK MENGAMBIL DATA BERDASRAKAN COLOMN YANG DITERIMA
	public function findBy($column, $data)
	{
		return $this->user->where($column, $data)->get();
	}
}