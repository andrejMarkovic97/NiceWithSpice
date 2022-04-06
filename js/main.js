
function deleteProduct(id) {
    $.ajax({
        type: "POST",
        url: "../handler/deleteProduct.php",
        data: {
            delete_id: id,
        },
        success: function (data) {
            console.log("Success");
            location.reload();
        }
    });
};
$('.addToCartForm').submit(function (e) {
    e.preventDefault();
});

$('.addToCart').click(function (e) {
    alert("Product added to cart !");
})




