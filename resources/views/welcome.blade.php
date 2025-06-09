<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
    <style>
        .fade-in-section {
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 0.6s ease-out, transform 0.6s ease-out;
        }
        .fade-in-section.is-visible {
            opacity: 1;
            transform: translateY(0);
        }
    </style>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>CDI ASIA</title>

        <!-- TailwindCSS -->
        <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

        <!-- SwiperJS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
        
        <!-- Custom CSS for Coverflow -->
        <style>
            .hero-section {
                background-image: url('{{ asset('images/Group 1.svg') }}');
                background-size: contain;
                background-repeat: no-repeat;
            }
            .swiper-coverflow {
                width: 100%;
                padding: 3rem 0;
            }
            .swiper-slide {
                background-position: center;
                background-size: cover;
                width: 80%;
                height: 300px;
                border-radius: 8px;
                overflow: hidden;
                box-shadow: 0 4px 20px rgba(0,0,0,0.1);
                transition: all 0.3s ease;
            }
            @media (min-width: 640px) {
                .swiper-slide {
                    width: 60%;
                    height: 350px;
                }
            }
            @media (min-width: 1024px) {
                .swiper-slide {
                    width: 40%;
                    height: 400px;
                }
            }
            @media (min-width: 1280px) {
                .swiper-slide {
                    width: 30%;
                    height: 450px;
                }
            }
            .swiper-slide img {
                display: block;
                width: 100%;
                height: 100%;
                object-fit: cover;
            }
            .swiper-slide-active {
                transform: scale(1.05);
                z-index: 1;
                box-shadow: 0 10px 30px rgba(0,0,0,0.2);
            }
            .swiper-pagination-bullet {
                background: #fff;
                opacity: 0.5;
                width: 10px;
                height: 10px;
                margin: 0 5px !important;
            }
            .swiper-pagination-bullet-active {
                background: #f53;
                opacity: 1;
                transform: scale(1.2);
            }
            .swiper-button-next,
            .swiper-button-prev {
                color: #f53;
                width: 40px;
                height: 40px;
                background: rgba(255, 255, 255, 0.9);
                border-radius: 50%;
                display: flex;
                align-items: center;
                justify-content: center;
                box-shadow: 0 2px 10px rgba(0,0,0,0.1);
                transition: all 0.3s ease;
            }
            .swiper-button-next:hover,
            .swiper-button-prev:hover {
                background: #f53;
                color: white;
                transform: scale(1.1);
            }
            .swiper-button-next:after,
            .swiper-button-prev:after {
                font-size: 1.2rem;
                font-weight: bold;
            }
            .slide-content {
                position: absolute;
                bottom: 0;
                left: 0;
                right: 0;
                background: linear-gradient(to top, rgba(0,0,0,0.8), transparent);
                color: white;
                padding: 1.5rem 1rem 1rem;
                transform: translateY(100%);
                transition: transform 0.3s ease;
                text-align: center;
            }
            .swiper-slide-active .slide-content {
                transform: translateY(0);
            }
            .slide-title {
                font-size: 1.1rem;
                font-weight: 600;
                margin-bottom: 0.3rem;
                text-shadow: 0 1px 3px rgba(0,0,0,0.5);
            }
            .slide-desc {
                font-size: 0.85rem;
                opacity: 0.9;
                text-shadow: 0 1px 2px rgba(0,0,0,0.5);
            }
            @media (max-width: 768px) {
                .swiper-button-next,
                .swiper-button-prev {
                    display: none;
                }
                .swiper-pagination {
                    position: relative;
                    margin-top: 1rem;
                }
            }
        </style>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        
        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @else
            <style>
            </style>
        @endif
    </head>
    <body class="bg-white text-[#1b1b18] font-[Poppins] flex flex-col min-h-screen overflow-x-hidden">
    <nav class="bg-white">
        <div class="mx-auto max-w-7xl px-2 sm:px-6 md:px-8 lg:px-16 h-12 sm:h-16 md:h-18 lg:h-20">
            <div class="relative flex h-16 items-center justify-between mt-2">
            <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
                <!-- Mobile menu button-->
                <button type="button" class="relative inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:ring-2 focus:ring-white focus:outline-hidden focus:ring-inset" aria-controls="mobile-menu" aria-expanded="false">
                <span class="absolute -inset-0.5"></span>
                <span class="sr-only">Open main menu</span>
                <!--
                    Icon when menu is closed.

                    Menu open: "hidden", Menu closed: "block"
                -->
                <svg class="block size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>
                <!--
                    Icon when menu is open.

                    Menu open: "block", Menu closed: "hidden"
                -->
                <svg class="hidden size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                </svg>
                </button>
            </div>
            <div class="flex flex-1 items-center justify-center sm:items-center sm:justify-between">
                <div class="flex shrink-0 items-center">
                    <img class="h-8 w-auto md:h-12 lg:h-16" src="{{ asset('images/cdi new logo warna-02 1.svg') }}" alt="Your Company">
                </div>
                <div class="hidden sm:ml-6 sm:block">
                    <div class="flex space-x-4">
                        <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                        <a href="#" class="rounded-md px-3 py-2 text-sm font-medium text-black hover:bg-gray-700 hover:text-white">Home</a>
                        <a href="#" class="rounded-md px-3 py-2 text-sm font-medium text-black hover:bg-gray-700 hover:text-white">About Us</a>
                        <a href="#" class="rounded-md px-3 py-2 text-sm font-medium text-black hover:bg-gray-700 hover:text-white">Services</a>
                        <a href="#" class="rounded-md px-3 py-2 text-sm font-medium text-black hover:bg-gray-700 hover:text-white">Portofolio</a>
                        <a href="#" class="rounded-md bg-[#3452B4] px-3 py-2 text-sm font-medium text-white" aria-current="page">Contact Us</a>
                    </div>
                </div>
            </div>
            </div>
        </div>

        <!-- Mobile menu, show/hide based on menu state. -->
        <div class="sm:hidden hidden" id="mobile-menu">
            <div class="space-y-1 px-2 pt-2 pb-3">
            <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
            <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-black hover:bg-gray-700 hover:text-white">Home</a>
            <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-black hover:bg-gray-700 hover:text-white">About Us</a>
            <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-black hover:bg-gray-700 hover:text-white">Services</a>
            <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-black hover:bg-gray-700 hover:text-white">Portofolio</a>
            <a href="#" class="block rounded-md bg-[#3452B4] px-3 py-2 text-base font-medium text-white" aria-current="page">Contact Us</a>
            </div>
        </div>
    </nav>
    <div class="bg-[#C4C4C4] flex flex-col items-center justify-center w-full p-0 flex-grow">
        <!-- Hero Section -->
        <section class="hero-section h-screen md:h-96 lg:h-128 xl:h-180 2xl:min-h-screen w-full fade-in-section flex items-center justify-center transition-opacity opacity-100 duration-750 lg:grow starting:opacity-0">
            <main class="flex max-w-[335px] w-full flex-col-reverse lg:max-w-4xl lg:flex-row">
                <div class="flex flex-col items-center justify-center w-full h-full">
                    <img src="{{ asset('images/quote hero-03 1.svg') }}" alt="Hero Image" class="w-full h-full object-cover">
                </div>
            </main>
        </section>

        <!-- Coverflow Carousel Section -->
        <section class="fade-in-section mb-16 py-8 md:mb-20 md:py-12 lg:mb-24 lg:py-16 bg-gray-100 dark:bg-gray-800 overflow-hidden h-sm md:h-md lg:h-lg">
            <div class="container mx-auto px-4 sm:px-6 lg:px-8">
                <h2 class="text-2xl sm:text-3xl lg:text-4xl font-bold text-center mb-6 sm:mb-10 lg:mb-12 dark:text-white">
                    Portfolio Gallery
                </h2>
                
                <!-- Swiper -->
                <div class="relative">
                    <div class="swiper swiper-coverflow">
                        <div class="swiper-wrapper">
                            <!-- Slides -->
                            <div class="swiper-slide">
                                <img src="https://th.bing.com/th/id/OIP.HTTJ81sqVrilLkU1kMVOzAHaEK?rs=1&pid=ImgDetMain" alt="Nature" class="w-full h-full object-cover">
                                <div class="slide-content">
                                    <h3 class="slide-title">Beautiful Nature</h3>
                                    <p class="slide-desc">Explore the beauty of nature</p>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <img src="https://wallpaperaccess.com/full/1321480.jpg" alt="City" class="w-full h-full object-cover">
                                <div class="slide-content">
                                    <h3 class="slide-title">Urban Life</h3>
                                    <p class="slide-desc">Experience the city vibes</p>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <img src="https://wallpaperaccess.com/full/2749338.jpg" alt="Technology" class="w-full h-full object-cover">
                                <div class="slide-content">
                                    <h3 class="slide-title">Modern Tech</h3>
                                    <p class="slide-desc">Latest in technology</p>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <img src="https://wallpapercave.com/wp/wp3819435.jpg" alt="Food" class="w-full h-full object-cover">
                                <div class="slide-content">
                                    <h3 class="slide-title">Delicious Food</h3>
                                    <p class="slide-desc">Taste the difference</p>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <img src="https://th.bing.com/th/id/R.185a4025b2426d2bdb69aac4c2a9e1fe?rik=dFrCXif7Gi87Hw&riu=http%3a%2f%2fthewowstyle.com%2fwp-content%2fuploads%2f2015%2f02%2f6966828-beautiful-mountain-lakes.jpg&ehk=%2bg%2bVQ5VbliISAtOpOXMF0kQcE9UuTuxx58zhi69EO4k%3d&risl=&pid=ImgRaw&r=0" alt="Travel" class="w-full h-full object-cover">
                                <div class="slide-content">
                                    <h3 class="slide-title">Travel More</h3>
                                    <p class="slide-desc">Discover new places</p>
                                </div>
                            </div>
                        </div>
                        <!-- Navigation buttons -->
                        <div class="swiper-button-next hidden md:flex"></div>
                        <div class="swiper-button-prev hidden md:flex"></div>
                        <!-- Pagination -->
                        <div class="swiper-pagination mt-4"></div>
                    </div>
                </div>
            </div>
        </section>

        <section class="fade-in-section mb-16 py-8 md:mb-20 md:py-12 lg:mb-24 lg:py-16 bg-gray-100 dark:bg-gray-800 overflow-hidden h-sm md:h-md lg:h-lg">
            <div class="container mx-auto px-4 sm:px-6 lg:px-8">
                <h2 class="text-2xl sm:text-3xl lg:text-4xl font-bold text-center mb-6 sm:mb-10 lg:mb-12 dark:text-white">
                    Portfolio Gallery
                </h2>
                
                <!-- Swiper -->
                <div class="relative">
                    <div class="swiper swiper-coverflow">
                        <div class="swiper-wrapper">
                            <!-- Slides -->
                            <div class="swiper-slide">
                                <img src="https://th.bing.com/th/id/OIP.HTTJ81sqVrilLkU1kMVOzAHaEK?rs=1&pid=ImgDetMain" alt="Nature" class="w-full h-full object-cover">
                                <div class="slide-content">
                                    <h3 class="slide-title">Beautiful Nature</h3>
                                    <p class="slide-desc">Explore the beauty of nature</p>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <img src="https://wallpaperaccess.com/full/1321480.jpg" alt="City" class="w-full h-full object-cover">
                                <div class="slide-content">
                                    <h3 class="slide-title">Urban Life</h3>
                                    <p class="slide-desc">Experience the city vibes</p>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <img src="https://wallpaperaccess.com/full/2749338.jpg" alt="Technology" class="w-full h-full object-cover">
                                <div class="slide-content">
                                    <h3 class="slide-title">Modern Tech</h3>
                                    <p class="slide-desc">Latest in technology</p>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <img src="https://wallpapercave.com/wp/wp3819435.jpg" alt="Food" class="w-full h-full object-cover">
                                <div class="slide-content">
                                    <h3 class="slide-title">Delicious Food</h3>
                                    <p class="slide-desc">Taste the difference</p>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <img src="https://th.bing.com/th/id/R.185a4025b2426d2bdb69aac4c2a9e1fe?rik=dFrCXif7Gi87Hw&riu=http%3a%2f%2fthewowstyle.com%2fwp-content%2fuploads%2f2015%2f02%2f6966828-beautiful-mountain-lakes.jpg&ehk=%2bg%2bVQ5VbliISAtOpOXMF0kQcE9UuTuxx58zhi69EO4k%3d&risl=&pid=ImgRaw&r=0" alt="Travel" class="w-full h-full object-cover">
                                <div class="slide-content">
                                    <h3 class="slide-title">Travel More</h3>
                                    <p class="slide-desc">Discover new places</p>
                                </div>
                            </div>
                        </div>
                        <!-- Navigation buttons -->
                        <div class="swiper-button-next hidden md:flex"></div>
                        <div class="swiper-button-prev hidden md:flex"></div>
                        <!-- Pagination -->
                        <div class="swiper-pagination mt-4"></div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Initialize Swiper -->
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const swiper = new Swiper('.swiper-coverflow', {
                    effect: 'coverflow',
                    grabCursor: true,
                    centeredSlides: true,
                    loop: true,
                    autoplay: {
                        delay: 3000,
                        disableOnInteraction: false,
                    },
                    speed: 600,
                    slidesPerView: 'auto',
                    coverflowEffect: {
                        rotate: 0,
                        stretch: 0,
                        depth: 0,
                        modifier: 2.5,
                        slideShadows: false,
                    },
                    breakpoints: {
                        // when window width is >= 320px
                        320: {
                            slidesPerView: 1,
                            spaceBetween: 20,
                            coverflowEffect: {
                                rotate: 0,
                                stretch: 0,
                                depth: 100,
                                modifier: 1,
                                slideShadows: false,
                            }
                        },
                        // when window width is >= 640px
                        640: {
                            slidesPerView: 'auto',
                            spaceBetween: 20,
                            coverflowEffect: {
                                rotate: 0,
                                stretch: 0,
                                depth: 100,
                                modifier: 1.5,
                                slideShadows: false,
                            }
                        },
                        // when window width is >= 1024px
                        1024: {
                            slidesPerView: 'auto',
                            spaceBetween: 30,
                            coverflowEffect: {
                                rotate: 0,
                                stretch: 0,
                                depth: 200,
                                modifier: 2,
                                slideShadows: false,
                            }
                        },
                        // when window width is >= 1280px
                        1280: {
                            slidesPerView: 'auto',
                            spaceBetween: 40,
                            coverflowEffect: {
                                rotate: 0,
                                stretch: 0,
                                depth: 300,
                                modifier: 2.5,
                                slideShadows: false,
                            }
                        }
                    },
                    // Preview Setting
                    slidesPerView: 'auto',
                    coverflowEffect: {
                        rotate: 50,
                        stretch: 0,
                        depth: 100,
                        modifier: -0.5,
                        slideShadows: true,
                    },
                    pagination: {
                        el: '.swiper-pagination',
                        clickable: true,
                    },
                    navigation: {
                        nextEl: '.swiper-button-next',
                        prevEl: '.swiper-button-prev',
                    },
                    autoplay: {
                        delay: 3000,
                        disableOnInteraction: false,
                    },
                    loop: true,
                    breakpoints: {
                        640: {
                            slidesPerView: 1,
                            spaceBetween: 20,
                        },
                        768: {
                            slidesPerView: 2,
                            spaceBetween: 30,
                        },
                        1024: {
                            slidesPerView: 3,
                            spaceBetween: 40,
                        },
                    }
                });
            });
        </script>

        @if (Route::has('login'))
            <div class="h-14.5 hidden lg:block"></div>
        @endif
    </div>
    <script>
        // Initialize Intersection Observer for fade-in effects
        document.addEventListener('DOMContentLoaded', function() {
            const fadeSections = document.querySelectorAll('.fade-in-section');
            
            const fadeInOnScroll = new IntersectionObserver((entries, observer) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('is-visible');
                        // Unobserve after animation to prevent re-triggering
                        observer.unobserve(entry.target);
                    }
                });
            }, {
                threshold: 0.1, // Trigger when 10% of the element is visible
                rootMargin: '0px 0px -50px 0px' // Adjust when the animation triggers
            });

            // Observe all fade sections
            fadeSections.forEach(section => {
                fadeInOnScroll.observe(section);
            });
        });
    </script>
    <script>
        // Mobile menu toggle
        const mobileMenuButton = document.querySelector('[aria-controls="mobile-menu"]');
        const mobileMenu = document.getElementById('mobile-menu');
        const menuOpenIcon = mobileMenuButton.querySelector('.block');
        const menuCloseIcon = mobileMenuButton.querySelector('.hidden');

        mobileMenuButton.addEventListener('click', () => {
            const isExpanded = mobileMenuButton.getAttribute('aria-expanded') === 'true';
            
            mobileMenuButton.setAttribute('aria-expanded', !isExpanded);
            mobileMenu.classList.toggle('hidden');
            
            // Toggle icons
            menuOpenIcon.classList.toggle('block');
            menuOpenIcon.classList.toggle('hidden');
            menuCloseIcon.classList.toggle('block');
            menuCloseIcon.classList.toggle('hidden');
        });
    </script>
</html>
