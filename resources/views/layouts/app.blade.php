<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <title>@yield('title', 'Dimgent Technologies') - Разработка электроники</title>
    <meta name="description" content="@yield('meta_description', 'Dimgent Technologies - Разработка электронных устройств на заказ. От концепта до готового изделия.')">
    <meta name="keywords" content="@yield('meta_keywords', 'Dimgent Technologies, разработка электроники, разработка электронных устройств на заказ')">
    <meta name="googlebot" content="index, follow" />
    <meta name="robots" content="@yield('robots', 'index, follow')" />
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700,800" rel="stylesheet" />
    
    <!-- Favicon -->
    <link rel="icon" type="image/ico" href="{{ asset('images/favicon.ico') }}">
    <!-- Yandex.Metrika counter -->
	<script type="text/javascript" >
		(function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
			m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
		(window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

		ym(85067887, "init", {
			clickmap:true,
			trackLinks:true,
			accurateTrackBounce:true
		});
	</script>
	<noscript><div><img src="https://mc.yandex.ru/watch/85067887" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
	<!-- /Yandex.Metrika counter -->

    <!-- Start Google analitics code -->
    <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-76569545-1', 'auto');
    ga('send', 'pageview');

    </script>
    <!-- End Google analitics code -->
    
    <!-- Styles & Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased bg-slate-50 text-slate-800">
    <!-- Navigation -->
    <nav x-data="{ mobileMenuOpen: false, scrolled: false }" 
         x-init="window.addEventListener('scroll', () => { scrolled = window.scrollY > 20 })"
         :class="{ 'bg-white/95 backdrop-blur-md shadow-md': scrolled, 'bg-white': !scrolled }"
         class="fixed top-0 left-0 right-0 z-50 transition-all duration-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-20">
                <!-- Logo -->
                <a href="{{ route('home') }}" class="flex items-center gap-3 group">
                    {{-- <img src="{{ asset('images/logo.png') }}" alt="Dimgent Technologies" class="h-12 w-auto transition-transform group-hover:scale-105"> --}}
                    <div>
                        <span class="block text-lg font-bold text-slate-900 leading-tight">&#47;&#47; Dimgent Technologies</span>
                        <span class="block text-xs text-primary-600 font-medium tracking-wide uppercase">Разработка электроники</span>
                    </div>
                </a>
                
                <!-- Desktop Navigation -->
                <div class="hidden lg:flex items-center gap-1">
                    @php
                        $navItems = [
                            ['route' => 'home', 'label' => 'Главная'],
                            ['route' => 'products', 'label' => 'Разработки'],
                            ['route' => 'services', 'label' => 'Услуги'],
                            ['route' => 'projects', 'label' => 'Проекты'],
                            ['route' => 'about', 'label' => 'О нас'],
                            ['route' => 'contacts', 'label' => 'Контакты'],
                        ];
                    @endphp
                    
                    @foreach($navItems as $item)
                        <a href="{{ route($item['route']) }}" 
                           class="px-4 py-2 text-sm font-medium rounded-lg transition-all duration-200
                                  {{ request()->routeIs($item['route']) 
                                     ? 'text-primary-700 bg-primary-50 text-center' 
                                     : 'text-slate-600 hover:text-primary-600 hover:bg-slate-100 text-center' }}">
                            {{ $item['label'] }}
                        </a>
                    @endforeach
                    
                    <!-- Language Switcher (iOS Toggle Style) -->
                    <div class="ml-4 flex items-center bg-slate-200 rounded-full p-0.5">
                        <span class="px-3 py-1 text-xs font-semibold text-white bg-primary-600 rounded-full shadow-sm">RU</span>
                        <a href="https://dimgent.com"
                           rel="noopener noreferrer"
                           class="px-3 py-1 text-xs font-semibold text-slate-500 hover:text-slate-700 rounded-full transition-all duration-200">
                            EN
                        </a>
                    </div>
                </div>
                
                <!-- Mobile Menu Button -->
                <button @click="mobileMenuOpen = !mobileMenuOpen" 
                        class="lg:hidden p-2 rounded-lg text-slate-600 hover:text-slate-900 hover:bg-slate-100 transition-colors"
                        :aria-expanded="mobileMenuOpen"
                        aria-label="Toggle navigation menu">
                    <svg x-show="!mobileMenuOpen" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                    <svg x-show="mobileMenuOpen" x-cloak class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
            </div>
        </div>
        
        <!-- Mobile Menu -->
        <div x-show="mobileMenuOpen" 
             x-transition:enter="transition ease-out duration-200"
             x-transition:enter-start="opacity-0 -translate-y-4"
             x-transition:enter-end="opacity-100 translate-y-0"
             x-transition:leave="transition ease-in duration-150"
             x-transition:leave-start="opacity-100 translate-y-0"
             x-transition:leave-end="opacity-0 -translate-y-4"
             x-cloak
             class="lg:hidden bg-white border-t border-slate-100 shadow-lg">
            <div class="max-w-7xl mx-auto px-4 py-4 space-y-1">
                @foreach($navItems as $item)
                    <a href="{{ route($item['route']) }}" 
                       @click="mobileMenuOpen = false"
                       class="block px-4 py-3 text-base font-medium rounded-lg transition-colors
                              {{ request()->routeIs($item['route']) 
                                 ? 'text-primary-700 bg-primary-50 text-center' 
                                 : 'text-slate-600 hover:text-primary-600 hover:bg-slate-50 text-center' }}">
                        {{ $item['label'] }}
                    </a>
                @endforeach
                
                <!-- Russian Version Link -->
                <a href="https://dimgent.com"
                   rel="noopener noreferrer"
                   @click="mobileMenuOpen = false"
                   class="block px-4 py-3 text-base font-medium rounded-lg transition-colors text-slate-600 hover:text-primary-600 hover:bg-slate-50 text-center">
                    EN Version
                </a>
            </div>
        </div>
    </nav>
    
    <!-- Main Content -->
    <main class="pt-20">
        @yield('content')
    </main>
    
    <!-- Footer -->
    <footer class="bg-slate-900 text-slate-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Main Footer -->
            <div class="py-16 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12">
                <!-- Company Info -->
                <div class="lg:col-span-2">
                    <div class="flex items-center gap-3 mb-6">
                        {{-- <img src="{{ asset('images/logo.png') }}" alt="Dimgent Technologies" class="h-10 w-auto brightness-0 invert opacity-90"> --}}
                        <div>
                            <span class="block text-lg font-bold text-white">Dimgent Technologies</span>
                            <span class="block text-sm text-primary-400">Разработка электроники</span>
                        </div>
                    </div>
                    <p class="text-slate-400 leading-relaxed max-w-md mb-6">
                        Группа специалистов с более чем 20-летним опытом в области разработки электронных устройств. 
                        От концепта до готового изделия — качественные решения.
                    </p>
                    <div class="flex items-center gap-2 text-slate-400">
                        <svg class="w-5 h-5 text-primary-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                        </svg>
                        <span>Dimgent Technologies</span>
                    </div>
                    <div class="flex items-center gap-2 text-slate-400 mt-3" x-data="obfuscatedPhone(['+375 ', '29 ', '636-', '35-', '97'])" x-cloak>
                        <svg class="w-5 h-5 text-primary-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                        </svg>
                        <a href="#" 
                           @click.prevent="call()" 
                           class="hover:text-primary-400 transition-colors" 
                           x-text="displayPhone">
                        </a>
                    </div>
                </div>
                
                <!-- Quick Links -->
                <div>
                    <h4 class="text-white font-semibold mb-6">Все разделы сайта</h4>
                    <ul class="space-y-3">
                        @foreach(['Главная' => 'home', 'Разработки' => 'products', 'Услуги' => 'services', 'Проекты' => 'projects', 'О нас' => 'about', 'Контакты' => 'contacts'] as $link => $route)
                            <li>
                                <a href="{{ route($route) }}" 
                                   class="text-slate-400 hover:text-primary-400 transition-colors">
                                    {{ $link }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
                
                <!-- Services -->
                <div>
                    <h4 class="text-white font-semibold mb-6">Наши услуги</h4>
                    <ul class="space-y-3 text-slate-400">
                        <li>Разработка электрических схем</li>
                        <li>Разработка программного обеспечения</li>
                        <li>Разработка чертежей печатных плат</li>
                        <li>Производство опытных образцов</li>
                        <li>Техническая поддержка</li>
                    </ul>
                </div>
            </div>
            
            <!-- Bottom Bar -->
            <div class="py-6 border-t border-slate-800 flex flex-col sm:flex-row justify-between items-center gap-4">
                <p class="text-sm text-slate-500">
                    &copy; {{ date('Y') }} &#47;&#47; Dimgent Technologies. Все права защищены.
                </p>
                <p class="text-sm text-slate-500">
                    Website design by <a href="https://sitestar.by/" target="_blank" rel="noopener" class="text-gray-300 text-lg underline hover:text-primary-400 hover:no-underline transition-colors">Sitestar</a>
                </p>
                <div class="flex items-center gap-6 text-sm text-slate-500">
                    <span>Более 50 завершённых проектов</span>
                    <span class="hidden sm:inline">•</span>
                    <span>20+ лет опыта</span>
                </div>
            </div>
        </div>
    </footer>
    
    <!-- Alpine.js cloak style -->
    <style>
        [x-cloak] { display: none !important; }
    </style>
    
    <!-- Email Spam Protection -->
    <script>
        function showEmail() {
            const user = "info";
            const domain = "dimgent.by";
            window.location.href = "mailto:" + user + "@" + domain;
        }
        
        function showEmailByElement(element) {
            const user = element.dataset.user;
            const domain = element.dataset.domain;
            window.location.href = "mailto:" + user + "@" + domain;
        }
    </script>
</body>
</html>
