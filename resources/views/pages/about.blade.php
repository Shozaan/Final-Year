@extends('layouts.app')
@section('content')
    <h1>News</h1>
    <style>
        div.gallery {
            margin: 5px;
            border: 1px solid #ccc;
            float: left;
            width: 180px;
        }

        div.gallery:hover {
            border: 1px solid #777;
        }

        div.gallery img {
            width: 100%;
            height: auto;
        }

        div.desc {
            padding: 15px;
            text-align: center;
        }
    </style>
    </head>
    <body>

    <div class="container">
<h3 class="text-center">Latest Stories.<small></small></h3>
<hr>
<div class="row">
    <div class="col-sm-12 col-md-6 col-lg-6  py-0 pl-3 pr-1 featcard">
       <div id="featured" class="carousel slide carousel-fade" data-ride="carousel">
         <div class="carousel-inner">
<div class="carousel-item active">            <div class="card bg-dark text-white">
                <img class="card-img img-fluid" src="images/image119.jpg" style="height:560px;" alt="">
                <div class="card-img-overlay d-flex linkfeat">
                  <a href="http://www.977mag.net/barsha-raut-and-sanjog-koiralas-marriage-and-reception-couple-interview/" class="align-self-end">
                    <span class="badge">Barsha and Sanjog interview</span> 
                    <h4 class="card-title">Barsha Raut And Sanjog Koirala’s Marriage And Reception – Couple Interview</h4>
                    <p class="textfeat" style="display: none;"></p>
                  </a>
                </div>
              </div>
            </div>
        <div class="carousel-item">           <div class="card bg-dark text-white">
                <img class="card-img img-fluid" src="images/image116.jpg" style="height:560px;"  alt="">
                <div class="card-img-overlay d-flex linkfeat">
                  <a href="https://www.theguardian.com/film/2019/may/02/extremely-wicked-shockingly-evil-and-vile-review-zac-efron-in-serial-killer-mode">
                    <span class="badge">Zac Efron?</span> 
                    <h4 class="card-title">Zac Efron in serial killer mode</h4>
                    <p class="textfeat" style="display: none;"></p>
                  </a>
                </div>
              </div>
            </div>
        <div class="carousel-item">           <div class="card bg-dark text-white">
                <img class="card-img img-fluid" src="images/image117.jpg" style="height:560px;" alt="">
                <div class="card-img-overlay d-flex linkfeat">
                  <a href="http://www.skysports.com/watch/video/sports/football/9721322/arsenal-invincibles-documentary" class="align-self-end">
                    <span class="badge">Billboard Music Awards</span> 
                    <h4 class="card-title">Drake breaks record for number of prizes</h4>
                    <p class="textfeat" style="display: none;"></p>
                  </a>
                </div>
              </div>
            </div>
        <div class="carousel-item">           <div class="card bg-dark text-white">
                <img class="card-img img-fluid" src="images/image118.jpg" style="height:560px;" alt="">
                <div class="card-img-overlay d-flex linkfeat">
                  <a href="https://ew.com/tv/2019/04/28/game-thrones-maisie-williams-winterfell-battle/" class="align-self-end">
                    <span class="badge">GAme of thrones:Hero</span> 
                    <h4 class="card-title">Maisie Williams on that Winterfell battle’s surprise ending</h4>
                    <p class="textfeat" style="display: none;"></p>
                  </a>
                </div>
              </div>
            </div>
        <div class="carousel-item">           <div class="card bg-dark text-white">
                <img class="card-img img-fluid" src="images/image115.jpg" style="height:560px;" alt="">
                <div class="card-img-overlay d-flex linkfeat">
                  <a href="https://thehimalayantimes.com/entertainment/sports-illustrated-swimsuit-issue-to-feature-model-in-burkini/" class="align-self-end">
                    <span class="badge">Swimsuit Sport Issue</span> 
                    <h4 class="card-title">Sports Illustrated swimsuit issue to feature model in burkini</h4>
                    <p class="textfeat" style="display: none;"></p>
                  </a>
                </div>
              </div>
            </div>
        <div class="carousel-item">           <div class="card bg-dark text-white">
                <img class="card-img img-fluid" src="images/image120.jpg" style="height:560px" alt="">
                <div class="card-img-overlay d-flex linkfeat">
                  <a href="https://www.glamournepal.net/apaysha-khadka-to-represent-nepal-at-jewel-of-the-world-2019" class="align-self-end">
                    <span class="badge">Fashion </span> 
                    <h4 class="card-title">Apaysha to represent Nepal in world</h4>
                    <p class="textfeat" style="display: none;"></p>
                  </a>
                </div>
              </div>
            </div>
                </div>
      </div>
    </div>
    <div class="col-6 py-0 px-1 d-none d-lg-block">
        <div class="row">
            <div class="col-6 pb-2 mg-1 ">
                <div class="card bg-dark text-white">
                <img class="card-img img-fluid" src="images/image121.jpg" style="height:270px;" alt="">
                <div class="card-img-overlay d-flex">
                  <a href="http://www.977mag.net/anmol-kc-signed-milan-chams-directorial-film-bachelor-bunty/" class="align-self-end">
                    <span class="badge">Anmol Kc</span> 
                    <h6 class="card-title">Anmol KC Signed Milan Chams’ Directorial Film Bachelor Bunty</h6>
                  </a>
                </div>
                </div>
            </div>
              <div class="col-6 pb-2 mg-2 ">
                <div class="card bg-dark text-white">
                <img class="card-img img-fluid" src="images/image122.jpg" style="height:270px;" alt="">
                <div class="card-img-overlay d-flex">
                  <a href="http://www.977mag.net/swastima-khadka-speaks-about-her-two-biggie-movies-clashing-together/" class="align-self-end">
                    <span class="badge">Swastima Khadka</span> 
                    <h6 class="card-title">Swastima Khadka Speaks About Her Two Biggie Movies Clashing Together</h6>
                  </a>
                </div>
                </div>
            </div>
                        <div class="col-6 pb-2 mg-3 ">
                <div class="card bg-dark text-white">
                <img class="card-img img-fluid" src="images/image123.jpg" style="height:270px;" alt="">
                <div class="card-img-overlay d-flex">
                  <a href="https://www.bbc.com/news/newsbeat-48133139" class="align-self-end">
                    <span class="badge">Happy Married Life</span> 
                    <h6 class="card-title">Sophie Turner and Joe Jonas get married in Las Vegas</h6>
                  </a>
                </div>
                </div>
            </div>
                        <div class="col-6 pb-2 mg-4 ">
                <div class="card bg-dark text-white">
                <img class="card-img img-fluid" src="images/image124.jpg" style="height:270px;" alt="">
                <div class="card-img-overlay d-flex">
                  <a href="https://www.hollywoodreporter.com/news/avengers-endgame-crosses-500-million-china-1206825" class="align-self-end">
                    <span class="badge">Avengers:</span> 
                    <h6 class="card-title">Endgame' Crosses $500M in China</h6>
                  </a>
                </div>
                </div>
            </div>
                    </div>
    </div>
</div>

</div>

<script type="text/javascript">
    $(document).ready(function(){
      $(".linkfeat").hover(
        function () {
            $(".textfeat").show(500);
        },
        function () {
            $(".textfeat").hide(500);
        }
    );
});
</script>

<div>
   <iframe width="1100px" height="400px" src="https://www.youtube.com/embed/IhFqxOfLA7M?autoplay=1">
</iframe>
</div>
@endsection
