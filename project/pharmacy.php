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
          
			$scope.jsonArray = []; //empty json array

			$scope.fetchJsonData = function() {
				loadJSON();

			}
			function loadJSON(){
                 
				$http.get("json-fetch-pharmacy.php?city="+$scope.selcity).then(okFx, notOkFx);

				function okFx(result) //call back function
				{
					//alert(JSON.stringify(result.data));
					$scope.jsonArray = result.data; //local to global assignment
				}

				function notOkFx(result) {
					alert(result.data);
				}
			}
            
             $scope.cityArray=[];
			$scope.selcity="none";
			 $scope.loadcity=function(){
				$http.get("json-fetch-all-pharmacy.php").then(okFx, notOkFx);

				function okFx(result) //call back function
				{
					//alert(JSON.stringify(result.data));
					$scope.cityArray = result.data; //local to global assignment
					
				}

				function notOkFx(result) {
					alert(result.data);
				}
			}
            
            $scope.showDetails = function(index)
            {
                loaddet(index);
            }
            function loaddet(index)
            {
                $scope.selobj = $scope.jsonArray[index];
            }
            
		});

	</script>
	<style>
    
        select {
            float: right;
            margin-top: 8px;
            margin-right: 10px;
        }
        #yosha {
            float: right;
            margin-top: 5px;
            margin-right: 10px;
            margin-left: 10px;
        }
        .card {
            flex-basis: auto;
            flex-grow: 1;
        }
        
    </style>
</head>

<body ng-app="kuchbhiModule" ng-controller="mycontroller" ng-init="loadcity();">
	
	 <nav class=" navbar-light bg-light">
       <img src="Uploads/sealogo.png" height="30" width="30" alt="">
  <span id="head" class="navbar-brand mb-0 h1">Search Pharmacy</span>
     
<select class="btn btn-primary" ng-model="selcity" >
				<option value="none" selected>Select</option>
					<option value={{obj.city}} ng-repeat="obj in cityArray">{{obj.city}}</option>
					
				</select>
		<input id="yosha" class="btn btn-primary" type="button" value="Fetch" ng-click="fetchJsonData();">
	
</nav>
	<center>

		<div class="container">
			<div class="row">
				<div class="col-md-3 mt-4" ng-repeat="obj in jsonArray">
					<div class="card" >
						<img class="card-img-top" src="Uploads/{{obj.qrpic}}" height="100" alt="Card image cap">
						<div class="card-body">
							<h5 class="card-title">UID:{{obj.uid}}</h5>
							<p class="card-text">Name:{{obj.fname}}</p>
							
						
							
						</div>
						   <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" ng-click="showDetails($index);">
  Get details
</button>
               
					</div>
						<div class="modal fade" id="exampleModal" tabindex="-1"  aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Pharmacy's full detail:</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      
     <div class="input-group flex-nowrap mt-4">
  <div class="input-group-prepend">
    <span class="input-group-text" id="addon-wrapping">Uid:</span>
  </div>
  <input type="text" class="form-control" placeholder="Username" value="{{selobj.uid}}" readonly aria-label="Username" aria-describedby="addon-wrapping">
</div>
     <div class="input-group flex-nowrap mt-4">
  <div class="input-group-prepend">
    <span class="input-group-text" id="addon-wrapping">Name:</span>
  </div>
  <input type="text" class="form-control" placeholder="Username" value="{{selobj.fname}}" readonly aria-label="Username" aria-describedby="addon-wrapping">
</div>
    
    <div class="input-group flex-nowrap mt-4">
  <div class="input-group-prepend">
    <span class="input-group-text" id="addon-wrapping">Address:</span>
  </div>
  <input type="text" class="form-control" placeholder="Username" value="{{selobj.address}}" readonly aria-label="Username" aria-describedby="addon-wrapping">
</div> <div class="input-group flex-nowrap mt-4">
  <div class="input-group-prepend">
    <span class="input-group-text" id="addon-wrapping">City:</span>
  </div>
  <input type="text" class="form-control" placeholder="Username" value="{{selobj.city}}" readonly aria-label="Username" aria-describedby="addon-wrapping">
</div><div class="input-group flex-nowrap mt-4">
  <div class="input-group-prepend">
    <span class="input-group-text" id="addon-wrapping">License:</span>
  </div>
  <input type="text" class="form-control" placeholder="Username" value="{{selobj.license}}" readonly aria-label="Username" aria-describedby="addon-wrapping">
</div><div id="carouselExampleControls" class="carousel slide mt-4" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="Uploads/{{selobj.qrpic}}" height="200" width="200" class="d-block w-100" alt="...">
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
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
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