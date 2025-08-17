<!-- modal  -->
<div class="modal"></div>
 <div class="modal-menuMobile"></div> 
 
 <!-- breadcrumb -->
 <div class="breadcrumb-bg">
      <div class="container">
        <ul class="breadcrumb">
          <div class="breadcrumb-block">
            <li><a href="index.php" class="changeurl">Trang chủ</a></li>
          </div>
          <div class="breadcrumb-block">
            <span class="spaceLink"
              ><i class="fa-solid fa-angles-right"></i
            ></span>
            <li><a href="#!" class="changeurl">Giới thiệu</a></li>
          </div>
        </ul>
      </div>
    </div>

    <!-- main  -->
    <main class="main mrSection">
      <div class="container">
        <div class="contact">
          <div class="contact__left">
            <!--  -->
            <div class="contact-shop">
              <h2 class="groupTitle__title">
                Khuyến mãi hấp dẫn
                <i class="fa-solid fa-clover"></i>
              </h2>
              <ul class="list-content">
                <li class="list-content__items">
                  <div class="content-left">
                    <i class="fa-solid fa-location-dot"></i>
                  </div>
                  <div class="content-right">
                    <span class="content-right__title">Địa chỉ</span>
                    <span class="content-right__content"
                      >Quận 12, quận 12, quận 12, TPHCM</span
                    >
                  </div>
                </li>
                <li class="list-content__items">
                  <div class="content-left">
                    <i class="fa-solid fa-clock"></i>
                  </div>
                  <div class="content-right">
                    <span class="content-right__title">Thời gian làm việc</span>
                    <span class="content-right__content"
                      >8h - 22h <br />
                      Từ thứ 2 đến chủ nhật</span
                    >
                  </div>
                </li>
                <li class="list-content__items">
                  <div class="content-left">
                    <i class="fa-solid fa-phone"></i>
                  </div>
                  <div class="content-right">
                    <span class="content-right__title">Hotline</span>
                    <span class="content-right__content"
                      ><a href="#!" class="hover-link">19006671</a></span
                    >
                  </div>
                </li>

                <li class="list-content__items">
                  <div class="content-left">
                    <i class="fa-solid fa-envelope"></i>
                  </div>
                  <div class="content-right">
                    <span class="content-right__title">Email</span>
                    <span class="content-right__content"
                      ><a href="#!" class="hover-link">support@sapo.vn</a></span
                    >
                  </div>
                </li>
              </ul>
            </div>
            <!--  -->
            <div class="contact-us">
              <!-- .groupTitle-ind -->
              <h2 class="groupTitle__title">
                Khuyến mãi hấp dẫn
                <i class="fa-solid fa-clover"></i>
              </h2>
              <!--  -->
              <div class="groupTitle__content">
                <span
                  >Nếu có thắc mắc gì, có thể gửi yêu cầu cho chúng tôi, và
                  chúng tôi sẽ liên lạc lại với bạn sớm nhất có thể</span
                >
              </div>
              <!--  -->
              <form action="" class="form-contact">
                <div class="form-group__inp">
                  <input type="text" name="priceOld" placeholder="Họ và tên" />
                </div>
                <div class="form-group__inp">
                  <input type="email" name="priceOld" placeholder="Email" />
                </div>
                <div class="form-group__inp">
                  <input type="tel" name="priceOld" placeholder="Điện thoại" />
                </div>
                <div class="form-group__textarea">
                  <textarea name="" id="" placeholder="Nội dung "></textarea>
                </div>
                <button class="form-contact__btn">Gửi thông tin</button>
              </form>
            </div>
          </div>
          <!-- right -->
          <div class="contact__right">
            <iframe
              id="map"
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3918.4545033048266!2d106.62483140989632!3d10.852994236085951!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752bee0b0ef9e5%3A0x5b4da59e47aa97a8!2zQ8O0bmcgVmnDqm4gUGjhuqduIE3hu4FtIFF1YW5nIFRydW5n!5e0!3m2!1svi!2s!4v1742961109288!5m2!1svi!2s"
              width="600"
              height="450"
              style="border: 0"
              allowfullscreen=""
              loading="lazy"
              referrerpolicy="no-referrer-when-downgrade"
            ></iframe>
          </div>
        </div>
      </div>
    </main>
    <script src="view/asset/js/main.js"></script>
    <script>
      app.star = function () {
        this.slideMenuHeaderLeft();
        this.slideMenuHeaderRight();
        this.openMenuMobile();
        this.openSubmenu();
        this.openCategory();
        this.renderTextInp();
        this.search();
      };
      app.star();
    </script>