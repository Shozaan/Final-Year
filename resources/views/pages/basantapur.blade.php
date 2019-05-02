@extends('layouts.app')
@section('content')
<div class="basantapur1">
    <img class="basantapur2" src="images/image13.jpg">
    <div class="basanttag">
        <h1><b>Basantapur Durbar Square</b></h1>
    </div>
</div>
<div class="basantinfo">
    <h1>Basantapur is a city of alleys. It is almost like a maze, once you visit there you will struggle to get out of. 
    While you’re there you can spend the day roaming around, discovering new alleyways.</h2>
</div>
<div class="basantexplain">
    <p>Basantapur is the heart of Kathmandu city. It carries a lot of cultural and historical significance for the people of Nepal. 
     Known for its rich culture and arts, Basantapur is the hub for tourists and visitors.
     Enlisted as a UNESCO cultural heritage site, this durbar square has attracted a lot of tourists from across the globe. 
     There are various temples and monuments inside the Durbar Square such as Taleju Temple, (which is only open during Nawami of Vijaya Dashain) the bell, Hanuman Dhoka, Kumari Chowk.</p>
</div>


<button class="basantbtn" onclick="myFunction()">Learn more</button>
<div id="myDIV" style="display:none">
    <h1>Shopping</h1>
    <p>Purchase Nepali souvenirs; Nepal made gift items, arts and artefacts or ornaments, jewelleries and statues that may cost you as low as RS 100 or range up to thousands, from the shops and street side vendors.</p>
    <h1>Others</h1>
    <p> Visit the nearby Freak Street, a landmark to the hippies of the 70s, to hang out or walk inside the Basantapur Durbar Square and the museum to get a feel of the old and culturally rich Nepali history.<p>
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
            <a class="thumbnail" href="/pashupathi"><img src="images/image19.jpg" width="360px" height="300px" border="0" /></a>
        </div>
        <div class="basantbut1">
            <h1><b>Pashupatinath</b></h1>
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