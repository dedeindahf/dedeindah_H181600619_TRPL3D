<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\kategoriPengumumman;

class kategoriPengumummanController extends Controller
{
    public function index(){
        //Eloquent => ORM (Object Relational Mapping)
        $listKategoriPengumumman=KategoriPengumuman::all(); //select * from kategori_pengumumman

        //blade
        return view('kategori_pengumumman.index',compact('listKategoriPengumumman'));

    }

    public function show($id){
        //Eloquent
        //$kategoriPengumumman=KategoriPengumumman::where('id',$id)->first();//select * from kategori_pengumumman where id=$id limit 1
        $kategoriPengumumman=KategoriPengumumman::find($id);

        return view('kategori_pengumumman.show',compact('kategoriPengumumman'));
    }
    public function create(){
        return view('kategori_pengumumman.create');
    }
    public function store(request $requirest){
        $input= $requirest->all();

        KategoriPengumumman::create($input);

        return redirect(route('kategori_pengumumman.index'));
}

}