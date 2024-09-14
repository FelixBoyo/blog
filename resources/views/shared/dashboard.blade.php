

<nav class=" border-gray-200 dark:border-gray-600 dark:bg-gray-900">
  <div class="max-w-screen-xl mx-auto p-4 flex items-center justify-between">
    <!-- Logo and Brand Name -->
    <a href="#" class="flex items-center space-x-2">
      <img src="{{ asset('images/write.png') }}" alt="Logo" class="h-8">
      <span class="text-2xl font-semibold dark:text-white">PostIt</span>
    </a>
    


    <!-- Navigation Links -->
    <div id="navbar-menu" class="hidden w-full md:flex md:items-center md:justify-between md:w-auto">
      <ul class="flex flex-col md:flex-row md:space-x-8 mt-4 md:mt-0">
        <li><a href="#" class="block py-2 px-4 text-white">Home</a></li>
        <li><a href="#" class="block py-2 px-4 text-white">About</a></li>
        <li><a href="#" class="block py-2 px-4 text-white">Stories</a></li>
        <li><a href="#" class="block py-2 px-4 text-white">Post</a></li>
      </ul>
    </div>  
    
    <button id="navbar-toggle" class="md:hidden p-2 text-gray-500 dark:text-gray-400 focus:outline-none">
      <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
        <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"></path>
      </svg>
    </button>
  </div>
</nav>
<script src="{{ mix('js/navigation.js') }}" defer></script>
