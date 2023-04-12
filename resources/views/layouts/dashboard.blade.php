<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{__('dashboard.dashboard')}}</title>
    <link rel="stylesheet" href="{{asset('assets/dashboard/style.css')}}">
    {{-- <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script> --}}
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
    @stack('styles')

    @livewireStyles
</head>
<body {{app()->getLocale() == 'en' ? 'class=ltr' : ''}}>

    <livewire:dashboard.header>

    {{ isset($slot) ? $slot : null }}

    <livewire:dashboard.lang-btn>

        @livewireScripts
        @stack('scripts')
        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
        <script>
            window.livewire.on('alertSuccess', (message) => {
                Toastify({
                text: message,
                duration: 3000,
                destination: "https://github.com/apvarun/toastify-js",
                newWindow: true,
                close: true,
                gravity: "top", // `top` or `bottom`
                position: "right", // `left`, `center` or `right`
                stopOnFocus: true, // Prevents dismissing of toast on hover
                style: {
                    background: "linear-gradient(to right, #00b09b, #96c93d)",
                },
                onClick: function(){} // Callback after click
                }).showToast();

// Swal.fire({
                //     title: message,
                //     icon: 'success',
                //     confirmButtonText: '{{__('main.ok')}}'
                // })
            })
        
        </script>
    </body>
</html>