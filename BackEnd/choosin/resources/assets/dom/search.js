var app = angular.module("search",[]);


app.controller("searchCtrl",
function($scope,$http){
    $http.get("http://localhost:8000/api/tempatmakan")
    .then(function(response) {
        $scope.tempatmakan = response.data;   
    });
    $scope.lihatdetail = function(id){
        myfactory.set(id);
        //console.log(id);
        $location.path('/detailtempat');
    }
});


