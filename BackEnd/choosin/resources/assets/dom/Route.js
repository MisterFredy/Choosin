app.config(function ($stateProvider,$urlRouterProvider){
    $stateProvider
    .state('detailtempat',{
        url: '/detailtempat',
        templateUrl: '../../detail_resto.html'
    })
    .state('booking',{
        url:'/generatebooking',
        templateUrl: '../../booking.html'
    })
})

app.factory("myFactory",function(){
    var savedData = {}
    function set(data){
        savedData = data;
    }
    function get(){
        return savedData;
    }
    return{
        set: set,
        get: get
    }
})