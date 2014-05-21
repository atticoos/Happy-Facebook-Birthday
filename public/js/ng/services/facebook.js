angular.module('facebookbirthday')
    .factory('FacebookService', function($q){
        return {

            getLoginStatus: function(){
                var deferred = $q.defer();

                FB.getLoginStatus(function(response){
                    if (response.status == 'connected'){
                        deferred.resolve(response.authResponse);
                    } else {
                        deferred.reject(false);
                    }
                });
                return deferred.promise;
            },


            login: function(){
                var deferred = $q.defer();

                FB.login(function(resp){
                    if (resp.status == "connected"){
                        deferred.resolve(resp);
                    } else {
                        deferred.reject(resp);
                    }
                });

                return deferred.promise;
            },

            me: function(){
                FB.api('/me', 'GET', function(resp){
                    console.log("RESP", resp);
                })
            },

            getAccessToken: function(){
                var deferred = $q.defer();
                this.getLoginStatus().then(function(authResponse){
                    console.log(authResponse);
                    deferred.resolve(authResponse.accessToken);
                }, function(){
                    FB.login().then(function(resp){
                        var authResponse = FB.getAuthResponse();
                        deferred.resolve(authResponse.accessToken);
                    }, function(err){
                        deferred.reject(resp);
                    })
                });
                 return deferred.promise;
            }

        };
    });