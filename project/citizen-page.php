<!doctype html>

<html lang="en">

  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"  crossorigin="anonymous">
 <script src="jquery-1.8.2.min.js">
      </script>
      <script>
      
      
      $(document).ready(function(){
          
          $("#insert").click(function(){
             
              var querystring = $("#formid").serialize();
              
              alert(querystring);
              
              var url = "sellpets.php?"+querystring;
              
              $.get(url,function(response){
                  
                  $("#errUid").html(response);
              })
              
              
              
          });
         
          
          
          
          
          
          
      });
      
      
      
      </script>
      <style>
          #cards {
              float: left;
          }
          .card {
              margin-right: 20px;
              margin-left: 20px;
             flex-basis: auto;
              flex-grow: 1;
          }
          a {
              float: right;
          }
      </style>
    <title>Citizens page</title>
  </head>
  <body>
    <form  id="formid">
    
        <div class="row">
            <div class="col-md-12">
                <nav class="navbar navbar-light bg-light">
 
    <div class="input-group">
      <div class="input-group-prepend">
        <span class="input-group-text" id="basic-addon1">Welcome @</span>
      </div>
      <input type="text" class="form-control col-md-1" id="userid"  placeholder="User id" aria-label="Example text with button addon" name="userid" aria-describedby="button-addon1"  >
      
      <a href="logout.php" class="btn btn-primary offset-md-9 ">logout</a>
    </div>
  
  
  
   
    
</nav>
            </div>
        </div>
         <div class="container">
             <div class="row">
                 <div class="col-md-10 offset-md-1 mt-4"></div>
                      <div class="card" style="width: 16rem;  ">
  <img src="Uploads/dlogo.jpg" height="170" width="100" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Search Doctors</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="doctorcard.php" class="btn btn-primary">Search</a>
  </div>
</div>
                       <div class="card" style="width: 16rem; ">
  <img src="Uploads/slogo.png" height="170" width="100" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Search shelters</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="sheltercard.php" class="btn btn-primary">Search</a>
  </div>
</div>            <div class="card" style="width: 16rem; ">
  <img src="Uploads/plogo.jpg" height="170" width="100" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Search Pharmacy</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="pharmacy.php" class="btn btn-primary">Search</a>
  </div>
  
  
</div>      
            <div class="card mt-4" style="width: 18rem;">
  <img src="Uploads/buylogo.jpg" height="170" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Buy pets</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="buy-pets.php" class="btn btn-primary">Buy pets</a>
  </div>
</div>
            <div class="card mt-4" style="width: 18rem;">
  <img src="Uploads/selllogo.jpg" height="170"class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Sell pets</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Sell pets
</button>
  </div>
</div>    
             </div>
         </div>
         
         <!-- Button trigger modal -->


<!-- Modal -->
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
       <div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1">User Id</span>
  </div>
  <input type="text" class="form-control" id="Userid" name="Userid" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" >
</div>
      <div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1">Contact person</span>
  </div>
  <input type="text" class="form-control" id="contact" name="contact"  placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" >
</div><div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1">Mobile</span>
  </div>
  <input type="number" class="form-control" id="mobile" name="mobile"  placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" >
</div><div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1">Address</span>
  </div>
  <input type="text" class="form-control" id="address" name="address"  placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" >
</div>
     <div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1">Pet</span>
  </div>
  <select name="selec" id="selec" class="form-control">
     <option value="">Select</option>
      <option value="dog">Dog</option>
      <option value="cat">Cat</option>
      <option value="aquatic">Aquatic</option>
      <option value="farm animal">Farm animal</option>
      <option value="bird">Bird</option>
      
  </select>
</div>
     <div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1">Other Info:</span>
  </div>
  
  
          </div>
             <div class="input-group mb-3">
         <input type="text" style="height:200px; text-align:top;" class="form-control" id="info" name="info"  placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" >
</div>
      </div>
      <div class="modal-footer">
    
        <button type="button" id="insert" class="btn btn-primary">Done</button>
        <span id="errUid"></span>
      </div>
    </div>
  </div>
</div>
          
</form>
      
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>