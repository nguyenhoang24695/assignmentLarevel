@extends('layouts.header')
@section('content')
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark fixed-top">
      <div class="container">
        <img src="img/logo.png" id="logo">
        <a class="navbar-brand" href="index.html">FUN ZONE</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive"
          aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            </li>
            <li class="nav-item">
              <a class="nav-link" href="experience.html">Tổng quan</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link" id="navbarDropdown1" data-target="#" href="http://example.com" data-toggle="dropdown" aria-haspopup="true"
                aria-expanded="false">Chơi gì</a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown1">
                <li>
                  <a class="dropdown-item" href="leisure-and-dining.html">Vui chơi</a>
                </li>
                <li>
                  <a class="dropdown-item" href="restaurant.html">Ẩm thực</a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="character.html">Nhân vật công viên</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="event.html">Sự kiện</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="information.html">Thông tin công viên</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.html">Liên hệ</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="cart.html">
                <span style="font-size:20px;" class="fa fa-shopping-cart"></span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

  	
  	<!-- Page content -->
  	<div class="product-banner">
  		<div class="img-bg-full" style="background-image: url('http://banahills.sunworld.vn/wp-content/uploads/2016/04/cap-treo-01-1.jpg');">
  			<h5 class="photo-by"></h5>
  		</div>
  	</div>
  	<div class="product-wrap">
      <h2>Danh sách vé</h2>
      <div>
            <button style="margin: 20px;" class="btn btn-success">Vé cửa</button>
            <button style="margin: 20px;" class="btn btn-success">Vé nhà hàng</button>
            <button style="margin: 20px;" class="btn btn-success">Vé khách sạn</button>
      </div>
      <div class="clearfix"></div>
      <div class="container">
        <div class="row" id="result">
            {{-- show sp --}}
          <div class="col-lg-4">
            <div class="booking-bar-content">
              <div class="product-image">
                 <img src="http://banahills.sunworld.vn/wp-content/uploads/2016/04/cap-treo-01-1.jpg">
               </div>
              <div class="product-header">
                <h3>Vé cáp treo</h3>
              </div>
              <div class="product-info">
                <i class="fa fa-book" aria-hidden="true"></i>
                Hệ thống cáp treo của Fun Zone được CNN bình chọn là 1 trong 10 tuyến cáp treo ấn tượng nhất thế giới với 5 tuyến cáp treo: Suối Mơ – Bà Nà, Debay – Morin, Thác Tóc Tiên – L’Indochine, Hội An – Marseille,  Bordeaux- Louvre, công suất 6.500 khách/giờ, do hãng Doppermayer chế tạo.
              </div>
              <div class="space"></div>
              <div class="price">
                <h5 class="pull-left">Giá từ</h5>
                <div class="pull-right">
                  <div class="product-pricing">
                    <h4>VND </h4>
                    <h2 class="text-primary">300000</h2>
                  </div>
                </div>
              </div>
              <div class="clearfix"></div>
            </div>
          </div>
          <div class="col-lg-4">
                <div class="booking-bar-content">
                  <div class="product-image">
                     <img src="http://banahills.sunworld.vn/wp-content/uploads/2016/04/cap-treo-01-1.jpg">
                   </div>
                  <div class="product-header">
                    <h3>Vé cáp treo</h3>
                  </div>
                  <div class="product-info">
                    <i class="fa fa-book" aria-hidden="true"></i>
                    Hệ thống cáp treo của Fun Zone được CNN bình chọn là 1 trong 10 tuyến cáp treo ấn tượng nhất thế giới với 5 tuyến cáp treo: Suối Mơ – Bà Nà, Debay – Morin, Thác Tóc Tiên – L’Indochine, Hội An – Marseille,  Bordeaux- Louvre, công suất 6.500 khách/giờ, do hãng Doppermayer chế tạo.
                  </div>
                  <div class="space"></div>
                  <div class="price">
                    <h5 class="pull-left">Giá từ</h5>
                    <div class="pull-right">
                      <div class="product-pricing">
                        <h4>VND </h4>
                        <h2 class="text-primary">300000</h2>
                      </div>
                    </div>
                  </div>
                  <div class="clearfix"></div>
                </div>
              </div>
              <div class="col-lg-4">
                    <div class="booking-bar-content">
                      <div class="product-image">
                         <img src="http://banahills.sunworld.vn/wp-content/uploads/2016/04/cap-treo-01-1.jpg">
                       </div>
                      <div class="product-header">
                        <h3>Vé cáp treo</h3>
                      </div>
                      <div class="product-info">
                        <i class="fa fa-book" aria-hidden="true"></i>
                        Hệ thống cáp treo của Fun Zone được CNN bình chọn là 1 trong 10 tuyến cáp treo ấn tượng nhất thế giới với 5 tuyến cáp treo: Suối Mơ – Bà Nà, Debay – Morin, Thác Tóc Tiên – L’Indochine, Hội An – Marseille,  Bordeaux- Louvre, công suất 6.500 khách/giờ, do hãng Doppermayer chế tạo.
                      </div>
                      <div class="space"></div>
                      <div class="price">
                        <h5 class="pull-left">Giá từ</h5>
                        <div class="pull-right">
                          <div class="product-pricing">
                            <h4>VND </h4>
                            <h2 class="text-primary">300000</h2>
                          </div>
                        </div>
                      </div>
                      <div class="clearfix"></div>
                    </div>
                  </div>
                  <div class="col-lg-4">
                        <div class="booking-bar-content">
                          <div class="product-image">
                             <img src="http://banahills.sunworld.vn/wp-content/uploads/2016/04/cap-treo-01-1.jpg">
                           </div>
                          <div class="product-header">
                            <h3>Vé cáp treo</h3>
                          </div>
                          <div class="product-info">
                            <i class="fa fa-book" aria-hidden="true"></i>
                            Hệ thống cáp treo của Fun Zone được CNN bình chọn là 1 trong 10 tuyến cáp treo ấn tượng nhất thế giới với 5 tuyến cáp treo: Suối Mơ – Bà Nà, Debay – Morin, Thác Tóc Tiên – L’Indochine, Hội An – Marseille,  Bordeaux- Louvre, công suất 6.500 khách/giờ, do hãng Doppermayer chế tạo.
                          </div>
                          <div class="space"></div>
                          <div class="price">
                            <h5 class="pull-left">Giá từ</h5>
                            <div class="pull-right">
                              <div class="product-pricing">
                                <h4>VND </h4>
                                <h2 class="text-primary">300000</h2>
                              </div>
                            </div>
                          </div>
                          <div class="clearfix"></div>
                        </div>
                      </div>
                      <div class="col-lg-4">
                            <div class="booking-bar-content">
                              <div class="product-image">
                                 <img src="http://banahills.sunworld.vn/wp-content/uploads/2016/04/cap-treo-01-1.jpg">
                               </div>
                              <div class="product-header">
                                <h3>Vé cáp treo</h3>
                              </div>
                              <div class="product-info">
                                <i class="fa fa-book" aria-hidden="true"></i>
                                Hệ thống cáp treo của Fun Zone được CNN bình chọn là 1 trong 10 tuyến cáp treo ấn tượng nhất thế giới với 5 tuyến cáp treo: Suối Mơ – Bà Nà, Debay – Morin, Thác Tóc Tiên – L’Indochine, Hội An – Marseille,  Bordeaux- Louvre, công suất 6.500 khách/giờ, do hãng Doppermayer chế tạo.
                              </div>
                              <div class="space"></div>
                              <div class="price">
                                <h5 class="pull-left">Giá từ</h5>
                                <div class="pull-right">
                                  <div class="product-pricing">
                                    <h4>VND </h4>
                                    <h2 class="text-primary">300000</h2>
                                  </div>
                                </div>
                              </div>
                              <div class="clearfix"></div>
                            </div>
                          </div>
                          <div class="col-lg-4">
                                <div class="booking-bar-content">
                                  <div class="product-image">
                                     <img src="http://banahills.sunworld.vn/wp-content/uploads/2016/04/cap-treo-01-1.jpg">
                                   </div>
                                  <div class="product-header">
                                    <h3>Vé cáp treo</h3>
                                  </div>
                                  <div class="product-info">
                                    <i class="fa fa-book" aria-hidden="true"></i>
                                    Hệ thống cáp treo của Fun Zone được CNN bình chọn là 1 trong 10 tuyến cáp treo ấn tượng nhất thế giới với 5 tuyến cáp treo: Suối Mơ – Bà Nà, Debay – Morin, Thác Tóc Tiên – L’Indochine, Hội An – Marseille,  Bordeaux- Louvre, công suất 6.500 khách/giờ, do hãng Doppermayer chế tạo.
                                  </div>
                                  <div class="space"></div>
                                  <div class="price">
                                    <h5 class="pull-left">Giá từ</h5>
                                    <div class="pull-right">
                                      <div class="product-pricing">
                                        <h4>VND </h4>
                                        <h2 class="text-primary">300000</h2>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="clearfix"></div>
                                </div>
                              </div>
          {{-- End show sp --}}
        </div>
      </div> 
    </div>

    <!-- Footer -->
    <footer id="colophon" class="site-footer">
      <div class="footer-top">
        <div class="site-inner">
          <div class="container">
            <div class="widget-area">
              <div class="box-footer">
                <section id="text-2" class="widget widget-text">
                  <h2 class="widget-title">Địa chỉ</h2>
                  <div class="textwidget"><p>Số 8 Tôn Thất Thuyết, Mỹ Đình, Hà Nội</p>
                  <p class="more"><a href="contact.html">Bản đồ</a></p></div>
                </section>
              </div>
            </div>
      
            <div class="widget-area">
              <div class="box-footer">
                <section id="text-3" class="widget widget-text"><h2 class="widget-title">Liên hệ</h2>
                  <div class="textwidget"><p>Tel :  0123456789<br>E :  aptech@aptech.com</p>
                  <p class="more"><a href="contact.html">Gửi tin nhắn</a></p></div>
                </section>
              </div>
            </div>
            
            <div class="widget-area">
              <div class="box-footer">
                <section id="nav_menu-2" class="widget widget-text"><h2 class="widget-title">Kết nối</h2>
                  <div class="menu-menu-social-container">
                    <ul id="menu-menu-social" class="menu">
                      <li class="facebook menu-item menu-item-type-custom menu-item-object-custom">
                        <a target="_blank" href="#"><i class="fa fa-facebook"></i></a>
                      </li>
                      <li class="instagram menu-item menu-item-type-custom menu-item-object-custom">
                        <a target="_blank" href="#"><i class="fa fa-instagram"></i></a>
                      </li>
                      <li class="youtube menu-item menu-item-type-custom menu-item-object-custom">
                        <a target="_blank" href="#"><i class="fa fa-youtube-play"></i></a>
                      </li>
                      <li class="twitter menu-item menu-item-type-custom menu-item-object-custom">
                        <a target="_blank" href="#"><i class="fa fa-twitter"></i></a>
                      </li>
                      <li class="github menu-item menu-item-type-custom menu-item-object-custom">
                        <a target="_blank" href="#"><i class="fa fa-github"></i></a>
                      </li>
                    </ul>
                  </div>
                </section>
                <section id="text-6" class="widget widget-text">
                  <div class="textwidget">
                    <p class="sign-more more"><a href="contact.html">Đăng ký nhận tin</a></p>
                  </div>
                </section>
              </div>
            </div>   
          
          </div>
        </div>
      </div>


      <div class="footer-bottom">
        <div class="site-inner">
          <div class="footer-center">
            <div class="site-inner">
              <section class="widget widget-text">
                <div class="textwidget">
                  <img src="img/logo.png" style="max-width: 20%;" class="attachment-full" alt="">
                  <a href="#" target="_blank"><img src="http://banahills.sunworld.vn/wp-content/uploads/2017/09/logo-footer-sungroup.png" alt=""></a>
                </div>
              </section>
            </div>
          </div>
        </div>
      </div>

      <div class="footer clearfix">
        <div class="site-info">
          <span class="site-copyright">© 2018 FPT Aptech &#8211; T1708E</span>
        </div>
      </div>
              
        <nav class="footer-menu">
          <div class="menu-menu-footer-container">
            <ul id="menu-menu-footer" class="footer-links-menu clearfix">
              <li class="menu-item menu-item-type-post_type menu-item-object-page"><a href="#"><span>Hình ảnh</span></a></li>
              <li class="menu-item menu-item-type-post_type_archive menu-item-object-faq"><a href="#"><span>FAQs</span></a></li>
              <li class="menu-item menu-item-type-post_type menu-item-object-page"><a href="contact.html"><span>Liên hệ</span></a></li>
              <li class="menu-item menu-item-type-post_type menu-item-object-page"><a href="contact.html"><span>Tuyển dụng</span></a></li>
              <li class="menu-item menu-item-type-post_type menu-item-object-page"><a href="#"><span>Ứng dụng</span></a></li>
              <li class="menu-item menu-item-type-post_type menu-item-object-page"><a href="contact.html"><span>Bản đồ</span></a></li>
              <li class="menu-item menu-item-type-post_type menu-item-object-page"><a href="#"><span>Chính sách riêng tư</span></a></li>
            </ul>
          </div>
        </nav>
      </div>
    </footer>

    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    

@endsection

