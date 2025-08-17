// $(document).ready(function () {

//     $('#cart').on('click','.tang', function (e) {

//         e.preventDefault();
//         var sl = $(this).parent().find('.soluong').val();
//         var slmoi = parseInt(sl) +1;
//         $(this).parent().find('.soluong').val(slmoi);
//         var index = $(this).attr('data-id');
//         $.post("/DUAN2/view/capnhatsoluong.php",{
//             index: index,
//             sl: slmoi
//         },
//             function(data, texStatus, jqXHR){
//                 $("#cart").html(data);
//             }
//     );
//     });
//     $('#cart').on('click','.giam', function (e) {

//         e.preventDefault();
//         var sl = $(this).parent().find('.soluong').val();
//         var slmoi = parseInt(sl) -1;
//         $(this).parent().find('.soluong').val(slmoi);
//         var index = $(this).attr('data-id');
//         $.post("/DUAN2/view/capnhatsoluong.php",{
//             index: index,
//             sl: slmoi
//         },
//             function(data, texStatus, jqXHR){
//                 $("#cart").html(data);
//             }
//     );
//     });
// });
function applyVoucher() {
  var tamtinh = $("#tamtinh").html();
  var code = $("#vouchercode").val();

  $.post(
    "/DUAN2/view/vouchercode.php",
    {
      code: code,
      tamtinh: tamtinh,
    },
    function (data) {
      $("#tongdonhang").html(data);
    }
  );
}
$(document).ready(function () {
  $("#cart").on("click", ".tang", function (e) {
    e.preventDefault();
    var $input = $(this).siblings(".soluong");
    var sl = parseInt($input.val()) || 1;
    var slmoi = sl + 1;
    $input.val(slmoi);

    var index = $(this).attr("data-id");
    $.post(
      "/DUAN3//DUAN2/view/capnhatsoluong.php",
      {
        index: index,
        sl: slmoi,
      },
      function (data) {
        $("#cart").html(data);
      }
    );
  });

  $("#cart").on("click", ".giam", function (e) {
    e.preventDefault();
    var $input = $(this).siblings(".soluong");
    var sl = parseInt($input.val()) || 1;
    var slmoi = sl > 1 ? sl - 1 : 1; // Không cho nhỏ hơn 1
    $input.val(slmoi);

    var index = $(this).attr("data-id");
    $.post(
      "/DUAN3/DUAN2/view/capnhatsoluong.php",
      {
        index: index,
        sl: slmoi,
      },
      function (data) {
        $("#cart").html(data);
      }
    );
  });
  $("#vouchercode").change(function (e) {
    e.preventDefault();
    var tamtinh = $("#tamtinh").html();
    var code = $(this).val();
    // alert(code);
    $.post(
      "/DUAN3//DUAN2/view/vouchercode.php",
      {
        code: code,
        tamtinh: tamtinh,
      },
      function (data) {
        $("#tongdonhang").html(data);
      }
    );
  });
  // $('#applyVoucher').click(function (e) {
  //     e.preventDefault();
  //     applyVoucher();
  // });
});
