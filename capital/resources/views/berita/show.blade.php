@extends('administrator')

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">
            <h4><b>Preview Berita</b></h4>
        </div>

        <div class="panel-body">
            <div class="row">
                <div class="col-md-12">
                    <table class="table table-striped">
                        <tr>
                            <td class="h4"><b>{{ $berita->judul }}</b></td>
                        </tr>
                        <tr>
                            <td>{!!$berita->isi!!}</td>
                        </tr>
                    </table>
                </div>
            </div>

            <p>&nbsp;</p>

            <a href="{{ route('berita.index') }}" class="btn btn-primary">KEMBALI</a>
        </div>
    </div>
@stop
