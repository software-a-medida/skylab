<?php defined('_EXEC') or die; ?>

        <footer class="p-40">
            <div class="container">
                <div class="row m-b-20 m-b-md-40">
                    <div class="col-md-3 m-b-20 m-b-md-0">
                        <h6 class="m-b-5 text-uppercase text-dark"><strong>{$lang.contact_us}</strong></h6>
                        <nav class="m-b-20">
                            <ul class="list-unstyled">
                                <li class="m-b-5"><a href="<?php echo Configuration::$vars['rrss']['whatsapp']['url']; ?>" target="_blank" class="text-dark"><i class="fab fa-whatsapp m-r-5" style="color:#ff5722;"></i><?php echo Configuration::$vars['rrss']['whatsapp']['user']; ?></a></li>
                                <li class="m-b-5"><a href="mailto:<?php echo Configuration::$vars['contact']['email']; ?>" target="_blank" class="text-dark"><i class="fas fa-envelope m-r-5" style="color:#ff5722;"></i><?php echo Configuration::$vars['contact']['email']; ?></a></li>
                                <li><a href="tel:<?php echo Configuration::$vars['contact']['phone']; ?>" target="_blank" class="text-dark"><i class="fas fa-phone m-r-5" style="color:#ff5722;"></i><?php echo Configuration::$vars['contact']['phone']; ?></a></li>
                            </ul>
                        </nav>
                        <h6 class="m-b-5 text-uppercase text-dark"><strong>{$lang.follow_us}</strong></h6>
                        <nav>
                            <ul class="list-unstyled">
                                <li class="m-b-5"><a href="<?php echo Configuration::$vars['rrss']['facebook']['url']; ?>" target="_blank" class="text-dark"><i class="fab fa-facebook m-r-5" style="color:#ff5722;"></i><?php echo Configuration::$vars['rrss']['facebook']['user']; ?></a></li>
                                <li><a href="<?php echo Configuration::$vars['rrss']['instagram']['url']; ?>" target="_blank" class="text-dark"><i class="fab fa-instagram m-r-5" style="color:#ff5722;"></i><?php echo Configuration::$vars['rrss']['instagram']['user']; ?></a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-md-3">
                        <h6 class="m-b-5 text-uppercase text-dark"><strong>{$lang.website}</strong></h6>
                        <nav>
                            <ul class="list-unstyled">
            					<li class="m-b-5"><a href="/" class="text-dark">{$lang.home}</a></li>
            					<li class="m-b-5"><a href="#pruebas-covid-19" class="text-dark">{$lang.tests} COVID-19</a></li>
            					<li class="m-b-5"><a href="#agenda-una-cita" class="text-dark">{$lang.schedule_an_appointment}</a></li>
                                <li class="m-b-5"><a href="#contactanos" class="text-dark">{$lang.contact_us}</a></li>
                                <li class="m-b-5"><a href="/vcard" class="text-dark">{$lang.vcard}</a></li>
                                <li><a href="/aviso-de-privacidad" class="text-dark">{$lang.privacy_notice}</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div data-desktop class="col-md-6">
                        <figure class="text-right">
                            <img src="{$path.images}imagotype.png" alt="Imagotype" class="img-fluid" style="max-height:200px;">
                        </figure>
                    </div>
                </div>
                <div class="row no-gutters m-b-20 m-b-md-40">
                    <div class="col-3 p-5">
                        <figure class="p-5 p-md-10 text-center" style="border:1px solid #eee;border-radius:5px;">
                            <img src="{$path.images}secretaria_salud.png" alt="Secretaría de salud" class="hgt-auto" style="max-height:60px;">
                        </figure>
                    </div>
                    <div class="col-2 p-5">
                        <figure class="p-5 p-md-10 text-center" style="border:1px solid #eee;border-radius:5px;">
                            <img src="{$path.images}cofepris.png" alt="COFEPRIS" class="hgt-auto" style="max-height:60px;">
                        </figure>
                    </div>
                    <div class="col-2 p-5">
                        <figure class="p-5 p-md-10 text-center" style="border:1px solid #eee;border-radius:5px;">
                            <img src="{$path.images}qroo_gobierno_1.png" alt="Gobierno de Qroo" class="hgt-auto" style="max-height:60px;">
                        </figure>
                    </div>
                    <div class="col-2 p-5">
                        <figure class="p-5 p-md-10 text-center" style="border:1px solid #eee;border-radius:5px;">
                            <img src="{$path.images}qroo_gobierno_2.png" alt="Gobierno de Qroo" class="hgt-auto" style="max-height:60px;">
                        </figure>
                    </div>
                    <div class="col-3 p-5">
                        <figure class="p-5 p-md-10 text-center" style="border:1px solid #eee;border-radius:5px;">
                            <img src="{$path.images}qroo_sesa.png" alt="SESA" class="hgt-auto" style="max-height:60px;">
                        </figure>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 order-2 order-md-1">
                        <p class="text-dark">Copyright © 2021 <a href="https://one-consultores.com" target="_blank" class="text-dark"><strong>One Consultores</strong></a> <i data-desktop class="fas fa-heart m-l-5 m-r-5" style="color:#ff5722;"></i> <br data-mobile-block> {$lang.website} {$lang.development_by} <a href="https://codemonkey.com.mx" target="_blank" class="text-dark"><strong>Code Monkey</strong></a></p>
                    </div>
                    <div class="col-md-6 order-1 order-md-2 m-b-10 m-b-md-0">
                        <p class="text-left text-md-right text-dark"><?php echo Configuration::$vars['legal']['rfc']; ?> <span data-desktop>|</span> <br data-mobile-block> <?php echo Configuration::$vars['legal']['sanitary_opinion']; ?></p>
                    </div>
                </div>
            </div>
        </footer>
        <div class="pos-fixed" style="right:20px;bottom:20px;">
			<a href="<?php echo Configuration::$vars['rrss']['whatsapp']['url']; ?>" target="_blank" class="btn btn-b-none text-light" style="border:1px solid #fff;background-color:#009688;font-size:18px;z-index:110;"><i class="fab fa-whatsapp m-r-0 m-r-md-10"></i><span data-desktop>Whatsapp</span></a>
		</div>
        <script src="{$path.js}jquery-3.4.1.min.js"></script>
        <script src="https://cdn.codemonkey.com.mx/js/valkyrie.js"></script>
        <script src="https://cdn.codemonkey.com.mx/js/codemonkey.js"></script>
        <script src="{$path.js}scripts.js?v=1.0"></script>
        <script defer src="https://kit.fontawesome.com/743152b0c5.js"></script>
        {$dependencies.js}
        {$dependencies.other}
    </body>
</html>
