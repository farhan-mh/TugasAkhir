<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
    @livewireStyles
</head>
<body>

<div class="container">
    <div class="row mt-5 justify-content-center">
        <div class="mt-5 col-md-8">
            <div class="card">
                <div class="card-header bg-denger text-white">
                    <h5 class="text-denger">Laravel</h5>
                </div>
                <div class="card-body">
                    @livewire('login-register')
                </div>
            </div>
        </div>
    </div>
</div>
@livewireScripts
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"   crossorigin="anonymous"></script>
</body>
</html>