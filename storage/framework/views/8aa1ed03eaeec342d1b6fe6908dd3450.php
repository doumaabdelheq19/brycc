<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
     <link rel="stylesheet" href="<?php echo e(asset('css/all.min.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('css/all.css')); ?>" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="<?php echo e(asset('css/contact.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('css/regular.css')); ?>" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,500;0,700;1,500;1,700&display=swap" rel="stylesheet">
    <link
      href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;500;600;700;900&family=Jomhuria&family=Open+Sans:ital,wght@0,300;0,500;0,700;0,800;1,400;1,800&family=Poppins:ital,wght@0,200;0,500;0,700;0,800;1,100;1,300&family=Roboto:ital,wght@0,100;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700&family=Work+Sans:ital,wght@0,100;0,300;0,400;0,500;1,500;1,700;1,900&display=swap"
      rel="stylesheet"
    />
    <script src="<?php echo e(asset('js/singUp.js')); ?>" defer></script>
</head>
<body>
     <!-- Start contact us  -->
     <div class="container">
        <div class="content">
          <div class="image-box">
          <img src="./Imeges/depositphotos_515228796-stock-illustration-online-registration-sign-login-account.webp" alt=""> 
          </div>
         
         
        <form method="POST" action="<?php echo e(route('login')); ?>" id="registration-form" >
          <?php echo csrf_field(); ?>
          <h2 class="topic">Log in</h2>
          
          <div class="input-box">
            <input id="email"  type="email" name="email" :value="old('email')" required autocomplete="username">
            <label for="email" :value="__('Email')" >Enter your email</label>
            <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input-error','data' => ['messages' => $errors->get('email'),'class' => 'mt-2']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('input-error'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['messages' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($errors->get('email')),'class' => 'mt-2']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
          </div>
           
        
          
          <div class="input-box">
            <input id="password" 
            type="password"
            name="password"
            required autocomplete="new-password">
            <label for="password" :value="__('Password')">Enter password</label>
            <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input-error','data' => ['messages' => $errors->get('password'),'class' => 'mt-2']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('input-error'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['messages' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($errors->get('password')),'class' => 'mt-2']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
          </div>
          
    
          <div class="input-box">
            <input class="openAlert" type="submit" value="Submit" data-name="contact">
          </div>

          <a href="<?php echo e(route('register')); ?>" class="alreadyHaveAco">Create an account</a>
          <a href="forgot-password" class="alreadyHaveAco">Forgot password ?</a>
        </form>
      </div>
      </div>
      <script>
        $(document).ready(function () {
            $('#registration-form').on('submit', function (e) {
                e.preventDefault();
    
                $.ajax({
                    type: 'POST',
                    url: $(this).attr('action'),
                    data: $(this).serialize(),
                    success: function (response) {
                        // Handle successful registration
                        window.location.href = 'dashboard';
                    },
                    error: function (xhr) {
                        if (xhr.status === 422) {
                            // Validation errors
                            var errors = xhr.responseJSON.errors;
    
                            var errorMessage = '';
                            for (var key in errors) {
                                errorMessage += errors[key].join('\n') + '\n';
                            }
    
                            alert("Email or password is incorrect");
                        } else {
                            // Handle other errors
                            alert('An error occurred. Please try again later.');
                        }
                    }
                });
            });
        });
    </script>
   
    
    
    
    
</body>
</html><?php /**PATH C:\xampp\htdocs\final-project\resources\views/auth/login.blade.php ENDPATH**/ ?>