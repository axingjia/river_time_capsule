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

      .vid video{
          width:100%;
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
          <div class="vid activeVid">
            <video autoplay controls muted loop>
              <source src="qPvlc91.mp4" type="video/mp4">

            </video>

          </div>
          <div class="vid">
            <video autoplay controls muted loop>
              <source src="XaXchr1.mp4" type="video/mp4">

            </video>

          </div>
          <div class="vid">
            <video autoplay controls muted loop>
              <source src="WxMrtSS.mp4" type="video/mp4">

            </video>

          </div>
          <div class="vid">
            <video autoplay controls muted loop>
              <source src="AspOrV8.mp4" type="video/mp4">

            </video>

          </div>
          <div class="vid">
            <video autoplay controls muted loop>
              <source src="0zFheTx.mp4" type="video/mp4">

            </video>

          </div>
          <div class="vid">
            <video autoplay controls muted loop>
              <source src="aBZ0hVd.mp4" type="video/mp4">

            </video>

          </div>
          <div class="vid">
            <video autoplay controls muted loop>
              <source src="EdvSZyf.mp4" type="video/mp4">

            </video>

          </div>
          <div class="vid">
            <video autoplay controls muted loop>
              <source src="gdsdttb.mp4" type="video/mp4">

            </video>

          </div>
          <div class="vid">
            <video autoplay controls muted loop>
              <source src="NGOs6TB.mp4" type="video/mp4">

            </video>

          </div>
          <div class="vid ending" style="">
            That's all. Come next time for more img :)

          </div>



        </div>

      </div>
      <div class="bigdiv" style="width:20%">

      </div>
    </div>

        <!-- Modal -->
<div id="myModal" class="modal fade" role="dialog" >
  <div class="modal-dialog modal-sm" >
    <div >

      <!-- Modal content-->
      <div class="modal-content">
        <!-- <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div> -->
        <div class="modal-body" style="border: 4px solid #16DB93;">
          <button type="button" class="close1 close" data-dismiss="modal">&times;</button>
          <p>There is an update!</p>
          <p>Check out our new array of funny image!</p>
          <p>Where you energize your heart :)</p>
          <a href="./image2.php" class="btn btn-success">Enter</a>
        </div>
        <!-- <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div> -->
      </div>
    </div>

  </div>
</div>
    <!-- Modal -->
<div id="myModal2" class="modal fade" role="dialog" >
  <div class="modal-dialog modal-sm" >
    <div >

      <!-- Modal content-->
      <div class="modal-content">
        <!-- <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div> -->
        <div class="modal-body" style="border: 4px solid #16DB93;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <p>There is an update!</p>
          <p>Check out our songlist!</p>
          <p>Where you energize your heart :)</p>
          <a href="./songlist.php" class="btn btn-success">Enter</a>
        </div>
        <!-- <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div> -->
      </div>
    </div>

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

  $('.close1').click(function(){
    $("#myModal2").modal();
  });
</script>
