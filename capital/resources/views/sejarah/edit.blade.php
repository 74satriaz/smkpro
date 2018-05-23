@extends('administrator')

@section('content')

<div class="panel panel-default">
    <div class="panel-heading">
        <h4><i class="fa fa-fire"></i><b>Sejarah</b></h4>
    </div>
        {!! Form::model($sejarah, ['method' => 'PUT', 'route' => ['sejarah.update', $sejarah->id]]) !!}
            <div class="panel-body">
                <div class="row">
                <div class="form-group panel-body">
                        <div class="col-md-12">
                            <textarea name="sejarah" class="form-control texteditor">{!!$sejarah->sejarah!!}</textarea>
                        </div>
                    </div>
                </div>
                <div class="form-group panel-body">
                    {!! Form::submit('Update', ['class' => 'btn btn-danger']) !!}
                    <a href="{{ route('sejarah.index') }}" class="btn btn-success"><span class="icon-skip-back"></span> Kembali </a>
                    {!! Form::close() !!}
                </div>
            </div>
</div>

@stop

