

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
  <link rel="stylesheet" href="<?php echo e(asset('fontawesome-free-6.4.0-web\css\all.min.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;500;600;700;900&family=Jomhuria&family=Open+Sans:ital,wght@0,300;0,500;0,700;0,800;1,400;1,800&family=Poppins:ital,wght@0,200;0,500;0,700;0,800;1,100;1,300&family=Roboto:ital,wght@0,100;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700&family=Work+Sans:ital,wght@0,100;0,300;0,400;0,500;1,500;1,700;1,900&display=swap"
    rel="stylesheet" />
  <title>product description</title>
  </style>
  <script src="<?php echo e(asset('js/main.js')); ?>" defer></script>

</head>

<body>

  section class="navabr">
  <nav class="nav">
    <div class="container">
      <div class="logo">
        <i class="fa-solid fa-bars" id="fa-bars"></i>
        <a href="<?php echo e(url('')); ?>"><img src="./Imeges/Brecycler2 Chosen-02 (1).png" alt="" /></a>

      </div>
      <form method="POST" action="<?php echo e(route('search.results')); ?>">
        <?php echo csrf_field(); ?>
      <div class="search">
        <input id="Search" type="text" name="query" placeholder="Search" />
        <button type="submit" >
          <i class="fa-sharp fa-solid fa-magnifying-glass"></i>Search
        </button>
      </div>
      </form>
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
              <i class="fa-solid fa-user-plus"></i> <a href="<?php echo e(route('register')); ?>">register</a>
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
                <a href="<?php echo e(url('papaer',['course_id' => 'Paper'])); ?>"> Paper </a>
              </li>
              <li>
                <i class="fa-solid fa-vial"></i>
                <a href="<?php echo e(url('papaer',['course_id' => 'chimical substances'])); ?>"> chimical substances </a>
              </li>
              <li>
                <i class="fa-solid fa-flask"></i>
                <a href="<?php echo e(url('papaer',['course_id' => 'Plastic'])); ?>">plastic</a>
              </li>
              <li>
                <i class="fa-solid fa-hammer"></i>
                <a href="<?php echo e(url('papaer',['course_id' => 'Metal'])); ?>">Metal </a>
              </li>
              <li>
                <i class="fa-solid fa-laptop"></i><a href="<?php echo e(url('papaer',['course_id' => 'Electronics'])); ?>">Electronics </a>
              </li>
              <li>
                <i class="fa-solid fa-filter"></i><a href="<?php echo e(url('papaer',['course_id' => 'Rubber'])); ?>">Rubber</a>
              </li>
              <li>
                <i class="fa-sharp fa-solid fa-tree"></i><a href="<?php echo e(url('papaer',['course_id' => 'Wood'])); ?>">Wood</a>
              </li>
              <li>
                <i class="fa-solid fa-network-wired"></i>
                <a href="<?php echo e(url('papaer',['course_id' => 'Recycling machines'])); ?>">Recycling machines </a>
              </li>
              <li>
                <i class="fa-solid fa-champagne-glasses"></i>
                <a href="<?php echo e(url('papaer',['course_id' => 'Glass'])); ?>">Glass</a>
              </li>
              <li>
                <i class="fa-sharp fa-solid fa-shirt"></i><a href="<?php echo e(url('papaer',['course_id' => 'Cloth and Textile'])); ?>">Cloth and Textile</a>
              </li>
              <li>
                <i class="fa-solid fa-dna"></i>
                <a href="<?php echo e(url('papaer',['course_id' => 'Organic'])); ?>">Organic</a>
              </li>
              <li>
                <i class="fa-solid fa-wand-magic-sparkles"></i><a href="<?php echo e(url('papaer',['course_id' => 'Others'])); ?>">Others</a>
              </li>
            </ul>
          <ul class="prob">
            <li>Help and setting</li>
            <li><i class="fa-sharp fa-solid fa-newspaper"></i><a target="blank"
                href="<?php echo e(route('artcile.index')); ?>">Blog</a></li>
            <li><i class="fa-sharp fa-solid fa-address-card"></i><a href="<?php echo e(Url('/contactus')); ?>" target="blank"> Contact
                Us</a></li>
          </ul>
        </div>
      </div>
    </div>
    
  </nav>
