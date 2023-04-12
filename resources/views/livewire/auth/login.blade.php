<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">
            <form class="login100-form validate-form p-l-55 p-r-55 p-t-178" wire:submit.prevent='submit'>
                @csrf
                <span class="login100-form-title is-invalid">
                    {{__('auth.Sign In')}}
                </span>

                <div class="wrap-input100 validate-input m-b-16" data-validate="Please enter username">
                    <input class="input100 text-center" type="text" name="username" placeholder="{{__('auth.username')}}" wire:model.defer='name'>
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate = "Please enter password">
                    <input class="input100 text-center" type="password" name="pass" placeholder="{{__('auth.password')}}" wire:model.defer='password'>
                    <span class="focus-input100"></span>
                </div>

                <div class="container-login100-form-btn  p-t-40 p-b-40">
                    <button class="login100-form-btn">
                        {{ __('auth.Sign In') }}
                    </button>
                </div>

            </form>
        </div>
    </div>
</div>