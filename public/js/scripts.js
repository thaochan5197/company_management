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
    });
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
//end doan script nay viet de lay province

/**
 * get province when select
 * @param elm
 */
function getProvince(elm) {
    let id = $(elm).val();
    let url = $(elm).data('uri');
    let dataFor = $(elm).data('for');
    let formSetData = $("select[name=" + dataFor + "]");
    let optionNull = '<option value="">-----------</option>';
    if (dataFor === 'district') {
        $("select[name=wards]").html(optionNull);
    }
    $.ajax({
        url: url,
        type: 'get',
        data: {code: id},
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
function ChangeToSlug()
{
    var title, slug;

    //Lấy text từ thẻ input title
    title = document.getElementById("title").value;

    //Đổi chữ hoa thành chữ thường
    slug = title.toLowerCase();

    //Đổi ký tự có dấu thành không dấu
    slug = slug.replace(/á|à|ả|ạ|ã|ă|ắ|ằ|ẳ|ẵ|ặ|â|ấ|ầ|ẩ|ẫ|ậ/gi, 'a');
    slug = slug.replace(/é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ/gi, 'e');
    slug = slug.replace(/i|í|ì|ỉ|ĩ|ị/gi, 'i');
    slug = slug.replace(/ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ/gi, 'o');
    slug = slug.replace(/ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự/gi, 'u');
    slug = slug.replace(/ý|ỳ|ỷ|ỹ|ỵ/gi, 'y');
    slug = slug.replace(/đ/gi, 'd');
    //Xóa các ký tự đặt biệt
    slug = slug.replace(/\`|\~|\!|\@|\#|\||\$|\%|\^|\&|\*|\(|\)|\+|\=|\,|\.|\/|\?|\>|\<|\'|\"|\:|\;|_/gi, '');
    //Đổi khoảng trắng thành ký tự gạch ngang
    slug = slug.replace(/ /gi, "-");
    //Đổi nhiều ký tự gạch ngang liên tiếp thành 1 ký tự gạch ngang
    //Phòng trường hợp người nhập vào quá nhiều ký tự trắng
    slug = slug.replace(/\-\-\-\-\-/gi, '-');
    slug = slug.replace(/\-\-\-\-/gi, '-');
    slug = slug.replace(/\-\-\-/gi, '-');
    slug = slug.replace(/\-\-/gi, '-');
    //Xóa các ký tự gạch ngang ở đầu và cuối
    slug = '@' + slug + '@';
    slug = slug.replace(/\@\-|\-\@|\@/gi, '');
    //In slug ra textbox có id “slug”
    document.getElementById('slug').value = slug;
}

function remove_position(input) {

    input.parentNode.parentNode.remove();
}

var i=1;
function add_position(elm) {
    let url = $(elm).data('url');
    let select = '<select required="true" class="form-control" id="manager_id" name="manager_id[]"><option selected="selected" value="">Chọn chức vụ quản lý trực tiếp</option>';
    $.ajax({
        url: url,
        method:"GET",
        dataType : 'json',
        success : function(res){
            $.each(res, function(index, value){
                select += '<option value='+index+'>'+value+'</option>'
            });
            i++;
            $('#options_field').append('<tr id="row'+i+'"><th>'+i+'</th><td><input name="name[]" placeholder="Nhập tên chức vụ" type="text" class="form-control"></td>\n' +
            '<td>'+ select +'</select></td>\n' +
            '<td><button type="button" onclick="remove_position(this)" name="remove" class="btn btn-danger btn_remove_options">-</button></td></tr>');
        }

});
}

$('select').on('change', function (e) {
    var optionSelected = $("option:selected", this);
    var valueSelected = this.value;

});

let suitableManager = '';
let position = '';
function getPosition(e) {
    var id = e.value;
    let url = $(e).data('url');
    suitableManager = '';
    $.ajax({
        url: url,
        method:"GET",
        data : {id : id},
        dataType : 'json',
        success : function(res) {
            suitableManager = res;

        }
    });
}

function getAgency(e) {
    var id = e.value;
    let url = $(e).data('url');

    alert(suitableManager);
    $.ajax({
        url: url,
        method:"GET",
        data : {id : id, manager : suitableManager},
        dataType : 'json',
        success : function(res) {

            var select = '<option value="0">Cấp cao nhất</option>';

            $.each(res, function(index, value){

                select += '<option value='+value['id']+'>'+value['name']+'</option>'
            });

            $("#manager_id").html(select);
        }
    });
}




