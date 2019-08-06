//ajax change categoty auto select type
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

//doan script nay viet de lay province
$(document).ready(function() {
    let select = $("select[name=province_list]");
    let input = $("input[name=province]");
    select.change(function () {
        let value = select.val();
        input.val(value);
    })
});

function disabledProvince() {
    $("#province_saved option").each(function () {
        let val = $(this).val();
        $("select[name=province_list] option").each(function () {
            if ($(this).attr('id') == val) {
                $(this).prop('disabled', true);
            }
        });
    })
}
disabledProvince();
//doan script nay viet de lay province

function getProvince(elm) {
    let id = $(elm).val();
    let url = $(elm).data('uri');
    let dataFor = $(elm).data('for');
    let formSetData = $("select[name="+dataFor+"]");
    let optionNull = '<option>-----------</option>';
    if (dataFor === 'district') {
        $("select[name=wards]").html(optionNull);
    }
    $.ajax({
        url : url,
        type : 'get',
        data : {code : id},
        dataType: 'json',
        success: function (res) {
            let html = optionNull;
            if (Number(res.result) === 1) {
                res.detail.forEach(function (item) {
                    html += `<option value="${item.code}">${item.name}</option>`;
                });
            }
            formSetData.html(html);
        }
    });
}