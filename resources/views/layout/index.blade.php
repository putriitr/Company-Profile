<!DOCTYPE html>
<html>

<head>
    @include('partial.head')
</head>

<body>
    <div class="header_section">
        <div class="container">
            @include('partial.nav')
        </div><br><br>
        <!-- banner section start -->
        @include('partial.banner')
        <!-- banner section end -->
    </div>
    <!-- header section end -->
    <!-- about section start -->
    <div id="about" class="about_section layout_padding">
        <div class="container">
            <div class="about_section_2">
                <div class="row">
                    <div class="col-md-6">
                        <div class="about_taital_box">
                            <h1 class="about_taital">About Us</h1>
                            <p class=" about_text">
                                SIMPLAY YOUR DIGITAL SOLUTIONS adalah perusahaan yang bergerak di bidang Perdagangan
                                serta Penyedia barang Elektronik
                                dan Peralatan Pendukungnya yang didirikan pada tahun 2020. Kami menyediakan solusi
                                bisnis yang inovatif kepada perusahaan
                                yang menjadi konsumen kami. Kami mengutamakan mutu serta kepercayaan konsumen dengan
                                harapan melalui pelayanan istimewa
                                dari kami secara profesional menghasilkan integrasi dan kepuasan penuh pelanggan kami.
                                <br><br>
                                SIMPLAY YOUR DIGITAL SOLUTIONS menyediakan berbagai Peralatan Elektronik Perkantoran dan
                                Peralatan Pendukungnya melalui
                                E-commerce yang di kelola PT. Simplay Abyakta Mediatek.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="image_iman"><img src="{{ asset('/template/images/about-img.jpg') }}"
                                class="about_img"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- about section end -->

    <!-- legality section start -->
    <div id="legality" class="contact_section layout_padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h1 class="contact_taital">Legality</h1>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="contact_section_2">
                <div class="row">
                    <div class="col-md-6">
                        <div class="info_box">
                            <i class="fas fa-envelope-open"></i>
                            <div class="info_text">
                                <h4>Surat Keterangan (SK)</h4>
                                <p>S-5552KT/WPJ.20/KP.0803/2022</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="info_box">
                            <i class="fas fa-envelope-open"></i>
                            <div class="info_text">
                                <h4>Nomor Induk Berusaha (NIB)</h4>
                                <p>0220203241088</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- legality section end -->

    <!-- purpose section start -->
    <div id="purpose" class="contact_section layout_padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h1 class="contact_taital">Vision & Mission</h1>
                </div>
            </div>
        </div>
        <div class="container-fluid-1">
            <div class="purpose-section">
                <div class="row-1">
                    <div class="col-md-12">
                        <div class="purpose_box">
                            <img src="template/images/purpose-1.jpg" alt="" class="purpose_img">
                            <div class="purpose_text">
                                <h4>PELAYANAN</h4>
                                <p>Kami memberikan komitmen dalam
                                    layanan yang terbaik dengan didukung
                                    dari sumber daya yang profesional</p>
                            </div>
                        </div>
                        <div class="purpose_box">
                            <img src="template/images/purpose-2.jpg" alt="" class="purpose_img">
                            <div class="purpose_text">
                                <h4>KUALITAS</h4>
                                <p>Kami menyediakan berbagai Peralatan
                                    Elektronik Perkantoran dan Peralatan
                                    Pendukungnya yang sesuai kebutuhan
                                    konsumen yang diperlukan</p>
                            </div>
                        </div>
                        <div class="purpose_box">
                            <img src="template/images/purpose-3.jpg" alt="" class="purpose_img">
                            <div class="purpose_text">
                                <h4>KEPUASAN</h4>
                                <p>Memberikan kepuasan dan layanan
                                    prima serta solusi yang bernilai tambah
                                    kepada seluruh mitra, dan selalu
                                    menjadi mitra pilihan utama</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- purpose section end -->

    <!-- product section start -->
    <div id="products" class="coffee_section layout_padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="coffee_taital">Our Products</h1>
                </div>
            </div>
        </div>
        <div class="coffee_section_2">
            <div id="main_slider" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg-4 col-md-6">
                                    <div class="product_box">
                                        <img src="template/images/product-1.png" alt="Komputer & Laptop"
                                            class="coffee_img">
                                        <h3 class="types_text">Komputer & Laptop</h3>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="product_box">
                                        <img src="template/images/product-2.png" alt="Printer & Scanner"
                                            class="coffee_img">
                                        <h3 class="types_text">Printer & Scanner</h3>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="product_box">
                                        <img src="template/images/product-3.png" alt="Air Conditioner"
                                            class="coffee_img">
                                        <h3 class="types_text">Air Conditioner</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg-4 col-md-6">
                                    <div class="product_box">
                                        <img src="template/images/product-4.png" alt="Televisi & Video Wall"
                                            class="coffee_img">
                                        <h3 class="types_text">Televisi & Video Wall</h3>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="product_box">
                                        <img src="template/images/product-5.png" alt="Kamera & Fotografi"
                                            class="coffee_img">
                                        <h3 class="types_text">Kamera & Fotografi</h3>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="product_box">
                                        <img src="template/images/product-6.png" alt="" class="coffee_img">
                                        <h3 class="types_text">Networking</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
                    <i class="fa fa-arrow-left"></i>
                </a>
                <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
                    <i class="fa fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </div>
    <!-- product section end -->

    <!-- brands section start -->
    <div id="brands" class="contact_section layout_padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h1 class="contact_taital">Products Brands</h1>
                </div>
            </div>
        </div>
        <img src="template/images/brands.jpg" alt="Brands" class="brands_img">
    </div>
    <!-- brands section end -->

    <!-- users section start -->
    <div id="users" class="contact_section layout_padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h1 class="contact_taital">Users</h1>
                </div>
            </div>
        </div>
        <div class="container-fluid-1">
            <div class="users-section">
                <div class="image-box">
                    <div class="row image-row">
                        <div class="col-md-3">
                            <img src="template/images/1.png" alt="User Image" class="users_img">
                        </div>
                        <div class="col-md-3">
                            <img src="template/images/2.png" alt="User Image" class="users_img">
                        </div>
                        <div class="col-md-3">
                            <img src="template/images/3.jpg" alt="User Image" class="users_img">
                        </div>
                        <div class="col-md-3">
                            <img src="template/images/4.jpg" alt="User Image" class="users_img">
                        </div>
                    </div>
                    <div class="row image-row">
                        <div class="col-md-3">
                            <img src="template/images/5.jpeg" alt="User Image" class="users_img">
                        </div>
                        <div class="col-md-3">
                            <img src="template/images/6.png" alt="User Image" class="users_img">
                        </div>
                        <div class="col-md-3">
                            <img src="template/images/7.png" alt="User Image" class="users_img">
                        </div>
                        <div class="col-md-3">
                            <img src="template/images/8.png" alt="User Image" class="users_img">
                        </div>
                    </div>
                    <div class="row image-row">
                        <div class="col-md-4">
                            <img src="template/images/9.jpeg" alt="User Image" class="users_img">
                        </div>
                        <div class="col-md-4">
                            <img src="template/images/10.png" alt="User Image" class="users_img">
                        </div>
                        <div class="col-md-4">
                            <img src="template/images/11.webp" alt="User Image" class="users_img">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- users section end -->

    <!-- footer section start -->
    <div id="footer" class="footer_section layout_padding">
        <div class="container">
            <div class="row">
                <div class="container py-5">
                    <div class="row g-5 justify-content-center">
                        <div class="col-lg-6 col-md-6">
                            <div class="d-flex justify-content-center justify-content-md-start">
                                <img class="img-fluid flex-shrink-0" src="{{ asset('/template/images/logo.png') }}" style="width: 350px; height: 200px; border-radius: 50%;">
                            </div>
                            <div class="social-buttons">
                                <div class="social-item">
                                    <a class="btn btn-outline-light btn-social" href="https://www.google.com/maps/search/pt.+simplay+abyakta+mediatek/@-6.1953698,106.8410311,15z/data=!3m1!4b1?entry=ttu">
                                        <i class="fas fa-map-pin"></i>
                                    </a>
                                    <span class="social-text">Jalan Raya Pondok Gede nomor 81 B, <br>Kel. Lubang Buaya, Kec. Cipayung, <br>Kota Adm. Jakarta Timur, <br>Provinsi DKI Jakarta <br>Kode Pos : 13810</span>
                                </div>
                                <div class="social-item">
                                    <a class="btn btn-outline-light btn-social" href="https://wa.me/6281269980001?text=Halo%20saya%20ingin%20bertanya...">
                                        <i class="fas fa-phone-alt"></i>
                                    </a>
                                    <span class="social-text">021-22097542 | 081269980001</span>
                                </div>
                                <div class="social-item">
                                    <a class="btn btn-outline-light btn-social" href="mailto:info@simplay.co.id?subject=Ask&Help%20Inquiry&body=Dear%20Team%2C%0A%0A">
                                        <i class="fas fa-envelope"></i>
                                    </a>
                                    <span class="social-text">info@simplay.co.id</span>
                                </div>
                                <div class="social-item">
                                    <a class="btn btn-outline-light btn-social" href="https://www.simplay.co.id/">
                                        <i class="fas fa-globe"></i>
                                    </a>
                                    <span class="social-text">www.simplay.co.id</span>
                                </div>
                            </div>

                        </div>

                        <div class="col-lg-6 col-md-6">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15866.435842386914!2d106.8440303!3d-6.1830592!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f449a94a5555%3A0x9fe85e2848835f5d!2sSimplay%20Abyakta%20Mediatek!5e0!3m2!1sid!2sid!4v1721888394173!5m2!1sid!2sid"
                                width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright_section">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <p class="copyright_text">SIMPLAY : Your Digital Solution   "Where Simplicity Meets Innovation"</p>
                </div>
            </div>
        </div>
    </div>
    <!-- footer section end -->
    <!-- Javascript files-->
    @include('partial.javascript')
</body>

</html>
