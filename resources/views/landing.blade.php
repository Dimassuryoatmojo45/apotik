@extends('layouts.landing')

@section('content')
<div class="w-full bg-white flex flex-col justify-center pt-[60px] lg:pt-[120px] md:pt-[120px] sm:pt-[120px]">
    <div class='w-full h-auto grid lg:grid-cols-2 md:grid-cols-2 sm:grid-cols-1 grid-cols-1 lg:flex-row space-y-6 px-4 md:px-8 lg:px-16 lg:py-6 py-3'>
      <div class="w-full space-y-6">
        {{-- <TextGenerateEffect duration={2} filter={true}  words="Optimalkan Bisnis Anda Bersama Hastadewa" /> --}}
        <h1 class="font-bold lg:text-6xl text-5xl bg-gradient-to-r from-hastadewa to-lightHastadewa inline-block text-transparent bg-clip-text">Optimalkan Bisnis Anda Bersama Hastadewa</h1>
        <p data-aos-delay="600" data-aos="fade" data-aos-duration="1000" data-aos-once="true" class="text-grayHastadewa text-base md:text-lg lg:text-xl lg:w-1/2">
          Kami membuat teknologi mudah diakses, efisien, dan menyenangkan untuk membantu 
          apotik dan bisnis Anda berkembang. Ingin lebih efisien? Kami siap membantu.
        </p>
        <a
          data-aos-delay="600" data-aos="fade" data-aos-duration="1000" data-aos-once="true"
          href="https://api.whatsapp.com/send/?phone=6285156281898&text&type=phone_number&app_absent=0"
          class='bg-gradient-to-r lg:from-hastadewa lg:to-lightHastadewa md:from-hastadewa md:to-lightHastadewa from-yellowHastadewa to-lightYellowHastadewa text-white rounded-lg px-6 py-2 fixed lg:static md:static md:w-max lg:w-max right-5 bottom-5 shadow-lg animate-pulse lg:animate-none md:animate-none z-40 lg:z-20 flex items-center'
        >
          {{-- <WhatsAppIcon sx={{ fontSize: 30 }} /> --}}
          <span class="pl-2 italic">Hubungi Kami</span>
        </a>
      </div>
      <div>
        <img data-aos-delay="300" data-aos="fade-left" data-aos-once="true" src={{ asset('/img/landing/hero-rocket.png') }} height="1500" width="1500" alt="Hero Landing Hastadewa" class="h-auto w-full"/>
      </div>
    </div>

    {{-- LAYANAN KAMI --}}
    <div id="layanan" class="relative h-auto w-full bg-gradient-to-tr from-hastadewa to-lightHastadewa text-white text-center py-16 px-4 md:px-8 lg:px-16 flex flex-col justify-between">
      
      {{-- Background Image --}}
      <div class="absolute inset-0">
        <img src="{{ asset('/img/landing/christopher-gower-m_HRfLhgABo-unsplash 1.png') }}" class="object-cover object-center w-full h-full" alt="Background Hastadewa" />
      </div>
      <div class="w-full flex flex-col items-center text-center px-auto">
        <h1 data-aos-delay="300" data-aos="fade-down" data-aos-duration="1000" data-aos-once="true" class='font-bold text-2xl md:text-3xl lg:text-4xl relative z-10'>Layanan Kami</h1>
        <p data-aos-delay="300" data-aos="fade-down" data-aos-duration="1000" data-aos-once="true" class='text-base md:text-lg lg:text-xl relative z-10 lg:w-3/4 md:w-3/4'>
          Kami menawarkan berbagai layanan untuk memastikan bisnis Anda berjalan lancar
        </p>
      </div>

      {{-- Layanan Cards --}}
      <div class="grid grid-cols-1 sm:grid-cols-3 md:grid-cols-3 lg:grid-cols-3 gap-4 relative z-10 mt-10 lg:mt-48 md:mt-48 sm:mt-36 place-items-center">
        @php
            $services = [
                ['image' => '/img/landing/pembuatan software custom.png', 'title' => 'Pembuatan Software Custom', 'action' => 'Dapatkan Sekarang', 'actionLink' => 'https://api.whatsapp.com/send/?phone=6285156281898&text&type=phone_number&app_absent=0'],
                ['image' => '/img/landing/sistem manajemen apotik.png', 'title' => 'Sistem Manajemen Apotik', 'action' => 'Coba Sekarang', 'actionLink' => 'https://api.whatsapp.com/send/?phone=6285156281898&text&type=phone_number&app_absent=0'],
                ['image' => '/img/landing/syn 1.png', 'title' => 'Integrasi Sistem', 'action' => 'Dapatkan Sekarang', 'actionLink' => 'https://api.whatsapp.com/send/?phone=6285156281898&text&type=phone_number&app_absent=0']
            ];
        @endphp

        @foreach ( $services as $index => $service)
          <a data-aos-delay="{{ 600 + ($index * 600) }}" data-aos-once="true" data-aos="fade-down" data-aos-duration="1000" href="{{ $service['actionLink'] }}" target="_blank" class="bg-white rounded-xl px-4 py-6 space-x-4 lg:space-x-0 md:space-x-0 sm:space-x-0 w-full lg:aspect-square md:aspect-square sm:aspect-square lg:max-w-[350px] flex flex-row lg:flex-col md:flex-col sm:flex-col justify-between">
            <div class="lg:relative md:relative sm:relative lg:h-1/2 md:h-1/2 sm:h-1/2 lg:w-full md:w-full sm:w-full flex justify-center">
              <img src="{{ asset($service['image']) }}" height="300" width="300" alt="Layanan Hastadewa" class="h-20 w-auto lg:w-2/3 md:w-2/3 sm:w-2/3 lg:h-auto lg:max-h-[300px] md:max-h-[300px] sm:max-h-[300px] md:h-auto sm:h-auto lg:absolute md:absolute sm:absolute lg:bottom-5 md:bottom-5 sm:bottom-5 aspect-auto" />
            </div>
            <div class="w-2/3 flex flex-col justify-between lg:w-full md:w-full sm:w-full space-y-2 h-full lg:h-1/2 md:h-1/2 sm:h-1/2">
              <h2 class='font-bold text-lg lg:text-3xl md:text-md sm:text-md text-black text-left'>{{ $service['title'] }}</h2>
              <div class="text-hastadewa text-xs md:text-base font-semibold text-left flex items-center space-x-2">
                <div class="border w-4 h-4 flex justify-center items-center border-hastadewa rounded-full">
                  <p>&#8250;</p>
                </div>
                <p>
                  {{ $service['action'] }}
                </p>
              </div>
            </div>
          </a>
        @endforeach
      </div>

    </div>

    <div id="testimoni" class="w-full py-10 space-y-5 px-4 md:px-8 lg:px-16 flex flex-col items-center">
        <h1 data-aos-delay="300" data-aos="fade-down" data-aos-once="true" data-aos-duration="1000" 
            class="font-bold text-hastadewa text-2xl md:text-3xl lg:text-4xl text-center">
            Apa Kata Mereka?
        </h1>
        <p data-aos-delay="300" data-aos="fade-down" data-aos-once="true" data-aos-duration="1000" 
           class="text-base md:text-lg lg:text-xl text-grayHastadewa text-center">
            Beberapa orang yang telah membuktikan dan terbantu dengan layanan Hastadewa.
        </p>
        
        <div data-aos-delay="600" data-aos="fade" data-aos-once="true" data-aos-duration="1000" class="mt-8 w-full overflow-hidden">
            @php
                $testimonials = [
                    ['quote' => 'Dengan sistem manajemen apotek ini, stok obat kami lebih terkontrol dan transaksi jadi lebih cepat. Sangat membantu operasional apotek kami!', 'name' => 'Apotek Farma Sejahtera'],
                    ['quote' => 'Sistem ini memudahkan kami dalam mencatat dan memantau penjualan. Laporan keuangan jadi lebih akurat dan efisien', 'name' => 'Apotek Harapan Ibu'],
                    ['quote' => 'Fitur pemantauan resep pasien meminimalisir kesalahan dan mempercepat proses pelayanan. Ini benar-benar meningkatkan kualitas layanan kami.', 'name' => 'Apotek Sehat Mandiri'],
                    ['quote' => 'Sistem ini sangat membantu dalam mengelola stok obat dan memastikan kami tidak kehabisan barang penting. Proses manajemen jadi lebih mudah dan rapi.', 'name' => 'Apotek Anugerah'],
                    ['quote' => 'Keamanan data pasien yang terjamin dan kemudahan dalam membuat laporan bulanan membuat apotek kami semakin profesional.', 'name' => 'Apotek Kencana'],
                ];
            @endphp
    
            <div class="flex flex-nowrap space-x-4 overflow-x-auto">
                @foreach ($testimonials as $testimonial)
                    <div class="w-[350px] max-w-full relative rounded-2xl border shadow-md px-8 py-6 md:w-[450px] bg-gradient-to-r from-hastadewa to-lightHastadewa">
                        <blockquote>
                            <span class="relative z-20 text-sm leading-[1.6] text-white">
                                {{ $testimonial['quote'] }}
                            </span>
                            <div class="relative z-20 mt-6 flex flex-row items-center">
                                <span class="flex flex-col gap-1">
                                    <span class="text-lg leading-[1.6] text-gray-400">
                                        {{ $testimonial['name'] }}
                                    </span>
                                    <span class="text-sm leading-[1.6] text-gray-400">
                                        <div class="text-[#FFE100] flex">
                                            @for ($i = 0; $i < 5; $i++)
                                                <span>&#9733;</span>
                                            @endfor
                                        </div>
                                    </span>
                                </span>
                            </div>
                        </blockquote>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <div class="w-full flex flex-col items-center justify-center mt-16 px-3">
        <h1 data-aos-delay="300" data-aos="fade-down" data-aos-once="true" data-aos-duration="1000" 
            class="font-bold text-hastadewa text-2xl md:text-3xl lg:text-4xl text-center">
            Disini kami berusaha membantu
        </h1>
        <p data-aos-delay="300" data-aos="fade-down" data-aos-once="true" data-aos-duration="1000" 
            class="text-base md:text-lg lg:text-xl text-grayHastadewa text-center mt-3">
            Hal yang sering orang tanyakan mungkin bisa membantumu
        </p>
        
        <div class="w-full lg:w-3/4 md:w-5/6 sm:w-full space-y-3 mt-10">
            @php
                $items = [
                    ['title' => 'Apa itu Hastadewa?', 'content' => 'Hastadewa adalah software house yang fokus pada pembuatan software custom untuk memenuhi kebutuhan spesifik bisnis Anda.'],
                    ['title' => 'Apa saja produk yang ditawarkan oleh Hastadewa?', 'content' => 'Saat ini, kami menawarkan Sistem Manajemen Apotik sebagai produk utama, yang dirancang untuk mempermudah pengelolaan apotik dengan fitur lengkap.'],
                    ['title' => 'Apakah software yang dibuat dapat disesuaikan?', 'content' => 'Ya, kami menyediakan software custom yang dapat disesuaikan dengan kebutuhan spesifik bisnis Anda.'],
                    ['title' => 'Bagaimana cara melakukan pembelian?', 'content' => 'Anda dapat menghubungi kami melalui email atau telepon yang tersedia di website untuk informasi lebih lanjut tentang pembelian dan implementasi.'],
                ];
            @endphp
            
            @foreach ($items as $index => $item)
                <div data-aos-delay="{{ 600 + ($index * 600) }}" data-aos-once="true" data-aos="fade-down" data-aos-duration="1000">
                    <button onclick="toggleAccordion({{ $index }})" 
                            class="rounded-lg p-4 flex justify-between w-full text-left hover:from-hastadewa/90 hover:to-lightHastadewa/90 shadow bg-gradient-to-r from-hastadewa to-lightHastadewa text-white">
                        <span>{{ $item['title'] }}</span>
                        <span id="icon-{{ $index }}" class="transform transition-transform">▼</span>
                    </button>
                    <div id="content-{{ $index }}" class="h-0 opacity-0 lg:transition-all md:transition-all duration-100 bg-white overflow-hidden">
                        <p class="p-4">{{ $item['content'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <script>
        function toggleAccordion(index) {
            let content = document.getElementById('content-' + index);
            let icon = document.getElementById('icon-' + index);
            if (content.classList.contains('h-0')) {
                content.classList.remove('h-0', 'opacity-0');
                content.classList.add('h-max', 'opacity-100');
                icon.classList.add('rotate-180');
            } else {
                content.classList.remove('h-max', 'opacity-100');
                content.classList.add('h-0', 'opacity-0');
                icon.classList.remove('rotate-180');
            }
        }
    </script>
@endsection