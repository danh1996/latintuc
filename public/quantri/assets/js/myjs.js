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