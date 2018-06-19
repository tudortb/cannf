$(function() {

    getProductsData();

    $("#export-csv-button").click(function(){
        var request = $.ajax({
            type : "GET",
            url : "export.php",
            data : {
                "type" : 'csv-all',
                "productId" : -1
            },
            dataType : 'json'
        });
        request.done(function (response) {
            try {
                if(response['tag'] === 'positive') {
                    window.location.href="download.php?url=exports/products.csv";
                    console.log(response);
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
    });

    $("#export-xml-button").click(function(){
        var request = $.ajax({
            type : "GET",
            url : "export.php",
            data : {
                "type" : 'xml-all',
                "productId" : -1
            },
            dataType : 'json'
        });
        request.done(function (response) {
            try {
                if(response['tag'] === 'positive') {
                    window.location.href="download.php?url=exports/products.xml";
                    console.log(response);
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
    });

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
                for (var i = 0; i < products.length; ++i) {
                    constructProduct(products[i]);
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