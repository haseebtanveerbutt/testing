@extends('layouts.main')

<?php
    $star = array(1, 1, 1,1,1);

?>


@section('body')

<div class="row">
    <div class="col-12 col-md-6" style="font-size: 2em;">
        <h5>Example with half stars</h5>
        <div id="halfstarsReview"></div>
    </div>

    <div class="col-12 col-md-6">
        <label for="halfstarsInput">Stars</label>
        {{-- <input type="text" name="rating"  readonly id="halfstarsInput" class="form-control form-control-sm"> --}}
        <div class="alert alert-primary mt-2">
            Look in the developer console to see the event callback.
        </div>
    </div>
   <form action="{{URL::to('')}}/saveRate" method="post">
    @csrf
        <input type="hidden" name="star"  id="halfstarsInput" class="form-control form-control-sm">
        <button type="submit">save rating</button>
    </form>



    {{-- <div class="col-12">
        <script async src="//jsfiddle.net/timyboy12345/caows84u/1/embed/js/"></script>
    </div> --}}
</div>
<form action="{{URL::to('')}}/saveRate" method="post">
    @csrf
    {{-- <label for="">Text</label>
    <input type="text"  name="star1" value="" id="">
    <br> --}}
    {{-- <label for=""></label>
    <input type="text" hidden="" name="star1" value="{{$star['0']}}" id="">
    <br>
    <input type="text" hidden="" name="star2" value="{{$star['1']}}" id="">
    <br>
    <input type="text" hidden="" name="star3" value="{{$star['2']}}" id="">
    <br>
    <input type="text" hidden="" name="star4" value="{{$star['3']}}" id="">
    <br>
    <input type="text" hidden="" name="star5" value="{{$star['4']}}" id="">
    <br> --}}

    {{-- <select name="star" id="">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>

    </select>

    <button type="submit" name="submit">RatingSubmit</button>
</form> --}}
@endsection
    
@section('javaScriptFunction')
   <script>

       // on page load
       // get the rating coming from php
       // set stars according to that rating
        $("#halfstarsReview").rating({
            "half": true,
            "click": function (e) {
                console.log(e);
                $("#halfstarsInput").val(e.stars);
            }
        });

      </script>

@endsection

