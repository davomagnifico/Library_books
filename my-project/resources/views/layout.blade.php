<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>The Library</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="/app.css"  rel="stylesheet">
        <!-- Styles -->

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <div class='page'>
            <header>
                <h1>Bloody Good Books</h1><a href="#">Sign in</a><br />
                <nav>
                    <a href="/">Home</a>
                    <a href="/add_book">Add a book</a>
                    <a href="/view_book">View a book</a>
                    <a href="/loan_book">Loan a book</a>
                    <a href="/return_book">Return a book</a>
                    <a href="/remove_book">Remove a book</a>
                </nav>    
            </header>
            


            @yield('content');




        </div>  
    </body>
</html>