<!DOCTYPE html>
<html>
<head>
    <title>Laravel 10 Scout Full Text Search Tutorial - ItSolutionStuff.com</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
      
<div class="container">
    <h1>Laravel 10 Scout Full Text Search Tutorial - ItSolutionStuff.com</h1>
  
    <form method="GET">
        <div class="input-group mb-3">
          <select name="search">
            <option value="zfefez" >zfefez</option>
            <option value="zfefez" >zfefez</option>
            
          </select>
          <select name="searchh">
            <option value="DCDC" >zfefez</option>
            <option value="DCDC" >zfefez</option>
            
          </select>
          <button class="btn btn-success" type="submit" id="button-addon2">Search</button>
        </div>
    </form>
  
    <table class="table table-bordered data-table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($user->id); ?></td>
                <td><?php echo e($user->name); ?></td>
                <td><?php echo e($user->description); ?></td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php $__currentLoopData = $userss; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($user->id); ?></td>
                <td><?php echo e($user->name); ?></td>
                <td><?php echo e($user->description); ?></td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>
    
</body>
    
</html><?php /**PATH C:\xampp\htdocs\final-project\resources\views/search.blade.php ENDPATH**/ ?>