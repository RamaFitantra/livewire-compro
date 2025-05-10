<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="Company Profile Website" />
  <title>Company Profile</title>

  <!-- Vite assets -->
  @vite(['resources/css/app.css', 'resources/js/app.js'])

  <!-- Alpine.js (jika belum termasuk di app.js) -->
  <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
</head>
<body class="bg-gray-100 text-gray-800">

<!-- Navbar -->
<nav x-data="{ open: false }" class="bg-gray-900 shadow-md fixed w-full z-10">
  <div class="max-w-7xl mx-auto px-4 py-3 flex justify-between items-center">
    <div class="text-2xl font-bold mb-4 leading-tight bg-gradient-to-r from-purple-400 via-pink-500 to-blue-500 bg-clip-text text-transparent animate-aurora bg-[length:200%_200%]">Memoneric</div>

    <!-- Tombol hamburger -->
    <button @click="open = !open" class="md:hidden text-white">
      <i class="fas fa-bars text-xl"></i>
    </button>

    <!-- Menu Desktop -->
    <div class="space-x-6 hidden md:flex items-center">
      <a href="#" class="text-white hover:text-purple-400">Home</a>
      <a href="#about" class="text-white hover:text-purple-400">About</a>
      <a href="#services" class="text-white hover:text-purple-400">Services</a>
      <a href="#portfolio" class="text-white hover:text-purple-400">Portfolio</a>
      <a href="#team" class="text-white hover:text-purple-400">Team</a>
      <a href="#testimonials" class="text-white hover:text-purple-400">Testimonials</a>
      <a href="#contact" class="px-4 py-2 rounded-full text-white font-semibold bg-gradient-to-r from-purple-400 via-pink-500 to-blue-500 bg-[length:200%_200%] animate-aurora hover:opacity-90 transition-all shadow-lg">Contact</a>
    </div>
  </div>
    <!-- Menu Mobile -->
  <div x-show="open" class="md:hidden px-4 pb-4 space-y-2">
    <a href="#" class="block text-white hover:text-purple-400">Home</a>
    <a href="#about" class="block text-white hover:text-purple-400">About</a>
    <a href="#services" class="block text-white hover:text-purple-400">Services</a>
    <a href="#portfolio" class="block text-white hover:text-purple-400">Portfolio</a>
    <a href="#team" class="block text-white hover:text-purple-400">Team</a>
    <a href="#testimonials" class="block text-white hover:text-purple-400">Testimonials</a>
    <a href="#contact" class="block w-fit px-4 py-2 rounded-full text-white font-semibold bg-gradient-to-r from-purple-400 via-pink-500 to-blue-500 bg-[length:200%_200%] animate-aurora hover:opacity-90 transition-all shadow-lg">
      Contact
    </a>
  </div>
</nav>

  <!-- Home -->
  <section class="h-screen relative overflow-hidden flex items-center bg-slate-900 text-white px-4">
  <!-- Aurora background animation -->
  <div class="absolute inset-0 z-0 overflow-hidden">
    <div class="aurora absolute top-1/4 left-1/2 w-[120%] h-[120%] rounded-full opacity-50 blur-3xl bg-gradient-to-r from-purple-400 via-pink-500 to-blue-500 animate-spin-slow"></div>
    <div class="aurora absolute bottom-0 right-1/4 w-[120%] h-[120%] rounded-full opacity-40 blur-3xl bg-gradient-to-r from-blue-500 via-indigo-500 to-teal-400 animate-pulse"></div>
  </div>

  <div class="max-w-7xl mx-auto grid md:grid-cols-2 items-center gap-8 w-full">
    <!-- Kolom Teks -->
<!-- Kolom Teks -->
<div class="space-y-6 text-center md:text-left z-0">
  <h1 class="text-4xl md:text-5xl font-bold">Welcome to Memoneric</h1>
  <p class="text-lg md:text-xl">We create amazing digital solutions for your business</p>
  <div class="flex justify-center md:justify-start">
    <a href="https://wa.me/(nomermu)" target="_blank" class="inline-block bg-white text-blue-600 px-6 py-3 rounded-full shadow hover:bg-gray-200 transition">
      Get Started
    </a>
  </div>
</div>

    <!-- Kolom Gambar -->
    <div class="relative flex items-end justify-center z-0">
    <img src="/images/foto4.png" alt="Image 1" class="w-full md:w-[500px] lg:w-[600px] scale-x-[-1] z-10 max-h-[90vh] object-contain">

    </div>
  </div>
