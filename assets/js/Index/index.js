'use strict';

$(document).ready(function()
{
    $('form[name="contact_us"]').on('submit', function(e)
    {
        e.preventDefault();

        var form = $(this);

        $.ajax({
            type: 'POST',
            data: form.serialize() + '&action=contact_us',
            processData: false,
            cache: false,
            dataType: 'json',
            success: function(response)
            {
                if (response.status == 'success')
                {
                    alert(response.message);

                    location.reload();
                }
                else if (response.status == 'error')
                {
                    var errors = '';

                    for (var i = 0; i < response.errors.length; i++)
                        errors = errors + response.errors[i] + '\n';

                    alert(errors);
                }
            }
        });
    });
});

function map()
{
    var locations = [
        {
            title: 'SkyLab',
            lat: 21.160298,
            lng: -86.837935,
            zoom: 18
        }
    ];

    var map = new google.maps.Map(document.getElementById('map'), {
        zoom: locations[0].zoom,
        center: {
            lat: locations[0].lat,
            lng: locations[0].lng
        }
    });

    var marker = new google.maps.Marker({
        position: {
            lat: locations[0].lat,
            lng: locations[0].lng
        },
        map: map
    });

    var title = new google.maps.InfoWindow({
        content: locations[0].title
    });

    title.open(map, marker);
}
