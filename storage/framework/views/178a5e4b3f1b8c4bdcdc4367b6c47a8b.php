<?php $__env->startSection('title', 'Register'); ?>


<?php $__env->startSection('content'); ?>

<form action="<?php echo e(route('register.post')); ?>" method="post">

<?php echo csrf_field(); ?>

<div class="container mt-5">
    <div class="mb-3">
      <label for="startUp" class="form-label">Start Up Name</label>
      <input type="text" class="form-control" id="startUp" name="startUp"  value="<?php echo e(old('startUp')); ?>" placeholder="Enter Start Up Name">
          <?php $__errorArgs = ['startUp'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <div class="text-danger"><?php echo e($message); ?></div>
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    </div>

    <div class="mb-3">
      <label for="founderName" class="form-label">Founder Name</label>
      <input type="text" class="form-control" id="founderName" name="founderName" value="<?php echo e(old('founderName')); ?>"  placeholder="Enter the Founder Name">
          <?php $__errorArgs = ['founderName'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <div class="text-danger"><?php echo e($message); ?></div>
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    </div>

    <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">Email address</label>
      <input type="email" class="form-control" id="email" name="email" value="<?php echo e(old('email')); ?>"  placeholder="Enter Email Address">
          <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <div class="text-danger"><?php echo e($message); ?></div>
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    </div>

    <div class="mb-3">
      <label for="phone" class="form-label">Phone</label>
      <input type="text" class="form-control" id="phone" name="phone" value="<?php echo e(old('phone')); ?>"  placeholder="Enter Phone Number">
          <?php $__errorArgs = ['phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <div class="text-danger"><?php echo e($message); ?></div>
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    </div>

    

     <div class="mb-3">
      <label for="website" class="form-label">Website</label>
      <input type="text" class="form-control" id="website" name="website" value="<?php echo e(old('website')); ?>"  placeholder="Enter Website">
          <?php $__errorArgs = ['website'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <div class="text-danger"><?php echo e($message); ?></div>
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    </div>

    <div class="mb-3">

    <select class="form-select" name="sector" aria-label="Default select example">
      <option  value="" selected>Select Sector</option>
      <option value="HealthTech">HealthTech</option>
      <option value="EdTech">EdTech</option>
      <option value="FinTech">FinTech</option>
      <option value="AgriTech">AgriTech</option>
    </select>
        <?php $__errorArgs = ['sector'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <div class="text-danger"><?php echo e($message); ?></div>
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    </div>  

    <div class="mb-3">
      <label for="formFile" class="form-label">File Upload</label>
      <input class="form-control" type="file" id="formFile">
      
    </div>

    <div class="mb-3">
      <button type="submit" class="btn btn-success">Submit</button>
    </div>

    
</div>
    

</form>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\HP\Downloads\KSUM Laravel Project\example-app\resources\views/auth/register.blade.php ENDPATH**/ ?>