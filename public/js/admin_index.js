function add_article_index(link)
{
    $.ajax({
        type: "GET",
        url: link,
        dataType:'json',
        success: function(message)
        {
            $('#wrapper_container').empty();
            $('#wrapper_container').html(message['html']);
        },
        failure: function(message)
        {
          console.log(message['error']);
        }
    })
}

image;

function previewImage()
{
    var preview = document.querySelector('#preview');
    var file = document.querySelector('#image').files[0];
    var reader = new FileReader();
    reader.addEventListener("load", function() {
        preview.src = reader.result;
        image = reader.result;
    }, false);
    if(file)
    {
        reader.readAsDataURL(file);
    }
}

function submit_article(link)
{
    $(document).on('submit', '#news', function(){event.preventDefault()});
    var data = {
        'title':$('#title').val(),
        'post':$('#post').val(),
        'image': image
    };
    console.log(data);
    $.ajax({
        type: "POST",
        header: {'X-CSRF-TOKEN': token},
        url: link,
        data: data,
        success: function(message)
        {
            console.log(message);
        },
        failure: function(message){
            console.log(message);
        }

    })
}