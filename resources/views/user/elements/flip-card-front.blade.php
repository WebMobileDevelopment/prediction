 <!-- front -->
 <div class="flip-card-front">
     <!-- card -->
     <div class="card">
         <div class="card-header text-muted font-weight-bold">
             <div class="note-title">
                 <div class="note-text">
                     {{ $match->league->short_name }}
                 </div>
             </div>
             <div class="note-des">
                 {{ $match->league->name }}
             </div>
         </div>
         <div class="card-body d-flex flex-column justify-content-center align-items-center px-1 py-4">
             <div class="row justify-content-start align-items-center no-gutters">
                 <div class="col-auto">
                     <img src="{{ $match->team1->avatar }}" height="19px">
                 </div>
                 <div class="col-auto">
                     <div class="font-weight-bold ml-3">{{ $match->team1->name }}</div>
                 </div>
             </div>
             <div class="my-2 text-center">
                 <small>
                     Match Starts in
                 </small>
                 <div class="text-warning timer">
                     <div class="countdown_timer" final_date="{{ $match->start_time }}"></div>
                 </div>
             </div>
             <div class="row justify-content-start align-items-center no-gutters">
                 <div class="col-auto">
                     <img src="{{ $match->team2->avatar }}" height="19px">
                 </div>
                 <div class="col-auto">
                     <div class="font-weight-bold ml-3">{{ $match->team2->name }}</div>
                 </div>
             </div>
             <div class="mt-3 mb-2 text-center">
                 <button type="button" class="btn btn-success flip-card-button">Predict & Win</button>
             </div>
             <div class="text-center font-weight-bold small text-muted pb-3">
                 Absolutly Free & Win Big Prizes
             </div>
         </div>
     </div>
 </div>
