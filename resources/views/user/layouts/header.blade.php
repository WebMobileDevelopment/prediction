<!-- header -->
<div class="header">
    <!-- title -->
    <h2 class="p-2 m-0 bg-black text-center">Games <span class="text-warning">Predictions</span></h2>
    <!-- title -->
    <!-- menu -->
    {{-- {{ dd($games) }} --}}
    <div class="menu">

        <ul class="nav justify-content-center">
            @foreach ($games as $i => $game)
                <li class="nav-item">
                    <a class="nav-link {{ $i == 0 ? 't-active' : '' }}" href="#">
                        <img class="{{ $i == 0 ? 'f-active' : '' }}"
                            src="{{ asset('assets/images/front/games-tab-icons/' . $game->id . '.png') }}" />
                        <span>{{ $game->name }}</span>
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
    <!-- menu -->
</div>
<!-- header -->
