
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

function sortAsc() {
    $.ajax({
        type: 'POST',
        url: '../handler/sort.php',
        data: { filter: "ASC" },
        success: function (data) {
            console.log("Success");
            location.reload();
        },
        error: function (data) {
            console.log("failure");
        }
    });
}



