<x-layout docTitle="Login" title="{{__('access')}}">
    {{-- icona login --}}
    
    <div class="container-fluid pb-5 bgLogin">
        <div class="row justify-content-center mLogin p-5 vh-100">
            <div class="col-12 text-center mb-5">
                <i class="bi bi-person-circle display-1 text-white"></i>
            </div>
            <div class="col-6">
                <form method="POST" action={{route('login')}}>
                    @csrf
                    
                    <div class="mb-3 pt-4 text-white">
                        <label for="email" class="form-label fs-5">{{__('ui.email')}}</label>
                        <input name='email' type="email" class="form-control" id="email" aria-describedby="emailHelp">
                    </div>
                    
                    <div class="mb-3 my-5 text-white">
                        <label for="password" class="form-label  fs-5">Password</label>
                        <input name='password' type="password" class="form-control" id="password">
                    </div>   
                    
                    <button type="submit" class="btn btnLogin fs-5 mb-2">Login</button>
                    <p class="pt-3 fs-5 register">{{__('notRegister?')}}</p> <a class='btn btnForm fs-5' href="{{route('register')}}">{{__('register')}}</a>
                </form>
            </div>
            
        </div>
    </div>
</x-layout>