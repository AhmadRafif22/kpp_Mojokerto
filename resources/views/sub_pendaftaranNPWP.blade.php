@extends('layout.sub_menu_layout')

@section('content')
<main class="h-screen">
    <div class="py-5">
        <h1 class="page-title--submenu">Pendaftaran NPWP</h1>
    </div>
    <div class="submenu-card__container">
        <a href="https://ereg.pajak.go.id" target="_blank">
            <div class="submenu-card">
                <div class="submenu-card__img">
                    <img src="{{ asset('images/Vector.png') }}" alt="" class="m-auto">
                </div>
                <div class="submenu-card__content">
                    <div class="submenu-card__content__container">
                        <h2 class="submenu-card__content__title">https://ereg.pajak.go.id</h2>
                        <p class="submenu-card__content__desc">Aplikasi pendaftaran NPWP</p>
                    </div>
                </div>
            </div>
        </a>

        <a href="#" target="_blank">
            <div class="submenu-card">
                <div class="submenu-card__img">
                    <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg" class="m-auto">
                        <path d="M24.0137 25.0098C23.5254 23.4473 23.5352 20.4297 23.8184 20.4297C24.6387 20.4297 24.5605 24.0332 24.0137 25.0098ZM23.8477 29.6191C23.0957 31.5918 22.1582 33.8477 21.0742 35.7422C22.8613 35.0586 24.8828 34.0625 27.2168 33.6035C25.9766 32.666 24.7852 31.3184 23.8477 29.6191ZM14.6582 41.8066C14.6582 41.8848 15.9473 41.2793 18.0664 37.8809C17.4121 38.4961 15.2246 40.2734 14.6582 41.8066ZM30.4688 15.625H43.75V47.6562C43.75 48.9551 42.7051 50 41.4062 50H8.59375C7.29492 50 6.25 48.9551 6.25 47.6562V2.34375C6.25 1.04492 7.29492 0 8.59375 0H28.125V13.2812C28.125 14.5703 29.1797 15.625 30.4688 15.625ZM29.6875 32.4023C27.7344 31.2109 26.4355 29.5703 25.5176 27.1484C25.957 25.3418 26.6504 22.5977 26.123 20.8789C25.6641 18.0078 21.9824 18.291 21.4551 20.2148C20.9668 22.002 21.416 24.5215 22.2461 27.7344C21.1133 30.4297 19.4434 34.043 18.2617 36.1133C18.252 36.1133 18.252 36.123 18.2422 36.123C15.5957 37.4805 11.0547 40.4688 12.9199 42.7637C13.4668 43.4375 14.4824 43.7402 15.0195 43.7402C16.7676 43.7402 18.5059 41.9824 20.9863 37.7051C23.5059 36.875 26.2695 35.8398 28.7012 35.4395C30.8203 36.5918 33.3008 37.3438 34.9512 37.3438C37.8027 37.3438 37.998 34.2188 36.875 33.1055C35.5176 31.7773 31.5723 32.1582 29.6875 32.4023ZM43.0664 10.2539L33.4961 0.683594C33.0566 0.244141 32.4609 0 31.8359 0H31.25V12.5H43.75V11.9043C43.75 11.2891 43.5059 10.6934 43.0664 10.2539ZM35.8301 35.1855C36.2305 34.9219 35.5859 34.0234 31.6504 34.3066C35.2734 35.8496 35.8301 35.1855 35.8301 35.1855Z" fill="white"/>
                    </svg>
                </div>
                <div class="submenu-card__content">
                    <div class="submenu-card__content__container">
                        <h2 class="submenu-card__content__title">Petunjuk Pendaftaran</h2>
                        <p class="submenu-card__content__desc">Download Petunjuk Pendaftaran NPWP (PDF)</p>
                    </div>
                </div>
            </div>
        </a>

        <a href="https://wa.me/6282139383701?text=Silahkan%20Isi%20Identitas%20Anda%20terlebih%20dahulu%0A%0ANama%20WP%20%20%20%20%20%20%20%20%20%20%3A%20%0ANPWP%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3A%20%0AJenis%20Konsultasi%20%3A%20Pendaftaran%20NPWP" target="_blank">
            <div class="submenu-card">
                <div class="submenu-card__img">
                    <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg" class="m-auto">
                        <path d="M39.2806 9.48242C35.1888 5.38086 29.7396 3.125 23.9486 3.125C11.9955 3.125 2.26892 12.8516 2.26892 24.8047C2.26892 28.623 3.26501 32.3535 5.15955 35.6445L2.08337 46.875L13.5775 43.8574C16.7416 45.5859 20.306 46.4941 23.9388 46.4941H23.9486C35.892 46.4941 45.8334 36.7676 45.8334 24.8145C45.8334 19.0234 43.3724 13.584 39.2806 9.48242ZM23.9486 42.8418C20.7064 42.8418 17.5326 41.9727 14.7689 40.332L14.1146 39.9414L7.29822 41.7285L9.11462 35.0781L8.68494 34.3945C6.8783 31.5234 5.93103 28.2129 5.93103 24.8047C5.93103 14.873 14.017 6.78711 23.9584 6.78711C28.7728 6.78711 33.2943 8.66211 36.6927 12.0703C40.0912 15.4785 42.181 20 42.1713 24.8145C42.1713 34.7559 33.8802 42.8418 23.9486 42.8418ZM33.8314 29.3457C33.2943 29.0723 30.6283 27.7637 30.1303 27.5879C29.6322 27.4023 29.2709 27.3145 28.9095 27.8613C28.5482 28.4082 27.5131 29.6191 27.1908 29.9902C26.8783 30.3516 26.556 30.4004 26.0189 30.127C22.8353 28.5352 20.7455 27.2852 18.6459 23.6816C18.0892 22.7246 19.2025 22.793 20.2377 20.7227C20.4135 20.3613 20.3256 20.0488 20.1888 19.7754C20.0521 19.502 18.9681 16.8359 18.5189 15.752C18.0795 14.6973 17.6302 14.8438 17.2982 14.8242C16.9857 14.8047 16.6244 14.8047 16.2631 14.8047C15.9017 14.8047 15.3158 14.9414 14.8177 15.4785C14.3197 16.0254 12.9232 17.334 12.9232 20C12.9232 22.666 14.8666 25.2441 15.1302 25.6055C15.4037 25.9668 18.9486 31.4355 24.3881 33.7891C27.8256 35.2734 29.1732 35.4004 30.892 35.1465C31.9369 34.9902 34.0951 33.8379 34.5443 32.5684C34.9935 31.2988 34.9935 30.2148 34.8568 29.9902C34.7299 29.7461 34.3685 29.6094 33.8314 29.3457Z" fill="white"/>
                    </svg>                        
                </div>
                <div class="submenu-card__content">
                    <div class="submenu-card__content__container">
                        <h2 class="submenu-card__content__title">Konsultasi Pendaftaran NPWP</h2>
                        <p class="submenu-card__content__desc">Ajukan pertanyaan via Whatsaap</p>
                    </div>
                </div>
            </div>
        </a>

        <a href="https://www.youtube.com/watch?v=NyAoNVVAnTo" target="_blank">
            <div class="submenu-card">
                <div class="submenu-card__img">
                    <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg" class="m-auto">
                        <g clip-path="url(#clip0_1_3448)">
                        <path d="M48.9552 13.8341C48.3802 11.6688 46.6859 9.96359 44.5347 9.38489C40.6354 8.33331 25 8.33331 25 8.33331C25 8.33331 9.36464 8.33331 5.46532 9.38489C3.31411 9.96368 1.61984 11.6688 1.0448 13.8341C0 17.7586 0 25.9469 0 25.9469C0 25.9469 0 34.1352 1.0448 38.0598C1.61984 40.225 3.31411 41.8592 5.46532 42.4379C9.36464 43.4895 25 43.4895 25 43.4895C25 43.4895 40.6354 43.4895 44.5347 42.4379C46.6859 41.8592 48.3802 40.225 48.9552 38.0598C50 34.1352 50 25.9469 50 25.9469C50 25.9469 50 17.7586 48.9552 13.8341ZM19.8863 33.3813V18.5126L32.9545 25.9471L19.8863 33.3813Z" fill="white"/>
                        </g>
                        <defs>
                        <clipPath id="clip0_1_3448">
                        <rect width="50" height="50" fill="white"/>
                        </clipPath>
                        </defs>
                    </svg>                          
                </div>
                <div class="submenu-card__content">
                    <div class="submenu-card__content__container">
                        <h2 class="submenu-card__content__title">Tutorial Pendaftaran NPWP</h2>
                        <p class="submenu-card__content__desc">Video Petunjuk Pendaftaran NPWP Orang Pribadi</p>
                    </div>
                </div>
            </div>
        </a>

    </div>
</main>

@endsection

