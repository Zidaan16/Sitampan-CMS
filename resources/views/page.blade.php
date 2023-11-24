<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$title}}</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div class="flex justify-center bg-slate-600 text-white font-bold">
        <div class="w-2/3" id="navbar">
            
        </div>
    </div>
    <?php echo $content; ?>

    <script src="{{ asset('assets/js/jquery-3.7.1.js') }}"></script>
    <script src="{{ asset('assets/js/script.js') }}"></script>
</body>
</html>