@extends('layout.layout')

@section('content')

<div class="card w-100 rounded p-2 mt-3 kotak text-dark">
    <p>gag</p>
    <content>
        <center>
            <img id="id_gag" width="500px" class="img-thumbnail">
        </center>
    </content>
</div>

<div class="card w-100 rounded p-2 mt-3 kotak text-dark">
    <p>Throw Memory</p>
    <content>
        <div class="form-group">
            <textarea class="form-control" rows="5" id="comment"></textarea>
        </div>
        <a href="#" class="btn btn-success px-3" role="button" style="float:right;">Throw !</a>
    </content>
</div>

<div class="card w-100 rounded p-2 mt-3 kotak text-dark">
    <p>Advice</p>
    <content>
        <div id="id_advice" class="h4"></div>
    </content>
</div>

<div class="card w-100 rounded p-2 mt-3 kotak text-dark">
    <p>Jokes</p>
    <content>
        <div id="id_jokes_setup" class="h4"></div>
        <div id="id_jokes_punchline" class="h4"></div>
    </content>
</div>

<center>
    <a class="btn btn-success mt-3 px-3" role="button" onclick="reload()">More</a>
</center>

<div class="mt-3"></div>

<script>
    //advice
    $.ajax({
        type: 'get',
        url: 'https://api.adviceslip.com/advice',
        success: function (data) {
            data = JSON.parse(data);
            output = data.slip.advice;
            $("#id_advice").html(output);
            // console.log(output);
        }
    });

    //gag
    // https://github.com/D3vd/Meme_Api
    $.ajax({
        type: 'get',
        url: 'https://meme-api.herokuapp.com/gimme',
        success: function (data) {
            output = data.url;
            $("#id_gag").attr("src",output);
            // console.log(output);
        }
    });

    //jokes
    // https://github.com/15Dkatz/official_joke_api
    $.ajax({
        type: 'get',
        url: 'https://official-joke-api.appspot.com/random_joke',
        success: function (data) {
            output = data;
            $("#id_jokes_setup").html(output.setup);
            $("#id_jokes_punchline").html(output.punchline);
            // console.log(output);
        }
    });

function reload(){
    location.reload();
}
</script>

@endsection