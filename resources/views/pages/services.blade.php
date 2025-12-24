@extends('layouts.app')

@section('title', 'Services')
@section('meta_description', 'Custom electronic device development services - full cycle development from concept to finished product, or individual phases as required.')
@section('meta_keywords', 'developing electronic devices, designing circuit boards, developing hardware devices, software, developing customized electronic devices, electric circuits, developing circuit boards, programming microcontrollers')
@section('robots', 'index, follow')

@section('content')
    <!-- Hero Section -->
    <section class="relative bg-gradient-to-br from-slate-900 via-slate-800 to-primary-900 py-20 lg:py-28">
        <div class="absolute inset-0 opacity-5">
            <div class="absolute inset-0" style="background-image: url('data:image/svg+xml,%3Csvg width=&quot;40&quot; height=&quot;40&quot; viewBox=&quot;0 0 40 40&quot; xmlns=&quot;http://www.w3.org/2000/svg&quot;%3E%3Cg fill=&quot;%23ffffff&quot; fill-opacity=&quot;1&quot; fill-rule=&quot;evenodd&quot;%3E%3Cpath d=&quot;M0 40L40 0H20L0 20M40 40V20L20 40&quot;/%3E%3C/g%3E%3C/svg%3E');"></div>
        </div>
        
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <span class="inline-block px-4 py-1.5 bg-primary-500/20 text-primary-400 text-sm font-semibold rounded-full mb-4">
                What We Offer
            </span>
            <h1 class="text-4xl sm:text-5xl font-extrabold text-white mb-6">
                Our Services
            </h1>
            <p class="text-xl text-slate-300 max-w-3xl mx-auto">
                Customized development of electronic devices — from concept to finished product, 
                or individual phases as required.
            </p>
        </div>
    </section>
    
    <!-- Main Services Section -->
    <section class="py-20 lg:py-28 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <span class="inline-block px-4 py-1.5 bg-primary-100 text-primary-700 text-sm font-semibold rounded-full mb-4">
                    Full Cycle Development
                </span>
                <h2 class="text-3xl sm:text-4xl font-bold text-slate-900 mb-4">
                    Comprehensive Electronics Development
                </h2>
                <p class="text-lg text-slate-600">
                    We offer full cycle development of electronic devices or can complete individual phases based on your requirements.
                </p>
            </div>
            
            <!-- Services Grid -->
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                @php
                    $services = [
                        [
                            'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>',
                            'title' => 'Technical Specifications',
                            'description' => 'Preparation and approval of technical specifications for an electronic device you need.',
                            'color' => 'primary'
                        ],
                        [
                            'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"/>',
                            'title' => 'Component Selection',
                            'description' => 'Selection of electronic components, mechanical parts, and bundles for the device.',
                            'color' => 'emerald'
                        ],
                        [
                            'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>',
                            'title' => 'Electric Circuit Development',
                            'description' => 'Expert development of electric circuits optimized for performance and reliability.',
                            'color' => 'amber'
                        ],
                        [
                            'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/>',
                            'title' => 'Software Development',
                            'description' => 'Custom software development for microcontrollers and embedded systems.',
                            'color' => 'cyan'
                        ],
                        [
                            'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z"/>',
                            'title' => 'PCB Design',
                            'description' => 'Development of printed circuit board drawings optimized for manufacturing.',
                            'color' => 'violet'
                        ],
                        [
                            'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z"/>',
                            'title' => 'Structural Design',
                            'description' => 'Structural plans and design of product casing for optimal form and function.',
                            'color' => 'rose'
                        ],
                        [
                            'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/>',
                            'title' => 'Prototyping',
                            'description' => 'Production of test models including assembly, fitting, programming, debugging, and testing.',
                            'color' => 'orange'
                        ],
                        [
                            'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>',
                            'title' => 'Certification Preparation',
                            'description' => 'Complete preparation for product certification and regulatory compliance.',
                            'color' => 'teal'
                        ],
                        [
                            'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z"/>',
                            'title' => 'Technical Support',
                            'description' => 'Ongoing technical support from our team of developers throughout your product lifecycle.',
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
                        <h4 class="text-lg font-bold text-slate-900 mb-2">Flexible Service Options</h4>
                        <p class="text-slate-600">
                            Some development phases may be omitted as required. Additional development phases may also be included 
                            if required. We tailor our services to match your specific project needs.
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
                    Why Choose Us
                </span>
                <h2 class="text-3xl sm:text-4xl font-bold text-slate-900 mb-4">
                    Advantages of Working With Us
                </h2>
                <p class="text-lg text-slate-600">
                    When ordering electronic equipment development from Dimgent Technologies, you'll obtain these advantages.
                </p>
            </div>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
                @php
                    $advantages = [
                        [
                            'icon' => '💰',
                            'title' => 'Cost-Effective',
                            'description' => 'One reason for choosing us is our cost-effective high-quality services.'
                        ],
                        [
                            'icon' => '⚡',
                            'title' => 'Speed',
                            'description' => 'We take projects only up to our handling capacity and concentrate on each project.'
                        ],
                        [
                            'icon' => '🎯',
                            'title' => 'Efficiency',
                            'description' => 'Standard design elements help keeping costs down while maintaining quality.'
                        ],
                        [
                            'icon' => '🛡️',
                            'title' => 'Support',
                            'description' => 'All projects are offered ongoing support from our team of developers.'
                        ],
                        [
                            'icon' => '✅',
                            'title' => 'Reliability',
                            'description' => 'All products are assembled and tested in our laboratory before delivery.'
                        ],
                        [
                            'icon' => '🏆',
                            'title' => 'Experience',
                            'description' => 'Our specialists have been creating electronic devices for more than twenty years.'
                        ],
                        [
                            'icon' => '💯',
                            'title' => 'Guaranteed Success',
                            'description' => 'Thanks to extensive experience we have a 100% success rate in product design.'
                        ],
                        [
                            'icon' => '🤝',
                            'title' => 'Client Satisfaction',
                            'description' => 'We work with clients until the product is exactly what they want it to be.'
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
                    <h3 class="text-2xl font-bold text-slate-900 mb-6">We Can Provide</h3>
                    <ul class="space-y-4">
                        <li class="flex items-start gap-3">
                            <svg class="w-6 h-6 text-primary-600 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            <span class="text-slate-700">The full cycle of electronic devices development (from concept to finished product)</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <svg class="w-6 h-6 text-primary-600 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            <span class="text-slate-700">Provision of individual phases of development</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <svg class="w-6 h-6 text-primary-600 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            <span class="text-slate-700">Completion of uncompleted projects which have already been started</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <svg class="w-6 h-6 text-primary-600 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            <span class="text-slate-700">Industrial controllers and microcontrollers programming</span>
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
                    <h3 class="text-2xl font-bold mb-6">Dimgent Technologies Is</h3>
                    <ul class="space-y-4">
                        <li class="flex items-center gap-3">
                            <span class="text-primary-400 font-bold">20+</span>
                            <span class="text-slate-300">years of experience</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <span class="text-primary-400 font-bold">50+</span>
                            <span class="text-slate-300">successfully completed projects</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <span class="text-primary-400 font-bold">100%</span>
                            <span class="text-slate-300">experienced specialists</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <svg class="w-5 h-5 text-primary-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            <span class="text-slate-300">Guaranteed quality</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <svg class="w-5 h-5 text-primary-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            <span class="text-slate-300">Short turn-around times</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <svg class="w-5 h-5 text-primary-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            <span class="text-slate-300">Cost effective solutions</span>
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
                    Is Distance a Problem? No, Of Course Not!
                </h2>
                
                <p class="text-lg text-slate-600 mb-6 leading-relaxed">
                    The majority of our clients from other countries wish to outsource device development to keep costs down. 
                    Some were concerned that work is carried out far away, however once they received the finished product 
                    and evaluated its quality, they often make more orders.
                </p>
                
                <p class="text-lg text-slate-600 mb-8 leading-relaxed">
                    We can assure you that <strong class="text-slate-900">distance is not a problem</strong>, 
                    since the Internet brings us nearer than ever before. Furthermore, we will keep you updated 
                    on the progress of the work with photos and video if you wish.
                </p>
                
                <a href="{{ route('contacts') }}" 
                   class="inline-flex items-center gap-2 px-8 py-4 bg-primary-600 text-white font-semibold rounded-xl
                          shadow-lg shadow-primary-600/25 hover:bg-primary-700 transition-all duration-200">
                    Start Your Project Today
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                    </svg>
                </a>
            </div>
        </div>
    </section>
@endsection
