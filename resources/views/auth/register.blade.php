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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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
         
         
        <form method="POST" action="{{ route('register') }}" id="registration-form">
          @csrf
          <h2 class="topic">Sign up</h2>
          <div class="input-box">
            <input id="name"  type="text" name="name" :value="old('name')" required autofocus autocomplete="name" >
            <label for="name" :value="__('Name')">Enter your full name</label>
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
          </div>
          <div class="input-box">
            <input id="email"  type="email" name="email" :value="old('email')" required autocomplete="username">
            <label for="email" :value="__('Email')" >Enter your email</label>
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
          </div>
           
          <select name="state" id = "on" class="custemoption" data-option ="amountUnit" style="width:100%;">
            <option value="person">Person</option>
            <option value="company">Company</option>
            </select>
          
          <div class="input-box">
            <input id="password" 
            type="password"
            name="password"
            required autocomplete="new-password">
            <label for="password" :value="__('Password')">Enter password</label>
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
          </div>
          <div class="input-box">
            <input id="password_confirmation" 
            type="password"
            name="password_confirmation" required autocomplete="new-password" >
            <label for="password_confirmation" :value="__('Confirm Password')" >confirm password</label>
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
          </div>
    
          <div class="input-box">
            <input class="openAlert" type="submit" value="Submit" data-name="contact">
          </div>
          <a href="{{ route('login')}}" class="alreadyHaveAco">already have an account</a>
        </form>
      </div>
      </div>
      <script>
        $(document).ready(function () {
            $('#registration-form').on('submit', function (e) {
                e.preventDefault();
    
                $.ajax({
                    type: 'POST',
                    url: $(this).attr('action'),
                    data: $(this).serialize(),
                    success: function (response) {
                        // Handle successful registration
                       
                        location.reload() ;
                    },
                    error: function (xhr) {
                        if (xhr.status === 422) {
                            // Validation errors
                            var errors = xhr.responseJSON.errors;
    
                            var errorMessage = '';
                            for (var key in errors) {
                                errorMessage += errors[key].join('\n') + '\n';
                            }
    
                            alert('Validation errors:\n\n' + errorMessage);
                        } else {
                          location.reload() ;
                           
                        }
                    }
                });
            });
        });
    </script>
   
</body>
</html>