</section>
<!-- End: Home -->

  <!-- About Section -->
<section id="about" class="h-screen flex items-center bg-blue-50">
  <div class="max-w-6xl mx-auto px-4 grid md:grid-cols-2 gap-10 items-center w-full">
    
    <!-- Text -->
    <div class="text-gray-800 font-sans">
      <h3 class="uppercase tracking-widest text-sm font-semibold mb-2">About Us</h3>
      <h2 class="text-4xl font-bold mb-4 leading-tight bg-gradient-to-r from-purple-400 via-pink-500 to-blue-500 bg-clip-text text-transparent animate-aurora bg-[length:200%_200%]">
        Why choose Memoneric?
      </h2>

      <p class="text-gray-600 leading-relaxed">
      We are a team of professionals dedicated to creating high-quality digital solutions.
      Our focus is on speed, creativity, and measurable results. With a collaborative approach,
      we help you build web and mobile applications that fit your needs.
      </p>
    </div>

    <!-- Visual or Image -->
    <div>
    <div class="bg-cover bg-center rounded-lg h-64 md:h-72 w-full transform hover:scale-105 transition-transform duration-300 ease-in-out">
      <img src="/images/bg1.jpg" alt="Image 2" class="w-full h-full object-cover rounded-lg">
    </div>
      <p class="text-sm italic text-center text-gray-500 mt-2">
       We are here to support your digital growth.
      </p>
    </div>

  </div>
</section>
<!-- End: About Section -->

  <!-- Services Section -->
  <section id="services" class="bg-white py-20">
  <div class="max-w-6xl mx-auto px-4">
    <h2 class="text-3xl font-bold text-center mb-12">Our Services</h2>
    <div class="grid md:grid-cols-3 gap-8 text-center">
      
      <!-- Web Apps Development -->
      <div>
        <img src="/images/layanan1.png" alt="Web Apps" class="mx-auto mb-4 h-24">
        <h3 class="text-lg font-semibold mb-2">UI/UX Design</h3>
        <div class="bg-gray-100 p-9 rounded-lg shadow">
          <p>Intuitive and engaging designs to provide the best user experience</p>
        </div>
      </div>

      <!-- Mobile Apps Development -->
      <div>
        <img src="/images/layanan2.png" alt="Mobile Apps" class="mx-auto mb-4 h-24">
        <h3 class="text-lg font-semibold mb-2">Mobile Apps Development</h3>
        <div class="bg-gray-100 p-9 rounded-lg shadow">
          <p>Cross-platform mobile app development for Android and iOS</p>
        </div>
      </div>

      <!-- IT Consultants -->
      <div>
        <img src="/images/layanan3.png" alt="IT Consultant" class="mx-auto mb-4 h-24">
        <h3 class="text-lg font-semibold mb-2">IT Consultants</h3>
        <div class="bg-gray-100 p-9 rounded-lg shadow">
          <p>Web & Apps<br>E-Commerce</p>
        </div>
      </div>

    </div>
  </div>
</section>
<!-- End: Services Section -->