</section>
<section class="cards">
    <div class="container">
        <h2><i class="fa-solid fa-vial"></i> <?php echo e($course_id); ?> </h2>
      <div class="contr">
       
        <?php 
       
        $cods=DB::table('cards')
            ->where('category', $course_id)
            ->get();?>
        <?php $__currentLoopData = $cods; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cod): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <a class="box" href="<?php echo e(route('card.edit', $cod->id)); ?>">
            <div class="image">
                <img src="<?php echo e(asset('/storage/'.$cod->attachement)); ?>" alt="">
            </div>
            <div class="info">
                <h3 class="title"><?php echo e($cod->title); ?></h3>
                <p><?php echo e($cod->description); ?></p>
                <h4><?php echo e($cod->currency); ?><?php echo e($cod->price); ?></h4>
            </div>
          <div class="footer">
            <img src="../Imeges/<?php echo e($cod->country); ?>.png" alt="">
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
        
      </div>
    </div>
</section>
  <!-- start product description -->
  <section class="product">
    <div class="parent">
      <h2> <?php echo e($card->title ?? ''); ?></h2>

      <div class="imgContent">
        <div class="icon right"><i class="fa-solid fa-angle-right"></i></div>
        <div class="icon left"><i class="fa-solid fa-angle-left"></i></div>
        <div class="images">
          <img src="./Imeges/download.jpg" alt="">
          <img src="./Imeges/noah-buscher-x8ZStukS2PM-unsplash.jpg" alt="">
          <img src="./Imeges/01.jpg" alt="">
        </div>
      </div>

      <div class="btns">
        <!-- chat page  -->
        <a class="call" href="<?php echo e(url('chatify',['id' => $card->user_id ?? ''])); ?>"><i class="fa-solid fa-message"></i>chat</a>
        <a href="#Contact-details" class="details">More<i class="fa-solid fa-angle-right"></i></a>
      </div>

      <div class="info">
        <ul class="ad-description">
          <h3>ad-description</h3>
          <li><span>id :</span>
            <p> <?php echo e($card->id ?? ''); ?></p>
          </li>
          <li><span>date :</span>
            <p> <?php echo e($card->created_at ?? ''); ?></p>
          </li>
          <li><span>category :</span>
            <p> <?php echo e($card->category ?? ''); ?></p>
          </li>
          <li><span>amount :</span>
            <p> <?php echo e($card->Amount ?? ''); ?>  <?php echo e($card->Amountunit ?? ''); ?></p>
          </li>
          <li><span>price :</span>
            <p> <?php echo e($card->price ?? ''); ?>  <?php echo e($card->currency ?? ''); ?></p>
          </li>
        </ul>
        <ul id="Contact-details" class="Contact-details">
          <h3>Contact details</h3>
          <li> <i class="fa-solid fa-user"></i> username :<a href="">doma</a></li>
          <li><i class="fa-solid fa-location-dot"></i>location :<a href=""> <?php echo e($card->city ?? ''); ?> ,  <?php echo e($card->country ?? ''); ?></a></li>
        </ul>
        <div class="description">
          <h3>description</h3>
          <p> <?php echo e($card->description ?? ''); ?></p>
        </div>

      </div>
    </div>
  </section>
  <!-- End product description -->

  <section class="mainPage" id="Cloth">
    <div class="icon right"><i class="fa-solid fa-angle-right"></i></div>
    <div class="icon left"><i class="fa-solid fa-angle-left"></i></div>
    <div class="bigCard">
      <h2><i class="fa-solid fa-list"></i> Recomendation</h2>

      <div class="card" id="plastic">
        <a class="box" href="./product.html">
          <img src="Imeges/98-plastic-roundup.webp" alt="" />

          <!-- <i class="fa-solid fa-heart fully"></i>
                <i class="fa-regular fa-heart empty"></i>
                <i class="fa-regular fa-bookmark emptySave"></i>
                <i class="fa-solid fa-bookmark fullSave"></i> -->
          <div class="more">
            <h3>Scrap Shredde</h3>
            <p><span>12 DA</span> / Kg</p>
            <p>1295 kg</p>
          </div>
          <button>Details</button>
        </a>
        <a class="box" href="./product.html">
          <img src="Imeges/1-2-Bedroom-Kit.jpg" alt="" />

          <!-- <i class="fa-solid fa-heart fully"></i>
                <i class="fa-regular fa-heart empty"></i>
                <i class="fa-regular fa-bookmark emptySave"></i>
                <i class="fa-solid fa-bookmark fullSave"></i> -->
          <div class="more">
            <h3>Scrap Shredde</h3>
            <p><span>12 DA</span> / Kg</p>
            <p>1295 kg</p>
          </div>
          <button>Details</button>
        </a>

        <a class="box" href="./product.html">
          <img src="Imeges/download.jpg" alt="" />

          <!-- <i class="fa-solid fa-heart fully"></i>
                <i class="fa-regular fa-heart empty"></i>
                <i class="fa-regular fa-bookmark emptySave"></i>
                <i class="fa-solid fa-bookmark fullSave"></i> -->
          <div class="more">
            <h3>Scrap Shredde</h3>
            <p><span>12 DA</span> / Kg</p>
            <p>1295 kg</p>
          </div>
          <button>Details</button>
        </a>
        <a class="box" href="./product.html">
          <img src="Imeges/sigmund-dBu3wq2O5SM-unsplash.jpg" alt="" />

          <!-- <i class="fa-solid fa-heart fully"></i>
                <i class="fa-regular fa-heart empty"></i>
                <i class="fa-regular fa-bookmark emptySave"></i>
                <i class="fa-solid fa-bookmark fullSave"></i> -->
          <div class="more">
            <h3>Scrap Shredde</h3>
            <p><span>12 DA</span> / Kg</p>
            <p>1295 kg</p>
          </div>
          <button>Details</button>
        </a>
        <a class="box" href="./product.html">
          <img src="Imeges/noah-buscher-x8ZStukS2PM-unsplash.jpg" alt="" />

          <!-- <i class="fa-solid fa-heart fully"></i>
                <i class="fa-regular fa-heart empty"></i>
                <i class="fa-regular fa-bookmark emptySave"></i>
                <i class="fa-solid fa-bookmark fullSave"></i> -->
          <div class="more">
            <h3>Scrap Shredde</h3>
            <p><span>12 DA</span> / Kg</p>
            <p>1295 kg</p>
          </div>
          <button>Details</button>
        </a>
        <a class="box" href="./product.html">
          <img src="Imeges/98-plastic-roundup.webp" alt="" />

          <!-- <i class="fa-solid fa-heart fully"></i>
                              <i class="fa-regular fa-heart empty"></i>
                              <i class="fa-regular fa-bookmark emptySave"></i>
                              <i class="fa-solid fa-bookmark fullSave"></i> -->
          <div class="more">
            <h3>Scrap Shredde</h3>
            <p><span>12 DA</span> / Kg</p>
            <p>1295 kg</p>
          </div>
          <button>Details</button>
        </a>
        <a class="box" href="./product.html">
          <img src="Imeges/pawel-czerwinski-RkIsyD_AVvc-unsplash.jpg" alt="" />

          <!-- <i class="fa-solid fa-heart fully"></i>
                <i class="fa-regular fa-heart empty"></i>
                <i class="fa-regular fa-bookmark emptySave"></i>
                <i class="fa-solid fa-bookmark fullSave"></i> -->
          <div class="more">
            <h3>Scrap Shredde</h3>
            <p><span>12 DA</span> / Kg</p>
            <p>1295 kg</p>
          </div>
          <button>Details</button>
        </a>
        <a class="box" href="./product.html">
          <img src="Imeges/killari-hotaru-6ZGEQb-CxIo-unsplash.jpg" alt="" />

          <!-- <i class="fa-solid fa-heart fully"></i>
                <i class="fa-regular fa-heart empty"></i>
                <i class="fa-regular fa-bookmark emptySave"></i>
                <i class="fa-solid fa-bookmark fullSave"></i> -->
          <div class="more">
            <h3>Scrap Shredde</h3>
            <p><span>12 DA</span> / Kg</p>
            <p>1295 kg</p>
          </div>
          <button>Details</button>
        </a>
      </div>
    </div>
  </section>
  <footer>
    <h3><i class="fa-solid fa-recycle"></i> <span>B</span>recycl<span>er</span></h3>
    <div class="social">

      <a href=""> <img src="./Imeges/facebook.png" alt=""></a>
      <a href=""><img src="./Imeges/linkedin.png" alt=""></a>
      <a href=""> <img src="./Imeges/instagram.png" alt=""></a>
      <a href=""> <img src="./Imeges/youtube.png" alt=""></a>

    </div>
    <p>&copy; copyRight 2023</p>
  </footer>
</body>

</html><?php /**PATH C:\xampp\htdocs\final-project\resources\views/card/show.blade.php ENDPATH**/ ?>