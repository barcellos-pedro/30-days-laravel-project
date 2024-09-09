<nav class="pb-4 flex items-center justify-between border-b border-white/10">
    <div>
        <a href="/" title="Go to home">
            <img src="{{ Vite::asset('resources/images/logo.svg') }}" alt="Pixel Positions logo image">
        </a>
    </div>

    <div class="space-x-6 font-bold">
        <a href="/">Jobs</a>
        <a href="/careers">Careers</a>
        <a href="/salaries">Salaries</a>
        <a href="/companies">Companies</a>
    </div>

    <div>
        @auth
            <div class="flex items-center gap-x-10">
                <x-section-heading>
                    <a href="/jobs/create">Post a Job</a>
                </x-section-heading>

                <form method="POST" action="/logout" class="space-y-0">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Log Out</button>
                </form>
            </div>
        @endauth

        @guest
            <div class="space-x-6 font-bold">
                <a href="/register">Sign Up</a>
                <a href="/login">Log In</a>
            </div>
        @endguest
    </div>
</nav>
