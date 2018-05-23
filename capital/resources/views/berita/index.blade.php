@extends('administrator')

@section('content')
    <div class="row">
        <div class="col col-lg-12">
            <a href="{{ route('berita.create') }}" class="btn btn-success"><span class="icon-file-add"></span>Tambah Berita</a>
        </div>
    </div>
        <br>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4><i style="margin-right: 5px;" class="fa fa-list"> </i>Daftar Berita</h4>
                </div>

                <div class="panel-body">
                    <table class="table table-bordered table-striped {{ count($berita) > 0 ? 'datatable' : '' }} dt-select">
                        <thead>
                            <tr>
                                <th style="text-align:center;"><input type="checkbox" id="select-all" /></th>
                                <th style="text-align: center;">Judul</th>
                                <th style="text-align: center;">Aksi</th>
                            </tr>
                        </thead>
                        
                        <tbody>
                            @if (count($berita) > 0)
                                @foreach ($berita as $berita)
                                    <tr data-entry-id="{{ $berita->id }}">
                                        <td style="text-align: center;"><input type="checkbox" id="select"></td>
                                        <td>{{ $berita->judul }}</td>
                                        <td style="text-align: center;">
                                            <a href="{{ route('berita.show',[$berita->id]) }}" class="btn btn-sm btn-primary">Lihat</a>
                                            <a href="{{ route('berita.edit',[$berita->id]) }}" class="btn btn-sm btn-info">Edit</a>
                                            {!! Form::open(array(
                                                'style' => 'display: inline-block;',
                                                'method' => 'DELETE',
                                                'onsubmit' => "return confirm('".trans("Hapus Berita ini?")."');",
                                                'route' => ['berita.destroy', $berita->id])) !!}
                                            {!! Form::submit('Hapus', array('class' => 'btn btn-sm btn-danger')) !!}
                                            {!! Form::close() !!}</td>
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="3">Tidak ada berita</td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
@stop
