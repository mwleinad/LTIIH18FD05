let contract = document.getElementsByClassName('contract');

Array.from(contract).forEach(function (element) {
    element.addEventListener('click', purchase);
});

function purchase() {
    let product = this.getAttribute("data-product");

    axios.get('/0402ContosoBD/api/purchaseApi.php', {
        params: {
            product: product,
        }
    })
        .then(function (response) {
            console.log(response);
            toastr.success(response.data);
        })
        .catch(function (error) {
            console.log(error);
        });
}

