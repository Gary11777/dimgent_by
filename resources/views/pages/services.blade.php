@extends('layouts.app')

@section('title', 'Услуги')
@section('meta_description', 'Услуги по разработке электронных устройств на заказ - полный цикл разработки от концепта до готового изделия.')
@section('meta_keywords', 'разработка электронных устройств, разработка печатных плат, программное обеспечение, электрические схемы, программирование микроконтроллеров')
@section('robots', 'index, follow')

@section('content')
    <!-- Hero Section -->
    <section class="relative bg-gradient-to-br from-slate-900 via-slate-800 to-primary-900 py-20 lg:py-28">
        <div class="absolute inset-0 opacity-5">
            <div class="absolute inset-0" style="background-image: url('data:image/svg+xml,%3Csvg width=&quot;40&quot; height=&quot;40&quot; viewBox=&quot;0 0 40 40&quot; xmlns=&quot;http://www.w3.org/2000/svg&quot;%3E%3Cg fill=&quot;%23ffffff&quot; fill-opacity=&quot;1&quot; fill-rule=&quot;evenodd&quot;%3E%3Cpath d=&quot;M0 40L40 0H20L0 20M40 40V20L20 40&quot;/%3E%3C/g%3E%3C/svg%3E');"></div>
        </div>
        
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <span class="inline-block px-4 py-1.5 bg-primary-500/20 text-primary-400 text-sm font-semibold rounded-full mb-4">
                Что мы предлагаем
            </span>
            <h1 class="text-4xl sm:text-5xl font-extrabold text-white mb-6">
                Услуги
            </h1>
            <p class="text-xl text-slate-300 max-w-3xl mx-auto">
                Разработка электронных устройств на заказ — от концепта до готового изделия, 
                а также реализация отдельных стадий.
            </p>
        </div>
    </section>
    
    <!-- Main Services Section -->
    <section class="py-20 lg:py-28 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <span class="inline-block px-4 py-1.5 bg-primary-100 text-primary-700 text-sm font-semibold rounded-full mb-4">
                    Полный цикл разработки
                </span>
                <h2 class="text-3xl sm:text-4xl font-bold text-slate-900 mb-4">
                    Разработка электроники на заказ
                </h2>
                <p class="text-lg text-slate-600">
                    Осуществляем полный цикл разработки электронных устройств, а также реализацию отдельных стадий.
                </p>
            </div>
            
            <!-- Services Grid -->
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                @php
                    $services = [
                        [
                            'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>',
                            'title' => 'Техническое задание',
                            'description' => 'Подготовка и согласование технического задания на необходимое вам электронное устройство.',
                            'color' => 'primary'
                        ],
                        [
                            'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"/>',
                            'title' => 'Подбор компонентов',
                            'description' => 'Подбор электронных компонентов, механических деталей и узлов устройства.',
                            'color' => 'emerald'
                        ],
                        [
                            'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>',
                            'title' => 'Электрические схемы',
                            'description' => 'Разработка электрических схем устройства, оптимизированных для производительности и надёжности.',
                            'color' => 'amber'
                        ],
                        [
                            'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/>',
                            'title' => 'Программное обеспечение',
                            'description' => 'Разработка ПО для микроконтроллеров и встроенных систем.',
                            'color' => 'cyan'
                        ],
                        [
                            'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z"/>',
                            'title' => 'Чертежи печатных плат',
                            'description' => 'Разработка чертежей печатных плат, оптимизированных для производства.',
                            'color' => 'violet'
                        ],
                        [
                            'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z"/>',
                            'title' => 'Дизайн корпуса',
                            'description' => 'Проектирование структуры и дизайна корпуса устройства.',
                            'color' => 'rose'
                        ],
                        [
                            'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/>',
                            'title' => 'Опытные образцы',
                            'description' => 'Производство опытного образца: монтаж, сборка, программирование, отладка и испытание.',
                            'color' => 'orange'
                        ],
                        [
                            'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>',
                            'title' => 'Подготовка к сертификации',
                            'description' => 'Полная подготовка к сертификации продукта.',
                            'color' => 'teal'
                        ],
                        [
                            'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z"/>',
                            'title' => 'Техническая поддержка',
                            'description' => 'Все наши проекты сопровождаются дальнейшей поддержкой нашей команды разработчиков.',
                            'color' => 'indigo'
                        ],
                    ];
                    
                    $colorClasses = [
                        'primary' => ['bg' => 'bg-primary-100', 'text' => 'text-primary-600', 'hover' => 'group-hover:bg-primary-600'],
                        'emerald' => ['bg' => 'bg-emerald-100', 'text' => 'text-emerald-600', 'hover' => 'group-hover:bg-emerald-600'],
                        'amber' => ['bg' => 'bg-amber-100', 'text' => 'text-amber-600', 'hover' => 'group-hover:bg-amber-600'],
                        'cyan' => ['bg' => 'bg-cyan-100', 'text' => 'text-cyan-600', 'hover' => 'group-hover:bg-cyan-600'],
                        'violet' => ['bg' => 'bg-violet-100', 'text' => 'text-violet-600', 'hover' => 'group-hover:bg-violet-600'],
                        'rose' => ['bg' => 'bg-rose-100', 'text' => 'text-rose-600', 'hover' => 'group-hover:bg-rose-600'],
                        'orange' => ['bg' => 'bg-orange-100', 'text' => 'text-orange-600', 'hover' => 'group-hover:bg-orange-600'],
                        'teal' => ['bg' => 'bg-teal-100', 'text' => 'text-teal-600', 'hover' => 'group-hover:bg-teal-600'],
                        'indigo' => ['bg' => 'bg-indigo-100', 'text' => 'text-indigo-600', 'hover' => 'group-hover:bg-indigo-600'],
                    ];
                @endphp
                
                @foreach($services as $service)
                    @php $colors = $colorClasses[$service['color']]; @endphp
                    <div class="group bg-white rounded-2xl p-8 shadow-sm hover:shadow-xl border border-slate-100 
                                hover:border-{{ $service['color'] }}-100 transition-all duration-300 hover:-translate-y-1">
                        <div class="w-14 h-14 {{ $colors['bg'] }} rounded-xl flex items-center justify-center mb-6
                                    {{ $colors['hover'] }} group-hover:scale-110 transition-all duration-300">
                            <svg class="w-7 h-7 {{ $colors['text'] }} group-hover:text-white transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                {!! $service['icon'] !!}
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-slate-900 mb-3">{{ $service['title'] }}</h3>
                        <p class="text-slate-600 leading-relaxed">{{ $service['description'] }}</p>
                    </div>
                @endforeach
            </div>
            
            <!-- Flexibility Note -->
            <div class="mt-12 bg-slate-50 rounded-2xl p-8 border border-slate-200">
                <div class="flex flex-col md:flex-row items-start gap-4">
                    <div class="flex-shrink-0 w-12 h-12 bg-primary-100 rounded-xl flex items-center justify-center">
                        <svg class="w-6 h-6 text-primary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <div>
                        <h4 class="text-lg font-bold text-slate-900 mb-2">Гибкие условия</h4>
                        <p class="text-slate-600">
                            Некоторые этапы разработки могут быть исключены при необходимости. Также процесс разработки 
                            может включать дополнительные этапы.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Advantages Section -->
    <section class="py-20 lg:py-28 bg-slate-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <span class="inline-block px-4 py-1.5 bg-emerald-100 text-emerald-700 text-sm font-semibold rounded-full mb-4">
                    Почему мы
                </span>
                <h2 class="text-3xl sm:text-4xl font-bold text-slate-900 mb-4">
                    Преимущества работы с нами
                </h2>
                <p class="text-lg text-slate-600">
                    При заказе разработки электронного оборудования в компании «Dimgent Technologies» вы получаете следующие преимущества.
                </p>
            </div>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
                @php
                    $advantages = [
                        [
                            'icon' => '💰',
                            'title' => 'Стоимость',
                            'description' => 'Невысокие цены за высокое качество.'
                        ],
                        [
                            'icon' => '⚡',
                            'title' => 'Скорость',
                            'description' => 'Мы принимаем ровно столько заказов, сколько можем выполнить, полностью концентрируясь на них.'
                        ],
                        [
                            'icon' => '🎯',
                            'title' => 'Эффективность',
                            'description' => 'Типовые разработки снижают стоимость разработки.'
                        ],
                        [
                            'icon' => '🛡️',
                            'title' => 'Поддержка',
                            'description' => 'Все наши проекты сопровождаются дальнейшей поддержкой нашей команды.'
                        ],
                        [
                            'icon' => '✅',
                            'title' => 'Надёжность',
                            'description' => 'Все устройства монтируются и тестируются в нашей лаборатории перед отправкой.'
                        ],
                        [
                            'icon' => '🏆',
                            'title' => 'Опыт',
                            'description' => 'На протяжении более 20 лет наши специалисты занимаются созданием электронных устройств.'
                        ],
                        [
                            'icon' => '💯',
                            'title' => 'Гарантированный успех',
                            'description' => 'Благодаря большому опыту шанс успешной разработки составляет 100%.'
                        ],
                        [
                            'icon' => '🤝',
                            'title' => 'Наша цель',
                            'description' => 'Мы работаем с клиентами до тех пор, пока устройство не станет таким, каким они хотят его видеть.'
                        ],
                    ];
                @endphp
                
                @foreach($advantages as $advantage)
                    <div class="bg-white rounded-2xl p-6 shadow-sm border border-slate-100 hover:shadow-lg hover:border-primary-100 transition-all duration-300">
                        <div class="text-4xl mb-4">{{ $advantage['icon'] }}</div>
                        <h3 class="text-lg font-bold text-slate-900 mb-2">{{ $advantage['title'] }}</h3>
                        <p class="text-slate-600 text-sm leading-relaxed">{{ $advantage['description'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    
    <!-- What We Offer Section -->
    <section class="py-20 lg:py-28 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-12 lg:gap-16">
                <!-- We Can Provide -->
                <div class="bg-primary-50 rounded-3xl p-8 lg:p-10">
                    <div class="w-14 h-14 bg-primary-600 rounded-2xl flex items-center justify-center mb-6">
                        <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"/>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-slate-900 mb-6">Мы можем предложить</h3>
                    <ul class="space-y-4">
                        <li class="flex items-start gap-3">
                            <svg class="w-6 h-6 text-primary-600 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            <span class="text-slate-700">Полный цикл разработки электронных устройств (от концепта до готового изделия)</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <svg class="w-6 h-6 text-primary-600 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            <span class="text-slate-700">Реализацию отдельных стадий разработки</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <svg class="w-6 h-6 text-primary-600 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            <span class="text-slate-700">Завершение незаконченных проектов</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <svg class="w-6 h-6 text-primary-600 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            <span class="text-slate-700">Программирование промышленных контроллеров и микроконтроллеров</span>
                        </li>
                    </ul>
                </div>
                
                <!-- Dimgent Technologies Is -->
                <div class="bg-slate-900 rounded-3xl p-8 lg:p-10 text-white">
                    <div class="w-14 h-14 bg-primary-500 rounded-2xl flex items-center justify-center mb-6">
                        <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"/>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold mb-6">Dimgent Technologies — это</h3>
                    <ul class="space-y-4">
                        <li class="flex items-center gap-3">
                            <span class="text-primary-400 font-bold">20+</span>
                            <span class="text-slate-300">лет опыта</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <span class="text-primary-400 font-bold">50+</span>
                            <span class="text-slate-300">успешно завершённых проектов</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <span class="text-primary-400 font-bold">100%</span>
                            <span class="text-slate-300">опытные специалисты</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <svg class="w-5 h-5 text-primary-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            <span class="text-slate-300">Гарантированное качество</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <svg class="w-5 h-5 text-primary-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            <span class="text-slate-300">Короткие сроки разработки</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <svg class="w-5 h-5 text-primary-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            <span class="text-slate-300">Эффективные решения</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Remote Work Section -->
    <section class="py-20 lg:py-28 bg-slate-50">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <div class="bg-white rounded-3xl p-8 lg:p-12 shadow-xl border border-slate-100">
                <div class="w-20 h-20 bg-primary-100 rounded-full flex items-center justify-center mx-auto mb-8">
                    <svg class="w-10 h-10 text-primary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                </div>
                
                <h2 class="text-3xl font-bold text-slate-900 mb-4">
                    Расстояние — не проблема!
                </h2>
                
                <p class="text-lg text-slate-600 mb-6 leading-relaxed">
                    Мы успешно работаем с клиентами из разных стран. 
                    Интернет делает нас ближе, чем когда-либо.
                </p>
                
                <p class="text-lg text-slate-600 mb-8 leading-relaxed">
                    Мы гарантируем, что <strong class="text-slate-900">расстояние не является препятствием</strong>. 
                    Мы будем держать вас в курсе хода работ с помощью фото и видео.
                </p>
                
                <a href="{{ route('contacts') }}" 
                   class="inline-flex items-center gap-2 px-8 py-4 bg-primary-600 text-white font-semibold rounded-xl
                          shadow-lg shadow-primary-600/25 hover:bg-primary-700 transition-all duration-200">
                    Начать проект сегодня
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                    </svg>
                </a>
            </div>
        </div>
    </section>
@endsection
