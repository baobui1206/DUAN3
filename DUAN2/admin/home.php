 <body>
   <!-- main -->
   <main class="main">
     <div class="container-fluid">
       <div class="admin">
         <?php
          include "boxleft.php"
          ?>
         <!--  -->
         <div class="admin__right">
           <h1 class="main-title">Trang quản lý dành cho Admin</h1>
         </div>
       </div>
     </div>
   </main>

   <!-- script -->
   <script src="../view/asset/js/main.js"></script>
   <script>
     app.star = function() {
       // this.tabAdmin();
       this.openCategory();
       this.renderTextInp();
       this.search();
     };
     app.star();
   </script>
 </body>

</html>