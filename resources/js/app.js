require('./bootstrap');

window.addEventListener('load', function () {
    console.log('DOM is loaded')
});

document.getElementById('calculate').addEventListener('click', function calculateProfit() {
    let initialValue = document.getElementById('initialValue').innerText;
    let currentValue = document.getElementById('currentValue').innerText;

    document.getElementById('profit').innerText = currentValue - initialValue;
});
