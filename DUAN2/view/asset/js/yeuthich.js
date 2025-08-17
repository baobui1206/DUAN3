$(document).ready(function () {
  $(document).on("click", ".yeuthich", function (e) {  
  var id = $(this).next("input").val();//this là nut i yeuthich đang đc click để no ko mac định gtri đàu là phần tử đầu tiên
  var that = this;
  // alert("ID: " + id);
  $.post(
    "/DUAN3/DUAN2/view/yeuthich.php",
    {
      id: id,
    },
    function (data,status) {
      if(status === "success"){
        data = data.trim();
        if(data === "chudangnhap"){
          alert("bạn cần phải đăng nhập thì mới yêu thích đc");
          window.location.href="index.php?act=dangnhap";
        }else if(data === "yeuthich"){
          $(that).addClass('fa-solid');
        }else if(data === "dathich"){
          alert("bạn đã thích sản phẩm này rồi vui lòng thích sản phẩm khác");
        }
      }
    }
  );
  
});
});
