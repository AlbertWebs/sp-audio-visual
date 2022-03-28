<?php $__env->startSection('content'); ?>

  <main class="page-content">
  <?php echo $__env->make('front.breadcrumb', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php if($Portfolio->isEmpty()): ?>

    <?php else: ?>
    <section class="section-50 section-sm-75 section-lg-100 bg-whisper">
      <div class="shell">
      <div  data-wow-duration="2s" data-wow-offset="200" class=" section-title text-centercell-sm-10 cell-md-5 wow fadeInUp">
            <h2 style="text-align:center" class="text-red-orange">Our Work</h2>
            
            <h3 style="text-align:center" class="text-secondary">Creative Solutions, Technical Excellence</h3>
          </div>
        <div class="range range-sm-center range-md-left">



          
          
        </div>
        <div class="range text-center offset-top-40 offset-sm-top-60 offset-lg-top-100">
          <div class="cell-xs-12">
            <?php echo $Portfolio; ?>
          </div>
        </div>
      </div>
    </section>
           <?php echo $__env->make('front.instagram-work', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>
    <section class="section-60 section-sm-100 bg-primary">
      <div class="shell text-center text-md-left">
        <div class="range range-md-middle range-md-center">
        <?php $File = DB::table('files')->get() ?>
        <?php $__currentLoopData = $File; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $file): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

          <div class="cell-md-4 cell-lg-3 offset-top-30 offset-md-top-0"><a id="click-me" class="btn btn-xl btn-white-outline"> View Our Profile</a></div>
          <div class="container-popup" style="background: url('<?php echo e(url('/')); ?>/uploads/banners/tumblr_ms92j3l63y1s1b6gto1_1280.gif') no-repeat center;" id="show">
          <div class="x">
            <div class="one"></div>
            <div class="two"></div>
          </div>
        <div class="sign-up">
          <h1>Stagepass Audio Visual</h1>
          <p style="color:#fff">Get a copy of our <strong>Business Profile.<strong></p>
          <form data-form-output="form-output-global" data-form-type="subscribe" method="post" action="<?php echo e(url('/subscribe')); ?>" class="rd-mailform">
                <input type="text" name="email" placeholder="Enter your email address">
                <input type="submit" value="Request Profile">
                <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
              </form>
        
          
        </div>
    </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        
      </div>
    </section>
  
  </main>
       
  <!-- Popup -->


  <!-- Popup -->
<?php $__env->stopSection(); ?>


<?php echo $__env->make('front.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/stagepassco/public_html/resources/views/front/portfolio.blade.php ENDPATH**/ ?>