<header class="bg-indigo-600">
    <nav class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8" aria-label="Top">
        <div class="w-full py-6 flex items-center justify-between border-b border-indigo-500 lg:border-none">
            <div class="flex items-center">
                <a href="/">
                    <span class="sr-only">{{ config('app.name') }}</span>
                    <x-application-logo/>
                    {{ config('app.name') }}
                </a>
                <div class="hidden ml-10 space-x-8 lg:block">
                    <a href="{{ route('trending') }}" class="text-base font-medium text-white hover:text-indigo-50" key="Solutions">
                        Trending
                    </a>

                    @guest
                        <a href="#" class="text-base font-medium text-white hover:text-indigo-50" key="Pricing">
                            Pricing
                        </a>

                        <a href="#" class="text-base font-medium text-white hover:text-indigo-50" key="Docs">
                            Docs
                        </a>

                        <a href="#" class="text-base font-medium text-white hover:text-indigo-50" key="Company">
                            Company
                        </a>
                    @endguest
                </div>
            </div>
            <div class="ml-10 space-x-4">
                @guest
                    <a href="{{ route('login') }}" class="inline-block bg-indigo-500 py-2 px-4 border border-transparent rounded-md text-base font-medium text-white hover:bg-opacity-75">Sign in</a>
                    <a href="{{ route('register') }}" class="inline-block bg-white py-2 px-4 border border-transparent rounded-md text-base font-medium text-indigo-600 hover:bg-indigo-50">Sign up</a>
                @endguest
                @auth
                    <a href="{{ route('dashboard') }}" class="inline-block bg-indigo-500 py-2 px-4 border border-transparent rounded-md text-base font-medium text-white hover:bg-opacity-75">Dashboard ({{ Auth::user()->name }})</a>
                @endauth
            </div>
        </div>
    </nav>
</header>
