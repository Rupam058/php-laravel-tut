<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
</head>

<body>
    <nav>
        <a href="/">Home</a>
        <a href="/about">About</a>
        <a href="/contact">Contact</a>
        <a href="/meet-our-team">Team</a>
    </nav>

    <!-- <?php echo $slot; ?> -->
    {{ $slot }} <!-- Blade syntax -->
</body>

</html>