<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo e($title); ?></title>
    <?php echo app('Illuminate\Foundation\Vite')('resources/css/app.css'); ?>
</head>
<body>
    <div class="flex justify-center bg-slate-600 text-white font-bold">
        <div class="w-2/3" id="navbar">
            
        </div>
    </div>
    <?php echo $content; ?>

    <script src="<?php echo e(asset('assets/js/jquery-3.7.1.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/script.js')); ?>"></script>
</body>
</html><?php /**PATH /var/www/html/sitampan/resources/views/page.blade.php ENDPATH**/ ?>