<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div class="relative">
        <!-- Header -->
        <div class="flex justify-center bg-slate-600 text-white font-bold">
            <div class="w-2/3">
                <a href="#" class="float-left p-2">SiTampan CMS</a>
                <a href="/admin" class="float-right p-2">Login</a>
            </div>
        </div>
        <!-- Body -->
        <div class="absolute flex justify-center items-center h-screen w-full top-0">
            <div class="text-center w-2/3 font-bold">
                <h1 class="text-3xl tracking-wider mb-2">SiTampan CMS</h1>
                <p class="font-normal text-lg mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem voluptatum, blanditiis officiis, eum fugit id totam temporibus laborum omnis earum suscipit magni nam dolore et. Dignissimos eaque odio vel corporis.</p>
                <div class="mx-auto w-1/3 grid grid-cols-2 gap-x-3">
                    <a href="#" class="flex items-center justify-center bg-black text-white rounded-sm py-2 px-2">Get Started</a>
                    <a href="#" class="flex items-center justify-center bg-red-400 rounded-sm py-2 px-2">Github</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
<?php
echo __DIR__;
?>