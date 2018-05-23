@extends('administrator')

@section('content')
@foreach($visimisi as $visimisi)
<div class="row">
    <div class="col-md-12">
        <a href="{{ route('visimisi.edit',[$visimisi->id]) }}" class="btn btn-success"> Perbarui </a>
    </div>
</div>
<br>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4><b>Visi & Misi</b></h4>
        </div>

        <div class="panel-body">
            <div class="row">
                <div class="col-md-12">
                    <table class="table table-striped">
                        <tr>
                            <td class="h4"><b>Visi</b></td>
                        </tr>
                        <tr>
                            <td>{!!$visimisi->visi!!}</td>
                        </tr>
                    </table>
                </div>
                <div class="col-md-12">
                    <table class="table table-striped">
                        <tr>
                            <td class="h4"><b>Misi</b></td>
                        </tr>
                        <tr>
                            <td>{!!$visimisi->misi!!}</td>
                        
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endforeach
@stop