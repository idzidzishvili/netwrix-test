<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        {{-- @vite(['resources/scss/app.scss', 'resources/js/app.js']) --}}
        <link rel="stylesheet" href="{{asset('build/assets/app-3b6ee705.css')}}">
        {{-- https://volt-pro-laravel-admin-dashboard.updivision.com/documentation/plugins/choices-js/index.html --}}
        {{-- npm run build --}}
    </head>
    <body class="antialiased">
       <div class="test">
        Hello
       </div>
       <script>
        const BASE_URL = 'https://jsonplaceholder.typicode.com';
        const getTodoItems = async () => {
            try {
                const response = await axios.get(`${BASE_URL}/todos?_limit=5`);
                console.log(response)

            const todoItems = response.data;

            console.log(`GET: Here's the list of todos`, todoItems);

            return todoItems;
        } catch (errors) {
            console.error(errors);
        }
        };
       </script>
    </body>
</html>
