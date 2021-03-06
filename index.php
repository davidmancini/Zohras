<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Zohra's Authentic Food | Albuquerque, NM</title>
    <?php require_once 'lib/head-utils.php'; ?>
  </head>
  <body>
    <div class="container">

      <div class="jumbotron text-center">
        <h1>Zohra's Authentic Foods</h1>
        <p>Serving Greek, Italian, Chinese, Afghan, American Favorites, Native American, Indian, and Vegetarian</p>
        <p><a class="btn btn-primary btn-lg" href="menu.php" role="button"><i class="fa fa-cutlery"></i>&nbsp;Our Menu</a></p>
      </div>

      <div class="row row-flex">
        <div class="col-sm-6 col-xs-12">
          <div class="panel panel-default">
            <div class="panel-heading colorHeading">
              <p class="panel-title"><i class="fa fa-clock-o"></i>&nbsp;Hours</p>
            </div>
            <div class="panel-body">
              <table class="table text-center">
                <tr><td>Mon</td><td>7:30 am - 4:00 pm</td></tr>
                <tr><td>Tue</td><td>7:30 am - 4:00 pm</td></tr>
                <tr><td>Wed</td><td>7:30 am - 4:00 pm</td></tr>
                <tr><td>Thu</td><td>7:30 am - 4:00 pm</td></tr>
                <tr><td>Fri</td><td>7:30 am - 4:00 pm</td></tr>
                <tr><td>Sat</td><td>Closed</td></tr>
                <tr><td>Sun</td><td>Closed</td></tr>
              </table>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-xs-12">
          <div class="panel panel-default">
            <div class="panel-heading colorHeading">
              <p class="panel-title"><i class="fa fa-camera"></i>&nbsp;Photos</p>
            </div>
            <div class="panel-body text-center">
              <a href="images/burger.jpg" class="swipebox" title="Green Chili Burger">
                <img src="images/thumbnails/burger.jpg" alt="image" class="swipeboxImage"></a>
              <a href="images/chicken.jpg" class="swipebox" title="Chicken Skewer">
                <img src="images/thumbnails/chicken.jpg" alt="image" class="swipeboxImage"></a>
              <a href="images/greek-salad.jpg" class="swipebox" title="Greek Salad">
                <img src="images/thumbnails/greek-salad.jpg" alt="image" class="swipeboxImage"></a>
              <a href="images/gyros.jpg" class="swipebox" title="Gyros">
                <img src="images/thumbnails/gyros.jpg" alt="image" class="swipeboxImage"></a>
              <a href="images/lamb.jpg" class="swipebox" title="Lamb">
                <img src="images/thumbnails/lamb.jpg" alt="image" class="swipeboxImage"></a>
              <a href="images/shrimp.jpg" class="swipebox" title="Shrimp Plate">
                <img src="images/thumbnails/shrimp.jpg" alt="image" class="swipeboxImage"></a>
            </div>
          </div>
        </div>
      </div><!--/row-->

      <div class="row row-flex">
        <div class="col-sm-6">
            <div class="panel panel-default">
              <div class="panel-heading colorHeading">
                <p class="panel-title"><i class="fa fa-map-marker"></i>&nbsp;Location</p>
              </div>
              <div class="panel-body text-center">
                <p><a href="tel:5052472323"><i class="fa fa-phone"></i>&nbsp;Call Us: (505) 247-2323</a></p>
                <p>20 First Plaza NW, Suite 2246<br>Albuquerque, NM 87102</p>
                <iframe class="center-block" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6529.653793977849!2d-106.65297739483779!3d35.086057649987914!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8722655878967191%3A0xd56f937712199b86!2sZohra+Restaurant!5e0!3m2!1sen!2sus!4v1457747863065" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
              </div>
            </div>
          </div>

            <div class="col-sm-6">
              <div class="panel panel-default">
                <div class="panel-heading colorHeading">
                  <p class="panel-title"><i class="fa fa-yelp"></i>&nbsp;Reviews</p>
                </div>
                <div class="panel-body text-center">
                  <div id='yelpwidget'></div>
                </div>
              </div>
            </div>
      </div><!--/row-->

      <div class="row row-flex">
        <div class="col-sm-12">
          <div class="panel panel-default">
            <div class="panel-heading colorHeading">
              <p class="panel-title"><i class="fa fa-heart"></i>&nbsp;About Zohra</p>
            </div>
            <div class="panel-body text-center">
              <p class="text-center">At Zohra, we make simple, great food for everyone's everyday life. We pride ourselves
                on the exceptional quality we put into each and every authentic food, salad, and
                sandwich.</p>
              <p class="text-center">We strive to give you an outstanding dining experience because we believe in
                an extrodinary service.</p>
              <p class="text-center"><strong>Our highest compliment is when our customers refer their
                  family and friends to us.</strong></p>
            </div>
          </div>
        </div>
      </div><!--/row-->


    </div><!--/container-->
    <?php require_once 'lib/footer.php'; ?>
  </body>
</html>
