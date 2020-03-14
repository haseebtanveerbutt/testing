<?php

$isHalf = ($myRating %2 != 0);

?>
 @foreach($averageRating2 as $index => $rating) 
    <span class="fa fa-stack" style="width:1em">
        
         @if($rating < $myRating) 
             <i class="fas fa-star-half-alt fa-stack-1x"></i> 
             <i class="fas fa-star-half-alt fa-stack-1x"></i>
         @endif 
        @if($isHalf)
            
            @for( $i=0 ;  $i<$c ; $i++)
             <i class="fas fa-star fa-stack-1x"></i> 
            @endfor    
                <i class="fas fa-star-half fa-stack-1x"></i>
        @endif 
        @if($rating > $myRating)
            <i class="fas fa-star-empty fa-stack-1x"></i>
        @endif  
    </span>
    @endforeach
