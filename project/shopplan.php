 <?php

    session_start();
    if(isset($_SESSION["active_user"])==false)
    {
        header("location:index.php");
    }
    ?>
<!doctype html>
<html lang="en">

  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"  crossorigin="anonymous">
    <script src="jquery-1.8.2.min.js"></script>
    <script>
      
      
      $(document).ready(function(){
          
          
        	$("#userid").keyup(function(){
                
			var uid=$("#userid").val();
			
			
			var url="shopnamecheck.php?uidName="+uid;
		
			$.get(url,function(response){
				
				$("#errUid").html(response);
			});
			
		});
          
              $("#search").click(function(){
                  
				var user=$("#userid").val();
																
				$.getJSON("shopcheck.php?name="+user,function(jsonAryResponse){
					
					if(jsonAryResponse.length==0)
						alert("Invalid ID");
					else
						{
							
							$("#fname").val(jsonAryResponse[0].fname);
                            $("#mobile").val(jsonAryResponse[0].mobile);
                            $("#address").val(jsonAryResponse[0].address);
                            $("#city").val(jsonAryResponse[0].city);
                             $("#license").val(jsonAryResponse[0].license);
                            $("#prev").prop("src","Uploads/"+jsonAryResponse[0].qrpic);
                            $("#hdnbox").val(jsonAryResponse[0].qrpic);
                         
							
						}
                });
         
         });
         
          
          
          
          
          
          
          
          
          
          
      });
      
      
      
      
      
      
      
      
      
      </script>
       <style>
  
        body {
            background-color: ghostwhite;
        }
           #songoku {
               border: 2px solid black;
               padding: 0;
               padding-right: 80px;
               
           }
           
           #heading  {
               
               margin-left: auto;
               margin-right: auto;
               text-decoration-color: aqua;
               color: firebrick;
           }
           
           #prev {
              
               margin-left: 80%;
           }
            
      
      </style>
    <title>shopplan</title>
  </head>
  <body >
 
    <form action="shpoplanform.php" method="post" enctype="multipart/form-data">
    <input type="hidden" id="hdnbox" name="hdnbox">
    <div id="table23" class="row">
        <div class="container">
            <div id="songoku" class="col-md-8 offset-md-2">
                <div class="input-group mb-3 offset-md-1 mt-4">
                <h1 id="heading">Pharmacy form</h1>
                </div>
                <div class="input-group mb-3 offset-md-1 mt-4">
  <input type="text" name="userid" id="userid" class="form-control" value="<?php echo $_SESSION["active_user"]  ?>" placeholder="Enter userid" aria-label="Recipient's username" aria-describedby="button-addon2" required readonly>
 
  <div class="input-group-append">
    <button class="btn btn-primary" type="button" name="search" id="search">Search</button>
  </div>
</div>
                          <div class="input-group mb-3 offset-md-1 mt-4">
                          <span id="errUid"></span>
                </div>
           <div class="input-group offset-md-1 mt-4">
  <div class="input-group-prepend">
    <span class="input-group-text">Firm name</span>
  </div>
  <input type="text" required aria-label="First name" name="fname" id="fname" class="form-control">
  <div class="input-group-prepend">
    <span class="input-group-text">Mobile number</span>
  </div>
  <input type="number" required aria-label="Last name" placeholder="+91" name="mobile" id="mobile" class="form-control">
</div>
           
            <div class="input-group offset-md-1 mt-4">
  <div class="input-group-prepend">
    <span class="input-group-text">Shop address</span>
  </div>
  <input type="text" required aria-label="First name" name="address" id="address" class="form-control">
                 <div class="input-group-prepend">
    <span class="input-group-text">License number</span>
  </div>
  <input type="text" required aria-label="First name" class="form-control" name="license" id="license">
                </div>
                     <div class="input-group offset-md-1 mt-4">
  <div class="input-group-prepend">
    <span class="input-group-text">City/locality</span>
  </div>
  <input type="text" required aria-label="First name" class="form-control" name="city" id="city">
                </div>
                        <div class="input-group mb-3 offset-md-1 mt-4">
  <div class="input-group-prepend">
    <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
  </div>
  <div class="custom-file">
    <input type="file"  name="ppic"  class="custom-file-input" id="ppic" aria-describedby="inputGroupFileAddon01">
    <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
  </div>
</div>
                        <div class="input-group mb-3 offset-md-1 mt-4">
                           <div class="input-group-prepend">
                               <img src="Uploads/113814092-phone-call-symbol.jpg" id="prev" width="200" height="200" alt="">
                           </div>
                        </div>
                        
                        <div class="input-group mb-3 offset-md-1 mt-4">
                          
                               <button type="submit" name="btn" value="insert" id="insert" class="btn btn-primary" style="margin-left:20%;">Insert</button>
                                <button type="submit" name="btn" value="update" id="update" class="btn btn-primary" style="margin-left:40%;">Update</button>
                                <a href="logout.php" class="btn btn-primary">Logout</a>
                       
                        </div>
                         
                    
                                            </div>
        </div>
    </div>

    </form>
    
    
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"  crossorigin="anonymous"></script>
  </body>
</html>