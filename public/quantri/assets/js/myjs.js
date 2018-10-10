$('div.alert').delay(3000).slideUp();

function xacnhanxoa(message) {
    if (window.confirm(message)){
        return true;
    }
    else return false;
}

$(document).ready(function() {
    $('#danhsachtin').DataTable({

    });
} );

$(document).ready(function() {
    $('#theloai').on('change',function () {
       var idTheLoai=$(this).val();
       $.ajax({
          url:'ajax/layloaitin',
          data:{idTheLoai:idTheLoai},
          method:'post',
          success:function (data) {
              $('#loaitin').html(data);
          }
       });
    });
});


function readURL(input) {

    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
            $('#hinhuser').attr('src', e.target.result).width(120)
                .height(100);;
        }
        reader.readAsDataURL(input.files[0]);
    }
}