<!-- Portfolio Section -->
<section id="portfolio">    
    <div class="relative justify-center bg-slate-900 overflow-visible">
        <div class="w-full max-w-5xl mx-auto px-4 md:px-6 py-24">
        
            <div class="text-center">
                <h2 class="text-3xl font-bold text-white mb-8">Our Products</h2>
              <!-- Aurora background animation -->
              <div class="absolute inset-0 z-0 overflow-hidden">
                  <div class="aurora absolute top-1/4 left-1/2 w-[120%] h-[120%] rounded-full opacity-50 blur-3xl bg-gradient-to-r from-purple-400 via-pink-500 to-blue-500 animate-spin-slow"></div>
                  <div class="aurora absolute bottom-0 right-1/4 w-[120%] h-[120%] rounded-full opacity-40 blur-3xl bg-gradient-to-r from-blue-500 via-indigo-500 to-teal-400 animate-pulse"></div>
                </div>
                <!-- Logo Carousel animation -->
                <div
                    x-data="{}"
                    x-init="$nextTick(() => {
                        let ul = $refs.logos;
                        ul.insertAdjacentHTML('afterend', ul.outerHTML);
                        ul.nextSibling.setAttribute('aria-hidden', 'true');
                    })"
                    class="w-full inline-flex flex-nowrap overflow-visible [mask-image:_linear-gradient(to_right,transparent_0,_black_128px,_black_calc(100%-128px),transparent_100%)]">
                    <ul x-ref="logos" class="flex items-center justify-center md:justify-start [&_li]:mx-8 [&_img]:max-w-none animate-infinite-scroll">
                        <li>
                            <img src="/images/robot1.png" alt="1" class="h-24 hover:scale-150 transition-transform duration-300"/>
                        </li>
                        <li>
                            <img src="/images/robot2.png" alt="2" class="h-24 hover:scale-150 transition-transform duration-300"/>
                        </li>
                        <li>
                            <img src="/images/robot3.png" alt="3" class="h-24 hover:scale-150 transition-transform duration-300"/>
                        </li>
                        <li>
                            <img src="/images/robot4.png" alt="4" class="h-24 hover:scale-150 transition-transform duration-300"/>
                        </li>
                        <li>
                            <img src="/images/robot5.png" alt="5" class="h-24 hover:scale-150 transition-transform duration-300"/>
                        </li>                        
                    </ul>                
                </div>
                <!-- End: Logo Carousel animation -->       
            </div>
        </div>
    </div>
</section>

<!-- Team Section -->
<section id="team" class="py-20 bg-blue-50">
  <div class="max-w-6xl mx-auto px-4">
    <h2 class="text-3xl font-bold text-center mb-12">Meet the Team</h2>
    <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-8 text-center">
      <div>
        <img src="/images/foto1.png" class="mx-auto rounded-full mb-4 w-24 h-24 sm:w-32 sm:h-32 md:w-40 md:h-40" />
        <h3 class="text-lg font-semibold">Ahyar Pendaki</h3>
        <p class="text-gray-600">Frontend Developer</p>
      </div>
      <div>
        <img src="/images/foto2.png" class="mx-auto rounded-full mb-4 w-24 h-24 sm:w-32 sm:h-32 md:w-40 md:h-40" />
        <h3 class="text-lg font-semibold">Dina Putri</h3>
        <p class="text-gray-600">UI/UX Designer</p>
      </div>
      <div>
        <img src="/images/foto3.png" class="mx-auto rounded-full mb-4 w-24 h-24 sm:w-32 sm:h-32 md:w-40 md:h-40" />
        <h3 class="text-lg font-semibold">Fajar Prasetyo</h3>
        <p class="text-gray-600">Mobile Developer</p>
      </div>
      <div>
        <img src="/images/foto5.png" class="mx-auto rounded-full mb-4 w-24 h-24 sm:w-32 sm:h-32 md:w-40 md:h-40" />
        <h3 class="text-lg font-semibold">Johan</h3>
        <p class="text-gray-600">Backend Developer</p>
      </div>
    </div>
  </div>
</section>


<!-- Testimonial Section -->
<section id="testimonials" class="py-20 bg-white">
  <div class="max-w-6xl mx-auto px-4">
    <h2 class="text-3xl font-bold text-center mb-12">What Our Clients Say</h2>

    <div class="swiper mySwiper">
      <div class="swiper-wrapper">
        <!-- Slide 1 -->
        <div class="swiper-slide">
          <div class="bg-white p-6 rounded-xl shadow-md text-left relative">
            <div class="flex items-center gap-4 mb-4">
              <img src="https://randomuser.me/api/portraits/women/1.jpg" alt="Leslie" class="w-12 h-12 rounded-full border-2 border-white shadow">
              <div>
                <p class="font-semibold">Leslie Alexander</p>
                <p class="text-sm text-gray-500">Manager, Park Int.Ltd</p>
              </div>
            </div>
            <p class="text-gray-700 mb-4">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour</p>
            <div class="flex items-center text-yellow-400">
              ★★★★★
            </div>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="swiper-slide">
          <div class="bg-white p-6 rounded-xl shadow-md text-left relative">
            <div class="flex items-center gap-4 mb-4">
              <img src="https://randomuser.me/api/portraits/men/1.jpg" alt="Cody" class="w-12 h-12 rounded-full border-2 border-white shadow">
              <div>
                <p class="font-semibold">Cody Fisher</p>
                <p class="text-sm text-gray-500">CEO, Waw Int.Ltd</p>
              </div>
            </div>
            <p class="text-gray-700 mb-4">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour</p>
            <div class="flex items-center text-yellow-400">
              ★★★★★
            </div>
          </div>
        </div>

        <!-- Slide 3 -->
        <div class="swiper-slide">
          <div class="bg-white p-6 rounded-xl shadow-md text-left relative">
            <div class="flex items-center gap-4 mb-4">
              <img src="https://randomuser.me/api/portraits/women/2.jpg" alt="Robert" class="w-12 h-12 rounded-full border-2 border-white shadow">
              <div>
                <p class="font-semibold">Ahyar The Stronger</p>
                <p class="text-sm text-gray-500">Climber, Gunung.Ltd</p>
              </div>
            </div>
            <p class="text-gray-700 mb-4">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour</p>
            <div class="flex items-center text-yellow-400">
              ★★★★★
            </div>
          </div>
        </div>
      </div>

      <!-- Pagination Dots -->
      <div class="swiper-pagination mt-8 mb-4 text-center"></div>
    </div>
  </div>
