<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pengumumman;
use App\kategoriPengumumman;

class PengumummanController extends Controller
{
    public function index(){
        $listPengumumman=Pengumumman::all();
        return view('pengumumman.index', compact('listPengumumman'));
    }

    public function show($id){
        $artikel=Pengumumman::find($id);
        return view('pengumumman.show', compact('pengumumman'));
    }
    public function create(){
        $kategoriPengumumman= kategoriPengumumman::pluck('nama','id');

        return view ('pengumumman.create',compact('kategoriPengumumman'));
    }

    public function store(request $requirest){
        $input= $requirest->all();

        Pengumumman::create($input);

        return redirect(route('pengumumman.index'));
    }
}