let form = document.getElementById('sumForm');
let formSubmitButton = form.elements["doSuma"];

formSubmitButton.addEventListener('click', () => {
    let number1 = form.elements["number1"].value;
    let number2 = form.elements["number2"].value;

    axios.get('suma.php', {
        params: {
            number1: number1,
            number2: number2
        }
    })
    .then(function (response) {
        document.getElementById('response').innerText = response.data;
    })
    .catch(function (error) {
        console.log(error);
    });
});



