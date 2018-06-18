$(function() {

    getProductsData();

});

function getProductsData() {

    var request = $.ajax({
        type : "GET",
        url : "../core/terminal.php",
        data : {
            "step" : 'products',
            "userId" : userId
        },
        dataType : 'json'
    });
    request.done(function (response) {
        try {
            if(response['tag'] === 'positive') {

                var products = response['message']['products'];
                for(var j = 0; j<100; ++j) {
                    for (var i = 0; i < products.length; ++i) {
                        constructProduct(products[i]);
                    }
                }

            } else {
                console.log(response);
            }
        } catch (e) {
            console.error(e);
        }
    });
    request.fail(function(response){
        console.log(response);
    })
}

function constructProduct(product) {

    var placeholder = $("#list");

    var result = '<tr id = "product-' + product['id'] + '" class="row100 body">' +
        '<td class="cell100 exp-column1">' + product['name'] + '</td>' +
        '<td class="cell100 exp-column2">' + product['quantity'] + '</td>';

    placeholder.append(result);

    $("#product-" + product['id']).click(function(){
        window.location.href = "characteristics.php?productId=" + product['id'] + "";
    });
}