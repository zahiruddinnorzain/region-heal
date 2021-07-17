@extends('layout.layout')

@section('content')



<!-- <div class="card w-100 rounded p-2 mt-3 kotak text-dark">
    <p>Throw Memory</p>
    <content>
        <div class="form-group">
            <textarea class="form-control" rows="5" id="comment_memory"></textarea>
        </div>
        <a href="#" class="btn btn-success px-3" role="button" style="float:right;" data-toggle="modal" data-target="#myModal" onclick="clear_memory()">Throw !</a>
    </content>
</div>

<div class="card w-100 rounded p-2 mt-3 kotak text-dark">
    <p>exercise</p>
    <content>
        <center>
            <img id="id_senam" width="500px" class="img-thumbnail">
        </center>
    </content>
    <footer class="mt-4"><i class="fas fa-heart likes"></i></footer>
</div>

<div class="card w-100 rounded p-2 mt-3 kotak text-dark">
    <p>cat</p>
    <content>
        <center>
            <img id="id_cat" width="500px" class="img-thumbnail">
        </center>
    </content>
    <footer class="mt-4"><i class="fas fa-heart likes"></i></footer>
</div>

<div class="card w-100 rounded p-2 mt-3 kotak text-dark">
    <p>gag</p>
    <content>
        <center>
            <img id="id_gag" width="500px" class="img-thumbnail">
        </center>
    </content>
    <footer class="mt-4"><i class="fas fa-heart likes"></i></footer>
</div>

<div class="card w-100 rounded p-2 mt-3 kotak text-dark">
    <p>Advice</p>
    <content>
        <div id="id_advice" class="h4"></div>
    </content>
    <footer class="mt-4"><i class="fas fa-heart likes"></i></footer>
</div>

<div class="card w-100 rounded p-2 mt-3 kotak text-dark">
    <p>Jokes</p>
    <content>
        <div id="id_jokes_setup" class="h4"></div>
        <div id="id_jokes_punchline" class="h4"></div>
    </content>
    <footer class="mt-4"><i class="fas fa-heart likes"></i></footer>
</div> -->



<div class="card w-100 rounded p-2 mt-3 kotak text-dark">
    <p>Throw Memory</p>
    <content>
        <div class="form-group">
            <textarea class="form-control" rows="5" id="comment_memory"></textarea>
        </div>
        <a href="#" class="btn btn-primary px-3" role="button" style="float:right;" data-toggle="modal" data-target="#modal_done_throw" onclick="send_memory()">Throw !</a>
        <a href="#" class="btn btn-warning px-3 mr-2" role="button" style="float:right;" data-toggle="modal" data-target="#modal_burn" onclick="clear_memory()">Burn !</a>
    </content>
</div>

@foreach($datas as $data)
{!! $data->metadata !!}
@endforeach

<center>
    <a class="btn btn-success mt-3 px-3" role="button" onclick="reload()">More</a>
</center>

<div class="mt-3"></div>

<!-- The Modal memory throw -->
  <div class="modal fade" id="modal_done_throw">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
 
        <!-- Modal body -->
        <div class="modal-body">
          <img id="id_memory" width="500px" class="img-thumbnail" src="https://animesher.com/orig/0/63/634/6346/animesher.com_anime-gif-message-in-a-bottle-water-634629.gif">
          <button type="button" class="btn btn-danger mt-2" data-dismiss="modal" style="float:right;">Close</button>
        </div>
        
      </div>
    </div>
  </div>

<!-- The Modal memory burn -->
  <div class="modal fade" id="modal_burn">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
 
        <!-- Modal body -->
        <div class="modal-body">
          <img id="id_memory" width="500px" class="img-thumbnail" src="/img/burn.gif">
          <button type="button" class="btn btn-danger mt-2" data-dismiss="modal" style="float:right;">Close</button>
        </div>
        
      </div>
    </div>
  </div>


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

    //cat
    // https://docs.thecatapi.com/
    $.ajax({
        type: 'get',
        url: 'https://api.thecatapi.com/v1/images/search',
        success: function (data) {
            output = data[0].url;
            $("#id_cat").attr("src",output);
            // console.log(output);
        }
    });

function reload(){
    $('#loading').show();
    location.reload();
    $(this).scrollTop(0);
}

// exercise senaman
let senaman = [
    {"url":"https://dailyburn.com/life/wp-content/uploads/2016/04/circle-gif-2.gif"},
    {"url":"https://sites.google.com/site/activecarephysiotherapyclinic/_/rsrc/1472868012109/neck-exercises/NECKPAIN_EXERCISES1.png"},
    {"url":"https://cdn.painlessmovement.com/wp-content/uploads/2018/02/nhs-neck-workout.jpg"},
    {"url":"https://image.shutterstock.com/image-vector/exercises-neck-head-vector-illustration-260nw-635430884.jpg"},
    {"url":"https://media.istockphoto.com/vectors/exercises-for-the-head-and-neck-in-the-office-at-the-workplace-vector-vector-id982833788?k=6&m=982833788&s=612x612&w=0&h=3Z_OCdbZfTPnKBnxTVvRLKlZHqu6JZ7j5qSp22LCbTY="},
]
let nombor_random = Math.floor(Math.random() * 5);
$("#id_senam").attr("src",senaman[nombor_random]["url"]);

// memory textarea clear
function clear_memory(){
    $("#comment_memory").val('');
}

$('.likes').click(function(){
  $(this).toggleClass('clicked');
});

function send_memory(){
    var message = $('#comment_memory').val();
    clear_memory();

    $.post("{{ url('/tambah/memory') }}",
    {
      "_token": "{{ csrf_token() }}",
      "memory_data": message,
    },
    function(data, status){
      console.log("Data: " + data + "\nStatus: " + status);
      if(data != null){
        $("#modal_done_throw").modal('show');
        }
      });

}

</script>

@endsection