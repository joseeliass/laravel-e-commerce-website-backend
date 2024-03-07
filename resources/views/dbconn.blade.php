<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>laravel & db connection</title>
</head>
<body>
    <?php
        if(DB::connection()->getPdo()){
            echo "successfully connected to DB and DB name: " . DB::getDatabaseName();
        }
    
    ?>
</body>
</html>