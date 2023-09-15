<?php if($results->isEmpty()): ?>
    <p>No results found.</p>
<?php else: ?>
    <ul>
        <?php $__currentLoopData = $results; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $result): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($result->title); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
<?php endif; ?>









<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- displays site properly based on user's device -->
  <!-- <link rel="stylesheet" href="style.css"> -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;500;600;700&family=Tajawal:wght@200;300;400;500;700&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="<?php echo e(asset('css/all.min.css')); ?>" />
  <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>" />
  <link rel="stylesheet" href="<?php echo e(asset('fontawesome-free-6.4.0-web\css\all.min.css')); ?>">
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;500;600;700;900&family=Jomhuria&family=Open+Sans:ital,wght@0,300;0,500;0,700;0,800;1,400;1,800&family=Poppins:ital,wght@0,200;0,500;0,700;0,800;1,100;1,300&family=Roboto:ital,wght@0,100;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700&family=Work+Sans:ital,wght@0,100;0,300;0,400;0,500;1,500;1,700;1,900&display=swap"
    rel="stylesheet" />
  <title><?php echo e($query); ?></title>
  <link rel="icon" href="../Imeges/chemical-reaction.png">
  <script src="<?php echo e(asset('js/main.js')); ?>" defer></script>
  </style>
  
</head>
<section class="navabr">
  <nav class="nav">
    <div class="container">
      <div class="logo">
        <i class="fa-solid fa-bars" id="fa-bars"></i>
        <a href="<?php echo e(url('')); ?>"><img src="./Imeges/Brecycler2 Chosen-02 (1).png" alt="" /></a>

      </div>
      <div class="search">
        <input id="Search" type="text" placeholder="Search" />
        <button>
          <i class="fa-sharp fa-solid fa-magnifying-glass"></i>Search
        </button>
      </div>
      <div class="left-Icons">
        <i id="fa-magnifying-glass" class="fa-sharp fa-solid fa-magnifying-glass"></i>
        <a href="<?php echo e(route('card.create')); ?>"> <i class="fa-solid fa-plus"></i></a>
        <!-- <i class="fa-solid fa-cart-shopping"></i> -->
       
        <?php if(Auth::check()): ?>

        <a onClick="myFunction()"  class="dropbtn" style="color: black"><?php echo e(Auth::user()->name); ?> <i class="fa-sharp fa-solid fa-caret-down"></i></a>
        <div style="display: none;" id="myDropdown" class="dropdown-content">
          <?php if(auth()->user()->isAdmin): ?>
          <a href="<?php echo e(url('dash')); ?>">Dashboard</a>
          <?php else: ?>
          <a href="<?php echo e(url('dashuser')); ?>">Dashboard</a>
         
          <?php endif; ?>
          <a href="<?php echo e(url('chatify')); ?>">Chat</a>
          <a href="<?php echo e(route('profile.edit')); ?>">Edit Profile</a>
          <form method="POST" action="<?php echo e(route('logout')); ?>">
            <?php echo csrf_field(); ?>
          <a href="<?php echo e(route('logout')); ?>"
          onclick="event.preventDefault();
                      this.closest('form').submit();">logout</a></form></div>
                     
          
    
    <?php else: ?>
    
       
    <?php if(Route::has('login')): ?>
        
    <?php if(auth()->guard()->check()): ?>
    <i onClick="myFunction()" class="fa-solid fa-user"></i>
    <?php else: ?>
  

    <div id="myDropdown" class="dropdown-content">



        <a href="<?php echo e(route('login')); ?>">login</a>
        <a href="<?php echo e(route('register')); ?>">Register</a>
        
      </div>
        

        <?php if(Route::has('register')): ?>
        <i onClick="myFunction()" class="fa-solid fa-user"></i>

        <div id="myDropdown" class="dropdown-content">

    

            <a href="<?php echo e(route('login')); ?>">login</a>
            <a href="<?php echo e(route('register')); ?>">Register</a>
           
          </div>
        <?php endif; ?>
    <?php endif; ?>
</div>
<?php endif; ?>

</a>
    
    <?php endif; ?>
        
       
        <script>
        function myFunction() {
          if (document.getElementById("myDropdown").style.display === "none"){
document.getElementById("myDropdown").style.display = 'block';}
else {
  document.getElementById("myDropdown").style.display = 'none';}

}

