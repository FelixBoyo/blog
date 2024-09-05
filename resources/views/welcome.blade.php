<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ mix('css/app.css') }}">
  </head>
<body>
  @include('shared.dashboard')
  <h4 class="text-3xl mb-4 text-center text-lime-800"> Share yours ideas </h4>


    @include('shared.textform')

  <div class="max-w-md mx-auto p-4">

    <div>
      <h1 class="text-2xl font-bold mb-4 text-green-600 flex items-center">Title : <div class="text-slate-950 ml-4">Lorem Ipsum</div></h1>
      <p class="text-gray-700 text-base">
      Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum 
      has been the industry's standard dummy text ever since the 1500s, when an unknown printer 
      took a galley of type and scrambled it to make a type specimen book. It has survived not 
      only five centuries, but also the leap into electronic typesetting, remaining essentially 
      unchanged. It was popularised in the 1960s with the release of Letraset sheets containing 
      Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker 
      including versions of Lorem Ipsum. </p>
      <p class="text-gray-500 text-sm">Created at: 20/15/2024</p>


   </div>
  </div>
  <script src="{{ mix('js/app.js') }}" defer></script>
</body>
</html>