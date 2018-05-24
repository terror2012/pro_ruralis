/**
 * Created by Asus on 5/24/2018.
 */

$('#month').change(function()
{
   get_images();
});
$('#year').change(function()
{
    get_images();
});

function get_images()
{
    data_info = {
        '_token': token,
        'month' : $('#month').val(),
        'year' : $('#year').val()
    };
    $.ajax({
        type: "POST",
        url:api_link,
        data: data_info,
        success: function(data)
        {
            if(data === '231')
                clear_images();
            else
            {
                ajax_images_controller(data)
            }
        }
    })
}
function clear_images()
{
    $('#image_wrapper').fadeOut(500, function()
    {
        $('#image_wrapper').hide();
        $('#image_wrapper').empty();
    });
}

function ajax_images_controller(data)
{
    $('#image_wrapper').fadeOut(500, function()
    {
        $('#image_wrapper').hide();
        $('#image_wrapper').empty();
        data.forEach(function(element)
        {
           var html = '<div class="col-lg-4 col-md-6">' +
               '<div class="gallery-item wow">' +
            '<a href="' + element['image'] + '" class="gallery-popup">' +
            '<img src="' + element['image'] + '" alt="' + element['alt'] + '">' +
            '</a>' +
            '</div>' +
            '</div>';
            $('#image_wrapper').append(html);
        });
    });
    $('#image_wrapper').fadeIn(500);
}