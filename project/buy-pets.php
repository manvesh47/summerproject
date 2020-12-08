<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <!-- Bootstrap CSS -->

    <!-- Bootstrap CSS -->
    <script src="jquery-1.8.2.min.js">
    </script>
    <script src="angular.min.js"></script>


    <script>
        var module = angular.module("kuchbhiModule", []);
        module.controller("mycontroller", function($scope, $http) {

            $scope.jsonArray = [];
            $scope.selpet="dog";
            $scope.fetchJsonData = function() {

                $http.get("fetch-buy-pets.php?pet="+$scope.selpet).then(okFx, notOkFx);

                function okFx(result) {

                    $scope.jsonArray = result.data;
                }

                function notOkFx(result) {
                    alert(result.data);
                }

            }







        });

    </script>
    <style>
        .card {
            flex-grow: 1;
            flex-basis: auto;
            margin-right: 20px;
        }
        table {
            margin-right: auto;
            margin-left: auto;
            margin-top: 30px;
            border: 1px solid black;
           
        }
        
        td:nth-child(3), th:nth-child(3) {
 border-left: solid 2px black;
}  td:nth-child(2), th:nth-child(2) {
 border-left: solid 2px black;
}

    </style>


    <title>Buypets</title>
</head>

<body ng-app="kuchbhiModule" ng-controller="mycontroller">
    <center>
        <select ng-model="selpet">
            <option value="dog">Dog</option>
            <option value="cat">Cat</option>
            <option value="aquatic">Aquatic</option>
            <option value="bird">Bird</option>
            <option value="farm animal">Farm animal</option>


        </select>
        <input type="button" class="mt-4 btn btn-primary" value="Fetch All" ng-click="fetchJsonData();">
    </center>
    <center>
    <div class="container">
    <div class="row">
    
    <div class="card col-md-3" style="width: 18rem;" ng-repeat="obj in jsonArray">
  <div class="card-body">
    <h5 class="card-title mb-2 text-muted">Contact:{{obj.uid}}</h5>
    <h5 class="card-subtitle mb-2 text-muted">mobile:{{obj.mobile}}</h5>
    <h5 class="card-subtitle mb-2 text-muted">address:{{obj.address}}</h5>
    <h5 class="card-subtitle mb-2 text-muted">pet:{{obj.pet}}</h5>
   </div>
  </div>
</div>
  </div>
</center>


    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>

</html>

