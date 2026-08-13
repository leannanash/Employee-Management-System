<nav>
    <div>
        <a href="{{ route('dashboard') }}">
            Dashboard
        </a>

        <a href="{{ url('/employees') }}">
            Employees
        </a>
    </div>

    <div>
        @auth
            <span>{{ Auth::user()->name }}</span>

            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <button type="submit">
                    Log Out
                </button>
            </form>
        @endauth
    </div>
</nav>