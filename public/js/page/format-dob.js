$(document).ready(function() {
    $("input[name='group-a[1][dob]']").change(function(){
        var tahunlahir = $("input[name='group-a[1][dob]']").val();
        var tahunsekarang = (new Date()).getFullYear();
        var umur = tahunsekarang - tahunlahir.substr(-4);
        $("input[name='group-a[1][umur]']").val(umur);
    });

    $("input[name='group-a[2][dob]']").change(function(){
        var tahunlahir = $("input[name='group-a[2][dob]']").val();
        var tahunsekarang = (new Date()).getFullYear();
        var umur = tahunsekarang - tahunlahir.substr(-4);
        $("input[name='group-a[2][umur]']").val(umur);
    });

    $("input[name='group-a[3][dob]']").change(function(){
        var tahunlahir = $("input[name='group-a[3][dob]']").val();
        var tahunsekarang = (new Date()).getFullYear();
        var umur = tahunsekarang - tahunlahir.substr(-4);
        $("input[name='group-a[3][umur]']").val(umur);
    });

    $("input[name='group-a[4][dob]']").change(function(){
        var tahunlahir = $("input[name='group-a[4][dob]']").val();
        var tahunsekarang = (new Date()).getFullYear();
        var umur = tahunsekarang - tahunlahir.substr(-4);
        $("input[name='group-a[4][umur]']").val(umur);
    });

    $("input[name='group-a[5][dob]']").change(function(){
        var tahunlahir = $("input[name='group-a[5][dob]']").val();
        var tahunsekarang = (new Date()).getFullYear();
        var umur = tahunsekarang - tahunlahir.substr(-4);
        $("input[name='group-a[5][umur]']").val(umur);
    });

    $("input[name='group-a[6][dob]']").change(function(){
        var tahunlahir = $("input[name='group-a[6][dob]']").val();
        var tahunsekarang = (new Date()).getFullYear();
        var umur = tahunsekarang - tahunlahir.substr(-4);
        $("input[name='group-a[6][umur]']").val(umur);
    });

    $("input[name='group-a[7][dob]']").change(function(){
        var tahunlahir = $("input[name='group-a[7][dob]']").val();
        var tahunsekarang = (new Date()).getFullYear();
        var umur = tahunsekarang - tahunlahir.substr(-4);
        $("input[name='group-a[7][umur]']").val(umur);
    });

    $("input[name='group-a[8][dob]']").change(function(){
        var tahunlahir = $("input[name='group-a[8][dob]']").val();
        var tahunsekarang = (new Date()).getFullYear();
        var umur = tahunsekarang - tahunlahir.substr(-4);
        $("input[name='group-a[8][umur]']").val(umur);
    });

    $("input[name='group-a[9][dob]']").change(function(){
        var tahunlahir = $("input[name='group-a[9][dob]']").val();
        var tahunsekarang = (new Date()).getFullYear();
        var umur = tahunsekarang - tahunlahir.substr(-4);
        $("input[name='group-a[9][umur]']").val(umur);
    });

    $("input[name='group-a[10][dob]']").change(function(){
        var tahunlahir = $("input[name='group-a[10][dob]']").val();
        var tahunsekarang = (new Date()).getFullYear();
        var umur = tahunsekarang - tahunlahir.substr(-4);
        $("input[name='group-a[10][umur]']").val(umur);
    });
});
