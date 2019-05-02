@extends('layouts.app')
@section('content')
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
<h1>Latest Stories</h1>
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

<h1>Trending</h1>
<div>
  <img class="avenger" src="images/image125.jpg">
</div>
<div class="trendlink">
  <p><a class="trending" href="https://thehimalayantimes.com/entertainment/avengers-endgame-obliterates-records-with-1-2b-opening/"><b>1. </b>‘Avengers: Endgame’ obliterates records with $1.2B opening</a></p>
  <p><a class="trending" href="https://www.eonline.com/ap/news/1036783/maisie-williams-reveals-what-you-didn-t-see-when-arya-stark-saved-the-day-on-game-of-thrones"><b>2. </b>Arya stark saved the day on Game of thrones</a></p>
  <p><a class="trending" href="https://myrepublica.nagariknetwork.com/mycity/news/drake-breaks-taylor-swift-s-record-at-billboard-music-awards"><b>3. </b>Drake breaks Taylor Swift’s record at Billboard Music Awards</a></p>
  <p><a class="trending" href="https://myrepublica.nagariknetwork.com/mycity/news/first-plus-size-male-pageant-in-nepal"><b>4. </b>First plus size Male  pageant in Nepal</a></p>
  <p><a class="trending" href="https://myrepublica.nagariknetwork.com/mycity/news/fans-disappointed-with-dal-bhat-tarkari-s-new-item-song-antibiotic-khaula"><b>5. </b>Fans disappointed with Dal Bhat Tarkari's new item song ‘Antibiotic Khaula’</a></p>
</div>
<div class="container" >
    <h1>Watch</h1>
    <div class=wrapper1>
        <Video Autoplay Controls>
            <Source src="vidoes/video1.mp4" type="video/mp4">
        </video>
        <div class="videoinfo">
          <p>Movie "Jatrai Jatrai" filled with like of heavy cast like Dayahang Rai, Bipin Karki, Barsha Raut and Rabindra and Rabindra Jha dropped their first trailer.<p>
        </div>
    </div>
</div>
<div class="nextvideo">
<h1>Other Videos</h1>
  <div class="wrapper2">
        <Video Autoplay Controls>
            <Source src="vidoes/video2.mp4" type="video/mp4">
        </video>
        <div class="videoinfo1">
          <p>Bradley Copper and Lady Gaga performance in Oscar left all audience speechless.<p>
        </div>
    </div>
    <div class="wrapper3">
        <Video Autoplay Controls>
            <Source src="vidoes/video3.mp4" type="video/mp4">
        </video>
        <div class="videoinfo1">
          <p>This new rap song from Yodha capturing the attention of all youth.<p>
        </div>
    </div>
</div>
<h1>Others<h1>
<div class="news1">
  <img class="newsimg" src="images/image126.jpg">
  <div class="newsinfo">
    <p><a class="newsinfo1" href="https://www.glamournepal.net/nepathya-to-perform-in-panchthar-phidim"><b>1. </b>Nepathya to perform in Panchthar, Phidim</a></p>
    <p>Nepal’s premier folk-rock band, Nepathya, is all set to perform concert in Phidim, Panchthar...<p>
  </div>
</div>
<div class="news1">
  <img class="newsimg" src="images/image127.jpg">
  <div class="newsinfo">
    <p><a class="newsinfo1" href="https://www.glamournepal.net/underside-to-perform-at-uks-premier-rock-festival"><b>2. </b>Underside to Perform at UK’s Premier Rock Festival</a></p>
    <p>Kathmandu-based metal-core band Underside will be performing at UK’s premier rock festival...<p>
  </div>
</div>
<div class="news1">
  <img class="newsimg" src="images/image128.jpg">
  <div class="newsinfo">
    <p><a class="newsinfo1" href="https://www.glamournepal.net/journalist-anup-ojha-and-the-next-come-together-with-a-friendship-anthem"><b>3. </b>Journalist Anup Ojha and The NEXT Come Together with a Friendship Anthem</a></p>
    <p>The music video of Wari ko Dada Ma Ma…, which celebrates the childhood friendship between two...<p>
  </div>
</div>
<!-- <p>
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d56516.31625953402!2d85.29111306836396!3d27.708955944365407!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb198a307baabf%3A0xb5137c1bf18db1ea!2sKathmandu+44600!5e0!3m2!1sen!2snp!4v1556811360172!5m2!1sen!2snp" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
	</p> -->
@endsection
