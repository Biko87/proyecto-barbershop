<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BarberShop</title>
    <link rel="shortcut icon" type="image/x-icon"  href="/build/img/baber-icon.png" sizes="32x32" />
    <link rel="apple-touch-icon" type="image/x-icon" href="/build/img/baber-icon.png"> 
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;700;900&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="/build/css/app.css">
</head>
<body>

    <div class="contenedor-app">
        <div class="imagen"></div>
        <div class="app">
            <?php echo $contenido; ?>
        </div>
    </div>

    <?php
        echo $script ?? '';
    ?>            
</body>
</html>