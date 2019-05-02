@extends('layouts.app')
@section('content')
<h1>Places</h1>
    <body>
  <div>
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="images/image17.jpg" height="500px" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="images/image21.jpeg" height="500px" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="images/image23.jpg" height="500px"  alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
<div class="dropdown">
  <div class= "visit">
    <p>Select place to visit:</p>
  </div>
  <div class="btn-group">
        <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Thamel
        </button>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="/thamel">Thamel</a>
            <a class="dropdown-item" href="/sundhara">Sundhara</a>
            <a class="dropdown-item" href="lazimpat">Lazimpat</a>
            <a class="dropdown-item" href="durbarmarg">Durbarmarg</a>
            <a class="dropdown-item" href="chandragiri">Chandragiri</a>
            <div class="dropdown-divider"></div>
        </div>
  </div>
</div>
<h1>Historical Places</h1>
<div class="allplaces">
<div class="Basantapur">
    <div calss="basntimg">
        <img class="explore1" src="images/image26.jpg">
    </div>
    <div class="basantbut">
        <h1><b>Basantapur</b></h1>
        <a href="/basantapur" class="button"><b>Explore</b></a>
    </div>
</div>
    <div class="pashupati">
        <div calss="basntimg">
            <img class="explore1" src="images/image19.jpg">
        </div>
        <div class="basantbut">
            <h1><b>Pashupatinath</b></h1>
            <a href="/pashupathi" class="button"><b>Explore</b></a>
        </div>
    </div>
    <div class="Swayambhu">
        <div calss="basntimg">
            <img class="explore1" src="images/image27.jpg">
        </div>
        <div class="basantbut">
            <h1><b>Swayambhu</b></h1>
            <a href="/sawaymbhu" class="button"><b>Explore</b></a>
        </div>
    </div>
    <div class="Bouddha">
        <div calss="basntimg">
            <img class="explore1" src="images/image1.jpg">
        </div>
        <div class="basantbut">
            <h1><b>Bouddhanath</b></h1>
            <a href="/bouddha" class="button"><b>Explore</b></a>
        </div>
    </div>
</div>
</body>
@endsection
