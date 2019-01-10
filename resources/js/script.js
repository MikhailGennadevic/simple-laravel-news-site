$(document).ready(function(){

    $('#post-body').summernote({height: 300});
    $('#post-summary').summernote();

    $('.post-title').on('click', function (event) {
        event.preventDefault();
        var link = $(this);
        var href = link.attr('href');
        var modal = $('#exampleModalLong').modal({show:false});

        $.get( href, function( data ) {
            modal.find('.modal-title').text(data.title);
            modal.find('.modal-body').html(data.body);
            modal.modal('show');
        });

    });

    $('.del-post-link').on('click', function(e) {
        e.preventDefault();
        var url = $(this).attr('href');
        var id = $(this).data('id');
        var tr = $(this).closest('tr');
        Swal({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.value) {
            $.ajax({
                url: url,
                type: 'DELETE',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(result) {
                    Swal(
                        'Deleted!',
                        'Your file has been deleted.',
                        'success'
                    );
                    tr.remove();
                }
            });

            }
         });
    });
});
