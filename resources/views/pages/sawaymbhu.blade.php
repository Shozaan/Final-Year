@extends('layouts.app')
@section('content')
<div class="basantapur1">
    <img class="basantapur2" src="images/image29.jpeg">
    <div class="basanttag">
        <h1><b>Sawayambhunath</b></h1>
    </div>
</div>
<div class="basantinfo">
    <h1>Its lofty white dome and glittering golden spire are visible for many miles and from all sides of the valley.</h2>
</div>
<div class="basantexplain">
    <p>Buddha, when visiting the place, declared that it was a wish-fulfilling stupa and whoever is touched by the wind that passes over the stupa receives the seed of liberation from the cycle of existence.
    The stupa represents Buddha’s mind. To visit a stupa is said to be the same as meeting a Buddha in person.
     It offers peace, freedom and joy to the whole world and ultimately helps us to obtain perfect enlightenment.
     The area surrounding the stupa is filled with chaityas, temples, painted images of deities and numerous other religious objects. 
     There are many small shrines with statues of Tantric and shamanistic deities, prayer wheels for the Tibetan Buddhists,
</p>
</div>


<button class="basantbtn" onclick="myFunction()">Learn more</button>
<div id="myDIV" style="display:none">
    <h1>Shopping</h1>
    <p>Purchase different ornaments related to buddhist and singing bowl around this site<p>  
    <h1>Recreation</h1>
    <p>You can enjoy view of kathmandu from the top. There are Buddha park and natural meuseums at the rear part of monarch.<p>
    <h1>Be Aware</h1>
    <p> Monkeys around this place are quiet naughty. They might steal your food, cameras, phones or bag, etc.<p>
</div>
<script>
function myFunction() {
  var x = document.getElementById("myDIV");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
</script>
<h1> Visit Other</h1>
<div class="visitmore">
    <div class="pashupati3">
        <div class="basantimg1">
            <!-- <img class="explore2" src="images/image19.jpg"> -->
            <a class="thumbnail" href="/basantapur"><img src="images/image26.jpg" width="360px" height="300px" border="0" /></a>
        </div>
        <div class="basantbut1">
            <h1><b>Basantapur</b></h1>
            <a href="/basantapur" class="button"><b>Explore</b></a>
        </div>
    </div>
    <div class="Swayambhu1">
        <div calss="basantimg1">
            <!-- <img class="explore2" src="images/image27.jpg"> -->
            <a class="thumbnail" href="/pashupathi"><img src="images/image19.jpg" width="360px" height="300px" border="0" /></a>
        </div>
        <div class="basantbut1">
            <h1><b>Pashupati</b></h1>
            <a href="/sawaymbhu" class="button"><b>Explore</b></a>
        </div>
    </div>
    <div class="Bouddha1">
        <div calss="basantimg1">
            <!-- <img class="explore2" src="images/image1.jpg"> -->
            <a class="thumbnail" href="/bouddha"><img src="images/image1.jpg" width="360px" height="300px" border="0" /></a>
        </div>
        <div class="basantbut1">
            <h1><b>Bouddhanath</b></h1>
            <a href="/bouddha" class="button"><b>Explore</b></a>

        </div>
    </div>
</div>
<style type="text/css">
.thumbnail{
position: relative;
z-index: 0;
}

.thumbnail:hover{
background-color: red;
z-index: 50;
}

.thumbnail span{ /*CSS for enlarged image*/
position: absolute;
background-color: green;
padding: 5px;
left: -1000px;
border: 1px dashed gray;
visibility: hidden;
color: black;
text-decoration: none;
}

.thumbnail span img{ /*CSS for enlarged image*/
border-width: 0;
padding: 2px;
}

.thumbnail:hover span{ /*CSS for enlarged image on hover*/
visibility: visible;
top: 0;
left: 60px; /*position where enlarged image should offset horizontally */

}
</style>
@endsection