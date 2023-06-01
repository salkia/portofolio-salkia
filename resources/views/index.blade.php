<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salkia Agustien</title>
    <link href="/css/app.css" rel="stylesheet">
</head>
<body>
    <!-- Header start -->
    <header class="bg-transparent absolute top-0 left-0 w-full flex items-center z-10">
        <div class="container">
            <div class="flex items-center justify-between relative">
                <div class="px-4">
                    <a href="#home" class="font-bold text-lg text-primary block py-6">Salkia Agustien</a>
                </div>
                <div class="flex items-center px-4">
                    <button id="hamburger" name="hamburger" type="button" class="block absolute right-4 lg:hidden">
                        <span class="hamburger-line transition duration-300 ease-in-out origin-top-left"></span>
                        <span class="hamburger-line transition duration-300 ease-in-out"></span>
                        <span class="hamburger-line transition duration-300 ease-in-out origin-bottom-left"></span>
                    </button>
                <!-- Navbar -->
                    <nav id="nav-menu" class="hidden absolute py-5 bg-white shadow-lg rounded-lg max-w-[250px] w-full right-4 top-full lg:block lg:static lg:bg-transparent lg:max-w-full lg:shadow-none lg:rounded-none">
                        <ul class="block lg:flex">
                            <li class="group">
                                <a href="#home" class="text-base text-dark py-2 mx-8 flex group-hover:text-primary">Beranda</a>
                            </li>
                            <li class="group ">
                                <a href="#about" class="text-base text-dark py-2 mx-8 flex group-hover:text-primary">Tentang Saya</a>
                            </li>
                            <li class="group">
                                <a href="#project" class="text-base text-dark py-2 mx-8 flex group-hover:text-primary">Project</a>
                            </li>
                            <li class="group">
                                <a href="#framework" class="text-base text-dark py-2 mx-8 flex group-hover:text-primary">Framework</a>
                            </li>
                            <li class="group">
                                <a href="#contact" class="text-base text-dark py-2 mx-8 flex group-hover:text-primary">Contact</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- header end -->


    <!-- home start -->
    <section id="home" class="pt-36">
        <div class="container">
            <div class="flex flex-wrap">
                <div class="w-full self-center px-4 lg:w-1/2">
                    <h1 class="text-base font-semibold text-primary md:text-xl">Hello everyone <span class="block font-bold text-dark text-4xl mt-1 lg:text-5xl">Salkia Agustien</span></h1>
                    <h2 class="font-medium text-secondary text-lg mb-5 lg:text-2xl">Mahasiswi</h2>
                    <p class="font-medium text-secondary mb-10 leading-relaxed">Mahasiswi STMIK Mardira mengambil jurusan Manajemen Informatika Bisnis D3 saya banyak belajar belajar bahasa pemprograman mulai dari bahasa c, bahasa c++, Python, HTML, UI seperti Wireframing, Mockup Design dan Prototyping, UX, Pemprograman Berorientasi Objek, figma, corel draw dan Photoshop</p>
                    <a href="#contact" class="text-base font-semibold text-white bg-primary py-3 px-8 rounded-full hover:shadow-lg hover:opacity-80 transition duration-300 ease-in-out">Contact Me</a>
                </div>
                <div class="w-full self-end px-4 pb-10 lg:w-1/2">
                    <div class="relative mt-10 lg:mt-9 lg:right-0">
                        <img src="{{asset('img/kia.png')}}" alt="kia"  class="max-w-full mx-auto">
                        <span class="absolute bottom-0 -z-10 left-1/2 -translate-x-1/2 md:scale-125">
                            <svg width="400" height="400" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                                <path 
                                fill="#14b8a6" 
                                d="M35.5,-36.8C44.7,-26.4,49.8,-13.2,54.7,4.9C59.6,23.1,64.4,46.1,55.3,56.3C46.1,66.6,23.1,64,3,61C-17,57.9,-34,54.5,-42.6,44.2C-51.1,34,-51.2,17,-50.3,0.9C-49.3,-15.1,-47.4,-30.3,-38.8,-40.6C-30.3,-51,-15.1,-56.5,-1,-55.6C13.2,-54.6,26.4,-47.1,35.5,-36.8Z" transform="translate(100 100) scale(1.1)" />
                            </svg>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- home end -->

    <!-- about start -->
    <section id="about" class="pt-36 pb-32">
        <div class="container">
            <div class="flex flex-wrap">
                <div class="w-full px-4 mb-10 lg:w-1/2">
                    <h4 class="font-bold uppercase text-primary text-lg mb-3">Tentang Saya</h4>
                    <h2 class="font-bold text-dark text-3xl mb-5 max-w-md lg:text-4xl">Bagaimana Pembuatan Portofolio ini</h2>
                    <p class="font-medium text-base text-secondary max-w-xl lg:text-lg">Pembuatan Portofolio ini menggunakan sebuah framework laravel, tailwindcss, nodejs. Pertama-tama membuat project baru laravel kemudian instal nodejs di chrome lalu cek di cmd apakah sudah ada nodejsnya apabila dicek sudah ada download npm dan tailwind di cmd, kemudian untuk menjalankan perintah npm run watch (untuk mengaktifkan css) saya menggunakan vscode lalu klik terminal untuk menjalankan perintah npm run watch GOOD LUCK!!!!</p>
                </div>
                <div class="w-full px-4 lg:w-1/2">
                    <h3 class="font-semibold text-dark text-2xl mb-4 lg:text-3xl lg:pt-10">mari berteman</h3>
                    <p class="font-medium text-base text-secondary mb-6 lg:text-lg">Nama saya Salkia Agustien umur saya 20 tahun saya lahir pada tanggal 12 Agustus 2003 saya sekarang kuliah di kampus STMIK Mardira saya mengambil jurusan Manajemen Informatika Bisnis D3 ini dibawah akun sosial media senang bisa berteman dengan banyak orang </p>
                    <div class="flex items-center">
                        <!-- whatsapp -->
                        <a href="https://web.whatsapp.com/" target="_blank" class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-slate-300 text-slate-300 hover:border-primary hover:bg-primary hover:text-white">
                        <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>WhatsApp</title><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/></svg>
                        </a>

                        <!-- instagram -->
                        <a href="https://instagram.com/yxxyiaxyxy" target="_blank" class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-slate-300 text-slate-300 hover:border-primary hover:bg-primary hover:text-white">
                        <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Instagram</title><path d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z"/></svg>
                        </a>

                        <!-- twitter -->
                        <a href="https://twitter.com/" target="_blank" class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-slate-300 text-slate-300 hover:border-primary hover:bg-primary hover:text-white">
                        <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Twitter</title><path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/></svg>
                        </a>

                        <!-- tiktok -->
                        <a href="https://tiktok.com/" target="_blank" class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-slate-300 text-slate-300 hover:border-primary hover:bg-primary hover:text-white">
                        <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>TikTok</title><path d="M12.525.02c1.31-.02 2.61-.01 3.91-.02.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.93-.01 2.92.01 5.84-.02 8.75-.08 1.4-.54 2.79-1.35 3.94-1.31 1.92-3.58 3.17-5.91 3.21-1.43.08-2.86-.31-4.08-1.03-2.02-1.19-3.44-3.37-3.65-5.71-.02-.5-.03-1-.01-1.49.18-1.9 1.12-3.72 2.58-4.96 1.66-1.44 3.98-2.13 6.15-1.72.02 1.48-.04 2.96-.04 4.44-.99-.32-2.15-.23-3.02.37-.63.41-1.11 1.04-1.36 1.75-.21.51-.15 1.07-.14 1.61.24 1.64 1.82 3.02 3.5 2.87 1.12-.01 2.19-.66 2.77-1.61.19-.33.4-.67.41-1.06.1-1.79.06-3.57.07-5.36.01-4.03-.01-8.05.02-12.07z"/></svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>  
    </section>
    <!-- about end -->

    <!-- project start -->
    <section id="project" class="pt-36 pb-16 bg-slate-100">
        <div class="container">
            <div class="w-full px-4">
                <div class="max-w-xl mx-auto text-center mb-16">
                    <h4 class="font-semibold text-lg text-primary mb-2">Portofolio</h4>
                    <h2 class="font-bold text-dark text-3xl mb-4 sm:text-4xl lg:text-5xl">Project Terbaru</h2>
                    <p class="font-medium text-md text-secondary md:text-lg">Ini Project Saya Selama di kampus sebetulnya masih banyak tetapi yang saya masukan disini sedikit saja ya soalnya terlal banyak </p>
                </div>
            </div>
            <!-- gambar 1 -->
            <div class="w-full px-4 flex flex-wrap justify-center xl:w-10/12 xl:mx-auto">
                <div class="mb-12 p-4 md:w-1/2">
                    <div class="rounded-md shadow-md overflow-hidden">
                        <img src="{{asset('img/salkia/3.png')}}" alt="1" width="w-full">
                        </div>
                        <h3 class="font-semibold text-xl text-dark mt-5 mb-3">CI</h3>
                        <p class="font-medium text-base text-secondary">membuat tampilan data diri menggunakan Code Igniter (MVC)</p>
                </div>
                <!-- gambar 2 -->
                <div class="mb-12 p-4 md:w-1/2">
                    <div class="rounded-md shadow-md overflow-hidden">
                        <img src="{{asset('img/salkia/5.png')}}" alt="2" width="w-full">
                        </div>
                        <h3 class="font-semibold text-xl text-dark mt-5 mb-3">Hypertext Preprocessor</h3>
                        <p class="font-medium text-base text-secondary">membuat tabel data kelompok mengguanakan CRUD (Create Read Upadte Delete)</p>
                </div>
                <!-- gambar 3 -->
                <div class="mb-12 p-4 md:w-1/2">
                    <div class="rounded-md shadow-md overflow-hidden">
                        <img src="{{asset('img/salkia/2.png')}}" alt="3" width="w-full">
                        </div>
                        <h3 class="font-semibold text-xl text-dark mt-5 mb-3">Laravel x Boostrap</h3>
                        <p class="font-medium text-base text-secondary">membuat portofolio menggunakan Laravel dan Boostrap</p>
                </div>
                <!-- gambar 4 -->
                <div class="mb-12 p-4 md:w-1/2">
                    <div class="rounded-md shadow-md overflow-hidden">
                        <img src="{{asset('img/salkia/4.png')}}" alt="4" width="w-full">
                        </div>
                        <h3 class="font-semibold text-xl text-dark mt-5 mb-3">Laravel x Tailwindcss</h3>
                        <p class="font-medium text-base text-secondary">membuat portofolio menggunakan framework laravel dan Tailwindcss</p>
                </div>
                <!-- gambar 5 -->
                <div class="mb-12 p-4 md:w-1/2">
                    <div class="rounded-md shadow-md overflow-hidden">
                        <img src="{{asset('img/salkia/6.png')}}" alt="5" width="w-full">
                        </div>
                        <h3 class="font-semibold text-xl text-dark mt-5 mb-3">UI & UX</h3>
                        <p class="font-medium text-base text-secondary">Membuat website tentang program studi Komputerisasi Perpajakan</p>
                </div>
                <!-- gambar 6 -->
                <div class="mb-12 p-4 md:w-1/2">
                    <div class="rounded-md shadow-md overflow-hidden">
                        <img src="{{asset('img/salkia/7.png')}}" alt="4" width="w-full">
                        </div>
                        <h3 class="font-semibold text-xl text-dark mt-5 mb-3">Web Prodi Komputerisasi Perpajakan</h3>
                        <p class="font-medium text-base text-secondary">Membuat web yang sebelumnya telah di design di figma</p>
                </div>
                 <!-- gambar 7 -->
                 <div class="mb-12 p-4 md:w-1/2">
                    <div class="rounded-md shadow-md overflow-hidden">
                        <img src="{{asset('img/salkia/8.png')}}" alt="5" width="w-full">
                        </div>
                        <h3 class="font-semibold text-xl text-dark mt-5 mb-3">User Pesona</h3>
                        <p class="font-medium text-base text-secondary">User persona membantu untuk memahami pengguna dengan lebih baik, mengidentifikasi kebutuhan dan tujuan mereka, serta menggambarkan pengalaman pengguna yang diharapkan</p>
                </div>
                <!-- gambar 8 -->
                <div class="mb-12 p-4 md:w-1/2">
                    <div class="rounded-md shadow-md overflow-hidden">
                        <img src="{{asset('img/salkia/10.png')}}" alt="4" width="w-full">
                        </div>
                        <h3 class="font-semibold text-xl text-dark mt-5 mb-3">User Flow</h3>
                        <p class="font-medium text-base text-secondary">User flow membantu desainer untuk memahami bagaimana pengguna berpindah dari satu langkah ke langkah berikutnya, apa yang diharapkan pengguna melihat atau lakukan di setiap langkah, dan bagaimana pengguna dapat mencapai tujuan mereka dengan mudah dan intuitif.</p>
                </div>
                  <!-- gambar 9 -->
                  <div class="mb-12 p-4 md:w-1/2">
                    <div class="rounded-md shadow-md overflow-hidden">
                        <img src="{{asset('img/salkia/9.png')}}" alt="5" width="w-full">
                        </div>
                        <h3 class="font-semibold text-xl text-dark mt-5 mb-3">Site Map </h3>
                        <p class="font-medium text-base text-secondary">Site map untuk mengorganisir konten situs dengan jelas dan intuitif. Ini membantu pengguna untuk memahami bagaimana menu navigasi dan struktur situs bekerja, sehingga mereka dapat dengan mudah menemukan informasi yang mereka butuhkan.</p>
                </div>
                <!-- gambar 10 -->
                <div class="mb-12 p-4 md:w-1/2">
                    <div class="rounded-md shadow-md overflow-hidden">
                        <img src="{{asset('img/salkia/11.png')}}" alt="4" width="w-full">
                        </div>
                        <h3 class="font-semibold text-xl text-dark mt-5 mb-3">Wireframe</h3>
                        <p class="font-medium text-base text-secondary">Wireframe membantu untuk merencanakan dan mengkomunikasikan konsep desain secara efisien. Ini membantu dalam menentukan penempatan elemen, mengatur tata letak halaman, dan menguji dan mengiterasi ide-ide desain sebelum berlanjut ke tahap pengembangan yang lebih rinci.  </p>
                </div>
                  <!-- gambar 11 -->
                  <div class="mb-12 p-4 md:w-1/2">
                    <div class="rounded-md shadow-md overflow-hidden">
                        <img src="{{asset('img/salkia/12.png')}}" alt="5" width="w-full">
                        </div>
                        <h3 class="font-semibold text-xl text-dark mt-5 mb-3">Mockup</h3>
                        <p class="font-medium text-base text-secondary">Mockup merupakan langkah penting dalam proses desain. Ini membantu memastikan bahwa antarmuka pengguna memiliki tampilan yang menarik, konsisten, dan sesuai dengan tujuan. Dengan menggunakan mockup, dapat menguji dan mengoptimalkan desain sebelum mencapai tahap implementasi yang lebih lanjut, yang menghemat waktu dan sumber daya dalam pengembangan produk.</p>
                </div>
                <!-- gambar 12 -->
                <div class="mb-12 p-4 md:w-1/2">
                    <div class="rounded-md shadow-md overflow-hidden">
                        <img src="{{asset('img/salkia/13.png')}}" alt="4" width="w-full">
                        </div>
                        <h3 class="font-semibold text-xl text-dark mt-5 mb-3">Interactive Prototype</h3>
                        <p class="font-medium text-base text-secondary">Interactive prototype berguna dalam menguji dan mengvalidasi desain sebelum produk atau layanan sebenarnya dikembangkan. Pengguna dapat memberikan umpan balik tentang kemudahan penggunaan, kejelasan informasi, dan kesesuaian desain dengan kebutuhan mereka. Hal ini membantu dalam mengidentifikasi masalah potensial, memperbaiki desain yang tidak efektif, dan meningkatkan pengalaman pengguna sebelum memasuki tahap produksi.</p>
                </div>
                  <!-- gambar 13 -->
                  <div class="mb-12 p-4 md:w-1/2">
                    <div class="rounded-md shadow-md overflow-hidden">
                        <img src="{{asset('img/salkia/14.png')}}" alt="5" width="w-full">
                        </div>
                        <h3 class="font-semibold text-xl text-dark mt-5 mb-3">Pembuatan Logo</h3>
                        <p class="font-medium text-base text-secondary">CorelDRAW adalah perangkat lunak desain vektor yang populer dan terkemuka. Dengan menggunakan CorelDRAW, Memiliki akses ke berbagai alat desain yang kuat dan lengkap, untuk membuat logo dengan presisi tinggi dan profesional dengan adanya logo menjadi familiar dengan suatu produk.</p>
                </div>
                <!-- gambar 14 -->
                <div class="mb-12 p-4 md:w-1/2">
                    <div class="rounded-md shadow-md overflow-hidden">
                        <img src="{{asset('img/salkia/15.png')}}" alt="4" width="w-full">
                        </div>
                        <h3 class="font-semibold text-xl text-dark mt-5 mb-3">Pembuatan Banner</h3>
                        <p class="font-medium text-base text-secondary">Dengan menggunakan CorelDRAW untuk membuat banner, Dapat menciptakan desain yang profesional, unik, dan efektif dan banner ini saya membuat world ocean day karena saya sangat menyukai laut dan terisnpirasi.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- project end -->

    <!-- Framework start -->
    <div id="framework" class="pt-36 pb-32 bg-slate-800">
        <div class="w-full px-4">
            <div class="max-w-xl mx-auto text-center mb-16">
                <h4 class="font-semibold text-lg text-primary mb-2">Framework dan Aplikasi</h4>
                <h2 class="font-bold text-white text-3xl mb-4 sm:text-4xl lg:text-5xl">Yang Pernah Digunakan</h2>
                <p class="font-medium text-md text-secondary md:text-lg">klik cursor ke logo untuk mempelajari framework dan aplikasinya</p>
            </div>
        </div>
        <!-- logo -->
        <div class="w-full px-4">
            <div class="flex flex-wrap items-center justify-center">
                <a href="https://laravel.com/" class="max-w-[100px] mx-4 py-4 grayscale opacity-50 transition duration-500 hover:grayscale-0 hover:opacity-100 lg:mx-6 xl:mx-8">
                    <img src="{{asset('img/framework/1.png')}}" alt="1">
                </a>
                <a href="https://www.php.net/" class="max-w-[120px] mx-4 py-4 grayscale opacity-50 transition duration-500 hover:grayscale-0 hover:opacity-100 lg:mx-6 xl:mx-8">
                    <img src="{{asset('img/framework/2.png')}}" alt="2">
                </a>
                <a href="https://www.codeigniter.com/" class="max-w-[90px] mx-4 py-4 grayscale opacity-50 transition duration-500 hover:grayscale-0 hover:opacity-100 lg:mx-6 xl:mx-8">
                    <img src="{{asset('img/framework/3.png')}}" alt="3">
                </a>
                <a href="https://tailwindcss.com/" class="max-w-[120px] mx-4 py-4 grayscale opacity-50 transition duration-500 hover:grayscale-0 hover:opacity-100 lg:mx-6 xl:mx-8">
                    <img src="{{asset('img/framework/4.png')}}" alt="4">
                </a>
                <a href="https://nodejs.org/en/" class="max-w-[120px] mx-4 py-4 grayscale opacity-50 transition duration-500 hover:grayscale-0 hover:opacity-100 lg:mx-6 xl:mx-8">
                    <img src="{{asset('img/framework/5.png')}}" alt="5">
                </a>
                <a href="https://getbootstrap.com/" class="max-w-[120px] mx-4 py-4 grayscale opacity-50 transition duration-500 hover:grayscale-0 hover:opacity-100 lg:mx-6 xl:mx-8">
                    <img src="{{asset('img/framework/6.png')}}" alt="6">
                </a>
                <a href="https://figma.com/" class="max-w-[120px] mx-4 py-4 grayscale opacity-50 transition duration-500 hover:grayscale-0 hover:opacity-100 lg:mx-6 xl:mx-8">
                    <img src="{{asset('img/framework/7.png')}}" alt="6">
                </a>
                <a href="https://www.coreldraw.com/" class="max-w-[120px] mx-4 py-4 grayscale opacity-50 transition duration-500 hover:grayscale-0 hover:opacity-100 lg:mx-6 xl:mx-8">
                    <img src="{{asset('img/framework/8.png')}}" alt="6">
                </a>
            </div>
        </div>
    </div>
    <!-- Framework end -->

    <!-- contact start -->
    <section id="contact" class="pt-36 pb-32">
        <div class="container">
            <div class="w-full px-4">
            <div class="max-w-xl mx-auto text-center mb-16">
                    <h4 class="font-semibold text-lg text-primary mb-2">Contact</h4>
                    <h2 class="font-bold text-dark text-3xl mb-4 sm:text-4xl lg:text-5xl">Hubungi Saya</h2>
                    <p class="font-medium text-md text-secondary md:text-lg">Silahkan kirim pertanyaan disini</p>
                </div>
            </div>  
            
            <form>
                <div class="w-full lg:w-2/3 lg:mx-auto">
                <div class="w-full px-4 mb-8">
                    <label for="name" class="text-base font-bold text-primary">Nama</label>
                    <input type="text" id="name" class="w-full bg-slate-200 text-dark p-3 rounded-md focus:outline-none focus:ring-primary focus:ring-1 focus:border-primary">
                </div>
                <div class="w-full px-4 mb-8">
                    <label for="email" class="text-base font-bold text-primary">Email</label>
                    <input type="email" id="email" class="w-full bg-slate-200 text-dark p-3 rounded-md focus:outline-none focus:ring-primary focus:ring-1 focus:border-primary">
                </div>
                <div class="w-full px-4 mb-8">
                    <label for="message" class="text-base font-bold text-primary">Pesan</label>
                    <textarea type="email" id="email" class="w-full bg-slate-200 text-dark p-3 rounded-md focus:outline-none focus:ring-primary focus:ring-1 focus:border-primary h-32"></textarea>
                </div>
                <div class="w-full px-4">
                    <button class="text-base font-semibold text-white bg-primary py-3 px-8 rounded-full w-full hover:opacity-80 hover:shadow-lg transition duration-500">Kirim</button>
                </div>
                </div>
            </form>
        </div>
    </section>
    <!-- contact start -->

    <!-- footer start-->
    <footer class="bg-dark pt-24 pb-12">
        <div class="container">
            <div class="flex flex-wrape">
                <div class="w-full text-center justify-center px-4 mb-12 text-slate-300 font-medium md:w-1/2">
                    <h2 class="font-bold text-4xl text-white mb-5">Salkia Agustien</h2>
                    <h3 class="font-bold text-2xl mb-2">Hubungi Saya</h3>
                    <p>salkiaagustien13@gmail.com</p>
                    <p>Jalan kampung Bojong Citepus RT/RW 005/009</p>
                    <p>Bandung</p>
                </div>
                <div class="w-full text-center justify-center px-4 mb-12 md:w-1/2">
                    <h3 class="font-semibold text-xl text-white mb-5">Tautan</h3>
                    <ul class="text-slate-300">
                        <li>
                            <a href="#home" class="inline-block text-base hover:text-primary mb-3">Beranda</a>
                        </li>
                        <li>
                            <a href="#about" class="inline-block text-base hover:text-primary mb-3">About</a>
                        </li>
                        <li>
                            <a href="#project" class="inline-block text-base hover:text-primary mb-3">project</a>
                        </li>
                        <li>
                            <a href="#framework" class="inline-block text-base hover:text-primary mb-3">Framework</a>
                        </li>
                        <li>
                            <a href="#contact" class="inline-block text-base hover:text-primary mb-3">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="w-full pt-10 border-t border-slate-700">
            <div class="flex items-center justify-center mb-5">
                        <!-- whatsapp -->
                        <a href="https://web.whatsapp.com/" target="_blank" class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-slate-300 text-slate-300 hover:border-primary hover:bg-primary hover:text-white">
                        <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>WhatsApp</title><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/></svg>
                        </a>

                        <!-- instagram -->
                        <a href="https://instagram.com/yxxyiaxyxy" target="_blank" class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-slate-300 text-slate-300 hover:border-primary hover:bg-primary hover:text-white">
                        <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Instagram</title><path d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z"/></svg>
                        </a>

                        <!-- twitter -->
                        <a href="https://twitter.com/" target="_blank" class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-slate-300 text-slate-300 hover:border-primary hover:bg-primary hover:text-white">
                        <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Twitter</title><path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/></svg>
                        </a>

                        <!-- tiktok -->
                        <a href="https://tiktok.com/" target="_blank" class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-slate-300 text-slate-300 hover:border-primary hover:bg-primary hover:text-white">
                        <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>TikTok</title><path d="M12.525.02c1.31-.02 2.61-.01 3.91-.02.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.93-.01 2.92.01 5.84-.02 8.75-.08 1.4-.54 2.79-1.35 3.94-1.31 1.92-3.58 3.17-5.91 3.21-1.43.08-2.86-.31-4.08-1.03-2.02-1.19-3.44-3.37-3.65-5.71-.02-.5-.03-1-.01-1.49.18-1.9 1.12-3.72 2.58-4.96 1.66-1.44 3.98-2.13 6.15-1.72.02 1.48-.04 2.96-.04 4.44-.99-.32-2.15-.23-3.02.37-.63.41-1.11 1.04-1.36 1.75-.21.51-.15 1.07-.14 1.61.24 1.64 1.82 3.02 3.5 2.87 1.12-.01 2.19-.66 2.77-1.61.19-.33.4-.67.41-1.06.1-1.79.06-3.57.07-5.36.01-4.03-.01-8.05.02-12.07z"/></svg>
                        </a>
                </div>
                <p class="font-medium text-sm text-slate-500 text-center">Dibuat oleh <a href="https://instagram.com/yxxyiaxyxy" target="_blank" class="font-bold text-primary"> Salkia Agustien</a></p>
            </div>
        </div>
    </footer>
    <!-- footer start-->

    <script src="{{asset('js/kia.js')}}"></script>
</body>
</html>