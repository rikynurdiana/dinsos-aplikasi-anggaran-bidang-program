@extends('layouts.app')

@section('plugin-style')
    <link href="{{ env('APP_URL') }}/assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css" rel="stylesheet" type="text/css" />
    <link href="{{ env('APP_URL') }}/assets/global/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
    <link href="{{ env('APP_URL') }}/assets/global/plugins/select2/css/select2-bootstrap.min.css" rel="stylesheet" type="text/css" />
@endsection

@section('custom-style')
    <link href="{{ env('APP_URL') }}/assets/pages/css/profile-2.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://jqueryvalidation.org/files/demo/site-demos.css">
    <style>
        .feeds li .col2 {
            width: 147px !important;
            margin-left: -161px !important;
        }
    </style>
@endsection

@section('plugin-script')
    <script src="{{ env('APP_URL') }}/assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js" type="text/javascript"></script>
    <script src="{{ env('APP_URL') }}/assets/global/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
    <script src="{{ env('APP_URL') }}/assets/global/plugins/jquery-validation/js/additional-methods.min.js" type="text/javascript"></script>
    <script src="{{ env('APP_URL') }}/assets/global/plugins/select2/js/select2.full.min.js" type="text/javascript"></script>
    <script src="{{ env('APP_URL') }}/assets/global/plugins/backstretch/jquery.backstretch.min.js" type="text/javascript"></script>
@endsection

@section('custom-script')
    <script>
        $( "#submit" ).click(function() {
          if ($('#password').val() != $('#password_again').val()) {
              alert( "Password Tidak Sama !!" );
          }
          if ($('#password').val() == $('#password_again').val()) {
              $('#kirim').click()
          }
        });

        $( "#openUpdateStatus" ).click(function() {
            $('#updateStatus').removeClass('hidden');
            $('#badgeStatus').removeClass('hidden');
            $('#updateStatusBtn').removeClass('hidden');
            $('#openUpdateStatus').addClass('hidden');
        });
    </script>
@endsection

@section('tab-title')
    <title>PROFILE | DINSOS KBB</title>
@endsection

