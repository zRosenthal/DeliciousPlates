<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Delicious Plates - Home</title>
    <link rel="stylesheet" href="{{asset('/style.css')}}">
</head>
<body>
<div class="main">
    <header class="main-header">
        <h1>Delicious Plates</h1>
    </header>
    <nav>
        <ul>
            <li><a href="index.html" class="active">Home</a></li>
            <li><a href="recipe.html">Featured Recipe</a></li>
            <li><a href="gallery.html">Photo Gallery</a></li>
            <li><a href="#">Dicks</a></li>
        </ul>
    </nav>
    <div class="main-content">
    @yield('content')
    </div>
</div>
</body>
</html>