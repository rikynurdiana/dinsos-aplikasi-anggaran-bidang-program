@extends('layouts.app')

@section('plugin-style')
@endsection

@section('custom-style')
    <style>
        th {
            cursor: pointer;
        }
    </style>
@endsection

@section('plugin-script')
@endsection

@section('custom-script')
    <script src="{{ env('APP_URL') }}/js/page/sorting-bootstrap-table.js" type="text/javascript"></script>
@endsection

@section('tab-title')
    <title>KATEGORI PMKS | DINSOS KBB</title>
@endsection


@section('page-content')
    <div class="portlet light bordered">
        <div class="portlet-title">
            <div class="caption">
                <span class="caption-subject font-green bold uppercase">DATA KATEGORI PMKS</span>
            </div>
            <div class="actions" style="margin-top:-40px">
                <div class="pull-right">
                    <a class="btn btn-success" href="{{ route('kategori-pmks.create') }}"> Input Data Kategori PMKS</a>
                </div>
                <div class="col-lg-2 pull-right" style="margin-right:20px;">
                    <form class="" action="{{ route('kategori-pmks.search') }}" method="post">
                        <div class="input-group">
                            <input type="text" name="search" class="form-control" placeholder="search">
                            <span class="input-group-btn">
                                <button class="btn blue" type="submit"><i class="icon-magnifier"></i> </button>
                            </span>
                        </div>
                        {{ csrf_field() }}
                    </form>
                </div>
            </div>
        </div>
        <div class="portlet-body">
            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif
            <table class="table table-bordered table-hover" id="myTable">
                <thead>
                    <tr style="background-color:#f3f3f3;">
                        <th onclick="sortTable(0)" width="50px" class="text-center">No</th>
                        <th onclick="sortTable(1)">Bidang</th>
                        <th onclick="sortTable(2)">Jenis PMKS</th>
                        <th width="200px" onclick="sortTable(3)" class="text-center">Jumlah</th>
                        <th width="120px" class="text-center"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($masters as $master)
                        <tr>
                            <td class="text-center">{{ ++$i }}</td>
                            <td>{{ $master->bidang }}</td>
                            <td>{{ $master->kategori }}</td>
                            <td class="text-right">
                                {{ $master->jumlah_orang ? number_format($master->jumlah_orang) : 0 }} Orang
                            </td>
                            <td class="text-center">
                                <a class="btn btn-xs btn-success" href="{{ env('APP_URL') }}/kategori-pmks/show/{{ $master->id }}"><i class="icon-eye"></i> </a>
                                @if (session('user.role') == 1 || session('user.role') == 2)
                                    <a class="btn btn-xs  btn-primary" href="{{ env('APP_URL') }}/kategori-pmks/edit/{{ $master->id }}"><i class="icon-pencil"></i> </a>
                                    {!! Form::open(['method' => 'POST', 'route' => ['kategori-pmks.destroy', $master->id],'style'=>'display:inline', 'onsubmit' => 'return confirm("Anda yakin akan menghapus data ini?");']) !!}
                                        <button type="submit" class="btn btn-xs btn-danger"><i class="icon-trash"></i> </button>
                                    {!! Form::close() !!}
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{-- {!! $masters->render() !!} --}}
        </div>
    </div>


@endsection
