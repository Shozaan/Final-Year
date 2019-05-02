@extends('layouts.app')
@section('content')
<div class="basantapur1">
    <img class="basantapur2" src="images/image21.jpeg">
    <div class="basanttag">
        <h1><b>Pashupatinath Temple</b></h1>
    </div>
</div>
<div class="basantinfo">
    <h1>It is believed that those who die in Pashupatinath 
    Temple are reborn as a human, regardless of any misconduct that could worsen their karma. </h2>
</div>
<div class="basantexplain">
    <p>One of the most sacred Hindu temples of Nepal – Pashupatinath Temple is located on both banks of Bagmati River on the eastern outskirts of Kathmandu.
Pashupatinath is the most important temple dedicated to god Shiva. Pashupatinah is a place where century-old Hindu rituals are practiced in their astonishing initial form, giving a chance to the visitors to feel 
the unique spirit of Hindu traditions of life, death and reincarnation.  The main pagoda style temple has a gilded roof, four sides covered in silver, and wood carvings of the finest quality. 
Temples dedicated to several other Hindu and Buddhist deities surround the temple of Pashupatinath.
Every year this temple attracts hundreds of elderly followers of Hinduism.</p>
</div>
<button class="basantbtn" onclick="myFunction()">Learn more</button>
<div id="myDIV" style="display:none">
    <h1>Meditation</h1>
    <p>Discover inner peace and positive energy through the ancient practice of meditation</p>
    <h1>Ayurveda</h1>
    <p> If you are looking for Ayurvedic diagnosis, mental or physical healing, it offers a bevy of practices that specialize in natural treatments. Come to learn, be treated or discover this centuries-old natural treatment for wholistic health. <p>
    <h1>Astrology</h1>
    <p>Consult an astrolger to know more about your stars and your place in the firmament. And if there is a problem somewhere, the solution is not far either. Nepalese have been doing it for centuries and many will vouch it works.<p>
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
            <a class="thumbnail" href="/sawaymbhu"><img src="images/image27.jpg" width="360px" height="300px" border="0" /></a>
        </div>
        <div class="basantbut1">
            <h1><b>Swayambhu</b></h1>
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