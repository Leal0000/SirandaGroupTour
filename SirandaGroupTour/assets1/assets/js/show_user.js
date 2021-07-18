(function(){
    $("tr td #delete").click(function(ev){
        ev.preventDefault();
        console.log($(this).parents('tr').find('th').text());
        var nombre = $(this).parents('tr').find('td:first').text();
        var id = $(this).attr('data-id');
        var self = this;
         Swal.fire({
        title: 'Are you sure of delete the register of '+nombre + ' ?',
        text: "¡The register was deleted permanently!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!',
        cancelButtonText: 'Nou'
      }).then((result) => {
        if (result.isConfirmed) {
            //ajax ..................
            $.ajax({
                type: 'POST',
                url: 'eliminarViaje',
                data: {'id':id},
                success: function(){
                    $(self).parents('tr').remove();
                     Swal.fire(
                        'Deleted!',
                        'Your register has been deleted.',
                        'success'
                    )
                }, statusCode: {
                    400: function(data){
                        var json = JSON.parse(data.responseText);
                        Swal.fire(
                            'Deleted!',
                            json.msg,
                            'error'
                        )
                    },
                    401: function(data){
                        var json = JSON.parse(data.responseText);
                        Swal.fire(
                            'Deleted!',
                            json.msg,
                            'error'
                        )
                    }
                }
            })
         
        }
      })
    })
   
})();