@extends('layouts.app')
@section('content')
<div class="container" >
    <div class="adjust">
        <Video Autoplay muted loop id="myvideo">
            <Source src="vidoes/video4.mp4" type="video/mp4">
        </video>
    </div>
    <div class="header-overlay"></div>
    <div class="video1">
      <h1>Visit Music City</h1>
      <p>Lorem ipsum dolor sit amet, an his etiam torquatos. Tollit soleat phaedrum te duo, eum cu recteque expetendis neglegentur. Cu mentitum maiestatis persequeris pro, pri ponderum tractatos ei. Id qui nemore latine molestiae, ad mutat oblique delicatissimi pro.</p>
    </div>
</div>
<div class="loginbox">
    <h1>Be Part of our Society</h1>
    <div class="part">
        <p>This is Laravel application from "Sujan Shrestha".</p>
        <div class="part1">
            <a class="btn btn-primary btn-lg" href="/login" role="button">Login</a> <a class="btn btn-success btn-lg" href="/register" role="button">Register</a>
        </div>
    </div>
</div>
<h1>Today's Live</h1>
<div class=wrapper1>
        <Video Autoplay Controls>
            <Source src="vidoes/video5.mp4" type="video/mp4">
        </video>
        <div class="videoinfo4">
          <p>Enjoy the live night with one of the biggest artist "Marsmello" of recent time.<p>
          <li>Venue: Dejavu Club, Durbarmarg </li>
          <li>Start Time: 22:00pm</li>
        </div>
</div>
<div class=wrapper1>
        <div class="liveimg">
            <img class="liveimg1" src="images/image130.jpg">
        </div>
        <div class="videoinfo4">
          <p>Have a joyful night with music of Bipul Chettri and Other local band.<p>
          <li>Venue:Reggae Bar Thamel</li>
          <li>Start Time: 20:00pm</li>
          <a href="https://reggae-bar-thamel-live-music-bar.business.site/website/reggae-bar-thamel-live-music-bar" class="align-self-end">
          <h6 class="openlink"><u>Know More</u></h6>
          </a>
        </div>
</div>
<div class=wrapper1>
        <div class="liveimg">
            <img class="liveimg1" src="images/image131.jpg">
        </div>
        <div class="videoinfo4">
          <p>Enjoy the live night with one of the biggest artist "Marsmello" of recent time.<p>
          <li>Venue:Sisha lounge and Bar, Thamel</li>
          <li>Start Time: 21:00pm</li>
          <a href="http://shishaterrace.com/#!" class="align-self-end">
          <h6 class="openlink"><u>Know More</u></h6>
          </a>
        </div>
</div>
<h1>Upcoming Event</h1>
<div class=wrapper1>
        <Video Autoplay Controls>
            <Source src="vidoes/video6.mp4" type="video/mp4">
        </video>
        <div class="videoinfo4">
          <p>Enjoy the live night with one of the biggest artist "Marsmello" of recent time.<p>
          <li>Venue: Hotel Malla, LekhnathMarg </li>
          <li>Start Time: 19:00pm</li>
          <a href="http://themallahotel.com/" class="align-self-end">
          <h6 class="openlink"><u>Know More</u></h6>
        </div>
</div>
<div class=wrapper1>
        <div class="liveimg">
            <img class="liveimg1" src="images/image132.jpg">
        </div>
        <div class="videoinfo4">
          <p>Make your night memorable with the best lineup of artist like Bipul Chettri and Swopna Suman.<p>
          <li>Venue:Reggae Bar Thamel</li>
          <li>Start Time: 20:00pm</li>
          <a href="https://reggae-bar-thamel-live-music-bar.business.site/website/reggae-bar-thamel-live-music-bar" class="align-self-end">
          <h6 class="openlink"><u>Know More</u></h6>
          </a>
        </div>
</div>
<div class=wrapper1>
        <div class="liveimg">
            <img class="liveimg1" src="images/image133.jpg">
        </div>
        <div class="videoinfo4">
          <p>Enjoy the live night with one of the biggest artist "Marsmello" of recent time.<p>
          <li>Venue:Sisha lounge and Bar, Thamel</li>
          <li>Start Time: 21:00pm</li>
          <a href="http://shishaterrace.com/#!" class="align-self-end">
          <h6 class="openlink"><u>Know More</u></h6>
        </div>
</div>
<h1>Relive Memory</h1>
<a href="images/image1.jpg">
<img src="images/image1.jpg" width="300px" height="250px">
</a>
<a href="images/image1.jpg">
<img src="images/image1.jpg" width="300px" height="250px">
</a>
<a href="images/image1.jpg">
<img src="images/image1.jpg" width="300px" height="250px">
</a>
<a href="images/image1.jpg">
<img src="images/image1.jpg" width="300px" height="250px">
</a>
<a href="images/image1.jpg">
<img src="images/image1.jpg" width="300px" height="250px">
</a>
<a href="images/image1.jpg">
<img src="images/image1.jpg" width="300px" height="250px">
</a>
<a href="images/image1.jpg">
<img src="images/image1.jpg" width="300px" height="250px">
</a>
<a href="images/image1.jpg">
<img src="images/image1.jpg" width="300px" height="250px">
</a>
<a href="images/image1.jpg">
<img src="images/image1.jpg" width="300px" height="250px">
</a>
@endsection
