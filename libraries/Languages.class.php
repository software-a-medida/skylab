<?php

defined('_EXEC') or die;

class Languages
{
    static public function email($key)
    {
        $langs = [
            'thanks_for_schedule_an_appointment_with_us' => [
                'es' => 'Gracias por agendar tu cita con nosotros',
                'en' => '',
                'pr' => ''
            ],
            'your_appointment' => [
                'es' => 'Tu cita',
                'en' => '',
                'pr' => ''
            ],
            'your_token' => [
                'es' => 'Tu folio',
                'en' => '',
                'pr' => ''
            ],
            'test_type' => [
                'es' => 'Tipo de prueba',
                'en' => '',
                'pr' => ''
            ],
            'covid_pcr' => [
                'es' => 'COVID-19 PCR',
                'en' => '',
                'pr' => ''
            ],
            'covid_an' => [
                'es' => 'COVID-19 Antígenos',
                'en' => '',
                'pr' => ''
            ],
            'covid_ac' => [
                'es' => 'COVID-19 Anticuerpos',
                'en' => '',
                'pr' => ''
            ],
            'tests_number' => [
                'es' => 'Numero de pruebas',
                'en' => '',
                'pr' => ''
            ],
            'test_place' => [
                'es' => 'Lugar de prueba',
                'en' => '',
                'pr' => ''
            ],
            'i_will_go' => [
                'es' => 'Yo iré a la toma',
                'en' => '',
                'pr' => ''
            ],
            'i_want_to_do_in_my_hotel' => [
                'es' => 'Quiero que vengan a mi hotel a realizar la toma',
                'en' => '',
                'pr' => ''
            ],
            'i_want_them_to_come_look_for_me' => [
                'es' => 'Quiero que me vengan a buscar a mi hotel para llevarme a la toma',
                'en' => '',
                'pr' => ''
            ],
            'test_zone' => [
                'es' => 'Zona de prueba',
                'en' => '',
                'pr' => ''
            ],
            'cancun_zh' => [
                'es' => 'Cancún Zona Hotelera',
                'en' => '',
                'pr' => ''
            ],
            'cancun_ib' => [
                'es' => 'Cancún Isla Blanca',
                'en' => '',
                'pr' => ''
            ],
            'isla_mujeres' => [
                'es' => 'Isla Mujeres',
                'en' => '',
                'pr' => ''
            ],
            'playa_del_carmen' => [
                'es' => 'Playa del Carmen',
                'en' => '',
                'pr' => ''
            ],
            'tulum' => [
                'es' => 'Tulúm',
                'en' => '',
                'pr' => ''
            ],
            'riviera_maya_hotels' => [
                'es' => 'Hoteles en la Riviera Maya',
                'en' => '',
                'pr' => ''
            ],
            'your_hotel' => [
                'es' => 'Tu hotel',
                'en' => '',
                'pr' => ''
            ],
            'test_date' => [
                'es' => 'Fecha de toma',
                'en' => '',
                'pr' => ''
            ],
            'test_hour' => [
                'es' => 'Hora de toma',
                'en' => '',
                'pr' => ''
            ],
            'first_and_last_name' => [
                'es' => 'Nombre y apellidos',
                'en' => '',
                'pr' => ''
            ],
            'email' => [
                'es' => 'Correo electrónico',
                'en' => '',
                'pr' => ''
            ],
            'phone' => [
                'es' => 'Telefono',
                'en' => '',
                'pr' => ''
            ],
            'please_use_your_face_mask' => [
                'es' => 'Porfavor usa en todo momento tu cubrebocas y manten tu sana distancia ¡Vamos a cuidarnos entre todos! Dentro de la toma, únicamente podrán ingresar los pacientes que se realizaran la prueba.',
                'en' => '',
                'pr' => ''
            ],
            'power_by' => [
                'es' => 'Poder por',
                'en' => '',
                'pr' => ''
            ],
            'development_by' => [
                'es' => 'Desarrollado por',
                'en' => '',
                'pr' => ''
            ]
        ];

        return $langs[$key][Session::get_value('lang')];
    }
}
