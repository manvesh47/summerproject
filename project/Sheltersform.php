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
    <script src="jquery-1.8.2.min.js"></script>
    <script>

     $(document).ready(function(){
         
         
       $("#userid").keyup(function(){
                
			var uid=$("#userid").val();
			
			
			var url="Shelternamecheck.php?uidName="+uid;
		
			$.get(url,function(response){
				
				$("#errUid").html(response);
			});
			
		});
          
        $("#combo2").mouseleave(function()
                          {
            $val = $("#combo2").val();
            $("#pets").val($val);
        });
         
         $("#Search").click(function(){
                  
				var user=$("#userid").val();
																
				$.getJSON("Shelterssearch.php?name="+user,function(jsonAryResponse){
					
					if(jsonAryResponse.length==0)
						alert("Invalid ID");
					else
						{
							
							$("#cname").val(jsonAryResponse[0].name);
							$("#cnumber").val(jsonAryResponse[0].contact);
							$("#address").val(jsonAryResponse[0].address);
							$("#city").val(jsonAryResponse[0].city);
							$("#combo").val(jsonAryResponse[0].maxdays);
							$("#pets").val(jsonAryResponse[0].pets);
							$("#other").val(jsonAryResponse[0].info);
                            $("#pic1").prop("src","Uploads/"+jsonAryResponse[0].pic1);
                            $("#pic2").prop("src","Uploads/"+jsonAryResponse[0].pic2);
                            $("#pic3").prop("src","Uploads/"+jsonAryResponse[0].pic3);
                            
                            
                         
							
						}
                });
         
         });
         
         
         
         
         
     });


    </script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" crossorigin="anonymous">

    <title>Shelters</title>
</head>

<body>
<form action="Sheltersback.php" method="post" enctype="multipart/form-data">
    <div class="row">
        <div class="container">
            <div class="col-md-10">
                <div class="input-group mb-3 offset-md-1 mt-4">
                    <input type="text" class="form-control"  value="<?php echo $_SESSION["active_user"]  ?>" placeholder="User Id" name="userid" id="userid" aria-label="Recipient's username" aria-describedby="button-addon2" readonly>
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="button" id="Search">Search</button>
                    </div>
                </div>

                <div class="input-group mb-3 offset-md-1 mt-4">
                    <span id="errUid"></span>
                </div>


                <div class="input-group flex-nowrap offset-md-1 mt-4">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="addon-wrapping">Contact name</span>
                    </div>
                    <input type="text" class="form-control" id="cname" name="cname" placeholder="Enter name" aria-label="Username" aria-describedby="addon-wrapping">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="addon-wrapping">Contact number</span>
                    </div>
                    <input type="number" class="form-control" id="cnumber" name="cnumber" placeholder="Enter your number" aria-label="Username" aria-describedby="addon-wrapping">
                </div>


                <div class="input-group flex-nowrap offset-md-1 mt-4">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="addon-wrapping">Address</span>
                    </div>
                    <input type="text" class="form-control" id="address"  name="address" placeholder="Locality" aria-label="Username" aria-describedby="addon-wrapping">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="addon-wrapping">City</span>
                    </div>
                    <input type="text" class="form-control" id="city" name="city" placeholder="" aria-label="Username" aria-describedby="addon-wrapping">
                </div>

                <div class="input-group flex-nowrap offset-md-1 mt-4">
                    Max Days:<select name="combo" id="combo" style=" width:20%; margin-right:5%;">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                        <option value="16">16</option>
                        <option value="17">17</option>
                        <option value="18">18</option>
                        <option value="19">19</option>
                        <option value="20">20</option>
                        <option value="21">21</option>
                        <option value="22">22</option>
                        <option value="23">23</option>
                        <option value="24">24</option>
                        <option value="25">25</option>
                        <option value="26">26</option>
                        <option value="27">27</option>
                        <option value="28">28</option>
                        <option value="29">29</option>
                        <option value="30">30</option>
                    </select>
                    
                    Select pet: <select name="combo2" multiple id="combo2" style="margin-right:5%;">
                        <option value="dogs">dogs</option>
                        <option value="cats">cats</option>
                        <option value="Cows">Cows</option>
                        <option value="Aquatic">Aquatic</option>
                        <option value="Birds">Birds</option>
                    </select>
                    
                    <input type="text" id="pets" class="form-control">
                </div>
                
                <div class="form-group flex-nowrap offset-md-1 mt-4 col-md-12">
                  
                  <span class="mb-2" style="font-size:20px;  float:left;">Other stuff</span>
                   
                   <input type="text" name="other" id="other" style="height:100px; width:100%;">
                </div>
   <div class="input-group mb-3 offset-md-1 col-md-12">

  <div class="custom-file">
     <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
    <input type="file" name="pic1" class="custom-file-input"  aria-describedby="inputGroupFileAddon01">
    <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
    
  </div>
      <img src="Uploads/113814092-phone-call-symbol.jpg" id="pic1" height="200px" width="200px" alt="">
</div>  <div class="input-group mb-3 offset-md-1 col-md-12">

  <div class="custom-file">
     <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
    <input type="file" name="pic2" class="custom-file-input"  aria-describedby="inputGroupFileAddon01">
    <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
    
  </div>
      <img src="Uploads/113814092-phone-call-symbol.jpg" id="pic2"  height="200px" width="200px" alt="">
</div>  <div class="input-group mb-3 offset-md-1 col-md-12">

  <div class="custom-file">
     <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
    <input type="file" name="pic3" class="custom-file-input"  aria-describedby="inputGroupFileAddon01">
    <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
    
  </div>
      <img src="Uploads/113814092-phone-call-symbol.jpg" id="pic3" height="200px" width="200px" alt="">
</div>
                
                
                <div class="form-group flex-nowrap offset-md-1 mt-4 col-md-12">
                    
                    <button type="submit" class="btn btn-primary" id="insert" name="insert">Sign up</button>
                    
                    <a href="logout.php" class="btn btn-primary">Logout</a>
                    
                </div>
                
            </div>
        </div>
    </div>

</form>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" crossorigin="anonymous"></script>
</body>

</html>
