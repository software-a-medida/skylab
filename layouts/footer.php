<?php defined('_EXEC') or die; ?>

        <footer class="p-b-40">
            <div class="container">
                <div data-desktop class="row m-b-20 m-b-md-40">
                    <div class="col-md-3 m-b-20 m-b-md-0">
                        <h6 class="m-b-5 text-uppercase"><strong>{$lang.contact_us}</strong></h6>
                        <nav class="m-b-20">
                            <ul class="list-unstyled">
                                <li class="m-b-5"><a href="<?php echo Configuration::$vars['rrss']['whatsapp']['url']; ?>" target="_blank"><i class="fab fa-whatsapp m-r-5" style="color:#ff5722;"></i><?php echo Configuration::$vars['rrss']['whatsapp']['user']; ?></a></li>
                                <li class="m-b-5"><a href="mailto:<?php echo Configuration::$vars['contact']['email']; ?>" target="_blank"><i class="fas fa-envelope m-r-5" style="color:#ff5722;"></i><?php echo Configuration::$vars['contact']['email']; ?></a></li>
                                <li><a href="tel:<?php echo Configuration::$vars['contact']['phone']; ?>" target="_blank"><i class="fas fa-phone m-r-5" style="color:#ff5722;"></i><?php echo Configuration::$vars['contact']['phone']; ?></a></li>
                            </ul>
                        </nav>
                        <h6 class="m-b-5 text-uppercase"><strong>{$lang.follow_us}</strong></h6>
                        <nav>
                            <ul class="list-unstyled">
                                <li class="m-b-5"><a href="<?php echo Configuration::$vars['rrss']['facebook']['url']; ?>" target="_blank"><i class="fab fa-facebook m-r-5" style="color:#ff5722;"></i><?php echo Configuration::$vars['rrss']['facebook']['user']; ?></a></li>
                                <li><a href="<?php echo Configuration::$vars['rrss']['instagram']['url']; ?>" target="_blank"><i class="fab fa-instagram m-r-5" style="color:#ff5722;"></i><?php echo Configuration::$vars['rrss']['instagram']['user']; ?></a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-md-3">
                        <h6 class="m-b-5 text-uppercase"><strong>{$lang.website}</strong></h6>
                        <nav>
                            <ul class="list-unstyled">
            					<li class="m-b-5"><a href="/">{$lang.home}</a></li>
            					<li class="m-b-5"><a href="#pruebas-covid-19">{$lang.tests} COVID-19</a></li>
            					<li class="m-b-5"><a href="#agenda-una-cita">{$lang.schedule_an_appointment}</a></li>
                                <li class="m-b-5"><a href="#contactanos">{$lang.contact_us}</a></li>
                                <li><a href="/aviso-de-privacidad">{$lang.privacy_notice}</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-md-6">
                        <figure class="text-right">
                            <img src="{$path.images}imagotype.png" alt="Imagotype" class="img-fluid" style="max-height:200px;">
                        </figure>
                    </div>
                </div>
                <div class="row m-b-20 m-b-md-40">
                    <div class="col-12 col-md-3 m-b-10 m-b-md-0">
                        <figure class="p-10 text-center" style="border:1px solid #eee;border-radius:4px;">
                            <img src="{$path.images}secretaria_salud.png" alt="Secretaría de salud" class="img-fluid" style="max-height:60px;">
                        </figure>
                    </div>
                    <div class="col-4 col-md-2 m-b-10 m-b-md-0">
                        <figure class="p-5 p-md-10 text-center" style="border:1px solid #eee;border-radius:4px;">
                            <img src="{$path.images}cofepris.png" alt="COFEPRIS" class="img-fluid" style="max-height:60px;">
                        </figure>
                    </div>
                    <div class="col-4 col-md-2 m-b-10 m-b-md-0">
                        <figure class="p-5 p-md-10 text-center" style="border:1px solid #eee;border-radius:4px;">
                            <img src="{$path.images}qroo_gobierno_1.png" alt="Gobierno de Qroo" class="img-fluid" style="max-height:60px;">
                        </figure>
                    </div>
                    <div class="col-4 col-md-2 m-b-10 m-b-md-0">
                        <figure class="p-5 p-md-10 text-center" style="border:1px solid #eee;border-radius:4px;">
                            <img src="{$path.images}qroo_gobierno_2.png" alt="Gobierno de Qroo" class="img-fluid" style="max-height:60px;">
                        </figure>
                    </div>
                    <div class="col-12 col-md-3">
                        <figure class="p-10 text-center" style="border:1px solid #eee;border-radius:4px;">
                            <img src="{$path.images}qroo_sesa.png" alt="SESA" class="img-fluid" style="max-height:60px;">
                        </figure>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 order-2 order-md-1">
                        <p>Copyright © 2021 <a href="https://one-consultores.com" target="_blank"><strong>One Consultores</strong></a> <i data-desktop class="fas fa-heart m-l-5 m-r-5" style="color:#ff5722;"></i> <br data-mobile-block> {$lang.website} {$lang.development_by} <a href="https://codemonkey.com.mx" target="_blank"><strong>Code Monkey</strong></a></p>
                    </div>
                    <div class="col-md-6 order-1 order-md-2 m-b-10 m-b-md-0">
                        <p class="text-left text-md-right"><?php echo Configuration::$vars['legal']['sanitary_opinion']; ?> <span data-desktop>|</span> <br data-mobile-block> <?php echo Configuration::$vars['legal']['rfc']; ?></p>
                    </div>
                </div>
            </div>
        </footer>
        <div id="wa_flat" class="pos-fixed" style="right:20px;bottom:20px;">
			<a href="<?php echo Configuration::$vars['rrss']['whatsapp']['url']; ?>" target="_blank" class="btn btn-b-none text-light" style="font-size:18px;border-radius:60px;background-color:#00bb2d;z-index:99;"><i class="fab fa-whatsapp m-r-10"></i>Whatsapp</a>
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
