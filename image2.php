<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>River Time Capsule</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <style media="screen">
      .vid{
        display: none;
      }
      .activeVid{

        display: block !important;
      }
      .vid video{
          width:100%;
      }


      .ads{
        width: 100%;
        padding: 200px 0;
        vertical-align: middle;
        background-color: #F4FFFD;
        display: inline-block;
        text-align: center;

      }

      .bigdiv{
        float:left;
      }
      .button {

        border: none;
        color: white;
        padding: 8px 24px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        background-color: #008CBA;
      }
      .ending{
        color: white;
        font-size: 19px;
      }

    </style>
  </head>
  <body style="background-color:#3f4247" ng-app="myApp" ng-controller="customersCtrl">
    <div class="clearfix" style="text-align:center">
      <div class="bigdiv" style="width:20%;display:inline-block;float:left">

        <div id="myCarousel" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <!-- <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
          </ol> -->

          <!-- Wrapper for slides -->
          <div class="carousel-inner">
            <div class="item active">
              <div class="ads">
                Ads, Lots of Ads
              </div>
            </div>

            <div class="item">
              <div class="ads">
                Yeah, did I Mention There is Ads?
              </div>
            </div>

            <div class="item">
              <div class="ads">
                Jkjk, no ads lol
              </div>
            </div>
          </div>

          <!-- Left and right controls -->
          <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
      <script type="text/javascript">
        setInterval(function(){
          $("#myCarousel").carousel("next");
        },5000);


      </script>


      <div class="bigdiv" style="display:inline-block; width:60%">
        <div class="navi">
          <button class="button" type="button" name="button" id="prev_button"><</button>
          <button class="button" type="button" name="button" id="next_button">Next</button>

        </div>
        <div class="">

          <?
            $i=0;
            foreach(glob('image2'.'/*.*') as $file) {
                $file_parts=pathinfo($file);
                if($file_parts['extension']!='mp4'){
                  ?>
                    <div class="vid <? if($i==0) echo 'activeVid'?>">

                      <img src="<? echo $file;?>" >



                  </div>

                  <?
                  $i++;
                }else{ ?>
                  <div class="vid <? if($i==0) echo 'activeVid'?>">
                    <video autoplay controls muted loop>
                      <source src="<? echo $file;?>" type="video/mp4">

                    </video>

                  </div>
                  <?
                  $i++;
                }
            }


          ?>

          <div class="vid ending" style="">
            That's all. Come next time for more img :)

          </div>



        </div>

      </div>
      <div class="bigdiv" style="width:20%">

      </div>
    </div>




  </body>
</html>
<script type="text/javascript">
  $('#next_button').click(function(){
    var index=$('div.vid').index($('div.vid.activeVid'));
    $('div.activeVid').removeClass('activeVid');
    $('div.vid').eq(index+1).addClass('activeVid');
    console.log(index);
  })
  $('#prev_button').click(function(){
    var index=$('div.vid').index($('div.vid.activeVid'));
    $('div.activeVid').removeClass('activeVid');
    $('div.vid').eq(index-1).addClass('activeVid');
    console.log(index);
  })
  $("#myModal").modal();
</script>
