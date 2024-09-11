angular.module('weatherApp', [])
    .controller('WeatherController', ['$scope', '$http', function($scope, $http) {
        $scope.weatherData = null;
        $scope.error = null;
        $scope.searchedCities = [];
        $scope.loading = false;

        $scope.getWeather = function() {
            const city = $scope.city;
            $scope.loading = true;
            $scope.weatherData = null;
            $scope.error = null;

            $http.get(`weather_api.php?city=${city}`)
                .then(function(response) {
                    const data = response.data;
                    if (data.error) {
                        $scope.error = data.error;
                    } else {
                        $scope.weatherData = data;
                        $scope.loading = false;
                        $scope.city = null;
                        $scope.searchedCities.push({
                            name: city,
                            date: new Date(),
                            temperature: data.current.temperature
                        });
                    }
                })
                .catch(function() {
                    $scope.error = 'Erro ao obter dados!';
                });
        };
        $scope.searchCity = function(cityName) {
            $scope.city = cityName; 
            $scope.getWeather();
        };
    }]);
