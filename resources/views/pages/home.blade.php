@extends('layouts.app')

@section('title', 'Главная')
@section('meta_description', 'Dimgent Technologies - Разработка электронных устройств на заказ. От концепта до готового изделия. Более 20 лет опыта.')
@section('meta_keywords', 'разработка электроники, разработка печатных плат, разработка электронных устройств на заказ, электрические схемы, разработка электронного оборудования')
@section('robots', 'index, follow')

@section('content')
    <!-- Hero Section -->
    <section class="relative overflow-hidden bg-gradient-to-br from-slate-900 via-slate-800 to-primary-900">
        <!-- Background Pattern -->
        <div class="absolute inset-0 opacity-10">
            <div class="absolute inset-0" style="background-image: url('data:image/svg+xml,%3Csvg width=&quot;60&quot; height=&quot;60&quot; viewBox=&quot;0 0 60 60&quot; xmlns=&quot;http://www.w3.org/2000/svg&quot;%3E%3Cg fill=&quot;none&quot; fill-rule=&quot;evenodd&quot;%3E%3Cg fill=&quot;%23ffffff&quot; fill-opacity=&quot;0.4&quot;%3E%3Cpath d=&quot;M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z&quot;/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');"></div>
        </div>
        
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24 lg:py-32">
            <div class="grid lg:grid-cols-2 gap-12 lg:gap-16 items-center">
                <!-- Hero Content -->
                <div class="text-center lg:text-left">
                    <div class="inline-flex items-center gap-2 px-4 py-2 bg-primary-500/20 rounded-full mb-6">
                        <span class="w-2 h-2 bg-primary-400 rounded-full animate-pulse"></span>
                        <span class="text-primary-300 text-sm font-medium">Dimgent Technologies</span>
                    </div>
                    
                    <h1 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold text-white leading-tight mb-6">
                        Разработка
                        <span class="block text-transparent bg-clip-text bg-gradient-to-r from-primary-400 to-cyan-400">
                            электронных устройств
                        </span>
                    </h1>
                    
                    <p class="text-lg sm:text-xl text-slate-300 leading-relaxed mb-8 max-w-xl mx-auto lg:mx-0">
                        Компания «Dimgent Technologies» – это группа специалистов с <strong class="text-white">более чем 20-летним опытом</strong> 
                        в области разработки электронного оборудования — от концепта до готового изделия.
                    </p>
                    
                    <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
                        <a href="{{ route('services') }}" 
                           class="inline-flex items-center justify-center gap-2 px-8 py-4 bg-primary-600 text-white font-semibold rounded-xl
                                  shadow-xl shadow-primary-600/30 hover:bg-primary-500 hover:shadow-2xl hover:shadow-primary-500/40
                                  transform hover:-translate-y-0.5 transition-all duration-200">
                            Наши услуги
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                            </svg>
                        </a>
                        <a href="{{ route('products') }}" 
                           class="inline-flex items-center justify-center gap-2 px-8 py-4 bg-white/10 text-white font-semibold rounded-xl
                                  border border-white/20 hover:bg-white/20 backdrop-blur-sm transition-all duration-200">
                            Наши разработки
                        </a>
                    </div>
                </div>
                
                <!-- Hero Image / Stats -->
                <div class="relative">
                    <div class="bg-gradient-to-br from-white/10 to-white/5 backdrop-blur-sm rounded-3xl p-8 border border-white/10">
                        <div class="grid grid-cols-2 gap-6">
                            <div class="text-center p-6 bg-white/5 rounded-2xl">
                                <div class="text-4xl sm:text-5xl font-extrabold text-white mb-2">20+</div>
                                <div class="text-slate-400 text-sm">Лет опыта</div>
                            </div>
                            <div class="text-center p-6 bg-white/5 rounded-2xl">
                                <div class="text-4xl sm:text-5xl font-extrabold text-white mb-2">50+</div>
                                <div class="text-slate-400 text-sm">Завершённых проектов</div>
                            </div>
                            <div class="text-center p-6 bg-white/5 rounded-2xl">
                                <div class="text-4xl sm:text-5xl font-extrabold text-white mb-2">100%</div>
                                <div class="text-slate-400 text-sm">Успешных проектов</div>
                            </div>
                            <div class="text-center p-6 bg-white/5 rounded-2xl">
                                <div class="text-4xl sm:text-5xl font-extrabold text-primary-400 mb-2">∞</div>
                                <div class="text-slate-400 text-sm">Поддержка клиентов</div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Decorative Elements -->
                    <div class="absolute -top-4 -right-4 w-24 h-24 bg-primary-500/30 rounded-full blur-2xl"></div>
                    <div class="absolute -bottom-4 -left-4 w-32 h-32 bg-cyan-500/20 rounded-full blur-2xl"></div>
                </div>
            </div>
        </div>
        
        <!-- Wave Separator -->
        <div class="absolute bottom-0 left-0 right-0">
            <svg class="w-full h-16 sm:h-24 fill-slate-50" viewBox="0 0 1440 74" preserveAspectRatio="none">
                <path d="M0,0 C480,74 960,74 1440,0 L1440,74 L0,74 Z"/>
            </svg>
        </div>
    </section>
    
    <!-- Services Overview -->
    <section class="py-20 lg:py-28 bg-slate-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Section Header -->
            <div class="text-center max-w-3xl mx-auto mb-16">
                <span class="inline-block px-4 py-1.5 bg-primary-100 text-primary-700 text-sm font-semibold rounded-full mb-4">
                    Наши направления
                </span>
                <h2 class="text-3xl sm:text-4xl font-bold text-slate-900 mb-4">
                    Полный цикл разработки электроники
                </h2>
                <p class="text-lg text-slate-600 leading-relaxed">
                    Осуществляем полный цикл разработки электронных устройств (от макета до готового изделия), 
                    а также реализацию отдельных стадий.
                </p>
            </div>
            
            <!-- Services Grid -->
            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-8">
                @php
                    $services = [
                        [
                            'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>',
                            'title' => 'Техническое задание',
                            'description' => 'Подготовка и согласование технического задания на необходимое вам электронное устройство.'
                        ],
                        [
                            'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>',
                            'title' => 'Электрические схемы',
                            'description' => 'Разработка электрических схем устройства с оптимальным подбором компонентов.'
                        ],
                        [
                            'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/>',
                            'title' => 'Программное обеспечение',
                            'description' => 'Разработка ПО для микроконтроллеров, встроенных систем и пользовательских интерфейсов.'
                        ],
                        [
                            'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z"/>',
                            'title' => 'Чертежи печатных плат',
                            'description' => 'Разработка чертежей печатных плат, оптимизированных для производства.'
                        ],
                        [
                            'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/>',
                            'title' => 'Опытные образцы',
                            'description' => 'Производство опытного образца: монтаж, сборка, программирование, отладка и испытание.'
                        ],
                        [
                            'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z"/>',
                            'title' => 'Техническая поддержка',
                            'description' => 'Все наши проекты сопровождаются дальнейшей поддержкой нашей команды разработчиков.'
                        ],
                    ];
                @endphp
                
                @foreach($services as $service)
                    <div class="group bg-white rounded-2xl p-8 shadow-sm hover:shadow-xl border border-slate-100 
                                hover:border-primary-100 transition-all duration-300 hover:-translate-y-1">
                        <div class="w-14 h-14 bg-primary-100 rounded-xl flex items-center justify-center mb-6
                                    group-hover:bg-primary-600 group-hover:scale-110 transition-all duration-300">
                            <svg class="w-7 h-7 text-primary-600 group-hover:text-white transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                {!! $service['icon'] !!}
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-slate-900 mb-3">{{ $service['title'] }}</h3>
                        <p class="text-slate-600 leading-relaxed">{{ $service['description'] }}</p>
                    </div>
                @endforeach
            </div>
            
            <!-- CTA -->
            <div class="text-center mt-12">
                <a href="{{ route('services') }}" 
                   class="inline-flex items-center gap-2 text-primary-600 font-semibold hover:text-primary-700 transition-colors">
                    Все услуги
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                    </svg>
                </a>
            </div>
        </div>
    </section>
    
    <!-- Featured Product -->
    <section class="py-20 lg:py-28 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-12 lg:gap-16 items-center">
                <!-- Product Image -->
                <div class="relative order-2 lg:order-1">
                    <div class="relative rounded-2xl overflow-hidden">
                        <img src="{{ asset('images/products/main_photo_of_garand101.jpg') }}" 
                             alt="Garand 101 Magnetometer" 
                             class="w-full h-auto object-cover">
                        <div class="absolute bottom-6 left-6 right-6">
                            <span class="inline-block px-3 py-1 bg-primary-600 text-white text-sm font-medium rounded-full">
                                Featured Product
                            </span>
                        </div>
                    </div>
                </div>
                
                <!-- Product Info -->
                <div class="order-1 lg:order-2">
                    <span class="inline-block px-4 py-1.5 bg-amber-100 text-amber-700 text-sm font-semibold rounded-full mb-4">
                        Наша разработка
                    </span>
                    <h2 class="text-3xl sm:text-4xl font-bold text-slate-900 mb-4">
                        Магнитометр Garand 101
                    </h2>
                    <p class="text-xl text-primary-600 font-medium mb-6">
                        Феррозондовый магнитометр-градиометр
                    </p>
                    <p class="text-lg text-slate-600 leading-relaxed mb-8">
                        Garand 101 – это пешеходный носимый магнитометр-градиометр для измерения 
                        нарушений магнитного поля Земли. Лёгкий, удобный, надёжный и эффективный.
                    </p>
                    
                    <!-- Key Features -->
                    <div class="grid sm:grid-cols-2 gap-4 mb-8">
                        @php
                            $features = [
                                'Археологические исследования',
                                'Простота использования',
                                'Высокая устойчивость к помехам',
                                'Геологические исследования'
                            ];
                        @endphp
                        @foreach($features as $feature)
                            <div class="flex items-center gap-3">
                                <div class="flex-shrink-0 w-6 h-6 bg-emerald-100 rounded-full flex items-center justify-center">
                                    <svg class="w-4 h-4 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                    </svg>
                                </div>
                                <span class="text-slate-700">{{ $feature }}</span>
                            </div>
                        @endforeach
                    </div>
                    
                    <a href="{{ route('products') }}" 
                       class="inline-flex items-center gap-2 px-6 py-3 bg-slate-900 text-white font-semibold rounded-xl
                              hover:bg-slate-800 transition-colors">
                        Подробнее о Garand 101
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Why Choose Us -->
    <section class="py-20 lg:py-28 bg-slate-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Section Header -->
            <div class="text-center max-w-3xl mx-auto mb-16">
                <span class="inline-block px-4 py-1.5 bg-primary-500/20 text-primary-400 text-sm font-semibold rounded-full mb-4">
                    Почему мы
                </span>
                <h2 class="text-3xl sm:text-4xl font-bold text-white mb-4">
                    Преимущества работы с нами
                </h2>
                <p class="text-lg text-slate-400 leading-relaxed">
                    При заказе разработки электронного оборудования в компании «Dimgent Technologies» 
                    вы получаете следующие преимущества.
                </p>
            </div>
            
            <!-- Advantages Grid -->
            <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6">
                @php
                    $advantages = [
                        ['icon' => '💰', 'title' => 'Стоимость', 'description' => 'Невысокие цены за высокое качество'],
                        ['icon' => '⚡', 'title' => 'Скорость', 'description' => 'Полная концентрация на каждом проекте'],
                        ['icon' => '🎯', 'title' => 'Эффективность', 'description' => 'Типовые разработки снижают стоимость'],
                        ['icon' => '🛡️', 'title' => 'Надёжность', 'description' => 'Все устройства тестируются перед отправкой'],
                    ];
                @endphp
                
                @foreach($advantages as $advantage)
                    <div class="bg-slate-800/50 backdrop-blur-sm rounded-2xl p-6 border border-slate-700/50
                                hover:bg-slate-800 hover:border-primary-500/30 transition-all duration-300">
                        <div class="text-4xl mb-4">{{ $advantage['icon'] }}</div>
                        <h3 class="text-lg font-bold text-white mb-2">{{ $advantage['title'] }}</h3>
                        <p class="text-slate-400 text-sm">{{ $advantage['description'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    
    <!-- CTA Section -->
    <section class="py-20 lg:py-28 bg-gradient-to-br from-primary-600 to-primary-700">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl sm:text-4xl font-bold text-white mb-6">
                Готовы начать проект?
            </h2>
            <p class="text-xl text-primary-100 mb-8 max-w-2xl mx-auto">
                Нужен полный цикл разработки или только отдельные этапы — 
                мы поможем воплотить ваши идеи в жизнь.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('contacts') }}" 
                   class="inline-flex items-center justify-center gap-2 px-8 py-4 bg-white text-primary-700 font-bold rounded-xl
                          shadow-xl hover:bg-primary-50 transform hover:-translate-y-0.5 transition-all duration-200">
                    Свяжитесь с нами
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                    </svg>
                </a>
                <a href="{{ route('about') }}" 
                   class="inline-flex items-center justify-center gap-2 px-8 py-4 bg-primary-500/30 text-white font-semibold rounded-xl
                          border border-primary-400/30 hover:bg-primary-500/50 transition-all duration-200">
                    Подробнее о нас
                </a>
            </div>
        </div>
    </section>
@endsection
