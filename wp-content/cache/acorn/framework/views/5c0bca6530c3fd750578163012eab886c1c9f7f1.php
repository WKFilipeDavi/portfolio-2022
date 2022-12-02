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

    <div class="neon-box pt-4 pb-6 px-8 mt-10 bg-pfd-dark-shade rounded-[61px] min-h-[400px]">
      <h2 class="text-white text-center text-title-3"> &ltWho am i? /&gt </h2>

      <div class="text-white mt-4">
        <?php echo $whoAmI; ?>

      </div>
    </div>
  </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/mandelbrot/Documentos/Faculdade/portfolio/portfolio/wp-content/themes/portfolio/resources/views/home.blade.php ENDPATH**/ ?>