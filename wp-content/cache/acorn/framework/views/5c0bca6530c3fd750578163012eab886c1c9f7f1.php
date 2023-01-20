<?php $__env->startSection('content'); ?>
  <?php echo $__env->make('sections.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <div class="bg-pfd-very-dark-shade font-pfd-baskervville pb-[50px]">
    <div class="min-h-screen pt-[170px] flex flex-col items-center">
      <div class="">
        <img src="<?= \Roots\asset('images/img-home.png'); ?>"/>
      </div>

      <div class=" text-white text-center mt-8">
        <p class="text-title-1 tracking-[0.09rem]">Hello! I'm <span class="block text-title-2 -mt-[10px] -mb-[12px]">Filipe Davi</span> Web Developer</p>
      </div>

      <a href="https://github.com/WKFilipeDavi" target="_blank"
      class="text-pfd-green-yellow text-title-1 tracking-[0.09rem]
      py-3 px-10 bg-pfd-dark-shade rounded-[22px] mt-12
      ">Github</a>
    </div>

    <div class="min-h-screen flex items-center">
      <div id="home-who" class="pt-4 pb-6 px-8 mt-10 bg-pfd-dark-shade rounded-[61px] min-h-[400px]">
        <h2 class="text-white text-center text-title-3"> &ltWho am i? /&gt </h2>

        <div class="text-white mt-4">
          <?php echo $whoAmI; ?>

        </div>
      </div>
    </div>

    <span class="text-white text-[36px] flex justify-center">&lt!-- &nbsp &nbsp --/&gt</span>

    <div class="min-h-screen flex items-center">
      <div class="w-full neon-object pt-4 pb-6 px-8 mt-10 bg-pfd-dark-shade rounded-[61px] min-h-[400px]">
        <h2 class="text-white text-center text-title-3"> &ltPortfolio /&gt </h2>
        <!-- Slider main container -->
          <div class="swiper">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">

            <?php if($projects): ?>
              <?php $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php
                  $terms = get_the_terms($project, 'project_type');
                  $gh_link = get_field('github_link', $project);
                  $on_link = get_field('on_link', $project);
                ?>

                <div class="swiper-slide">
                  <div class="px-5">
                    <span class="text-white text-right block"><?php echo e($loop->iteration); ?>/<?php echo e($loop->count); ?></span>
                    <div class="bg-gray-300 aspect-[3/2]"><?php echo get_the_post_thumbnail($project, 'full', array('class' => 'h-full')); ?></div>
                  </div>

                  <div class="text-white text-center mt-2 px-5">
                    <h3 class="text-title-1"><?php echo e(get_the_title($project)); ?> </h3>
                    <p class="text-subtitle-1"><?php if($terms): ?> <?php $__currentLoopData = $terms; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $term): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> <?php if($loop->iteration > 1): ?>, <?php endif; ?> <?php echo e($term->name); ?> <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> <?php endif; ?></p>
                    <div class="mt-4 mb-[18px]">
                      <p class="text-justify">
                        <?php echo e(get_the_excerpt($project)); ?>

                      </p>
                      <a href="<?php echo e(get_permalink($project)); ?>" class="block text-right text-pfd-green-yellow">+ More</a>
                    </div>

                    <?php if($on_link): ?>
                      <a href="<?php echo e($on_link); ?>" class="block text-left text-content-1"><i class="fa-solid fa-link text-pfd-green-yellow"></i> <span class="underline">Link no Ar </span></a>
                    <?php endif; ?>

                    <?php if($gh_link): ?>
                      <a href="<?php echo e($gh_link); ?>" class="block text-left mt-[10px] text-content-1"><i class="fa-solid fa-link text-pfd-green-yellow"></i> <span class="underline"> Link Github </span></a>
                    <?php endif; ?>

                  </div>
                </div>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            <?php endif; ?>
              <!-- Slides -->
              <div class="swiper-slide">
                <div class="px-5">
                  <span class="text-white text-right block">n/16</span>
                  <div class="bg-gray-300 aspect-[3/2]">img</div>
                </div>

                <div class="text-white text-center mt-2 px-5">
                  <h3 class="text-title-1">Titulo</h3>
                  <p class="text-subtitle-1">Tag: Em casa / No trabalho</p>
                  <div class="mt-4 mb-[18px]">
                    <p class="text-justify">Mussum Ipsum, cacilds vidis litro abertis.
                      Viva Forevis aptent taciti sociosqu ad litora torquent.
                      Não sou faixa preta cumpadi,
                      sou preto inteiris, inteiris.Paisis, filhis,
                      espiritis santis.Admodum accumsan disputationi eu sit.
                      Vide electram sadipscing et per.
                    </p>
                    <a href="#" class="block text-right">+ More</a>
                  </div>

                  <a href="#" class="block text-left text-content-1">Link no Ar</a>
                  <a href="#" class="block text-left mt-[10px] text-content-1">Link Github</a>
                </div>
              </div>

              <div class="swiper-slide">
                <div class="px-5">
                  <span class="text-white text-right block">n/16</span>
                  <div class="bg-gray-300 aspect-[3/2]">img</div>
                </div>

                <div class="text-white text-center mt-2 px-5">
                  <h3 class="text-title-1">Titulo</h3>
                  <p class="text-subtitle-1">Tag: Em casa / No trabalho</p>
                  <div class="mt-4 mb-[18px]">
                    <p class="text-justify">Mussum Ipsum, cacilds vidis litro abertis.
                      Viva Forevis aptent taciti sociosqu ad litora torquent.
                      Não sou faixa preta cumpadi,
                      sou preto inteiris, inteiris.Paisis, filhis,
                      espiritis santis.Admodum accumsan disputationi eu sit.
                      Vide electram sadipscing et per.
                    </p>
                    <a href="#" class="block text-right">+ More</a>
                  </div>

                  <a href="#" class="block text-left text-content-1">Link no Ar</a>
                  <a href="#" class="block text-left mt-[10px] text-content-1">Link Github</a>
                </div>
              </div>

            </div>

            <!-- If we need pagination -->
            <div class="swiper-pagination swiper-pagination--static "></div>

            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
          </div>
      </div>
    </div>



  </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/mandelbrot/Documentos/Faculdade/portfolio/portfolio/wp-content/themes/portfolio/resources/views/home.blade.php ENDPATH**/ ?>