@extends('administrator')

@section('content')

<div class="panel panel-default">
    <div class="panel-heading">
        <h4><i class="fa fa-fire"></i><b>Visi Misi</b></h4>
    </div>
        {!! Form::model($visimisi, ['method' => 'PUT', 'route' => ['visimisi.update', $visimisi->id]]) !!}
            <div class="panel-body">
                <div class="row">
                <div class="form-group panel-body">
                    <label for="judul" class="col-md-6 control-label"><h4><i class="fa fa-compass"></i><b> Visi </b></h4></label>
                        <div class="col-md-12">
                            <textarea name="visi" class="form-control texteditor">{{$visimisi->visi}}</textarea>
                        </div>
                    <label for="judul" class="col-md-6 control-label "><h4><i class="fa fa-crosshairs"></i><b> Misi </b></h4></label>
                        <div class="col-md-12">
                            <textarea name="misi" class="form-control texteditor">{{$visimisi->misi}}</textarea>
                        </div>
                    </div>
                </div>
                <div class="form-group panel-body">
                    {!! Form::submit('Update', ['class' => 'btn btn-danger']) !!}
                    <a href="{{ route('visimisi.index') }}" class="btn btn-success"><span class="icon-skip-back"></span> Kembali </a>
                    {!! Form::close() !!}
                </div>
            </div>
</div>
@stop

