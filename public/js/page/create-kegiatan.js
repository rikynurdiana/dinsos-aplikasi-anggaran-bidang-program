$(document).ready(function() {
    $('.money').mask("#,##0", {reverse: true});
    $("#nama_program").change(function(){
        var kode_rekening_program = $("#kode_rekening_program").val( $( "#nama_program option:selected" ).data('kode') );
        var bidang = $("#bidang").val( $( "#nama_program option:selected" ).data('bidang') );
    });

});
