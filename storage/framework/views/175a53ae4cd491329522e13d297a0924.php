<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>" />
      
  <link rel="stylesheet" href="<?php echo e(asset('fontawesome-free-6.4.0-web\css\all.min.css')); ?>">

  <link rel="stylesheet" href="<?php echo e(asset('css/all.css')); ?>" />
 

  <title>New announce</title>
</head>

<body>
  <form method="POST" action="<?php echo e(route('card.store')); ?>" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>
    <section class="navabr">
  <nav class="nav">
    <div class="container">
      <div class="logo">
        <i class="fa-solid fa-bars" id="fa-bars"></i>
        <a href="<?php echo e(url('')); ?>"><img src="<?php echo e(asset('Imeges/Brecycler2 Chosen-02 (1).png')); ?>" alt="" /></a>

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


  <section class="new-announcement">
    <div class="overlay"></div>
    <div class="alert" data-name="contact">
      <nav>Brecycler </nav>
      
      <div>
        <div class="info">
          <span>your announcement has been added </span>
          <i class="fa-sharp fa-solid fa-circle-check"></i>
        </div>
      </div>
      <a href="./index.html">close</a>
    </div>
    
    
    <div class="container">
      <h2><i class="fa-solid fa-bullhorn"></i> Create an announcement</h2>

      <ul class="box categories activeCenter">
        <h3> categories</h3>
          <li>
            <i class="fa-solid fa-filter"></i><a href="#" onclick='move("1")' id="ddll1">Rubber</a>
          </li>
        <li data-category="chimical substances">
          <i class="fa-solid fa-vial"></i>
          <a href="#chimical" onclick='move("2")' id="ddll2"> chimical substances </a>
        </li>
        <li data-category="plastic">
          <i class="fa-solid fa-flask"></i>
          <a href="#plastic" onclick='move("3")' id="ddll3">plastic </a>
        </li>
        <li data-category="Metal">
          <i class="fa-solid fa-hammer"></i>
          <a href="#Metal" onclick='move("4")' id="ddll4">Metal </a>
        </li>
          <li>
            <i class="fa-sharp fa-solid fa-book"></i>
            <a href="#" onclick='move("5")' id="ddll5"> Paper </a>
          </li>
        <li>
          <i class="fa-solid fa-network-wired"></i>
          <a href="#" onclick='move("6")' id="ddll6">Recycling machines </a>
        </li>
        <li data-category="Electronics">
          <i class="fa-solid fa-laptop"></i><a href="#Electronics" onclick='move("7")' id="ddll7">Electronics </a>
        </li>
        <li data-category="Wood">
          <i class="fa-sharp fa-solid fa-tree"></i><a href="#Wood" onclick='move("8")' id="ddll8">Wood </a>
        </li>
        <li>
          <i class="fa-solid fa-dna"></i>
          <a href="#" onclick='move("9")' id="ddll9">Organic</a>
        </li>
        <li data-category="Glass">
          <i class="fa-solid fa-champagne-glasses"></i>
          <a href="#Glass" onclick='move("10")' id="ddll10">Glass </a>
        </li>
        <li data-category="Cloth and Textile">
          <i class="fa-sharp fa-solid fa-shirt" onclick='move("11")' id="ddll11"></i><a href="#Cloth">Cloth and Textile</a>
        </li>
        <li data-category="Others">
          <i class="fa-solid fa-wand-magic-sparkles"></i><a href="#Others" onclick='move("12")' id="ddll12">Others</a>
        </li>
        <div class="btns">
          <button class="Return"> <i class="fa-solid fa-arrow-left"></i> Return</button>
          <!-- <button class="next">Next<i class="fa-solid fa-arrow-right"></i></button> -->
        </div>
      </ul>
   
      <ul class="box Description">
        <form method="POST" action="<?php echo e(route('card.store')); ?>" enctype="multipart/form-data">
          <?php echo csrf_field(); ?>
          
        <h3> Description</h3>
        <p class="category">category : <span id="doumab" class="category-choise">Cloth and Textile</span></p>
        
        <h4> <i class="fa-solid fa-message"></i>details</h4>
      
          <h5>title</h5>
          <input id="title" type="text" placeholder="title" name="title">
          <h5>amount unit</h5>
          <div id="on" class="custemoption" data-option="amountUnit">
            <div class="amountUnit optionHeader" id="on" data-option="amountUnit">
              <p>price type</p>
              
              <i data-option="amountUnit" id="on" class="fa-sharp fa-solid fa-chevron-down"></i>
            </div>
            <ul class="on" data-option="amountUnit">
              <li onclick='movee("1")' id="dpp1">Kg</li>
              <li onclick='movee("2")' id="dpp2">Ton</li>
              <li onclick='movee("3")' id="dpp3"> m3</li>
            </ul>
          </div>
          <h5>amount</h5>
          <label class="amountKg" for="amount">Kg</label>
          <input id="amount" type="number" placeholder="amount" class="amount" name="Amount">
          <h4><i class="fa-solid fa-pen-to-square"></i>description</h4>
          <textarea placeholder="description" name="description" id="description" cols="30" rows="10"></textarea>
         
        </form>
        <div class="btns">
          <button class="Return"> <i class="fa-solid fa-arrow-left"></i> Return</button>
          <a class="next" onclick='mover()'>Next<i class="fa-solid fa-arrow-right"></i></a>
        </div>
      </ul>
      <ul class="box price">
        <h3> price</h3>
        <form method="POST" action="<?php echo e(route('card.store')); ?>" enctype="multipart/form-data">
          <?php echo csrf_field(); ?>
          <h5>Currency</h5>
          <div class="custemoption" id="filter">
            
            <select name="currency" id="currency" style="    width: 100%;
            height: 100%;
            background-color: var(--boxesColor);
         border:none;
            font-weight: bold;
            font-size: 17px;"> <?php $__currentLoopData = $currency; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <option value="<?php echo e($data->currency_code); ?>"><?php echo e($data->currency_code); ?></option>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?></select>
             
          </div>

          <h5>type of offer</h5>
          <div id="on" class="custemoption" data-option="price">
            <div class="optionHeader" id="on">
              <p>price type</p>
              
              <i data-option="price" id="on" class="fa-sharp fa-solid fa-chevron-down"></i>
            </div>
            <ul class="on unit" data-option="price">
              <li onclick='moveee("1")' id="dppk1"><span>DZA</span></li>
              <li onclick='moveee("2")' id="dppk2"><span>DZA</span>/Kg</li>
              <li onclick='moveee("3")' id="dppk3"><span>DZA</span>/ton</li>
              <li onclick='moveee("4")' id="dppk4"><span>DZA</span>/ m3</li>
            </ul>
          </div>
          <h5>price</h5>

          <label class="priceDA" for="price">DZA</label>
          <input id="price" type="number" class="price" name="price" placeholder="price" required>
          <h5>do you accept exchange?</h5>
          <div class="custemoption" data-option="exchange">
            <div class="optionHeader" id="on">
              <p class=""> exchange</p>
             
              <i data-option="exchange" id="on" class="fa-sharp fa-solid fa-chevron-down"></i>
            </div>
            <ul class="on exchange" data-option="exchange">
              <li onclick='moveeel("1")' id="dppkk1">I accept exchange</li>
              <li onclick='moveeel("2")' id="dppkk2">No exchnge availble</li>
            </ul>
          </div>

        </form>
        <div class="btns">
          <button class="Return"> <i class="fa-solid fa-arrow-left"></i> Return</button>
          <a class="next" onclick='movel()'>Next<i class="fa-solid fa-arrow-right"></i></a>
        </div>
      </ul>
      <ul class="box contact">
        <h3>contact</h3>
        <h4><i class="fa-solid fa-location-dot"></i>Location</h4>
        <form method="POST" action="<?php echo e(route('card.store')); ?>" enctype="multipart/form-data">
          <?php echo csrf_field(); ?>
          <h5 class="do-not">Adress</h5>
            <div class="custemoption" id="filter">
          
          <select name="country" id="country" style="    width: 100%;
          height: 100%;
          background-color: var(--boxesColor);
       border:none;
          font-weight: bold;
          font-size: 17px;">  <?php $__currentLoopData = $counteries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($data->name); ?>"><?php echo e($data->name); ?></option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?></select>
        </div>
        
          <h5>city</h5>
          <input type="text" id="city" placeholder="City" name="city" required>
          <h5>region</h5>
          <input type="text" id="region" placeholder="Region" name="region" required>
          <!-- <h4><i class="fa-solid fa-phone"></i>contact</h4>
          <h5>phone number</h5>
          <input type="number" placeholder="Phone number" required>
          <h5>email</h5>
          <input type="email" name="" id="" placeholder="Email" required> -->
        </form>
        <div class="btns">
          <button class="Return"> <i class="fa-solid fa-arrow-left"></i> Return</button>
          <a class="next" onclick="movll()">Next<i class="fa-solid fa-arrow-right"></i></a>
        </div>
      </ul>
       <form method="POST" action="<?php echo e(route('card.store')); ?>" enctype="multipart/form-data">
          <?php echo csrf_field(); ?>
          <input id="totalzz" type="hidden" name="Amountunit" value="">
          <input id="totalz" type="hidden" name="category" value="">
          <input id="totalzzz" type="hidden" name="typeoffer" value="">
          <input id="titlel" type="hidden" name="title" value="">
          <input id="descriptionl" type="hidden" name="description" value="">
          <input id="amountl" type="hidden" name="Amount" value="">
          <input id="totalzzzz" type="hidden" name="exchange" value="">
          <input id="pricel" type="hidden" name="price" value="">
          <input id="currencyl" type="hidden" name="currency" value="">
          <input id="countryl" type="hidden" name="country" value="">
          <input id="cityl" type="hidden" name="city" value="">
          <input id="regionl" type="hidden" name="region" value="">
          
      <ul class="box images">
        <h3>images</h3>
        <input type="file" accept="image/*" name="attachement" multiple id="img-input" class="img-input">
        <label class="custom-file-upload" for="img-input">
          <i class="fa-sharp fa-solid fa-cloud-arrow-up"></i>
          <P class="nbrOfFiles">select the related images </P>
          <ul class="fileList"></ul>
        </label>
        <div class="btns">
          <button class="Return"> <i class="fa-solid fa-arrow-left"></i> Return</button>
          <!-- <button class="next">Next<i class="fa-solid fa-arrow-right"></i></button> -->
          <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.primary-button','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('primary-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>create <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
        </div>
      </ul>
       </form>
    </div>
   
 
  </section>
  <script src="<?php echo e(asset('js/newAno.js')); ?>" defer></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
</form>
</body>

</html><?php /**PATH C:\xampp\htdocs\final-project\resources\views/card/create.blade.php ENDPATH**/ ?>