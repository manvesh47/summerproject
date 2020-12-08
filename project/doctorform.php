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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" crossorigin="anonymous">
    <script src="jquery-1.8.2.min.js"></script>
    
    <script>
        
        
        
        
    $(document).ready(function()
                     {
        
        
        
        	$("#userid").keyup(function(){
			var uid=$("#userid").val();
			
			
			var url="docnamecheck.php?uidName="+uid;
		
			$.get(url,function(response){
				
				$("#errUid").html(response);
			});
			
		});
        
        
         $("#search").click(function(){
                  
				var user=$("#userid").val();
																
				$.getJSON("jsondoctor.php?name="+user,function(jsonAryResponse){
					
					if(jsonAryResponse.length==0)
						alert("Invalid ID");
					else
						{
							
							$("#firstname").val(jsonAryResponse[0].NAME);
							$("#email").val(jsonAryResponse[0].email);
                            $("#mobile").val(jsonAryResponse[0].mobile);
                            $("#address").val(jsonAryResponse[0].address);
                            $("#state").val(jsonAryResponse[0].state);
                            $("#city").val(jsonAryResponse[0].city);
                            $("#qualification").val(jsonAryResponse[0].qualification);
                            $("#specalization").val(jsonAryResponse[0].spl);
                            $("#experience").val(jsonAryResponse[0].EXP);
                            $("#prev").prop("src","Uploads/"+jsonAryResponse[0].ppic);
                             $("#prev2").prop("src","Uploads/"+jsonAryResponse[0].certpic);
                            $("#hdnbox").val(jsonAryResponse[0].ppic);
                            $("#hdnbox2").val(jsonAryResponse[0].certpic);
							
						}
                });
         
         });
        
    });
						
				
				
    
   
    
    
    </script>
    <style>
    
        div.container {
            
            border: 1px solid black;
          
            padding: none;
            
            
            
        }
        h1 {
            text-align: center;
            margin-left: 50%;
            color: firebrick;
        }
    
    </style>
    <title>Doctors form</title>
</head>

