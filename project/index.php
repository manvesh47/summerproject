<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="jquery-1.8.2.min.js"></script>
    
    <script>
    
      $(document).ready(function(){
          
         
          $("#userid").keyup(function(){
              
              var querystring = $("#formid").serialize();
             
              
              
              var url ="signupnamecheck.php?"+querystring;
              
              $.get(url,function(response){
                  
                 $("#erruid3").html(response);
                  
              });
              
          });
              
              
              
         
          
              
       $("#signup").click(function(){
                
			
           var querystring = $("#formid").serialize();
		
			var url="signupbackend.php?"+querystring;
		
			$.get(url,function(response){
				
				$("#errUid").html(response);
			});
			
		});
          
          $("#frgpwd2").click(function(){
              
              var querystring = $("#formid").serialize();
              
              var url = "frgpwd.php?"+querystring;
              
              $.get(url,function(response)
            {
                  
                  $("#err").html(response);
                  
            });
              
              
              
              
              
          });
          
           $("#search2").click(function(){
                
			var querystring = $("#formid").serialize();
          
			
			
			var url="logincheck.php?"+querystring;
		
			$.get(url,function(response){
				
				$("#erruid").html(response);
			});
			
		});
          
          
          
         
          
          
          
          
      });
      
      
      
      
      
      </script>
      <style>
          body {
              height:2000px;
              
          }
          
          #ser {
              align-content: center;
              text-align: center;
              margin-left: auto;
              margin-right: auto;
             margin-top: 20px;
          }
          .card:hover {
              cursor: pointer;
            box-shadow: 10%;
          }
         .card {
            
              margin-right: 20px;
              margin-left: 20px;
             flex-basis: auto;
              flex-grow: 1;
          }
          
          #carousel {
              margin-top: 30px;
          }
          signin {
              float: right;
          }
          h5 {
              float: none;
                 margin-left: auto;
              margin-right: auto;
              margin-top: 50px;
          }
          #frgpwd {
              color: orange;
          }
          #frgpwd:hover {
              color: cornflowerblue;
              cursor: pointer;
          }
      </style>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" crossorigin="anonymous">

    <title>Sign up</title>
  </head>
  <body>

<!-- Button trigger modal -->
<form id="formid">

<div class="row">
    <div class="container">
        <div class="col-md-10 offset-md-2 ">
           
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       
       <img src="Uploads/4ba3cd57338dde06e1ba752c53726421--animal-shelter-animal-rescue.jpg" style="float:none;margin-left:40%;" height="100px" width="100px" alt="">
  <div class="form-group">
    <label for="exampleInputEmail1">UserID</label>
    <input required type="text" class="form-control" id="userid" name="userid" aria-describedby="emailHelp">
    <span id="erruid3"></span>
    
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input required type="password" class="form-control" id="Pwd" name="Pwd">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Mobile</label>
    <input required type="number" class="form-control" id="mobile" name="mobile">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Select field</label>
    <select required class="form-control" name="combo" id="combo">
        <option value="0">Select</option>
        <option value="Citizen">Citizen</option>
        <option value="Pharmacy">Pharmacy</option>
        <option value="Doctor">Doctor</option>
        <option value="Shetlter">Shelter</option>
    </select>
  </div>
  <div class="form-group form-check">
   
  </div>
  <span id="errUid"></span>
  

      </div>
      <div class="modal-footer">
       <input type="button" class="btn btn-primary" value="Sign up" name="search" id="signup">

         
      </div>
    </div>
  </div>
</div>
  
     <div class="modal fade" id="exampleModale" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       
       <img src="Uploads/4ba3cd57338dde06e1ba752c53726421--animal-shelter-animal-rescue.jpg" style="float:none;margin-left:40%;" height="100px" >
  <div class="form-group">
    <label for="exampleInputEmail1">UserID</label>
    <input required type="text" class="form-control" id="userid2" name="userid2" aria-describedby="emailHelp">
    
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input required type="password" class="form-control" id="Pwd2" name="Pwd2">
  </div>
  <span id="erruid"></span>
  <input type="button" class="btn btn-primary" style="float:right;" value="Login" name="search2" id="search2">
    <span id="frgpwd" data-toggle="modal" data-target="#exampleModal3">forgot password</span>
      </div>
    
    </div>
  </div>
