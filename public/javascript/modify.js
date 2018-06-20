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
                console.log(product);

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
    $("#name").prop("value", product['name']);
    $("#quantity").prop("value", product['quantity']);
    $("#ingredients").prop("value", product['ingredients']);
    $("#allergens").prop("value", product['allergens']);
    $("#packaging").prop("value", product['packaging']);
    $("#preparation_tool").prop("value", product['preparation_tool']);
    $("#preparation_instructions").prop("value", product['preparation_instructions']);
    $("#storage_info").prop("value", product['storage_info']);
    $("#validity").prop("value", product['validity']);
    $("#where_sold").prop("value", product['where_sold']);

    $("#category_id").val(product['category_id']);
    $("#brand_id").val(product['brand_id']);
}