@props([
    'title' => 'Laracasts'
])



<!doctype html>


<html lang="en" >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title  }}</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
{{--    <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />--}}
{{--    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>--}}
{{--    <link href="https://cdn.jsdelivr.net/npm/daisyui@5/themes.css" rel="stylesheet" type="text/css" />--}}
</head>
<body>

<x-nav/>
<main class="text-primary">
{{$slot}}

</main>
</body>
</html>
