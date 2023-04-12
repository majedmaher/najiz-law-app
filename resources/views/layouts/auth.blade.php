<!DOCTYPE html>
<html lang="{{app()->getLocale()}}">
<head>
	<title>Login V8</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	{{-- <link rel="icon" type="image/png" href="images/icons/favicon.ico"/> --}}
	<link rel="stylesheet" type="text/css" href="{{asset('assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/util.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/main.css')}}">
<!--===============================================================================================-->

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

@livewireStyles

</head>
<body>
	
    {{ isset($slot) ? $slot : null }}
	
    
        @livewireScripts

        <script>
            Livewire.on('alertError', (message) => {
                Swal.fire({
                    title: message,
                    icon: 'error',
                    confirmButtonText: '{{__('main.ok')}}'
                })
            })
        
        </script>

    </body>
    </html>