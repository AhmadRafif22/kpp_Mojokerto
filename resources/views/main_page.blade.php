<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <meta title="title" content="kpp mojokerto">
    <meta name="description"
        content="kpp mojokerto merupakan sebuah sistem adminstrasi pajak yang terpadu, dengan prosedur langkah demi langkah, sistem OnlinePajak memastikan seluruh laporan akurat, dapat dibaca, dan ringkas sesuai dengan peraturan pajak Indonesia">
    <title>Main Page</title>
</head>

<body>
    <header>
        <figure>
            <img src="{{ asset('images/banner.png') }}" alt="foto anggota kpp mojokerto" class="w-screen">
            <figcaption class="bg-banner-kpp -translate-y-[100%] p-2 sm:p-6 sm:text-center lg:p-32">
                <h1 class="text-white font-bold text-xl lg:text-3xl lg:mb-5">KPP Pratama Mojokerto</h1>
                <p class="text-white text-[0.75rem] sm:text-sm lg:text-base">Jl. R.A Basuni No.KM, RW.5, Jampirogo, Kec.
                    Sooko, Kab. Mojokerto
                </p>
            </figcaption>
        </figure>
    </header>
    <main class="pb-10 -mt-5 lg:pb-32 lg:-mt-40">
        <a href="{{ route('sub.pendaftaranNPWP') }}" class="card" role="link">
            <div class="card-content">
                <div class="card-image"><img src="{{ asset('images/NPWP.png') }}" alt="image-npwp" class="h-full">
                </div>
                <div class="card-text">
                    <h2 class="card-title">Pendaftaran <span class="text-warning">NPWP</span></h2>
                    <p class="card-desc">Nomor Pokok Wajib Pajak</p>
                </div>
            </div>
        </a>
        <a href="{{ route('sub.konsultasi') }}" class="card" role="link">
            <div class="card-content">
                <div class="card-image"><img src="{{ asset('images/wa-konsul.png') }}" alt="image-wa-konsul"
                        class="h-full">
                </div>
                <div class="card-text">
                    <h2 class="card-title">Pelayanan <span class="text-warning">Konsultasi</span></h2>
                    <p class="card-desc">Konsultasi Perpajakan Via Whatsapp</p>
                </div>
            </div>
        </a>
        <a href="{{ route('sub.kodeBiling') }}" class="card" role="link">
            <div class="card-content">
                <div class="card-image"><img src="{{ asset('images/kode-billing.png') }}" alt="image-kode-biling"
                        class="h-full">
                </div>
                <div class="card-text">
                    <h2 class="card-title">Kode <span class="text-warning">Billing</span></h2>
                    <p class="card-desc">Layanan Pembuatan Kode Billing</p>
                </div>
            </div>
        </a>
        <a href="{{ route('sub.laporSPTTahunan') }}" class="card" role="link">
            <div class="card-content">
                <div class="card-image"><img src="{{ asset('images/spt-tahunan.png') }}" alt="image-spt-tahunan"
                        class="h-full">
                </div>
                <div class="card-text">
                    <h2 class="card-title">Lapor <span class="text-warning">SPT Tahunan</span></h2>
                    <p class="card-desc">Pelaporan SPT Tahunan, e-Reporting</p>
                </div>
            </div>
        </a>
        <a href="https://www.youtube.com/playlist?list=PLDDScx7l7xS2fT-w5yIhbd6aT0xg4g62O" class="card" role="link" target="_blank">
            <div class="card-content">
                <div class="card-image"><img src="{{ asset('images/tutorial-perpajakan.png') }}"
                        alt="image-tutorial-perpajakan" class="h-full">
                </div>
                <div class="card-text">
                    <h2 class="card-title">Tutorial <span class="text-warning">Perpajakan</span></h2>
                    <p class="card-desc">Video Tutorial Perpajakan</p>
                </div>
            </div>
        </a>
        <a href="https://www.pajak.go.id/formulir-page/" class="card" role="link" target="_blank">
            <div class="card-content">
                <div class="card-image"><img src="{{ asset('images/form-perpajakan.png') }}" alt="image-form-perpajakan"
                        class="h-full">
                </div>
                <div class="card-text">
                    <h2 class="card-title">Formulir <span class="text-warning">Perpajakan</span></h2>
                    <p class="card-desc">Download Formulir Perpajakan</p>
                </div>
            </div>
        </a>
        <a href="https://pajak.go.id/id/peraturan" class="card" role="link" target="_blank">
            <div class="card-content">
                <div class="card-image"><img src="{{ asset('images/peraturan perpajakan.png') }}"
                        alt="image-peraturan-perpajakan" class="h-full">
                </div>
                <div class="card-text">
                    <h2 class="card-title">Peraturan <span class="text-warning">Perpajakan</span></h2>
                    <p class="card-desc">Peraturan Perpajakan Terbaru</p>
                </div>
            </div>
        </a>
        <a href="#" class="card" role="link">
            <div class="card-content">
                <div class="card-image"><img src="{{ asset('images/layanan-tatap-muka.png') }}"
                        alt="image-layanan-tatap-muka" class="h-full">
                </div>
                <div class="card-text">
                    <h2 class="card-title">Layanan <span class="text-warning">Tatap Muka</span></h2>
                    <p class="card-desc">Reservasi Tiket Layanan Tatap Muka di Kantor</p>
                </div>
            </div>
        </a>
        <a href="#" class="card card-lastchild" role="link">
            <div class="card-content">
                <div class="card-image"><img src="{{ asset('images/faq.png') }}" alt="image-faq" class="h-full">
                </div>
                <div class="card-text">
                    <h2 class="card-title">FAQ <span class="text-warning">Perpajakan</span></h2>
                    <p class="card-desc">Tanya Jawab Perpajakan</p>
                </div>
            </div>
        </a>
    </main>
    <footer>
        <p class="bg-main-bg text-white text-sm text-center py-4">&copy; KPP Pratama Mojokerto | 2022</p>
    </footer>
</body>

</html>
