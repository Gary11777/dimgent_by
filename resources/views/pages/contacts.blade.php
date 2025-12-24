@extends('layouts.app')

@section('title', 'Contacts')
@section('meta_description', 'Contact Dimgent Technologies for electronic device development services. Get in touch with our team in Minsk, Belarus.')
@section('meta_keywords', 'Dimgent Technologies Contacts')
@section('robots', 'noindex, nofollow')

@section('content')
    <!-- Hero Section -->
    <section class="relative bg-gradient-to-br from-slate-900 via-slate-800 to-primary-900 py-20 lg:py-28">
        <div class="absolute inset-0 opacity-5">
            <div class="absolute inset-0" style="background-image: url('data:image/svg+xml,%3Csvg width=&quot;40&quot; height=&quot;40&quot; viewBox=&quot;0 0 40 40&quot; xmlns=&quot;http://www.w3.org/2000/svg&quot;%3E%3Cg fill=&quot;%23ffffff&quot; fill-opacity=&quot;1&quot; fill-rule=&quot;evenodd&quot;%3E%3Cpath d=&quot;M0 40L40 0H20L0 20M40 40V20L20 40&quot;/%3E%3C/g%3E%3C/svg%3E');"></div>
        </div>
        
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <span class="inline-block px-4 py-1.5 bg-primary-500/20 text-primary-400 text-sm font-semibold rounded-full mb-4">
                Get in Touch
            </span>
            <h1 class="text-4xl sm:text-5xl font-extrabold text-white mb-6">
                Contact Us
            </h1>
            <p class="text-xl text-slate-300 max-w-2xl mx-auto">
                Have a project in mind? We'd love to hear from you. Send us a message and we'll respond as soon as possible.
            </p>
        </div>
    </section>
    
    <!-- Contact Section -->
    <section class="py-20 lg:py-28 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-5 gap-12 lg:gap-16">
                <!-- Contact Info -->
                <div class="lg:col-span-2">
                    <h2 class="text-2xl font-bold text-slate-900 mb-6">Contact Information</h2>
                    <p class="text-slate-600 mb-8">
                        For more information about our services or to discuss your project, please get in touch with us.
                    </p>
                    
                    <!-- Contact Cards -->
                    <div class="space-y-6">
                        {{-- <!-- Location -->
                        <div class="bg-slate-50 rounded-2xl p-6 border border-slate-100">
                            <div class="flex items-start gap-4">
                                <div class="flex-shrink-0 w-12 h-12 bg-primary-100 rounded-xl flex items-center justify-center">
                                    <svg class="w-6 h-6 text-primary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="text-lg font-bold text-slate-900 mb-1">Location</h3>
                                    <p class="text-slate-600">City, Country</p>
                                    <p class="text-sm text-slate-500 mt-1">Development Center</p>
                                </div>
                            </div>
                        </div> --}}
                        
                        <!-- Email -->
                        <div class="bg-slate-50 rounded-2xl p-6 border border-slate-100">
                            <div class="flex items-start gap-4">
                                <div class="flex-shrink-0 w-12 h-12 bg-emerald-100 rounded-xl flex items-center justify-center">
                                    <svg class="w-6 h-6 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="text-lg font-bold text-slate-900 mb-1">Email</h3>
                                    <img src="{{ asset('images/mail_white.png') }}" alt="Email">
                                    <p class="text-sm text-slate-500 mt-1">We reply within 24 hours</p>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Working Hours -->
                        <div class="bg-slate-50 rounded-2xl p-6 border border-slate-100">
                            <div class="flex items-start gap-4">
                                <div class="flex-shrink-0 w-12 h-12 bg-amber-100 rounded-xl flex items-center justify-center">
                                    <svg class="w-6 h-6 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="text-lg font-bold text-slate-900 mb-1">Working Hours</h3>
                                    <p class="text-slate-600">Monday - Friday</p>
                                    <p class="text-sm text-slate-500 mt-1">9:00 AM - 6:00 PM (GMT+3)</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Global Reach -->
                    <div class="mt-8 p-6 bg-primary-50 rounded-2xl border border-primary-100">
                        <div class="flex items-start gap-4">
                            <div class="flex-shrink-0 w-10 h-10 bg-primary-600 rounded-lg flex items-center justify-center">
                                <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-bold text-slate-900 mb-1">We Work Globally</h4>
                                <p class="text-sm text-slate-600">
                                    Distance is not a problem. We work with clients from around the world 
                                    and keep you updated on progress with photos and video.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Contact Form -->
                <div class="lg:col-span-3">
                    <div class="bg-slate-50 rounded-3xl p-8 lg:p-10 border border-slate-100">
                        <h2 class="text-2xl font-bold text-slate-900 mb-2">Send Us a Message</h2>
                        <p class="text-slate-600 mb-8">Fill out the form below and we'll get back to you as soon as possible.</p>
                        
                        <form x-data="{ 
                            formData: { name: '', email: '', company: '', subject: '', message: '' },
                            errors: {},
                            serverError: '',
                            submitted: false,
                            loading: false,
                            validateEmail(email) {
                                return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email);
                            },
                            async submitForm() {
                                this.errors = {};
                                this.serverError = '';
                                
                                if (!this.formData.name.trim()) this.errors.name = 'Name is required';
                                if (!this.formData.email.trim()) this.errors.email = 'Email is required';
                                else if (!this.validateEmail(this.formData.email)) this.errors.email = 'Please enter a valid email';
                                if (!this.formData.subject.trim()) this.errors.subject = 'Subject is required';
                                if (!this.formData.message.trim()) this.errors.message = 'Message is required';
                                
                                if (Object.keys(this.errors).length === 0) {
                                    this.loading = true;
                                    
                                    try {
                                        const formElement = this.$el;
                                        const formData = new FormData(formElement);
                                        
                                        const response = await fetch('{{ route('contacts.submit') }}', {
                                            method: 'POST',
                                            headers: {
                                                'Accept': 'application/json',
                                            },
                                            body: formData
                                        });
                                        
                                        const data = await response.json();
                                        
                                        if (response.ok) {
                                            this.submitted = true;
                                        } else if (response.status === 422) {
                                            // Validation errors
                                            if (data.errors) {
                                                Object.keys(data.errors).forEach(key => {
                                                    this.errors[key] = data.errors[key][0];
                                                });
                                            }
                                            // Reset Turnstile on validation error
                                            if (typeof turnstile !== 'undefined') {
                                                turnstile.reset();
                                            }
                                        } else if (response.status === 429) {
                                            this.serverError = 'Too many requests. Please try again later.';
                                        } else {
                                            this.serverError = data.message || 'An error occurred. Please try again.';
                                        }
                                    } catch (error) {
                                        this.serverError = 'Network error. Please check your connection and try again.';
                                    } finally {
                                        this.loading = false;
                                    }
                                }
                            }
                        }" @submit.prevent="submitForm">
                            
                            @csrf
                            <x-honeypot />
                            
                            <!-- Server Error Message -->
                            <div x-show="serverError" x-cloak class="mb-6 p-4 bg-rose-50 border border-rose-200 rounded-xl">
                                <div class="flex items-center gap-3">
                                    <svg class="w-5 h-5 text-rose-600 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                    </svg>
                                    <p class="text-rose-700 text-sm" x-text="serverError"></p>
                                </div>
                            </div>
                            
                            <!-- Success Message -->
                            <div x-show="submitted" x-cloak class="mb-8 p-6 bg-emerald-50 border border-emerald-200 rounded-2xl">
                                <div class="flex items-start gap-4">
                                    <div class="flex-shrink-0 w-10 h-10 bg-emerald-100 rounded-full flex items-center justify-center">
                                        <svg class="w-6 h-6 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                        </svg>
                                    </div>
                                    <div>
                                        <h4 class="font-bold text-emerald-800">Message Sent Successfully!</h4>
                                        <p class="text-emerald-700 text-sm mt-1">Thank you for contacting us. We'll get back to you within 24 hours.</p>
                                    </div>
                                </div>
                            </div>
                            
                            <div x-show="!submitted" class="space-y-6">
                                <div class="grid sm:grid-cols-2 gap-6">
                                    <!-- Name -->
                                    <div>
                                        <label for="name" class="block text-sm font-semibold text-slate-700 mb-2">
                                            Full Name <span class="text-rose-500">*</span>
                                        </label>
                                        <input type="text" 
                                               id="name" 
                                               name="name"
                                               x-model="formData.name"
                                               :class="errors.name ? 'border-rose-300 focus:border-rose-500 focus:ring-rose-500' : 'border-slate-200 focus:border-primary-500 focus:ring-primary-500'"
                                               class="w-full px-4 py-3 bg-white border rounded-xl shadow-sm focus:ring-2 focus:ring-offset-0 transition-colors"
                                               placeholder="Your name">
                                        <p x-show="errors.name" x-text="errors.name" class="mt-1 text-sm text-rose-600"></p>
                                    </div>
                                    
                                    <!-- Email -->
                                    <div>
                                        <label for="email" class="block text-sm font-semibold text-slate-700 mb-2">
                                            Email Address <span class="text-rose-500">*</span>
                                        </label>
                                        <input type="email" 
                                               id="email" 
                                               name="email"
                                               x-model="formData.email"
                                               :class="errors.email ? 'border-rose-300 focus:border-rose-500 focus:ring-rose-500' : 'border-slate-200 focus:border-primary-500 focus:ring-primary-500'"
                                               class="w-full px-4 py-3 bg-white border rounded-xl shadow-sm focus:ring-2 focus:ring-offset-0 transition-colors"
                                               placeholder="you@example.com">
                                        <p x-show="errors.email" x-text="errors.email" class="mt-1 text-sm text-rose-600"></p>
                                    </div>
                                </div>
                                
                                <div class="grid sm:grid-cols-2 gap-6">
                                    <!-- Company -->
                                    <div>
                                        <label for="company" class="block text-sm font-semibold text-slate-700 mb-2">
                                            Company Name
                                        </label>
                                        <input type="text" 
                                               id="company" 
                                               name="company"
                                               x-model="formData.company"
                                               class="w-full px-4 py-3 bg-white border border-slate-200 rounded-xl shadow-sm focus:border-primary-500 focus:ring-2 focus:ring-primary-500 focus:ring-offset-0 transition-colors"
                                               placeholder="Your company (optional)">
                                    </div>
                                    
                                    <!-- Subject -->
                                    <div>
                                        <label for="subject" class="block text-sm font-semibold text-slate-700 mb-2">
                                            Subject <span class="text-rose-500">*</span>
                                        </label>
                                        <select id="subject" 
                                                name="subject"
                                                x-model="formData.subject"
                                                :class="errors.subject ? 'border-rose-300 focus:border-rose-500 focus:ring-rose-500' : 'border-slate-200 focus:border-primary-500 focus:ring-primary-500'"
                                                class="w-full px-4 py-3 bg-white border rounded-xl shadow-sm focus:ring-2 focus:ring-offset-0 transition-colors">
                                            <option value="">Select a subject</option>
                                            <option value="project">New Project Inquiry</option>
                                            <option value="product">Product Information (Garand 101)</option>
                                            <option value="services">Service Consultation</option>
                                            <option value="partnership">Partnership Opportunity</option>
                                            <option value="other">Other</option>
                                        </select>
                                        <p x-show="errors.subject" x-text="errors.subject" class="mt-1 text-sm text-rose-600"></p>
                                    </div>
                                </div>
                                
                                <!-- Message -->
                                <div>
                                    <label for="message" class="block text-sm font-semibold text-slate-700 mb-2">
                                        Message <span class="text-rose-500">*</span>
                                    </label>
                                    <textarea id="message" 
                                              name="message"
                                              rows="5" 
                                              x-model="formData.message"
                                              :class="errors.message ? 'border-rose-300 focus:border-rose-500 focus:ring-rose-500' : 'border-slate-200 focus:border-primary-500 focus:ring-primary-500'"
                                              class="w-full px-4 py-3 bg-white border rounded-xl shadow-sm focus:ring-2 focus:ring-offset-0 transition-colors resize-none"
                                              placeholder="Tell us about your project or inquiry..."></textarea>
                                    <p x-show="errors.message" x-text="errors.message" class="mt-1 text-sm text-rose-600"></p>
                                </div>
                                
                                <!-- Cloudflare Turnstile -->
                                <div>
                                    <x-turnstile />
                                    <p x-show="errors['cf-turnstile-response']" x-text="errors['cf-turnstile-response']" class="mt-1 text-sm text-rose-600"></p>
                                </div>
                                
                                <!-- Submit Button -->
                                <div>
                                    <button type="submit" 
                                            :disabled="loading"
                                            class="w-full sm:w-auto inline-flex items-center justify-center gap-2 px-8 py-4 bg-primary-600 text-white font-semibold rounded-xl
                                                   shadow-lg shadow-primary-600/25 hover:bg-primary-700 focus:outline-none focus:ring-2 focus:ring-primary-500 focus:ring-offset-2
                                                   disabled:opacity-70 disabled:cursor-not-allowed transition-all duration-200">
                                        <span x-show="!loading">Send Message</span>
                                        <span x-show="loading" x-cloak class="flex items-center gap-2">
                                            <svg class="animate-spin h-5 w-5" fill="none" viewBox="0 0 24 24">
                                                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                                <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                                            </svg>
                                            Sending...
                                        </span>
                                        <svg x-show="!loading" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- FAQ Section -->
    <section class="py-20 lg:py-28 bg-slate-50">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <span class="inline-block px-4 py-1.5 bg-primary-100 text-primary-700 text-sm font-semibold rounded-full mb-4">
                    FAQ
                </span>
                <h2 class="text-3xl font-bold text-slate-900">Frequently Asked Questions</h2>
            </div>
            
            <div x-data="{ openFaq: null }" class="space-y-4">
                @php
                    $faqs = [
                        [
                            'question' => 'How do I start a project with Dimgent Technologies?',
                            'answer' => 'Simply send us a message through the contact form above or email us directly. Describe your project idea and requirements, and our team will get back to you within 24 hours to discuss the next steps.'
                        ],
                        [
                            'question' => 'Do you work with international clients?',
                            'answer' => 'Yes! We work with clients from around the world. Distance is not a problem - we use modern communication tools and keep you updated on progress with photos and videos throughout the development process.'
                        ],
                        [
                            'question' => 'What is your typical project timeline?',
                            'answer' => 'Project timelines vary depending on complexity and scope. Simple projects may take a few weeks, while complex full-cycle developments can take several months. We\'ll provide a detailed timeline estimate after understanding your requirements.'
                        ],
                        [
                            'question' => 'Can you complete a project that was already started elsewhere?',
                            'answer' => 'Yes, we offer completion services for uncompleted projects. Our team can review your existing work, identify what needs to be done, and complete the development to your specifications.'
                        ],
                    ];
                @endphp
                
                @foreach($faqs as $index => $faq)
                    <div class="bg-white rounded-2xl border border-slate-100 overflow-hidden">
                        <button @click="openFaq = openFaq === {{ $index }} ? null : {{ $index }}"
                                class="w-full px-6 py-5 text-left flex items-center justify-between gap-4 hover:bg-slate-50 transition-colors">
                            <span class="font-semibold text-slate-900">{{ $faq['question'] }}</span>
                            <svg :class="openFaq === {{ $index }} ? 'rotate-180' : ''" 
                                 class="w-5 h-5 text-slate-400 transition-transform duration-200 flex-shrink-0" 
                                 fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                            </svg>
                        </button>
                        <div x-show="openFaq === {{ $index }}" 
                             x-transition:enter="transition ease-out duration-200"
                             x-transition:enter-start="opacity-0 -translate-y-2"
                             x-transition:enter-end="opacity-100 translate-y-0"
                             x-transition:leave="transition ease-in duration-150"
                             x-transition:leave-start="opacity-100 translate-y-0"
                             x-transition:leave-end="opacity-0 -translate-y-2"
                             x-cloak>
                            <div class="px-6 pb-5 text-slate-600 leading-relaxed">
                                {{ $faq['answer'] }}
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
