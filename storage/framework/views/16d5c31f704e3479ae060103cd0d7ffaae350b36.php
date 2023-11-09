

<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header bg-white" style="font-weight: bold; font-size: 18px"><span class="text-primary">Chatter.</span> Vista</div>

                    <div class="card-body" id="app">
                        <chat-app :user="<?php echo e(auth()->user()); ?>"></chat-app>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\dynam\laravelproj\resources\views/home.blade.php ENDPATH**/ ?>