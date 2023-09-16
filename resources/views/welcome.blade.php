


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="{{asset('css/all.min.css')}}" />
  <link rel="stylesheet" href="{{asset('css/all.css')}}" />
  <link rel="stylesheet" href="{{asset('css/style.css')}}" />
  <link rel="stylesheet" href="{{asset('css/regular.css')}}" />
  <link rel="stylesheet" href="{{asset('fontawesome-free-6.4.0-web\css\all.min.css')}}">
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
          <a href="{{url('')}}"><img src="./Imeges/Brecycler2 Chosen-02 (1).png" alt="" /></a>

        </div>
        <div class="search">
          <input id="Search" type="text" placeholder="Search" />
          <button>
            <i class="fa-sharp fa-solid fa-magnifying-glass"></i>Search
          </button>
        </div>
        <div class="left-Icons">
          <i id="fa-magnifying-glass" class="fa-sharp fa-solid fa-magnifying-glass"></i>
          <a href="{{route('card.create')}}"> <i class="fa-solid fa-plus"></i></a>
          <!-- <i class="fa-solid fa-cart-shopping"></i> -->
         
          @if (Auth::check())

          <a onClick="myFunction()"  class="dropbtn" style="color: black">{{ Auth::user()->name }} <i class="fa-sharp fa-solid fa-caret-down"></i></a>
          <div style="display: none;" id="myDropdown" class="dropdown-content">
            @if (auth()->user()->isAdmin)
            <a href="{{url('dash')}}">Dashboard</a>
            @else
            <a href="{{url('dashuser')}}">Dashboard</a>
           
            @endif
            <a href="{{url('chatify')}}">Chat</a>
            <a href="{{route('profile.edit')}}">Edit Profile</a>
            <form method="POST" action="{{ route('logout') }}">
              @csrf
            <a href="{{route('logout')}}"
            onclick="event.preventDefault();
                        this.closest('form').submit();">logout</a></form></div>
                       
            
      
      @else
      
         
      @if (Route::has('login'))
          
      @auth
      <i onClick="myFunction()" class="fa-solid fa-user"></i>
      @else
    

      <div id="myDropdown" class="dropdown-content">

  

          <a href="{{ route('login') }}">login</a>
          <a href="{{ route('register') }}">Register</a>
          
        </div>
          

          @if (Route::has('register'))
          <i onClick="myFunction()" class="fa-solid fa-user"></i>

          <div id="myDropdown" class="dropdown-content">

      

              <a href="{{ route('login') }}">login</a>
              <a href="{{ route('register') }}">Register</a>
             
            </div>
          @endif
      @endauth
  </div>
@endif
  
  </a>
      
      @endif
          
         
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
                <a href="{{route('card.create')}}">Add an announce</a>
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
                  <a href="{{url('papaer',['course_id' => 'Paper'])}}"> Paper </a>
                </li>
                <li>
                  <i class="fa-solid fa-vial"></i>
                  <a href="{{url('papaer',['course_id' => 'chimical substances'])}}"> chimical substances </a>
                </li>
                <li>
                  <i class="fa-solid fa-flask"></i>
                  <a href="{{url('papaer',['course_id' => 'Plastic'])}}">plastic</a>
                </li>
                <li>
                  <i class="fa-solid fa-hammer"></i>
                  <a href="{{url('papaer',['course_id' => 'Metal'])}}">Metal </a>
                </li>
                <li>
                  <i class="fa-solid fa-laptop"></i><a href="{{url('papaer',['course_id' => 'Electronics'])}}">Electronics </a>
                </li>
                <li>
                  <i class="fa-solid fa-filter"></i><a href="{{url('papaer',['course_id' => 'Rubber'])}}">Rubber</a>
                </li>
                <li>
                  <i class="fa-sharp fa-solid fa-tree"></i><a href="{{url('papaer',['course_id' => 'Wood'])}}">Wood</a>
                </li>
                <li>
                  <i class="fa-solid fa-network-wired"></i>
                  <a href="{{url('papaer',['course_id' => 'Recycling machines'])}}">Recycling machines </a>
                </li>
                <li>
                  <i class="fa-solid fa-champagne-glasses"></i>
                  <a href="{{url('papaer',['course_id' => 'Glass'])}}">Glass</a>
                </li>
                <li>
                  <i class="fa-sharp fa-solid fa-shirt"></i><a href="{{url('papaer',['course_id' => 'Cloth and Textile'])}}">Cloth and Textile</a>
                </li>
                <li>
                  <i class="fa-solid fa-dna"></i>
                  <a href="{{url('papaer',['course_id' => 'Organic'])}}">Organic</a>
                </li>
                <li>
                  <i class="fa-solid fa-wand-magic-sparkles"></i><a href="{{url('papaer',['course_id' => 'Others'])}}">Others</a>
                </li>
              </ul>
              <ul class="prob">
                <li>Help and setting</li>
                <li><i class="fa-sharp fa-solid fa-newspaper"></i><a target="blank"
                    href="{{route('artcile.index')}}">Blog</a></li>
                <li><i class="fa-sharp fa-solid fa-address-card"></i><a href="{{Url('/contactus')}}" target="blank"> Contact
                    Us</a></li>
              </ul>
          </div>
        </div>
      </div>
      
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
            <i class="fa-solid fa-plus"></i> <a href="{{route('card.create')}}">Announce</a>
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
      <a href="{{url('papaer',['course_id' => 'Recycling machines'])}}" class="box">
        <div class="iconCr">
          <!-- <i class="fa-sharp fa-solid fa-book"></i> -->
          <img src="./Imeges/mass-production.png" alt="">
        </div>
        <p>Recycling machines</p>
      </a>
      <a href="{{url('papaer',['course_id' => 'paper'])}}" class="box">
        <div class="iconCr">
          <!-- <i class="fa-sharp fa-solid fa-book"></i> -->
          <img src="./Imeges/delivering.png" alt="">
        </div>
        <p>Paper</p>
      </a>
      <a href="{{url('papaer',['course_id' => 'chimical substances'])}}" class="box">
        <div class="iconCr">
          <!-- <i class="fa-solid fa-vial"></i> -->
          <img src="./Imeges/chemical-reaction.png" alt="">
        </div>
        <p>chimical substances</p>
      </a>
      <a href="{{url('papaer',['course_id' => 'plastic'])}}" class="box">
        <div class="iconCr">
          <img src="./Imeges/plastic.png" alt="">
        </div>
        <p>plastic</p>
      </a>
      <a href="{{url('papaer',['course_id' => 'rubber'])}}" class="box">
        <div class="iconCr">
          <!-- <i class="fa-sharp fa-solid fa-book"></i> -->
          <img src="./Imeges/tire.png" alt="">
        </div>
        <p>rubber </p>
      </a>
      <a href="{{url('papaer',['course_id' => 'Metal'])}}" class="box">

        <div class="iconCr">
          <!-- <i class="fa-solid fa-hammer"></i> -->
          <img src="./Imeges/metal.png" alt="">
        </div>
        <p>Metal</p>
      </a>
      <a href="{{url('papaer',['course_id' => 'Electronics'])}}" class="box">
        <div class="iconCr">
          <!-- <i class="fa-solid fa-laptop"></i >  -->
          <img src="./Imeges/electronic-devices.png" alt="">
        </div>
        <p>Electronics</p>
      </a>
      <a href="{{url('papaer',['course_id' => 'Wood'])}}" class="box">
        <div class="iconCr">
          <!-- <i class="fa-sharp fa-solid fa-tree"></i> -->
          <img src="./Imeges/wood.png" alt="">
        </div>
        <p>Wood</p>
      </a>
      <a href="{{url('papaer',['course_id' => 'Glass'])}}" class="box">
        <div class="iconCr">
          <!-- <i class="fa-solid fa-champagne-glasses"></i> -->
          <img src="./Imeges/bottles.png" alt="">
        </div>
        <p>Glass</p>
      </a>
      <a href="{{url('papaer',['course_id' => 'Cloth and Textile'])}}" class="box">
        <div class="iconCr">
          <!-- <i class="fa-sharp fa-solid fa-shirt"></i> -->
          <img src="./Imeges/recycle.png" alt="">
        </div>
        <p>Cloth and Textile</p>
      </a>

      <a href="{{url('papaer',['course_id' => 'Organic'])}}" class="box">
        <div class="iconCr">
          <!-- <i class="fa-solid fa-dna"></i> -->
          <img src="./Imeges/apple.png" alt="">
        </div>
        <p>Organic</p>
      </a>
      <a href="{{url('papaer',['course_id' => 'Others'])}}" class="box">
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
  <script src="{{asset('js/main.js')}}" defer></script>
</body>

</html>