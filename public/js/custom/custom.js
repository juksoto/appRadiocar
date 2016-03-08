function showAlertFloating() {
    console.log('llamado')
    $(".alert-floating").show();
    $(".alert-floating").delay(1500).hide(500);
}

$('.btn-active').click(function () {
    var row = $(this).parents('tr');
    var id = row.data('id');
    var form = $('#form-active');
    var url = form.attr('action').replace(':VALUE_ID', id);
    var data = form.serialize();

    $.post(url, data, function (result) {
        $(".alert-floating p ").html(result.message);
        $(".alert-floating p").addClass(result.class);
        $(".alert-floating").show();
        $(".alert-floating").delay(1500).hide(600);
        row.fadeOut();
    }).fail(function () {
        $(".alert-floating p ").html("Ha ocurrido un error");
        $(".alert-floating p").addClass("danger");
        $(".alert-floating").show();
        $(".alert-floating").delay(1500).hide(600);
        row.show();
    });
    
});