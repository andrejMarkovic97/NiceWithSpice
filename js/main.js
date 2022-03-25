$('#addItemForm').submit(function () {
    event.preventDefault;
    console.log("Add was started");
    const $form = $(this);
    const $inputs = $form.find('input, text, number, file, button');

    const serialization = $form.serialize();
    console.log(serialization);

    $inputs.prop('disabled', true);

    req = $.ajax({
        url: '../hander/add.php',
        type: 'post',
        data: serialization,
    });
    req.done(function (res, textstatus, jqXHR) {
        if (res == "Success") {
            alert("Product successfully added!");
            console.log("Product added");
            location.reload(true);
        } else console.log("Product not added!" + res);
        console.log(res);
    });

    req.fail(function (jqHXR, textstatus, errorThrown) {
        console.error('Error :' + textstatus, errorThrown);
    });
});