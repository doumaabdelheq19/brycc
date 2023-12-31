<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
   
    <link rel="stylesheet" href="{{asset('css/contact.css')}}" />
    <link rel="stylesheet" href="{{asset('css/all.min.css')}}" />
    <link rel="stylesheet" href="{{asset('css/all.css')}}" />
    <link rel="stylesheet" href="{{asset('css/style.css')}}" />
    <link rel="stylesheet" href="{{asset('css/regular.css')}}" />
    <link rel="stylesheet" href="{{asset('fontawesome-free-6.4.0-web\css\all.min.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,500;0,700;1,500;1,700&display=swap" rel="stylesheet">
    <link
      href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;500;600;700;900&family=Jomhuria&family=Open+Sans:ital,wght@0,300;0,500;0,700;0,800;1,400;1,800&family=Poppins:ital,wght@0,200;0,500;0,700;0,800;1,100;1,300&family=Roboto:ital,wght@0,100;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700&family=Work+Sans:ital,wght@0,100;0,300;0,400;0,500;1,500;1,700;1,900&display=swap"
      rel="stylesheet"
    />
    <script src="./contact.js" defer></script>
</head>
<body>
   
    <!-- Start contact us  -->
    <div class="container">
    <div class="content">
      <div class="image-box">
      <img src="./Imeges/5127314.jpg" alt=""> 
      </div>
      <div class="overlay"></div>
      <div class="alert" data-name="contact">
        <nav>Brecycler </nav>
        <div class="rapper">
          <div class="info">
          <span>your message has been sent </span>
        <i class="fa-sharp fa-solid fa-circle-check"></i>
        </div>
        </div>
        <a href="./index.html">close</a>
      </div>
     
    <form action="#">
      <div class="topic">Get in touch</div>
      <div class="input-box">
        <input type="text" required>
        <label>Enter your name</label>
      </div>
      <div class="input-box">
        <input type="email" class="email" required>
        <label>Enter your email</label>
      </div>
      <div class="message-box">
        <textarea required ></textarea>
        <label>Enter your message</label>
        
      </div>
      <div class="input-box">
        <input class="openAlert" type="submit" value="Send Message" data-name="contact">
      </div>
    </form>
  </div>
  </div>
  
</body>
</html>