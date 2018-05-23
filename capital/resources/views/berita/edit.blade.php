@extends('administrator')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4><i class="fa fa-paper-plane"></i><b>Edit Berita</b></h4>            
        </div>

        {!! Form::model($berita, ['method' => 'PUT', 'route' => ['berita.update', $berita->id]]) !!}

                <div class="panel-body">
                    <div class="col-md-6">
                        <div data-toggle="tooltip" title="Judul berita">
                            <input name="judul" type="text" class="form-control" value="{{$berita->judul}}">
                        </div>
                    </div>
                    <div class="col-md-3">
                            <input name="penulis" type="text" class="form-control" value="{{$berita->penulis}}">
                    </div>
                    <div class="col-md-1">
                        <button type="submit" class="btn btn-warning"><span class="fa fa-upload"></span> Update </button>
                    </div>
                   <div class="col-md-1">
                        <a href="{{ route('berita.index')}}" class="btn btn-success"> Kembali </a>
                    </div>
                </div>
                <div class="panel-body">        
                    <div class="col-md-12">
                        <input type="file" name="gmb" class="form-control" value="{{$berita->gambar}}">
                    </div>
                </div>
                <div class="panel-body">
                    <div class="col-md-12">
                        <textarea name="isi" class="form-control texteditor" height="800px">{{$berita->isi}}</textarea>
                    </div>
                </div>

    </div>


@stop


