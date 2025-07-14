<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/js/app.js', 'resources/sass/app.scss'])
</head>

<body>

    <x-header></x-header>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                {{ $slot }}
            </div>
        </div>
    </div>

</body>

</html>
