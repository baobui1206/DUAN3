// let content;

// app
const app = {
  // api
  api: "https://jsonplaceholder.typicode.com/posts",
  //

  // khối biến cho render text ra input
  contentInp: ["Bạn muốn tìm gì?", "Đồ khô", "Nước ép", "Rau củ", "Salad"],
  inpSearch: document.querySelector("#header-form__inp"),
  //

  // khối biến cho slider
  intervalSlider: null,
  listImg: document.querySelectorAll(".slider__img"),
  slide: document.querySelector(".slider__listImg"),
  btnBannerRight: document.querySelector(".slider-control__btnRight"),
  btnBannerLeft: document.querySelector(".slider-control__btnLeft"),
  // thời gian slider chạy
  timeRun: 5000,
  //

  // hiện danh mục
  btnCategory: document.querySelector(".category-btn"),
  category: document.querySelector(".category"),
  //

  // hiện form quên mật khẩu
  btnForgetPass: document.querySelector(".forget-pass__content"),
  forgetPass: document.querySelector(".forget-pass"),
  //

  // xử lý hiện tab flash sale
  tabSale1: document.querySelector('[data-targetsale="tabSale1"]'),
  tabSale2: document.querySelector('[data-targetsale="tabSale2"]'),
  contentTabSale: document.querySelectorAll("[data-contentSale]"),
  //

  // xử lý tab mô tả sản phẩm
  tabDesc: document.querySelectorAll("[data-target]"),
  blockContent: document.querySelectorAll("[content-data]"),
  contentHeight: document.querySelector(".content-height"),
  checkHeight: document.querySelector("#checkHeight"),
  btnDesc: document.querySelector(".block-desc__btn"),
  overlayDesc: document.querySelector(".content-height__overlay"),
  productDesc: document.querySelector(".product-desc"),
  //

  // modal
  modal: document.querySelector(".modal"),
  //

  // xử lý popup Coupon
  popupCoupon: document.querySelector(".popup-coupon"),
  closePopup: document.querySelector(".close-popupCoupon"),
  btnInfo: document.querySelectorAll(".info-btn"),
  innerCode: document.querySelector(".inner-code"),
  innerTime: document.querySelector(".inner-time"),
  innerContent: document.querySelector(".inner-content"),
  //

  // xử lý popup form comment
  btnOpenFormComment: document.querySelector("#btn-openFormComment"),
  popupEvaluate: document.querySelector(".popup-evaluate"),
  iconClosPopupeValuate: document.querySelector(".close-popupeValuate"),
  //

  // hiện name sản phẩm trên admin trang thống kê
  nameProdutcAdmin: document.querySelectorAll(".handleName"),
  //

  // hiện meu mobile
  btnBar: document.querySelector(".bar-mobile"),
  menuMobile: document.querySelector(".menu-mobile"),
  // show các manu trong menu mobile
  elTabMobile: document.querySelectorAll(".menu-click"),
  //

  // add class vào form nhập mã giảm giá
  inpDiscountCode: document.querySelector(".inp-discountCode"),
  btnDiscountCode: document.querySelector(".btn-discountCode"),
  //

  // xử lý hiện bảng lọc sản phẩm mobile
  btnFilterMobile: document.querySelector(".filter-mobile"),
  allProductFilter: document.querySelector(".allProduct-page__left"),

  // slider trang chi tiết sản phẩm
  listImgBanner: document.querySelectorAll(".preview-image__items"),
  sliderDetail: document.querySelector("#slider-imgDetail"),
  //

  // xử lý trượt menu header
  headerMenu: document.querySelector(".header-menu"),
  listMenu: document.querySelector(".block-menu"),
  btnArrLeftHeader: document.querySelector(".btnarr-left"),
  btnArrRightHeader: document.querySelector(".btnarr-right"),
  //

  // xem nhanh sản phẩm
  popupQuickview: document.querySelector(".product-quickview"),
  // check
  index: 0,
  indexSlider: 0,
  charIndex: 0,
  isDeleting: false,
  flag: false,

  // code
  renderProduct: function (arr, inner) {
    //
    if (!Array.isArray(arr)) return;
    const htmls = arr.map((product) => {
      return `
          <div class="product" data-salesQuantity="20">
                <span class="price-minus flex-center">${product.sale}</span>
                <a href="#!">
                  <div class="product__child">
                    <div class="product__thumbnail">
                      <a href="#!" class="img__thumb">
                        <img
                          src="/asset/images/product/${product.img}"
                          alt=""
                        />
                      </a>
                    </div>
                    <div class="product-info">
                      <h3 class="product__name">
                        <a href="#!">${product.name} </a>
                      </h3>
                      <div class="product-price">
                        <span class="product-price__new">${product.priceNew}</span>
                        <span class="product-price__old">${product.priceOld}</span>
                      </div>
                      <div class="product__line displayNone"></div>
                      <span class="product__sold displayNone"
                        >Đã bán 101</span
                      >
                    </div>
                    <!--  -->
                  </div>
                </a>
              </div>
      `;
    });
    inner.innerHTML = htmls.join("");
  },

  //
  fetchData: async function (callback) {
    try {
      const response = await axios.get(this.api);
      if (!response.status === 200) {
        throw new Error("Lỗi kết nối:" + response.status);
      }
      //
      const data = response.data;
      //
      if (!Array.isArray(data)) {
        throw new Error("Dữ liệu không hợp lệ");
      }
      if (typeof callback === "function ") {
        callback(data);
      }
    } catch (err) {
      console.log(err.message);
      return null;
    }
  },

  //
  renderData: async function () {
    const data = await this.fetchData(this.api);
    if (!data) return;
    console.log(data);
    // this.renderProduct(data, root)
  },

  //
  renderTextInp: function () {
    const intervalInner = setInterval(() => {
      const content = this.contentInp[this.index];
      if (this.isDeleting) {
        this.inpSearch.placeholder = content.substring(0, this.charIndex--);
      } else {
        this.inpSearch.placeholder = content.substring(0, this.charIndex++);
      }
      if (this.charIndex > content.length) {
        this.isDeleting = true;
        clearInterval(intervalInner);
        setTimeout(() => this.renderTextInp(), 1000);
      } else if (this.charIndex < 0) {
        this.isDeleting = false;
        clearInterval(intervalInner);
        this.index = (this.index + 1) % this.contentInp.length;
        setTimeout(() => this.renderTextInp(), 200);
      }
    }, 30);
  },

  // khối slider ==========>cần thì chạy
  // pre
  preSlider: function () {
    this.btnBannerLeft.onclick = () => {
      let widthImg = this.listImg[0].offsetWidth;
      this.indexSlider =
        (this.indexSlider - 1 + this.listImg.length) % this.listImg.length;
      this.clearautoRun();
      this.slide.style.transform = `translate3d(${
        -widthImg * this.indexSlider
      }px,0,0)`;
    };
  },

  // next slider
  nextSlider: function () {
    this.btnBannerRight.onclick = () => {
      this.clearautoRun();
      this.autoRun();
    };
  },

  //
  autoRun: function () {
    let widthImg = this.listImg[0].offsetWidth;
    this.indexSlider = (this.indexSlider + 1) % this.listImg.length;
    this.slide.style.transform = `translate3d(${
      -widthImg * this.indexSlider
    }px,0,0)`;
  },

  // dừng slide
  clearautoRun: function () {
    clearInterval(this.intervalSlider);
    this.intervalSlider = setInterval(() => this.autoRun(), this.timeRun);
  },

  //block value inpt Search==========>full trang
  search: function () {
    const btnSearch = document.querySelector("#btnSearch");
    btnSearch.onclick = async (e) => {
      e.preventDefault();
      if (inpSearch.value.trim() === "") return;
      const value = inpSearch.value.trim().toLowerCase().replace(/\s+/g, "");
      // kết nối api
      const data = await this.fetchData(this.api);
      if (!data) return;
      console.log(value);
      console.log(data);
    };
  },

  // hiện danh mục các trang===cần thì add
  openCategory: function () {
    this.btnCategory.onclick = () => {
      this.category.classList.toggle("openCategory");
    };
  },

  // hiện form quên mật khẩu trang loggin=====loggin
  openForgotPass: function () {
    this.btnForgetPass.onclick = () => {
      this.forgetPass.classList.toggle("open-forget__pass");
    };
  },

  // xử lý ẩn hiện mô tả sản phẩm trang chi tiết sản phẩm ====product-detail
  openTab: function () {
    this.tabDesc.forEach((tab) => {
      tab.onclick = () => {
        const dataTab = document.querySelector(`${tab.dataset.target}`);
        this.blockContent.forEach((items) => {
          items.classList.remove("active");
        });
        dataTab.classList.add("active");
        // menu
        this.tabDesc.forEach((tab) => {
          tab.classList.remove("active__tab");
        });
        tab.classList.add("active__tab");
      };
    });
  },

  // set height
  setHeightDesc: function () {
    window.onload = () => {
      const heightDesc = this.checkHeight.offsetHeight;
      console.log(heightDesc);
      if (heightDesc <= 700) {
        this.contentHeight.style.height = "auto";
        this.overlayDesc.style.display = "none";
        this.btnDesc.style.display = "none";
      } else {
        this.contentHeight.style.height = "700px";
      }
    };
  },
  // hiện
  openDesc: function () {
    this.btnDesc.onclick = (e) => {
      e.preventDefault();
      this.productDesc.scrollIntoView({ behavior: "smooth", block: "start" });
      if (!this.flag) {
        this.contentHeight.style.height = "auto";
        this.overlayDesc.classList.add("activeDisnone");
        this.flag = true;
      } else {
        this.contentHeight.style.height = "700px";
        this.overlayDesc.classList.remove("activeDisnone");
        this.flag = false;
      }
    };
  },

  // xử lý click lấy name sản phẩm trang admin thống kê=======>admin thống kê
  openValueNameAdmin: function () {
    this.nameProdutcAdmin.forEach((items) => {
      items.onclick = (e) => {
        const value = e.target.dataset.name;
        console.log(value);
        const el = e.target.closest("td").querySelector(".show-nameProduct");
        if (el.textContent.trim() === "" && value.trim() !== "") {
          el.innerText = value;
          el.classList.toggle("activeName");
        } else {
          el.classList.toggle("activeName");
        }
      };
    });
  },

  // index tabSale
  openContentSale: function () {
    // tab2
    this.tabSale2.onclick = () => {
      const el = document.getElementById(`${this.tabSale2.dataset.targetsale}`);
      this.contentTabSale.forEach((items) => {
        items.classList.add("none-contentTabSale");
      });
      el.classList.remove("none-contentTabSale");
    };
    // tab 1
    this.tabSale1.onclick = () => {
      const el = document.getElementById(`${this.tabSale1.dataset.targetsale}`);
      this.contentTabSale.forEach((items) => {
        items.classList.add("none-contentTabSale");
      });
      el.classList.remove("none-contentTabSale");
    };
  },

  // trang chi tiết sản phẩm
  openPopup: function () {
    this.btnInfo.forEach((items) => {
      items.onclick = () => {
        // open popup
        this.modal.classList.add("openModalFull");
        this.popupCoupon.classList.add("open-popup");

        // inner
        this.innerCode.innerText = items.dataset.code;
        this.innerTime.innerText = items.dataset.time;
        this.innerContent.innerText = items.dataset.content;
      };
    });

    // close đóng
    this.closePopup.onclick = () => {
      this.modal.classList.remove("openModalFull");
      this.popupCoupon.classList.remove("open-popup");
    };

    //modal đóng
    this.modal.addEventListener("click", () => {
      // đóng popup mã giảm giá
      if (this.popupCoupon.classList.contains("open-popup")) {
        // đóng
        this.modal.classList.remove("openModalFull");
        this.popupCoupon.classList.remove("open-popup");
      }
    });
  },

  // run slider categor trang-> index
  swiperSliderCategory: function () {
    this.swiperSliderCategory2(
      ".swiper-categoryProduct1",
      ".categoryProduct-col1 .btn-control__prev",
      ".categoryProduct-col1 .btn-control__next"
    );
    this.swiperSliderCategory2(
      ".swiper-categoryProduct2",
      ".categoryProduct-col2 .btn-control__prev",
      ".categoryProduct-col2 .btn-control__next"
    );
    this.swiperSliderCategory2(
      ".swiper-categoryProduct3",
      ".categoryProduct-col3 .btn-control__prev",
      ".categoryProduct-col3 .btn-control__next"
    );
  },
  //
  slideNews: function () {
    this.swiperSliderCategory2(
      ".block-article",
      ".latest-new .btn-control__prev",
      ".latest-new .btn-control__next"
    );
  },

  swiperSliderCategory2: function (container, prev, next) {
    const swiper = new Swiper(container, {
      loop: false,
      autoplay: {
        delay: 2000,
      },
      speed: 1000,
      spaceBetween: 20,
      slidesPerView: 1,
      breakpoints: {
        1023: {
          slidesPerView: 1,
        },
        767: {
          slidesPerView: 2,
        },
        0: {
          slidesPerView: 1,
        },
      },
      navigation: {
        nextEl: next,
        prevEl: prev,
      },
      on: {
        init: function () {
          if (this.slides.length > this.params.slidesPerView) {
            document.querySelector(next).classList.add("active-btn");
          }
        },

        //change
        slideChange: function () {
          if (this.isEnd) {
            document.querySelector(prev).classList.add("active-btn");
            document.querySelector(next).classList.remove("active-btn");
          } else {
            document.querySelector(prev).classList.add("active-btn");
            if (
              !document.querySelector(next).classList.contains("active-btn")
            ) {
              document.querySelector(next).classList.add("active-btn");
            }
          }
          // đầu slide
          if (this.isBeginning) {
            document.querySelector(prev).classList.remove("active-btn");
          }
        },
      },
      //
    });
  },

  // slide 3 img
  slideBanner3Img: function () {
    const swiper = new Swiper(".slide-baner3Img", {
      loop: false,
      autoplay: {
        delay: 2000,
      },
      speed: 1000,
      spaceBetween: 20,
      slidesPerView: 4,
      breakpoints: {
        1024: {
          slidesPerView: 3,
        },
        576: {
          slidesPerView: 2,
        },
        0: {
          slidesPerView: 1.2,
        },
      },
    });
  },

  //=========== hiện menu mobile full trang
  openMenuMobile: function () {
    this.btnBar.onclick = () => {
      this.modal.classList.add("openModal");
      this.menuMobile.classList.add("active-menuMobile");
    };

    // đóng
    this.modal.addEventListener("click", () => {
      // đóng menu mobile
      if (this.menuMobile.classList.contains("active-menuMobile")) {
        // đóng
        this.modal.classList.remove("openModal");
        this.menuMobile.classList.remove("active-menuMobile");
      }
    });
  },

  // hiện các danh mục mobile
  openSubmenu: function () {
    this.elTabMobile.forEach((items) => {
      items.onclick = (e) => {
        const elSubmenu = e.target.closest(".menu").querySelector(".sub-menu");
        const elIcon = e.target.closest(".menu").querySelector(".menu-click i");
        const elBlockContent = e.target.closest(".menu__content");
        if (elSubmenu) {
          if (!elIcon.classList.contains("fa-minus")) {
            elIcon.classList.add("rotateIcon");
            //
            setTimeout(() => {
              elIcon.classList.remove("fa-plus");
              elIcon.classList.toggle("fa-minus");
            }, 220);
          } else {
            elIcon.classList.remove("rotateIcon");
            setTimeout(() => {
              elIcon.classList.remove("fa-minus");
              elIcon.classList.toggle("fa-plus");
            }, 220);
          }

          // open submenu
          elBlockContent.classList.toggle("activeContent");
          elSubmenu.classList.toggle("active-subMenu");
        }
        // <!-- fa-solid fa-minus -->
      };
    });
  },

  // xử lý phần add class cho nút của inp nhập mã giảm giá
  eventInpDiscountCode: function () {
    this.inpDiscountCode.addEventListener("input", () => {
      if (this.inpDiscountCode.value.trim() !== "") {
        this.btnDiscountCode.classList.add("active-btnDiscountCode");
      } else {
        this.btnDiscountCode.classList.remove("active-btnDiscountCode");
      }
    });
  },

  // openForm comment trang chỉ tiết sản phẩm
  openFormComment: function () {
    this.btnOpenFormComment.onclick = () => {
      this.modal.classList.add("openModalFull");
      this.popupEvaluate.classList.add("open-popup");
    };

    this.iconClosPopupeValuate.onclick = () => {
      this.modal.classList.remove("openModalFull");
      this.popupEvaluate.classList.remove("open-popup");
    };

    // đóng
    this.modal.addEventListener("click", () => {
      // đóng menu mobile
      if (this.popupEvaluate.classList.contains("open-popup")) {
        // đóng
        this.modal.classList.remove("openModalFull");
        this.popupEvaluate.classList.remove("open-popup");
      }
    });
  },

  // hiện filter mobile trang product
  openFilterMobile: function () {
    this.btnFilterMobile.onclick = () => {
      this.allProductFilter.classList.add("active-filter");
      this.modal.classList.add("openModal");
    };

    // close
    this.modal.addEventListener("click", () => {
      if (this.allProductFilter.classList.contains("active-filter")) {
        this.allProductFilter.classList.remove("active-filter");
        this.modal.classList.remove("openModal");
      }
    });
  },

  // slider trang chi tiết sản phẩm
  sliderDetailProduct: function () {
    this.listImgBanner.forEach((img) => {
      img.onclick = (e) => {
        let srcImg = e.target.querySelector("img");
        if (!srcImg) {
          srcImg = e.target;
        }

        // thay đổi hình ảnh
        this.sliderDetail.classList.add("animation-sliderDetail");
        setTimeout(() => {
          this.sliderDetail.src = srcImg.src;
          // add class img
          this.listImgBanner.forEach((el) => {
            el.classList.remove("active-img");
          });

          // queryclass cha
          let blockFather = e.target.closest(".preview-image__items");
          if (!blockFather) {
            blockFather = e.target;
          }
          blockFather.classList.add("active-img");
          //
        }, 150);
        setTimeout(() => {
          this.sliderDetail.classList.remove("animation-sliderDetail");
        }, 300);
      };
    });
  },

  // xử lý trượt menu header
  slideMenuHeaderRight: function () {
    this.btnArrRightHeader.onclick = () => {
      const scrollEl = this.listMenu.scrollWidth - this.headerMenu.offsetWidth;

      if (scrollEl > 0) {
        this.listMenu.style.transform = `translateX(-${scrollEl}px)`;
        this.btnArrRightHeader.classList.remove("active-ar");
        this.btnArrLeftHeader.classList.add("active-ar");
      }
    };
  },

  // left
  slideMenuHeaderLeft: function () {
    this.btnArrLeftHeader.onclick = () => {
      this.listMenu.style.transform = "translateX(0)";
      this.btnArrLeftHeader.classList.remove("active-ar");
      this.btnArrRightHeader.classList.add("active-ar");
    };
  },

  appliCodeInpCart: function () {
    const btnApplyCode = document.querySelectorAll(".blockCode-bottom__btn");
    btnApplyCode.forEach((el) => {
      el.onclick = (e) => {
        const data = e.target.dataset.codebtn;
        if (data) {
          this.inpDiscountCode.value = data;
          this.btnDiscountCode.classList.add("active-btnDiscountCode");
        }
      };
    });
  },

  // copy code trang chi tiết sản phẩm
  copyCodeDetailProduct: function () {
    const btnCopyCode = document.querySelectorAll(".blockCode-bottom__btn");
    btnCopyCode.forEach((el) => {
      el.onclick = (e) => {
        const data = e.target.dataset.copy;
        if (data) {
          navigator.clipboard.writeText(data).then(() => {
            e.target.innerText = "Đã lưu";
            setTimeout(() => {
              e.target.innerText = "Sao chép";
            }, 1500);
          });
        }
      };
    });
  },

  // open quick view-> xem nhanh
  openQuickView: function () {
    const btnOpenQuickView = document.querySelectorAll(".open-quickview");
    btnOpenQuickView.forEach((el) => {
      el.onclick = () => {
        console.log(el.dataset.images);
        const dataImg = el.dataset.images;
        const dataName = el.dataset.name;
        const datapriceNew = el.dataset.pricenew;
        const datapriceOld = el.dataset.priceold;
        const dataId = el.dataset.id;
        const dataStock = el.dataset.stock;
        const dataPrice = el.dataset.price;

        if (
          dataImg.trim() !== "" &&
          dataName.trim() !== "" &&
          datapriceNew.trim() !== "" &&
          dataId.trim() !== "" &&
          dataStock.trim() !== "" &&
          dataPrice.trim() !== ""
        ) {
          document.querySelector(".quickview-img").src = `upload/${dataImg}`;
          document.querySelector(".quickview-name").innerText = dataName;
          document.querySelector(".quickview-priceNew").innerText =
            datapriceNew;
          document.querySelector(".quickview-priceOld").innerText =
            datapriceOld;
          document.querySelector(".quickview-id").innerText = dataId;
          document.querySelector(
            ".quickview-stock"
          ).innerText = `${dataStock} sản phẩm`;
          //gán value
          document.querySelector(".input-hidden-id").value = dataId;
          document.querySelector(".input_hidden-price").value = dataPrice;
          document.querySelector(".input-hidden-name").value = dataName;
          document.querySelector(".input-hidden-img").value = dataImg;
          // mở
          this.popupQuickview.classList.add("open-popup");
          this.modal.classList.add("openModalFull");
        }
      };
    });

    // đóng
    const btnCloseQuickView = document.querySelector(".close-quickview");
    btnCloseQuickView.onclick = () => {
      this.popupQuickview.classList.remove("open-popup");
      this.modal.classList.remove("openModalFull");
    };

    // đóng bằng modal
    this.modal.addEventListener("click", () => {
      this.popupQuickview.classList.remove("open-popup");
      this.modal.classList.remove("openModalFull");
    });
  },
  // star
  star: function () {
    // chạy hàm
  },
};

// test code
function createSlug(name) {
  return name
    .toLowerCase()
    .normalize("NFD")
    .replace(/[\u0300-\u036f]/g, "") // Bỏ dấu tiếng Việt
    .replace(/\s+/g, "-") // Thay khoảng trắng bằng "-"
    .replace(/[^a-z0-9-]/g, "") // Xóa ký tự đặc biệt
    .replace(/-+/g, "-") // Xóa dấu "-" thừa
    .trim();
}
