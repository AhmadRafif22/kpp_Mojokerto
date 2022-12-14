<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')

    <title>Main Page</title>
</head>

<body>
    <header>
        <figure>
            <img src="{{ asset('images/banner.png') }}" alt="foto anggota kpp mojokerto" class="w-screen">
            <figcaption class="bg-banner-kpp -translate-y-[100%] p-2 sm:p-6 sm:text-center lg:p-32">
                <h1 class="text-white font-bold text-xl lg:text-3xl lg:mb-5">KPP Pratama Mojokerto</h1>
                <p class="text-white text-[0.75rem] sm:text-sm lg:text-base">Jl. R.A Basuni No.KM, RW.5, Jampirogo, Kec. Sooko, Kab. Mojokerto
                </p>
            </figcaption>
        </figure>
    </header>
    <main class="pb-10 -mt-5 lg:pb-32 lg:-mt-40">
        <a href="#" class="card" role="link">
            <div class="card-content">
                <div class="card-image"><img src="{{ asset('images/NPWP.png') }}" alt="" class="h-full">
                </div>
                <div class="card-text">
                    <h2 class="card-title">Pendaftaran <span class="text-[#FFCA19]">NPWP</span></h2>
                    <p class="card-desc">Nomor Pokok Wajib Pajak</p>
                </div>
            </div>
        </a>
        <a href="#" class="card" role="link">
            <div class="card-content">
                <div class="card-image"><img src="{{ asset('images/wa-konsul.png') }}" alt="" class="h-full">
                </div>
                <div class="card-text">
                    <h2 class="card-title">Pelayanan <span class="text-[#FFCA19]">Konsultasi</span></h2>
                    <p class="card-desc">Konsultasi Perpajakan Via Whatsapp</p>
                </div>
            </div>
        </a>
        <a href="#" class="card" role="link">
            <div class="card-content">
                <div class="card-image"><img src="{{ asset('images/kode-billing.png') }}" alt="" class="h-full">
                </div>
                <div class="card-text">
                    <h2 class="card-title">Kode <span class="text-[#FFCA19]">Billing</span></h2>
                    <p class="card-desc">Layanan Pembuatan Kode Billing</p>
                </div>
            </div>
        </a>
        <a href="#" class="card" role="link">
            <div class="card-content">
                <div class="card-image"><img src="{{ asset('images/spt-tahunan.png') }}" alt="" class="h-full">
                </div>
                <div class="card-text">
                    <h2 class="card-title">Lapor <span class="text-[#FFCA19]">SPT Tahunan</span></h2>
                    <p class="card-desc">Pelaporan SPT Tahunan, e-Reporting</p>
                </div>
            </div>
        </a>
        <a href="#" class="card" role="link">
            <div class="card-content">
                <div class="card-image"><img src="{{ asset('images/tutorial-perpajakan.png') }}" alt=""
                        class="h-full">
                </div>
                <div class="card-text">
                    <h2 class="card-title">Tutorial <span class="text-[#FFCA19]">Perpajakan</span></h2>
                    <p class="card-desc">Video Tutorial Perpajakan</p>
                </div>
            </div>
        </a>
        <a href="#" class="card" role="link">
            <div class="card-content">
                <div class="card-image"><img src="{{ asset('images/form-perpajakan.png') }}" alt=""
                        class="h-full">
                </div>
                <div class="card-text">
                    <h2 class="card-title">Formulir <span class="text-[#FFCA19]">Perpajakan</span></h2>
                    <p class="card-desc">Download Formulir Perpajakan</p>
                </div>
            </div>
        </a>
        <a href="#" class="card" role="link">
            <div class="card-content">
                <div class="card-image"><img src="{{ asset('images/peraturan perpajakan.png') }}" alt=""
                        class="h-full">
                </div>
                <div class="card-text">
                    <h2 class="card-title">Peraturan <span class="text-[#FFCA19]">Perpajakan</span></h2>
                    <p class="card-desc">Peraturan Perpajakan Terbaru</p>
                </div>
            </div>
        </a>
        <a href="#" class="card" role="link">
            <div class="card-content">
                <div class="card-image"><img src="{{ asset('images/layanan-tatap-muka.png') }}" alt=""
                        class="h-full">
                </div>
                <div class="card-text">
                    <h2 class="card-title">Layanan <span class="text-[#FFCA19]">Tatap Muka</span></h2>
                    <p class="card-desc">Reservasi Tiket Layanan Tatap Muka di Kantor</p>
                </div>
            </div>
        </a>
        <a href="#" class="card card-lastchild" role="link">
            <div class="card-content">
                <div class="card-image"><img src="{{ asset('images/faq.png') }}" alt="" class="h-full">
                </div>
                <div class="card-text">
                    <h2 class="card-title">FAQ <span class="text-[#FFCA19]">Perpajakan</span></h2>
                    <p class="card-desc">Tanya Jawab Perpajakan</p>
                </div>
            </div>
        </a>
    </main>
    <footer>
        <p class="bg-main-bg text-white text-sm text-center py-1">&copy; KPP Pratama Mojokerto | 2022</p>
    </footer>
</body>

</html>
