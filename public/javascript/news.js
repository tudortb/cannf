$(function() {

    getNewsData();

});

function getNewsData() {

    var request = $.ajax({
        type : "GET",
        url : "../core/terminal.php",
        data : {
            "step" : 'news',
            "userId" : userId
        },
        dataType : 'json'
    });
    request.done(function (response) {
        try {
            if(response['tag'] === 'positive') {

                var news = response['message']['news'];
                for (var i = 0; i < news.length; ++i) {
                    printNewsUnit(news[i]);
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

function printNewsUnit(unit) {
    var placeholder = $("#list");

    var result = "<p>";

    result += unit['time'] + ": ";

    if(unit['isAdmin']>0) {
        result += "Admin @";
    } else {
        result += "User @";
    }

    result += unit['username'] + " ";

    if(unit['type'] == 1) {
        result += "added the product: ";
        result += unit['product'] + ".";
    } else if(unit['type'] == 2) {
        result += "deleted a product.";
    }

    result += "</p>"

    placeholder.append(result);
}