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
        <h3 class="w-100 p-2 fw-normal" style="background-color:#008aa7; color:#fff">ĐẶT LỊCH KHÁM</h3>
        <div class="p-2">
          <p class="fs-4" style="color:#008aa7">Chúng tôi sẽ liên hệ với Quý khách !</p>
          <form>
            <div class="mb-3">
              <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tên:">
            </div>
            <div class="mb-3">
              <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Số điện thoại:">
            </div>
            <div class="mb-3 text-success">
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="Khám trong giờ">
                <label class="form-check-label" for="inlineRadio1">Khám trong giờ</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="Khám ngoài giờ">
                <label class="form-check-label" for="inlineRadio2">Khám ngoài giờ</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="Khám online">
                <label class="form-check-label" for="inlineRadio3">Khám online</label>
              </div>
              <div class="mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Nội dung khám:"></textarea>
              </div>
              <p class="mt-3">* Mọi thông tin của khách hàng sẽ được bảo mật</p>
              <div class="container rounded-3 text-center" style="background-color:#008aa7;">
                <button type="submit" class="btn fs-4 fw-bold" style="color:#fff">ĐẶT LỊCH</button>
              </div>
            </div>
        </form>
        </div>
        <!-- Ket thuc Form Dang Ky -->
      </div>
      <div class="col-lg-7 text-center mt-3" style="height:33rem;">
        <h3 style="color:#008aa7">IVF SAI GON HOSPITAL</h3>
        <span class="text-success fw-bold">GẮN KẾT - NHÂN VĂN</span>
        <p style="text-align: justify;text-justify: inter-word;">Bệnh viện sản hiếm muộn Sài Gòn - bệnh viện chuyên khoa điều trị hiếm muộn đầu tiên tại TP.HCM. Cam kết mang để tỷ lệ THÀNH CÔNG và ỔN ĐỊNH với mức chi phí HỢP LÝ cho các cặp vợ chồng. Với đội ngũ Bác sĩ MÁT TAY có tay nghề cao, nhiều năm kinh nghiệm trong lĩnh vực sinh sản, cùng với hệ thống phòng LAB chuyên nghiệp, trang thiết bị hiện đại bậc nhất theo tiêu chuẩn Châu Âu, sẽ giúp các cặp vợ chồng hiếm muộn tìm được đứa con khỏe mạnh, thông minh như ước nguyện.</p>
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
            <h4 class="fw-bold">VÌ SAO BẠN NÊN CHỌN IVF SAI GON ?</h4>
            <p>IVF SAI GON quy tụ chuyên gia đầu ngành, trang thiết bị hiện đại, giúp các cặp vợ chồng vô sinh hiếm muộn điều trị với chi phí hợp lý và tỷ lệ thành công cao.</p>
            <span class="fw-bold">Tỷ lệ IVF thành công thuộc top đầu tại Việt Nam</span>
            <p>Tỷ lệ thành công đạt 80% bao gồm các ca khó như: vô sinh hiếm muộn lâu năm, tuổi cao, có nhiều bệnh lý phức tạp kèm theo; nam giới không có tinh trùng, tinh trùng bất động; nữ có tử cung dị dạng, buồng trứng đa nang, suy buồng trứng...</p>
            <span class="fw-bold">Đội ngũ chuyên gia sinh sản đầu ngành</span>
            <p><span class="fw-bold">IVF SAI GON</span> quy tụ đôi ngũ giáo sư, chuyên gia, bác sĩ đầu ngành trong và ngoài nước. Ngoài ra, bệnh viện còn hợp tác với các chuyên gia Nam học, Sản phụ Khoa, Sơ sinh, di truyền học, tế bào gốc... Xuyên suốt quá trình điều trị luôn được hội chuẩn liên khoa và tìm ra những giải pháp điều trị hiệu quả, nhanh chóng và tiết kiệm nhất.</p>
            <p class="text-end"><u><a style="color: #fff;text-decoration: none;" href="">Xem thêm:</a></u></p>
            
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
      <h3 class="container text-center mt-5 fs-2" style="color:#008aa7">CHUYÊN KHOA</h3>
      <div class="row row-cols-1 row-cols-md-3 text-center mt-3 text-success">
        <div class="col">
          <div class="card">
            <img class="card-img-top" src="<?php echo get_site_url() ?>/wp-content/themes/ivf-sai-gon-final/assets/img/trang-chu/Hinh-ChuyenKhoa-HoTroSinhSan.png" alt="<?php bloginfo('name') ?>" width="auto" height="auto">
            <div class="card-body">
              <h5 class="card-title">HỖ TRỢ SINH SẢN</h4>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card">
            <img class="card-img-top" src="<?php echo get_site_url() ?>/wp-content/themes/ivf-sai-gon-final/assets/img/trang-chu/Hinh-ChuyenKhoa-KhamVaChuaHiemMuon.png" alt="<?php bloginfo('name') ?>" width="auto" height="auto">
            <div class="card-body">
              <h5 class="card-title">SỨC KHỎE SINH SẢN</h4>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card">
            <img class="card-img-top" src="<?php echo get_site_url() ?>/wp-content/themes/ivf-sai-gon-final/assets/img/trang-chu/Hinh-ChuyenKhoa-ThuTinhOngNghiem.png" alt="<?php bloginfo('name') ?>" width="auto" height="auto">
            <div class="card-body">
              <h5 class="card-title">TRUNG TÂM SƠ SINH</h4>
            </div>
          </div>  
        </div>
      </div>
      <div class="row row-cols-1 row-cols-md-3 text-center mt-3 text-success">
        <div class="col">
          <div class="card">
            <img class="card-img-top" src="<?php echo get_site_url() ?>/wp-content/themes/ivf-sai-gon-final/assets/img/trang-chu/Hinh-ChuyenKhoa-SucKhoeSinhSan.png" alt="<?php bloginfo('name') ?>" width="auto" height="auto">
            <div class="card-body">
              <h5 class="card-title">TRUNG TÂM XÉT NGHIỆM</h4>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card">
            <img class="card-img-top" src="<?php echo get_site_url() ?>/wp-content/themes/ivf-sai-gon-final/assets/img/trang-chu/Hinh-ChuyenKhoa-TruLanhPhoiTinhTrung.png" alt="<?php bloginfo('name') ?>" width="auto" height="auto">
            <div class="card-body">
              <h5 class="card-title">LƯU TRỮ TRỨNG, TINH TRÙNG</h4>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card">
            <img class="card-img-top" src="<?php echo get_site_url() ?>/wp-content/themes/ivf-sai-gon-final/assets/img/trang-chu/Hinh-ChuyenKhoa-VoSinhNam.png" alt="<?php bloginfo('name') ?>" width="auto" height="auto">
            <div class="card-body">
              <h5 class="card-title">KHOA NAM HỌC</h4>
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
        <h2>KHÔNG GIAN</h2>
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
          <h3 class="text-uppercase" style="color: #008aa7;">Luôn luôn<br>
          sẵn sàng giúp đỡ</h3>
          <hr>
          <p class="mt-2 mb-2">Một người làm việc rất chăm chỉ, luôn luôn sẵn sàng giúp đỡ người khác</p>
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
    <h2 class="text-center" style="color:#008aa7;">TIN TỨC</h2>
    <div class="row">
      <div class="col-5">
        <img class="d-block mx-auto mt-3" src="<?php echo get_site_url() ?>/wp-content/themes/ivf-sai-gon-final/assets/img/trang-chu/tin-tuc/1.webp" alt="<?php bloginfo('name') ?>" width="auto" height="auto">
        <h5 class="fw-bold mt-2 mb-2"style="color: #008aa7;">IVF SAI GON HOSPITAL</h5>
        <p style="text-align: justify;text-justify: inter-word;">Bệnh viện sản hiếm muộn Sài Gòn - bệnh viện chuyên khoa điều trị hiếm muộn đầu tiên tại TP.HCM. Cam kết mang để tỷ lệ THÀNH CÔNG và ỔN ĐỊNH với mức chi phí HỢP LÝ cho các cặp vợ chồng. Với đội ngũ Bác sĩ MÁT TAY có tay nghề cao, nhiều năm kinh nghiệm trong lĩnh vực sinh sản, cùng với hệ thống phòng LAB chuyên nghiệp</p>
      </div>
      <div class="col-7">
        <div class="row">
          <div class="col-4">
            <img class="d-block mx-auto mt-3" src="<?php echo get_site_url() ?>/wp-content/themes/ivf-sai-gon-final/assets/img/trang-chu/tin-tuc/2.webp" alt="<?php bloginfo('name') ?>" width="auto" height="auto">
          </div>
          <div class="col-8">
            <h5 class="fw-bold mt-3"style="color: #008aa7;">IVF SAI GON HOSPITAL</h5>
            <p style="text-align: justify;text-justify: inter-word;">Bệnh viện sản hiếm muộn Sài Gòn - bệnh viện chuyên khoa điều trị hiếm muộn đầu tiên tại TP.HCM. Cam kết mang để tỷ lệ THÀNH CÔNG và ỔN ĐỊNH với mức chi phí HỢP LÝ cho các cặp vợ chồng. Với đội ngũ Bác sĩ MÁT TAY có tay nghề cao, nhiều năm kinh nghiệm trong lĩnh vực sinh sản</p>
          </div>
        </div>

        <div class="row">
          <div class="col-4">
            <img class="d-block mx-auto mt-3" src="<?php echo get_site_url() ?>/wp-content/themes/ivf-sai-gon-final/assets/img/trang-chu/tin-tuc/3.webp" alt="<?php bloginfo('name') ?>" width="auto" height="auto">
          </div>
          <div class="col-8">
            <h5 class="fw-bold mt-3"style="color: #008aa7;">IVF SAI GON HOSPITAL</h5>
            <p style="text-align: justify;text-justify: inter-word;">Bệnh viện sản hiếm muộn Sài Gòn - bệnh viện chuyên khoa điều trị hiếm muộn đầu tiên tại TP.HCM. Cam kết mang để tỷ lệ THÀNH CÔNG và ỔN ĐỊNH với mức chi phí HỢP LÝ cho các cặp vợ chồng. Với đội ngũ Bác sĩ MÁT TAY có tay nghề cao, nhiều năm kinh nghiệm trong lĩnh vực sinh sản</p>
          </div>
        </div>

        <div class="row">
          <div class="col-4">
            <img class="d-block mx-auto mt-3" src="<?php echo get_site_url() ?>/wp-content/themes/ivf-sai-gon-final/assets/img/trang-chu/tin-tuc/4.webp" alt="<?php bloginfo('name') ?>" width="auto" height="auto">
          </div>
          <div class="col-8">
            <h5 class="fw-bold mt-3"style="color: #008aa7;">IVF SAI GON HOSPITAL</h5>
            <p style="text-align: justify;text-justify: inter-word;">Bệnh viện sản hiếm muộn Sài Gòn - bệnh viện chuyên khoa điều trị hiếm muộn đầu tiên tại TP.HCM. Cam kết mang để tỷ lệ THÀNH CÔNG và ỔN ĐỊNH với mức chi phí HỢP LÝ cho các cặp vợ chồng. Với đội ngũ Bác sĩ MÁT TAY có tay nghề cao, nhiều năm kinh nghiệm trong lĩnh vực sinh sản</p>
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
        <h2 class="text-center mt-3" style="color:#008aa7;">QUY TRÌNH IVF</h2>
        <img class="d-block mx-auto mt-3" src="<?php echo get_site_url() ?>/wp-content/themes/ivf-sai-gon-final/assets/img/trang-chu/Tab-QuyTrinhIVF.png" alt="<?php bloginfo('name') ?>" width="auto" height="auto">
        <p class="text-success my-3">Tỷ lệ thành công cao hàng đầu Việt Nam.<br>
          Quy tụ đội ngũ bác sĩ chuyên môn cao và giàu kinh nghiệm.<br>
          Hệ thống phòng "Lab trong Lab" hiện đại hàng đầu Đông Nam Á.
        </p>
    </div>
  <!-- Ket thuc hien thi Quy trinh -->
  

  

  </main><!-- End #main -->