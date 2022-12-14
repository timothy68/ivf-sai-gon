<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package IVF_Sai_Gon_Final
 */

?>
<div style="background-color:#008aa7;">
  
</div>
<div id="robotcarousel" class="carousel slide" style="margin-top:10rem;" data-bs-interval="1000" data-pause="false" data-bs-ride="true">
  
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#robotcarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#robotcarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
  </div>
  
  <div class="carousel-inner">
    <div class="carousel-item" data-bs-interval="3000">
      <img class="d-block h-100" src="<?php echo get_site_url() ?>/wp-content/themes/ivf-sai-gon-final/assets/img/trang-chu/Top-Banner.png" alt="<?php bloginfo('name') ?>" width="auto" height="auto">
    </div>
    <div class="carousel-item active">
      <img class="d-block h-100" src="<?php echo get_site_url() ?>/wp-content/themes/ivf-sai-gon-final/assets/img/trang-chu/Top-Banner.png" alt="<?php bloginfo('name') ?>" width="auto" height="auto">
    </div>
  </div>
  
  <button class="carousel-control-prev" type="button" data-bs-target="#robotcarousel" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#robotcarousel" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button
  
</div>
  <!-- End Slide -->

  <main id="main">
    <!-- Hien thi Icon Dich vu -->
    <div class="container text-center mt-3 gx-2">
      <div class="row row-cols-5">
        <div class="col">
          <img class="d-block h-100" src="<?php echo get_site_url() ?>/wp-content/themes/ivf-sai-gon-final/assets/img/trang-chu/Button-KetQuaDieuTri.png" alt="<?php bloginfo('name') ?>" width="auto" height="auto">
        </div>
        <div class="col">
          <img class="d-block h-100" src="<?php echo get_site_url() ?>/wp-content/themes/ivf-sai-gon-final/assets/img/trang-chu/Button-CoSoVatChat.png" alt="<?php bloginfo('name') ?>" width="auto" height="auto">
        </div>
        <div class="col">
          <img class="d-block h-100" src="<?php echo get_site_url() ?>/wp-content/themes/ivf-sai-gon-final/assets/img/trang-chu/Button-DichVu.png" alt="<?php bloginfo('name') ?>" width="auto" height="auto">
        </div>
        <div class="col">
          <img class="d-block h-100" src="<?php echo get_site_url() ?>/wp-content/themes/ivf-sai-gon-final/assets/img/trang-chu/Button-BangGia.png" alt="<?php bloginfo('name') ?>" width="auto" height="auto">
        </div>
        <div class="col">
          <img class="d-block h-100" src="<?php echo get_site_url() ?>/wp-content/themes/ivf-sai-gon-final/assets/img/trang-chu/Button-HoiDap.png" alt="<?php bloginfo('name') ?>" width="auto" height="auto">
        </div>
      </div>
    </div>
    <hr class="mt-4" style="color:#008aa7">
  <!-- Ket thuc hien thi Icon Dich vu -->
  <!-- Form dang ky - Gioi thieu -->
  <div class="container">
    <div class="row gx-5">
      <div class="col-lg-5 mt-3 p-0" style="border-style: solid;border-width: medium;border-color: #008aa7;height:33rem;">
        <!-- Form Dang Ky -->
        <h3 class="w-100 p-2 fw-normal" style="background-color:#008aa7; color:#fff">?????T L???CH KH??M</h3>
        <div class="p-2">
          <p class="fs-4" style="color:#008aa7">Ch??ng t??i s??? li??n h??? v???i Qu?? kh??ch !</p>
          <form>
            <div class="mb-3">
              <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="T??n:">
            </div>
            <div class="mb-3">
              <input type="text" class="form-control" id="exampleInputPassword1" placeholder="S??? ??i???n tho???i:">
            </div>
            <div class="mb-3 text-success">
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="Kh??m trong gi???">
                <label class="form-check-label" for="inlineRadio1">Kh??m trong gi???</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="Kh??m ngo??i gi???">
                <label class="form-check-label" for="inlineRadio2">Kh??m ngo??i gi???</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="Kh??m online">
                <label class="form-check-label" for="inlineRadio3">Kh??m online</label>
              </div>
              <div class="mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="N???i dung kh??m:"></textarea>
              </div>
              <p class="mt-3">* M???i th??ng tin c???a kh??ch h??ng s??? ???????c b???o m???t</p>
              <div class="container rounded-3 text-center" style="background-color:#008aa7;">
                <button type="submit" class="btn fs-4 fw-bold" style="color:#fff">?????T L???CH</button>
              </div>
            </div>
        </form>
        </div>
        <!-- Ket thuc Form Dang Ky -->
      </div>
      <div class="col-lg-7 text-center mt-3" style="height:33rem;">
        <h3 style="color:#008aa7">IVF SAI GON HOSPITAL</h3>
        <span class="text-success fw-bold">G???N K???T - NH??N V??N</span>
        <p style="text-align: justify;text-justify: inter-word;">B???nh vi???n s???n hi???m mu???n S??i G??n - b???nh vi???n chuy??n khoa ??i???u tr??? hi???m mu???n ?????u ti??n t???i TP.HCM. Cam k???t mang ????? t??? l??? TH??NH C??NG v?? ???N ?????NH v???i m???c chi ph?? H???P L?? cho c??c c???p v??? ch???ng. V???i ?????i ng?? B??c s?? M??T TAY c?? tay ngh??? cao, nhi???u n??m kinh nghi???m trong l??nh v???c sinh s???n, c??ng v???i h??? th???ng ph??ng LAB chuy??n nghi???p, trang thi???t b??? hi???n ?????i b???c nh???t theo ti??u chu???n Ch??u ??u, s??? gi??p c??c c???p v??? ch???ng hi???m mu???n t??m ???????c ?????a con kh???e m???nh, th??ng minh nh?? ?????c nguy???n.</p>
        <img class="d-block" src="<?php echo get_site_url() ?>/wp-content/themes/ivf-sai-gon-final/assets/img/trang-chu/Hinh-GioiThieu.png" alt="<?php bloginfo('name') ?>" width="auto" height="auto">
      </div>
    </div>
  </div>

  <!-- Ket thuc Form dang ky - Gioi thieu -->
  <!-- Vi sao ban nen chon -->
    <div class="mt-5" style="background-color:#008aa7">
      <div class="container" style="color:#fff">
        <div class="row">
          <div class="col-lg-7 mt-5 mb-4" style="text-align: justify;text-justify: inter-word;">
            <h4 class="fw-bold">V?? SAO B???N N??N CH???N IVF SAI GON ?</h4>
            <p>IVF SAI GON quy t??? chuy??n gia ?????u ng??nh, trang thi???t b??? hi???n ?????i, gi??p c??c c???p v??? ch???ng v?? sinh hi???m mu???n ??i???u tr??? v???i chi ph?? h???p l?? v?? t??? l??? th??nh c??ng cao.</p>
            <span class="fw-bold">T??? l??? IVF th??nh c??ng thu???c top ?????u t???i Vi???t Nam</span>
            <p>T??? l??? th??nh c??ng ?????t 80% bao g???m c??c ca kh?? nh??: v?? sinh hi???m mu???n l??u n??m, tu???i cao, c?? nhi???u b???nh l?? ph???c t???p k??m theo; nam gi???i kh??ng c?? tinh tr??ng, tinh tr??ng b???t ?????ng; n??? c?? t??? cung d??? d???ng, bu???ng tr???ng ??a nang, suy bu???ng tr???ng...</p>
            <span class="fw-bold">?????i ng?? chuy??n gia sinh s???n ?????u ng??nh</span>
            <p><span class="fw-bold">IVF SAI GON</span> quy t??? ????i ng?? gi??o s??, chuy??n gia, b??c s?? ?????u ng??nh trong v?? ngo??i n?????c. Ngo??i ra, b???nh vi???n c??n h???p t??c v???i c??c chuy??n gia Nam h???c, S???n ph??? Khoa, S?? sinh, di truy???n h???c, t??? b??o g???c... Xuy??n su???t qu?? tr??nh ??i???u tr??? lu??n ???????c h???i chu???n li??n khoa v?? t??m ra nh???ng gi???i ph??p ??i???u tr??? hi???u qu???, nhanh ch??ng v?? ti???t ki???m nh???t.</p>
            <p class="text-end"><u><a style="color: #fff;text-decoration: none;" href="">Xem th??m:</a></u></p>
            
          </div>
          <div class="col-lg-5 mt-5 mb-4">
            <img class="d-block" src="<?php echo get_site_url() ?>/wp-content/themes/ivf-sai-gon-final/assets/img/trang-chu/Hinh-ViSaoChon-IVFSaigon.png" alt="<?php bloginfo('name') ?>" width="auto" height="auto">
          </div>
        </div>
      </div>
    </div>
    <!-- Ket thuc vi sao ban nen chon -->
    <!-- Chuyen khoa -->
    <div class="container">
      <h3 class="container text-center mt-5 fs-2" style="color:#008aa7">CHUY??N KHOA</h3>
      <div class="row row-cols-1 row-cols-md-3 text-center mt-3 text-success">
        <div class="col">
          <div class="card">
            <img class="card-img-top" src="<?php echo get_site_url() ?>/wp-content/themes/ivf-sai-gon-final/assets/img/trang-chu/Hinh-ChuyenKhoa-HoTroSinhSan.png" alt="<?php bloginfo('name') ?>" width="auto" height="auto">
            <div class="card-body">
              <h5 class="card-title">H??? TR??? SINH S???N</h4>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card">
            <img class="card-img-top" src="<?php echo get_site_url() ?>/wp-content/themes/ivf-sai-gon-final/assets/img/trang-chu/Hinh-ChuyenKhoa-KhamVaChuaHiemMuon.png" alt="<?php bloginfo('name') ?>" width="auto" height="auto">
            <div class="card-body">
              <h5 class="card-title">S???C KH???E SINH S???N</h4>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card">
            <img class="card-img-top" src="<?php echo get_site_url() ?>/wp-content/themes/ivf-sai-gon-final/assets/img/trang-chu/Hinh-ChuyenKhoa-ThuTinhOngNghiem.png" alt="<?php bloginfo('name') ?>" width="auto" height="auto">
            <div class="card-body">
              <h5 class="card-title">TRUNG T??M S?? SINH</h4>
            </div>
          </div>  
        </div>
      </div>
      <div class="row row-cols-1 row-cols-md-3 text-center mt-3 text-success">
        <div class="col">
          <div class="card">
            <img class="card-img-top" src="<?php echo get_site_url() ?>/wp-content/themes/ivf-sai-gon-final/assets/img/trang-chu/Hinh-ChuyenKhoa-SucKhoeSinhSan.png" alt="<?php bloginfo('name') ?>" width="auto" height="auto">
            <div class="card-body">
              <h5 class="card-title">TRUNG T??M X??T NGHI???M</h4>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card">
            <img class="card-img-top" src="<?php echo get_site_url() ?>/wp-content/themes/ivf-sai-gon-final/assets/img/trang-chu/Hinh-ChuyenKhoa-TruLanhPhoiTinhTrung.png" alt="<?php bloginfo('name') ?>" width="auto" height="auto">
            <div class="card-body">
              <h5 class="card-title">L??U TR??? TR???NG, TINH TR??NG</h4>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card">
            <img class="card-img-top" src="<?php echo get_site_url() ?>/wp-content/themes/ivf-sai-gon-final/assets/img/trang-chu/Hinh-ChuyenKhoa-VoSinhNam.png" alt="<?php bloginfo('name') ?>" width="auto" height="auto">
            <div class="card-body">
              <h5 class="card-title">KHOA NAM H???C</h4>
            </div>
          </div>  
        </div>
      </div>
    </div>
    <!-- Ket thuc Chuyen Khoa -->
  <!-- ======= Gallery Section ======= -->
  <div class="text-center" style="background-color:#008aa7;color:#fff">
    <section id="gallery" class="gallery m-3">
      <div class="container">
        <h2>KH??NG GIAN</h2>
      </div>

      <div class="container-fluid">
        <div class="row g-0">

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="<?php echo get_site_url() ?>/wp-content/themes/ivf-sai-gon-final/assets/img/trang-chu/khong-gian/01.jpg" class="galelry-lightbox">
                <img src="<?php echo get_site_url() ?>/wp-content/themes/ivf-sai-gon-final/assets/img/trang-chu/khong-gian/01.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="<?php echo get_site_url() ?>/wp-content/themes/ivf-sai-gon-final/assets/img/trang-chu/khong-gian/02.jpg" class="galelry-lightbox">
                <img src="<?php echo get_site_url() ?>/wp-content/themes/ivf-sai-gon-final/assets/img/trang-chu/khong-gian/02.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="<?php echo get_site_url() ?>/wp-content/themes/ivf-sai-gon-final/assets/img/trang-chu/khong-gian/03.jpg" class="galelry-lightbox">
                <img src="<?php echo get_site_url() ?>/wp-content/themes/ivf-sai-gon-final/assets/img/trang-chu/khong-gian/03.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="<?php echo get_site_url() ?>/wp-content/themes/ivf-sai-gon-final/assets/img/trang-chu/khong-gian/04.jpg" class="galelry-lightbox">
                <img src="<?php echo get_site_url() ?>/wp-content/themes/ivf-sai-gon-final/assets/img/trang-chu/khong-gian/04.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="<?php echo get_site_url() ?>/wp-content/themes/ivf-sai-gon-final/assets/img/trang-chu/khong-gian/05.jpg" class="galelry-lightbox">
                <img src="<?php echo get_site_url() ?>/wp-content/themes/ivf-sai-gon-final/assets/img/trang-chu/khong-gian/05.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="<?php echo get_site_url() ?>/wp-content/themes/ivf-sai-gon-final/assets/img/trang-chu/khong-gian/06.jpg" class="galelry-lightbox">
                <img src="<?php echo get_site_url() ?>/wp-content/themes/ivf-sai-gon-final/assets/img/trang-chu/khong-gian/06.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="<?php echo get_site_url() ?>/wp-content/themes/ivf-sai-gon-final/assets/img/trang-chu/khong-gian/07.jpg" class="galelry-lightbox">
                <img src="<?php echo get_site_url() ?>/wp-content/themes/ivf-sai-gon-final/assets/img/trang-chu/khong-gian/07.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="<?php echo get_site_url() ?>/wp-content/themes/ivf-sai-gon-final/assets/img/trang-chu/khong-gian/08.jpg" class="galelry-lightbox">
                <img src="<?php echo get_site_url() ?>/wp-content/themes/ivf-sai-gon-final/assets/img/trang-chu/khong-gian/08.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="<?php echo get_site_url() ?>/wp-content/themes/ivf-sai-gon-final/assets/img/trang-chu/khong-gian/09.jpg" class="galelry-lightbox">
                <img src="<?php echo get_site_url() ?>/wp-content/themes/ivf-sai-gon-final/assets/img/trang-chu/khong-gian/09.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="<?php echo get_site_url() ?>/wp-content/themes/ivf-sai-gon-final/assets/img/trang-chu/khong-gian/10.jpg" class="galelry-lightbox">
                <img src="<?php echo get_site_url() ?>/wp-content/themes/ivf-sai-gon-final/assets/img/trang-chu/khong-gian/10.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="<?php echo get_site_url() ?>/wp-content/themes/ivf-sai-gon-final/assets/img/trang-chu/khong-gian/11.jpg" class="galelry-lightbox">
                <img src="<?php echo get_site_url() ?>/wp-content/themes/ivf-sai-gon-final/assets/img/trang-chu/khong-gian/11.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="<?php echo get_site_url() ?>/wp-content/themes/ivf-sai-gon-final/assets/img/trang-chu/khong-gian/12.jpg" class="galelry-lightbox">
                <img src="<?php echo get_site_url() ?>/wp-content/themes/ivf-sai-gon-final/assets/img/trang-chu/khong-gian/12.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Gallery Section -->
  </div>
  <div class="container">
    <div class="row">
      <div class="col-lg-3 mt-3 mb-3 text-center text-success rounded-3" style="border-style: solid;border-width: medium;border-color: #008aa7;height:20rem;">
        <div class="mt-5">
          <h3 class="text-uppercase" style="color: #008aa7;">Lu??n lu??n<br>
          s???n s??ng gi??p ?????</h3>
          <hr>
          <p class="mt-2 mb-2">M???t ng?????i l??m vi???c r???t ch??m ch???, lu??n lu??n s???n s??ng gi??p ????? ng?????i kh??c</p>
          <hr>
          <img class="d-block mx-auto" src="<?php echo get_site_url() ?>/wp-content/themes/ivf-sai-gon-final/assets/img/trang-chu/bac-si/Button-DoiNguBacSi-Chuot.png" alt="<?php bloginfo('name') ?>" width="auto" height="auto">
        </div>
        
      </div>
      <div class="col-lg-2 fs-6 text-center" style="height:25rem;background-image: linear-gradient(to top, #dcedd9, #fff);">
        <img class="d-block mx-auto mt-3" src="<?php echo get_site_url() ?>/wp-content/themes/ivf-sai-gon-final/assets/img/trang-chu/bac-si/BacSi-1.png" alt="<?php bloginfo('name') ?>" width="auto" height="auto">
        <span style="color: #008aa7;">Dr. Name</span>
      </div>
      <div class="col-lg-2 fs-6 text-center" style="height:25rem;background-image: linear-gradient(to bottom, #dcedd9, #eef6ec);">
        <img class="d-block mx-auto mt-3" src="<?php echo get_site_url() ?>/wp-content/themes/ivf-sai-gon-final/assets/img/trang-chu/bac-si/BacSi-1.png" alt="<?php bloginfo('name') ?>" width="auto" height="auto">
        <span style="color: #008aa7;">Dr. Name</span>
      </div>
      <div class="col-lg-2 fs-6 text-center" style="height:25rem;background-image: linear-gradient(to top, #dcedd9, #fff);">
        <img class="d-block mx-auto mt-3" src="<?php echo get_site_url() ?>/wp-content/themes/ivf-sai-gon-final/assets/img/trang-chu/bac-si/BacSi-1.png" alt="<?php bloginfo('name') ?>" width="auto" height="auto">
        <span style="color: #008aa7;">Dr. Name</span>
      </div>
      <div class="col-lg-2 fs-6 text-center" style="height:25rem;background-image: linear-gradient(to bottom, #dcedd9, #eef6ec);">
        <img class="d-block mx-auto mt-3" src="<?php echo get_site_url() ?>/wp-content/themes/ivf-sai-gon-final/assets/img/trang-chu/bac-si/BacSi-1.png" alt="<?php bloginfo('name') ?>" width="auto" height="auto">
        <span style="color: #008aa7;">Dr. Name</span>
      </div>
  </div>
  </div>
  <div class="container-fluid p-3" style="background-color:#008aa7;"></div>
  <div class="mt-3 container" style="background-color:#fff;">
    <h2 class="text-center" style="color:#008aa7;">TIN T???C</h2>
    <div class="row">
      <div class="col-5">
        <img class="d-block mx-auto mt-3" src="<?php echo get_site_url() ?>/wp-content/themes/ivf-sai-gon-final/assets/img/trang-chu/tin-tuc/1.webp" alt="<?php bloginfo('name') ?>" width="auto" height="auto">
        <h5 class="fw-bold mt-2 mb-2"style="color: #008aa7;">IVF SAI GON HOSPITAL</h5>
        <p style="text-align: justify;text-justify: inter-word;">B???nh vi???n s???n hi???m mu???n S??i G??n - b???nh vi???n chuy??n khoa ??i???u tr??? hi???m mu???n ?????u ti??n t???i TP.HCM. Cam k???t mang ????? t??? l??? TH??NH C??NG v?? ???N ?????NH v???i m???c chi ph?? H???P L?? cho c??c c???p v??? ch???ng. V???i ?????i ng?? B??c s?? M??T TAY c?? tay ngh??? cao, nhi???u n??m kinh nghi???m trong l??nh v???c sinh s???n, c??ng v???i h??? th???ng ph??ng LAB chuy??n nghi???p</p>
      </div>
      <div class="col-7">
        <div class="row">
          <div class="col-4">
            <img class="d-block mx-auto mt-3" src="<?php echo get_site_url() ?>/wp-content/themes/ivf-sai-gon-final/assets/img/trang-chu/tin-tuc/2.webp" alt="<?php bloginfo('name') ?>" width="auto" height="auto">
          </div>
          <div class="col-8">
            <h5 class="fw-bold mt-3"style="color: #008aa7;">IVF SAI GON HOSPITAL</h5>
            <p style="text-align: justify;text-justify: inter-word;">B???nh vi???n s???n hi???m mu???n S??i G??n - b???nh vi???n chuy??n khoa ??i???u tr??? hi???m mu???n ?????u ti??n t???i TP.HCM. Cam k???t mang ????? t??? l??? TH??NH C??NG v?? ???N ?????NH v???i m???c chi ph?? H???P L?? cho c??c c???p v??? ch???ng. V???i ?????i ng?? B??c s?? M??T TAY c?? tay ngh??? cao, nhi???u n??m kinh nghi???m trong l??nh v???c sinh s???n</p>
          </div>
        </div>

        <div class="row">
          <div class="col-4">
            <img class="d-block mx-auto mt-3" src="<?php echo get_site_url() ?>/wp-content/themes/ivf-sai-gon-final/assets/img/trang-chu/tin-tuc/3.webp" alt="<?php bloginfo('name') ?>" width="auto" height="auto">
          </div>
          <div class="col-8">
            <h5 class="fw-bold mt-3"style="color: #008aa7;">IVF SAI GON HOSPITAL</h5>
            <p style="text-align: justify;text-justify: inter-word;">B???nh vi???n s???n hi???m mu???n S??i G??n - b???nh vi???n chuy??n khoa ??i???u tr??? hi???m mu???n ?????u ti??n t???i TP.HCM. Cam k???t mang ????? t??? l??? TH??NH C??NG v?? ???N ?????NH v???i m???c chi ph?? H???P L?? cho c??c c???p v??? ch???ng. V???i ?????i ng?? B??c s?? M??T TAY c?? tay ngh??? cao, nhi???u n??m kinh nghi???m trong l??nh v???c sinh s???n</p>
          </div>
        </div>

        <div class="row">
          <div class="col-4">
            <img class="d-block mx-auto mt-3" src="<?php echo get_site_url() ?>/wp-content/themes/ivf-sai-gon-final/assets/img/trang-chu/tin-tuc/4.webp" alt="<?php bloginfo('name') ?>" width="auto" height="auto">
          </div>
          <div class="col-8">
            <h5 class="fw-bold mt-3"style="color: #008aa7;">IVF SAI GON HOSPITAL</h5>
            <p style="text-align: justify;text-justify: inter-word;">B???nh vi???n s???n hi???m mu???n S??i G??n - b???nh vi???n chuy??n khoa ??i???u tr??? hi???m mu???n ?????u ti??n t???i TP.HCM. Cam k???t mang ????? t??? l??? TH??NH C??NG v?? ???N ?????NH v???i m???c chi ph?? H???P L?? cho c??c c???p v??? ch???ng. V???i ?????i ng?? B??c s?? M??T TAY c?? tay ngh??? cao, nhi???u n??m kinh nghi???m trong l??nh v???c sinh s???n</p>
          </div>
        </div>

      </div>
    </div>
  </div>
  <div style="background-color:#008aa7;">
    <div class="mt-3 container">
      <div class="row">
        <div class="col-2"></div>
        <div class="col-8 text-center">
          <h2 class="text-center mt-3" style="color:#fff;">VIDEO</h2>
          <img class="d-block mx-auto mt-3" src="<?php echo get_site_url() ?>/wp-content/themes/ivf-sai-gon-final/assets/img/trang-chu/tin-tuc/5.webp" alt="<?php bloginfo('name') ?>" width="auto" height="auto">
          <div class="row mt-3 mb-5">
          <div class="col-4">
            <img class="d-block mx-auto" src="<?php echo get_site_url() ?>/wp-content/themes/ivf-sai-gon-final/assets/img/trang-chu/tin-tuc/2.webp" alt="<?php bloginfo('name') ?>" width="auto" height="auto">
          </div>
          <div class="col-4">
            <img class="d-block mx-auto" src="<?php echo get_site_url() ?>/wp-content/themes/ivf-sai-gon-final/assets/img/trang-chu/tin-tuc/2.webp" alt="<?php bloginfo('name') ?>" width="auto" height="auto">
          </div>
          <div class="col-4">
            <img class="d-block mx-auto" src="<?php echo get_site_url() ?>/wp-content/themes/ivf-sai-gon-final/assets/img/trang-chu/tin-tuc/3.webp" alt="<?php bloginfo('name') ?>" width="auto" height="auto">
          </div>
        </div>
        <div class="col-2"></div>
      </div>
      </div>
    </div>
  </div>

<!-- Quy trinh kham -->
      <div class="container mt-5 gx-2">
        <h2 class="text-center mt-3" style="color:#008aa7;">QUY TR??NH IVF</h2>
        <img class="d-block mx-auto mt-3" src="<?php echo get_site_url() ?>/wp-content/themes/ivf-sai-gon-final/assets/img/trang-chu/Tab-QuyTrinhIVF.png" alt="<?php bloginfo('name') ?>" width="auto" height="auto">
        <p class="text-success my-3">T??? l??? th??nh c??ng cao h??ng ?????u Vi???t Nam.<br>
          Quy t??? ?????i ng?? b??c s?? chuy??n m??n cao v?? gi??u kinh nghi???m.<br>
          H??? th???ng ph??ng "Lab trong Lab" hi???n ?????i h??ng ?????u ????ng Nam ??.
        </p>
    </div>
  <!-- Ket thuc hien thi Quy trinh -->
  

  

  </main><!-- End #main -->