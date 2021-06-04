'use strict';

$(document).ready(function()
{
    $('[name="place"]').on('change', function()
    {
        if ($(this).val() == 'i_want_to_do_in_my_hotel' || $(this).val() == 'i_want_them_to_come_look_for_me')
        {
            $('[name="zone"]').parent().removeClass('d-none');
            $('[name="hotel"]').parent().removeClass('d-none');
        }
        else
        {
            $('[name="zone"]').parent().addClass('d-none');
            $('[name="hotel"]').parent().addClass('d-none');
        }
    });

    $('form[name="schedule_an_appointment"]').on('submit', function(e)
    {
        e.preventDefault();

        var form = $(this);

        $.ajax({
            type: 'POST',
            data: form.serialize() + '&action=schedule_an_appointment',
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
    var title = $('#map').data('title');
    var lat = $('#map').data('lat');
    var lng = $('#map').data('lng');
    var zoom = $('#map').data('zoom');

    var locations = [
        {
            title: title,
            lat: lat,
            lng: lng,
            zoom: zoom
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
        map: map,
        icon: '/assets/images/marker.png',
        title: locations[0].title
    });

    // var title = new google.maps.InfoWindow({
    //     content: locations[0].title
    // });
    //
    // title.open(map, marker);
}
