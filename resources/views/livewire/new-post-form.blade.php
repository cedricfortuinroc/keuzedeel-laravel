<form wire:submit.prevent="save" wire:change.prevent="update">
    @if($success)
        <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-4" role="alert">
            <p class="font-bold">Success!</p>
            <p>Your post has been created.</p>
        </div>
    @endif
    <div class="mb-4">
        <div>
            <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
            <div class="mt-1">
                <input wire:model="title" type="text" name="title" id="title"
                       class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md"
                       placeholder="A beautiful post">
            </div>
        </div>
    </div>
    <div class="mb-4">
        <div>
            <label for="company-website" class="block text-sm font-medium text-gray-700">
                Slug
            </label>
            <div class="mt-1 flex rounded-md shadow-sm">
                <span
                    class="inline-flex items-center px-3 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 sm:text-sm">
                  https://later.nl/
                </span>
                <input wire:model="slug" type="text" name="company-website" id="company-website"
                       class="flex-1 min-w-0 block w-full px-3 py-2 rounded-none rounded-r-md focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm border-gray-300"
                       placeholder="autogenerated slug" readonly>
            </div>
        </div>
    </div>
    <div class="mb-4">
        <div>
            <label for="comment" class="block text-sm font-medium text-gray-700">Body</label>
            <div class="mt-1">
                <textarea wire:model="body" rows="4" name="comment" id="comment"
                          class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md"></textarea>
            </div>
        </div>
    </div>
    <div class="flex items-center justify-start">
        <a href="{{ route('posts') }}"
           class="inline-flex mr-3 items-center px-4 py-2 border border-transparent text-base font-medium rounded-md text-red-700 bg-red-100 hover:bg-red-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">
            Back to posts
        </a>
        <button type="submit"
                class="inline-flex items-center px-4 py-2 border border-transparent text-base font-medium rounded-md text-green-700 bg-green-100 hover:bg-green-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">
            Submit
        </button>
    </div>
</form>
