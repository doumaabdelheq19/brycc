@if(session()->has('jsAlert'))
    <script>
        alert({{ session()->get('jsAlert') }});
    </script>
@endif 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
     <link rel="stylesheet" href="{{ asset('css/all.min.css') }}" />
    <link rel="stylesheet" href="{{asset('css/all.css')}}" />
    <link rel="stylesheet" href="{{asset('css/contact.css')}}" />
    <link rel="stylesheet" href="{{asset('css/regular.css')}}" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,500;0,700;1,500;1,700&display=swap" rel="stylesheet">
    <link
      href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;500;600;700;900&family=Jomhuria&family=Open+Sans:ital,wght@0,300;0,500;0,700;0,800;1,400;1,800&family=Poppins:ital,wght@0,200;0,500;0,700;0,800;1,100;1,300&family=Roboto:ital,wght@0,100;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700&family=Work+Sans:ital,wght@0,100;0,300;0,400;0,500;1,500;1,700;1,900&display=swap"
      rel="stylesheet"
    />
    <script src="{{asset('js/singUp.js')}}" defer></script>
</head>
<body>
     <!-- Start contact us  -->
     <div class="container">
        <div class="content">
          <div class="image-box">
          <img src="./Imeges/depositphotos_515228796-stock-illustration-online-registration-sign-login-account.webp" alt=""> 
          </div>
         
         
        <form method="POST" action="{{ route('custom.login') }}" >
          @csrf
          <h2 class="topic">Log in</h2>
          
          <div class="input-box">
            <input id="email"  type="email" name="email" :value="old('email')" required autocomplete="username">
            <label for="email" :value="__('Email')" >Enter your email</label>
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
          </div>
           
        
          
          <div class="input-box">
            <input id="password" 
            type="password"
            name="password"
            required autocomplete="new-password">
            <label for="password" :value="__('Password')">Enter password</label>
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
          </div>
          
    
          <div class="input-box">
            <input class="openAlert" type="submit" value="Submit" data-name="contact">
          </div>
          <a href="./log in.html" class="alreadyHaveAco">already have an account</a>
        </form>
      </div>
      </div>
      <script>
        document.addEventListener('DOMContentLoaded', function () {
            const form = document.querySelector('form');
            form.addEventListener('submit', async function (e) {
                e.preventDefault();
                const formData = new FormData(form);
                const response = await fetch(form.action, {
                    method: 'POST',
                    body: formData,
                });

                if (response.ok) {
                    // Authentication successful, redirect
                    window.location.href = '/dashboard';
                } else {
                    // Authentication failed, display error in alert dialog
                    const data = await response.json();
                    alert(data.error);
                }
            });
        });
    </script>
</body>
</html>