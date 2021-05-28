<?php

defined('_EXEC') or die;

$this->dependencies->add(['other', '<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBLCea8Q6BtcTHwY3YFCiB0EoHE5KnsMUE&callback=map"></script>']);
$this->dependencies->add(['js', '{$path.js}Index/index.js?v=1.1']);

?>

<main>
    <section id="inicio" class="pos-relative" style="height:100vh;">
        <figure style="height:100%;">
            <img data-desktop src="{$path.images}home_desktop.jpg" alt="Background" class="img-cover">
            <img data-mobile-block src="{$path.images}home_mobile.jpg" alt="Background" class="img-cover">
        </figure>
        <div class="pos-absolute d-flex align-items-center text-center text-md-left p-40" style="top:0px;right:0px;bottom:0px;left:0px;background-color:rgba(33,150,243,0.6);">
            <div class="container">
                <h2 class="m-b-20 text-center text-md-left text-light" style="font-size:60px;">{$lang.tests_of}</h2>
                <h1 class="d-inline-block m-b-20 text-center text-md-left text-light" style="font-size:60px;background-color:#f44336;"><strong>COVID-19</strong></h1>
                <p class="m-b-20 text-justify text-md-left text-light" style="font-size:24px;">{$lang.find_out_if_you_have_covid}</p>
                <a href="#pruebas-covid-19" class="btn btn-light">{$lang.more_information}</a>
            </div>
        </div>
    </section>
    <section id="contactanos" class="p-40">
        <div class="container">
            <div class="row">
                <div class="col-md-6 m-b-40 m-b-md-0">
                    <h2 class="m-b-20 text-center text-md-left" style="font-size:40px;">{$lang.schedule_an_appointment}</h2>
                    <p class="m-b-40 text-justify" style="font-size:18px;">{$lang.schedule_an_appointment_text}</p>
                    <div class="row">
                        <div class="col-md-6 m-b-40 m-b-md-0">
                            <h6 class="m-b-10 text-uppercase"><strong>{$lang.address}</strong></h6>
                            <p>{$lang.address_text}</p>
                        </div>
                        <div class="col-md-6">
                            <h6 class="m-b-10 text-uppercase"><strong>{$lang.attention_schedule}</strong></h6>
                            <p class="m-b-5">{$lang.attention_schedule_text_1}</p>
                            <p class="m-b-5">{$lang.attention_schedule_text_2}</p>
                            <p>{$lang.attention_schedule_text_3}</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <form name="contact_us">
                        <div class="row no-gutters">
                            <div class="col-md-4 p-l-0 p-l-md-5 m-b-5">
                                <select name="test_type" class="p-l-10 p-r-10" style="width:100%;height:50px;border:none;background-color:#f5f5f5;">
                                    <option value="" class="d-none">{$lang.test_type}</option>
                                    <option value="COVID-19 PCR">COVID-19 PCR</option>
                                    <option value="COVID-19 Antígeno">COVID-19 {$lang.antigen}</option>
                                    <option value="COVID-19 Anticuerpos">COVID-19 {$lang.anticorps}</option>
                                </select>
                            </div>
                            <div class="col-md-4 p-l-0 p-l-md-5 m-b-5">
                                <input type="number" name="tests_number" min="1" placeholder="{$lang.tests_number}" class="p-l-20 p-r-20" style="width:100%;height:50px;border:none;background-color:#f5f5f5;">
                            </div>
                            <div class="col-md-4 p-l-0 p-l-md-5 m-b-5">
                                <select name="place" class="p-l-15 p-r-15" style="width:100%;height:50px;border:none;background-color:#f5f5f5;">
                                    <option value="" class="d-none">{$lang.place}</option>
                                    <option value="En surcursal">{$lang.i_will_go_to_the_branch}</option>
                                    <option value="En hotel">{$lang.in_my_hotel}</option>
                                </select>
                            </div>
                            <div class="col-md-12 p-l-0 p-l-md-5 m-b-5">
                                <input type="text" name="name" placeholder="{$lang.name}" class="p-l-20 p-r-20" style="width:100%;height:50px;border:none;background-color:#f5f5f5;">
                            </div>
                            <div class="col-md-6 p-l-0 p-l-md-5 m-b-5">
                                <input type="email" name="email" placeholder="{$lang.email}" class="p-l-20 p-r-20" style="width:100%;height:50px;border:none;background-color:#f5f5f5;">
                            </div>
                            <div class="col-md-6 p-l-0 p-l-md-5 m-b-5">
                                <input type="text" name="phone" placeholder="{$lang.phone}" class="p-l-20 p-r-20" style="width:100%;height:50px;border:none;background-color:#f5f5f5;">
                            </div>
                            <div class="col-md-12 p-l-0 p-l-md-5 m-b-5">
                                <textarea name="observations" placeholder="{$lang.observations}" class="p-20" style="width:100%;height:200px;border:none;background-color:#f5f5f5;"></textarea>
                            </div>
                            <div class="col-md-12 text-right">
                                <button type="submit" class="btn btn-b-none" style="background-color:#f44336;">{$lang.submit}</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <section id="map" style="height:60vh;"></section>
    <section class="p-40">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-3 m-b-20 m-b-md-0">
                    <figure class="d-flex align-items-center justify-content-center" style="height:74px;">
                        <img src="{$path.images}secretaria_salud.png" alt="Secretaría de salud" style="height:100%;">
                    </figure>
                </div>
                <div class="col-4 col-md-2 m-b-20 m-b-md-0">
                    <figure class="d-flex align-items-center justify-content-center" style="height:74px;">
                        <img src="{$path.images}cofepris.png" alt="COFEPRIS" style="height:100%;">
                    </figure>
                </div>
                <div class="col-4 col-md-2 m-b-20 m-b-md-0">
                    <figure class="d-flex align-items-center justify-content-center" style="height:74px;">
                        <img src="{$path.images}qroo_gobierno_1.png" alt="Gobierno de Qroo" style="height:100%;">
                    </figure>
                </div>
                <div class="col-4 col-md-2 m-b-20 m-b-md-0">
                    <figure class="d-flex align-items-center justify-content-center" style="height:74px;">
                        <img src="{$path.images}qroo_gobierno_2.png" alt="Qroo Mas y mejores oportunidades" style="height:100%;">
                    </figure>
                </div>
                <div class="col-12 col-md-3">
                    <figure class="d-flex align-items-center justify-content-center" style="height:74px;">
                        <img src="{$path.images}qroo_sesa.png" alt="SESA" style="height:100%;">
                    </figure>
                </div>
            </div>
        </div>
    </section>
</main>
