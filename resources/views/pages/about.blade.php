@extends('layouts.app')

@section('title', 'About Us')
@section('meta_description', 'Dimgent Technologies - A group of specialists with 20+ years of experience in electronic device development, based in Minsk, Belarus.')
@section('meta_keywords', 'Dimgent Technologies, developing electronic devices, designing printed circuit boards, developing hardware devices, microcontrollers, embedded systems, microprocessors, analog electronics, digital electronics, logical systems, developing telemechanical equipment, programmable logical matrices, infra-red channels, telemetry, radio channels, remote control, analog to digital converter, tools to monitor electrical circuit signals, ferroprobe to measure magnetic field, gradiometer, electronic soil probes, robotics')
@section('robots', 'index, follow')

@section('content')
    <!-- Hero Section -->
    <section class="relative bg-gradient-to-br from-slate-900 via-slate-800 to-primary-900 py-20 lg:py-28">
        <div class="absolute inset-0 opacity-5">
            <div class="absolute inset-0" style="background-image: url('data:image/svg+xml,%3Csvg width=&quot;40&quot; height=&quot;40&quot; viewBox=&quot;0 0 40 40&quot; xmlns=&quot;http://www.w3.org/2000/svg&quot;%3E%3Cg fill=&quot;%23ffffff&quot; fill-opacity=&quot;1&quot; fill-rule=&quot;evenodd&quot;%3E%3Cpath d=&quot;M0 40L40 0H20L0 20M40 40V20L20 40&quot;/%3E%3C/g%3E%3C/svg%3E');"></div>
        </div>
        
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <span class="inline-block px-4 py-1.5 bg-primary-500/20 text-primary-400 text-sm font-semibold rounded-full mb-4">
                About Us
            </span>
            <h1 class="text-4xl sm:text-5xl font-extrabold text-white mb-6">
                Dimgent Technologies
            </h1>
            <p class="text-xl text-slate-300 max-w-3xl mx-auto mb-8">
                A group of specialists working in the development of electronic devices.
            </p>
            {{-- <div class="inline-flex items-center gap-2 px-4 py-2 bg-white/10 backdrop-blur-sm rounded-full">
                <svg class="w-5 h-5 text-primary-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                </svg>
                <span class="text-white font-medium">Development Center: City, Country</span>
            </div> --}}
        </div>
    </section>
    
    <!-- Company Overview -->
    <section class="py-20 lg:py-28 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-12 lg:gap-16 items-center">
                <div>
                    <span class="inline-block px-4 py-1.5 bg-primary-100 text-primary-700 text-sm font-semibold rounded-full mb-4">
                        Who We Are
                    </span>
                    <h2 class="text-3xl sm:text-4xl font-bold text-slate-900 mb-6">
                        Your Partner in Electronics Development
                    </h2>
                    <div class="space-y-4 text-lg text-slate-600 leading-relaxed">
                        <p>
                            <strong class="text-slate-900">Dimgent Technologies</strong> is a group of specialists 
                            working in the sector of electronic device development.
                        </p>
                        <p>
                            We develop customized electronic devices. Our company includes 
                            <strong class="text-slate-900">engineers, designers, and programmers</strong> who have been 
                            creating electronic devices for more than twenty years.
                        </p>
                        <p>
                            We have developed and taken part in the development of 
                            <strong class="text-slate-900">more than 50 projects</strong> over this time.
                        </p>
                    </div>
                </div>
                
                <div class="grid grid-cols-2 gap-6">
                    <div class="bg-primary-50 rounded-2xl p-6 text-center">
                        <div class="text-4xl font-extrabold text-primary-600 mb-2">20+</div>
                        <div class="text-slate-700 font-medium">Years of Experience</div>
                    </div>
                    <div class="bg-emerald-50 rounded-2xl p-6 text-center">
                        <div class="text-4xl font-extrabold text-emerald-600 mb-2">50+</div>
                        <div class="text-slate-700 font-medium">Projects Completed</div>
                    </div>
                    <div class="bg-amber-50 rounded-2xl p-6 text-center">
                        <div class="text-4xl font-extrabold text-amber-600 mb-2">100%</div>
                        <div class="text-slate-700 font-medium">Success Rate</div>
                    </div>
                    <div class="bg-cyan-50 rounded-2xl p-6 text-center">
                        <div class="text-4xl font-extrabold text-cyan-600 mb-2">∞</div>
                        <div class="text-slate-700 font-medium">Client Support</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Our Approach -->
    <section class="py-20 lg:py-28 bg-slate-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <span class="inline-block px-4 py-1.5 bg-emerald-100 text-emerald-700 text-sm font-semibold rounded-full mb-4">
                    Our Approach
                </span>
                <h2 class="text-3xl sm:text-4xl font-bold text-slate-900 mb-4">
                    Comprehensive Project Approach
                </h2>
                <p class="text-lg text-slate-600">
                    Dimgent Technologies offers a comprehensive approach to the projects we work on.
                </p>
            </div>
            
            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-white rounded-2xl p-8 shadow-sm border border-slate-100 text-center hover:shadow-lg transition-shadow">
                    <div class="w-16 h-16 bg-primary-100 rounded-2xl flex items-center justify-center mx-auto mb-6">
                        <svg class="w-8 h-8 text-primary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">Full-Cycle Development</h3>
                    <p class="text-slate-600">
                        Complete electronic devices development from concept to finished product.
                    </p>
                </div>
                
                <div class="bg-white rounded-2xl p-8 shadow-sm border border-slate-100 text-center hover:shadow-lg transition-shadow">
                    <div class="w-16 h-16 bg-emerald-100 rounded-2xl flex items-center justify-center mx-auto mb-6">
                        <svg class="w-8 h-8 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 4a2 2 0 114 0v1a1 1 0 001 1h3a1 1 0 011 1v3a1 1 0 01-1 1h-1a2 2 0 100 4h1a1 1 0 011 1v3a1 1 0 01-1 1h-3a1 1 0 01-1-1v-1a2 2 0 10-4 0v1a1 1 0 01-1 1H7a1 1 0 01-1-1v-3a1 1 0 00-1-1H4a2 2 0 110-4h1a1 1 0 001-1V7a1 1 0 011-1h3a1 1 0 001-1V4z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">Separate Phases</h3>
                    <p class="text-slate-600">
                        Carry out specific development phases like electric circuits, software, or PCB design.
                    </p>
                </div>
                
                <div class="bg-white rounded-2xl p-8 shadow-sm border border-slate-100 text-center hover:shadow-lg transition-shadow">
                    <div class="w-16 h-16 bg-amber-100 rounded-2xl flex items-center justify-center mx-auto mb-6">
                        <svg class="w-8 h-8 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">Improvement Ideas</h3>
                    <p class="text-slate-600">
                        We offer ideas for changes and improvements to make products even better.
                    </p>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Our Aim -->
    <section class="py-20 lg:py-28 bg-white">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-gradient-to-br from-primary-600 to-primary-700 rounded-3xl p-8 lg:p-12 text-center text-white">
                <div class="w-20 h-20 bg-white/20 rounded-full flex items-center justify-center mx-auto mb-8">
                    <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"/>
                    </svg>
                </div>
                
                <h2 class="text-3xl font-bold mb-6">Our Aim</h2>
                
                <div class="space-y-4 text-lg text-primary-100">
                    <p>We want our clients to be <strong class="text-white">fully satisfied</strong> with the results of our work.</p>
                    <p>We work with our clients until the product is <strong class="text-white">exactly the one they want it to be</strong>.</p>
                    <p>We can also offer ideas for changes and improvements of the product being developed 
                       in order to <strong class="text-white">make it even better</strong>.</p>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Expertise Areas -->
    <section class="py-20 lg:py-28 bg-slate-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <span class="inline-block px-4 py-1.5 bg-cyan-100 text-cyan-700 text-sm font-semibold rounded-full mb-4">
                    Our Expertise
                </span>
                <h2 class="text-3xl sm:text-4xl font-bold text-slate-900 mb-4">
                    Areas of Expertise
                </h2>
                <p class="text-lg text-slate-600">
                    We have experience in various areas of electronic devices development, software development, and circuitry design.
                </p>
            </div>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                @php
                    $expertise = [
                        ['icon' => '🔧', 'title' => 'Microcontrollers & Microprocessors', 'desc' => 'Devices and embedded systems using microcontrollers and microprocessors'],
                        ['icon' => '📡', 'title' => 'Analog Electronics', 'desc' => 'Analog electronic devices design and development'],
                        ['icon' => '💻', 'title' => 'Digital Electronics', 'desc' => 'Logical systems, programmable logical matrices, embedded systems'],
                        ['icon' => '📶', 'title' => 'Telemechanics', 'desc' => 'Wi-Fi, Bluetooth, GSM, and non-standard protocols for telemetry and remote controls'],
                        ['icon' => '🎤', 'title' => 'Signal Digitization', 'desc' => 'Systems to digitize analog and speech signals'],
                        ['icon' => '⚡', 'title' => 'Power Circuit Monitors', 'desc' => 'Signal monitors for three-phase power circuits'],
                        ['icon' => '🧲', 'title' => 'Magnetic Gauges', 'desc' => 'Magnetic ferroprobe gauges (gradiometers) and electronic soil probes'],
                        ['icon' => '🤖', 'title' => 'Robotics', 'desc' => 'Robotics systems design and implementation'],
                        ['icon' => '📏', 'title' => 'Automated Measurement', 'desc' => 'Automated systems to measure microchips and hardware devices'],
                    ];
                @endphp
                
                @foreach($expertise as $item)
                    <div class="bg-white rounded-2xl p-6 shadow-sm border border-slate-100 hover:shadow-lg hover:border-primary-100 transition-all duration-300">
                        <div class="text-3xl mb-4">{{ $item['icon'] }}</div>
                        <h3 class="text-lg font-bold text-slate-900 mb-2">{{ $item['title'] }}</h3>
                        <p class="text-slate-600 text-sm">{{ $item['desc'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    
    <!-- Why Choose Us -->
    <section class="py-20 lg:py-28 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-12 lg:gap-16 items-center">
                <div>
                    <span class="inline-block px-4 py-1.5 bg-amber-100 text-amber-700 text-sm font-semibold rounded-full mb-4">
                        Why Choose Us
                    </span>
                    <h2 class="text-3xl sm:text-4xl font-bold text-slate-900 mb-6">
                        The Main Reasons to Choose Us
                    </h2>
                    
                    <div class="space-y-6 text-lg text-slate-600">
                        <p>
                            We are happy to work on both <strong class="text-slate-900">large and small projects</strong>, 
                            for big or small enterprises.
                        </p>
                        <p>
                            We strive to ensure the <strong class="text-slate-900">lowest cost</strong> of the products 
                            we develop by careful selection of components (maintaining the balance between cost and quality).
                        </p>
                    </div>
                    
                    <div class="mt-8 grid grid-cols-3 gap-4">
                        <div class="text-center p-4 bg-slate-50 rounded-xl">
                            <div class="text-2xl font-bold text-primary-600 mb-1">Cost</div>
                            <div class="text-xs text-slate-600">Effective</div>
                        </div>
                        <div class="text-center p-4 bg-slate-50 rounded-xl">
                            <div class="text-2xl font-bold text-emerald-600 mb-1">Quick</div>
                            <div class="text-xs text-slate-600">Turn-around</div>
                        </div>
                        <div class="text-center p-4 bg-slate-50 rounded-xl">
                            <div class="text-2xl font-bold text-amber-600 mb-1">High</div>
                            <div class="text-xs text-slate-600">Quality</div>
                        </div>
                    </div>
                </div>
                
                <div class="bg-slate-900 rounded-3xl p-8 lg:p-10">
                    <h3 class="text-2xl font-bold text-white mb-8">Dimgent Technologies Is:</h3>
                    <ul class="space-y-4">
                        @php
                            $facts = [
                                'More than 20 years of experience',
                                'More than 50 successfully completed projects',
                                'Experienced specialists',
                                'Guaranteed quality',
                                'Short turn-around times',
                                'Cost effective solutions'
                            ];
                        @endphp
                        @foreach($facts as $fact)
                            <li class="flex items-center gap-3">
                                <div class="flex-shrink-0 w-6 h-6 bg-primary-500 rounded-full flex items-center justify-center">
                                    <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                    </svg>
                                </div>
                                <span class="text-slate-300">{{ $fact }}</span>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </section>
    
    <!-- CTA Section -->
    <section class="py-20 lg:py-28 bg-gradient-to-br from-primary-600 to-primary-700">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl sm:text-4xl font-bold text-white mb-6">
                Ready to Work With Us?
            </h2>
            <p class="text-xl text-primary-100 mb-8 max-w-2xl mx-auto">
                Let's discuss your electronic device development needs and see how we can help bring your ideas to life.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('contacts') }}" 
                   class="inline-flex items-center justify-center gap-2 px-8 py-4 bg-white text-primary-700 font-bold rounded-xl
                          shadow-xl hover:bg-primary-50 transform hover:-translate-y-0.5 transition-all duration-200">
                    Contact Us
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                    </svg>
                </a>
                <a href="{{ route('services') }}" 
                   class="inline-flex items-center justify-center gap-2 px-8 py-4 bg-primary-500/30 text-white font-semibold rounded-xl
                          border border-primary-400/30 hover:bg-primary-500/50 transition-all duration-200">
                    Explore Our Services
                </a>
            </div>
        </div>
    </section>
@endsection
