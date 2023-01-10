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
              <!-- Slides -->
              <div class="swiper-slide">
                <div class="px-5">
                  <span class="text-white text-right block">n/16</span>
                  <div class="bg-gray-300 aspect-[3/2]">img</div>
                </div>

                <div class="text-white text-center">
                  <h3>Titulo</h3>
                  <p>Tag: Em casa / No trabalho</p>
                  <div>
                    <p>Descrição</p>
                    <a href="#">+More</a>
                  </div>

                  <a href="#">Link no Ar</a>
                  <a href="#">Link Github</a>
                </div>
              </div>

            </div>

            <!-- If we need pagination -->
            <div class="swiper-pagination"></div>

            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>

            <!-- If we need scrollbar -->
            <div class="swiper-scrollbar"></div>
          </div>
      </div>
    </div>



  </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/mandelbrot/Documentos/Faculdade/portfolio/portfolio/wp-content/themes/portfolio/resources/views/home.blade.php ENDPATH**/ ?>