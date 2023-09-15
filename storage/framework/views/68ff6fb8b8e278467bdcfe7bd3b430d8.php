


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo e(asset('css/mainn.css')); ?>" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;500;700&family=Poppins:wght@300;400;500;700&family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" 
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <title>Articles Form</title>
</head>
<body>
   <!-- Start contact us  -->
   <div class="container">
    <div class="content">
    <form action="<?php echo e(route('artcile.store')); ?>" method="POST" enctype="multipart/form-data">
      <?php echo csrf_field(); ?>
      <h2 class="topic">Add Your Article</h2>
      <div class="input-box">
        <input type="text" name="title" required>
        <label>Enter your Title</label>
      </div>
      <div class="input-box">
        <textarea name="descrip" id="textarea" cols="50" rows="10" required placeholder="Enter A Description"></textarea>
      </div>
        <div class="img-holder">
         
        </div>
        <div class="input-box">
          <input class="openAlert" type="submit" value="Submit" data-name="contact">
        </div>  
        <a class="goto-articles" href="articlesAdmin.html">See The Current Articles</a>
    </form>
  </div>
  </div>
  
  <script src="<?php echo e(asset('js/newAno.js')); ?>" defer></script>
</body>
</html><?php /**PATH C:\xampp\htdocs\final-project\resources\views/artcile/create.blade.php ENDPATH**/ ?>