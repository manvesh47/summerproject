<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<script src="angular.min.js"></script>
	
	<script>
	
		var kuchModule=angular.module("kuchbhiModule",[]);
			kuchModule.controller("myController",function($scope,$http){
			$scope.doJoin=function()
			{
				$scope.fullname=$scope.fn+" "+$scope.ln;
			}
			//----------------------------------
			$scope.objJsonArray=[
								{uid:"aman",pwd:"raman",mobile:"4325252"},
								{uid:"raman",pwd:"5252",mobile:"4325252"},
								{uid:"chaman",pwd:"8686",mobile:"4325252"},
								{uid:"Babbar",pwd:"21212",mobile:"4325252"},
								];
				//=-=-=-=-=-=-=-==-=-=-=-=-==-=-
				$scope.doDel=function(uid)
				{
					//alert(uid);
					//sending AJAX request for deletion of record
					$http.get("ajax-del.php?uid="+uid).then(okFx,notOkFx);
					function okFx(response)
					{
						alert(response.data);
					}
					function notOkFx(response)
					{
						alert(response.data);
					}
				}
				
		});
	</script>
</head>
<body ng-app="kuchbhiModule" ng-controller="myController">
	
	<p>
		Enter text:<input type="text" ng-model="kuchVar">
		{{kuchVar}}
		<br>
		Copied Text: <input type="text" ng-model="kuchVar">
	</p>
	<hr>
	<p>
		F.Name <input type="text" ng-model="fn">
		<br>
		L.Name <input type="text" ng-model="ln">
		<br>
		<input type="button" value="Join" ng-click="doJoin();">
		<br>
		Full Name: <input type="text" readonly ng-model="fullname">
		
	</p>
	<hr>
	<center>
		<h3>ng-repeat</h3>
	</center>
	<center>
		<table border="1" width="400">
		
			<tr>
			<th>Sr. No.</th>
			<th>User ID</th>
			<th>Password</th>
			<th>Mobile</th>
			<th>
				Delete Record
			</th>
			</tr>
			<tr ng-repeat="kuchObj in objJsonArray">
				
			<td>{{$index+1}}</td>	<td>{{kuchObj.uid}}</td><td>{{kuchObj.pwd}}</td><td>{{kuchObj.mobile}}</td>
			<td align="center">
				<input type="button" value="delete" ng-click="doDel(kuchObj.uid);">
			</td>
			</tr>
		</table>
	</center>
</body>
</html>














