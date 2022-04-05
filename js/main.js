
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
$('.sortButton').click(function () {
    var val = $(this).val();

    $.ajax({

        type: "GET",
        data: {
            filter: val,
        },
        success: function (data) {
            console.log("Success");
            location.reload();
        }

    });
});


