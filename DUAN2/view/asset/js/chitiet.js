$(document).ready(function () {
  $(".tang").click(function (e) {
    e.preventDefault();
    var $input = $(this).siblings(".soluong"); //sibling tuc là ae của nó parent là cha của nó xong dùng find tìm ra so luong
    var sl = parseInt($input.val()) || 1; //kiem tra xem gia tri có phải là NAN undifine de rong thì mặc định là 1
    $input.val(sl + 1);
  });

  $(".giam").click(function (e) {
    e.preventDefault();
    var $input = $(this).siblings(".soluong");
    var sl = parseInt($input.val()) || 1;
    if (sl > 1) {
      $input.val(sl - 1);
    }
  });
  $("#submitBtn").click(function (e) {
    var sl = $(".soluong").val();
    $('input[name="soluong"]').val(sl); // Gán lại giá trị vào input hidden
  });
});

// tăng số lượng popup
$(document).ready(function () {
  $(".tangPopup").click(function (e) {
    e.preventDefault();
    var $input = $(this).siblings(".soluongInpPopup"); //sibling tuc là ae của nó parent là cha của nó xong dùng find tìm ra so luong
    var sl = parseInt($input.val()) || 1; //kiem tra xem gia tri có phải là NAN undifine de rong thì mặc định là 1
    $input.val(sl + 1);
  });

  $(".giamPopup").click(function (e) {
    e.preventDefault();
    var $input = $(this).siblings(".soluongInpPopup");
    var sl = parseInt($input.val()) || 1;
    if (sl > 1) {
      $input.val(sl - 1);
    }
  });
  $("#submitBtnPopup").click(function (e) {
    var sl = $(".soluongInpPopup").val();
    $('input[name="soluongPopup"]').val(sl);
  });
});
