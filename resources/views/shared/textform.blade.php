<div class="max-w-md mx-auto p-4">
    <form action="{{ route('article.store') }}"method="POST">
        @csrf
        <textarea name="title" id="title" rows="1" class="block p-2.5 mb-1
        w-full text-sm text-gray-900 bg-gray-50 rounded-lg 
        border border-gray-300 focus:ring-blue-500 focus:border-blue-500
        dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 
        dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" 
        placeholder="Content title..."></textarea>

        <textarea id="content" name="content" rows="4" class="block p-2.5 mb-1
        w-full text-sm text-gray-900 bg-gray-50 rounded-lg 
        border border-gray-300 focus:ring-blue-500 focus:border-blue-500
        dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 
        dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" 
        placeholder="Write your thoughts here..."></textarea>

        <button type="submit" class="bg-blue-500 text-white font-bold py-2 px-4 rounded hover:bg-blue-600">
        Post
        </button>
    </form>
</div>