<div class="header">
    <a href="{{ route('user.home', $game_id) }}">
        <h2 class="p-2 m-0 bg-black text-center">Games <span class="text-warning">Predictions</span></h2>

    </a>
    <form action="{{ route('logout') }}" method="POST"> @csrf <button type="submit"
            class="btn btn-ghost-dark btn-block">Logout</button></form>
    <div class="menu">

        <ul class="nav justify-content-center">
            @foreach ($games as $game)
                <li class="nav-item">
                    <a class="nav-link {{ $game->id == $game_id ? 't-active' : '' }}"
                        href="{{ route('user.home', $game->id) }}">
                        <img class="{{ $game->id == $game_id ? 'f-active' : '' }}" src="{{ $game->menu_icon }}" />
                        <span>{{ $game->name }}</span>
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
</div>
