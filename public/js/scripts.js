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




