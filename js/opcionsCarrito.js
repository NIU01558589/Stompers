// addToCart.js

function addToCart(productId) {
    $.ajax({
        type: 'POST',
        url: 'addCart.php',
        data: { productId: productId },
        dataType: 'json',
        success: function(response) {
            console.log(response);
            $('#cart_count').text(response.cart_count);
        },
        error: function(error) {
            console.log(error);
        }
    });
}
