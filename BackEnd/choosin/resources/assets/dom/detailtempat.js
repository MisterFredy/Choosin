var app = angular.module("detailtempat",[]);

app.controller("searchCtrl",function($scope,$http){
    $scope.idtempat = myFactory.get(id);
    $http.get("http://localhost:8000/api/tempatmakan/"+$scope.idtempat)
    .then(function(response) {
        $scope.detailtempatmakan = response.data;
        console.log($scope.detailtempatmakan);
        //datatempat.set($scope.detailtempatmakan);
    });
});