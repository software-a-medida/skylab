<?php

defined('_EXEC') or die;

$this->dependencies->add(['other', '<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBLCea8Q6BtcTHwY3YFCiB0EoHE5KnsMUE&callback=map"></script>']);
$this->dependencies->add(['js', '{$path.js}Index/index.js?v=1.1']);

?>

<main>
    <section id="cover" class="pos-relative" style="height:100vh;">
        <figure style="height:100vh;">
            <img data-desktop src="{$path.images}cover_background_desktop.jpg" alt="Background" class="img-cover">
            <img data-mobile-block src="{$path.images}cover_background_mobile.jpg" alt="Background" class="img-cover">
        </figure>
        <div class="pos-absolute d-flex align-items-center p-tb-40" style="top:0px;right:0px;bottom:0px;left:0px;background-color:rgba(33,150,243,0.6);">
            <div class="container">
                <h2 class="m-b-20 text-center text-md-left text-light" style="font-family:'Montserrat-Regular';font-size:60px;">{$lang.tests_of}</h2>
                <h1 class="d-inline-block m-b-20 text-center text-md-left text-light" style="font-family:'Montserrat-Regular';font-size:60px;background-color:#f44336;"><strong>COVID-19</strong></h1>
                <p class="m-b-20 text-center text-md-left text-light" style="font-size:24px;">{$lang.find_out_if_you_have_covid}</p>
                <div class="text-center text-md-left">
                    <a href="#pruebas-covid-19" class="btn btn-light">{$lang.more_information}</a>
                </div>
            </div>
        </div>
    </section>
    <section id="pruebas-covid-19" class="p-tb-40">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-md-6 order-2 order-md-1">
                    <h2 class="m-b-40 text-center text-md-left" style="font-size:40px;">{$lang.analysis_laboratory}</h2>
                    <p class="text-justify" style="font-size:18px;">{$lang.we_are_skylab}</p>
                </div>
                <div class="col-md-6 order-1 order-md-2 m-b-40 m-b-md-0">
                    <figure class="text-center text-md-right">
                        <img src="{$path.images}covid_19_tests_background.png" alt="Background" class="img-fluid" style="max-height:500px;">
                    </figure>
                </div>
            </div>
        </div>
    </section>
    <section id="tests" class="p-b-40">
        <div class="container full">
            <table style="width:100%;">
                <tbody>
                    <tr>
                        <td class="p-0 p-md-10" style="width:33.33%;">
                            <div class="p-20" style="border-radius:4px;background-color:#ff9800;">
                                <h2 class="text-center text-light text-uppercase" style="font-size:30px;"><strong>{$lang.pcr}</strong></h2>
                            </div>
                        </td>
                        <td class="p-0 p-md-10" style="width:33.33%;">
                            <div class="p-20" style="border-radius:4px;background-color:#009688;">
                                <h2 class="text-center text-light text-uppercase" style="font-size:30px;"><strong>{$lang.antigen}</strong></h2>
                            </div>
                        </td>
                        <td class="p-0 p-md-10" style="width:33.33%;">
                            <div class="p-20" style="border-radius:4px;background-color:#3f51b5;">
                                <h2 class="text-center text-light text-uppercase" style="font-size:30px;"><strong>{$lang.anticorps}</strong></h2>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="p-0 p-md-10" style="width:33.33%;">
                            <div class="p-5 p-md-20" style="border-radius:4px;background-color:#f5f5f5;">
                                <p class="text-center">{$lang.pcr_text_1}</p>
                            </div>
                        </td>
                        <td class="p-0 p-md-10" style="width:33.33%;">
                            <div class="p-5 p-md-20" style="border-radius:4px;background-color:#f5f5f5;">
                                <p class="text-center">{$lang.antigen_text_1}</p>
                            </div>
                        </td>
                        <td class="p-0 p-md-10" style="width:33.33%;">
                            <div class="p-5 p-md-20" style="border-radius:4px;background-color:#f5f5f5;">
                                <p class="text-center">{$lang.anticorps_text_1}</p>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="p-0 p-md-10" style="width:33.33%;">
                            <div class="p-5 p-md-20" style="border-radius:4px;background-color:#f5f5f5;">
                                <p class="text-center">{$lang.pcr_text_2}</p>
                            </div>
                        </td>
                        <td class="p-0 p-md-10" style="width:33.33%;">
                            <div class="p-5 p-md-20" style="border-radius:4px;background-color:#f5f5f5;">
                                <p class="text-center">{$lang.antigen_text_2}</p>
                            </div>
                        </td>
                        <td class="p-0 p-md-10" style="width:33.33%;">
                            <div class="p-5 p-md-20" style="border-radius:4px;background-color:#f5f5f5;">
                                <p class="text-center">{$lang.anticorps_text_2}</p>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="p-0 p-md-10" style="width:33.33%;">
                            <div class="p-5 p-md-20" style="border-radius:4px;background-color:#f5f5f5;">
                                <p class="text-center">{$lang.pcr_text_3}</p>
                            </div>
                        </td>
                        <td class="p-0 p-md-10" style="width:33.33%;">
                            <div class="p-5 p-md-20" style="border-radius:4px;background-color:#f5f5f5;">
                                <p class="text-center">{$lang.antigen_text_3}</p>
                            </div>
                        </td>
                        <td class="p-0 p-md-10" style="width:33.33%;">
                            <div class="p-5 p-md-20" style="border-radius:4px;background-color:#f5f5f5;">
                                <p class="text-center">{$lang.anticorps_text_3}</p>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="p-0 p-md-10" style="width:33.33%;">
                            <div class="p-5 p-md-20" style="border-radius:4px;background-color:#f5f5f5;">
                                <p class="text-center">{$lang.pcr_text_4}</p>
                            </div>
                        </td>
                        <td class="p-0 p-md-10" style="width:33.33%;">
                            <div class="p-5 p-md-20" style="border-radius:4px;background-color:#f5f5f5;">
                                <p class="text-center">{$lang.antigen_text_4}</p>
                            </div>
                        </td>
                        <td class="p-0 p-md-10" style="width:33.33%;">
                            <div class="p-5 p-md-20" style="border-radius:4px;background-color:#f5f5f5;">
                                <p class="text-center">{$lang.anticorps_text_4}</p>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="p-0 p-md-10" style="width:33.33%;">
                            <div class="p-5 p-md-20" style="border-radius:4px;background-color:#f5f5f5;">
                                <p class="text-center">{$lang.pcr_text_5}</p>
                            </div>
                        </td>
                        <td class="p-0 p-md-10" style="width:33.33%;">
                            <div class="p-5 p-md-20" style="border-radius:4px;background-color:#f5f5f5;">
                                <p class="text-center">{$lang.antigen_text_5}</p>
                            </div>
                        </td>
                        <td class="p-0 p-md-10" style="width:33.33%;">
                            <div class="p-5 p-md-20" style="border-radius:4px;background-color:#f5f5f5;">
                                <p class="text-center">{$lang.anticorps_text_5}</p>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="p-0 p-md-10" style="width:33.33%;">
                            <div class="p-5 p-md-20" style="border-radius:4px;background-color:#f5f5f5;">
                                <p class="text-center">{$lang.pcr_text_6}</p>
                            </div>
                        </td>
                        <td class="p-0 p-md-10" style="width:33.33%;">
                            <div class="p-5 p-md-20" style="border-radius:4px;background-color:#f5f5f5;">
                                <p class="text-center">{$lang.antigen_text_6}</p>
                            </div>
                        </td>
                        <td class="p-0 p-md-10" style="width:33.33%;">
                            <div class="p-5 p-md-20" style="border-radius:4px;background-color:#f5f5f5;">
                                <p class="text-center">{$lang.anticorps_text_6}</p>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="p-0 p-md-10" style="width:33.33%;">
                            <div class="p-20" style="border-radius:4px;border:2px dashed #ff9800;background-color:#fff;">
                                <h3 class="text-center text-uppercase" style="font-size:40px;color:#ff9800;"><strong>$ 50 USD</strong></h3>
                            </div>
                        </td>
                        <td class="p-0 p-md-10" style="width:33.33%;">
                            <div class="p-20" style="border-radius:4px;border:2px dashed #009688;background-color:#fff;">
                                <h3 class="text-center text-uppercase" style="font-size:40px;color:#009688;"><strong>$ 15 USD</strong></h3>
                            </div>
                        </td>
                        <td class="p-0 p-md-10" style="width:33.33%;">
                            <div class="p-20" style="border-radius:4px;border:2px dashed #3f51b5;background-color:#fff;">
                                <h3 class="text-center text-uppercase" style="font-size:40px;color:#3f51b5;"><strong>$ 24 USD</strong></h3>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
    <section id="care_protocol" class="p-b-40">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-md-6 m-b-40 m-b-md-0">
                    <figure class="text-center text-md-right">
                        <img src="{$path.images}care_protocol_background.png" alt="Background" class="img-fluid" style="max-height:500px;">
                    </figure>
                </div>
                <div class="col-md-6">
                    <h2 class="m-b-40 text-center text-md-left" style="font-size:40px;">{$lang.care_protocol}</h2>
                    <p class="m-b-40 text-justify" style="font-size:18px;">{$lang.please_use_your_face_mask}</p>
                    <div class="row no-gutters">
                        <div class="col-md-4 m-b-0 m-b-md-20">
                            <div class="row no-gutters d-flex align-items-center">
                                <div class="col-2 col-md-4">
                                    <figure class="text-center text-md-left">
                                        <img src="{$path.images}care_protocol_icon_1.png" alt="Icon" class="img-fluid" style="max-height:60px;">
                                    </figure>
                                </div>
                                <div class="col-10 col-md-8 p-l-10">
                                    <h6>{$lang.care_protocol_text_1}</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 m-b-0 m-b-md-20">
                            <div class="row no-gutters d-flex align-items-center">
                                <div class="col-2 col-md-4 order-2 order-md-1">
                                    <figure class="text-center text-md-left">
                                        <img src="{$path.images}care_protocol_icon_2.png" alt="Icon" class="img-fluid" style="max-height:60px;">
                                    </figure>
                                </div>
                                <div class="col-10 col-md-8 order-1 order-md-2 p-l-0 p-l-md-10 p-r-10 p-r-md-0">
                                    <h6 class="text-right text-md-left">{$lang.care_protocol_text_2}</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 m-b-0 m-b-md-20">
                            <div class="row no-gutters d-flex align-items-center">
                                <div class="col-2 col-md-4">
                                    <figure class="text-center text-md-left">
                                        <img src="{$path.images}care_protocol_icon_3.png" alt="Icon" class="img-fluid" style="max-height:60px;">
                                    </figure>
                                </div>
                                <div class="col-10 col-md-8 p-l-10">
                                    <h6>{$lang.care_protocol_text_3}</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 m-b-0 m-b-md-20">
                            <div class="row no-gutters d-flex align-items-center">
                                <div class="col-2 col-md-4 order-2 order-md-1">
                                    <figure class="text-center text-md-left">
                                        <img src="{$path.images}care_protocol_icon_4.png" alt="Icon" class="img-fluid" style="max-height:60px;">
                                    </figure>
                                </div>
                                <div class="col-10 col-md-8 order-1 order-md-2 p-l-0 p-l-md-10 p-r-10 p-r-md-0">
                                    <h6 class="text-right text-md-left">{$lang.care_protocol_text_4}</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="row no-gutters d-flex align-items-center">
                                <div class="col-2 col-md-4">
                                    <figure class="text-center text-md-left">
                                        <img src="{$path.images}care_protocol_icon_5.png" alt="Icon" class="img-fluid" style="max-height:60px;">
                                    </figure>
                                </div>
                                <div class="col-10 col-md-8 p-l-10">
                                    <h6>{$lang.care_protocol_text_5}</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="agenda-una-cita" class="p-b-40">
        <div class="container">
            <div class="row">
                <div class="col-md-6 m-b-40 m-b-md-0">
                    <h2 class="m-b-40 text-center text-md-left" style="font-size:40px;">{$lang.schedule_your_appointment}</h2>
                    <div class="p-20" style="border-radius:4px;border:2px dashed #e0e0e0;">
                        <p class="m-b-20 m-b-md-5 text-justify text-md-left">{$lang.we_will_also_look_for_you}</p>
                        <p class="m-b-10 m-b-md-5"><strong>{$lang.cancun_zh}</strong>: <br data-mobile-block> $ 28 USD</p>
                        <p class="m-b-10 m-b-md-5"><strong>{$lang.cancun_ib}</strong>: <br data-mobile-block> $ 28 USD</p>
                        <p class="m-b-10 m-b-md-5"><strong>{$lang.isla_mujeres}</strong>: <br data-mobile-block> $ 28 USD</p>
                        <p class="m-b-10 m-b-md-5"><strong>{$lang.playa_del_carmen}</strong>: <br data-mobile-block> $ 28 USD</p>
                        <p class="m-b-10 m-b-md-5"><strong>{$lang.tulum}</strong>: <br data-mobile-block> $ 28 USD</p>
                        <p class="m-b-20"><strong>{$lang.riviera_maya_hotels}</strong>: <br data-mobile-block> $ 28 USD</p>
                        <figure class="d-inline-block m-b-20 m-b-md-5 m-r-10">
                            <img src="{$path.images}visa.png" alt="Visa" class="img-fluid" style="max-height:20px;">
                        </figure>
                        <figure class="d-inline-block m-b-20 m-b-md-5 m-r-10">
                            <img src="{$path.images}master_card.png" alt="Visa" class="img-fluid" style="max-height:20px;">
                        </figure>
                        <figure class="d-inline-block m-b-20 m-b-md-5">
                            <img src="{$path.images}american_express.png" alt="Visa" class="img-fluid" style="max-height:20px;">
                        </figure>
                        <p class="text-justify text-md-left">{$lang.accept_card_but_comission_payment}</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <form name="schedule_an_appointment">
                        <div class="row no-gutters">
                            <div class="col-6 col-md-4 p-l-0 p-l-md-10 m-b-10">
                                <h6 class="m-b-5">{$lang.test_type}</h6>
                                <select name="test" class="p-lr-20" style="width:100%;height:50px;border:none;background-color:#f5f5f5;">
                                    <option value="covid_pcr">COVID-19 {$lang.pcr}</option>
                                    <option value="covid_an">COVID-19 {$lang.antigen}</option>
                                    <option value="covid_ac">COVID-19 {$lang.anticorps}</option>
                                </select>
                            </div>
                            <div class="col-6 col-md-4 p-l-10 m-b-10">
                                <h6 class="m-b-5">{$lang.tests_number}</h6>
                                <input type="number" name="paxs" min="1" class="p-lr-20" style="width:100%;height:50px;border:none;background-color:#f5f5f5;">
                            </div>
                            <div class="col-12 col-md-4 p-l-0 p-l-md-10 m-b-10">
                                <h6 class="m-b-5">{$lang.test_place}</h6>
                                <select name="place" class="p-lr-20" style="width:100%;height:50px;border:none;background-color:#f5f5f5;">
                                    <option value="i_will_go">{$lang.i_will_go}</option>
                                    <option value="i_want_to_do_in_my_hotel">{$lang.i_want_to_do_in_my_hotel}</option>
                                    <option value="i_want_them_to_come_look_for_me">{$lang.i_want_them_to_come_look_for_me}</option>
                                </select>
                            </div>
                            <div class="col-6 d-none p-l-0 p-l-md-10 m-b-10">
                                <h6 class="m-b-5">{$lang.test_zone}</h6>
                                <select name="zone" class="p-lr-20" style="width:100%;height:50px;border:none;background-color:#f5f5f5;">
                                    <option value="cancun_zh">{$lang.cancun_zh}</option>
                                    <option value="cancun_ib">{$lang.cancun_ib}</option>
                                    <option value="isla_mujeres">{$lang.isla_mujeres}</option>
                                    <option value="playa_del_carmen">{$lang.playa_del_carmen}</option>
                                    <option value="tulum">{$lang.tulum}</option>
                                    <option value="riviera_maya_hotels">{$lang.riviera_maya_hotels}</option>
                                </select>
                            </div>
                            <div class="col-6 d-none p-l-10 m-b-10">
                                <h6 class="m-b-5">{$lang.your_hotel}</h6>
                                <input type="text" name="hotel" class="p-lr-20" style="width:100%;height:50px;border:none;background-color:#f5f5f5;">
                            </div>
                            <div class="col-6 p-l-0 p-l-md-10 m-b-10">
                                <h6 class="m-b-5">{$lang.test_date}</h6>
                                <input type="date" name="date" value="<?php echo date('Y-m-d', strtotime(date('d-m-Y', strtotime(date('Y-m-d'))) . ' + 1 days')); ?>" min="<?php echo date('Y-m-d', strtotime(date('d-m-Y', strtotime(date('Y-m-d'))) . ' + 1 days')); ?>" class="p-lr-20" style="width:100%;height:50px;border:none;background-color:#f5f5f5;">
                            </div>
                            <div class="col-6 p-l-10 m-b-10">
                                <h6 class="m-b-5">{$lang.test_hour}</h6>
                                <select name="hour" class="p-lr-20" style="width:100%;height:50px;border:none;background-color:#f5f5f5;">
                                    <option value="08:00:00">08:00 am</option>
                                    <option value="09:00:00">09:00 am</option>
                                    <option value="10:00:00">10:00 am</option>
                                    <option value="11:00:00">11:00 am</option>
                                    <option value="12:00:00">12:00 pm</option>
                                    <option value="13:00:00">01:00 pm</option>
                                    <option value="14:00:00">02:00 pm</option>
                                    <option value="15:00:00">03:00 pm</option>
                                    <option value="16:00:00">04:00 pm</option>
                                    <option value="17:00:00">05:00 pm</option>
                                    <option value="18:00:00">06:00 pm</option>
                                </select>
                            </div>
                            <div class="col-12 p-l-0 p-l-md-10 m-b-10">
                                <h6 class="m-b-5">{$lang.first_and_last_name}</h6>
                                <input type="text" name="name" class="p-lr-20" style="width:100%;height:50px;border:none;background-color:#f5f5f5;">
                            </div>
                            <div class="col-6 p-l-0 p-l-md-10 m-b-10">
                                <h6 class="m-b-5">{$lang.email}</h6>
                                <input type="email" name="email" class="p-lr-20" style="width:100%;height:50px;border:none;background-color:#f5f5f5;">
                            </div>
                            <div class="col-6 p-l-10 m-b-10">
                                <h6 class="m-b-5">{$lang.phone}</h6>
                                <input type="text" name="phone" class="p-lr-20" style="width:100%;height:50px;border:none;background-color:#f5f5f5;">
                            </div>
                            <div class="col-12 text-right">
                                <button type="submit" class="btn btn-b-none" style="background-color:#ff5722;">{$lang.schedule_now}</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <section id="other_services" class="p-b-40">
        <div class="container">
            <div class="row">
                <div class="col-6 col-md-3 m-b-10 m-b-md-0">
                    <div class="p-20 m-b-10 m-b-md-20" style="border-radius:4px;border:2px dashed #f44336;">
                        <h2 class="text-center text-light" style="font-size:24px;color:#f44336;"><strong>{$lang.toxicologic_test}</strong></h2>
                    </div>
                    <div class="p-20" style="border-radius:4px;border:2px dashed #E91E63;">
                        <h2 class="text-center text-light" style="font-size:24px;color:#E91E63;"><strong>{$lang.hematic_biometric}</strong></h2>
                    </div>
                </div>
                <div class="col-6 col-md-3 m-b-10 m-b-md-0">
                    <div class="p-20 m-b-10 m-b-md-20" style="border-radius:4px;border:2px dashed #9c27b0;">
                        <h2 class="text-center text-light" style="font-size:24px;color:#9c27b0;"><strong>{$lang.blood_chemistry}</strong></h2>
                    </div>
                    <div class="p-20" style="border-radius:4px;border:2px dashed #673ab7;">
                        <h2 class="text-center text-light" style="font-size:24px;color:#673ab7;"><strong>{$lang.pregnancy_test}</strong></h2>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="p-20 m-b-10 m-b-md-20" style="border-radius:4px;border:2px dashed #3f51b5;">
                        <h2 class="text-center text-light" style="font-size:24px;color:#3f51b5;"><strong>{$lang.glucose_determination}</strong></h2>
                    </div>
                    <div class="p-20" style="border-radius:4px;border:2px dashed #2196F3;">
                        <h2 class="text-center text-light" style="font-size:24px;color:#2196F3;"><strong>{$lang.blood_type}</strong></h2>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="p-20 m-b-10 m-b-md-20" style="border-radius:4px;border:2px dashed #03a9f4;">
                        <h2 class="text-center text-light" style="font-size:24px;color:#03a9f4;"><strong>{$lang.paternity_test}</strong></h2>
                    </div>
                    <div class="p-20" style="border-radius:4px;border:2px dashed #00bcd4;">
                        <h2 class="text-center text-light" style="font-size:24px;color:#00bcd4;"><strong>{$lang.breathalyser}</strong></h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section data-desktop id="map" style="height:60vh;"></section>
    <section data-mobile-block class="p-b-40">
        <div class="container">
            <figure class="m-b-40">
                <img src="{$path.images}map_background_mobile.png" alt="Map" class="img-fluid" style="max-height:200px;">
            </figure>
            <div class="text-center">
                <a href="https://www.google.com.mx/maps/dir//<?php echo Configuration::$vars['location']['lat']; ?>,<?php echo Configuration::$vars['location']['lng']; ?>/@<?php echo Configuration::$vars['location']['lat']; ?>,<?php echo Configuration::$vars['location']['lng']; ?>,20z/" target="_blank" class="btn btn-b-none text-light" style="background-color:#2196F3;">{$lang.view_map}</a>
            </div>
        </div>
    </section>
    <section id="contactanos" class="p-t-0 p-t-md-40 p-b-40">
        <div class="container">
            <div class="row">
                <div class="col-md-6 m-b-40 m-b-md-0">
                    <h2 class="m-b-40 text-center text-md-left" style="font-size:40px;">{$lang.contact_with_us}</h2>
                    <p class="m-b-0 m-b-md-20 text-justify" style="font-size:18px;">{$lang.we_communicate_with_you}</p>
                    <div data-desktop class="row">
                        <div class="col-md-6 m-b-20 m-b-md-0">
                            <h6 class="m-b-10 text-uppercase"><strong>{$lang.address}</strong></h6>
                            <p class="m-b-20"><?php echo Configuration::$vars['address']; ?></p>
                            <h6 class="m-b-10 text-uppercase"><strong>{$lang.contact_us}</strong></h6>
                            <a href="mailto:<?php echo Configuration::$vars['contact']['email']; ?>" target="_blank" class="d-block m-b-5"><?php echo Configuration::$vars['contact']['email']; ?></a>
                            <a href="tel:<?php echo Configuration::$vars['contact']['phone']; ?>" target="_blank" class="d-block m-b-5"><?php echo Configuration::$vars['contact']['phone']; ?></a>
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
                            <div class="col-12 p-l-0 p-l-md-10 m-b-10">
                                <h6 class="m-b-5">{$lang.first_and_last_name}</h6>
                                <input type="text" name="name" class="p-lr-20" style="width:100%;height:50px;border:none;background-color:#f5f5f5;">
                            </div>
                            <div class="col-6 p-l-0 p-l-md-10 m-b-10">
                                <h6 class="m-b-5">{$lang.email}</h6>
                                <input type="email" name="email" class="p-lr-20" style="width:100%;height:50px;border:none;background-color:#f5f5f5;">
                            </div>
                            <div class="col-6 p-l-10 m-b-10">
                                <h6 class="m-b-5">{$lang.phone}</h6>
                                <input type="text" name="phone" class="p-lr-20" style="width:100%;height:50px;border:none;background-color:#f5f5f5;">
                            </div>
                            <div class="col-12 p-l-0 p-l-md-10 m-b-10">
                                <h6 class="m-b-5">{$lang.comments}</h6>
                                <textarea name="comments" class="p-20" style="width:100%;height:200px;border:none;background-color:#f5f5f5;"></textarea>
                            </div>
                            <div class="col-12 text-right">
                                <button type="submit" class="btn btn-b-none" style="background-color:#ff5722;">{$lang.contact_now}</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <section data-mobile-block class="p-b-40">
        <div class="container">
            <figure class="m-b-40">
                <img src="{$path.images}contact_background_mobile.png" alt="Map" class="img-fluid" style="max-height:200px;">
            </figure>
            <div class="text-center">
                <a href="/vcard" class="btn btn-b-none text-light" style="background-color:#2196F3;">{$lang.view_vcard}</a>
            </div>
        </div>
    </section>
</main>
