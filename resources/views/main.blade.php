<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="{{isset($description) ?? $description}}">
    <meta name="keywords" content="{{isset($keywords) ?? $keywords}}">
    <meta name="author" content="Majed Maher">
    <link rel="shortcut icon" type="x-icon" href="{{asset($logo)}}">

    <link rel="stylesheet" href="{{asset('assets/frontend/style.css')}}" />
    <title>Law</title>
    <!-- owl.carousel -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
      integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
      integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />

    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>

    <script type="module" src="{{asset('assets/frontend/maps.js')}}"></script>

    @livewireStyles
  </head>
  <body {{app()->getLocale() == 'en' ? 'class=ltr' : ''}}>


    <livewire:header>


    <div class="content">
      <div id="main" class="banner w-100 d-flex align-items-center bg-white">
        <div class="banner-content">
          <h1 class="banner-title">
            {{$main_title}}
          </h1>
          <p class="banner-description">
            {{$main_description}}
          </p>
          <a href="#services" class="services-btn transition-duration-500"
            >{{__('main.our services')}}
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="16"
              height="16"
              fill="currentColor"
              class="bi bi-arrow-down-circle-fill"
              viewBox="0 0 16 16"
            >
              <path
                d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v5.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V4.5z"
              /></svg
          ></a>
        </div>
      </div>

      {{ isset($slot) ? $slot : null }}

      <div class="section footer">
        <div
          class="footer-content d-grid grid-gap-100 grid-template-3 md-grid-template-1"
        >
          <div class="company-info">
            <div class="logo-footer">
              <img
                src="{{asset($logo)}}"
                alt="logo"
                width="50"
                height="50"
                loading="lazy"
              />
            </div>
            <div class="info-company p-20">
              <span>
                {{$description_footer}}
              </span>
            </div>
            <div
              class="social-links d-flex flex-wrap justify-content-evenly p-20"
            >
              <div class="social-link twitter">
                <a
                  href="{{$twitter}}"
                  target="_blank"
                  rel="noopener noreferrer"
                  aria-label="Twitter"
                >
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="16"
                    height="16"
                    fill="currentColor"
                    class="bi bi-twitter"
                    viewBox="0 0 16 16"
                  >
                    <path
                      d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"
                    />
                  </svg>
                </a>
              </div>
              <div class="social-link linkedin">
                <a
                  href="{{$linkedin}}"
                  target="_blank"
                  rel="noopener noreferrer"
                  aria-label="Linkedin"
                >
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="16"
                    height="16"
                    fill="currentColor"
                    class="bi bi-linkedin"
                    viewBox="0 0 16 16"
                  >
                    <path
                      d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z"
                    />
                  </svg>
                </a>
              </div>
            </div>
          </div>

          <div class="contact-info">
            <div class="contact-title">
              <h4>{{__('main.contact information')}}</h4>
            </div>
            <div class="info-contact mt-50">
              <span>{{__('main.contact information details')}}</span
              >
            </div>
            <div class="info-address d-flex align-items-center gap-10 mt-20">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="512"
                height="512"
                viewBox="0 0 512 512"
              >
                <title>ionicons-v5-k</title>
                <path d="M267,474l-.8-.13A.85.85,0,0,0,267,474Z" />
                <path
                  d="M448.9,187.78a5.51,5.51,0,0,0-10.67-.63h0A5.52,5.52,0,0,1,433,191H417.53a5.48,5.48,0,0,1-2.84-.79l-22.38-13.42a5.48,5.48,0,0,0-2.84-.79h-35.8a5.48,5.48,0,0,0-3.06.93l-44.15,29.43A5.52,5.52,0,0,0,304,211v41.74a5.51,5.51,0,0,0,2.92,4.87l57.89,30.9a5.55,5.55,0,0,1,2.92,4.8L368,316.8a5.53,5.53,0,0,0,2.85,4.75l23.26,12.87a5.54,5.54,0,0,1,2.85,4.83v48.6a5.52,5.52,0,0,0,9.17,4.14c9.38-8.26,22.83-20.32,24.62-23.08q4.44-6.87,8.33-14.07a207.39,207.39,0,0,0,13.6-31C465.36,287.13,455.34,221.14,448.9,187.78Z"
                />
                <path
                  d="M286.4,302.8l-61.33-46a4,4,0,0,0-2.4-.8h-29.1a3.78,3.78,0,0,1-2.68-1.11l-13.72-13.72a4,4,0,0,0-2.83-1.17H121.15a3.79,3.79,0,0,1-2.68-6.47l8.42-8.42a3.78,3.78,0,0,1,2.68-1.11h32.37a8,8,0,0,0,7.7-5.83l6.89-24.5a4,4,0,0,1,2-2.47L206,177.06a3.79,3.79,0,0,0,2.05-3.37v-12.5a3.82,3.82,0,0,1,.68-2.17L223.33,138a3.75,3.75,0,0,1,1.78-1.38l20.43-7.67a3.79,3.79,0,0,0,2.46-3.55V114a3.8,3.8,0,0,0-1.69-3.16L225.83,97.22A3.83,3.83,0,0,0,222,97l-27.88,13.94a3.78,3.78,0,0,1-4-.41L176.9,100.08a3.8,3.8,0,0,1,.1-6l10.74-7.91a3.78,3.78,0,0,0-.09-6.16L170.92,68.34a3.78,3.78,0,0,0-4-.22c-6.05,3.31-23.8,13.11-30.1,17.52a209.48,209.48,0,0,0-68.16,80c-1.82,3.76-4.07,7.59-4.29,11.72s-3.46,13.35-4.81,17.08a3.78,3.78,0,0,0,.24,3.1l35.69,65.58a3.74,3.74,0,0,0,1.38,1.44l37.55,22.54a3.78,3.78,0,0,1,1.81,2.73l7.52,54.54a3.82,3.82,0,0,0,1.61,2.61l29.3,20.14a4,4,0,0,1,1.65,2.48l15.54,73.8a3.6,3.6,0,0,0,.49,1.22c1.46,2.36,7.28,11,14.3,12.28-.65.18-1.23.59-1.88.78a47.63,47.63,0,0,1,5,1.16c2,.54,4,1,6,1.43,3.13.62,3.44,1.1,4.94-1.68,2-3.72,4.29-5,6-5.46a3.85,3.85,0,0,0,2.89-2.9l10.07-46.68a4,4,0,0,1,1.6-2.42l45-31.9a4,4,0,0,0,1.69-3.27V306A4,4,0,0,0,286.4,302.8Z"
                />
                <path
                  d="M262,48s-3.65.21-4.39.23q-8.13.24-16.22,1.12A207.45,207.45,0,0,0,184.21,64c2.43,1.68-1.75,3.22-1.75,3.22L189,80h35l24,12,21-12Z"
                />
                <path
                  d="M354.23,120.06l16.11-14a4,4,0,0,0-.94-6.65l-18.81-8.73a4,4,0,0,0-5.3,1.9l-7.75,16.21a4,4,0,0,0,1.49,5.11l10.46,6.54A4,4,0,0,0,354.23,120.06Z"
                />
                <path
                  d="M429.64,140.67l-5.83-9c-.09-.14-.17-.28-.25-.43-1.05-2.15-9.74-19.7-17-26.51-5.45-5.15-7-3.67-7.43-2.53a3.77,3.77,0,0,1-1.19,1.6L369.1,127.11a4,4,0,0,1-2.51.89H351.66a4,4,0,0,0-2.83,1.17l-12,12a4,4,0,0,0,0,5.66l12,12a4,4,0,0,0,2.83,1.17h75.17a4,4,0,0,0,4-4.17l-.55-13.15A4,4,0,0,0,429.64,140.67Z"
                />
                <path
                  d="M256,72a184,184,0,1,1-130.1,53.9A182.77,182.77,0,0,1,256,72m0-40C132.3,32,32,132.3,32,256S132.3,480,256,480,480,379.7,480,256,379.7,32,256,32Z"
                />
              </svg>
              <span class="address"
                >{{$address}}</span
              >
            </div>
            <div class="info-address d-flex align-items-center gap-10 mt-20">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16"> <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/> </svg>
              <a
                class="phone_number"
                href="tel:0114855800"
                target="_blank"
                rel="noopener noreferrer"
                aria-label="Phone Number"
                ><span>{{$phone_number}}</span></a
              >
            </div>
            <div class="info-email d-flex align-items-center gap-10 mt-20">
              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="40" zoomAndPan="magnify" viewBox="0 0 30 30.000001" height="40" preserveAspectRatio="xMidYMid meet" version="1.0"><defs><clipPath id="id1"><path d="M 3.460938 6.5625 L 26.539062 6.5625 L 26.539062 24.707031 L 3.460938 24.707031 Z M 3.460938 6.5625 " clip-rule="nonzero"/></clipPath></defs><g clip-path="url(#id1)"><path fill="rgb(6.269836%, 5.879211%, 5.099487%)" d="M 24.230469 11.101562 L 15 16.769531 L 5.769531 11.101562 L 5.769531 8.832031 L 15 14.503906 L 24.230469 8.832031 Z M 24.230469 6.5625 L 5.769531 6.5625 C 4.492188 6.5625 3.472656 7.578125 3.472656 8.832031 L 3.460938 22.441406 C 3.460938 23.695312 4.492188 24.707031 5.769531 24.707031 L 24.230469 24.707031 C 25.507812 24.707031 26.539062 23.695312 26.539062 22.441406 L 26.539062 8.832031 C 26.539062 7.578125 25.507812 6.5625 24.230469 6.5625 " fill-opacity="1" fill-rule="nonzero"/></g></svg>
              <a
                class="email"
                href="mailto:info@alshareeflaw.sa"
                target="_blank"
                rel="noopener noreferrer"
                aria-label="Email"
                ><span>{{$email_address}}</span></a
              >
            </div>
            {{-- <div class="info-whatsapp d-flex align-items-center gap-10 mt-20">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-phone-fill" viewBox="0 0 16 16"> <path d="M3 2a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V2zm6 11a1 1 0 1 0-2 0 1 1 0 0 0 2 0z"/> </svg>
              <a
                class="whatsapp"
                href="https://wa.me/message/WFX4WCSCHY4FM1"
                target="_blank"
                rel="noopener noreferrer"
                aria-label="Whatsapp"
                ><span>+966114855800</span></a
              >
            </div> --}}
            <div class="info-work-time d-flex align-items-center gap-10 mt-20">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="512"
                height="512"
                viewBox="0 0 512 512"
              >
                <title>ionicons-v5-g</title>
                <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path d="M2,19c0,1.7,1.3,3,3,3h14c1.7,0,3-1.3,3-3v-8H2V19z M19,4h-2V3c0-0.6-0.4-1-1-1s-1,0.4-1,1v1H9V3c0-0.6-0.4-1-1-1S7,2.4,7,3v1H5C3.3,4,2,5.3,2,7v2h20V7C22,5.3,20.7,4,19,4z"/></svg>
              </svg>
              <span>{{$worktime}}</span>
            </div>
          </div>
          <div class="map w-100" data-latitude="{{$latitude}}" data-longitude="{{$longitude}}" id="map"></div>
        </div>
      </div>
      <div class="footer-copyright text-center p-20">
        <p>{{__('main.copyright') . ' ' . date('Y')}} &copy;
            
        </p>
      </div>
    </div>

    <livewire:floating-buttons>

    <script
      src="https://code.jquery.com/jquery-3.6.4.min.js"
      integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8="
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
      integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    ></script>

    <!-- Google maps -->

    {{-- <script
      async
      defer
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCQavmRXVm8i1SLQTZxyGs-QfCAxGP5Oro&callback=initMap"
    ></script> --}}
    <script async
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCQavmRXVm8i1SLQTZxyGs-QfCAxGP5Oro&callback=initMap">
  </script>
    <!-- AIzaSyBODHeBZOU6ZTS4iWCBtjmc-7FBOpgT8x0 -->
    <script src="{{asset('assets/frontend/script.js')}}"></script>


    @livewireScripts
  </body>
</html>