<body >


    <form action="doctorphpform.php" method="post" enctype="multipart/form-data">
        <div class="container">
            <div class="row">
                <div class="col-md-8" offset-md-1>
                   
                   <input type="hidden" id="hdnbox" name="hdnbox">
                   <input type="hidden" id="hdnbox2" name="hdnbox2">
                   <h1>Doctor Info form</h1>
                    <div class="input-group mb-3 offset-md-3 mt-4">
 
                        <input type="text" class="form-control" id="userid" value="<?php echo $_SESSION["active_user"]  ?>" placeholder="User id" aria-label="Example text with button addon" name="userid" aria-describedby="button-addon1" readonly >
                        <div class="input-group-prepend" offset-md-1>
                            <button class="btn btn-primary" type="button" id="search">Fetch</button>
                        </div>
                    </div>
                    <div class="input-group mb-3 offset-md-3 mt-4">

                       <span id="errUid"></span>
                    </div>

                    <div class="input-group mb-3 offset-md-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">name</span>
                        </div>
                        <input type="text"  name="firstname" id="firstname"  class="form-control">
                       
                    </div>

                    <div class="input-group offset-md-3 ">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="addon-wrapping">Email</span>
                        </div>
                        <input type="text" name="email" id="email" class="form-control" placeholder="Enter valid email" aria-label="Username" aria-describedby="addon-wrapping">
                    </div>

                    <div class="input-group offset-md-3 mt-3 ">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="addon-wrapping">Mobile number</span>
                        </div>
                        <input type="text" class="form-control" name="mobile" id="mobile" placeholder="+91" value="" aria-label="Username" aria-describedby="addon-wrapping">
                    </div>

                    <div class="input-group offset-md-3 mt-3 ">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="addon-wrapping">Address </span>
                        </div>
                        <input type="text" name="address" id="address" class="form-control" placeholder="" value="" aria-label="Username" aria-describedby="addon-wrapping">
                    </div>

                    <div class="input-group mb-3 offset-md-3 mt-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">State</span>
                        </div>
                        <select name="state" id="state" class="form-control">
                            <option value="Andhra Pradesh">Andhra Pradesh</option>
                            <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                            <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                            <option value="Assam">Assam</option>
                            <option value="Bihar">Bihar</option>
                            <option value="Chandigarh">Chandigarh</option>
                            <option value="Chhattisgarh">Chhattisgarh</option>
                            <option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
                            <option value="Daman and Diu">Daman and Diu</option>
                            <option value="Delhi">Delhi</option>
                            <option value="Lakshadweep">Lakshadweep</option>
                            <option value="Puducherry">Puducherry</option>
                            <option value="Goa">Goa</option>
                            <option value="Gujarat">Gujarat</option>
                            <option value="Haryana">Haryana</option>
                            <option value="Himachal Pradesh">Himachal Pradesh</option>
                            <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                            <option value="Jharkhand">Jharkhand</option>
                            <option value="Karnataka">Karnataka</option>
                            <option value="Kerala">Kerala</option>
                            <option value="Madhya Pradesh">Madhya Pradesh</option>
                            <option value="Maharashtra">Maharashtra</option>
                            <option value="Manipur">Manipur</option>
                            <option value="Meghalaya">Meghalaya</option>
                            <option value="Mizoram">Mizoram</option>
                            <option value="Nagaland">Nagaland</option>
                            <option value="Odisha">Odisha</option>
                            <option value="Punjab">Punjab</option>
                            <option value="Rajasthan">Rajasthan</option>
                            <option value="Sikkim">Sikkim</option>
                            <option value="Tamil Nadu">Tamil Nadu</option>
                            <option value="Telangana">Telangana</option>
                            <option value="Tripura">Tripura</option>
                            <option value="Uttar Pradesh">Uttar Pradesh</option>
                            <option value="Uttarakhand">Uttarakhand</option>
                            <option value="West Bengal">West Bengal</option>
                        </select>
                        <div class="input-group-prepend">
                            <span class="input-group-text">City</span>
                        </div>
                        <input type="text" name="city" id="city" aria-label="Last name" class="form-control">
                    </div>

                    <div class="input-group offset-md-3 mt-3 ">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="addon-wrapping">Qualification </span>
                        </div>
                        <input type="text" class="form-control" placeholder="" value="" aria-label="Username" name="qualification" id="qualification" aria-describedby="addon-wrapping">
                    </div>


                    <div class="input-group mb-3 offset-md-3 mt-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Specalization</span>
                        </div>
                        <input type="text" name="specalization" id="specalization" aria-label="First name" class="form-control">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Experience</span>
                        </div>
                        <input type="number" id="experience" name="experience" aria-label="Last name" placeholder="years" class="form-control">
                    </div>

                    <div class="input-group mb-3 offset-md-3">

                        <div class="custom-file">
                            <input type="file" name="ppic" class="custom-file-input" id="ppic" aria-describedby="inputGroupFileAddon01">
                            <label class="custom-file-label" for="inputGroupFile01">Upload pic</label>
                        </div>
                        
                       
                    </div>
                    
                    <div class="input-group mb-3 offset-md-3">
                      <div>
                            <img src="Uploads/menu.png"  style="margin-left:150%;" id="prev" alt="" width="150" height="150">
                        </div>
                    </div>

                    <div class="input-group mb-3 offset-md-3">

                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="cpic" name="cpic" aria-describedby="inputGroupFileAddon01">
                            <label class="custom-file-label" for="inputGroupFile01">Upload certificate</label>
                        </div>
                         
                    </div>

                        <div class="input-group mb-3 offset-md-3">
                           <div>
                            <img src="Uploads/menu.png" style="margin-left:150%;" id="prev2" alt="" width="150" height="150">
                        </div>
                    </div>
                    <div class="input-group mb-3 offset-md-3">

                        <button type="submit" class="btn btn-primary" name="btn" id="sumbit" value="insert">Sumbit</button>
                        <button type="submit" class="btn btn-primary offset-md-4" name="btn" id="update" value="update">Update</button>
                        <a href="logout.php" class="btn btn-primary offset-md-3">logout</a>
                     </div>
                    
                </div>
            </div>
        </div>

    </form>


    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>

</html>
