


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="<?php echo e(asset('css/all.min.css')); ?>" />
  <link rel="stylesheet" href="<?php echo e(asset('css/all.css')); ?>" />
  <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>" />
  <link rel="stylesheet" href="<?php echo e(asset('css/regular.css')); ?>" />
  <link rel="stylesheet" href="<?php echo e(asset('fontawesome-free-6.4.0-web\css\all.min.css')); ?>">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,500;0,700;1,500;1,700&display=swap"
    rel="stylesheet">
  <link
    href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;500;600;700;900&family=Jomhuria&family=Open+Sans:ital,wght@0,300;0,500;0,700;0,800;1,400;1,800&family=Poppins:ital,wght@0,200;0,500;0,700;0,800;1,100;1,300&family=Roboto:ital,wght@0,100;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700&family=Work+Sans:ital,wght@0,100;0,300;0,400;0,500;1,500;1,700;1,900&display=swap"
    rel="stylesheet" />
  <link rel="icon" href="./Imeges/recycle-symbol.png" />

  <title>E-commerce</title>
</head>

<body>
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
  <div class="scrollUp">
    <i class="fa-solid fa-up-long"></i>
  </div>
  <section class="navabr">
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
      <ul class="recomendation" id="recomendation" style="display: None">
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
  <!-- End navBAr -->
  <!-- Start landing page -->
  <div class="landing">
    <div class="container">
      <div class="info">
        <h2></h2>
        <p class="description">
          sell your trash with an excelent price and participate in the earth
          saving
        </p>
        <div class="btn">
          <button class="buy">
            <i class="fa-solid fa-plus"></i> <a href="<?php echo e(route('card.create')); ?>">Announce</a>
          </button>
          <button class="more">
            <a href="contactus" target="blank">Contact Us</a><i class="fa-solid fa-angle-right"></i>
          </button>
        </div>
      </div>
    </div>
  </div>
  <!-- End landing page -->
  <!-- start state -->
  <section class="stat" id="statistic">

    <div class="box">
      <img src="Imeges/enterprise.png" alt="">
      <h5 data-goal="114" class="increase">00</h5>
      <p> Companies registered on the platform </p>
    </div>
    <div class="box">
      <img src="./Imeges/deals.png" alt="">

      <h5 data-goal="97" class="increase">00</h5>
      <p>Offers in the last 3 months </p>
    </div>
    <div class="box">
      <img src="./Imeges/carbon-dioxide.png" alt="">
      <h5 data-goal="122" class="increase">00</h5>
      <p> Tons of Co2 saved in the last 9 month</p>
    </div>

  </section>
  <!-- end state -->
  <!-- start mainPage -->
  <section class="categoriesDEsc" id="categories">
    <div class="title">
      <img src="./Imeges/category.png" alt="">
      <h2> Categories</h2>
    </div>
    <div class="container">
      <a href="<?php echo e(url('papaer',['course_id' => 'Recycling machines'])); ?>" class="box">
        <div class="iconCr">
          <!-- <i class="fa-sharp fa-solid fa-book"></i> -->
          <img src="./Imeges/mass-production.png" alt="">
        </div>
        <p>Recycling machines</p>
      </a>
      <a href="<?php echo e(url('papaer',['course_id' => 'paper'])); ?>" class="box">
        <div class="iconCr">
          <!-- <i class="fa-sharp fa-solid fa-book"></i> -->
          <img src="./Imeges/delivering.png" alt="">
        </div>
        <p>Paper</p>
      </a>
      <a href="<?php echo e(url('papaer',['course_id' => 'chimical substances'])); ?>" class="box">
        <div class="iconCr">
          <!-- <i class="fa-solid fa-vial"></i> -->
          <img src="./Imeges/chemical-reaction.png" alt="">
        </div>
        <p>chimical substances</p>
      </a>
      <a href="<?php echo e(url('papaer',['course_id' => 'plastic'])); ?>" class="box">
        <div class="iconCr">
          <img src="./Imeges/plastic.png" alt="">
        </div>
        <p>plastic</p>
      </a>
      <a href="<?php echo e(url('papaer',['course_id' => 'rubber'])); ?>" class="box">
        <div class="iconCr">
          <!-- <i class="fa-sharp fa-solid fa-book"></i> -->
          <img src="./Imeges/tire.png" alt="">
        </div>
        <p>rubber </p>
      </a>
      <a href="<?php echo e(url('papaer',['course_id' => 'Metal'])); ?>" class="box">

        <div class="iconCr">
          <!-- <i class="fa-solid fa-hammer"></i> -->
          <img src="./Imeges/metal.png" alt="">
        </div>
        <p>Metal</p>
      </a>
      <a href="<?php echo e(url('papaer',['course_id' => 'Electronics'])); ?>" class="box">
        <div class="iconCr">
          <!-- <i class="fa-solid fa-laptop"></i >  -->
          <img src="./Imeges/electronic-devices.png" alt="">
        </div>
        <p>Electronics</p>
      </a>
      <a href="<?php echo e(url('papaer',['course_id' => 'Wood'])); ?>" class="box">
        <div class="iconCr">
          <!-- <i class="fa-sharp fa-solid fa-tree"></i> -->
          <img src="./Imeges/wood.png" alt="">
        </div>
        <p>Wood</p>
      </a>
      <a href="<?php echo e(url('papaer',['course_id' => 'Glass'])); ?>" class="box">
        <div class="iconCr">
          <!-- <i class="fa-solid fa-champagne-glasses"></i> -->
          <img src="./Imeges/bottles.png" alt="">
        </div>
        <p>Glass</p>
      </a>
      <a href="<?php echo e(url('papaer',['course_id' => 'Cloth and Textile'])); ?>" class="box">
        <div class="iconCr">
          <!-- <i class="fa-sharp fa-solid fa-shirt"></i> -->
          <img src="./Imeges/recycle.png" alt="">
        </div>
        <p>Cloth and Textile</p>
      </a>

      <a href="<?php echo e(url('papaer',['course_id' => 'Organic'])); ?>" class="box">
        <div class="iconCr">
          <!-- <i class="fa-solid fa-dna"></i> -->
          <img src="./Imeges/apple.png" alt="">
        </div>
        <p>Organic</p>
      </a>
      <a href="<?php echo e(url('papaer',['course_id' => 'Others'])); ?>" class="box">
        <div class="iconCr">
          <!-- <i class="fa-solid fa-wand-magic-sparkles"></i> -->
          <img src="./Imeges/puzzle.png" alt="">
        </div>
        <p>Others</p>
      </a>
    </div>
  </section>
  <!-- End mainPage -->
  <footer>
    <img src="./Imeges/Brecycler_Logo-03 (1).png" alt="">
    <div class="social">

      <a href=""> <img src="./Imeges/facebook.png" alt=""></a>
      <a href=""><img src="./Imeges/linkedin.png" alt=""></a>
      <a href=""> <img src="./Imeges/instagram.png" alt=""></a>
      <a href=""> <img src="./Imeges/youtube.png" alt=""></a>

    </div>
    <p>&copy; copyRight 2023</p>
  </footer>
  <!-- End footer  -->
  <script src="<?php echo e(asset('js/main.js')); ?>" defer></script>
</body>

</html><?php /**PATH C:\xampp\htdocs\final-project\resources\views/welcome.blade.php ENDPATH**/ ?>