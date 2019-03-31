@extends('layouts.app')

@section('plugin-style')
@endsection

@section('custom-style')
@endsection

@section('plugin-script')
@endsection

@section('custom-script')
@endsection

@section('tab-title')
    <title>DETAIL PENGGUNA | DINSOS KBB</title>
@endsection

@section('page-content')
    <div class="portlet light bordered">
        <div class="portlet-title">
            <div class="caption">
                <span class="caption-subject font-green bold uppercase">DETAIL PENGGUNA</span>
            </div>
        </div>
        <div class="portlet-body">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Nama:</strong><br>
                            {{ $members->name }}
                        </div>
                        <div class="form-group">
                            <strong>Email:</strong><br>
                            {{ $members->email }}
                        </div>
                        <div class="form-group">
                            <strong>Alamat:</strong><br>
                            {{ $members->Address }}
                        </div>
                        <div class="form-group">
                            <strong>No Telepon:</strong><br>
                            {{ $members->phone }}
                        </div>
                        <div class="form-group">
                            <strong>About :</strong><br>
                            {{ $members->about }}
                        </div>
                        <div class="form-group">
                            <strong>Website :</strong><br>
                            {{ $members->website }}
                        </div>
                        <div class="form-group">
                            <strong>Terdaftar Sejak :</strong><br>
                            {{ Carbon\Carbon::parse($members->created_at)->format('d M Y') }}
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        @if ($members->image == '')
                            <img src="{{ env('APP_URL') }}/img/default_picture.jpg" alt="image" width="50%">
                        @else
                            <img src="{{ env('APP_URL') }}/{{ $members->image}}" alt="image" width="100%">
                        @endif
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <a type="button" href="{{ route('member.index') }}" class="btn btn-success" style="margin-right:30px;">Kembali</a>
                </div>
            </div>
        </div>
    </div>
@endsection
