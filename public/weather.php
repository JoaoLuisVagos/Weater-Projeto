<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weather App</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .container {
            max-width: 500px;
        }

        h1 {
            color: #007bff;
            margin-bottom: 20px;
        }

        .form-control {
            border-radius: 0.5rem;
        }

        .btn-primary {
            background-color: #007bff;
            border: none;
            border-radius: 0.5rem;
        }

        .result {
            text-align: center;
        }

        .card {
            border: none;
            border-radius: 0.5rem;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>

<body>
    <div class="d-flex align-items-center justify-content-center vh-100">
        <div class="container">
            <h1 class="text-center">Previsão do Tempo</h1>
            <form id="weatherForm" class="mt-4">
                <div class="mb-3">
                    <input type="text" id="city" name="city" class="form-control" placeholder="Digite o nome da cidade" required>
                </div>
                <button type="submit" class="btn btn-primary w-100">Ver Previsão</button>
            </form>
            <div class="result mt-5" id="result"></div>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies (Popper.js) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Custom JavaScript -->
    <script src="assets/js/controllers/weather.controller.js"></script> <!-- Link para o arquivo JavaScript -->
</body>

</html>