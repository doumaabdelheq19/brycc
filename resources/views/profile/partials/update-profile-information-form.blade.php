




    <div class="container" style="margin: 0px; padding:0px">

        <h1 class="title">Edit Profile</h1>
        <form id="send-verification" method="post" action="{{ route('verification.send') }}">
            @csrf
        </form>
        <form method="post" action="{{ route('profile.update') }}">
            @csrf
        @method('patch')
        <div class="grid">
            <div class="form-group a">
                <label for="name">Name</label>
                <x-text-input id="name" name="name" type="text" style="padding: 4px; margin:12px; font-size:20px; width:350px"   class="mt-1 block w-full" :value="old('name', $user->name)" required autofocus autocomplete="name" />
                <x-input-error class="mt-2" :messages="$errors->get('name')" />
            </div>
    
          
    
            <div class="form-group email-group">
                <label for="email">Email</label>
                <x-text-input id="email" name="email" style="padding: 4px; margin:12px; font-size:20px; width:350px" type="email" class="mt-1 block w-full" :value="old('email', $user->email)" required autocomplete="username" />
                    <x-input-error class="mt-2" :messages="$errors->get('email')" />

                        @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                            <div>
                                <p class="text-sm mt-2 text-gray-800 dark:text-gray-200">
                                    {{ __('Your email address is unverified.') }}
            
                                    <a style="color: green"form="send-verification" class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">
                                        {{ __('Click here to re-send the verification email.') }}
                                    </a>
                                </p>
            
                                @if (session('status') === 'verification-link-sent')
                                    <p class="mt-2 font-medium text-sm text-green-600 dark:text-green-400">
                                        {{ __('A new verification link has been sent to your email address.') }}
                                    </p>
                                @endif
                            </div>
                        @endif
            </div>
    
          
    
        </div>
    
       
        
        <div class="button-container">
            <button style="    font-weight: bold;
            line-height: 19px;
            background: #0f944b;
            border: none;
            padding: 15px 25px;
            border-radius: 6px;
            color: white;
            width: auto;
            margin-top: 24px;" class="button" type="submit">Edit profile</button>
        </div>
            </form>
    </div>
        
</section>
