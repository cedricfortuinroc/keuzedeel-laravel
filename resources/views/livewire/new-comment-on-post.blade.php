<form wire:submit.prevent="jan" class="relative">
    @if($success)
        <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-4" role="alert">
            <p class="font-bold">Success!</p>
            <p>Your reply has been created.</p>
        </div>
    @endif
    <div class="border border-gray-300 rounded-lg shadow-sm overflow-hidden focus-within:border-indigo-500 focus-within:ring-1 focus-within:ring-indigo-500">
        <label for="comment" class="sr-only">Add your comment</label>
        <textarea rows="3" name="comment" id="comment" wire:model="body"
                  class="block w-full py-3 border-0 resize-none focus:ring-0 sm:text-sm" placeholder="Add your comment..."></textarea>

        <!-- Spacer element to match the height of the toolbar -->
        <div class="py-2" aria-hidden="true">
            <!-- Matches height of button in toolbar (1px border + 36px content height) -->
            <div class="py-px">
                <div class="h-9"></div>
            </div>
        </div>
    </div>

    <div class="absolute bottom-0 inset-x-0 pl-3 pr-2 py-2 flex justify-between">
        <div class="flex items-center space-x-5">
        </div>
        <div class="flex-shrink-0">
            <button type="submit" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                Post
            </button>
        </div>
    </div>
</form>
