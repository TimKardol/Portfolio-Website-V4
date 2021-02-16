require('./bootstrap');

initialValue = document.getElementById('initial_value');
currentValue = document.getElementById('current_value');

function logOutput(initialValue, currentValue) {
    console.log(currentValue, initialValue)
};

document.getElementById("calculate").addEventListener("click", logOutput);
