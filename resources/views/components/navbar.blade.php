<nav class="shadow-lg w-full bg-blue-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-20">
            <div class="flex items-center space-x-3">
                <img src="{{ asset('images/target_logo.png') }}" alt="Logo" class="h-16 w-auto drop-shadow-md">
                <span class="font-semibold text-lg tracking-wide"></span>
            </div>
            @if ($time == 'D'){
                <button> teste </button>
            }@endif

            <div>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button class="bg-red-700 hover:bg-red-600 text-white font-semibold py-2 px-5 rounded-md transition">
                        Logout
                    </button>
                </form>
            </div>
        </div>
    </div>
</nav>