@section('page-content')
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Whoops!</strong> ada kesalahan pada inputan.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="profile">
        <div class="tabbable-line tabbable-full-width">
            <ul class="nav nav-tabs">
                <li class="active">
                    <a href="#tab_1_1" data-toggle="tab"> Beranda </a>
                </li>
                <li>
                    <a href="#tab_1_3" data-toggle="tab"> Edit Akun </a>
                </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane active" id="tab_1_1">
                    <div class="row">
                        <div class="col-md-3">
                            <ul class="list-unstyled profile-nav">
                                <li>
                                    @if ($data1['image'] == "")
                                        <img src="{{ env('APP_URL') }}/img/default_picture.jpg" class="img-responsive pic-bordered" alt="image" width="100%" />
                                    @else
                                        <img src="{{ env('APP_URL') . '/' . $data1['image'] }}" class="img-responsive pic-bordered" alt="image" width="100%" />
                                    @endif
                                </li>

                                <li style="margin-top:10px; font-style:italic;">
                                {{ isset($data2['status']) ? $data2['status'] : 'Whats Up'}}
                                </li>

                                <li style="margin-top:30px;">
                                    <button id="openUpdateStatus" type="button" class="btn btn-xs btn-primary" style="margin-bottom:10px;">Update Status</button>

                                    <form role="form" action="{{ env('APP_URL') }}/profile/update-status/{{ $data1['id'] }}" method="POST">
                                        {{ csrf_field() }}
                                        <textarea id="updateStatus" style="width:100%; margin-bottom:10px;" class="hidden form-control" name="status" rows="3" maxlength="250"></textarea>

                                        <div id="badgeStatus" class="hidden mt-radio-list">
                                            <label class="mt-radio" style="margin-right:20px; margin-top:10px;">
                                                <input type="radio" name="badge" value="icon-badge"> <i class="icon-badge" style="margin-left:-10px"></i>
                                                <span></span>
                                            </label>
                                            <label class="mt-radio" style="margin-right:20px">
                                                <input type="radio" name="badge" value="icon-flag"> <i class="icon-flag"  style="margin-left:-10px"></i>
                                                <span></span>
                                            </label>
                                            <label class="mt-radio" style="margin-right:20px">
                                                <input type="radio" name="badge" value="icon-star"> <i class="icon-star"  style="margin-left:-10px"></i>
                                                <span></span>
                                            </label>
                                            <label class="mt-radio" style="margin-right:20px">
                                                <input type="radio" name="badge" value="icon-volume-2"> <i class="icon-volume-2"  style="margin-left:-10px"></i>
                                                <span></span>
                                            </label>
                                            <label class="mt-radio" style="margin-right:20px">
                                                <input type="radio" name="badge" value="icon-fire"> <i class="icon-fire"  style="margin-left:-10px"></i>
                                                <span></span>
                                            </label>
                                            <label class="mt-radio" style="margin-right:20px">
                                                <input type="radio" name="badge" value="icon-bell"> <i class=" icon-bell"  style="margin-left:-10px"></i>
                                                <span></span>
                                            </label>
                                        </div>

                                        <div class="clearfix"></div>

                                        <input type="text" class="hidden" name="user_id" value="{{ $data1['id'] }}">

                                        <button id="updateStatusBtn" type="submit" class="hidden btn btn-sm btn-success pull-right">Update !</button>
                                    </form>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-9">
                            <div class="row">
                                <div class="col-md-8 profile-info">
                                    <h1 class="font-green sbold uppercase">{{ $data1['name'] }}</h1>
                                    <p> {{ $data1['about'] }} </p>
                                    <p>
                                        <a href="javascript:;"> {{ $data1['website'] }} </a>
                                    </p>
                                    <ul class="list-inline">
                                        <li>
                                            <i class="fa fa-phone"></i> {{ $data1['phone'] }} </li>
                                        <li>
                                            <i class="fa fa-home"></i> {{ $data1['city'] }}
                                        </li>
                                    </ul>
                                    {{-- @if (session('user.role') != '4')
                                        <a type="button" class="btn btn-sm btn-success" href="{{ env('APP_URL') }}/blog/list"><i class="icon-pencil"></i> Buat Berita & Pengumuman</a>
                                    @endif --}}
                                </div>
                                <!--end col-md-8-->
                                {{-- <div class="col-md-4">
                                    <div class="portlet sale-summary">
                                        <div class="portlet-title">
                                            <div class="caption font-red sbold"> Ringkasan Data </div>
                                        </div>
                                        <div class="portlet-body">
                                            <ul class="list-unstyled">
                                                <li>
                                                    <span class="sale-info"> TOTAL DATA MASUK</span>
                                                    <span class="sale-num"> {{ $data5['totalDataMasuk'] ? number_format($data5['totalDataMasuk']) : '0' }} </span>
                                                </li>
                                                <li>
                                                    <span class="sale-info"> TOTAL DATA SUDAH DI PROSES</span>
                                                    <span class="sale-num"> {{ $data5['totalDataApprove'] ? number_format($data5['totalDataApprove']) : '0' }} </span>
                                                </li>
                                                <li>
                                                    <span class="sale-info"> TOTAL DATA BELUM DI PROSES </span>
                                                    <span class="sale-num"> {{ $data5['totalDataPending'] ? number_format($data5['totalDataPending']) : '0' }} </span>
                                                </li>
                                                <li>
                                                    <span class="sale-info"> TOTAL KATEGORI PMKS </span>
                                                    <span class="sale-num bold"> {{ $data5['totalDataPmks'] ? number_format($data5['totalDataPmks']) : '0' }} </span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div> --}}
                                <!--end col-md-4-->
                            </div>
                            <!--end row-->
                            <div class="tabbable-line tabbable-custom-profile">
                                <ul class="nav nav-tabs">
                                    {{-- <li  class="active">
                                        <a href="#customer" data-toggle="tab"> Data PMKS </a>
                                    </li> --}}
                                    <li>
                                        <a href="#feeds" data-toggle="tab"> Status </a>
                                    </li>
                                    {{-- <li>
                                        <a href="#blog" data-toggle="tab"> Berita dan Informasi </a>
                                    </li> --}}
                                </ul>
                                <div class="tab-content">
                                    {{-- <div class="tab-pane active" id="customer">
                                        <div class="portlet-body">
                                            <table class="table table-striped table-bordered table-advance table-hover">
                                                <thead>
                                                    <tr>
                                                        <th>
                                                            No Kartu Keluarga
                                                        </th>
                                                        <th>
                                                            NIK
                                                        </th>
                                                        <th>
                                                            Nama
                                                        </th>
                                                        <th>
                                                            Umur
                                                        </th>
                                                        <th>
                                                            Jenis Kelamin
                                                        </th>
                                                        <th>
                                                            Status
                                                        </th>
                                                        <th>
                                                            Verifikasi
                                                        </th>
                                                        <th width="50px"></th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                    @if (isset($pmks) || !empty($pmks))
                                                        @foreach ($pmks as $d)
                                                            <tr>
                                                                <td>{{ (!empty($d->no_kartu_keluarga)) ? $d->no_kartu_keluarga : '' }}</td>
                                                                <td>{{ (!empty($d->nik)) ? $d->nik : '' }}</td>
                                                                <td>{{ (!empty($d->nama_anggota_keluarga)) ? $d->nama_anggota_keluarga : '' }}</td>
                                                                <td>{{ (!empty($d->umur)) ? $d->umur : '' }}</td>
                                                                <td>{{ (!empty($d->gender)) ? $d->gender : '' }}</td>
                                                                <td class="text-center">
                                                                    <span class="{{ ($d->status == 'belum di proses') ? '' : 'hidden' }} label label-danger label-sm"> belum di proses </span>
                                                                    <span class="{{ ($d->status == 'sudah di proses') ? '' : 'hidden' }} label label-success label-sm"> sudah di proses </span>
                                                                </td>
                                                                <td class="text-center">
                                                                    <span class="{{ ($d->verifikasi == 'belum di verifikasi') ? '' : 'hidden' }} label label-danger label-sm"> belum di verifikasi </span>
                                                                    <span class="{{ ($d->verifikasi == 'sudah di verifikasi') ? '' : 'hidden' }} label label-success label-sm"> sudah di verifikasi </span>
                                                                </td>
                                                                <td>
                                                                    <a class="btn btn-xs grey-salsa btn-outline" href="{{ env('APP_URL') }}/pmks/show/{{ $d->nik }}">Lihat</a>
                                                                </td>
                                                            </tr>
                                                        @endforeach
                                                    @else
                                                        <tr>
                                                            <td colspan="5">
                                                                <a href="javascript:;"> Belum ada transaksi</a>
                                                            </td>
                                                        </tr>
                                                    @endif

                                                </tbody>
                                            </table>
                                        </div>
                                    </div> --}}
                                    <!--tab-pane-->
                                    <div class="tab-pane active" id="feeds">
                                        <div class="scroller" data-height="290px" data-always-visible="1" data-rail-visible1="1">
                                            <ul class="feeds">

                                                @if (isset($data3) || $data3 == '')
                                                    @foreach ($data3 as $f)
                                                        <li>
                                                            <div class="row" style="padding-top:10px; padding-bottom:10px">
                                                                <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
                                                                    <div class="row">
                                                                        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
                                                                            <div class="label label-success" style="margin-left: 23px;">
                                                                                <i class="{{ $f['badge'] }}"></i>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-11 col-md-11 col-sm-11 col-xs-11">
                                                                            <div class="desc">
                                                                                {{ $f['status'] }}
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                                                    <div class="date"> <i class="icon-clock"></i> {{ Carbon\Carbon::parse($f['created_at'])->format('d M Y') }} </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    @endforeach
                                                @else
                                                    <li>
                                                        <div class="row" style="padding-top:10px; padding-bottom:10px">
                                                            <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
                                                                <div class="row">
                                                                    <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
                                                                        <div class="label label-success" style="margin-left: 23px;">
                                                                            <i class="icon-bell"></i>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-11 col-md-11 col-sm-11 col-xs-11">
                                                                        <div class="desc">
                                                                            Belum Update Status
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                                                <div class="date"> <i class="icon-clock"></i> {{ date('d-m-Y') }} </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                @endif

                                            </ul>
                                        </div>
                                    </div>
                                    <!--tab-pane-->

                                    {{-- <div class="tab-pane" id="blog">
                                        <div class="portlet-body">
                                            <table class="table table-striped table-bordered table-advance table-hover">
                                                <thead>
                                                    <tr>
                                                        <th width="250px">
                                                            Judul
                                                        </th>
                                                        <th>
                                                            Deskripsi
                                                        </th>
                                                        <th width="170px">
                                                            Tanggal
                                                        </th>
                                                        <th width="180px"></th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                    @if (isset($blogs) || !empty($blogs))
                                                        @foreach ($blogs as $b)
                                                            <tr>
                                                                <td>
                                                                    {{ $b->title }}
                                                                </td>
                                                                <td> {{ substr($b->description,0 , 200) }} </td>
                                                                <td>{{ Carbon\Carbon::parse($b->created_at)->format('d M Y') }}</td>
                                                                <td class="text-center">
                                                                    <a class="btn btn-xs grey-salsa btn-outline" href="{{ env('APP_URL') }}/blog/show/{{ $b->id }}">View</a>
                                                                    <a class="btn btn-xs grey-salsa btn-outline" href="{{ env('APP_URL') }}/blog/edit/{{ $b->id }}">Edit</a>
                                                                    {!! Form::open(['method' => 'POST', 'route' => ['blog.destroy', $b->id],'style'=>'display:inline', 'onsubmit' => 'return confirm("Delete This Data?");']) !!}
                                                                        <button type="submit" class="btn btn-xs grey-salsa btn-outline">Delete</button>
                                                                    {!! Form::close() !!}
                                                                </td>
                                                            </tr>
                                                        @endforeach
                                                    @else
                                                        <tr>
                                                            <td colspan="5">
                                                                <a href="javascript:;"> Belum ada transaksi</a>
                                                            </td>
                                                        </tr>
                                                    @endif

                                                </tbody>
                                            </table>
                                        </div>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--tab_1_2-->
                <div class="tab-pane" id="tab_1_3">
                    <div class="row profile-account">
                        <div class="col-md-3">
                            <ul class="ver-inline-menu tabbable margin-bottom-10">
                                <li class="active">
                                    <a data-toggle="tab" href="#tab_1-1">
                                        <i class="fa fa-cog"></i> Informasi Personal </a>
                                    <span class="after"> </span>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#tab_2-2">
                                        <i class="fa fa-picture-o"></i> Ubah Foto </a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#tab_3-3">
                                        <i class="fa fa-lock"></i> Ubah Password </a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-9">
                            <div class="tab-content">
                                <div id="tab_1-1" class="tab-pane active">
                                    <form role="form" action="{{ env('APP_URL') }}/profile/update/{{ $data1['id'] }}" method="POST">
                                        {{ csrf_field() }}
                                        <div class="form-group">
                                            <label >Bidang</label>
                                            <select class="form-control" name="bidang" >
                                                <option {{ ($data1['bidang'] == 'bidang rehabilitasi sosial') ? 'selected' : '' }} value="bidang rehabilitasi sosial">bidang rehabilitasi sosial</option>
                                                <option {{ ($data1['bidang'] == 'bidang perlindungan dan jaminan sosial') ? 'selected' : '' }} value="bidang perlindungan dan jaminan sosial">bidang perlindungan dan jaminan sosial</option>
                                                <option {{ ($data1['bidang'] == 'bidang pemberdayaan sosial') ? 'selected' : '' }} value="bidang pemberdayaan sosial">bidang pemberdayaan sosial</option>
                                                <option {{ ($data1['bidang'] == 'sekertariat') ? 'selected' : '' }} value="sekertariat">sekertariat</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Nama Lengkap</label>
                                            <input type="text" name="name" placeholder="full name" class="form-control" value="{{ $data1['name'] }}" />
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Tanda Tangan / Paraf</label>
                                            <input type="text" name="username" placeholder="user name" class="form-control" value="{{ $data1['username'] }}"/>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Email</label>
                                            <input type="email" name="email" placeholder="email" class="form-control" value="{{ $data1['email'] }}"/>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Alamat</label>
                                            <input type="text" name="address" placeholder="address" class="form-control" value="{{ $data1['address'] }}" />
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Kota</label>
                                            <input type="text" name="city" placeholder="city" class="form-control" value="{{ $data1['city'] }}"/>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Negara</label>
                                            <select name="country" id="country_list" class="select2 form-control">
                                                <option value=""></option>
                                                <option {{ $data1['country'] == 'AF'? 'selected' : '' }} value="AF">Afghanistan</option>
                                                <option {{ $data1['country'] == 'AL'? 'selected' : '' }} value="AL">Albania</option>
                                                <option {{ $data1['country'] == 'DZ'? 'selected' : '' }} value="DZ">Algeria</option>
                                                <option {{ $data1['country'] == 'AS'? 'selected' : '' }} value="AS">American Samoa</option>
                                                <option {{ $data1['country'] == 'AD'? 'selected' : '' }} value="AD">Andorra</option>
                                                <option {{ $data1['country'] == 'AO'? 'selected' : '' }} value="AO">Angola</option>
                                                <option {{ $data1['country'] == 'AI'? 'selected' : '' }} value="AI">Anguilla</option>
                                                <option {{ $data1['country'] == 'AR'? 'selected' : '' }} value="AR">Argentina</option>
                                                <option {{ $data1['country'] == 'AM'? 'selected' : '' }} value="AM">Armenia</option>
                                                <option {{ $data1['country'] == 'AW'? 'selected' : '' }} value="AW">Aruba</option>
                                                <option {{ $data1['country'] == 'AU'? 'selected' : '' }} value="AU">Australia</option>
                                                <option {{ $data1['country'] == 'AT'? 'selected' : '' }} value="AT">Austria</option>
                                                <option {{ $data1['country'] == 'AZ'? 'selected' : '' }} value="AZ">Azerbaijan</option>
                                                <option {{ $data1['country'] == 'BS'? 'selected' : '' }} value="BS">Bahamas</option>
                                                <option {{ $data1['country'] == 'BH'? 'selected' : '' }} value="BH">Bahrain</option>
                                                <option {{ $data1['country'] == 'BD'? 'selected' : '' }} value="BD">Bangladesh</option>
                                                <option {{ $data1['country'] == 'BB'? 'selected' : '' }} value="BB">Barbados</option>
                                                <option {{ $data1['country'] == 'BY'? 'selected' : '' }} value="BY">Belarus</option>
                                                <option {{ $data1['country'] == 'BE'? 'selected' : '' }} value="BE">Belgium</option>
                                                <option {{ $data1['country'] == 'BZ'? 'selected' : '' }} value="BZ">Belize</option>
                                                <option {{ $data1['country'] == 'BJ'? 'selected' : '' }} value="BJ">Benin</option>
                                                <option {{ $data1['country'] == 'BM'? 'selected' : '' }} value="BM">Bermuda</option>
                                                <option {{ $data1['country'] == 'BT'? 'selected' : '' }} value="BT">Bhutan</option>
                                                <option {{ $data1['country'] == 'BO'? 'selected' : '' }} value="BO">Bolivia</option>
                                                <option {{ $data1['country'] == 'BA'? 'selected' : '' }} value="BA">Bosnia and Herzegowina</option>
                                                <option {{ $data1['country'] == 'BW'? 'selected' : '' }} value="BW">Botswana</option>
                                                <option {{ $data1['country'] == 'BV'? 'selected' : '' }} value="BV">Bouvet Island</option>
                                                <option {{ $data1['country'] == 'BR'? 'selected' : '' }} value="BR">Brazil</option>
                                                <option {{ $data1['country'] == 'IO'? 'selected' : '' }} value="IO">British Indian Ocean Territory</option>
                                                <option {{ $data1['country'] == 'BN'? 'selected' : '' }} value="BN">Brunei Darussalam</option>
                                                <option {{ $data1['country'] == 'BG'? 'selected' : '' }} value="BG">Bulgaria</option>
                                                <option {{ $data1['country'] == 'BF'? 'selected' : '' }} value="BF">Burkina Faso</option>
                                                <option {{ $data1['country'] == 'BI'? 'selected' : '' }} value="BI">Burundi</option>
                                                <option {{ $data1['country'] == 'KH'? 'selected' : '' }} value="KH">Cambodia</option>
                                                <option {{ $data1['country'] == 'CM'? 'selected' : '' }} value="CM">Cameroon</option>
                                                <option {{ $data1['country'] == 'CA'? 'selected' : '' }} value="CA">Canada</option>
                                                <option {{ $data1['country'] == 'CV'? 'selected' : '' }} value="CV">Cape Verde</option>
                                                <option {{ $data1['country'] == 'KY'? 'selected' : '' }} value="KY">Cayman Islands</option>
                                                <option {{ $data1['country'] == 'CF'? 'selected' : '' }} value="CF">Central African Republic</option>
                                                <option {{ $data1['country'] == 'TD'? 'selected' : '' }} value="TD">Chad</option>
                                                <option {{ $data1['country'] == 'CL'? 'selected' : '' }} value="CL">Chile</option>
                                                <option {{ $data1['country'] == 'CN'? 'selected' : '' }} value="CN">China</option>
                                                <option {{ $data1['country'] == 'CX'? 'selected' : '' }} value="CX">Christmas Island</option>
                                                <option {{ $data1['country'] == 'CC'? 'selected' : '' }} value="CC">Cocos (Keeling) Islands</option>
                                                <option {{ $data1['country'] == 'CO'? 'selected' : '' }} value="CO">Colombia</option>
                                                <option {{ $data1['country'] == 'KM'? 'selected' : '' }} value="KM">Comoros</option>
                                                <option {{ $data1['country'] == 'CG'? 'selected' : '' }} value="CG">Congo</option>
                                                <option {{ $data1['country'] == 'CD'? 'selected' : '' }} value="CD">Congo, the Democratic Republic of the</option>
                                                <option {{ $data1['country'] == 'CK'? 'selected' : '' }} value="CK">Cook Islands</option>
                                                <option {{ $data1['country'] == 'CR'? 'selected' : '' }} value="CR">Costa Rica</option>
                                                <option {{ $data1['country'] == 'CI'? 'selected' : '' }} value="CI">Cote d'Ivoire</option>
                                                <option {{ $data1['country'] == 'HR'? 'selected' : '' }} value="HR">Croatia (Hrvatska)</option>
                                                <option {{ $data1['country'] == 'CU'? 'selected' : '' }} value="CU">Cuba</option>
                                                <option {{ $data1['country'] == 'CY'? 'selected' : '' }} value="CY">Cyprus</option>
                                                <option {{ $data1['country'] == 'CZ'? 'selected' : '' }} value="CZ">Czech Republic</option>
                                                <option {{ $data1['country'] == 'DK'? 'selected' : '' }} value="DK">Denmark</option>
                                                <option {{ $data1['country'] == 'DJ'? 'selected' : '' }} value="DJ">Djibouti</option>
                                                <option {{ $data1['country'] == 'DM'? 'selected' : '' }} value="DM">Dominica</option>
                                                <option {{ $data1['country'] == 'DO'? 'selected' : '' }} value="DO">Dominican Republic</option>
                                                <option {{ $data1['country'] == 'EC'? 'selected' : '' }} value="EC">Ecuador</option>
                                                <option {{ $data1['country'] == 'EG'? 'selected' : '' }} value="EG">Egypt</option>
                                                <option {{ $data1['country'] == 'SV'? 'selected' : '' }} value="SV">El Salvador</option>
                                                <option {{ $data1['country'] == 'GQ'? 'selected' : '' }} value="GQ">Equatorial Guinea</option>
                                                <option {{ $data1['country'] == 'ER'? 'selected' : '' }} value="ER">Eritrea</option>
                                                <option {{ $data1['country'] == 'EE'? 'selected' : '' }} value="EE">Estonia</option>
                                                <option {{ $data1['country'] == 'ET'? 'selected' : '' }} value="ET">Ethiopia</option>
                                                <option {{ $data1['country'] == 'FK'? 'selected' : '' }} value="FK">Falkland Islands (Malvinas)</option>
                                                <option {{ $data1['country'] == 'FO'? 'selected' : '' }} value="FO">Faroe Islands</option>
                                                <option {{ $data1['country'] == 'FJ'? 'selected' : '' }} value="FJ">Fiji</option>
                                                <option {{ $data1['country'] == 'FI'? 'selected' : '' }} value="FI">Finland</option>
                                                <option {{ $data1['country'] == 'FR'? 'selected' : '' }} value="FR">France</option>
                                                <option {{ $data1['country'] == 'GF'? 'selected' : '' }} value="GF">French Guiana</option>
                                                <option {{ $data1['country'] == 'PF'? 'selected' : '' }} value="PF">French Polynesia</option>
                                                <option {{ $data1['country'] == 'TF'? 'selected' : '' }} value="TF">French Southern Territories</option>
                                                <option {{ $data1['country'] == 'GA'? 'selected' : '' }} value="GA">Gabon</option>
                                                <option {{ $data1['country'] == 'GM'? 'selected' : '' }} value="GM">Gambia</option>
                                                <option {{ $data1['country'] == 'GE'? 'selected' : '' }} value="GE">Georgia</option>
                                                <option {{ $data1['country'] == 'DE'? 'selected' : '' }} value="DE">Germany</option>
                                                <option {{ $data1['country'] == 'GH'? 'selected' : '' }} value="GH">Ghana</option>
                                                <option {{ $data1['country'] == 'GI'? 'selected' : '' }} value="GI">Gibraltar</option>
                                                <option {{ $data1['country'] == 'GR'? 'selected' : '' }} value="GR">Greece</option>
                                                <option {{ $data1['country'] == 'GL'? 'selected' : '' }} value="GL">Greenland</option>
                                                <option {{ $data1['country'] == 'GD'? 'selected' : '' }} value="GD">Grenada</option>
                                                <option {{ $data1['country'] == 'GP'? 'selected' : '' }} value="GP">Guadeloupe</option>
                                                <option {{ $data1['country'] == 'GU'? 'selected' : '' }} value="GU">Guam</option>
                                                <option {{ $data1['country'] == 'GT'? 'selected' : '' }} value="GT">Guatemala</option>
                                                <option {{ $data1['country'] == 'GN'? 'selected' : '' }} value="GN">Guinea</option>
                                                <option {{ $data1['country'] == 'GW'? 'selected' : '' }} value="GW">Guinea-Bissau</option>
                                                <option {{ $data1['country'] == 'GY'? 'selected' : '' }} value="GY">Guyana</option>
                                                <option {{ $data1['country'] == 'HT'? 'selected' : '' }} value="HT">Haiti</option>
                                                <option {{ $data1['country'] == 'HM'? 'selected' : '' }} value="HM">Heard and Mc Donald Islands</option>
                                                <option {{ $data1['country'] == 'VA'? 'selected' : '' }} value="VA">Holy See (Vatican City State)</option>
                                                <option {{ $data1['country'] == 'HN'? 'selected' : '' }} value="HN">Honduras</option>
                                                <option {{ $data1['country'] == 'HK'? 'selected' : '' }} value="HK">Hong Kong</option>
                                                <option {{ $data1['country'] == 'HU'? 'selected' : '' }} value="HU">Hungary</option>
                                                <option {{ $data1['country'] == 'IS'? 'selected' : '' }} value="IS">Iceland</option>
                                                <option {{ $data1['country'] == 'IN'? 'selected' : '' }} value="IN">India</option>
                                                <option {{ $data1['country'] == 'ID'? 'selected' : '' }} value="ID">Indonesia</option>
                                                <option {{ $data1['country'] == 'IR'? 'selected' : '' }} value="IR">Iran (Islamic Republic of)</option>
                                                <option {{ $data1['country'] == 'IQ'? 'selected' : '' }} value="IQ">Iraq</option>
                                                <option {{ $data1['country'] == 'IE'? 'selected' : '' }} value="IE">Ireland</option>
                                                <option {{ $data1['country'] == 'IL'? 'selected' : '' }} value="IL">Israel</option>
                                                <option {{ $data1['country'] == 'IT'? 'selected' : '' }} value="IT">Italy</option>
                                                <option {{ $data1['country'] == 'JM'? 'selected' : '' }} value="JM">Jamaica</option>
                                                <option {{ $data1['country'] == 'JP'? 'selected' : '' }} value="JP">Japan</option>
                                                <option {{ $data1['country'] == 'JO'? 'selected' : '' }} value="JO">Jordan</option>
                                                <option {{ $data1['country'] == 'KZ'? 'selected' : '' }} value="KZ">Kazakhstan</option>
                                                <option {{ $data1['country'] == 'KE'? 'selected' : '' }} value="KE">Kenya</option>
                                                <option {{ $data1['country'] == 'KI'? 'selected' : '' }} value="KI">Kiribati</option>
                                                <option {{ $data1['country'] == 'KP'? 'selected' : '' }} value="KP">Korea, Democratic People's Republic of</option>
                                                <option {{ $data1['country'] == 'KR'? 'selected' : '' }} value="KR">Korea, Republic of</option>
                                                <option {{ $data1['country'] == 'KW'? 'selected' : '' }} value="KW">Kuwait</option>
                                                <option {{ $data1['country'] == 'KG'? 'selected' : '' }} value="KG">Kyrgyzstan</option>
                                                <option {{ $data1['country'] == 'LA'? 'selected' : '' }} value="LA">Lao People's Democratic Republic</option>
                                                <option {{ $data1['country'] == 'LV'? 'selected' : '' }} value="LV">Latvia</option>
                                                <option {{ $data1['country'] == 'LB'? 'selected' : '' }} value="LB">Lebanon</option>
                                                <option {{ $data1['country'] == 'LS'? 'selected' : '' }} value="LS">Lesotho</option>
                                                <option {{ $data1['country'] == 'LR'? 'selected' : '' }} value="LR">Liberia</option>
                                                <option {{ $data1['country'] == 'LY'? 'selected' : '' }} value="LY">Libyan Arab Jamahiriya</option>
                                                <option {{ $data1['country'] == 'LI'? 'selected' : '' }} value="LI">Liechtenstein</option>
                                                <option {{ $data1['country'] == 'LT'? 'selected' : '' }} value="LT">Lithuania</option>
                                                <option {{ $data1['country'] == 'LU'? 'selected' : '' }} value="LU">Luxembourg</option>
                                                <option {{ $data1['country'] == 'MO'? 'selected' : '' }} value="MO">Macau</option>
                                                <option {{ $data1['country'] == 'MK'? 'selected' : '' }} value="MK">Macedonia, The Former Yugoslav Republic of</option>
                                                <option {{ $data1['country'] == 'MG'? 'selected' : '' }} value="MG">Madagascar</option>
                                                <option {{ $data1['country'] == 'MW'? 'selected' : '' }} value="MW">Malawi</option>
                                                <option {{ $data1['country'] == 'MY'? 'selected' : '' }} value="MY">Malaysia</option>
                                                <option {{ $data1['country'] == 'MV'? 'selected' : '' }} value="MV">Maldives</option>
                                                <option {{ $data1['country'] == 'ML'? 'selected' : '' }} value="ML">Mali</option>
                                                <option {{ $data1['country'] == 'MT'? 'selected' : '' }} value="MT">Malta</option>
                                                <option {{ $data1['country'] == 'MH'? 'selected' : '' }} value="MH">Marshall Islands</option>
                                                <option {{ $data1['country'] == 'MQ'? 'selected' : '' }} value="MQ">Martinique</option>
                                                <option {{ $data1['country'] == 'MR'? 'selected' : '' }} value="MR">Mauritania</option>
                                                <option {{ $data1['country'] == 'MU'? 'selected' : '' }} value="MU">Mauritius</option>
                                                <option {{ $data1['country'] == 'YT'? 'selected' : '' }} value="YT">Mayotte</option>
                                                <option {{ $data1['country'] == 'MX'? 'selected' : '' }} value="MX">Mexico</option>
                                                <option {{ $data1['country'] == 'FM'? 'selected' : '' }} value="FM">Micronesia, Federated States of</option>
                                                <option {{ $data1['country'] == 'MD'? 'selected' : '' }} value="MD">Moldova, Republic of</option>
                                                <option {{ $data1['country'] == 'MC'? 'selected' : '' }} value="MC">Monaco</option>
                                                <option {{ $data1['country'] == 'MN'? 'selected' : '' }} value="MN">Mongolia</option>
                                                <option {{ $data1['country'] == 'MS'? 'selected' : '' }} value="MS">Montserrat</option>
                                                <option {{ $data1['country'] == 'MA'? 'selected' : '' }} value="MA">Morocco</option>
                                                <option {{ $data1['country'] == 'MZ'? 'selected' : '' }} value="MZ">Mozambique</option>
                                                <option {{ $data1['country'] == 'MM'? 'selected' : '' }} value="MM">Myanmar</option>
                                                <option {{ $data1['country'] == 'NA'? 'selected' : '' }} value="NA">Namibia</option>
                                                <option {{ $data1['country'] == 'NR'? 'selected' : '' }} value="NR">Nauru</option>
                                                <option {{ $data1['country'] == 'NP'? 'selected' : '' }} value="NP">Nepal</option>
                                                <option {{ $data1['country'] == 'NL'? 'selected' : '' }} value="NL">Netherlands</option>
                                                <option {{ $data1['country'] == 'AN'? 'selected' : '' }} value="AN">Netherlands Antilles</option>
                                                <option {{ $data1['country'] == 'NC'? 'selected' : '' }} value="NC">New Caledonia</option>
                                                <option {{ $data1['country'] == 'NZ'? 'selected' : '' }} value="NZ">New Zealand</option>
                                                <option {{ $data1['country'] == 'NI'? 'selected' : '' }} value="NI">Nicaragua</option>
                                                <option {{ $data1['country'] == 'NE'? 'selected' : '' }} value="NE">Niger</option>
                                                <option {{ $data1['country'] == 'NG'? 'selected' : '' }} value="NG">Nigeria</option>
                                                <option {{ $data1['country'] == 'NU'? 'selected' : '' }} value="NU">Niue</option>
                                                <option {{ $data1['country'] == 'NF'? 'selected' : '' }} value="NF">Norfolk Island</option>
                                                <option {{ $data1['country'] == 'MP'? 'selected' : '' }} value="MP">Northern Mariana Islands</option>
                                                <option {{ $data1['country'] == 'NO'? 'selected' : '' }} value="NO">Norway</option>
                                                <option {{ $data1['country'] == 'OM'? 'selected' : '' }} value="OM">Oman</option>
                                                <option {{ $data1['country'] == 'PK'? 'selected' : '' }} value="PK">Pakistan</option>
                                                <option {{ $data1['country'] == 'PW'? 'selected' : '' }} value="PW">Palau</option>
                                                <option {{ $data1['country'] == 'PA'? 'selected' : '' }} value="PA">Panama</option>
                                                <option {{ $data1['country'] == 'PG'? 'selected' : '' }} value="PG">Papua New Guinea</option>
                                                <option {{ $data1['country'] == 'PY'? 'selected' : '' }} value="PY">Paraguay</option>
                                                <option {{ $data1['country'] == 'PE'? 'selected' : '' }} value="PE">Peru</option>
                                                <option {{ $data1['country'] == 'PH'? 'selected' : '' }} value="PH">Philippines</option>
                                                <option {{ $data1['country'] == 'PN'? 'selected' : '' }} value="PN">Pitcairn</option>
                                                <option {{ $data1['country'] == 'PL'? 'selected' : '' }} value="PL">Poland</option>
                                                <option {{ $data1['country'] == 'PT'? 'selected' : '' }} value="PT">Portugal</option>
                                                <option {{ $data1['country'] == 'PR'? 'selected' : '' }} value="PR">Puerto Rico</option>
                                                <option {{ $data1['country'] == 'QA'? 'selected' : '' }} value="QA">Qatar</option>
                                                <option {{ $data1['country'] == 'RE'? 'selected' : '' }} value="RE">Reunion</option>
                                                <option {{ $data1['country'] == 'RO'? 'selected' : '' }} value="RO">Romania</option>
                                                <option {{ $data1['country'] == 'RU'? 'selected' : '' }} value="RU">Russian Federation</option>
                                                <option {{ $data1['country'] == 'RW'? 'selected' : '' }} value="RW">Rwanda</option>
                                                <option {{ $data1['country'] == 'KN'? 'selected' : '' }} value="KN">Saint Kitts and Nevis</option>
                                                <option {{ $data1['country'] == 'LC'? 'selected' : '' }} value="LC">Saint LUCIA</option>
                                                <option {{ $data1['country'] == 'VC'? 'selected' : '' }} value="VC">Saint Vincent and the Grenadines</option>
                                                <option {{ $data1['country'] == 'WS'? 'selected' : '' }} value="WS">Samoa</option>
                                                <option {{ $data1['country'] == 'SM'? 'selected' : '' }} value="SM">San Marino</option>
                                                <option {{ $data1['country'] == 'ST'? 'selected' : '' }} value="ST">Sao Tome and Principe</option>
                                                <option {{ $data1['country'] == 'SA'? 'selected' : '' }} value="SA">Saudi Arabia</option>
                                                <option {{ $data1['country'] == 'SN'? 'selected' : '' }} value="SN">Senegal</option>
                                                <option {{ $data1['country'] == 'SC'? 'selected' : '' }} value="SC">Seychelles</option>
                                                <option {{ $data1['country'] == 'SL'? 'selected' : '' }} value="SL">Sierra Leone</option>
                                                <option {{ $data1['country'] == 'SG'? 'selected' : '' }} value="SG">Singapore</option>
                                                <option {{ $data1['country'] == 'SK'? 'selected' : '' }} value="SK">Slovakia (Slovak Republic)</option>
                                                <option {{ $data1['country'] == 'SI'? 'selected' : '' }} value="SI">Slovenia</option>
                                                <option {{ $data1['country'] == 'SB'? 'selected' : '' }} value="SB">Solomon Islands</option>
                                                <option {{ $data1['country'] == 'SO'? 'selected' : '' }} value="SO">Somalia</option>
                                                <option {{ $data1['country'] == 'ZA'? 'selected' : '' }} value="ZA">South Africa</option>
                                                <option {{ $data1['country'] == 'GS'? 'selected' : '' }} value="GS">South Georgia and the South Sandwich Islands</option>
                                                <option {{ $data1['country'] == 'ES'? 'selected' : '' }} value="ES">Spain</option>
                                                <option {{ $data1['country'] == 'LK'? 'selected' : '' }} value="LK">Sri Lanka</option>
                                                <option {{ $data1['country'] == 'SH'? 'selected' : '' }} value="SH">St. Helena</option>
                                                <option {{ $data1['country'] == 'PM'? 'selected' : '' }} value="PM">St. Pierre and Miquelon</option>
                                                <option {{ $data1['country'] == 'SD'? 'selected' : '' }} value="SD">Sudan</option>
                                                <option {{ $data1['country'] == 'SR'? 'selected' : '' }} value="SR">Suriname</option>
                                                <option {{ $data1['country'] == 'SJ'? 'selected' : '' }} value="SJ">Svalbard and Jan Mayen Islands</option>
                                                <option {{ $data1['country'] == 'SZ'? 'selected' : '' }} value="SZ">Swaziland</option>
                                                <option {{ $data1['country'] == 'SE'? 'selected' : '' }} value="SE">Sweden</option>
                                                <option {{ $data1['country'] == 'CH'? 'selected' : '' }} value="CH">Switzerland</option>
                                                <option {{ $data1['country'] == 'SY'? 'selected' : '' }} value="SY">Syrian Arab Republic</option>
                                                <option {{ $data1['country'] == 'TW'? 'selected' : '' }} value="TW">Taiwan, Province of China</option>
                                                <option {{ $data1['country'] == 'TJ'? 'selected' : '' }} value="TJ">Tajikistan</option>
                                                <option {{ $data1['country'] == 'TZ'? 'selected' : '' }} value="TZ">Tanzania, United Republic of</option>
                                                <option {{ $data1['country'] == 'TH'? 'selected' : '' }} value="TH">Thailand</option>
                                                <option {{ $data1['country'] == 'TG'? 'selected' : '' }} value="TG">Togo</option>
                                                <option {{ $data1['country'] == 'TK'? 'selected' : '' }} value="TK">Tokelau</option>
                                                <option {{ $data1['country'] == 'TO'? 'selected' : '' }} value="TO">Tonga</option>
                                                <option {{ $data1['country'] == 'TT'? 'selected' : '' }} value="TT">Trinidad and Tobago</option>
                                                <option {{ $data1['country'] == 'TN'? 'selected' : '' }} value="TN">Tunisia</option>
                                                <option {{ $data1['country'] == 'TR'? 'selected' : '' }} value="TR">Turkey</option>
                                                <option {{ $data1['country'] == 'TM'? 'selected' : '' }} value="TM">Turkmenistan</option>
                                                <option {{ $data1['country'] == 'TC'? 'selected' : '' }} value="TC">Turks and Caicos Islands</option>
                                                <option {{ $data1['country'] == 'TV'? 'selected' : '' }} value="TV">Tuvalu</option>
                                                <option {{ $data1['country'] == 'UG'? 'selected' : '' }} value="UG">Uganda</option>
                                                <option {{ $data1['country'] == 'UA'? 'selected' : '' }} value="UA">Ukraine</option>
                                                <option {{ $data1['country'] == 'AE'? 'selected' : '' }} value="AE">United Arab Emirates</option>
                                                <option {{ $data1['country'] == 'GB'? 'selected' : '' }} value="GB">United Kingdom</option>
                                                <option {{ $data1['country'] == 'US'? 'selected' : '' }} value="US">United States</option>
                                                <option {{ $data1['country'] == 'UM'? 'selected' : '' }} value="UM">United States Minor Outlying Islands</option>
                                                <option {{ $data1['country'] == 'UY'? 'selected' : '' }} value="UY">Uruguay</option>
                                                <option {{ $data1['country'] == 'UZ'? 'selected' : '' }} value="UZ">Uzbekistan</option>
                                                <option {{ $data1['country'] == 'VU'? 'selected' : '' }} value="VU">Vanuatu</option>
                                                <option {{ $data1['country'] == 'VE'? 'selected' : '' }} value="VE">Venezuela</option>
                                                <option {{ $data1['country'] == 'VN'? 'selected' : '' }} value="VN">Viet Nam</option>
                                                <option {{ $data1['country'] == 'VG'? 'selected' : '' }} value="VG">Virgin Islands (British)</option>
                                                <option {{ $data1['country'] == 'VI'? 'selected' : '' }} value="VI">Virgin Islands (U.S.)</option>
                                                <option {{ $data1['country'] == 'WF'? 'selected' : '' }} value="WF">Wallis and Futuna Islands</option>
                                                <option {{ $data1['country'] == 'EH'? 'selected' : '' }} value="EH">Western Sahara</option>
                                                <option {{ $data1['country'] == 'YE'? 'selected' : '' }} value="YE">Yemen</option>
                                                <option {{ $data1['country'] == 'ZM'? 'selected' : '' }} value="ZM">Zambia</option>
                                                <option {{ $data1['country'] == 'ZW'? 'selected' : '' }} value="ZW">Zimbabwe</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">No Telepon</label>
                                            <input type="text" name="phone" placeholder="phone" class="form-control" value="{{ $data1['phone'] }}" />
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Tentang Anda</label>
                                            <textarea maxlength="250" class="form-control" name="about" rows="3" placeholder="About">{{ $data1['about'] }}</textarea>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Alamat Website</label>
                                            <input type="text" name="website" placeholder="website" class="form-control" value="{{ $data1['website'] }}" />
                                        </div>
                                        <div class="margiv-top-10">
                                            <button type="submit" class="btn green">Simpan Perubahan</button>
                                        </div>
                                    </form>
                                </div>
                                <div id="tab_2-2" class="tab-pane">
                                    <form role="form" action="{{ env('APP_URL') }}/profile/update/{{ $data1['id'] }}" method="POST" enctype="multipart/form-data" files="true">
                                        {{ csrf_field() }}
                                        <div class="form-group">
                                            <div class="fileinput fileinput-new" data-provides="fileinput">
                                                <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                                                    @if ($data1['image'] == "")
                                                        <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt="image" width="100%"/>
                                                    @else
                                                        <img src="{{ env('APP_URL') . '/' . $data1['image'] }}" alt="image" width="100%"/>
                                                    @endif
                                                </div>
                                                <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"> </div>
                                                <div>
                                                    <span class="btn default btn-file">
                                                        <span class="fileinput-new"> Pilih Gambar </span>
                                                        <span class="fileinput-exists"> Ubah </span>
                                                        <input type="file" name="image"> </span>
                                                    <a href="javascript:;" class="btn default fileinput-exists" data-dismiss="fileinput"> Hapus </a>
                                                </div>
                                            </div>
                                            <div class="clearfix margin-top-10">
                                                <span class="label label-danger"> Catatan! </span><br><br>
                                                <span> Gambar yang diterima adalah yang bertipe .jpg atau .png dan ukuran tidak boleh lebih besar dari 500px X 500px </span>
                                            </div>
                                        </div>
                                        <div class="margin-top-10">
                                            <button type="submit" class="btn green">Simpan Perubahan</button>
                                        </div>
                                    </form>
                                </div>
                                <div id="tab_3-3" class="tab-pane">
                                    <form id="myform" role="form" action="{{ env('APP_URL') }}/profile/update/{{ $data1['id'] }}" method="POST">
                                        {{ csrf_field() }}
                                        <div class="form-group">
                                            <label class="control-label">Password Baru</label>
                                            <input type="password" id="password" name="password" class="form-control" />
                                        </div>
                                        <div class="clearfix"></div>
                                        <div class="form-group">
                                            <label class="control-label">Ketik Ulah Password</label>
                                            <input type="password" id="password_again" name="password_again" class="form-control" />
                                        </div>
                                        <div class="clearfix"></div>
                                        <div class="margin-top-10">
                                            <a id="submit" class="btn green">Simpan Perubahan</a>
                                            <button id="kirim" type="submit" class="hidden">kirim</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!--end col-md-9-->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
