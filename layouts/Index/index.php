<?php

defined('_EXEC') or die;

$this->dependencies->add(['js', '{$path.js}Index/index.js?v=1.0']);

?>

<main>
    <section class="pos-relative" style="height:40vh;">
        <figure style="height:100%;">
            <img src="{$path.images}home.jpg" alt="Home" class="img-cover">
        </figure>
        <div class="pos-absolute d-flex align-items-end p-40" style="top:0px;right:0px;bottom:0px;left:0px;background-color:rgba(0,0,0,0.6);">
            <div class="container">
                <figure style="height:120px;">
                    <img src="{$path.images}logotype.png" alt="Logotype" style="height:100%;">
                </figure>
            </div>
        </div>
    </section>
    <section id="covid-19" class="p-40">
        <div class="container">
            <h2 class="p-l-10 m-b-40 text-uppercase" style="border-left:5px solid <?php echo Configuration::$vars['colors']['second']; ?>;font-size:18px;">{$lang.covid_catalog}</h2>
            <div class="row d-flex align-items-center m-b-40">
                <div class="col-md-4">
                    <figure class="d-flex align-items-center justify-content-center" style="height:300px;">
                        <img src="{$path.images}covid_pcr.png" style="width:100%;">
                    </figure>
                </div>
                <div class="col-md-8">
                    <h3 class="m-b-20 text-uppercase" style="font-size:18px;">{$lang.covid_pcr_test}</h3>
                    <h6 class="m-b-5">{$lang.nasopharyngeal_collection}</h6>
                    <h6 class="m-b-5">{$lang.result_yes_not_infection}</h6>
                    <h6 class="m-b-5">{$lang.period_all_infection}</h6>
                    <h6 class="m-b-5">{$lang.12_hours_preccess}</h6>
                    <p class="m-b-20">{$lang.covid_pcr_test_description}</p>
                    <h6 class="m-b-5">{$lang.in_sucursal}: $ 50 USD</h6>
                    <h6 class="m-b-5">{$lang.in_hotel}: $ 75 USD (Cancún e Isla Mujeres) | $ 80 USD (Playa del Carmen) | $ 110 USD (Tulúm)</h6>
                    <h6 class="m-b-5">+ $ 28 USD {$lang.with_transfer}</h6>
                    <h6 class="m-b-20">+ 4% {$lang.to_pay_with_card}</h6>
                    <a href="https://skylab.setmore.com/" target="_blank" class="btn btn-b-none" style="background-color:<?php echo Configuration::$vars['colors']['second']; ?>">{$lang.book_now}</a>
                    <a href="#cotiza-ahora" class="btn btn-b-none" style="background-color:<?php echo Configuration::$vars['colors']['first']; ?>">{$lang.quote_now}</a>
                </div>
            </div>
            <div class="row d-flex align-items-center m-b-40">
                <div class="col-md-4">
                    <figure class="d-flex align-items-center justify-content-center" style="height:300px;">
                        <img src="{$path.images}covid_antigen.png" style="width:100%;">
                    </figure>
                </div>
                <div class="col-md-8">
                    <h3 class="m-b-20 text-uppercase" style="font-size:18px;">{$lang.covid_an_test}</h3>
                    <h6 class="m-b-5">{$lang.nasopharyngeal_collection}</h6>
                    <h6 class="m-b-5">{$lang.result_yes_not_infection}</h6>
                    <h6 class="m-b-5">{$lang.period_7_days}</h6>
                    <h6 class="m-b-5">{$lang.15_minutes_preccess}</h6>
                    <p class="m-b-20">{$lang.covid_an_test_description}/p>
                    <h6 class="m-b-5">{$lang.in_sucursal}: $ 18 USD</h6>
                    <h6 class="m-b-5">{$lang.in_hotel}: $ 22 USD (Cancún e Isla Mujeres, Playa del Carmen & Tulúm)</h6>
                    <h6 class="m-b-5">+ $ 28 USD {$lang.with_transfer}</h6>
                    <h6 class="m-b-20">+ 4% {$lang.to_pay_with_card}</h6>
                    <a href="https://skylab.setmore.com/" target="_blank" class="btn btn-b-none" style="background-color:<?php echo Configuration::$vars['colors']['second']; ?>">{$lang.book_now}</a>
                    <a href="#cotiza-ahora" class="btn btn-b-none" style="background-color:<?php echo Configuration::$vars['colors']['first']; ?>">{$lang.quote_now}</a>
                </div>
            </div>
            <div class="row d-flex align-items-center">
                <div class="col-md-4">
                    <figure class="d-flex align-items-center justify-content-center" style="height:300px;">
                        <img src="{$path.images}covid_anticorps.png" style="width:100%;">
                    </figure>
                </div>
                <div class="col-md-8">
                    <h3 class="m-b-20 text-uppercase" style="font-size:18px;">{$lang.covid_ac_test}</h3>
                    <h6 class="m-b-5">{$lang.blood_collection}</h6>
                    <h6 class="m-b-5">{$lang.result_anticorp_detection}</h6>
                    <h6 class="m-b-5">{$lang.period_7_days}</h6>
                    <h6 class="m-b-5">{$lang.15_minutes_preccess}</h6>
                    <p class="m-b-20">{$lang.covid_ac_test_description}</p>
                    <h6 class="m-b-5">{$lang.in_sucursal}: $ 18 USD</h6>
                    <h6 class="m-b-5">{$lang.in_hotel}: $ 22 USD (Cancún e Isla Mujeres, Playa del Carmen & Tulúm)</h6>
                    <h6 class="m-b-5">+ $ 28 USD {$lang.with_transfer}</h6>
                    <h6 class="m-b-20">+ 4% {$lang.to_pay_with_card}</h6>
                    <a href="https://skylab.setmore.com/" target="_blank" class="btn btn-b-none" style="background-color:<?php echo Configuration::$vars['colors']['second']; ?>">{$lang.book_now}</a>
                    <a href="#cotiza-ahora" class="btn btn-b-none" style="background-color:<?php echo Configuration::$vars['colors']['first']; ?>">{$lang.quote_now}</a>
                </div>
            </div>
        </div>
    </section>
    <section id="otros-servicios" class="p-t-20 p-b-20 p-t-md-40 p-b-md-40" style="background-color:#f5f5f5;">
        <div class="container">
            <h2 class="p-l-10 m-b-40 text-uppercase" style="border-left:5px solid <?php echo Configuration::$vars['colors']['first']; ?>;font-size:18px;">{$lang.other_services}</h2>
            <div class="row">
                <div class="col-md-4 d-flex align-items-center justify-content-center flex-column">
                    <figure class="m-b-20" style="height:200px;">
                        <img src="{$path.images}alcoholic.png" alt="Alcoholic" style="height:100%;">
                    </figure>
                    <h3 class="m-b-20 text-uppercase text-center" style="font-size:18px;">{$lang.alcoholic}</h3>
                    <p class="m-b-20 text-center">{$lang.alcoholic_test_description}</p>
                    <a href="#cotiza-ahora" class="btn btn-b-none" style="background-color:<?php echo Configuration::$vars['colors']['second']; ?>">{$lang.quote_now}</a>
                </div>
                <div class="col-md-4 d-flex align-items-center justify-content-center flex-column">
                    <figure class="m-b-20" style="height:200px;">
                        <img src="{$path.images}toxicological.png" alt="Toxicological" style="height:100%;">
                    </figure>
                    <h3 class="m-b-20 text-uppercase text-center" style="font-size:18px;">{$lang.toxicological}</h3>
                    <p class="m-b-20 text-center">{$lang.toxicological_test_description}</p>
                    <a href="#cotiza-ahora" class="btn btn-b-none" style="background-color:<?php echo Configuration::$vars['colors']['second']; ?>">{$lang.quote_now}</a>
                </div>
                <div class="col-md-4 d-flex align-items-center justify-content-center flex-column">
                    <figure class="m-b-20" style="height:200px;">
                        <img src="{$path.images}polygraph.png" alt="Polygraph" style="height:100%;">
                    </figure>
                    <h3 class="m-b-20 text-uppercase text-center" style="font-size:18px;">{$lang.polygraph}</h3>
                    <p class="m-b-20 text-center">{$lang.polygraph_test_description}</p>
                    <a href="#cotiza-ahora" class="btn btn-b-none" style="background-color:<?php echo Configuration::$vars['colors']['second']; ?>">{$lang.quote_now}</a>
                </div>
            </div>
        </div>
    </section>
    <section id="cotiza-ahora" class="p-t-20 p-b-20 p-t-md-40 p-b-md-40">
        <div class="container">
            <h2 class="p-l-10 m-b-40 text-uppercase" style="border-left:5px solid <?php echo Configuration::$vars['colors']['second']; ?>;font-size:18px;">{$lang.quote_now}</h2>
            <form name="quote_now">
                <div class="row">
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-12 m-b-20">
                                <select name="service" class="p-l-15 p-r-15" style="width:100%;height:50px;border:none;background-color:#f5f5f5;">
                                    <option value="" class="d-none">{$lang.service}</option>
                                    <option value="Covid PCR">{$lang.covid_pcr_test}</option>
                                    <option value="Covid Antígeno">{$lang.covid_an_test}</option>
                                    <option value="Covid Anticuerpos">{$lang.covid_ac_test}</option>
                                    <option value="Alcoholímetro">{$lang.alcoholic}</option>
                                    <option value="Toxicológico">{$lang.toxicological}</option>
                                    <option value="Polígrado">{$lang.polygraph}</option>
                                </select>
                            </div>
                            <div class="col-4 m-b-20">
                                <input type="number" name="tests_number" min="1" placeholder="{$lang.tests_number}" class="p-l-15 p-r-15" style="width:100%;height:50px;border:none;background-color:#f5f5f5;">
                            </div>
                            <div class="col-8 m-b-20">
                                <input type="text" name="place" placeholder="{$lang.place}" class="p-l-15 p-r-15" style="width:100%;height:50px;border:none;background-color:#f5f5f5;">
                            </div>
                            <div class="col-12 m-b-20">
                                <input type="text" name="name" placeholder="{$lang.name}" class="p-l-15 p-r-15" style="width:100%;height:50px;border:none;background-color:#f5f5f5;">
                            </div>
                            <div class="col-6">
                                <input type="email" name="email" placeholder="{$lang.email}" class="p-l-15 p-r-15" style="width:100%;height:50px;border:none;background-color:#f5f5f5;">
                            </div>
                            <div class="col-6">
                                <input type="text" name="phone" placeholder="{$lang.phone}" class="p-l-15 p-r-15" style="width:100%;height:50px;border:none;background-color:#f5f5f5;">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-12 m-b-20">
                                <textarea name="message" placeholder="{$lang.message}" class="p-20" style="width:100%;height:200px;border:none;background-color:#f5f5f5;"></textarea>
                            </div>
                            <div class="col-12 text-right">
                                <button type="submit" class="btn btn-b-none" style="background-color:<?php echo Configuration::$vars['colors']['second']; ?>">{$lang.submit}</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <section class="p-20 p-md-40">
        <div class="container">
            <div class="row">
                <div class="col-2">
                    <figure class="d-flex align-items-center justify-content-center" style="height:40px;">
                        <img src="{$path.images}logotype.png" alt="SkyLab" style="height:100%;">
                    </figure>
                </div>
                <div class="col-2">
                    <figure class="d-flex align-items-center justify-content-center" style="height:40px;">
                        <img src="{$path.images}secretaria_salud.png" alt="Secretaría de salud" style="height:100%;">
                    </figure>
                </div>
                <div class="col-2">
                    <figure class="d-flex align-items-center justify-content-center" style="height:40px;">
                        <img src="{$path.images}cofepris.png" alt="COFEPRIS" style="height:100%;">
                    </figure>
                </div>
                <div class="col-2">
                    <figure class="d-flex align-items-center justify-content-center" style="height:40px;">
                        <img src="{$path.images}qroo_gobierno.png" alt="Gobierno de Qroo" style="height:100%;">
                    </figure>
                </div>
                <div class="col-2">
                    <figure class="d-flex align-items-center justify-content-center" style="height:40px;">
                        <img src="{$path.images}qroo_oportunidades.png" alt="Qroo Mas y mejores oportunidades" style="height:100%;">
                    </figure>
                </div>
                <div class="col-2">
                    <figure class="d-flex align-items-center justify-content-center" style="height:40px;">
                        <img src="{$path.images}qroo_sesa.png" alt="SESA" style="height:100%;">
                    </figure>
                </div>
            </div>
        </div>
    </section>
</main>
