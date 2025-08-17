$('.filter__list input[type="checkbox"]').on('change', function(){
   $('.filter__list input[type="checkbox"]').not(this).prop('checked', false);
   let min = $(this).data('min');
   let max = $(this).data('max');
   $('.product').each( function () { 
    let price = $(this).data('price');
    if((min == undefined || price >= min) && (max == undefined || price <= max)){
        $(this).show();
    }else{
        $(this).hide();
    }
   });
   let $visibleProducts = $('.product:visible');// để hiện thị các sản phẩm hiển thị ở bộ lọc
   $visibleProducts.sort(function (a, b) {
     return $(b).data('price') - $(a).data('price'); // sắp xếp theo giá giảm dần
   });
 
   $('.all-product').append($visibleProducts); 
})
