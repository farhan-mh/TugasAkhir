<!doctype html> <html lang="en"> <head>
<meta charset="utf-8"> 
<meta name="viewport" content="width=device-width, initial-scale=1"> 
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
@forelse($menu as $menuu1)
@if($menuu1->id === 1)
<link rel="shortcut icon" href="{{ asset('storage/pos/'. $menuu1->logo)}}" type="image/x-icon">
@endif
 @empty
 @endforelse
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Mulish:wght@800&family=Ubuntu&display=swap" rel="stylesheet">
<!-- <script src="https://cdn.tailwindcss.com"></script> -->
<link rel="stylesheet" href="{{ asset('style.css') }}"> 
<link rel="stylesheet" href="{{ asset('styleAdmin.css') }}"> 

<title>...</title> 
</head>
<body> 
   @include('shared.header')
    <div>
        @yield('content')
    </div>
    @include('shared.footer')
    <script src="{{ asset('script.js')}}"></script>
    <script>

    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"   crossorigin="anonymous"></script>
    </body>

    </html>