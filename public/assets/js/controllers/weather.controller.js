document.getElementById('weatherForm').addEventListener('submit', async function (e) {
    e.preventDefault();

    const city = document.getElementById('city').value;
    const resultDiv = document.getElementById('result');

    try {
        const response = await fetch(`weather_api.php?city=${city}`);
        const data = await response.json();

        if (data.error) {
            resultDiv.innerHTML = `<div class="alert alert-danger">${data.error}</div>`;
        } else {
            resultDiv.innerHTML = `
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Previsão do Tempo para ${data.location.name}</h5>
                        <p class="card-text">Temperatura: ${data.current.temperature}°C</p>
                        <p class="card-text">Condição: ${data.current.condition}</p>
                    </div>
                </div>
            `;
        }
    } catch (error) {
        resultDiv.innerHTML = `<div class="alert alert-danger">Erro ao obter dados!</div>`;
    }
});
