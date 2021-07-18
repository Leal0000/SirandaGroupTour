(function($){
    $("#formlogin").submit(function(ev){
        $("#alert").html("");
        ev.preventDefault();
        $.ajax({
            url: 'index.php/Welcome/login',
            type: 'POST',
            data: $(this).serialize(),
            success: function(data){
                var json = JSON.parse(data);
                console.log(json);
                window.location.replace(json.url);
            },
            statusCode: {
                401: function(xhr){
                    var json = JSON.parse(xhr.responseText);
                    console.log(json);
                    $("#alert").html('<div class="alert alert-danger" role="alert">' + json.error + '</div>');
                }
            },

        });
    })
})(jQuery)