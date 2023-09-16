<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
    <link rel="stylesheet" href="{{asset('css/all.min.css')}}" />
    <link rel="stylesheet" href="{{asset('css/all.css')}}" />
    <link rel="stylesheet" href="{{asset('css/style.css')}}" />
    <link rel="stylesheet" href="{{asset('css/regular.css')}}" />
    <link rel="stylesheet" href="{{asset('fontawesome-free-6.4.0-web\css\all.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/dash.css')}}" />

    <title>Brycl dashboard</title>
</head>

<body>
  <section class="navabr">
    <nav class="nav">
      <div class="container">
        <div class="logo">
          <i class="fa-solid fa-bars" id="fa-bars"></i>
          <a href="{{url('')}}"><img src="./Imeges/Brecycler2 Chosen-02 (1).png" alt="" /></a>
  
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
      
    </nav>
  </section>
    <div class="container" style="margin-top: 150px">
       
       
        <main >
            <h1>Admin Dashboard</h1>

            
            <div class="insights">
                <div class="Announc">
                    <span class="material-symbols-outlined">
                        analytics
                    </span>
                

                    <div class="middle">
                        <div class="left">
                            <h3>Total Announcements</h3>
                            <?php 
       $nuuu=0;
                            $cods=DB::table('cards')->get();?>
                            @foreach ($cods as $cod)
                            <?php $nuuu++; ?>
                            @endforeach
                            <h1>{{$nuuu}}</h1>
                        </div>
                      
                    </div>
                   
                </div>
               
                <div class="articles">
                    <span class="material-symbols-outlined">
                        article
                        </span>

                    <div class="middle">
                        <div class="left">
                            <h3>Total articles</h3>
                            <?php 
                            $nuuup=0;
                                                 $cods=DB::table('artciles')->get();?>
                                                 @foreach ($cods as $cod)
                                                 <?php $nuuup++; ?>
                                                 @endforeach
                                                 <h1>{{$nuuup}}</h1>
                        </div>
                        
                    </div>
                    
                </div>
                
                <div class="users">
                    <span class="material-symbols-outlined">
                        group
                        </span>

                    <div class="middle">
                        <div class="left">
                            <h3>Total Users</h3>

                               <?php 
       $nuuua=0;
                            $cods=DB::table('users')->get();?>
                            @foreach ($cods as $cod)
                            <?php $nuuua++; ?>
                            @endforeach
                            <h1>{{$nuuua}}</h1>
                        </div>
                        
                    </div>
                   
                </div>
               
            </div>
            <div class="recent-users">
                <h2>analytics</h2>
                <div>
                  <a href="https://info.flagcounter.com/l7f8"><img src="https://s01.flagcounter.com/count2/l7f8/bg_FFFFFF/txt_058248/border_CCCCCC/columns_8/maxflags_12/viewers_0/labels_0/pageviews_0/flags_0/percent_0/" alt="Flag Counter" border="0" style="width: 75%;" ></a>
                </div>


              














                <select id="test" name="form_select" onchange="showDiv(this)">
                  <option value="0">No</option>
                  <option value="1">Yes</option>
               </select>











               
                <div class="container p-5" >
                 
           
                  <div id="google-line-chart" style="width: 900px; height: 500px" ></div>
           
              </div>
           
              <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
              <script type="text/javascript">
                  google.charts.load('current', {'packages':['corechart']});
                  google.charts.setOnLoadCallback(drawChart);
              
                 
                 
      function drawChart() {
           
           var data = google.visualization.arrayToDataTable([
               ['Month Name', 'Register Users Count'],
    
                   @php
                  
                   foreach($lineCharts as $d) {
                       echo "['".$d->day_name."', ".$d->count."],";
                   }
                   @endphp
           ]);
    
           var options = {
             title: 'New users',
             curveType: 'function',
             legend: { position: 'bottom' }
           };
    
             var chart = new google.visualization.LineChart(document.getElementById('google-line-chart'));
    
             chart.draw(data, options);
           }
    
          
      function drawChartt() {
           
           var data = google.visualization.arrayToDataTable([
               ['Month Name', 'Register Users Count'],
    
                   @php
                  
                   foreach($lineChart as $d) {
                       echo "['".$d->day_name."', ".$d->count."],";
                   }
                   @endphp
           ]);
    
           var options = {
             title: 'New users',
             curveType: 'function',
             legend: { position: 'bottom' }
           };
    
             var chart = new google.visualization.LineChart(document.getElementById('google-line-chart'));
    
             chart.draw(data, options);
           }
 
                  


                 
                 
              </script>
             
            </div>
            <div class="recent-users">
                <h2>Recent New users</h2>
                <table>
                    <thead>
                        <?php 
                     
                                             $cors=DB::table('users')->orderBy('created_at', 'desc')->limit(4)->get();?>
                                             
                                             
                                             
                        <tr>
                            <th>Name</th>
                            <th>State</th>
                            <th>Email</th>
                            <th>Status</th>
                            <th></th>
                        </tr>
                       
                    </thead>
                    <tbody>
                        @foreach ($cors as $cor)
                        <tr>
                            <td>{{$cor->name}}</td>
                            <td>{{$cor->state}}</td>
                            <td>{{$cor->email}}</td>
                            <td class="status">User</td>
                            
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <a href="#">Show All</a>
            </div>
        </main>
       
        <div class="right">
           
       
            <div class="recent-updates">
                <h2>Recent Updates</h2>
                <div class="updates">
                  <?php 
                     
                                             $cores=DB::table('updates')->orderBy('created_at', 'desc')->limit(3)->get();?>
                                             @foreach ($cores as $core)
                    <div class="update">
                        <div class="profile-photo">
                            <img src="" alt="">
                        </div>
                        <div class="messages">
                            <p>{{$core->stak}}</p>
                            <small class="text-muted">{{ \Carbon\Carbon::parse($core->created_at)->diffForHumans() }}</small>
                        </div>
                    </div>
                   @endforeach
                </div>
            </div>
          
            <div class="Announc-analytics">
                <h2>My articles</h2>
                
                <?php 
                     
                     $cors=DB::table('artciles')->where('user_id',  Auth::user()->id )->orderBy('created_at', 'desc')->limit(4)->get();?>
                       @forelse ($cors as $cor)
                       <div class="arttt">

<div class="right">
<div class="info">
   <h3> {{$cor->title}}</h3>
   <small class="text-muted">{{$cor->descrip}}</small>
</div>

</div>

</div>
@empty
<p>No Articles yet</p>
@endforelse
             
                <div class="arttt add-product" >
                    <div>
                        <span class="material-symbols-outlined">
                            add
                        </span>
                        <a href="{{route('card.create')}}">Add an article</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

<script >
    
const themeToggle = document.querySelector('.theme-toggle')
themeToggle.addEventListener('click', () => {
    document.body.classList.toggle('dark-theme-variables')

    themeToggle.querySelector('span:nth-child(1)').classList.toggle('active')
    themeToggle.querySelector('span:nth-child(2)').classList.toggle('active')
})


</script>
</html>