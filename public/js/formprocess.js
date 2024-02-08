$(function () {
    $('#add').on('click', function (event) {
        
        var formOrder = $('#formOrder')
        const _token = $('input[type="hidden"]').attr('value')
        if(formOrder[0].checkValidity) {
            event.preventDefault()
            $.ajax({
                url: "{{route('admin.product.store')}}",
                type: "POST",
                data: formOrder,
                success: function (response) {
                    console.log(response)
                }, 
                statusCode: {
                    405: function(e) {
                        console.log(e)
                    }
                }
            })
        }
    })
})