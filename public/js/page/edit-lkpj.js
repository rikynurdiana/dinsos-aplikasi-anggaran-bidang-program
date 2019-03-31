$(document).ready(function() {
    $('.money').mask("#,##0", {reverse: true});

    function addCommas(nStr)
    {
    	nStr += '';
    	x = nStr.split('.');
    	x1 = x[0];
    	x2 = x.length > 1 ? '.' + x[1] : '';
    	var rgx = /(\d+)(\d{3})/;
    	while (rgx.test(x1)) {
    		x1 = x1.replace(rgx, '$1' + ',' + '$2');
    	}
    	return x1 + x2;
    }

    var kode_rekening_program = $( "#nama_program option:selected" ).data('kode');
    var set_kode_rekening_program = $("#kode_rekening_program").val( $( "#nama_program option:selected" ).data('kode') );
    var bidang = $("#bidang").val( $( "#nama_program option:selected" ).data('bidang') );

    $.ajaxSetup({
        headers: {
             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
    });

    $.ajax({
        url: app_url + '/lkpj/get-kegiatan',
        type: 'post',
        data: {kode_program:kode_rekening_program},
        dataType: 'json',
        success:function(response){
            var len = response.length;

            for( var i = 0; i<len; i++){
                var id = response[i]['id'];
                // var bidang = response[i]['bidang'];
                var kode_rekening_kegiatan = response[i]['kode_rekening_kegiatan'];
                var nama_kegiatan = response[i]['nama_kegiatan'];

                $("#nama_kegiatan").append("<option data-bidang='"+bidang+"' data-kode='"+kode_rekening_kegiatan+"' value='"+nama_kegiatan+"'>"+nama_kegiatan+"</option>");
            }
        }
    });

    $("#nama_kegiatan").change(function(){
        $("#kode_rekening_kegiatan").val( $( "#nama_kegiatan option:selected" ).data('kode') );
        $("#anggaran").val( addCommas($( "#nama_kegiatan option:selected" ).data('anggaran')) );
    });

    $("#anggaran").change(function(){
        var a = $('#anggaran').val();
        var anggaran = a.replace(/,/g, "");

        var r = $('#realisasi').val();
        var realisasi = r.replace(/,/g, "");

        var rumus = ((realisasi / anggaran) * 100).toFixed(2) ;
        var a = rumus.toString() + ' %';
        var persentase = $('#persentase').val( a );
    });

    $("#realisasi").change(function(){
        var a = $('#anggaran').val();
        var anggaran = a.replace(/,/g, "");

        var r = $('#realisasi').val();
        var realisasi = r.replace(/,/g, "");

        var rumus = ((realisasi / anggaran) * 100).toFixed(2) ;
        var a = rumus.toString() + ' %';
        var persentase = $('#persentase').val( a );
    });
});


$("#nama_program").change(function(){
    var kode_rekening_program = $( "#nama_program option:selected" ).data('kode');
    var set_kode_rekening_program = $("#kode_rekening_program").val( $( "#nama_program option:selected" ).data('kode') );
    var bidang = $("#bidang").val( $( "#nama_program option:selected" ).data('bidang') );

    $.ajaxSetup({
        headers: {
             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
    });

    $.ajax({
        url: app_url + '/lkpj/get-kegiatan',
        type: 'post',
        data: {kode_program:kode_rekening_program},
        dataType: 'json',
        success:function(response){
            var len = response.length;

            $("#nama_kegiatan").empty();
            $("#nama_kegiatan").append("<option value=''>select</option>");

            for( var i = 0; i<len; i++){
                var id = response[i]['id'];
                // var bidang = response[i]['bidang'];
                var kode_rekening_kegiatan = response[i]['kode_rekening_kegiatan'];
                var nama_kegiatan = response[i]['nama_kegiatan'];
                var anggaran = response[i]['anggaran'];

                $("#nama_kegiatan").append("<option data-anggaran='"+anggaran+"' data-bidang='"+bidang+"' data-kode='"+kode_rekening_kegiatan+"' value='"+nama_kegiatan+"'>"+nama_kegiatan+"</option>");
            }
        }
    });
});
