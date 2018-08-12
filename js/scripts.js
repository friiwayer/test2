function loader(idp)
{
    $.post("json.php", { edit: 1, idp: idp })
        .done(function( data ) {
            var data = $.parseJSON(data);
            var modal = $('body').find('#editnews');
            dropmodal('editnews');
            var clr = ['postID','postTitle','postDesc','postCont'];

            for(var i = 0; i < clr.length;i++)
            {
                modal.find('[name='+clr[i]+']').val(data[clr[i]]);
            }
    });
}

function dropmodal($hash)
{
    var modal = $('body').find('#'+$hash),
    clr = ['postID','postTitle','postDesc','postCont'];

    for(var i = 0; i < clr.length;i++)
    {
        modal.find('[name='+clr[i]+']').val('');
    }
}
$(function () {

    $('#editnews').find('form').submit(function (e) {
        e.preventDefault();
        e.stopPropagation();
        var form = $(this);
        var formData1 = new FormData($(this)[0]);

        $.ajax({
            url: 'json.php',
            type: 'POST',
            data: formData1,
            async: false,
            cache: false,
            contentType: false,
            enctype: 'multipart/form-data',
            processData: false,
            success: function (response) {
                if(response.length)
                {
                    $('.posts').find('div[data-id="'+$(form).find('input[name=postID]').val()+'"]').html(response);
                    $('#editnews').modal('toggle');
                }
            }
        });

    });

    $('#addnews form').submit(function (e) {
        e.preventDefault();
        e.stopPropagation();

        var formData = new FormData($(this)[0]);

        $.ajax({
            url: 'json.php',
            type: 'POST',
            data: formData,
            async: false,
            cache: false,
            contentType: false,
            enctype: 'multipart/form-data',
            processData: false,
            success: function (response) {
                if(response.length)
                {
                    $('.posts').html(response);
                    $('#addnews').modal('toggle');
                }
            }
        });

    });

    $('body').on('click', 'a.pdel', function(e){
        e.preventDefault();
        var pid = $(this).data('id');
        $.post( "json.php", { deltpost: pid})
            .done(function( data ) {
                $('.posts').find('div[data-id="'+pid+'"]').remove();
            });
    });

    $('body').on('click', 'a.editjs', function(e){
        e.preventDefault();
        var idc = $(this).data('id');
        console.log(idc);
        loader(idc);
    });

});