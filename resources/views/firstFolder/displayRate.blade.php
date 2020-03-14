@extends('layouts.main')

@section('body')
<?php
     $averageRating = ['averageRating' => $averageRating];
     $myRating = 3.5;
    
     $isHalf = ($myRating %2 != 0);
?>
{{-- @include('_partials/rating', ['averageRating2'=>$averageRating2, 'myRating'=>$myRating, 'c'=>$c]) --}}



    @if ($averageRating == 4)
        {{-- <i class="fas fa-star-half-alt fa-stack-1x"></i> --}}
        <?php echo "ok"; ?> 
    @endif



    @foreach($averageRating as $index => $rating) 
        <span class="fa fa-stack" style="width:1em">
            
            @if($rating < $myRating)          
                <ul class="cours-star">
                    <li ><i class="fas fa-star fa-stack-1x"></i></li>
                    <li ><i class="fas fa-star fa-stack-1x"></i></li>
                    <li ><i class="fas fa-star fa-stack-1x"></i></li>
                    <li><i class="fas fa-star fa-stack-1x"></i></li>
                    <li><i class="fas fa-star fa-stack-1x"></i></i></li>
                </ul>    
            @endif 
            @if($isHalf)
                    <i class="fas fa-star-half fa-stack-1x"></i>
                    <br>
            @endif 
            @if($rating > $myRating)
                <i class="fas fa-star-empty fa-stack-1x"></i>
            @endif  
        </span>
    @endforeach

@endsection