// Close the dropdown menu if the user clicks outside of it
window.onclick = function(event) {
if (!event.target.matches('.dropbtn')) {
  var dropdowns = document.getElementsByClassName("dropdown-content");
  var i;
  for (i = 0; i < dropdowns.length; i++) {
    var openDropdown = dropdowns[i];
    if (openDropdown.classList.contains('show')) {
      openDropdown.classList.remove('show');
    }
  }
}
} </script>
      </div>
    </div>
    <!-- start list -->
    <div class="categoriesList" id="categoriesList">
      <div class="container">
        <div class="nav">
          <img src="./Imeges/Brecycler2 Chosen-02 (1).png" alt="" />
          <i class="fa-solid fa-x"></i>
        </div>
        <div class="probCon">
          <ul class="prob" id="fa-magnifying-glass">
            <li>features</li>
            <li class="darkMode">
              <i class="fa-solid fa-sun active"></i><i class="fa-sharp fa-solid fa-moon"></i><a class="night-day">Dark
                Mode </a>
            </li>
            <li>
              <i class="fa-solid fa-user-plus"></i> <a href="./Sign up.html">register</a>
            </li>
            <li>
              <i class="fa-solid fa-plus"></i>
              <a href="<?php echo e(route('card.create')); ?>">Add an announce</a>
            </li>
            <li class="search" id="fa-magnifying-glass">
              <i class="fa-sharp fa-solid fa-magnifying-glass"></i>
              <a id="fa-magnifying-glass" href="#fa-magnifying-glass">Search</a>
            </li>
          </ul>
          <!-- <ul class="prob">
              <li>language</li>
              <li>English</li>
              <li>frensh</li>
              <li>arabic</li>
            </ul> -->
          <ul class="prob">
            <li>categories</li>
            <li>
              <i class="fa-sharp fa-solid fa-book"></i>
              <a href="./categories pages/Paper.html"> Paper </a>
            </li>
            <li>
              <i class="fa-solid fa-vial"></i>
              <a href="./categories pages/chimical.html"> chimical substances </a>
            </li>
            <li>
              <i class="fa-solid fa-flask"></i>
              <a href="./categories pages/plastic.html">plastic</a>
            </li>
            <li>
              <i class="fa-solid fa-hammer"></i>
              <a href="./categories pages/Metal.html">Metal </a>
            </li>
            <li>
              <i class="fa-solid fa-laptop"></i><a href="./categories pages/Electronics.html">Electronics </a>
            </li>
            <li>
              <i class="fa-solid fa-filter"></i><a href="./categories pages/Wood.html">Rubber</a>
            </li>
            <li>
              <i class="fa-sharp fa-solid fa-tree"></i><a href="./categories pages/Wood.html">Wood</a>
            </li>
            <li>
              <i class="fa-solid fa-network-wired"></i>
              <a href="./categories pages/Wood.html">Recycling machines </a>
            </li>
            <li>
              <i class="fa-solid fa-champagne-glasses"></i>
              <a href="./categories pages/Glass.html">Glass</a>
            </li>
            <li>
              <i class="fa-sharp fa-solid fa-shirt"></i><a href="./categories pages/Cloth.html">Cloth and Textile</a>
            </li>
            <li>
              <i class="fa-solid fa-dna"></i>
              <a href="./categories pages/Organic.html">Organic</a>
            </li>
            <li>
              <i class="fa-solid fa-wand-magic-sparkles"></i><a href="./categories pages/Others.html">Others</a>
            </li>
          </ul>
          <ul class="prob">
            <li>Help and setting</li>
            <li><i class="fa-sharp fa-solid fa-newspaper"></i><a target="blank"
                href="./recycle/articlesAdmin.html">Blog</a></li>
            <li><i class="fa-sharp fa-solid fa-address-card"></i><a href="./contactUs.html" target="blank"> Contact
                Us</a></li>
          </ul>
        </div>
      </div>
    </div>
    <ul class="recomendation" id="recomendation">
      <h2 id="adressLis"><i id="adressLis" class="fa-solid fa-sliders"></i>Filters</h2>
      <div class="search">
        <input id="Search" type="text" placeholder="Search" />
        <button>
          <i class="fa-sharp fa-solid fa-magnifying-glass"></i>
          <p class="do-not">Search</p>
        </button>
      </div>
      <form action="" class="do-not">
        <div class="filter do" id="filter">
          <h5 class="do-not">Adress</h5>
          <div class="header do" id="header" data-on="1">
            <p class="do-not" data-on="1">country</p>
            <i id="adressLis" data-on="1" class="fa-sharp fa-solid fa-chevron-down" data-on="1"></i>
          </div>
          <div class="adress do" id="adress">
            <label for="searchIn" data-on="1">
              <i class="fa-solid fa-magnifying-glass"></i>
            </label>
            <input data-on="1" class="SearchInput do do-not" type="text" placeholder="Search">
            <ul class="counrty do-not do countries" data-on="1">
            </ul>
          </div>
        </div>
        <div class="filter do" id="filter">
          <h5 class="do-not">Categories</h5>
          <div class="header do" id="header" data-on="2">
            <p class="do-not">Categories</p>
            <i id="adressLis" class="fa-sharp fa-solid fa-chevron-down" data-on="2"></i>
          </div>
          <div class="adress do" id="adress">
            <label for="searchIn" data-on="2">
              <i class="fa-solid fa-magnifying-glass"></i>
            </label>
            <input id="searchIn" data-on="2" class="SearchInput do do-not" type="text" placeholder="Search">
            <ul class="counrty do-not do" data-on="2">
              <div class="check do-not do" data-on="2">
                <input type="checkbox" id="scales" name="scales" class="do">
                <label for="scales" class="do-not do">Paper</label>
              </div>
              <div class="check do-not do" data-on="2">
                <input type="checkbox" id="scales" name="scales" class="do">
                <label for="scales" class="do-not do">chimical substances</label>
              </div>
              <div class="check do-not do" data-on="2">
                <input type="checkbox" id="scales" name="scales" class="do">
                <label for="scales" class="do-not do">Metal</label>
              </div>
              <div class="check do-not do" data-on="2">
                <input type="checkbox" id="scales" class="do-not do" name="scales">
                <label for="scales" class="do-not do">Electronics</label>
              </div>
              <div class="check do do" data-on="2">
                <input type="checkbox" id="scales" name="scales" class="do">
                <label for="scales" class="do-not do">Wood</label>
              </div>
              <div class="check do-not do" data-on="2">
                <input type="checkbox" id="scales" name="scales" class="do">
                <label for="scales" class="do-no dot">Rubber</label>
              </div>
              <div class="check do-not do" data-on="2">
                <input type="checkbox" id="scales" name="scales" class="do">
                <label for="scales" class="do-not do">Recycling machines</label>
              </div>
              <div class="check do-not do" data-on="2">
                <input type="checkbox" id="scales" name="scales" class="do">
                <label for="scales" class="do-not do">Cloth and Textile</label>
              </div>
              <div class="check do-not do" data-on="2">
                <input type="checkbox" id="scales" name="scales" class="do">
                <label for="scales" class="do-not do">Glass</label>
              </div>
              <div class="check do-not do" data-on="2">
                <input type="checkbox" id="scales" name="scales" class="do">
                <label for="scales" class="do-not do">Organic</label>
              </div>
              <div class="check do-not do" data-on="2">
                <input type="checkbox" id="scales" name="scales" class="do">
                <label for="scales" class="do-not do">Plastic</label>
              </div>
              <div class="check do-not do" data-on="2">
                <input type="checkbox" id="scales" name="scales" class="do">
                <label for="scales" class="do-not do">Others</label>
              </div>



            </ul>
          </div>
        </div>
        <div class="filter do" id="filter">
          <h5 class="do-not">Offer type</h5>
          <div class="header do" id="header" data-on="3">
            <p class="do-not">Offer type</p>
            <i id="adressLis" class="fa-sharp fa-solid fa-chevron-down" data-on="3"></i>
          </div>
          <div class="adress" id="adress">
            <ul class="counrty type-of-offer" data-on="3">
              <li class="do-not ">Buy</li>
              <li class="do-not ">Sale</li>
            </ul>
          </div>
        </div>
        <div class="btn do-not">
          <button class="cancel">cancel</button>
          <button class="Apply">Apply</button>
        </div>
      </form>
    </ul>
  </nav>
