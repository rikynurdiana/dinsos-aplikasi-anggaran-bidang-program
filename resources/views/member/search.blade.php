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
    <title>PENGGUNA | DINSOS KBB</title>
@endsection

@section('page-content')
    <div class="portlet light bordered">
        <div class="portlet-title">
            <div class="caption pull-left">
                <span class="caption-subject font-green bold uppercase">DATA PENGGUNA</span>
            </div>
            <div class="actions" style="margin-top:-40px">
                <div class="col-lg-2 pull-right" style="margin-right:20px;">
                    <form class="" action="{{ route('member.search') }}" method="post">
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
                        <th onclick="sortTable(2)">Nama</th>
                        <th onclick="sortTable(3)">Email</th>
                        <th onclick="sortTable(4)">Hak Akses</th>
                        <th width="120px" class="text-center"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($members as $member)
                        <tr>
                            <td class="text-center">{{ ++$i }}</td>
                            <td>{{ $member->bidang}}</td>
                            <td>{{ $member->name}}</td>
                            <td>{{ $member->email}}</td>
                            <td>
                                @if ($member->role == '1')
                                    Super Admin
                                @elseif ($member->role == '2')
                                    Admin Pemda
                                @elseif ($member->role == '3')
                                    Pelapor
                                @elseif ($member->role == '4')
                                    Belum Di Aktifkan
                                @endif
                            </td>
                            <td class="text-center">
                                    <a class="btn btn-xs btn-success" href="{{ env('APP_URL') }}/member/show/{{ $member->id }}"><i class="icon-eye"></i> </a>
                                @if (session('user.role') == '1' || session('user.role') == '2')
                                    {{-- @if ($member->name == session('user.name') || $member->role == '3') --}}
                                        <a class="btn btn-xs  btn-primary" href="{{ env('APP_URL') }}/member/edit/{{ $member->id }}"><i class="icon-pencil"></i> </a>
                                        {!! Form::open(['method' => 'POST', 'route' => ['member.destroy', $member->id],'style'=>'display:inline', 'onsubmit' => 'return confirm("Delete This Data?");']) !!}
                                            <button type="submit" class="btn btn-xs btn-danger"><i class="icon-trash"></i> </button>
                                        {!! Form::close() !!}
                                    {{-- @endif --}}
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>


@endsection
