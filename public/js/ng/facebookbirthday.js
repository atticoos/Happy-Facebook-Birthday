angular.module('facebookbirthday', ['ngRoute', 'ui.router']);
angular.module('facebookbirthday')
    .config(function($locationProvider, $interpolateProvider, $sceProvider, $stateProvider, $urlRouterProvider){
        $interpolateProvider.startSymbol('{[{').endSymbol('}]}');
        $sceProvider.enabled(false);



        $urlRouterProvider.otherwise('/');

        $stateProvider
            .state('home', {
                url: '/',
                templateUrl: '/js/ng/views/home/home.html'
            })
            .state({
                name: 'login',
                url: '/login',
                templateUrl: '/js/ng/views/home/login.html',
                controller: 'MainController'
            });

    })

    .run(['$rootScope', '$window', function($rootScope, $window){
        $rootScope.user = {};

        $window.fbAsyncInit = function(){
            FB.init({
                appId:'1407469082869604',
                channelUrl: 'app/channel.html',
                status: true,
                cookie: true,
                xfbml: true
            });
        };

        (function(d){
            // load the Facebook javascript SDK

            var js,
                id = 'facebook-jssdk',
                ref = d.getElementsByTagName('script')[0];

            if (d.getElementById(id)) {
                return;
            }

            js = d.createElement('script');
            js.id = id;
            js.async = true;
            js.src = "//connect.facebook.net/en_US/all.js";

            ref.parentNode.insertBefore(js, ref);

        }(document));
    }])

    .controller('MainController', ['$scope', 'FacebookService', function($scope, FacebookService){

        $scope.user = {};
        $scope.logged = false;


        $scope.getAuthResponse = function(){
            FacebookService.getAccessToken().then(function(token){
                console.log("TOKEN", token);
            });
        };

        $scope.login = function(){
            FacebookService.getLoginStatus().then(function(isLoggedin){
                if(isLoggedin){

                } else {
                    FacebookService.login()
                        .then(function(resp){
                            alert("Logged in ");
                        }, function(err){
                            alert("Error logging in ");
                        });

                }
            });
        }


    }]);