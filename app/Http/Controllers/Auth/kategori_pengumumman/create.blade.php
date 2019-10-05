@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tambah Kategori Pengumumman</div>

                <div class="card-body">
                   <form method="post" action="{!! route('kategori_pengumumman.store') !!}">
                       @include('kategori_pengumumman.form')

                   </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection