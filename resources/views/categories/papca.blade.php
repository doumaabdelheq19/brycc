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
  
  <link rel="stylesheet" href="{{asset('css/all.min.css')}}" />
  <link rel="stylesheet" href="{{asset('fontawesome-free-6.4.0-web\css\all.min.css')}}">
  <link rel="stylesheet" href="{{asset('css/style.css')}}" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;500;600;700;900&family=Jomhuria&family=Open+Sans:ital,wght@0,300;0,500;0,700;0,800;1,400;1,800&family=Poppins:ital,wght@0,200;0,500;0,700;0,800;1,100;1,300&family=Roboto:ital,wght@0,100;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700&family=Work+Sans:ital,wght@0,100;0,300;0,400;0,500;1,500;1,700;1,900&display=swap"
    rel="stylesheet" />
  <title>product description</title>
  </style>
  <script src="{{asset('js/main.js')}}" defer></script>

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
}}

function myFunction1() {
      if (document.getElementById("myDropdown1").style.display === "none"){
document.getElementById("myDropdown1").style.display = 'block';}
else {
document.getElementById("myDropdown1").style.display = 'none';}

}
function myFunction2() {
      if (document.getElementById("myDropdown1").style.display === "block"){
document.getElementById("myDropdown1").style.display = 'none';}
else {
document.getElementById("myDropdown1").style.display = 'block';}

}

// Close the dropdown menu if the user clicks outside of it
window.onclick = function(event) {
if (!event.target.matches('.drpbttn')) {
var dropdowns = document.getElementsByClassName("doouma");
var i;
for (i = 0; i < dropdowns.length; i++) {
var openDropdown = dropdowns[i];
if (openDropdown.classList.contains('show')) {
  openDropdown.classList.remove('show');
}
}
}

} 



</script>
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
        <form method="POST" action="{{ route('search.results') }}"  class="dooum">
          @csrf
        <div class="search">
          <input id="Search" type="text" name="query" placeholder="Search" />
          <button type="submit" >
            <i class="fa-sharp fa-solid fa-magnifying-glass"></i>Search
          </button>
        </div>
        </form>
      
        
        <div class="left-Icons">
         
          <a  onClick="myFunction1()" class="drpbttn"> <i id="fa-magnifying-glass"   class="fa-sharp fa-solid fa-magnifying-glass"></i></a>
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
      <form method="POST" style="display: none;
      position: absolute;
      background-color: white;
      box-shadow: rgba(0, 0, 0, 0.2) 0px 8px 16px 0px;
      z-index: 1;
      width: 93%;
      top: 1%;
      right: 6%;" action="{{ route('search.results') }}" id="myDropdown1" class="doouma">
        @csrf
      <div class="search">
        <a  onClick="myFunction2()" > <i class="fa-solid fa-xmark" style="font-size: 26px;"></i></a>
        <input id="Search" type="text" name="query" placeholder="Search" style="    width: 80%;
        background-color: white;
        outline: none;
        caret-color: var(--mainColor);
        border: none;
        font-size: 20px;
        padding-left: 12px;
        height: 70px;" />
        <button type="submit" style="        position: absolute;
        width: 20%;
        height: 70px;
        transform: translateY(-50%);
        transition: var(--mainTrantion);
        border: none;
        color: white;
        background-color: var(--mainColor);
        top: 50%;" >
          <i class="fa-sharp fa-solid fa-magnifying-glass" style="    font-size: 18px;
        "></i>
        </button>
      </div>
      </form>
         
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

  <!-- start product description -->
  <?php

   
  $cods=DB::table('cards')
      ->where('id', $course_id)
      ->get();?>
       @foreach ($cods as $cod)
       <?php 
       $tit= $cod->views ;
       $tit++;
       DB::table('cards')->where('id', $course_id)->update(['views' => $tit]);
       ?>
  <section class="product">
    <div class="parent">
      <h2> {{$cod->title}}</h2>

      <div class="imgContent">
        <div class="icon right"><i class="fa-solid fa-angle-right"></i></div>
        <div class="icon left"><i class="fa-solid fa-angle-left"></i></div>
        <div class="images">
          <img src="{{asset('/storage/'.$cod->attachement) }}" alt="">
          <img src="{{asset('/storage/'.$cod->attachement) }}" alt="">
          <img src="{{asset('/storage/'.$cod->attachement) }}" alt="">
        </div>
      </div>

      <div class="btns">
        <!-- chat page  -->
        <a class="call" href="{{url('chatify',['id' => $cod->user_id])}}"><i class="fa-solid fa-message"></i>chat</a>
        <a href="#Contact-details" class="details">More<i class="fa-solid fa-angle-right"></i></a>
      </div>

      <div class="info">
        <ul class="ad-description">
          <h3>ad-description</h3>
          <li><span>id :</span>
            <p> {{$cod->id}}</p>
          </li>
          <li><span>date :</span>
            <p> {{$cod->created_at}}</p>
          </li>
          <li><span>category :</span>
            <p> {{$cod->category}}</p>
          </li>
          <li><span>amount :</span>
            <p> {{$cod->Amount}}  {{$cod->Amountunit}}</p>
          </li>
          <li><span>price :</span>
            <p> {{$cod->price}}  {{$cod->currency}}</p>
          </li>
        </ul>
        <ul id="Contact-details" class="Contact-details">
          <h3>Contact details</h3>
          <li> <i class="fa-solid fa-user"></i> username :<a href=""><?php $codrs=DB::table('users')
            ->where('id', $cod->user_id)
            ->get();?>
             @foreach ($codrs as $codr) {{$codr->name}} @endforeach </a></li>
          <li><i class="fa-solid fa-location-dot"></i>location :<a href=""> {{$cod->city}} ,  {{$cod->country}}</a></li>
        </ul>
        <div class="description">
          <h3>description</h3>
          <p> {{$cod->description}}</p>
        </div>
@endforeach
      </div>
    </div>
  </section>
  <!-- End product description -->

  <section class="mainPage" id="Cloth">
    <div class="icon right"><i class="fa-solid fa-angle-right"></i></div>
    <div class="icon left"><i class="fa-solid fa-angle-left"></i></div>
    <div class="bigcard">
      <h2><i class="fa-solid fa-list"></i> Recomendation</h2>

      <div class="card" id="plastic">
        <?php 
         $recoms = DB::table('cards')
                ->inRandomOrder()
                ->limit(9)
                ->get();
                ?>
                @foreach ($recoms as $recom)
        <a class="box" href="{{url('papca' , $recom->id)}}">
          <img src="{{asset('/storage/'.$recom->attachement) }}" alt="" />

          <!-- <i class="fa-solid fa-heart fully"></i>
                <i class="fa-regular fa-heart empty"></i>
                <i class="fa-regular fa-bookmark emptySave"></i>
                <i class="fa-solid fa-bookmark fullSave"></i> -->
          <div class="more">
            <h3>{{$recom->title}}</h3>
            <p><span>{{$recom->price}} {{$recom->currency}}</span> / {{$recom->Amountunit}}</p>
            <p>{{$recom->Amount}} {{$recom->Amountunit}}</p>
          </div>
          <button>Details</button>
        </a>
        @endforeach
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

</html>
