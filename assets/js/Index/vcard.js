'use strict';

$(document).ready(function()
{
    $('[data-action="share"]').on('click', function()
    {
        navigator.share({
            title: $(this).data('title'),
            text: $(this).data('text'),
            url: $(this).data('url')
        });
    });
});