</div>
       <div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       Enter username:
        <input type="text" name="username" id="username" >
        <span id="err"></span>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" id="frgpwd2">Done</button>
       
      </div>
    </div>
  </div>
</div>
        </div>
    </div>
</div>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
 <img src="Uploads/4ba3cd57338dde06e1ba752c53726421--animal-shelter-animal-rescue.jpg" height="50px" width="50px" alt="">
  <a class="navbar-brand" href="index.php" style="font-size:25px; color:firebrick;">Shelter care</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <button  type="button" class="btn btn-primary" style="margin-right:10px; margin-bottom:10px;" data-toggle="modal" data-target="#exampleModale" >Login <span class="sr-only">(current)</span></button>
      </li>
      <li class="nav-item">
        <button type="button"  class="btn btn-primary " data-toggle="modal" data-target="#exampleModal">Sign up</button>
      </li>
     
     
    </ul>
    
  </div>
</nav>
</form>
  
 <div class="container">
    <div id="carousel" class="row">
       <div class="col-md-12">
        
            <div id="carouselExampleControls" class="carousel slide mt-4" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="Uploads/car1logo.jpg" height="300" width="200" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="Uploads/car5logo.jpg" height="300" width="300" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="Uploads/car4logo.jpg" height="300" width="300"class="d-block w-100" alt="...">
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
    </div>
</div>
    
  <h2 id="ser"><span id="ser" class="badge badge-primary" >Our Services</span></h2>
  <div class="container">
      <div class="row">
       
              <div class="card mt-4" style="width: 18rem;">
  <img src="Uploads/dlogo.jpg" height="200" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Doctors</h5>
    <p class="card-text">We at shelter care know how hard it is to find perfect doctor for your pets so we just made it a lot easier for you.Search all types of vetenary doctors with certifies details about them in your areas.</p>
    
  </div>
</div>
 <div class="card mt-4" style="width: 18rem;">
  <img src="Uploads/plogo.jpg" height="200" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Pharmacies</h5>
    <p class="card-text">Pets care demands dedication and also vaccines and medicines to keep them healthy and safe.So no need to go out there and sweat just log in and find your favourite pharmacies right here.</p>
  
  </div>
</div><div class="card mt-4" style="width: 18rem;">
  <img src="Uploads/slogo.png" height="200" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Shelters</h5>
    <p class="card-text">Keeping a pet is one of the great joys of this world but sometimes you need a hand,so fear not search our helpers who would be totally ready to hop in and save your day.</p>
   
  </div>
</div><div class="card mt-4" style="width: 18rem;">
  <img src="Uploads/buylogo.jpg" height="200" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Buy pets</h5>
    <p class="card-text">Not only do we help you get a cute little fluffy friend for few days but also can get you one on permanent basis,so what are you waiting for log in and get your favourite pet today.</p>
   
  </div>
</div><div class="card mt-4" style="width: 18rem;">
  <img src="Uploads/selllogo.jpg" height="200" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Sell pets</h5>
    <p class="card-text">Sometimes its hard to take care of your dear old fellow and you know its better to give it to someone who would ,so login and give your fluffy little pet a new home.</p>
   
  </div>
</div>
          </div>
  
  </div>
  <center>
  <h5 style="margin-top:40px;">Meet the Developers</h5>
  </center>
  <div class="container">
      <div class="row mt-4">
          
          <div class="card" style="width: 18rem;">
  
  <div class="card-body">
    <h5 class="card-title">Manvesh singh gill</h5>
    <p class="card-text">Hey hope you like this site which has been created using html,css,js,jquery,angularjs.</p>
    
  </div>
</div>
      </div>
  </div>
  <center>
      <h5 style="margin-top:20px;">Contact us at</h5>
  </center>
  <div class="container">
      <div class="row">
        <div class="col-md-10 offset-md-1">
         <center>
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3447.104867270048!2d74.9571407010755!3d30.234085881724535!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391732ce585e8453%3A0x7cb4e61b05a49f68!2sGreen%20City%20Colony%2C%20Baba%20Farid%20Nagar%2C%20Bathinda%2C%20Punjab%20151001!5e0!3m2!1sen!2sin!4v1602385767816!5m2!1sen!2sin" width="inherit" height="inherit" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
          </center>
      </div>
      </div>
  </div>
   
              
          
   
   
   

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>