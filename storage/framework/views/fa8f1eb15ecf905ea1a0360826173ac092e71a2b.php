
<?php $__env->startSection('content'); ?>
<main class="main">
            <!--==================== HOME ====================-->
            <section class="home" id="home">
                <img src="/img/allegra.jpg" alt="" class="home__img">

                <div class="home__container container grid">
                    <div class="home__data">
                        <h1 class="home__data-title">Allegra<br><b>Immobilienbewertung</b></h1>
                       

                    </div>

                    <div class="home__social">
                        <a href="https://www.facebook.com/" target="_blank" class="home__social-link">
                            <i class="ri-facebook-box-fill"></i>
                        </a>
                        <a href="https://www.instagram.com/" target="_blank" class="home__social-link">
                            <i class="ri-instagram-fill"></i>
                        </a>
                        <a href="https://twitter.com/" target="_blank" class="home__social-link">
                            <i class="ri-twitter-fill"></i>
                        </a>
                    </div>

                   
                </div>
            </section>

            <!--==================== ABOUT ====================-->
            <section class="about section" id="about">
                <div class="about__container container grid">
                    <div class="about__data">
                        <h2 class="section__title about__title">Allegra <br> Immobilienbewertung</h2>
                        <p class="about__description">Präzise, verlässliche und transparente Immobilienbewertung.<br> Wir beiten die fachliche Unterstützung, die Sie benötigen.</p>
                        <a href="https://allegra-immobilienbewertung.de/ueber-uns" class="button">Erfahren Sie mehr</a>
                    </div>

                    <div class="about__img">
                        <div class="about__img-overlay">
                            <img src="/img/2.jpg" alt="" class="about__img-one">
                        </div>

                        <div class="about__img-overlay">
                            <img src="/img/1.jpg" alt="" class="about__img-two">
                        </div>
                    </div>
                </div>
            </section>
            
            <!--==================== DISCOVER ====================-->
            <section class="discover section" id="discover">
                <h2 class="section__title">Verfahren</h2>
                
                <div class="discover__container container swiper-container">
                    <div class="swiper-wrapper">
                        <!--==================== DISCOVER 1 ====================-->
                        <div class="discover__card swiper-slide"><a href="/verkehrswertverfahren">
                            <img src="/img/verkehrswert.jpg" alt="" class="discover__img">
                            <div class="discover__data">
                                <h2 class="discover__title">Verkehrswert</h2>
                                <span class="discover__description"></span>
                            </div></a>
                        </div>

                        <!--==================== DISCOVER 2 ====================-->
                        <div class="discover__card swiper-slide"><a href="/sachwertverfahren">
                            <img src="/img/sachwert.jpg" alt="" class="discover__img">
                            <div class="discover__data">
                                <h2 class="discover__title">Sachwert</h2>
                                <span class="discover__description"></span>
                            </div></a>
                        </div>

                        

                        <!--==================== DISCOVER 4 ====================-->
                        <div class="discover__card swiper-slide"><a href="/ertragswertverfahren">
                            <img src="/img/ertragswert.jpg" alt="" class="discover__img">
                            <div class="discover__data">
                                <h2 class="discover__title">Ertragswert</h2>
                                <span class="discover__description"></span>
                            </div></a>
                        </div>
                    </div>
                </div>
            </section>

            <!--==================== EXPERIENCE ====================-->
            <section class="experience section">
                <h2 class="section__title">Allegra Immobilienbewertung <br> Der Partner für Ihre Immobilien</h2>

                <div class="experience__container container grid">
                    <div class="experience__content grid">
                        <div class="experience__data">

                        <?php if (isset($component)) { $__componentOriginalcd9972c8156dfa6e5fd36675ca7bf5f21b506e2e = $component; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('entypo-location'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(BladeUI\Icons\Components\Svg::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['height' => '70']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalcd9972c8156dfa6e5fd36675ca7bf5f21b506e2e)): ?>
<?php $component = $__componentOriginalcd9972c8156dfa6e5fd36675ca7bf5f21b506e2e; ?>
<?php unset($__componentOriginalcd9972c8156dfa6e5fd36675ca7bf5f21b506e2e); ?>
<?php endif; ?>
                        <br>

                            <span class="experience__description">Regionale <br/>Expertise</span>
                        </div>

                        <div class="experience__data">

                            <?php if (isset($component)) { $__componentOriginalcd9972c8156dfa6e5fd36675ca7bf5f21b506e2e = $component; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('fas-graduation-cap'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(BladeUI\Icons\Components\Svg::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['height' => '70']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalcd9972c8156dfa6e5fd36675ca7bf5f21b506e2e)): ?>
<?php $component = $__componentOriginalcd9972c8156dfa6e5fd36675ca7bf5f21b506e2e; ?>
<?php unset($__componentOriginalcd9972c8156dfa6e5fd36675ca7bf5f21b506e2e); ?>
<?php endif; ?>
                        <br>

                            <span class="experience__description">Zertifiziert</span>
                        </div>

                        <div class="experience__data">

                            <?php if (isset($component)) { $__componentOriginalcd9972c8156dfa6e5fd36675ca7bf5f21b506e2e = $component; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('bxs-lock-open'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(BladeUI\Icons\Components\Svg::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['height' => '70']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalcd9972c8156dfa6e5fd36675ca7bf5f21b506e2e)): ?>
<?php $component = $__componentOriginalcd9972c8156dfa6e5fd36675ca7bf5f21b506e2e; ?>
<?php unset($__componentOriginalcd9972c8156dfa6e5fd36675ca7bf5f21b506e2e); ?>
<?php endif; ?>
                        <br>

                            <span class="experience__description">Unabhängige <br/>Gutachter</span>
                        </div>
                    </div>

                    <div class="experience__img grid">
                        <div class="experience__overlay">
                            <img src="/img/3.jpg" alt="" class="experience__img-one">
                        </div>
                        
                        <div class="experience__overlay">
                            <img src="/img/4.jpg" alt="" class="experience__img-two">
                        </div>
                    </div>
                </div>
            </section>


            <!--==================== PLACES ====================-->
            <section class="place section" id="place">
                <h2 class="section__title">Wertermittlungen für folgende Immobilienarten</h2>

                <div class="place__container container grid">
                    <!--==================== PLACES CARD 1 ====================-->
                    <div class="place__card">
<a href="/wohnimmobilien">
                        <img src="/img/wohnimmobilien.jpg" alt="" class="place__img">
                        
                        <div class="place__content">
                          

                            <div class="place__data">
                                <h3 class="place__title">Wohn-<br>immobilien</h3>
                                
                            </div>
                        </div>

                        <button class="button button--flex place__button">
                            <i class="ri-arrow-right-line"></i>
                        </button></a>
                    </div>

                    <!--==================== PLACES CARD 2 ====================-->
                    <div class="place__card"><a href="/gewerbeimmobilien">
                        <img src="/img/gewerbeimmobilien.jpg" alt="" class="place__img">
                        
                        <div class="place__content">
                            

                            <div class="place__data">
                                <h3 class="place__title">Gewerbe-<br>immobilien</h3>
                                
                            </div>
                        </div>

                        <button class="button button--flex place__button">
                            
			<i class="ri-arrow-right-line"></i>
                        </button></a>
                    </div>

                    <!--==================== PLACES CARD 3 ====================-->
                    <div class="place__card">
<a href="/sonderimmobilien">
                        <img src="/img/sonderimmobilien.jpg" alt="" class="place__img">
                        
                        <div class="place__content">
                           

                            <div class="place__data">
                                <h3 class="place__title">Sonder-<br>immobilien</h3>
                                
                            </div>
                        </div>

                        <button class="button button--flex place__button">
                            
			<i class="ri-arrow-right-line"></i>
                        </button></a>
                    </div>

                    <!--==================== PLACES CARD 4 ====================-->
                    <div class="place__card">
<a href="/grundstuecke-und-rechte">
                        <img src="/img/grundstueck.jpg" alt="" class="place__img">
                        
                        <div class="place__content">
                            

                            <div class="place__data">
                                <h3 class="place__title">Grundstücke & Rechte</h3>
                                
                            </div>
                        </div>

                        <button class="button button--flex place__button">
                            <i class="ri-arrow-right-line"></i>
                        </button></a>
                    </div>

                    <!--==================== PLACES CARD 5 ====================-->
                     <div class="place__card">
<a href="/landwirtschaftliche-immobilien">

                        <img src="/img/landwirtschaft.jpg" alt="" class="place__img">
                        
                        <div class="place__content">
                            

                            <div class="place__data">
                                <h3 class="place__title">Landwirt-<br>schaftliche Immobilien</h3>
                                
                            </div>
                        </div>

                        <button class="button button--flex place__button">
                            <i class="ri-arrow-right-line"></i>
                        </button></a>
                    </div>

            </section> 
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\allegra2\resources\views/index.blade.php ENDPATH**/ ?>