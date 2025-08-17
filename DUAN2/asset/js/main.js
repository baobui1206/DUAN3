// khai báo biến
const flashSale = document.querySelector("#product-flashSale");
const inpSearch = document.querySelector("#header-form__inp");
// list cần render input
const contentInp = ["Bạn muốn tìm gì?", "Đồ khô", "Nước ép", "Rau củ"];
//
const listImg = document.querySelectorAll(".slider__img");
const slide = document.querySelector(".slider__listImg");
const btnBannerRight = document.querySelector(".slider-control__btnRight");
const btnBannerLeft = document.querySelector(".slider-control__btnLeft");
const btnSearch = document.querySelector("#btnSearch");
const click = document.querySelector(".category-btn");
const category = document.querySelector(".category");
const body = document.body;
const contentClick = document.querySelector(".forget-pass__content");
const forgetPass = document.querySelector(".forget-pass");

// tab sales=> index
const tabSale2 = document.querySelector('[data-targetsale="tabSale2"]');
const tabSale1 = document.querySelector('[data-targetsale="tabSale1"]');
const contentTabSale = document.querySelectorAll("[data-contentSale]");

//các biến ẩn hiện mô tả trang=>chi tiết sả phẩm
const tabDesc = document.querySelectorAll("[data-target]"),
  blockContent = document.querySelectorAll("[content-data]");
const content1 = document.querySelector(".content-height");
const checkHeight = document.querySelector("#checkHeight");
const btnDesc = document.querySelector(".block-desc__btn");
const overlayDesc = document.querySelector(".content-height__overlay");
const blockDesc = document.querySelector(".block-desc__desc");
const productDesc = document.querySelector(".product-desc");
const closePopup = document.querySelector(".close-popupCoupon");
const btnInfo = document.querySelectorAll(".info-btn");
const modal = document.querySelector(".modal");
const popupCoupon = document.querySelector(".popup-coupon");
// inner
const innerCode = document.querySelector(".inner-code");
const innerTime = document.querySelector(".inner-time");
const innerContent = document.querySelector(".inner-content");

// đóng

// phần của admin
const listCategory = document.querySelectorAll(".admin-category__items");
const dataContent = document.querySelectorAll("[data-blockForm]");
// console.log(dataContent);
const nameProdutcAdmin = document.querySelectorAll(".hoverJs");
const showNameProduct = document.querySelectorAll(".show-nameProduct");

// time silder
let intervalSlider;
const timeRun = 5000;

// api
const api = "https://jsonplaceholder.typicode.com/posts";
//
let content;

