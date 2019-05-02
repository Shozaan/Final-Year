@extends('layouts.app')
@section('content')

    <div>
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="images/image1.jpg" height="500px" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="images/image2.jpg" height="500px" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="images/image3.jpg" height="500px"  alt="Third slide">
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
    <div class="banner">
        <p><b>Visit Kathmandu City of Glory!<b><p>
    </div>
    <h1>Thamel</h1>
    <div class="destination">
        <div class="destination1">
            <img class="image4" src="images/image4.jpg">
        </div>
        <div class="aboutthamel">
            <p>It is a heavan for tourists visiting the city. 
            It contains numerous hotels, restaurants, and shops that cater specifically to western tourists.
            It is located in the northern region of Kathmandu past the government district on Tridevi Marj. </p>

            <a class="seemore" href="/services"> Things to do</a>
         </div>
    </div>

    <h1><b>Lazimpat<b></h1>
    <div class="destination">
        <div class="aboutlazimpat">
            <p>some popular expat hangouts.
            The liveliest scene is on Lazimpat Road, with sports bars, casual pizzerias, laid-back cafes, and stores selling handicrafts and designer pashminas. </p>

            <a class="seemore" href="/services"> Things to do</a>
         </div>
         <div class="destination2">
            <img class="image4" src="images/image5.jpg">
        </div>
    </div>

    <h1><b>Durbarmarg<b></h1>
    <div class="destination">
        <div class="destination1">
            <img class="image4" src="images/image7.jpg">
        </div>
        <div class="aboutthamel">
            <p> Durbarmarg (Durbarmarg, informally known as King's way) is a street in Nepali city of Kathmandu. 
            It is considered as the heart of Kathmandu city. As it leads to the Royal Palace of Narayanhiti, Durbar Marg is also known as King's way among foreigners. 
            It is a famous tourist area after Thamel.  </p>

            <a class="seemore" href="/services"> Things to do</a>
         </div>
    </div>
    <h1><b>Sundhara<b></h1>
    <div class="destination">
        <div class="aboutlazimpat">
            <p>"Sundhara” means golden water spout
            This place is full of recreation who want to spend their time with fun. 
            This place is crowded with best hotels, lodges and shopping malls for shopping and watching latest movies.  </p>

            <a class="seemore" href="/services"> Things to do</a>
         </div>
         <div class="destination2">
            <img class="image4" src="images/image8.jpg">
        </div>
    </div>
    <h1><b>Chandragiri<b></h1>
    <div class="destination">
        <div class="destination1">
            <img class="image4" src="images/image9.jpg">
        </div>
        <div class="aboutthamel">
            <p>The Bhaleshwar Mahadev temple of Lord Shiva is famous place for tourist internal or international.
            Famous King Prithivi Narayan Shah worshipped in the temple before conquering the valley during his unification campaign.
            Chandragiri Hiking Trail can be enjoyed. Transportation facility of cable car is available. </p>

            <a class="seemore" href="/services"> Things to do</a>
         </div>
    </div>
    <h1><b>Nagarjun<b></h1>
    <div class="destination">
        <div class="aboutlazimpat">
            <p>It is one of the most popular, short and easy one day hiking near Kathmandu.
                 Nagarjun hill, also described in literature as Vindya Mountain, which is the most popular pilgrimage sites for Hindus as well as Buddhist. 
                This mountain got its name as Nagarjuna because the sage Nagarjuna had resided in a cave in this place to meditate.</p>
            <a class="seemore" href="/services"> Things to do</a>
         </div>
         <div class="destination2">
            <img class="image4" src="images/image10.jpg">
        </div>
    </div>
    <h1><b>Sinamangal<b></h1>
    <div class="destination">
        <div class="destination1">
            <img class="image4" src="images/image11.jpg">
        </div>
        <div class="aboutthamel">
            <p>It borders Baneshwor and Gaucharan, where Tribhuvan International Airport is located.  
                Nepalese food franchise Bajeko Sekuwa opened its first restaurant in Sinamangal in 2001.
                Due to its close proimity to Kathmandu Airport, several aviation related businesses have their headquarters here. </p>

            <a class="seemore" href="/services"> Things to do</a>
         </div>
    </div>


@endsection
