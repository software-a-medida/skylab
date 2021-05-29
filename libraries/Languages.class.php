<?php

defined('_EXEC') or die;

class Languages
{
    static public function email($key)
    {
        $langs = [
            'thanks_for_schedule_an_appointment_with_us' => [
                'es' => 'Gracias por agendar tu cita con nosotros',
                'en' => 'Thank you for scheduling your appointment with us.',
                'pr' => 'Obrigado por agendar sua consulta conosco.'
            ],
            'your_appointment' => [
                'es' => 'Tu cita',
                'en' => 'Your date',
                'pr' => 'Seu encontro'
            ],
            'your_token' => [
                'es' => 'Tu folio',
                'en' => 'Your folio',
                'pr' => 'Seu fólio'
            ],
            'test_type' => [
                'es' => 'Tipo de prueba',
                'en' => 'Type of test',
                'pr' => 'Tipo de teste'
            ],
            'covid_pcr' => [
                'es' => 'COVID-19 PCR',
                'en' => 'COVID-19 PCR',
                'pr' => 'PCR COVID-19'
            ],
            'covid_an' => [
                'es' => 'COVID-19 Antígenos',
                'en' => 'COVID-19 Antigens',
                'pr' => 'Antígenos COVID-19'
            ],
            'covid_ac' => [
                'es' => 'COVID-19 Anticuerpos',
                'en' => 'COVID-19 Antibodies',
                'pr' => 'Anticorpos COVID-19'
            ],
            'tests_number' => [
                'es' => 'Número de pruebas',
                'en' => 'Number of tests',
                'pr' => 'Número de testes'
            ],
            'test_place' => [
                'es' => 'Lugar de prueba',
                'en' => 'Test site',
                'pr' => 'Site de teste'
            ],
            'i_will_go' => [
                'es' => 'Yo iré a la toma',
                'en' => 'I will go to the take',
                'pr' => 'Eu irei para o soquete'
            ],
            'i_want_to_do_in_my_hotel' => [
                'es' => 'Quiero que vengan a mi hotel a realizar la toma',
                'en' => 'I want you to come to my hotel to take the shot',
                'pr' => 'Quero que venha ao meu hotel para tirar a foto'
            ],
            'i_want_them_to_come_look_for_me' => [
                'es' => 'Quiero que me vengan a buscar a mi hotel para llevarme a la toma',
                'en' => 'I want to be picked up at my hotel to take me to the shot',
                'pr' => 'Eu quero ser pego no meu hotel para me levar para a foto'
            ],
            'test_zone' => [
                'es' => 'Zona de prueba',
                'en' => 'Test zone',
                'pr' => 'Zona de teste'
            ],
            'cancun_zh' => [
                'es' => 'Cancún Zona Hotelera',
                'en' => 'Cancun Hotel Zone',
                'pr' => 'Cancun Hotel Zone'
            ],
            'cancun_ib' => [
                'es' => 'Cancún Isla Blanca',
                'en' => 'Cancun Isla Blanca',
                'pr' => 'Cancun Isla Blanca'
            ],
            'isla_mujeres' => [
                'es' => 'Isla Mujeres',
                'en' => 'Isla Mujeres',
                'pr' => 'Isla Mujeres'
            ],
            'playa_del_carmen' => [
                'es' => 'Playa del Carmen',
                'en' => 'Playa del Carmen',
                'pr' => 'Playa del Carmen'
            ],
            'tulum' => [
                'es' => 'Tulúm',
                'en' => 'Tulum',
                'pr' => 'Tulum'
            ],
            'riviera_maya_hotels' => [
                'es' => 'Hoteles en la Riviera Maya',
                'en' => 'Hotels in the Riviera Maya',
                'pr' => 'Hotéis na Riviera Maya'
            ],
            'your_hotel' => [
                'es' => 'Tu hotel',
                'en' => 'Your hotel',
                'pr' => 'Seu hotel'
            ],
            'test_date' => [
                'es' => 'Fecha de toma',
                'en' => 'Date taken',
                'pr' => 'Data da tomada'
            ],
            'test_hour' => [
                'es' => 'Hora de toma',
                'en' => 'Take time',
                'pr' => 'Tome um tempo'
            ],
            'first_and_last_name' => [
                'es' => 'Nombre y apellidos',
                'en' => 'Name and surname',
                'pr' => 'Nomes e sobrenomes'
            ],
            'email' => [
                'es' => 'Correo electrónico',
                'en' => 'Email',
                'pr' => 'Correio eletrônico'
            ],
            'phone' => [
                'es' => 'Telefono',
                'en' => 'Phone',
                'pr' => 'Telefone'
            ],
            'please_use_your_face_mask' => [
                'es' => 'Porfavor usa en todo momento tu cubrebocas y manten tu sana distancia ¡Vamos a cuidarnos entre todos! Dentro de la toma, únicamente podrán ingresar los pacientes que se realizaran la prueba.',
                'en' => 'Please wear your mask at all times and keep your distance. Lets take care of each other! Within the intake, only the patients who will undergo the test will be able to enter.',
                'pr' => 'Por favor, use sua máscara o tempo todo e mantenha distância. Vamos cuidar uns dos outros! Dentro da ingestão, apenas os pacientes que farão o teste poderão entrar.'
            ],
            'vcard' => [
                'es' => 'Tarjeta de contacto',
                'en' => 'Contact card',
                'pr' => 'Cartão de contato'
            ],
            'power_by' => [
                'es' => 'Power by',
                'en' => 'Power by',
                'pr' => 'Power by'
            ],
            'development_by' => [
                'es' => 'Desarrollado por',
                'en' => 'Developed by',
                'pr' => 'Desenvolvido por'
            ]
        ];

        return $langs[$key][Session::get_value('lang')];
    }
}
