function changeTypeByCat(elm) {
    let id = $(elm).val();
    let url = $(elm).data('uri');
    if (id == 0) {
        $("select[name=type] option").each(function () {
            $(this).prop("disabled", false);
        });
    } else {
        $.ajax({
            url : url,
            type : 'get',
            data : {id : id},
            dataType : 'json',
            success : function (res) {
                if (res.result === 1) {
                    $("select[name=type] option").each(function () {
                        $(this).prop("disabled", true);
                        if ($(this).val() == res.info.type) {
                            $(this).prop("disabled", false);
                            $(this).prop("selected", true);
                        }
                    });
                }
            }
        });
    }

}