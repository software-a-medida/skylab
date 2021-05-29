<?php

defined('_EXEC') or die;

$this->dependencies->add(['other', '<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBLCea8Q6BtcTHwY3YFCiB0EoHE5KnsMUE&callback=map"></script>']);
$this->dependencies->add(['js', '{$path.js}Index/index.js?v=1.1']);

?>

<main>
    <section id="inicio" class="pos-relative" style="height:100vh;">
        <figure style="height:100vh;">
            <img data-desktop src="{$path.images}home_background_desktop.jpg" alt="Background" class="img-cover">
            <img data-mobile-block src="{$path.images}home_background_mobile.jpg" alt="Background" class="img-cover">
        </figure>
        <div class="pos-absolute d-flex align-items-center p-40" style="top:0px;right:0px;bottom:0px;left:0px;background-color:rgba(33,150,243,0.6);">
            <div class="container">
                <h2 class="m-b-20 text-center text-md-left text-light" style="font-family:'Montserrat-Regular';font-size:60px;">{$lang.tests_of}</h2>
                <h1 class="d-inline-block m-b-20 text-center text-md-left text-light" style="font-family:'Montserrat-Regular';font-size:60px;background-color:#f44336;"><strong>COVID-19</strong></h1>
                <p class="m-b-20 text-justify text-md-left text-light" style="font-size:24px;">{$lang.find_out_if_you_have_covid}</p>
                <div class="text-center text-md-left">
                    <a href="#pruebas-covid-19" class="btn btn-light">{$lang.more_information}</a>
                </div>
            </div>
        </div>
    </section>
    <section id="pruebas-covid-19" class="p-t-40 p-r-40 p-l-40">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-md-6 order-1 order-md-2 m-b-20 m-b-md-0">
                    <figure class="text-center text-md-right">
                        <img src="{$path.images}covid_19_tests_background.png" alt="Background" class="img-fluid" style="max-height:500px;">
                    </figure>
                </div>
                <div class="col-md-6 order-2 order-md-1">
                    <h2 class="m-b-20 text-center text-md-left text-dark" style="font-size:40px;">{$lang.analysis_laboratory}</h2>
                    <p class="text-justify text-dark" style="font-size:18px;">{$lang.we_are_skylab}</p>
                </div>
            </div>
        </div>
    </section>
    <section class="p-t-40 p-r-40 p-l-40">
        <div class="container">
            <div class="row">
                <div class="col-md-4 m-b-40 m-b-md-0">
                    <div class="p-20 m-b-20" style="border-radius:5px;background-color:#ff9800;">
                        <h3 class="text-center text-uppercase text-light" style="font-size:40px;"><strong>{$lang.pcr}</strong></h3>
                    </div>
                    <div class="p-20 m-b-20" style="border-radius:5px;background-color:#f5f5f5;">
                        <p class="text-center text-dark">{$lang.pcr_text_1}</p>
                    </div>
                    <div class="p-20 m-b-20" style="border-radius:5px;background-color:#f5f5f5;">
                        <p class="text-center text-dark">{$lang.pcr_text_2}</p>
                    </div>
                    <div class="p-20 m-b-20" style="border-radius:5px;background-color:#f5f5f5;">
                        <p class="text-center text-dark">{$lang.pcr_text_3}</p>
                    </div>
                    <div class="p-20 m-b-20" style="border-radius:5px;background-color:#f5f5f5;">
                        <p class="text-center text-dark">{$lang.pcr_text_4}</p>
                    </div>
                    <div class="p-20 m-b-20" style="border-radius:5px;background-color:#f5f5f5;">
                        <p class="text-center text-dark">{$lang.pcr_text_5}</p>
                    </div>
                    <div class="p-20 m-b-20" style="border-radius:5px;background-color:#f5f5f5;">
                        <p class="text-center text-dark">{$lang.pcr_text_6}</p>
                    </div>
                    <div class="p-20" style="border-radius:5px;border:2px dashed #ff9800;">
                        <h4 class="text-center text-uppercase" style="font-size:40px;color:#ff9800;"><strong>$ 50 USD</strong></h4>
                    </div>
                </div>
                <div class="col-md-4 m-b-40 m-b-md-0">
                    <div class="p-20 m-b-20" style="border-radius:5px;background-color:#009688;">
                        <h3 class="text-center text-uppercase text-light" style="font-size:40px;"><strong>{$lang.antigen}</strong></h3>
                    </div>
                    <div class="p-20 m-b-20" style="border-radius:5px;background-color:#f5f5f5;">
                        <p class="text-center text-dark">{$lang.antigen_text_1}</p>
                    </div>
                    <div class="p-20 m-b-20" style="border-radius:5px;background-color:#f5f5f5;">
                        <p class="text-center text-dark">{$lang.antigen_text_2}</p>
                    </div>
                    <div class="p-20 m-b-20" style="border-radius:5px;background-color:#f5f5f5;">
                        <p class="text-center text-dark">{$lang.antigen_text_3}</p>
                    </div>
                    <div class="p-20 m-b-20" style="border-radius:5px;background-color:#f5f5f5;">
                        <p class="text-center text-dark">{$lang.antigen_text_4}</p>
                    </div>
                    <div class="p-20 m-b-20" style="border-radius:5px;background-color:#f5f5f5;">
                        <p class="text-center text-dark">{$lang.antigen_text_5}</p>
                    </div>
                    <div class="p-20 m-b-20" style="border-radius:5px;background-color:#f5f5f5;">
                        <p class="text-center text-dark">{$lang.antigen_text_6}</p>
                    </div>
                    <div class="p-20" style="border-radius:5px;border:2px dashed #009688;">
                        <h4 class="text-center text-uppercase" style="font-size:40px;color:#009688;"><strong>$ 15 USD</strong></h4>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="p-20 m-b-20" style="border-radius:5px;background-color:#3f51b5;">
                        <h3 class="text-center text-uppercase text-light" style="font-size:40px;"><strong>{$lang.anticorps}</strong></h3>
                    </div>
                    <div class="p-20 m-b-20" style="border-radius:5px;background-color:#f5f5f5;">
                        <p class="text-center text-dark">{$lang.anticorps_text_1}</p>
                    </div>
                    <div class="p-20 m-b-20" style="border-radius:5px;background-color:#f5f5f5;">
                        <p class="text-center text-dark">{$lang.anticorps_text_2}</p>
                    </div>
                    <div class="p-20 m-b-20" style="border-radius:5px;background-color:#f5f5f5;">
                        <p class="text-center text-dark">{$lang.anticorps_text_3}</p>
                    </div>
                    <div class="p-20 m-b-20" style="border-radius:5px;background-color:#f5f5f5;">
                        <p class="text-center text-dark">{$lang.anticorps_text_4}</p>
                    </div>
                    <div class="p-20 m-b-20" style="border-radius:5px;background-color:#f5f5f5;">
                        <p class="text-center text-dark">{$lang.anticorps_text_5}</p>
                    </div>
                    <div class="p-20 m-b-20" style="border-radius:5px;background-color:#f5f5f5;">
                        <p class="text-center text-dark">{$lang.anticorps_text_6}</p>
                    </div>
                    <div class="p-20" style="border-radius:5px;border:2px dashed #3f51b5;">
                        <h4 class="text-center text-uppercase" style="font-size:40px;color:#3f51b5;"><strong>$ 24 USD</strong></h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="p-t-40 p-r-40 p-l-40">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-md-6 m-b-20 m-b-md-0">
                    <figure class="text-center text-md-right">
                        <img src="{$path.images}care_protocol_background.png" alt="Background" class="img-fluid" style="max-height:500px;">
                    </figure>
                </div>
                <div class="col-md-6">
                    <h2 class="m-b-20 text-center text-md-left text-dark" style="font-size:40px;">{$lang.care_protocol}</h2>
                    <p class="m-b-20 text-justify text-dark" style="font-size:18px;">{$lang.please_use_your_face_mask}</p>
                    <div class="row">
                        <div class="col-md-4 m-b-20">
                            <div class="row no-gutters d-flex align-items-center">
                                <div class="col-2 col-md-4">
                                    <figure>
                                        <img src="{$path.images}care_protocol_icon_1.png" alt="Icon" class="img-fluid" style="max-height:60px;">
                                    </figure>
                                </div>
                                <div class="col-10 col-md-8 p-l-10">
                                    <h5 class="text-dark">{$lang.care_protocol_text_1}</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 m-b-20">
                            <div class="row no-gutters d-flex align-items-center">
                                <div class="col-2 col-md-4">
                                    <figure>
                                        <img src="{$path.images}care_protocol_icon_2.png" alt="Icon" class="img-fluid" style="max-height:60px;">
                                    </figure>
                                </div>
                                <div class="col-10 col-md-8 p-l-10">
                                    <h5 class="text-dark">{$lang.care_protocol_text_2}</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 m-b-20">
                            <div class="row no-gutters d-flex align-items-center">
                                <div class="col-2 col-md-4">
                                    <figure>
                                        <img src="{$path.images}care_protocol_icon_3.png" alt="Icon" class="img-fluid" style="max-height:60px;">
                                    </figure>
                                </div>
                                <div class="col-10 col-md-8 p-l-10">
                                    <h5 class="text-dark">{$lang.care_protocol_text_3}</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 m-b-20">
                            <div class="row no-gutters d-flex align-items-center">
                                <div class="col-2 col-md-4">
                                    <figure>
                                        <img src="{$path.images}care_protocol_icon_4.png" alt="Icon" class="img-fluid" style="max-height:60px;">
                                    </figure>
                                </div>
                                <div class="col-10 col-md-8 p-l-10">
                                    <h5 class="text-dark">{$lang.care_protocol_text_4}</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="row no-gutters d-flex align-items-center">
                                <div class="col-2 col-md-4">
                                    <figure>
                                        <img src="{$path.images}care_protocol_icon_5.png" alt="Icon" class="img-fluid" style="max-height:60px;">
                                    </figure>
                                </div>
                                <div class="col-10 col-md-8 p-l-10">
                                    <h5 class="text-dark">{$lang.care_protocol_text_5}</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="agenda-una-cita" class="p-t-40 p-r-40 p-l-40">
        <div class="container">
            <div class="row">
                <div class="col-md-6 m-b-20 m-b-md-0">
                    <h2 class="m-b-20 text-center text-md-left" style="font-size:40px;">{$lang.schedule_your_appointment}</h2>
                    <div class="p-20" style="border-radius:5px;border:2px dashed #e0e0e0;">
                        <p class="m-b-20 m-b-md-5 text-justify text-md-left text-dark">{$lang.we_will_also_look_for_you}</p>
                        <p class="m-b-5 text-dark"><strong>{$lang.cancun_zh}</strong>: $ 28 USD</p>
                        <p class="m-b-5 text-dark"><strong>{$lang.cancun_ib}</strong>: $ 28 USD</p>
                        <p class="m-b-5 text-dark"><strong>{$lang.isla_mujeres}</strong>: $ 28 USD</p>
                        <p class="m-b-5 text-dark"><strong>{$lang.playa_del_carmen}</strong>: $ 28 USD</p>
                        <p class="m-b-5 text-dark"><strong>{$lang.tulum}</strong>: $ 28 USD</p>
                        <p class="m-b-20 text-dark"><strong>{$lang.riviera_maya_hotels}</strong>: $ 28 USD</p>
                        <figure class="d-inline-block m-b-20 m-b-md-5 m-r-10">
                            <img src="{$path.images}visa.png" alt="Visa" class="img-fluid" style="max-height:20px;">
                        </figure>
                        <figure class="d-inline-block m-b-20 m-b-md-5 m-r-10">
                            <img src="{$path.images}master_card.png" alt="Visa" class="img-fluid" style="max-height:20px;">
                        </figure>
                        <figure class="d-inline-block m-b-20 m-b-md-5">
                            <img src="{$path.images}american_express.png" alt="Visa" class="img-fluid" style="max-height:20px;">
                        </figure>
                        <p class="text-justify text-md-left text-dark">{$lang.accept_card_but_comission_payment}</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <form name="schedule_an_appointment">
                        <div class="row no-gutters">
                            <div class="col-md-4 p-l-0 p-l-md-5 m-b-20">
                                <h6 class="m-b-5">{$lang.test_type}</h6>
                                <select name="test" class="p-l-20 p-r-20" style="width:100%;height:50px;border:none;background-color:#f5f5f5;">
                                    <option value="covid_pcr">COVID-19 {$lang.pcr}</option>
                                    <option value="covid_an">COVID-19 {$lang.antigen}</option>
                                    <option value="covid_ac">COVID-19 {$lang.anticorps}</option>
                                </select>
                            </div>
                            <div class="col-md-4 p-l-0 p-l-md-5 m-b-20">
                                <h6 class="m-b-5">{$lang.tests_number}</h6>
                                <input type="number" name="paxs" min="1" value="1" class="p-l-20 p-r-20" style="width:100%;height:50px;border:none;background-color:#f5f5f5;">
                            </div>
                            <div class="col-md-4 p-l-0 p-l-md-5 m-b-20">
                                <h6 class="m-b-5">{$lang.test_place}</h6>
                                <select name="place" class="p-l-15 p-r-15" style="width:100%;height:50px;border:none;background-color:#f5f5f5;">
                                    <option value="i_will_go">{$lang.i_will_go}</option>
                                    <option value="i_want_to_do_in_my_hotel">{$lang.i_want_to_do_in_my_hotel}</option>
                                    <option value="i_want_them_to_come_look_for_me">{$lang.i_want_them_to_come_look_for_me}</option>
                                </select>
                            </div>
                            <div class="col-md-6 d-none p-l-0 p-l-md-5 m-b-20">
                                <h6 class="m-b-5">{$lang.test_zone}</h6>
                                <select name="zone" class="p-l-20 p-r-20" style="width:100%;height:50px;border:none;background-color:#f5f5f5;">
                                    <option value="cancun_zh">{$lang.cancun_zh}</option>
                                    <option value="cancun_ib">{$lang.cancun_ib}</option>
                                    <option value="isla_mujeres">{$lang.isla_mujeres}</option>
                                    <option value="playa_del_carmen">{$lang.playa_del_carmen}</option>
                                    <option value="tulum">{$lang.tulum}</option>
                                    <option value="riviera_maya_hotels">{$lang.riviera_maya_hotels}</option>
                                </select>
                            </div>
                            <div class="col-md-6 d-none p-l-0 p-l-md-5 m-b-20">
                                <h6 class="m-b-5">{$lang.your_hotel}</h6>
                                <input type="text" name="hotel" class="p-l-20 p-r-20" style="width:100%;height:50px;border:none;background-color:#f5f5f5;">
                            </div>
                            <div class="col-md-6 p-l-0 p-l-md-5 m-b-20">
                                <h6 class="m-b-5">{$lang.test_date}</h6>
                                <input type="date" name="date" value="<?php echo date('Y-m-d', strtotime(date('d-m-Y', strtotime(date('Y-m-d'))) . ' + 1 days')); ?>" min="<?php echo date('Y-m-d', strtotime(date('d-m-Y', strtotime(date('Y-m-d'))) . ' + 1 days')); ?>" class="p-l-20 p-r-20" style="width:100%;height:50px;border:none;background-color:#f5f5f5;">
                            </div>
                            <div class="col-md-6 p-l-0 p-l-md-5 m-b-20">
                                <h6 class="m-b-5">{$lang.test_hour}</h6>
                                <select name="hour" class="p-l-20 p-r-20" style="width:100%;height:50px;border:none;background-color:#f5f5f5;">
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
                            <div class="col-md-12 p-l-0 p-l-md-5 m-b-20">
                                <h6 class="m-b-5">{$lang.first_and_last_name}</h6>
                                <input type="text" name="name" class="p-l-20 p-r-20" style="width:100%;height:50px;border:none;background-color:#f5f5f5;">
                            </div>
                            <div class="col-md-6 p-l-0 p-l-md-5 m-b-20">
                                <h6 class="m-b-5">{$lang.email}</h6>
                                <input type="email" name="email" class="p-l-20 p-r-20" style="width:100%;height:50px;border:none;background-color:#f5f5f5;">
                            </div>
                            <div class="col-md-6 p-l-0 p-l-md-5 m-b-20">
                                <h6 class="m-b-5">{$lang.phone}</h6>
                                <input type="text" name="phone" class="p-l-20 p-r-20" style="width:100%;height:50px;border:none;background-color:#f5f5f5;">
                            </div>
                            <div class="col-md-12 text-right">
                                <button type="submit" class="btn btn-b-none" style="background-color:#ff5722;">{$lang.schedule_now}</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <section class="p-40">
        <div class="container">
            <div class="row">
                <div class="col-md-3 m-b-20 m-b-md-0">
                    <div class="p-20 m-b-20" style="border-radius:5px;border:2px dashed #f44336;">
                        <h3 class="text-center text-light" style="font-size:24px;color:#f44336;"><strong>{$lang.toxicologic_test}</strong></h3>
                    </div>
                    <div class="p-20" style="border-radius:5px;border:2px dashed #E91E63;">
                        <h3 class="text-center text-light" style="font-size:24px;color:#E91E63;"><strong>{$lang.hematic_biometric}</strong></h3>
                    </div>
                </div>
                <div class="col-md-3 m-b-20 m-b-md-0">
                    <div class="p-20 m-b-20" style="border-radius:5px;border:2px dashed #9c27b0;">
                        <h3 class="text-center text-light" style="font-size:24px;color:#9c27b0;"><strong>{$lang.blood_chemistry}</strong></h3>
                    </div>
                    <div class="p-20" style="border-radius:5px;border:2px dashed #673ab7;">
                        <h3 class="text-center text-light" style="font-size:24px;color:#673ab7;"><strong>{$lang.pregnancy_test}</strong></h3>
                    </div>
                </div>
                <div class="col-md-3 m-b-20 m-b-md-0">
                    <div class="p-20 m-b-20" style="border-radius:5px;border:2px dashed #3f51b5;">
                        <h3 class="text-center text-light" style="font-size:24px;color:#3f51b5;"><strong>{$lang.glucose_determination}</strong></h3>
                    </div>
                    <div class="p-20" style="border-radius:5px;border:2px dashed #2196F3;">
                        <h3 class="text-center text-light" style="font-size:24px;color:#2196F3;"><strong>{$lang.blood_type}</strong></h3>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="p-20 m-b-20" style="border-radius:5px;border:2px dashed #03a9f4;">
                        <h3 class="text-center text-light" style="font-size:24px;color:#03a9f4;"><strong>{$lang.paternity_test}</strong></h3>
                    </div>
                    <div class="p-20" style="border-radius:5px;border:2px dashed #00bcd4;">
                        <h3 class="text-center text-light" style="font-size:24px;color:#00bcd4;"><strong>{$lang.breathalyser}</strong></h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="map" style="height:60vh;"></section>
    <section id="contactanos" class="p-t-40 p-r-40 p-l-40">
        <div class="container">
            <div class="row">
                <div class="col-md-6 m-b-20 m-b-md-0">
                    <h2 class="m-b-20 text-center text-md-left" style="font-size:40px;">{$lang.contact_with_us}</h2>
                    <p class="m-b-0 m-b-md-20 text-justify" style="font-size:18px;">{$lang.we_communicate_with_you}</p>
                    <div data-desktop class="row">
                        <div class="col-md-6 m-b-20 m-b-md-0">
                            <h6 class="m-b-10 text-uppercase"><strong>{$lang.address}</strong></h6>
                            <p class="m-b-20"><?php echo Configuration::$vars['address']; ?></p>
                            <h6 class="m-b-10 text-uppercase"><strong>{$lang.contact_us}</strong></h6>
                            <a href="mailto:<?php echo Configuration::$vars['contact']['email']; ?>" target="_blank" class="d-block m-b-5 text-dark"><?php echo Configuration::$vars['contact']['email']; ?></a>
                            <a href="tel:<?php echo Configuration::$vars['contact']['phone']; ?>" target="_blank" class="d-block m-b-5 text-dark"><?php echo Configuration::$vars['contact']['phone']; ?></a>
                            <a href="<?php echo Configuration::$vars['rrss']['whatsapp']['url']; ?>" target="_blank" class="d-block text-dark"><?php echo Configuration::$vars['rrss']['whatsapp']['user']; ?></a>
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
                            <div class="col-md-12 p-l-0 p-l-md-5 m-b-20">
                                <h6 class="m-b-5">{$lang.first_and_last_name}</h6>
                                <input type="text" name="name" class="p-l-20 p-r-20" style="width:100%;height:50px;border:none;background-color:#f5f5f5;">
                            </div>
                            <div class="col-md-6 p-l-0 p-l-md-5 m-b-20">
                                <h6 class="m-b-5">{$lang.email}</h6>
                                <input type="email" name="email" class="p-l-20 p-r-20" style="width:100%;height:50px;border:none;background-color:#f5f5f5;">
                            </div>
                            <div class="col-md-6 p-l-0 p-l-md-5 m-b-20">
                                <h6 class="m-b-5">{$lang.phone}</h6>
                                <input type="text" name="phone" class="p-l-20 p-r-20" style="width:100%;height:50px;border:none;background-color:#f5f5f5;">
                            </div>
                            <div class="col-md-12 p-l-0 p-l-md-5 m-b-20">
                                <h6 class="m-b-5">{$lang.comments}</h6>
                                <textarea name="comments" class="p-20" style="width:100%;height:200px;border:none;background-color:#f5f5f5;"></textarea>
                            </div>
                            <div class="col-md-12 text-right">
                                <button type="submit" class="btn btn-b-none" style="background-color:#ff5722;">{$lang.contact_now}</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</main>
