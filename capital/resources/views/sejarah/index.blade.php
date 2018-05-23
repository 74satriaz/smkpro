@extends('administrator')

@section('content')
@foreach($sejarah as $sejarah)
<div class="row">
    <div class="col-md-12">
        <a href="{{ route('sejarah.edit',[$sejarah->id]) }}" class="btn btn-success"> Perbarui </a>
    </div>
</div>
<br>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4><b>Sejarah</b></h4>
        </div>

        <div class="panel-body">
            <div class="row">
                <div class="col-md-12">
                    <table class="table table-striped">
                        <tr>
                            <td>{!!$sejarah->sejarah!!}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endforeach
@stop