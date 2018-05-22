//Global Variables

var page = 1;

var max_page = 1;

var min_page = 1;

var old_post = 'visible';

var new_post = 'visible';

function old_on_click_handler()
{
    page += 1;
    if(page === 0 || page < 0 || page > max_page)
    {
        page -= 1;
        alert("Page Index Error, Undefined page index");
        return null;
    }
    get_new_news_list();
}

function new_on_click_handler()
{
    page -= 1;
    if(page === 0 || page < 0 || page > max_page)
    {
        page += 1;
        alert("Page Index Error, Undefined page index");
        return null;
    }
    get_new_news_list();
}

$(document).ready(function(){
   on_page_load();
});

function on_page_load()
{
    get_max_page();

    set_navbuttons();
}

function set_new_nav_buttons()
{
    if(page === max_page && page === min_page)
    {
        old_post = 'hidden';
        new_post = 'hidden';
    }
    else if(page === max_page)
    {
        old_post = 'hidden';
        new_post = 'visible';
    }
    else if(page === min_page)
    {
        old_post = 'visible';
        new_post = 'hidden';
    }
    else if(page < max_page)
    {
        old_post = 'visible';
        new_post = 'visible';
    }
}

function set_navbuttons()
{
    if(page === max_page && page === min_page)
    {
        $('#old_posts')[0].style.visibility = 'hidden';
        $('#new_posts')[0].style.visibility = 'hidden';
        old_post = 'hidden';
        new_post = 'hidden';
    }
    else if(page === max_page)
    {
        $('#old_posts')[0].style.visibility = 'hidden';
        $('#new_posts')[0].style.visibility = 'visible';
        old_post = 'hidden';
        new_post = 'visible';
    }
    else if(page === min_page)
    {
        $('#old_posts')[0].style.visibility = 'visible';
        $('#new_posts')[0].style.visibility = 'hidden';
        old_post = 'visible';
        new_post = 'hidden';
    }
    else if(page < max_page)
    {
        $('#old_posts').style.visibility = 'visible';
        $('#new_posts').style.visibility = 'visible';
        old_post = 'visible';
        new_post = 'visible';
    }
}

function set_max_page(page)
{
    max_page = parseInt(page);
}

function get_max_page()
{
    $.ajax({
       url:api_link,
        dataType: 'text',
        async: false,
        success: function(data)
        {
            set_max_page(data);
        }
    });
}

function clear_news_list(news_html)
{
    set_new_nav_buttons();
    var nav_buttons = '<div class="clearfix">\n' +
        '            <button id="old_posts" type="button" class="btn btn-primary float-right" onclick="old_on_click_handler()" style="visibility:' + old_post + '">Older Posts &rarrtl;</button>\n' +
        '            <button id="new_posts" type="button" class="btn btn-primary float-right" onclick="new_on_click_handler()" style="visibility:' + new_post + '">&larrtl; New Posts</button>\n' +
        '          </div>';
    $('#news_feed').fadeOut(500, function()
    {
        $(this).empty();
        $(this).append(news_html).show().fadeIn(500);
        $(this).append(nav_buttons).show().fadeIn(500);
        console.log(page);
        console.log(max_page);
        console.log(new_post);
        console.log(old_post);
        console.log(nav_buttons);
    });
}

function get_new_news_list()
{
    data_info = {
        '_token': token,
        'page': page
    };
    $.ajax({
        type: "POST",
        url:api_link_2,
        dataType: 'json',
        data: data_info,
        success: function(data)
        {
            var news = '';
            data.forEach(function(element)
            {
                news += '<div class="post-preview">\n' +
                    '              <a href="' + element['link'] + '">\n' +
                    '                <h2 class="post-title">\n' +
                    '                  ' + element['title'] + '\n' +
                    '                </h2>\n' +
                    '              </a>\n' +
                    '              <p class="post-meta">Posted by\n' +
                    '                <b>' + element['author'] + '</b>\n' +
                    '                ' + element['created_at'] + '</p>\n' +
                    '            </div>\n' +
                    '            <hr>';
            });
            clear_news_list(news);
        }
    })
}