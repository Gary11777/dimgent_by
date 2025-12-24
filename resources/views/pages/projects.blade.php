@extends('layouts.app')

@section('title', 'Проекты')
@section('meta_description', 'Портфолио проектов по разработке электронных устройств: системы управления, измерительные приборы, медицинские устройства, бытовая техника.')
@section('meta_keywords', 'автоматические измерители, разработка электронных устройств, диммеры, радиоудлинители, беспроводные наушники, градиометры, электрозонды')
@section('robots', 'index, follow')

@section('content')
    <!-- Hero Section -->
    <section class="relative bg-gradient-to-br from-slate-900 via-slate-800 to-primary-900 py-20 lg:py-28">
        <div class="absolute inset-0 opacity-5">
            <div class="absolute inset-0" style="background-image: url('data:image/svg+xml,%3Csvg width=&quot;40&quot; height=&quot;40&quot; viewBox=&quot;0 0 40 40&quot; xmlns=&quot;http://www.w3.org/2000/svg&quot;%3E%3Cg fill=&quot;%23ffffff&quot; fill-opacity=&quot;1&quot; fill-rule=&quot;evenodd&quot;%3E%3Cpath d=&quot;M0 40L40 0H20L0 20M40 40V20L20 40&quot;/%3E%3C/g%3E%3C/svg%3E');"></div>
        </div>
        
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <span class="inline-block px-4 py-1.5 bg-primary-500/20 text-primary-400 text-sm font-semibold rounded-full mb-4">
                Наше портфолио
            </span>
            <h1 class="text-4xl sm:text-5xl font-extrabold text-white mb-6">
                Проекты
            </h1>
            <p class="text-xl text-slate-300 max-w-3xl mx-auto">
                Более 50 успешно завершённых проектов в различных отраслях — от систем управления 
                до медицинских приборов и бытовой техники.
            </p>
        </div>
    </section>
    
    <!-- Stats Banner -->
    <section class="bg-white border-b border-slate-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
                <div class="text-center">
                    <div class="text-3xl sm:text-4xl font-extrabold text-primary-600 mb-1">20+</div>
                    <div class="text-sm text-slate-600">Лет опыта</div>
                </div>
                <div class="text-center">
                    <div class="text-3xl sm:text-4xl font-extrabold text-primary-600 mb-1">50+</div>
                    <div class="text-sm text-slate-600">Завершённых проектов</div>
                </div>
                <div class="text-center">
                    <div class="text-3xl sm:text-4xl font-extrabold text-primary-600 mb-1">100%</div>
                    <div class="text-sm text-slate-600">Успешных проектов</div>
                </div>
                <div class="text-center">
                    <div class="text-3xl sm:text-4xl font-extrabold text-primary-600 mb-1">∞</div>
                    <div class="text-sm text-slate-600">Поддержка клиентов
                </div>
            </div>
        </div>
    </section>
    
    <!-- Project Categories -->
    <section class="py-20 lg:py-28 bg-slate-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Systems -->
            <div class="mb-20">
                <div class="flex items-center gap-4 mb-8">
                    <div class="w-14 h-14 bg-primary-100 rounded-2xl flex items-center justify-center">
                        <svg class="w-7 h-7 text-primary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"/>
                        </svg>
                    </div>
                    <div>
                        <h2 class="text-2xl sm:text-3xl font-bold text-slate-900">Системы</h2>
                        <p class="text-slate-600">Промышленные и коммерческие решения</p>
                    </div>
                </div>
                
                <div class="grid md:grid-cols-2 gap-6">
                    <div class="bg-white rounded-2xl p-8 shadow-sm border border-slate-100 hover:shadow-lg hover:border-primary-100 transition-all duration-300">
                        <div class="flex items-start gap-4">
                            <div class="flex-shrink-0 w-12 h-12 bg-primary-50 rounded-xl flex items-center justify-center">
                                <svg class="w-6 h-6 text-primary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.111 16.404a5.5 5.5 0 017.778 0M12 20h.01m-7.08-7.071c3.904-3.905 10.236-3.905 14.141 0M1.394 9.393c5.857-5.857 15.355-5.857 21.213 0"/>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-lg font-bold text-slate-900 mb-2">Диспетчерские станции</h3>
                                <p class="text-slate-600 text-sm leading-relaxed">
                                    Диспетчерские станции с использованием телефонных сетей, GSM связи и радиоканалов 
                                    частотами до 900 МГц. Применение: лифтовое хозяйство, ЖКХ, водозаборные системы.
                                </p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="bg-white rounded-2xl p-8 shadow-sm border border-slate-100 hover:shadow-lg hover:border-primary-100 transition-all duration-300">
                        <div class="flex items-start gap-4">
                            <div class="flex-shrink-0 w-12 h-12 bg-primary-50 rounded-xl flex items-center justify-center">
                                <svg class="w-6 h-6 text-primary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z"/>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-lg font-bold text-slate-900 mb-2">Автоматические измерители</h3>
                                <p class="text-slate-600 text-sm leading-relaxed">
                                    Автоматические измерители параметров интегральных микросхем и системы 
                                    тестирования электронных плат.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Tools -->
            <div class="mb-20">
                <div class="flex items-center gap-4 mb-8">
                    <div class="w-14 h-14 bg-emerald-100 rounded-2xl flex items-center justify-center">
                        <svg class="w-7 h-7 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                        </svg>
                    </div>
                    <div>
                        <h2 class="text-2xl sm:text-3xl font-bold text-slate-900">Приборы</h2>
                        <p class="text-slate-600">Специализированное оборудование для различных отраслей</p>
                    </div>
                </div>
                
                <div class="grid md:grid-cols-3 gap-6">
                    <div class="bg-white rounded-2xl p-6 shadow-sm border border-slate-100 hover:shadow-lg hover:border-emerald-100 transition-all duration-300">
                        <div class="w-12 h-12 bg-emerald-50 rounded-xl flex items-center justify-center mb-4">
                            <svg class="w-6 h-6 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z"/>
                            </svg>
                        </div>
                        <h3 class="text-lg font-bold text-slate-900 mb-2">Измерители параметров</h3>
                        <p class="text-slate-600 text-sm">Измерители параметров интегральных микросхем, тестирование электронных плат.</p>
                    </div>
                    
                    <div class="bg-white rounded-2xl p-6 shadow-sm border border-slate-100 hover:shadow-lg hover:border-emerald-100 transition-all duration-300">
                        <div class="w-12 h-12 bg-emerald-50 rounded-xl flex items-center justify-center mb-4">
                            <svg class="w-6 h-6 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                            </svg>
                        </div>
                        <h3 class="text-lg font-bold text-slate-900 mb-2">Приборы для археологии и геологии</h3>
                        <p class="text-slate-600 text-sm">Градиометры и электрозонды для археологии и геологии.</p>
                    </div>
                    
                    <div class="bg-white rounded-2xl p-6 shadow-sm border border-slate-100 hover:shadow-lg hover:border-emerald-100 transition-all duration-300">
                        <div class="w-12 h-12 bg-emerald-50 rounded-xl flex items-center justify-center mb-4">
                            <svg class="w-6 h-6 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
                            </svg>
                        </div>
                        <h3 class="text-lg font-bold text-slate-900 mb-2">Дистанционные приборы</h3>
                        <p class="text-slate-600 text-sm">Дистанционные приборы сбора информации с датчиков.</p>
                    </div>
                </div>
            </div>
            
            <!-- Everyday Technology -->
            <div class="mb-20">
                <div class="flex items-center gap-4 mb-8">
                    <div class="w-14 h-14 bg-amber-100 rounded-2xl flex items-center justify-center">
                        <svg class="w-7 h-7 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                        </svg>
                    </div>
                    <div>
                        <h2 class="text-2xl sm:text-3xl font-bold text-slate-900">Бытовая техника</h2>
                        <p class="text-slate-600">Потребительская электроника и умный дом</p>
                    </div>
                </div>
                
                <div class="grid md:grid-cols-3 gap-6">
                    <div class="bg-white rounded-2xl p-6 shadow-sm border border-slate-100 hover:shadow-lg hover:border-amber-100 transition-all duration-300">
                        <div class="w-12 h-12 bg-amber-50 rounded-xl flex items-center justify-center mb-4">
                            <svg class="w-6 h-6 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.536 8.464a5 5 0 010 7.072m2.828-9.9a9 9 0 010 12.728M5.586 15.536a5 5 0 001.414 1.414m2.828-9.9a9 9 0 0112.728 0"/>
                            </svg>
                        </div>
                        <h3 class="text-lg font-bold text-slate-900 mb-2">Беспроводные наушники</h3>
                        <p class="text-slate-600 text-sm">Для слабослышащих и пожилых людей.</p>
                    </div>
                    
                    <div class="bg-white rounded-2xl p-6 shadow-sm border border-slate-100 hover:shadow-lg hover:border-amber-100 transition-all duration-300">
                        <div class="w-12 h-12 bg-amber-50 rounded-xl flex items-center justify-center mb-4">
                            <svg class="w-6 h-6 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/>
                            </svg>
                        </div>
                        <h3 class="text-lg font-bold text-slate-900 mb-2">Диммеры</h3>
                        <p class="text-slate-600 text-sm">Дистанционное управление осветительными приборами.</p>
                    </div>
                    
                    <div class="bg-white rounded-2xl p-6 shadow-sm border border-slate-100 hover:shadow-lg hover:border-amber-100 transition-all duration-300">
                        <div class="w-12 h-12 bg-amber-50 rounded-xl flex items-center justify-center mb-4">
                            <svg class="w-6 h-6 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.111 16.404a5.5 5.5 0 017.778 0M12 20h.01m-7.08-7.071c3.904-3.905 10.236-3.905 14.141 0M1.394 9.393c5.857-5.857 15.355-5.857 21.213 0"/>
                            </svg>
                        </div>
                        <h3 class="text-lg font-bold text-slate-900 mb-2">Радиоудлинители</h3>
                        <p class="text-slate-600 text-sm">Радиоудлинители для датчиков, пультов управления воротами гаражей, шторами и т.д.</p>
                    </div>
                </div>
            </div>
            
            <!-- Medical Devices -->
            <div>
                <div class="flex items-center gap-4 mb-8">
                    <div class="w-14 h-14 bg-rose-100 rounded-2xl flex items-center justify-center">
                        <svg class="w-7 h-7 text-rose-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                        </svg>
                    </div>
                    <div>
                        <h2 class="text-2xl sm:text-3xl font-bold text-slate-900">Медицинские приборы</h2>
                        <p class="text-slate-600">Оборудование для медицинского мониторинга</p>
                    </div>
                </div>
                
                <div class="grid md:grid-cols-2 gap-6">
                    <div class="bg-white rounded-2xl p-8 shadow-sm border border-slate-100 hover:shadow-lg hover:border-rose-100 transition-all duration-300">
                        <div class="flex items-start gap-4">
                            <div class="flex-shrink-0 w-12 h-12 bg-rose-50 rounded-xl flex items-center justify-center">
                                <svg class="w-6 h-6 text-rose-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-lg font-bold text-slate-900 mb-2">Измерители давления и пульса</h3>
                                <p class="text-slate-600 text-sm leading-relaxed">
                                    Точные и надёжные медицинские приборы для измерения артериального давления 
                                    и частоты пульса для клинического и домашнего использования.
                                </p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="bg-gradient-to-br from-rose-50 to-primary-50 rounded-2xl p-8 border border-rose-100">
                        <div class="flex items-start gap-4">
                            <div class="flex-shrink-0 w-12 h-12 bg-white rounded-xl flex items-center justify-center shadow-sm">
                                <svg class="w-6 h-6 text-primary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-lg font-bold text-slate-900 mb-2">Индивидуальные медицинские решения</h3>
                                <p class="text-slate-600 text-sm leading-relaxed">
                                    Нужен индивидуальный медицинский прибор? Свяжитесь с нами, чтобы обсудить 
                                    ваши требования и воплотить вашу идею в жизнь.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- CTA Section -->
    <section class="py-20 lg:py-28 bg-gradient-to-br from-primary-600 to-primary-700">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl sm:text-4xl font-bold text-white mb-6">
                Есть идея проекта?
            </h2>
            <p class="text-xl text-primary-100 mb-8 max-w-2xl mx-auto">
                Нужен полный цикл разработки или только отдельные стадии? 
                Мы готовы помочь воплотить ваши идеи электронных устройств в жизнь.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('contacts') }}" 
                   class="inline-flex items-center justify-center gap-2 px-8 py-4 bg-white text-primary-700 font-bold rounded-xl
                          shadow-xl hover:bg-primary-50 transform hover:-translate-y-0.5 transition-all duration-200">
                    Начать проект
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                    </svg>
                </a>
                <a href="{{ route('services') }}" 
                   class="inline-flex items-center justify-center gap-2 px-8 py-4 bg-primary-500/30 text-white font-semibold rounded-xl
                          border border-primary-400/30 hover:bg-primary-500/50 transition-all duration-200">
                    Наши услуги
                </a>
            </div>
        </div>
    </section>
@endsection