</section>

<!-- SwiperJS CDN -->
<link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"
/>
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

<!-- SwiperJS Init -->
<script>
  const swiper = new Swiper(".mySwiper", {
    loop: true,
    spaceBetween: 30,
    grabCursor: true,
    slidesPerView: 1,
    breakpoints: {
      768: {
        slidesPerView: 2
      },
      1024: {
        slidesPerView: 3
      }
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
  });
</script>


  <!-- Contact Section -->
  <section id="contact" class="bg-blue-50 py-20">
  <div class="max-w-7xl mx-auto px-4 grid md:grid-cols-3 gap-10 text-sm">
    
    <!-- Logo & Company Info -->
    <div>
      <img src="/images/foto4.png" alt="Logo Company" class="h-10 mb-4">
      <p class="mb-4">We believe that the word creative has a positive effect on the world. With creativity, a lot of goodness can be created for your business.</p>
      <div class="flex space-x-4">
        <a href="#" class="text-blue-600"><i class="fab fa-linkedin fa-lg"></i></a>
        <a href="#" class="text-pink-500"><i class="fab fa-instagram fa-lg"></i></a>
      </div>
    </div>

    <!-- Head Office & Working Hours -->
    <div>
      <h4 class="font-semibold mb-2">Head Office</h4>
      <p class="mb-4"> Nyemengan, Tirtonirmolo, Kec. Kasihan, Kabupaten Bantul, Daerah Istimewa Yogyakarta 55184</p>
      <h4 class="font-semibold mb-2">Working Hours</h4>
      <p>Monday – Friday : 09.00–16.00</p>
      <p>Saturday : On Call</p>
      <p>Sunday : On Call</p>
    </div>

    <!-- Solution & Contact -->
    <div>
      <h4 class="font-semibold mb-2">Solution</h4>
      <ul class="mb-4 space-y-1">
        <li>UI/UX Design</li>
        <li>Mobile Apps Development</li>
        <li>IT Consultants</li>
      </ul>
      <h4 class="font-semibold mb-2">Contact Us</h4>
      <p>memoneric@ion.com</p>
      <p>0800 1222 0222</p>
    </div>
    <!-- Versi dengan Font Awesome (CDN) -->
    <a href="https://wa.me/(nomermu)" target="_blank"
      class="fixed bottom-4 right-4 bg-green-500 hover:bg-green-600 text-white p-4 rounded-full shadow-lg z-50">
      <i class="fab fa-whatsapp fa-lg"></i>
    </a>
  </div>
  </section>

  <!-- Footer -->
  <footer class="relative justify-center bg-slate-900 overflow-visible border-t py-6 text-center text-sm text-white">
  <!-- Aurora background animation -->
  <div class="absolute inset-0 z-0 overflow-hidden">
                  <div class="aurora absolute top-1/4 left-1/2 w-[120%] h-[120%] rounded-full opacity-50 blur-3xl bg-gradient-to-r from-purple-400 via-pink-500 to-blue-500 animate-spin-slow"></div>
                  <div class="aurora absolute bottom-0 right-1/4 w-[120%] h-[120%] rounded-full opacity-40 blur-3xl bg-gradient-to-r from-blue-500 via-indigo-500 to-teal-400 animate-pulse"></div>
                </div>  
  <div class="relative z-10">
    &copy; 2025 Memoneric. All rights reserved.
  </div>
  </footer>

</body>
</html>
