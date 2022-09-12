<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles/styles.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <form action="palindrome-api.php" method="GET">
                    <input name="string" type="text">
                    <input name="submit" type="submit">
                </form>
            </div>
            <div class="col">
                <form action="calculation-api.php" method="POST">
                    <input name="a" type="text">
                    <input name="b" type="text">
                    <input name="c" type="text">
                    <input name="submit" type="submit">
                </form>
            </div>
        </div>

    </div>
</body>
</html>