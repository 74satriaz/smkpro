@extends('administrator')

@section('content')
<div class="panel panel-default">
        <div class="panel-heading">
            <h4><i class="fa fa-paper-plane"></i><b>Tambah Berita</b></h4>            
        </div>


    <form action="{{ route('berita.store') }}" enctype="multipart/form-data" method="POST">
        {{ csrf_field() }}
                <div class="panel-body">
                    <div class="col-md-6">
                            <input name="judul" type="text" class="form-control" placeholder="Judul Berita" required>
                    </div>
                    <div class="col-md-3">
                            <input name="penulis" type="text" class="form-control" placeholder="Penulis" required>
                    </div>
                    <div class="col-md-1">
                        <button type="submit" class="btn btn-warning"><span class="fa fa-upload"></span> Publish </button>
                    </div>
                   <div class="col-md-1">
                        <a href="{{ route('berita.index')}}" class="btn btn-success"> Kembali </a>
                    </div>
                </div>
                <div class="panel-body">        
                    <div class="col-md-12">
                        <input type="file" name="gmb" class="form-control">
                    </div>
                </div>
                <div class="panel-body">
                    <div class="col-md-12">
                        <textarea name="isi" class="form-control texteditor" height="800px"></textarea>
                    </div>
                </div>
    </form>
</div>
@stop

