@extends('layouts.app')
@section('content')
<div class="basantapur1">
    <img class="basantapur2" src="images/image30.jpg">
    <div class="basanttag">
        <h1><b>Boudhanath Stupa</b></h1>
    </div>
</div>
<div class="basantinfo">
    <h1>From its whitewashed dome to its gilded tower painted with the all-seeing eyes of the Buddha, the monument is perfectly proportioned.</h2>
</div>
<div class="basantexplain">
    <p>The highly symbolic construction serves in essence as a three-dimensional reminder of the Buddha’s path towards enlightenment.
     The plinth represents earth, the kumbha (dome) is water, the harmika (square tower) is fire, the spire is air and the umbrella at the top is the void or ether beyond space.
     The 36-meter-high stupa of Boudhanath is one of the largest stupas in South Asia. With countless monasteries surrounding it, Boudhanath is the center of Tibetan Buddhism in Nepal.
     Built in the shape of a mandala designed to replicate the Gyangtse of Tibet, the stupa was renovated by Licchhavi rulers in the 8th century.</p>
</div>


<button class="basantbtn" onclick="myFunction()">Learn more</button>
<div id="myDIV" style="display:none">
    <h1>Things to do</h1>
    <p>owards the evening, the stupa lights up and you’ll find Tibetan yak wax candles come out in memory of loved ones past.  
     You’ll find souvenir shops and restaurants in the perimeter area for exploration. Meanwhile, explore the side streets to find more restaurants, monks dwellings and parks.</p>
    <p>An easy and beautiful monastery to visit at Bodhanath Stupa is the a two story monastery, Tamang Gompa monastery.<p>
    <p> Off to the side, is a room with two giant prayer wheels where you can follow the flow and push the wheel so it keeps turning. <p>
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
            <a class="thumbnail" href="/sawaymbhu"><img src="images/image27.jpg" width="360px" height="300px" border="0" /></a>
        </div>
        <div class="basantbut1">
            <h1><b>Sawaymbhu</b></h1>
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