$(document).ready(function() {
    $(".tambah_anggota").click(function(){
        $.getScript( app_url + "/js/page/format-dob.js", function( data, textStatus, jqxhr ) {
        });
    });

    $("input[name='group-a[0][dob]']").change(function(){
        var tahunlahir = $("input[name='group-a[0][dob]']").val()
        var tahunsekarang = (new Date()).getFullYear()
        var umur = tahunsekarang - tahunlahir.substr(-4);
        $("input[name='group-a[0][umur]']").val(umur);
    });

    $("#sumber_penerangan").change(function(){
        var a = $( "#sumber_penerangan option:selected" ).text();
        if (a == 'Listrik PLN') {
            $('#daya').removeClass('hidden');
            $('#id_pln').removeClass('hidden');
            $('#k15').attr('required','true');
            $('#id_pln2').attr('required','true');
        }

        if (a == 'Listrik non PLN') {
            $('#daya').addClass('hidden');
            $('#id_pln').addClass('hidden');
            $('#k15').removeAttr('required');
            $('#id_pln2').removeAttr('required');
        }

        if (a == 'Bukan Listrik') {
            $('#daya').addClass('hidden');
            $('#id_pln').addClass('hidden');
            $('#k15').removeAttr('required');
            $('#id_pln2').removeAttr('required');
        }
    });

    $("#lahan").change(function(){
        var a = $( "#lahan option:selected" ).text();
        if (a == 'Ya') {
            $('#luas2').attr('required','true');
        }

        if (a == 'Tidak') {
            $('#luas2').removeAttr('required');
        }
    });

    $("#bahan_bakar").change(function(){
        var a = $( "#bahan_bakar option:selected" ).text();
        if (a == 'Gas') {
            $('#jenis_gas').removeClass('hidden');
            $('#k16').attr('required','true');
        }

        if (a == 'Listrik') {
            $('#jenis_gas').addClass('hidden');
            $('#k16').removeAttr('required');
        }

        if (a == 'Minyak Tanah') {
            $('#jenis_gas').addClass('hidden');
            $('#k16').removeAttr('required');
        }

        if (a == 'Kayu / Arang') {
            $('#jenis_gas').addClass('hidden');
            $('#k16').removeAttr('required');
        }

        if (a == 'Tidak punya') {
            $('#jenis_gas').addClass('hidden');
            $('#k16').removeAttr('required');
        }
    });

    $("#status_data").change(function(){
        var a = $( "#status_data option:selected" ).text();
        if (a == 'Usulan Baru') {
            $('#alasan_perubahan').addClass('hidden');
            $('#alasan_perubahan2').removeAttr('required');
        }

        if (a == 'Perubahan Data') {
            $('#alasan_perubahan').removeClass('hidden');
            $('#alasan_perubahan2').attr('required','true');
        }
    });

    $("#provinsi").change(function(){
        $.ajaxSetup({
            headers: {
                 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
        });

        var provinsi = $('#provinsi').val()
        $.ajax({
            url: app_url + '/daerah/kabupaten',
            type: 'post',
            data: {id_prov:provinsi},
            dataType: 'json',
            success:function(response){
                var len = response.length;

                $("#kabupaten").empty();
                $("#kabupaten").append("<option value=''>select</option>");
                for( var i = 0; i<len; i++){
                    var id_kab  = response[i]['id_kab'];
                    var id_prov = response[i]['id_prov'];
                    var nama    = response[i]['nama'];

                    $("#kabupaten").append("<option value='"+id_kab+"'>"+nama+"</option>");

                }
            }
        });
    });

    $("#kabupaten").change(function(){
        $.ajaxSetup({
            headers: {
                 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
        });

        // var kabupaten = $('#kabupaten').val()
        var kabupaten = 32;
        $.ajax({
            url: app_url + '/daerah/kecamatan',
            type: 'post',
            data: {id_kab:kabupaten},
            dataType: 'json',
            success:function(response){
                // console.log(response);

                var len = response.length;

                $("#kecamatan").empty();
                $("#kecamatan").append("<option value=''>select</option>");
                for( var i = 0; i<len; i++){
                    var id_kab  = response[i]['id_kab'];
                    var id_kec = response[i]['id_kec'];
                    var nama    = response[i]['nama'];

                    $("#kecamatan").append("<option value='"+id_kec+"'>"+nama+"</option>");

                }
            }
        });

    });

    $("#kecamatan").change(function(){
        $.ajaxSetup({
            headers: {
                 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
        });

        var kecamatan = $('#kecamatan').val()
        $.ajax({
            url: app_url + '/daerah/kelurahan',
            type: 'post',
            data: {id_kec:kecamatan},
            dataType: 'json',
            success:function(response){
                // console.log(response);

                var len = response.length;

                $("#kelurahan").empty();
                $("#kelurahan").append("<option value=''>select</option>");
                for( var i = 0; i<len; i++){
                    var id_kel  = response[i]['id_kel'];
                    var id_kec  = response[i]['id_kec'];
                    var nama    = response[i]['nama'];

                    $("#kelurahan").append("<option value='"+id_kel+"'>"+nama+"</option>");

                }
            }
        });

    });
} );
