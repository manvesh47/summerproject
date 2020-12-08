<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<script src="jquery-1.8.2.min.js"></script>

	<script src="angular.min.js">
	</script>

	<script>
		var module = angular.module("kuchbhiModule", []);
		module.controller("mycontroller", function($scope, $http) {

			$scope.jsonArray = []; 

			$scope.fetchJsonData = function() {
				loadJSON();

			}
			function loadJSON(){
                
                
				$http.get("json-fetch-doctor.php?city="+$scope.selcity).then(okFx, notOkFx);

				function okFx(result) 
				{
					
					$scope.jsonArray = result.data; 
				}

				function notOkFx(result) {
					alert(result.data);
				}
			}
			
            //------
            
            $scope.cityArray=[];
			$scope.selcity="none";
			 $scope.loadcity=function(){
				$http.get("json-fetch-all-city.php").then(okFx, notOkFx);

				function okFx(result) //call back function
				{
					//alert(JSON.stringify(result.data));
					$scope.cityArray = result.data; //local to global assignment
					
				}

				function notOkFx(result) {
					alert(result.data);
				}
			}
             
             //-------
		      
             $scope.addfav= function()
             {
                
                 $scope.hidden2 = angular.element(document.querySelector("#vali")).val();
                 
                 $http.get("addfav.php?uid="+$scope.hidden2).then(okFx,notokFx);
                 
                 function okFx(result)
                 {
                     alert(result.data);
                 }
                 function notokFx(result)
                 {
                     alert("not done");
                 }
             }
            
            $scope.showDetails = function(index)
            {
                loadet(index);
            }
            function loadet(index)
            {
                $scope.selobj = $scope.jsonArray[index];
                alert(selobj);
            }
            
            
           
            
		});

	</script>
	<style>
    
        #head {
            float: left;
            margin-left: 10px;
            margin-top: 4px;
        }
        nav {
            height: 50px;
        }
        #mobile {
            float: none;
            font-size: 20px;
            margin-top: 0px;
            
        }
       
        .card:hover {
            
            cursor: pointer;
         
            
        }
       
    
    </style>
	
</head>

<body ng-app="kuchbhiModule" ng-controller="mycontroller" ng-init="loadcity();">
	<center>
       <nav class=" navbar-light bg-light">
       <img src="Uploads/sealogo.png" height="30" width="30" alt="">
  <span id="head" class="navbar-brand mb-0 h1">Search Doctors</span>
      <span id="mobile">Select City:</span>
				<select class="btn btn-primary mt-1" ng-model="selcity" >
				<option value="none" selected>Select</option>
					<option value={{obj.city}} ng-repeat="obj in cityArray">{{obj.city}}</option>
					
				</select>
		<input type="button" class="btn btn-primary mt-1" value="Fetch" ng-click="fetchJsonData();">
		

</nav>
       
		<div class="container">
			<div class="row">
				<div class="col-md-3 mt-4" ng-repeat="obj in jsonArray">
					<div class="card" >
						<img class="card-img-top" src="Uploads/{{obj.ppic}}" height="100" alt="Card image cap" >
						<div class="card-body">
							<h5  class="card-title">Name:{{obj.NAME}}</h5>
							<p class="card-text">Qualification:{{obj.qualification}}</p>
							<p class="card-text">Mobile: {{obj.mobile}}</p>
							<p class="card-text">Experience: {{obj.EXP}}</p>
						
                            <button  class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" ng-click="showDetails($index);" >
  Get details
</button>
                    
                  
                 
						</div>
						
						
					</div>
				


<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Doctors full detail:</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      
     <div class="input-group flex-nowrap mt-4">
  <div class="input-group-prepend">
    <span class="input-group-text" id="addon-wrapping">Uid:</span>
  </div>
 
  <input type="text" class="form-control" placeholder="Username" value="{{selobj.uid}}" ng-model="username" readonly aria-label="Username" aria-describedby="addon-wrapping">
</div>
     <div class="input-group flex-nowrap mt-4">
  <div class="input-group-prepend">
    <span class="input-group-text" id="addon-wrapping">NAME</span>
  </div>
  <input type="text" class="form-control" placeholder="Username" value="{{selobj.NAME}}" readonly aria-label="Username" aria-describedby="addon-wrapping">
</div>
     <div class="input-group flex-nowrap mt-4">
  <div class="input-group-prepend">
    <span class="input-group-text" id="addon-wrapping">Email:</span>
  </div>
  <input type="text" class="form-control" placeholder="Username" value="{{selobj.email}}" readonly aria-label="Username" aria-describedby="addon-wrapping">
</div>
     <div class="input-group flex-nowrap mt-4">
  <div class="input-group-prepend">
    <span class="input-group-text" id="addon-wrapping">Mobile:</span>
  </div>
  <input type="text" class="form-control" placeholder="Username" value="{{selobj.mobile}}" readonly aria-label="Username" aria-describedby="addon-wrapping">
</div> <div class="input-group flex-nowrap mt-4">
  <div class="input-group-prepend">
    <span class="input-group-text" id="addon-wrapping">Address:</span>
  </div>
  <input type="text" class="form-control" placeholder="Username" value="{{selobj.address}}" readonly aria-label="Username" aria-describedby="addon-wrapping">
</div> <div class="input-group flex-nowrap mt-4">
  <div class="input-group-prepend">
    <span class="input-group-text" id="addon-wrapping">City:</span>
  </div>
  <input type="text" class="form-control" placeholder="Username" value="{{selobj.city}}" readonly aria-label="Username" aria-describedby="addon-wrapping">
</div> <div class="input-group flex-nowrap mt-4">
  <div class="input-group-prepend">
    <span class="input-group-text" id="addon-wrapping">Qualification:</span>
  </div>
  <input type="text" class="form-control" placeholder="Username" value="{{selobj.qualification}}" readonly aria-label="Username" aria-describedby="addon-wrapping">
</div><div class="input-group flex-nowrap mt-4">
  <div class="input-group-prepend">
    <span class="input-group-text" id="addon-wrapping">Experience:</span>
  </div>
  <input type="text" class="form-control" placeholder="Username" value="{{selobj.EXP}}" readonly aria-label="Username" aria-describedby="addon-wrapping">
</div><div class="input-group flex-nowrap mt-4">
  <div class="input-group-prepend">
    <span class="input-group-text" id="addon-wrapping">Specalization:</span>
  </div>
  <input type="text" class="form-control" placeholder="Username" value="{{selobj.spl}}" readonly aria-label="Username" aria-describedby="addon-wrapping">
</div><div id="carouselExampleControls" class="carousel slide mt-4" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="Uploads/{{selobj.ppic}}" height="200" width="200" class="d-block w-100" alt="...">
      <span >Profile Pic</span>
    </div>
    <div class="carousel-item">
      <img src="Uploads/{{selobj.certpic}}" height="200" width="200" class="d-block w-100" alt="...">
      <span>Certificate</span>
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
      <div class="modal-footer">
       <button class="btn btn-primary"  ng-model="uidval" ng-click="addfav();">Add to fav.</button>
                  <input id="vali" type="hidden" value="{{selobj.NAME}}">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      
      </div>
    </div>
  </div>
</div>

	
			</div>
		</div>

        </div>

	</center>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</body>

</html>