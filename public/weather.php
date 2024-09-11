<!DOCTYPE html>
<html lang="pt" ng-app="weatherApp">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weather App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>
    <div class="full-height bg-light">
        <div class="container p-4 shadow-lg rounded" ng-controller="WeatherController">
            <div class="row">
                <div class="col-md-6 d-flex flex-column">
                    <h1 class="text-center mb-4 ">Previsão do Tempo</h1>
                    <form ng-submit="getWeather()">
                        <div class="mb-3">
                            <input type="text" ng-model="city" class="form-control form-control-lg" placeholder="Digite o nome da cidade" required>
                        </div>
                        <button type="submit" class="btn custom-btn w-100 btn-lg" ng-class="{'disabled': loading}">
                            <i ng-if="loading" class="fas fa-spinner fa-spin"></i> {{loading ? 'Carregando...' : 'Pesquisar'}}
                        </button>

                    </form>
                    <div class="mt-4" ng-if="searchedCities.length > 0">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Cidade</th>
                                    <th>Data</th>
                                    <th>Temperatura</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr ng-repeat="city in searchedCities" ng-click="searchCity(city.name)">
                                    <td>{{city.name}}</td>
                                    <td>{{city.date | date:'dd/MM/yyyy HH:mm'}}</td>
                                    <td>{{city.temperature}}°C</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="result mt-5" ng-if="weatherData">
                        <div class="card border-0 shadow-sm" style="background-color: #79D2E6;"
                            <div class=" card-body text-center">
                            <h1 class="card-title display-4 text-white">
                                {{weatherData.location.name}}, {{weatherData.full_response.sys.country}}
                            </h1>
                            <h1 class="display-1 text-white" ng-class="{'text-danger': weatherData.current.temperature < 0}">
                                {{weatherData.current.temperature}}°C
                            </h1>
                            <div class="my-4 text-white">
                                <img ng-src="http://openweathermap.org/img/wn/{{weatherData.full_response.weather[0].icon}}.png" alt="{{weatherData.full_response.weather[0].main}}" class="weather-icon">
                                <h4 class="d-inline-block ms-2">{{weatherData.full_response.weather[0].main}}</h4>
                            </div>
                            <button class="btn btn-secondary mb-3" ng-click="showDetails = !showDetails">
                                {{showDetails ? 'Ocultar detalhes adicionais' : 'Exibir detalhes adicionais'}}
                            </button>
                            <ul class="list-group list-group-flush text-start" ng-show="showDetails">
                                <li class="list-group-item">
                                    <i class="fas fa-thermometer-half me-2"></i>
                                    <strong>Sensação térmica:</strong> {{weatherData.full_response.main.feels_like - 273.15 | number:1}}°C
                                </li>
                                <li class="list-group-item">
                                    <i class="fas fa-thermometer-quarter me-2"></i>
                                    <strong>Temperatura mínima:</strong> {{weatherData.full_response.main.temp_min - 273.15 | number:1}}°C
                                </li>
                                <li class="list-group-item">
                                    <i class="fas fa-thermometer-three-quarters me-2"></i>
                                    <strong>Temperatura máxima:</strong> {{weatherData.full_response.main.temp_max - 273.15 | number:1}}°C
                                </li>
                                <li class="list-group-item">
                                    <i class="fas fa-tint me-2"></i>
                                    <strong>Umidade:</strong> {{weatherData.full_response.main.humidity}}%
                                </li>
                                <li class="list-group-item">
                                    <i class="fas fa-tachometer-alt me-2"></i>
                                    <strong>Pressão atmosférica:</strong> {{weatherData.full_response.main.pressure}} hPa
                                </li>
                                <li class="list-group-item">
                                    <i class="fas fa-wind me-2"></i>
                                    <strong>Velocidade do vento:</strong> {{weatherData.full_response.wind.speed}} m/s
                                </li>
                                <li class="list-group-item">
                                    <i class="fas fa-cloud me-2"></i>
                                    <strong>Nuvens:</strong> {{weatherData.full_response.clouds.all}}%
                                </li>
                                <li class="list-group-item">
                                    <i class="fas fa-sun me-2"></i>
                                    <strong>Amanhecer:</strong> {{weatherData.full_response.sys.sunrise * 1000 | date:'HH:mm:ss'}} UTC
                                </li>
                                <li class="list-group-item">
                                    <i class="fas fa-moon me-2"></i>
                                    <strong>Pôr do sol:</strong> {{weatherData.full_response.sys.sunset * 1000 | date:'HH:mm:ss'}} UTC
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="alert alert-danger mt-4" ng-if="error">{{error}}</div>
    </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.8.2/angular.min.js"></script>
    <script src="assets/js/controllers/weather.controller.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>