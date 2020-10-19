<div class="container">
    <div class="list-mode mb-5 py-3">
        @foreach ($matchs as $match)
            @include('user.elements.list-card')
        @endforeach
    </div>
</div>
