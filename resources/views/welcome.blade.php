<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Si-Akrab - Sistem Administrasi KEMENAG Regional Aceh Barat</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">

</head>

<body>
  <section class="h-100 w-100 bg-white" style="box-sizing: border-box">
    <div class="container-xxl mx-auto p-0  position-relative header-2-2" style="font-family: 'Poppins', sans-serif">
      <nav class="navbar navbar-expand-lg navbar-light">
        <a href="#">
          <img class="img-fluid w-50" src="{{ asset('frontend/images/logo-si-akrab.png') }}"
          alt="" />
        </a>
        <button class="navbar-toggler border-0" type="button" data-bs-toggle="modal" data-bs-target="#targetModal-item">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="modal-item modal fade" id="targetModal-item" tabindex="-1" role="dialog"
          aria-labelledby="targetModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content bg-white border-0">
              <div class="modal-header border-0" style="padding: 2rem; padding-bottom: 0">
                <a class="modal-title" id="targetModalLabel">
                  <!-- <img style="margin-top: 0.5rem"
                    src="http://api.elements.buildwithangga.com/storage/files/2/assets/Header/Header2/Header-2-5.png"
                    alt="" /> -->

                  <img class="img-fluid w-50" src="{{ asset('frontend/images/logo-si-akrab.png') }}"
                  alt="" />
                </a>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body" style="padding: 2rem; padding-top: 0; padding-bottom: 0">
                <ul class="navbar-nav responsive me-auto mt-2 mt-lg-0">
                  <li class="nav-item active">
                    <a class="nav-link" href="#">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Service</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Feature</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                  </li>
                </ul>
              </div>
              <div class="modal-footer border-0 gap-3" style="padding: 2rem; padding-top: 0.75rem">
                <!-- <button class="btn btn-default btn-no-fill">Log In</button> -->
                <a href="{{ route('login') }}" class="btn btn-fill text-white">Log In</a>
              </div>
            </div>
          </div>
        </div>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo">
          <ul class="navbar-nav me-auto mt-2 mt-lg-0">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Service</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Feature</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact</a>
            </li>
          </ul>
          <div class="gap-3">
            <!-- <button class="btn btn-default btn-no-fill">Log In</button> -->
            <!-- <button class="btn btn-fill text-white">Login</button> -->
          </div>
        </div>
      </nav>

      <div>
        <div class="mx-auto d-flex flex-lg-row flex-column hero">
          <!-- Left Column -->
          <div
            class="left-column d-flex flex-lg-grow-1 flex-column align-items-lg-start text-lg-start align-items-center text-center">
            <p class="text-caption text-uppercase">Efektif & Efisien</p>
            <h1 class="title-text-big">
              Sistem Administrasi <br class="d-lg-block d-none" />
              KEMENAG Aceh Barat
            </h1>
            <div class="d-flex flex-sm-row flex-column align-items-center mx-lg-0 mx-auto justify-content-center gap-3">
              <a href="{{ route('login') }}" class="btn d-inline-flex mb-md-0 px-5 btn-try text-white">
                Log In
              </a>
              <!-- <button class="btn btn-outline">
                <div class="d-flex align-items-center">
                  <svg class="me-2" width="13" height="12" viewBox="0 0 13 13" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="M10.9293 7.99988L6.66668 5.15788V10.8419L10.9293 7.99988ZM12.9173 8.27722L5.85134 12.9879C5.80115 13.0213 5.74283 13.0404 5.6826 13.0433C5.62238 13.0462 5.5625 13.0327 5.50934 13.0042C5.45619 12.9758 5.41175 12.9334 5.38075 12.8817C5.34976 12.83 5.33337 12.7708 5.33334 12.7105V3.28922C5.33337 3.22892 5.34976 3.16976 5.38075 3.11804C5.41175 3.06633 5.45619 3.02398 5.50934 2.99552C5.5625 2.96706 5.62238 2.95355 5.6826 2.95644C5.74283 2.95932 5.80115 2.97848 5.85134 3.01188L12.9173 7.72255C12.963 7.75299 13.0004 7.79423 13.0263 7.84261C13.0522 7.89099 13.0658 7.94501 13.0658 7.99988C13.0658 8.05475 13.0522 8.10878 13.0263 8.15716C13.0004 8.20553 12.963 8.24678 12.9173 8.27722Z"
                      fill="#555B61" />
                  </svg>
                  Watch the video
                </div>
              </button> -->
            </div>
          </div>
          <!-- Right Column -->
          <div class="right-column text-center d-flex justify-content-center pe-0">
              
            <img id="img-fluid" class="h-auto mw-100"
              src="{{ asset('frontend/images/service-image.png') }}"
              alt="" />

            <!-- <img id="img-fluid" class="h-auto mw-100"
            src="{{ asset('frontend/images/hero-image.png') }}"
            alt="" /> -->
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="h-100 w-100 bg-white" style="box-sizing: border-box;">
    <div class="empty-2-2 container mx-auto d-flex align-items-center justify-content-center flex-column"
      style="font-family: 'Poppins', sans-serif;">
      <div class="text-center w-100">
        <h1 class="title-text">
          Efektif & Efisien
        </h1>
        <p class="title-caption">
          Sebuah Aplikasi DIGITAL yang mampu menjawab tantangan keterbatasan ruang dan waktu<br
            class="d-sm-block d-none">
          untuk mencapai EFISIENSI yang optimal serta memperluas jangkauan pelayanan <br class="d-sm-block d-none">
          kepada masyarakat yang jauh lebih EFEKTIF.
        </p>
      </div>
    </div>
  </section>
  <section class="h1-00 w-100 bg-white" style="box-sizing: border-box">
    <div class="content-3-2 container-xxl mx-auto  position-relative" style="font-family: 'Poppins', sans-serif">
      <div class="d-flex flex-lg-row flex-column align-items-center">
        <!-- Left Column -->
        <div class="img-hero text-center justify-content-center d-flex mr-5">            
            <img id="img-fluid" class="h-auto mw-100"
            src="{{ asset('frontend/images/hero-image.png') }}"
            alt="" />
        </div>

        <!-- Right Column -->
        <div class="right-column d-flex flex-column align-items-lg-start align-items-center text-lg-start text-center">
          <h2 class="title-text">4 Manfaat dari SI-AKRAB</h2>
          <ul style="padding: 0; margin: 0">
            <li class="list-unstyled" style="margin-bottom: 2rem">
              <h4
                class="title-caption d-flex flex-lg-row flex-column align-items-center justify-content-lg-start justify-content-center">
                <span class="circle text-white d-flex align-items-center justify-content-center">
                  1
                </span>
                Absensi Digital
              </h4>
              <p class="text-caption">
                Setiap absensi pegawai di lingkungan KEMENAG Aceh <br class="d-sm-inline d-none" />
                Barat akan terpantau secara Real Time
              </p>
            </li>
            <li class="list-unstyled" style="margin-bottom: 2rem">
              <h4
                class="title-caption d-flex flex-lg-row flex-column align-items-center justify-content-lg-start justify-content-center">
                <span class="circle text-white d-flex align-items-center justify-content-center">
                  2
                </span>
                Surat Menyurat Digital
              </h4>
              <p class="text-caption">
                Bebas dari penggunaan kertas untuk melakukan <br class="d-sm-inline d-none" /> surat-menyurat
              </p>
            </li>
            <li class="list-unstyled" style="margin-bottom: 2rem">
              <h4
                class="title-caption d-flex flex-lg-row flex-column align-items-center justify-content-lg-start justify-content-center">
                <span class="circle text-white d-flex align-items-center justify-content-center">
                  3
                </span>
                Pengumuman Digital
              </h4>
              <p class="text-caption">
                Menjangkau pengumuman kepada setiap individu pegawai<br class="d-sm-inline d-none" />
                di lingkungan KEMENAG Aceh Barat
              </p>
            </li>
            <li class="list-unstyled" style="margin-bottom: 4rem">
              <h4
                class="title-caption d-flex flex-lg-row flex-column align-items-center justify-content-lg-start justify-content-center">
                <span class="circle text-white d-flex align-items-center justify-content-center">
                  4
                </span>
                Grafik Pendataan Digital
              </h4>
              <p class="text-caption">
                Grafik kinerja pegawai di lingkungan KEMENAG Aceh Barat <br class="d-sm-inline d-none" />
                akan ditampilkan secara Real Time
              </p>
            </li>
          </ul>
          <button class="btn btn-learn text-white">Learn More</button>
        </div>
      </div>
    </div>
  </section>
  <section class="h-100 w-100" style="box-sizing: border-box; background-color: #f2f6ff">
    <div class="content-3-2 container-xxl mx-auto  position-relative" style="font-family: 'Poppins', sans-serif">
      <div class="d-flex flex-lg-row flex-column align-items-center">
        <!-- Left Column -->
        <div class="right-column d-flex flex-column text-lg-start text-center">
          <h1 class="title-text">
            Absensi Digital
          </h1>
          <p class="">
            Setiap absensi pegawai di lingkungan KEMENAG Aceh
            Barat akan terpantau secara Real Time
          </p>
        </div>

        <!-- Right Column -->
        <div class="img-hero text-center justify-content-center d-flex mr-5">            
          <img id="img-fluid" class="h-auto mw-100"
          src="{{ asset('frontend/images/absensi-image.png') }}"
          alt="" />
      </div>
      </div>
    </div>
  </section>
  <section class="h-100 w-100 bg-white" style="box-sizing: border-box">
    <div class="content-2-2 container-xxl mx-auto p-0  position-relative" style="font-family: 'Poppins', sans-serif">
      <div class="text-center title-text">
        <h1 class="text-title">Surat Menyurat</h1>
        <p class="text-caption" style="margin-left: 3rem; margin-right: 3rem">
          Anda akan mudah dalam mengelola surat-menyurat.
        </p>
      </div>

      <div class="grid-padding text-center">
        <div class="row">
          <div class="col-lg-4 column">
            <div class="icon">
              <img src="http://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content2/Content-2-5.png"
                alt="" />
            </div>
            <h3 class="icon-title">Pegawai</h3>
            <p class="icon-caption">
              Pegawai dapat mengirimkan surat kepada
              Kantor KEMENAG Aceh Barat secara Online.
            </p>
          </div>
          <div class="col-lg-4 column">
            <div class="icon">
              <img src="http://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content2/Content-2-6.png"
                alt="" />
            </div>
            <h3 class="icon-title">Operator</h3>
            <p class="icon-caption">
              Operator akan melakukan verifikasi setiap kali terdapat surat
              menyurat yang dilakukan Pegawai kepada Kantor KEMENAG Aceh Barat
            </p>
          </div>
          <div class="col-lg-4 column">
            <div class="icon">
              <img src="http://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content2/Content-2-7.png"
                alt="" />
            </div>
            <h3 class="icon-title">KEMENAG</h3>
            <p class="icon-caption">
              Kantor KEMENAG Aceh Barat menerima hasil verifikasi operator
              dan memproses surat-menyurat teruntuk pegawai yang bersangkutan
            </p>
          </div>
        </div>
      </div>

      <hr>

      <div class="content-3-2 container-xxl mx-auto  position-relative" style="font-family: 'Poppins', sans-serif">
        <div class="d-flex flex-lg-row flex-column align-items-center">
          <!-- Left Column -->
          <div class="img-hero text-center justify-content-center d-flex mr-5">            
              <img id="img-fluid" class="h-auto mw-100"
              src="{{ asset('frontend/images/absensi-image.png') }}"
              alt="" />
          </div>
  
          <!-- Right Column -->
          <div class="right-column d-flex flex-column align-items-lg-start align-items-center text-lg-start text-center">
            <h2 class="title-text">Tanda Tangan Digital</h2>
            <ul style="padding: 0; margin: 0">
              <li class="list-unstyled" style="margin-bottom: 2rem">
                <h4
                  class="title-caption d-flex flex-lg-row flex-column align-items-center justify-content-lg-start justify-content-center">
                  <span class="circle text-white d-flex align-items-center justify-content-center">
                    &#10004;
                  </span>
                  Mudah
                </h4>
                <p class="text-caption">
                  Kantor KEMENAG Aceh Barat cukup menekan satu tombol <br> saja untuk menandatangani dokumen digital.
                </p>
              </li>
              <li class="list-unstyled" style="margin-bottom: 2rem">
                <h4
                  class="title-caption d-flex flex-lg-row flex-column align-items-center justify-content-lg-start justify-content-center">
                  <span class="circle text-white d-flex align-items-center justify-content-center">
                    &#10004;
                  </span>
                  Efektif Dan Efisien
                </h4>
                <p class="text-caption">
                  Tanda tangan digital bisa dilakukan dimana saja dan <br> kapan saja
                </p>
              </li>
            </ul>
            <!-- <button class="btn btn-learn text-white">Learn More</button> -->
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="h-100 w-100" style="box-sizing: border-box; background-color: #f2f6ff">
    <div class="content-3-7 overflow-hidden container-xxl mx-auto position-relative"
      style="font-family: 'Poppins', sans-serif">
      <div class="container mx-auto">
        <div class="d-flex flex-column text-center w-100" style="margin-bottom: 2.25rem">
          <h2 class="title-text">Pengumuman Digital</h2>
          <p class="caption-text mx-auto">
            Memberikan Pengumuman dengan Target <br>
            Pegawai Tertentu
          </p>
        </div>
        <div class="d-flex flex-wrap">
          <div class="card-item position-relative">
            <div class="card-item-outline bg-white d-flex flex-column position-relative overflow-hidden">
              <h2 class="price-value d-flex align-items-center">
                <span>Pengumuman mudah diakses</span>
              </h2>
              <p class="price-caption">
                Pegawai yang memiliki urusan tertentu dangan Kantor KEMENAG Aceh
                Barat akan dengan mudah mendapatkan pengumuman terkini
              </p>
            </div>
          </div>
          <div class="card-item position-relative">
            <div class="card-item-outline bg-white d-flex flex-column position-relative overflow-hidden">
              <h2 class="price-value d-flex align-items-center">
                <span>Transparan</span>
              </h2>
              <p class="price-caption">
                Proses ketatausahaan jauh lebih transparan dan memiliki efisiensi yang tinggi
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="h-100 w-100 bg-white" style="box-sizing: border-box">
    <div class="footer-2-2 container-xxl mx-auto position-relative p-0" style="font-family: 'Poppins', sans-serif">
      <div class="list-footer">
        <div class="row gap-md-0 gap-3">
          <div class="col-lg-3 col-md-6">
            <div class="">
              <div class="list-space">
                <img class="img-fluid w-50" src="{{ asset('frontend/images/logo-si-akrab.png') }}"
                alt="" />
              </div>
              <p style="color: #c7c7c7;">
                Sistem Administrasi
                KEMENAG Aceh Barat</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <h2 class="footer-text-title">Product</h2>
            <nav class="list-unstyled">
              <li class="list-space">
                <a href="" class="list-menu">Absensi Digital</a>
              </li>
              <li class="list-space">
                <a href="" class="list-menu">Surat Menyurat</a>
              </li>
              <li class="list-space">
                <a href="" class="list-menu">Pengumuman Digital</a>
              </li>
              <li class="list-space">
                <a href="" class="list-menu">Grafik Pendataan Digital</a>
              </li>
            </nav>
          </div>
          <div class="col-lg-3 col-md-6">
            <h2 class="footer-text-title">Support</h2>
            <nav class="list-unstyled">
              <li class="list-space">
                <a href="" class="list-menu">Getting Started</a>
              </li>
              <li class="list-space">
                <a href="" class="list-menu">Help Center</a>
              </li>
            </nav>
          </div>
        </div>
      </div>

      <div class="border-color info-footer">
        <div class="">
          <hr class="hr" />
        </div>
        <div class="mx-auto d-flex flex-column flex-lg-row align-items-center footer-info-space gap-4">
          <div class="d-flex title-font font-medium align-items-center gap-4">
            <a href="">
              <svg class="social-media-c" width="30" height="30" viewBox="0 0 30 30" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <circle cx="15" cy="15" r="15" fill="#C7C7C7" />
                <g clip-path="url(#clip0)">
                  <path
                    d="M17.6648 9.65667H19.1254V7.11267C18.8734 7.078 18.0068 7 16.9974 7C14.8914 7 13.4488 8.32467 13.4488 10.7593V13H11.1248V15.844H13.4488V23H16.2981V15.8447H18.5281L18.8821 13.0007H16.2974V11.0413C16.2981 10.2193 16.5194 9.65667 17.6648 9.65667V9.65667Z"
                    fill="white" />
                </g>
                <defs>
                  <clipPath id="clip0">
                    <rect width="16" height="16" fill="white" transform="translate(7 7)" />
                  </clipPath>
                </defs>
              </svg>
            </a>
            <a href="">
              <svg class="social-media-c" width="30" height="30" viewBox="0 0 30 30" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <circle cx="15" cy="15" r="15" fill="#C7C7C7" />
                <g clip-path="url(#clip0)">
                  <path
                    d="M23 10.039C22.405 10.3 21.771 10.473 21.11 10.557C21.79 10.151 22.309 9.513 22.553 8.744C21.919 9.122 21.219 9.389 20.473 9.538C19.871 8.897 19.013 8.5 18.077 8.5C16.261 8.5 14.799 9.974 14.799 11.781C14.799 12.041 14.821 12.291 14.875 12.529C12.148 12.396 9.735 11.089 8.114 9.098C7.831 9.589 7.665 10.151 7.665 10.756C7.665 11.892 8.25 12.899 9.122 13.482C8.595 13.472 8.078 13.319 7.64 13.078C7.64 13.088 7.64 13.101 7.64 13.114C7.64 14.708 8.777 16.032 10.268 16.337C10.001 16.41 9.71 16.445 9.408 16.445C9.198 16.445 8.986 16.433 8.787 16.389C9.212 17.688 10.418 18.643 11.852 18.674C10.736 19.547 9.319 20.073 7.785 20.073C7.516 20.073 7.258 20.061 7 20.028C8.453 20.965 10.175 21.5 12.032 21.5C18.068 21.5 21.368 16.5 21.368 12.166C21.368 12.021 21.363 11.881 21.356 11.742C22.007 11.28 22.554 10.703 23 10.039Z"
                    fill="white" />
                </g>
                <defs>
                  <clipPath id="clip0">
                    <rect width="16" height="16" fill="white" transform="translate(7 7)" />
                  </clipPath>
                </defs>
              </svg>
            </a>
            <a href="">
              <svg class="social-media-p" width="30" height="30" viewBox="0 0 30 30" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M17.8711 15C17.8711 16.5857 16.5857 17.8711 15 17.8711C13.4143 17.8711 12.1289 16.5857 12.1289 15C12.1289 13.4143 13.4143 12.1289 15 12.1289C16.5857 12.1289 17.8711 13.4143 17.8711 15Z"
                  fill="#C7C7C7" />
                <path
                  d="M21.7144 9.92039C21.5764 9.5464 21.3562 9.20789 21.0701 8.93002C20.7923 8.64392 20.454 8.42374 20.0797 8.28572C19.7762 8.16785 19.3203 8.02754 18.4805 7.98932C17.5721 7.94789 17.2997 7.93896 14.9999 7.93896C12.6999 7.93896 12.4275 7.94766 11.5193 7.98909C10.6796 8.02754 10.2234 8.16785 9.92014 8.28572C9.54591 8.42374 9.2074 8.64392 8.92976 8.93002C8.64366 9.20789 8.42348 9.54617 8.28523 9.92039C8.16736 10.2239 8.02705 10.6801 7.98883 11.5198C7.9474 12.428 7.93848 12.7004 7.93848 15.0004C7.93848 17.3002 7.9474 17.5726 7.98883 18.481C8.02705 19.3208 8.16736 19.7767 8.28523 20.0802C8.42348 20.4545 8.64343 20.7927 8.92953 21.0706C9.2074 21.3567 9.54568 21.5769 9.91991 21.7149C10.2234 21.833 10.6796 21.9733 11.5193 22.0115C12.4275 22.053 12.6997 22.0617 14.9997 22.0617C17.3 22.0617 17.5723 22.053 18.4803 22.0115C19.3201 21.9733 19.7762 21.833 20.0797 21.7149C20.8309 21.4251 21.4247 20.8314 21.7144 20.0802C21.8323 19.7767 21.9726 19.3208 22.011 18.481C22.0525 17.5726 22.0612 17.3002 22.0612 15.0004C22.0612 12.7004 22.0525 12.428 22.011 11.5198C21.9728 10.6801 21.8325 10.2239 21.7144 9.92039V9.92039ZM14.9999 19.4231C12.5571 19.4231 10.5768 17.4431 10.5768 15.0002C10.5768 12.5573 12.5571 10.5773 14.9999 10.5773C17.4426 10.5773 19.4229 12.5573 19.4229 15.0002C19.4229 17.4431 17.4426 19.4231 14.9999 19.4231ZM19.5977 11.4361C19.0269 11.4361 18.5641 10.9733 18.5641 10.4024C18.5641 9.83159 19.0269 9.36879 19.5977 9.36879C20.1685 9.36879 20.6313 9.83159 20.6313 10.4024C20.6311 10.9733 20.1685 11.4361 19.5977 11.4361Z"
                  fill="#C7C7C7" />
                <path
                  d="M15 0C6.717 0 0 6.717 0 15C0 23.283 6.717 30 15 30C23.283 30 30 23.283 30 15C30 6.717 23.283 0 15 0ZM23.5613 18.5511C23.5197 19.468 23.3739 20.094 23.161 20.6419C22.7135 21.7989 21.7989 22.7135 20.6419 23.161C20.0942 23.3739 19.468 23.5194 18.5513 23.5613C17.6328 23.6032 17.3394 23.6133 15.0002 23.6133C12.6608 23.6133 12.3676 23.6032 11.4489 23.5613C10.5322 23.5194 9.90601 23.3739 9.35829 23.161C8.78334 22.9447 8.26286 22.6057 7.83257 22.1674C7.39449 21.7374 7.05551 21.2167 6.83922 20.6419C6.62636 20.0942 6.48056 19.468 6.4389 18.5513C6.39656 17.6326 6.38672 17.3392 6.38672 15C6.38672 12.6608 6.39656 12.3674 6.43867 11.4489C6.48033 10.532 6.6259 9.90601 6.83876 9.35806C7.05505 8.78334 7.39426 8.26263 7.83257 7.83257C8.26263 7.39426 8.78334 7.05528 9.35806 6.83899C9.90601 6.62613 10.532 6.48056 11.4489 6.43867C12.3674 6.39679 12.6608 6.38672 15 6.38672C17.3392 6.38672 17.6326 6.39679 18.5511 6.4389C19.468 6.48056 20.094 6.62613 20.6419 6.83876C21.2167 7.05505 21.7374 7.39426 22.1677 7.83257C22.6057 8.26286 22.9449 8.78334 23.161 9.35806C23.3741 9.90601 23.5197 10.532 23.5616 11.4489C23.6034 12.3674 23.6133 12.6608 23.6133 15C23.6133 17.3392 23.6034 17.6326 23.5613 18.5511V18.5511Z"
                  fill="#C7C7C7" />
              </svg>
            </a>
          </div>
          <nav class="mx-auto d-flex flex-wrap align-items-center justify-content-center gap-4">
            <a href="" class="footer-link" style="text-decoration: none">Terms of Service</a>
            <span>|</span>
            <a href="" class="footer-link" style="text-decoration: none">Privacy Policy</a>
            <span>|</span>
            <a href="" class="footer-link" style="text-decoration: none">Licenses</a>
          </nav>
          <nav class="d-flex flex-lg-row flex-column align-items-center justify-content-center">
            <p style="margin: 0">Copyright © 2021 SI-AKRAB</p>
          </nav>
        </div>
      </div>
    </div>
  </section>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
  </script>

  <!-- Password toggle -->
  <script>
    function togglePassword() {
      var x = document.getElementById("password-content-3-5");
      if (x.type === "password") {
        x.type = "text";
        document
          .getElementById("icon-toggle")
          .setAttribute("fill", "#2ec49c");
      } else {
        x.type = "password";
        document
          .getElementById("icon-toggle")
          .setAttribute("fill", "#CACBCE");
      }
    }
  </script>
</body>

</html>