<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
      
  <link rel="stylesheet" href="{{asset('fontawesome-free-6.4.0-web\css\all.min.css')}}">
  <link rel="stylesheet" href="{{asset('css/all.min.css')}}" />
  <link rel="stylesheet" href="{{asset('css/all.css')}}" />
  <link rel="stylesheet" href="{{asset('css/style.css')}}" />
  <link rel="stylesheet" href="{{asset('css/regular.css')}}" />
 

  <title>New announce</title>
</head>

<body>

    
    <section class="navabr">
  <nav class="nav">
    <div class="container">
      <div class="logo">
        <i class="fa-solid fa-bars" id="fa-bars"></i>
        <a href="{{url('')}}"><img src="{{asset('Imeges/Brecycler2 Chosen-02 (1).png')}}" alt="" /></a>

      </div>
      <form method="POST" action="{{ route('search.results') }}" class="dooum">
        @csrf
      <div class="search">
        <input id="Search" type="text" name="query" placeholder="Search" />
        <button type="submit" >
          <i class="fa-sharp fa-solid fa-magnifying-glass"></i>Search
        </button>
      </div>
      </form>
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
              <i class="fa-solid fa-user-plus"></i> <a href="{{ route('register') }}">register</a>
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
        <form method="POST" action="{{route('card.store')}}" enctype="multipart/form-data">
          @csrf
          
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
        <form method="POST" action="{{route('card.store')}}" enctype="multipart/form-data">
          @csrf
          <h5>Currency</h5>
          <div class="custemoption" id="filter">
            
            <select name="currency" id="currency" style="    width: 100%;
            height: 100%;
            background-color: var(--boxesColor);
         border:none;
            font-weight: bold;
            font-size: 17px;"> @foreach($currency as $data)
              <option value="{{$data->currency_code}}">{{$data->currency_code}}</option>
          @endforeach</select>
             
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
        <form method="POST" action="{{route('card.store')}}" enctype="multipart/form-data">
          @csrf
          <h5 class="do-not">Adress</h5>
            <div class="custemoption" id="filter">
          
          <select name="country" id="country" style="    width: 100%;
          height: 100%;
          background-color: var(--boxesColor);
       border:none;
          font-weight: bold;
          font-size: 17px;">  @foreach($counteries as $data)
            <option value="{{$data->name}}">{{$data->name}}</option>
        @endforeach</select>
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
       <form method="POST" action="{{route('card.store')}}" enctype="multipart/form-data">
          @csrf
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
          <x-primary-button>create</x-primary-button>
        </div>
      </ul>
       </form>
    </div>
   
 
  </section>
  <script src="{{asset('js/newAno.js')}}" defer></script>
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

</body>

</html>