// app
const app = {
  index: 0,
  indexSlider: 0,
  charIndex: 0,
  isDeleting: false,
  flag: false,
  // code
  renderProduct: function (arr, inner) {
    // const printPosition = document.querySelector(inner);
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
  fetchData: async function (api) {
    try {
      const response = await axios.get(api);
      if (!response.status === 200) {
        throw new Error("Lỗi kết nối:" + response.status);
      }
      //
      const data = response.data;
      //
      if (!Array.isArray(data)) {
        throw new Error("Dữ liệu không hợp lệ");
      }
      return data;
      // callback(data);
    } catch (err) {
      console.log(err.message);
      return null;
    }
  },
  //
  renderData: async function () {
    const data = await this.fetchData(api);
    if (!data) return;
    console.log(data);
    // this.renderProduct(data, root)
  },

  //
  renderTextInp: function () {
    const intervalInner = setInterval(() => {
      content = contentInp[this.index];
      if (this.isDeleting) {
        inpSearch.placeholder = content.substring(0, this.charIndex--);
      } else {
        inpSearch.placeholder = content.substring(0, this.charIndex++);
      }
      if (this.charIndex > content.length) {
        this.isDeleting = true;
        clearInterval(intervalInner);
        setTimeout(() => this.renderTextInp(), 1000);
      } else if (this.charIndex < 0) {
        this.isDeleting = false;
        clearInterval(intervalInner);
        this.index = (this.index + 1) % contentInp.length;
        setTimeout(() => this.renderTextInp(), 200);
      }
    }, 30);
  },

  // khối slider ==========>cần thì chạy
  // pre
  preSlider: function () {
    btnBannerLeft.onclick = () => {
      let widthImg = listImg[0].offsetWidth;
      this.indexSlider =
        (this.indexSlider - 1 + listImg.length) % listImg.length;
      this.clearautoRun();
      slide.style.transform = `translate3d(${
        -widthImg * this.indexSlider
      }px,0,0)`;
    };
  },

  // next slider
  nextSlider: function () {
    btnBannerRight.onclick = () => {
      this.clearautoRun();
      this.autoRun();
    };
  },

  //
  autoRun: function () {
    let widthImg = listImg[0].offsetWidth;
    this.indexSlider = (this.indexSlider + 1) % listImg.length;
    slide.style.transform = `translate3d(${
      -widthImg * this.indexSlider
    }px,0,0)`;
  },

  // dừng slide
  clearautoRun: function () {
    clearInterval(intervalSlider);
    intervalSlider = setInterval(() => this.autoRun(), timeRun);
  },

  //block value inpt Search==========>full trang
  search: function () {
    btnSearch.onclick = async (e) => {
      e.preventDefault();
      if (inpSearch.value.trim() === "") return;
      const value = inpSearch.value.trim().toLowerCase().replace(/\s+/g, "");
      // kết nối api
      const data = await this.fetchData(api);
      if (!data) return;
      console.log(value);
      console.log(data);
    };
  },

  // hiện danh mục các trang===cần thì add
  openCategory: function () {
    click.onclick = () => {
      category.classList.toggle("openCategory");
    };
  },

  // hiện form quên mật khẩu trang loggin=====loggin
  openForgotPass: function () {
    contentClick.onclick = () => {
      forgetPass.classList.toggle("open-forget__pass");
    };
  },

  // xử lý ẩn hiện mô tả sản phẩm trang chi tiết sản phẩm ====product-detail
  openTab: function () {
    tabDesc.forEach((tab) => {
      tab.onclick = () => {
        const dataTab = document.querySelector(`${tab.dataset.target}`);
        blockContent.forEach((items) => {
          items.classList.remove("active");
        });
        dataTab.classList.add("active");
        // menu
        tabDesc.forEach((tab) => {
          tab.classList.remove("active__tab");
        });
        tab.classList.add("active__tab");
      };
    });
  },

  // set height
  setHeightDesc: function () {
    window.onload = () => {
      const heightDesc = checkHeight.offsetHeight;
      console.log(heightDesc);
      if (heightDesc <= 700) {
        content1.style.height = "auto";
        overlayDesc.style.display = "none";
        btnDesc.style.display = "none";
      } else {
        content1.style.height = "700px";
      }
    };
  },
  // hiện
  openDesc: function () {
    btnDesc.onclick = (e) => {
      e.preventDefault();
      productDesc.scrollIntoView({ behavior: "smooth", block: "start" });
      if (!this.flag) {
        content1.style.height = "auto";
        overlayDesc.classList.add("activeDisnone");
        this.flag = true;
      } else {
        content1.style.height = "700px";
        overlayDesc.classList.remove("activeDisnone");
        this.flag = false;
      }
    };
  },

  // xử lý trang admin
  // tabAdmin: function () {
  //   listCategory.forEach((items) => {
  //     items.onclick = () => {
  //       const datatab = document.querySelector(`#${items.dataset.content}`);
  //       dataContent.forEach((items) => {
  //         items.classList.add("hiddenForm");
  //       });
  //       datatab.classList.remove("hiddenForm");
  //     };
  //   });
  // },
  mapContact: function () {
    var map = L.map("map").setView([10.852894, 106.628212], 13); // [Vĩ độ, Kinh độ], Zoom

    L.tileLayer("https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png", {
      attribution:
        '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a>',
    }).addTo(map);

    // Thêm marker vào bản đồ
    L.marker([10.852894, 106.628212])
      .addTo(map)
      .bindPopup("3Ae đang ở đây")
      .openPopup();
    // 10.852894, 106.628212
  },

  // xử lý hover lấy name sản phẩm trang admin thống kê=======>admin thống kê
  openValueName: function () {
    nameProdutcAdmin.forEach((items) => {
      items.onclick = () => {
        const value = items.textContent;
        const el = items.closest("td").querySelector(".show-nameProduct");
        if (el.textContent.trim() === "") {
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
    tabSale2.onclick = () => {
      const el = document.getElementById(`${tabSale2.dataset.targetsale}`);
      contentTabSale.forEach((items) => {
        items.classList.add("none-contentTabSale");
      });
      el.classList.remove("none-contentTabSale");
    };
    // tab 1
    tabSale1.onclick = () => {
      const el = document.getElementById(`${tabSale1.dataset.targetsale}`);
      contentTabSale.forEach((items) => {
        items.classList.add("none-contentTabSale");
      });
      el.classList.remove("none-contentTabSale");
    };
  },

  // trang chi tiết sản phẩm
  openPopup: function () {
    btnInfo.forEach((items) => {
      items.onclick = () => {
        // open popup
        modal.classList.add("openModal");
        popupCoupon.classList.add("open-popupCoupon");

        // inner
        innerCode.innerText = items.dataset.code;
        innerTime.innerText = items.dataset.time;
        innerContent.innerText = items.dataset.content;
      };
    });

    // close đóng
    closePopup.onclick = () => {
      modal.classList.remove("openModal");
      popupCoupon.classList.remove("open-popupCoupon");
    };

    //modal đóng
    modal.onclick = () => {
      modal.classList.remove("openModal");
      popupCoupon.classList.remove("open-popupCoupon");
    };
  },
  // star
  star: function () {
    // this.renderTextInp();
    // this.renderData();
    // // this.renderProduct(1, ".section-1banner"); // đóng cái này
    // this.preSlider();
    // this.nextSlider();
    // intervalSlider = setInterval(() => this.autoRun(), timeRun);
    // this.search();
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
console.log(createSlug("xin chào các bạn"));
