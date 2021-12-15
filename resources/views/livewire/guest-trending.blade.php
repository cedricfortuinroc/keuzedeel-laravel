<div class="bg-white shadow overflow-hidden sm:rounded-md">
    <ul role="list" class="divide-y divide-gray-200">
        @forelse($recentPosts as $recentPost)
            <li>
                <a href="{{ route('post', $recentPost->slug) }}" class="block hover:bg-gray-50">
                    <div class="px-4 py-4 sm:px-6">
                        <div class="flex items-center justify-between">
                            <p class="text-sm font-medium text-indigo-600 truncate">
                                {{$recentPost->title}} - {{ $recentPost->user->name }}
                            </p>
                        </div>
                        <div class="mt-2 sm:flex sm:justify-between">
                            <div class="mt-2 flex items-center text-sm text-gray-500 sm:mt-0">
                                <!-- Heroicon name: solid/calendar -->
                                <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400"
                                     xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                     aria-hidden="true">
                                    <path fill-rule="evenodd"
                                          d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                          clip-rule="evenodd"/>
                                </svg>
                                <p>
                                    Posted on
                                    <i>{{ date('d/m/Y', strtotime($recentPost->created_at)) }}</i>
                                </p>
                            </div>
                        </div>
                        @guest
                            <div class="flex items-center mt-3">
                                To reply, please&nbsp;<a class="inline-flex items-center px-2.5 py-1.5 border border-transparent text-xs font-medium rounded text-indigo-700 bg-indigo-100 hover:bg-indigo-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">login</a>
                            </div>
                        @endguest
                    </div>
                </a>
            </li>
        @empty
            <li>
                <a href="#" class="block hover:bg-gray-50">
                    <div class="px-4 py-4 sm:px-6">
                        <div class="flex items-center justify-between">
                            <p class="text-sm font-medium text-indigo-600 truncate">
                                Haha dr bun niks
                            </p>
                        </div>
                    </div>
                </a>
            </li>
        @endforelse
    </ul>
</div>
