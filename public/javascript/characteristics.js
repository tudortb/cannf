$(function() {

    getProductData();

});

function getProductData() {

    var request = $.ajax({
        type : "GET",
        url : "../core/terminal.php",
        data : {
            "step" : 'product',
            "userId" : userId,
            "productId" : productId
        },
        dataType : 'json'
    });
    request.done(function (response) {
        try {
            if(response['tag'] === 'positive') {

                var product = response['message']['product'];
                printProduct(product);

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

function printProduct(product) {
    $("#name").append(product['name']);
    $("#quantity").append(product['quantity']);
    $("#ingredients").append(product['ingredients']);
    $("#allergens").append(product['allergens']);
    $("#packaging").append(product['packaging']);
    $("#preparation_tool").append(product['preparation_tool']);
    $("#preparation_instructions").append(product['preparation_instructions']);
    $("#storage_info").append(product['storage_info']);
    $("#validity").append(product['validity'] + " months");
    $("#where_sold").append(product['where_sold']);
    $("#category").append(product['category']);
    $("#brand").append(product['brand']);
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