<nav class="bg-green-darker py-4">
    <div class="container mx-auto flex justify-between items-center text-green-lightest pl-6">
        <div>
            <h1 class="font-normal text-2xl">
                <a href="/" class="text-green-lightest flex items-center">
                    {{ config('app.name') }}
                </a>
            </h1>
        </div>

        <div class="flex" v-cloak>
            <div class="search-wrap rounded-full bg-green-darkest w-10 cursor-pointer h-10 flex items-center justify-center mr-4 relative" @mouseover="search" @mouseout="searching = false">
                <form method="GET" action="/threads/search" v-show="searching">
                    <input type="text"
                           placeholder="Search for something..."
                           name="q"
                           ref="search"
                           class="search-input absolute pin-r pin-t h-full rounded bg-green-darkest border-none pl-6 pr-10 text-white">
                </form>

                @include('svgs.icons.search')
            </div>

            @if (auth()->check())

                {{-- User dropdown. --}}
                <div>
                    <dropdown>
                        <div slot="heading"
                             class="rounded-full bg-green-darkest w-10 h-10 flex items-center justify-center cursor-pointer relative z-10"
                        >
                            <img src="{{ auth()->user()->avatar_path }}"
                                 alt="{{ auth()->user()->username }}"
                                 class="relative z-10 w-4 rounded-full">
                        </div>

                        <template slot="links">
                            <li class="text-sm pb-3">
                                <a class="link" href="{{ route('profile', Auth::user()) }}">My Profile</a>
                            </li>

                            @if (Auth::user()->isAdmin())
                                <li class="text-sm pb-3">
                                    <a class="link" href="{{ route('admin.dashboard.index') }}">Admin</a>
                                </li>
                            @endif

                            <li class="text-sm">
                                <logout-button route="{{ route('logout') }}" class="link">Logout</logout-button>
                            </li>
                        </template>
                    </dropdown>
                </div>
            @endif
        </div>
    </div>
</nav>