</section>
<section class="cards">
    <div class="container">
        <h2><i class="fa-solid fa-vial"></i> <?php echo e($query); ?> </h2>
      <div class="contr">
        




        <?php if($results->isEmpty()): ?>
        <p>No results found.</p>
    <?php else: ?>
       
    



        <?php $__currentLoopData = $results; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $result): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <a class="box" href="<?php echo e(url('papca' , $result->id)); ?>">
            <div class="image">
                <img src="<?php echo e(asset('/storage/'.$result->attachement)); ?>" alt="">
            </div>
            <div class="info">
                <h3 class="title"><?php echo e($result->title); ?></h3>
                <p><?php echo e($result->description); ?></p>
                <h4><?php echo e($result->currency); ?><?php echo e($result->price); ?></h4>
            </div>
          <div class="footer">
            <img src="../Imeges/<?php echo e($result->country); ?>.png" alt="">
            <div class="rating">
              <span>(4.4) </span>
              <i class="fa-solid fa-star"></i>
            </div>
            <button class="more">
              More
            </button>
          </div>
        </a>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>
      </div>
    </div>
</section>
<footer>
  <img src="../Imeges/Brecycler_Logo-03 (1).png" alt="">
  <div class="social">

    <a href=""> <img src="../Imeges/facebook.png" alt=""></a>
    <a href=""><img src="../Imeges/linkedin.png" alt=""></a>
    <a href=""> <img src="../Imeges/instagram.png" alt=""></a>
    <a href=""> <img src="../Imeges/youtube.png" alt=""></a>

  </div>
  <p>&copy; copyRight 2023</p>
</footer>
<body>
    
</body>
</html><?php /**PATH C:\xampp\htdocs\final-project\resources\views/search/results.blade.php ENDPATH**/ ?>