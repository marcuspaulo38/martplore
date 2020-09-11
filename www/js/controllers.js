angular.module('starter.controllers', [])

    .controller('CORSDisabledCtrl', function ($scope, $http) {

        $scope.loadCountries = function(){

            $scope.countries = [];

            var ajaxRequest = $http.get("https://martplore.com.br/vdroot/web/getcountries-nocors.php");

            ajaxRequest.success(function(data, status, headers, config) {
                $scope.countries = data;
                alert("Carregando1...");
                        
            });

            ajaxRequest.error(function(data, status, headers, config) {
                alert("Ops 1!");
            });
        }
    })

    .controller('CORSEnabledCtrl', function ($scope, $http) {

        $scope.loadCountries = function() 
        {
            $scope.countries = [];
            var ajaxRequest = $http.get("https://martplore.com.br/vdroot/web/getcountries-cors.php");

            ajaxRequest.success(function (data, status, headers, config) 
            {
                $scope.countries = data;
                alert("Carregando2...");
                
            });

            ajaxRequest.error(function (data, status, headers, config) 
            {
                alert("Erro ao buscar dados!");
            });
        };
    });
    
    
    
    		
	
    
    