<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My Library Home')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">My Library</a>
            <!-- Additional navigation elements if necessary -->
        </div>
    </nav>

    <main class="container my-3">
        <section class="my-5">
            <h1>Welcome to My Library</h1>
            <p>This is a sample home page for a library website.</p>
        </section>
        <section class="row">
            <div class="col-md-4">
                <h2>Featured Books</h2>
                <!-- List of featured books -->
            </div>
            <div class="col-md-4">
                <h2>New Arrivals</h2>
                <!-- List of new arrivals -->
            </div>
            <div class="col-md-4">
                <h2>Best Sellers</h2>
                <!-- List of best sellers -->
            </div>
        </section>
    </main>

    <footer class="bg-light text-center py-3 fixed-bottom">
        <p>&copy;  2024 </p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html>
