




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Articles</title>
    <link rel="stylesheet" href="{{asset('css/article.css')}}" />
    <link rel="stylesheet" href="{{asset('css/all.min.css')}}" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;500;700&family=Poppins:wght@300;400;500;700&family=Roboto:wght@300;400;500;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<nav>
    <div class="containerr">
        <div class="logo">
            <a href="{{url('')}}"><img src="{{asset('Imeges/Brecycler2 Chosen-02 (1).png')}}" alt="" /></a>
        </div>
        <ul class="links">
            @if (auth()->user()->isAdmin)
            <li><a href="{{route('artcile.create')}}">Add Articles</a></li>
       
       
        @endif
            <li><a href="{{route('artcile.index')}}">Articles</a></li>
            <li><a href="{{Url('/contactus')}}">Contact Us</a></li>
            <li><a href="{{url('')}}">Home</a></li>
        </ul>
        <i class="fa-solid fa-bars menu-bar">
            <ul class="mobile-links">
                <li><a href="{{url('')}}">Home</a></li>
                @if (auth()->user()->isAdmin)
                <li><a href="{{route('artcile.create')}}">Add Articles</a></li>
           
           
            @endif
                
                <li><a href="{{route('artcile.index')}}">Articles</a></li>
                <li><a href="{{Url('/contactus')}}">Contact Us</a></li>
            </ul>
        </i>
    </div>
</nav>
<div class="container">
    <div class="containerr">
        <div class="articles">
            @foreach ($artciles as $artcile)
            <div class="article">
                <div class="image">
                    <img src="https://api.lorem.space/image/furniture?w=300&h=300" alt="">
                </div>

                
                <div class="text">
                    <h2 class="title"> {{$artcile->title}}</title></h2>
                    <p class="description"> {{$artcile->descrip}}</p>
                </div>
                
                <div class="more">
                    <a href="{{route('artcile.show' , $artcile->id)}}">More</a>
                </div>
            </div>
           
            @endforeach
        </div>
    </div>
</div>
<footer>
    <img src="./images/white-logo.png" alt="">
    <div class="social">

        <a href=""> <img src="../Imeges/facebook.png" alt=""></a>
        <a href=""><img src="../Imeges/linkedin.png" alt=""></a>
        <a href=""> <img src="../Imeges/instagram.png" alt=""></a>
        <a href=""> <img src="../Imeges/youtube.png" alt=""></a>

    </div>
    <p>&copy; copyRight 2023</p>
</footer>
<script src="{{asset('js/article.js')}}" defer></script>
</body>

</html>