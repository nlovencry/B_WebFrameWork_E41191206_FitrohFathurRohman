<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManagementUserController extends Controller
{
	public function index()
	{
		return "Method ini Nantinya akan digunakan untuk mengambil semua data user";
	}
	public function create()
	{
		return "Method ini Nantinya akan digunakan untuk menampilkan form menambah data user";
	}
	public function store(Request $request)
	{
		return "Method ini Nantinya akan digunakan untuk menciptakan data user baru";
	}
	public function show($id)
	{
		return "Method ini Nantinya akan digunakan untuk mengambil satu data user dengan id=" . $id;
	}
	public function edit($id)
	{
		return "Method ini Nantinya akan digunakan untuk menampilkan form untuk mengubah data edit dengan id=" . $id;
	}
	public function update(Request $request, $id)
	{
		return "Method ini Nantinya akan digunakan untuk mengubah data user dengan id=" . $id;
	}
	public function destroy()
	{
		return "Method ini Nantinya akan digunakan untuk menghapus data user dengan id=" . $id;
	}

}