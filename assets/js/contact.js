$(function () {

    $("#send-message").on("click", function () {

        $.ajax({
            url: "src/contact.php",
            type: "POST",
            data: new FormData(document.getElementById('contact-form')),
            contentType: false,
            cache: false,
            processData: false,
            success: function (response) {
                let jsonResp = JSON.parse(response);
                let statusMessage = $("#status-message");
                if (jsonResp.fail) statusMessage.html(jsonResp.fail).addClass("text-danger");
                else statusMessage.html(jsonResp.pass);
            }
        })

        $("input:not(:button)").val("");
        $("textarea").val("");
        $("#status-message").removeClass("text-danger");
    })

})