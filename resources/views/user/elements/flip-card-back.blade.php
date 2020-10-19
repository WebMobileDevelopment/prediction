 <!-- back -->
 <div class="flip-card-back">
     <div class="flip-header d-flex align-items-center justify-content-between small px-2 py-1">
         <div class="">
             <i class="fa fa-arrow-left pr-2 text-muted"></i>
             <span class="text-muted">
                 Predict Below Questions Correctly
             </span>
         </div>
         <i class="fa fa-times-circle flip-back-button">
         </i>
     </div>

     @foreach ($match->questions as $question)
         <div class="predict-s1 p-1 small">
             <div class="top-predict">
                 {{ $question->question }}
             </div>
             <div class="border d-flex justify-content-between align-items-center p-1">
                 <div class="d-flex align-items-center">
                     <img src="{{ $match->team1->avatar }}" width="25px">
                     <div class="pl-3 text-weight-bold">
                         Select {{ $match->team1->short_name }} {{ $question->question }}
                     </div>
                 </div>
                 <i class="fa fa-plus"></i>
             </div>
             <div class="border d-flex justify-content-between align-items-center p-1">
                 <div class="d-flex align-items-center">
                     <img src="{{ $match->team2->avatar }}" width="25px">
                     <div class="pl-3 text-weight-bold">
                         Select {{ $match->team2->short_name }} {{ $question->question }}
                     </div>
                 </div>
                 <i class="fa fa-plus"></i>
             </div>
         </div>
     @endforeach
     <div class="my-1 text-center">
         <a href="page4.html" class="btn btn-success btn-sm">
             Submit
         </a>
     </div>
     <div class="text-center font-weight-bold small text-muted pb-2">
         Absolutly Free & Win Big Prizes
     </div>
 </div>
 <!-- back -->
