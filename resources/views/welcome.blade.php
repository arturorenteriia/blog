<!DOCTYPE html>
<html class=""lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script type="text/javascript">
  $(window).scroll(function() {
      if ($(document).scrollTop() > 150) {
                alert('hi');
      $('.logo').height(200);

      }
      else {
        $('.logo').height(100);
      });
</script>
  <style>


.logo2 {

  height: 10vh;
}

section {
  height:calc(90% - 50px);
}

.affix {
  padding:0px;
  -webkit-transition:padding 0.2s linear;
  -moz-transition:padding 0.2s linear;  
  -o-transition:padding 0.2s linear;         
  transition:padding 0.2s linear;  

}

.affix-top {
  padding-top:15px;
  padding-bottom:15px;
  -webkit-transition:padding 0.5s linear;
  -moz-transition:padding 0.5s linear;  
  -o-transition:padding 0.5s linear;         
  transition:padding 0.5s linear;  
}

  .full {
  background: url("pv.jpg") no-repeat center;
  width: 100%;
  height: 100vh;
}
.full2 {

width: 100%;
height: 100vh;
}
.full3 {

background-color: green;
}
.full4 {


background-color: black;
}

  </style>
</head>

<body>

<header>
  <div class="container-fluid full  ">



    <div id="nav">
  <div class="navbar navbar-inverse navbar-fixed-top" data-spy="affix" data-offset-top="100">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
          
          </button>
          <a class="" href="#"><img class="img-responsive logo" src="pvguide.png" alt=""></a>
        </div>


        <div id="navbar" class="collapse navbar-collapse">

          <ul class="nav navbar-nav navbar-right ">
            <li class="active"><a href="#">Home</a></li>
             <li><a href="#about">Golf</a>
            </li>

            <li><a href="#about">Top Things To Do</a>
            </li>
            
            <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Tours <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Rythms Of the Night</a></li>
            <li><a href="#">Las Caletas</a></li>
            <li><a href="#">Horses</a></li>
           
          </ul>
        </li>

            <li><a href="#contact">Hotels and <br> Flights</a>
            </li>
            <li><a href="#contact">Medical <br>Tourism</a>
            </li>
            <li><a href="#contact">Real Estate</a>
            </li>
            <li><a href="#contact">Maps</a>
            </li>
          </ul>
           <form action="" class="navbar-form navbar-right col-xs-6" role="search">
          <div class="form-group"> 

          <input type="text" name="" class="form-control" placeholder="Search">
          </div>
          <button type="submit" class="btn btn-default">Go</button>
          </form>
        </div>
        <!--/.nav-collapse -->
      </div>
      <!--/.contatiner -->
</div>
</div>
    </div>

</header>

<div class="container ">
<div class="row">
  <div class=" col-sx-6 col-md-9">
    <h1><center>Puerto Vallarta</center> </h1>
     <h3><center>Welcome to Paradise</center> </h3>

    <p class="text-justify">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.</p>
    <p class="text-justify">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.</p>
    <p class="text-justify">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.</p>
</div>

<div class=" col-sx-6 col-md-3 ">
<h1><center>Sidebar</center> </h1>
  <p class="text-justify">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.</p>
  <p class="text-justify">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.</p>

</div>

</div>
</div>
<div class="container-fluid full4">
<div class="row">
  <br>
  <br>
  <br>
  <br>
</div>

</div>




</body>
 
</html>
