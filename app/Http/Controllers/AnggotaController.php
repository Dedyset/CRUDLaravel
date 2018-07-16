<?php 

namespace App\Http\Controllers;

use App\Anggota;
use Session;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AnggotaController extends Controller {
	
	//LIST MEMBER
	public function listAnggota()
	{
		$anggota = Anggota::orderBy('id','desc')->paginate(3);
		$title = 'List Anggota';
		return view('pages.list',compact('anggota'))->with('title',$title);
	}
	
	//NEW MEMBER
	public function newAnggota()
	{
		$title = 'New Anggota';
		return view('pages.new')->with('title',$title);
	}
	
	//EDIT
	public function editAnggota(Anggota $anggota)
	{
		$title = 'Edit Anggota';
		return view('pages.edit',compact('anggota'))->with('title',$title);
	}
	
	//UPDATE
	public function updateAnggota(Request $request, $id) 
	{
		$anggota = Anggota::findOrFail($id);

		$this->validate($request,[
			'nama' => 'required',
			'alamat' => 'required'
		]);

		$input = $request->all();
		$anggota->fill($input)->save();
		Session::flash('message', 'Anggota berhasil diedit!');
		
		// return redirect()->back();
		return redirect('/');
    } 
	
	//SAVE
    public function saveAnggota(Request $request) 
    { 
		$anggota = new Anggota();

		$this->validate($request,[
			'nama' => 'required',
			'alamat' => 'required'
		]);

		$input = $request->all();
		$anggota->create($input);

		Session::flash('message', 'Anggota berhasil ditambah!');
		
		// return redirect()->back();
		return redirect('/');
    }
	
	//HAPUS
	public function deleteAnggota($id) 
	{
		$anggota = Anggota::findOrFail($id);
		$anggota->delete();
		Session::flash('message', 'Anggota berhasil dihapus!');

		return redirect('/');    
	} 

}
