<?php $__env->startSection('title', 'Разработки'); ?>
<?php $__env->startSection('meta_description', 'Garand 101 - феррозондовый магнитометр-градиометр для археологических исследований и геологии.'); ?>
<?php $__env->startSection('meta_keywords', 'Garand 101, феррозондовый магнитометр, градиометр, археология, геология'); ?>
<?php $__env->startSection('robots', 'index, follow'); ?>

<?php $__env->startSection('content'); ?>
    <!-- Hero Section -->
    <section class="relative bg-gradient-to-br from-slate-900 via-slate-800 to-primary-900 py-20 lg:py-28">
        <div class="absolute inset-0 opacity-5">
            <div class="absolute inset-0" style="background-image: url('data:image/svg+xml,%3Csvg width=&quot;40&quot; height=&quot;40&quot; viewBox=&quot;0 0 40 40&quot; xmlns=&quot;http://www.w3.org/2000/svg&quot;%3E%3Cg fill=&quot;%23ffffff&quot; fill-opacity=&quot;1&quot; fill-rule=&quot;evenodd&quot;%3E%3Cpath d=&quot;M0 40L40 0H20L0 20M40 40V20L20 40&quot;/%3E%3C/g%3E%3C/svg%3E');"></div>
        </div>
        
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <span class="inline-block px-4 py-1.5 bg-primary-500/20 text-primary-400 text-sm font-semibold rounded-full mb-4">
                Наши разработки
            </span>
            <h1 class="text-4xl sm:text-5xl font-extrabold text-white mb-6">
                Garand 101
            </h1>
            <p class="text-xl sm:text-2xl text-primary-300 font-medium mb-4">
                Феррозондовый магнитометр-градиометр
            </p>
            <p class="text-lg text-slate-300 max-w-2xl mx-auto">
                Пешеходный носимый магнитометр
            </p>
        </div>
    </section>
    
    <!-- Main Product Section -->
    <section class="py-20 lg:py-28 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-12 lg:gap-16 items-start">
                <!-- Product Gallery -->
                <div x-data="{ activeImage: '<?php echo e(asset('images/products/main_photo_of_garand101.jpg')); ?>' }" class="lg:sticky lg:top-28">
                    <!-- Main Image -->
                    <div class="relative rounded-2xl overflow-hidden shadow-2xl mb-6 bg-slate-100">
                        <img :src="activeImage" 
                             alt="Garand 101 Magnetometer" 
                             class="w-full h-auto object-contain">
                    </div>
                    
                    <!-- Thumbnail Gallery -->
                    <div class="grid grid-cols-4 gap-3">
                        <?php
                            $images = [
                                'main_photo_of_garand101.jpg',
                                'photo_garand101_5.jpg',
                                'photo_garand101_6.jpg',
                                'photo_garand101_7.jpg',
                                'photo_garand101_8.jpg',
                                'photo_garand101_10.jpg',
                                'photo_garand101_11.jpg',
                                'bag_2_forest.jpg',
                            ];
                        ?>
                        
                        <?php $__currentLoopData = $images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <button @click="activeImage = '<?php echo e(asset('images/products/' . $image)); ?>'"
                                    :class="activeImage === '<?php echo e(asset('images/products/' . $image)); ?>' ? 'ring-2 ring-primary-500 ring-offset-2' : 'hover:opacity-80'"
                                    class="rounded-lg overflow-hidden bg-slate-100 aspect-square transition-all duration-200">
                                <img src="<?php echo e(asset('images/products/' . $image)); ?>" 
                                     alt="Garand 101" 
                                     class="w-full h-full object-cover">
                            </button>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
                
                <!-- Product Info -->
                <div>
                    <div class="mb-8">
                        <span class="inline-block px-3 py-1 bg-emerald-100 text-emerald-700 text-sm font-semibold rounded-full mb-4">
                            В наличии
                        </span>
                        <h2 class="text-3xl sm:text-4xl font-bold text-slate-900 mb-4">
                            Магнитометр-градиометр Garand 101
                        </h2>
                        <p class="text-lg text-slate-600 leading-relaxed">
                            Garand 101 – это пешеходный носимый магнитометр-градиометр, магнитометрический 
                            преобразователь градиента компоненты магнитной индукции в цифровое и графическое 
                            представление на экране жидкокристаллического дисплея.
                        </p>
                    </div>
                    
                    <!-- Key Benefits -->
                    <div class="bg-slate-50 rounded-2xl p-6 mb-8">
                        <h3 class="text-lg font-bold text-slate-900 mb-4">Особенности</h3>
                        <div class="space-y-3">
                            <?php
                                $keyFeatures = [
                                    'Простота использования',
                                    'Один из самых лёгких магнитометров (2 кг)',
                                    'Прочная и цельная конструкция',
                                    'Высокая устойчивость к помехам',
                                    'Звуковой сигнал + график на экране'
                                ];
                            ?>
                            <?php $__currentLoopData = $keyFeatures; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $feature): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="flex items-center gap-3">
                                    <div class="flex-shrink-0 w-6 h-6 bg-primary-100 rounded-full flex items-center justify-center">
                                        <svg class="w-4 h-4 text-primary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                        </svg>
                                    </div>
                                    <span class="text-slate-700"><?php echo e($feature); ?></span>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                    
                    <!-- Target Areas -->
                    <div class="mb-8">
                        <h3 class="text-lg font-bold text-slate-900 mb-4">Области применения</h3>
                        <div class="grid grid-cols-2 gap-3">
                            <?php
                                $areas = [
                                    ['icon' => '🏛️', 'name' => 'Археология'],
                                    ['icon' => '🌍', 'name' => 'Экологический мониторинг'],
                                    ['icon' => '🔍', 'name' => 'Криминалистика'],
                                    ['icon' => '⛰️', 'name' => 'Геология'],
                                    ['icon' => '🏗️', 'name' => 'Строительство'],
                                    ['icon' => '🎖️', 'name' => 'Военное применение'],
                                ];
                            ?>
                            <?php $__currentLoopData = $areas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $area): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="flex items-center gap-3 p-3 bg-white rounded-xl border border-slate-200">
                                    <span class="text-2xl"><?php echo e($area['icon']); ?></span>
                                    <span class="text-sm font-medium text-slate-700"><?php echo e($area['name']); ?></span>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                    
                    <!-- CTA Buttons -->
                    <div class="flex flex-col sm:flex-row gap-4">
                        <a href="<?php echo e(asset('images/products/garand101_product_presentation.pdf')); ?>" 
                           target="_blank"
                           class="inline-flex items-center justify-center gap-2 px-6 py-3 bg-primary-600 text-white font-semibold rounded-xl
                                  shadow-lg shadow-primary-600/25 hover:bg-primary-700 transition-all duration-200">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                            </svg>
                            Скачать презентацию (PDF)
                        </a>
                        <a href="<?php echo e(route('contacts')); ?>" 
                           class="inline-flex items-center justify-center gap-2 px-6 py-3 bg-slate-100 text-slate-700 font-semibold rounded-xl
                                  hover:bg-slate-200 transition-colors">
                            Запросить информацию
                        </a>
                    </div>
                    
                    <!-- External Link -->
                    
                </div>
            </div>
        </div>
    </section>
    
    <!-- Technology Section -->
    <section class="py-20 lg:py-28 bg-slate-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <span class="inline-block px-4 py-1.5 bg-primary-100 text-primary-700 text-sm font-semibold rounded-full mb-4">
                    Инновации
                </span>
                <h2 class="text-3xl sm:text-4xl font-bold text-slate-900 mb-4">
                    Новая технология измерения магнитного поля
                </h2>
                <p class="text-lg text-slate-600">
                    Garand 101 использует передовые технологии, которые выгодно отличают его от традиционных магнитометров.
                </p>
            </div>
            
            <div class="grid md:grid-cols-3 gap-8">
                <?php
                    $techBenefits = [
                        [
                            'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>',
                            'title' => 'Низкое энергопотребление',
                            'description' => 'Оптимизированное управление питанием увеличивает срок службы батареи.'
                        ],
                        [
                            'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3"/>',
                            'title' => 'Лёгкая конструкция',
                            'description' => 'Упрощённая конструкция делает прибор удобным для длительных полевых работ.'
                        ],
                        [
                            'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>',
                            'title' => 'Длительная работа',
                            'description' => 'Более длительная работа между зарядками для продуктивных исследований.'
                        ],
                    ];
                ?>
                
                <?php $__currentLoopData = $techBenefits; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $benefit): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="bg-white rounded-2xl p-8 shadow-sm border border-slate-100 text-center">
                        <div class="w-16 h-16 bg-primary-100 rounded-2xl flex items-center justify-center mx-auto mb-6">
                            <svg class="w-8 h-8 text-primary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <?php echo $benefit['icon']; ?>

                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-slate-900 mb-3"><?php echo e($benefit['title']); ?></h3>
                        <p class="text-slate-600"><?php echo e($benefit['description']); ?></p>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </section>
    
    <!-- Advantages Section -->
    <section class="py-20 lg:py-28 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-12 lg:gap-16 items-center">
                <div>
                    <span class="inline-block px-4 py-1.5 bg-amber-100 text-amber-700 text-sm font-semibold rounded-full mb-4">
                        Преимущества
                    </span>
                    <h2 class="text-3xl sm:text-4xl font-bold text-slate-900 mb-6">
                        Преимущества перед другими магнитометрами
                    </h2>
                    <p class="text-lg text-slate-600 mb-8">
                        Garand 101 предлагает значительные преимущества, которые делают его 
                        предпочтительным выбором для профессионалов.
                    </p>
                    
                    <div class="space-y-4">
                        <?php
                            $advantages = [
                                'Инновационная технология измерения магнитного поля',
                                'Полностью цифровое устройство с улучшенной устойчивостью к шумам',
                                'Удобная система визуализации и интерфейс',
                                'Надёжная и прочная конструкция',
                                'Расширенная зона обнаружения благодаря оптимизированной конструкции',
                                'Работа сразу после включения',
                                'Доступная цена'
                            ];
                        ?>
                        
                        <?php $__currentLoopData = $advantages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $advantage): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="flex items-start gap-4">
                                <div class="flex-shrink-0 w-8 h-8 bg-primary-600 text-white rounded-lg flex items-center justify-center font-bold text-sm">
                                    <?php echo e($index + 1); ?>

                                </div>
                                <p class="text-slate-700 pt-1"><?php echo e($advantage); ?></p>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
                
                <div class="relative">
                    <img src="<?php echo e(asset('images/products/photo_garand101_11.jpg')); ?>" 
                         alt="Garand 101 in use" 
                         class="rounded-2xl shadow-2xl">
                    <div class="absolute -z-10 -bottom-6 -left-6 w-full h-full bg-primary-100 rounded-2xl"></div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- CTA Section -->
    <section class="py-20 lg:py-28 bg-gradient-to-br from-primary-600 to-primary-700">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl sm:text-4xl font-bold text-white mb-6">
                Интересует Garand 101?
            </h2>
            <p class="text-xl text-primary-100 mb-8 max-w-2xl mx-auto">
                Свяжитесь с нами для получения информации о ценах, технических характеристиках или демонстрации.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="<?php echo e(route('contacts')); ?>" 
                   class="inline-flex items-center justify-center gap-2 px-8 py-4 bg-white text-primary-700 font-bold rounded-xl
                          shadow-xl hover:bg-primary-50 transform hover:-translate-y-0.5 transition-all duration-200">
                    Свяжитесь с нами
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                    </svg>
                </a>
                <a href="<?php echo e(asset('images/products/garand101_product_presentation.pdf')); ?>" 
                   target="_blank"
                   class="inline-flex items-center justify-center gap-2 px-8 py-4 bg-primary-500/30 text-white font-semibold rounded-xl
                          border border-primary-400/30 hover:bg-primary-500/50 transition-all duration-200">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                    </svg>
                    Скачать PDF-брошюру
                </a>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\Projects\laravel_herd_projects\dimgent_by\resources\views/pages/products.blade.php ENDPATH**/ ?>