<!-- card -->
<div class="card mx-2 my-3">
    <div class="card-header text-muted font-weight-bold">
        <div class="note-title">
            <div class="note-text">
                {{ $match->league->short_name }}
            </div>
        </div>
        <div class="note-des">{{ $match->league->name }}</div>
    </div>
    <div class="card-body p-2 m-0">
        <div class="row no-gutters justify-content-center align-items-center">
            <div class="col-4">
                <div class="d-flex flex-column justify-content-center align-items-center">
                    <img src="{{ $match->team1->avatar }}" height="19px">
                    <span class="">{{ $match->team1->name }}</span>
                </div>
            </div>
            <div class="col-4 px-2">
                <div class="d-flex flex-column justify-content-center align-items-center">
                    <div class="small">
                        Match Starts in
                    </div>
                    <div class="text-warning font-weight-bold mb-2">
                        <div class="countdown_timer" final_date="{{ $match->start_time }}"></div>
                    </div>
                    <a href="page3.html" class="btn btn-sm btn-success">Predict & Win</a>
                </div>
            </div>
            <div class="col-4">
                <div class="d-flex flex-column justify-content-center  align-items-center">
                    <img src="{{ $match->team2->avatar }}" height="19px">
                    <span class="">{{ $match->team2->name }}</span>
                </div>
            </div>
        </div>
    </div>
    <div class="card-footer p-1 text-center text-muted">
        Absolutely Free & Win Big Prize
    </div>
</div>
<!-- card -->
