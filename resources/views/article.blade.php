<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Article List</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <script src="{{ mix('js/app.js') }}" defer></script>
</head>
<body>
    @include('shared.dashboard')
    @include('shared.success-message')

    @include('shared.textform')


 <h1 class="text-3xl mb-4 text-center text-lime-800">Articles</h1>
    <!-- Check if there are any posts to display -->
    @if ($posts->isEmpty())
        <p>No articles available.</p>
    @else
        <!-- Loop through each post and display its content -->
        @foreach ($posts as $post)
        <div class="max-w-md mx-auto p-4">
           
            <h1 class="text-2xl font-bold mb-4 text-green-600 flex items-center">Title : <div class="text-slate-950 ml-4">{{ $post->title }}</div></h1>
                <p class="text-gray-700 text-base">
                    {{ $post->content }}</p>
                    <p class="text-gray-500 text-sm"><small>Posted on {{ $post->created_at->format('M d, Y') }}</small></p>
            </div>
            <hr>
        @endforeach
    @endif

</body>
</html>