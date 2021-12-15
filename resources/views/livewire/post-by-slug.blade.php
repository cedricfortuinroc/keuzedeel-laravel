<div class="font-sans text-gray-900 antialiased m-12">
    <div class="mb-6">
        <div>
            <nav class="hidden sm:flex" aria-label="Breadcrumb">
                <ol role="list" class="flex items-center space-x-4">
                    <li>
                        <div class="flex">
                            <a href="{{ route('trending') }}"
                               class="text-sm font-medium text-gray-500 hover:text-gray-700">Trending</a>
                        </div>
                    </li>
                    <li>
                        <div class="flex items-center">
                            <!-- Heroicon name: solid/chevron-right -->
                            <svg class="flex-shrink-0 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg"
                                 viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd"
                                      d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                      clip-rule="evenodd"/>
                            </svg>
                            <a href="#"
                               class="ml-4 text-sm font-medium text-gray-500 hover:text-gray-700">{{ $post->user->name }}</a>
                        </div>
                    </li>
                    <li>
                        <div class="flex items-center">
                            <!-- Heroicon name: solid/chevron-right -->
                            <svg class="flex-shrink-0 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg"
                                 viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd"
                                      d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                      clip-rule="evenodd"/>
                            </svg>
                            <a href="#" aria-current="page"
                               class="ml-4 text-sm font-medium text-gray-500 hover:text-gray-700">{{ date('d/m/Y', strtotime($post->created_at)) }}</a>
                        </div>
                    </li>
                </ol>
            </nav>
        </div>
        <div class="mt-2 md:flex md:items-center md:justify-between">
            <div class="flex-1 min-w-0">
                <h2 id="title" class="text-2xl font-bold leading-7 text-gray-900 sm:text-3xl sm:truncate">
                    {{ $post->title }}
                </h2>
            </div>
        </div>
    </div>

    {!! $post->body !!}

    @auth
        <div class="mt-8">
            <div class="flex items-start space-x-4">
                <div class="min-w-0 flex-1">
                    @livewire('new-comment-on-post', ['post' => $post->id])
                </div>
            </div>
        </div>
    @endauth

    @guest
        <div class="mt-8">
            <div class="flex items-start space-x-4">
                <div class="min-w-0 flex-1">
                    <form action="#" class="relative">
                        <div class="border border-gray-300 rounded-lg shadow-sm overflow-hidden focus-within:border-indigo-500 focus-within:ring-1 focus-within:ring-indigo-500">
                            <label for="comment" class="sr-only">Add your comment</label>
                            <textarea rows="3" name="comment" id="comment" class="block w-full py-3 border-0 resize-none focus:ring-0 sm:text-sm"
                                      placeholder="Please login first before replying to this post" readonly></textarea>
                            <div class="py-2" aria-hidden="true">
                                <div class="py-px">
                                    <div class="h-9"></div>
                                </div>
                            </div>
                        </div>

                        <div class="absolute bottom-0 inset-x-0 pl-3 pr-2 py-2 flex justify-between">
                            <div class="flex items-center space-x-5">
                            </div>
                            <div class="flex-shrink-0">
                                <a href="{{ route('login') }}" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                    Login
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endguest

    <div class="mt-8">
        <div class="flow-root">
            <ul role="list" class="-mb-8">
                @forelse($post->replies as $reply)
                    <li>
                        <div class="relative pb-8">
                            <div class="relative flex items-start space-x-3">
                                <div class="relative">
                                    <img
                                        class="h-10 w-10 rounded-full bg-gray-400 flex items-center justify-center ring-8 ring-white"
                                        src="https://images.unsplash.com/photo-1531427186611-ecfd6d936c79?ixlib=rb-=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=8&w=256&h=256&q=80"
                                        alt="">
                                </div>
                                <div class="min-w-0 flex-1">
                                    <div>
                                        <div class="text-sm">
                                            <a href="#" class="font-medium text-gray-900">{{ $reply->user->name }}</a>
                                        </div>
                                        <p class="mt-0.5 text-sm text-gray-500">
                                            {{ date('d/m/Y H:i', strtotime($reply->created_at)) }}
                                        </p>
                                    </div>
                                    <div class="mt-2 text-sm text-gray-700">
                                        <p>
                                            {!! $reply->body !!}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                @empty
                    <li>
                        <div class="relative pb-8">
                            <div class="relative flex items-start space-x-3">
                                <div class="relative">
                                    <img
                                        class="h-10 w-10 rounded-full bg-gray-400 flex items-center justify-center ring-8 ring-white"
                                        src="https://images.unsplash.com/photo-1555861496-0666c8981751?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8ZXJyb3J8ZW58MHx8MHx8&auto=format&fit=crop&w=700&q=60"
                                        alt="">
                                </div>
                                <div class="min-w-0 flex-1">
                                    <div>
                                        <div class="text-sm">
                                            <p class="font-medium text-gray-900">Haha er zijn geen replies fucker</p>
                                        </div>
                                        <p class="mt-0.5 text-sm text-gray-500">
                                            Ik wil naar huis
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                @endforelse
            </ul>
        </div>
    </div>
</div>


