<?php defined('_EXEC') or die; ?>

        <footer class="p-40" style="background-color:<?php echo Configuration::$vars['colors']['first']; ?>;">
            <div class="container">
                <div class="row m-b-20 m-b-md-40">
                    <div class="col-md-3 m-b-20 m-b-md-0">
                        <h6 class="m-b-5 text-uppercase text-light">{$lang.contact_us}</h6>
                        <nav class="m-b-20">
                            <ul class="list-unstyled">
                                <li class="m-b-5"><a href="mailto:<?php echo Configuration::$vars['contact']['email']; ?>" target="_blank" class="text-light"><i class="fas fa-envelope m-r-5"></i><?php echo Configuration::$vars['contact']['email']; ?></a></li>
                                <li><a href="tel:<?php echo Configuration::$vars['contact']['phone']; ?>" target="_blank" class="text-light"><i class="fas fa-phone m-r-5"></i><?php echo Configuration::$vars['contact']['phone']; ?></a></li>
                            </ul>
                        </nav>
                        <h6 class="m-b-5 text-uppercase text-light">{$lang.follow_us}</h6>
                        <nav>
                            <ul class="list-unstyled">
                                <li class="m-b-5"><a href="<?php echo Configuration::$vars['rrss']['facebook']['url']; ?>" target="_blank" class="text-light"><i class="fab fa-facebook m-r-5"></i><?php echo Configuration::$vars['rrss']['facebook']['user']; ?></a></li>
                                <li class="m-b-5"><a href="<?php echo Configuration::$vars['rrss']['instagram']['url']; ?>" target="_blank" class="text-light"><i class="fab fa-instagram m-r-5"></i><?php echo Configuration::$vars['rrss']['instagram']['user']; ?></a></li>
                                <li class="m-b-5"><a href="<?php echo Configuration::$vars['rrss']['linkedin']['url']; ?>" target="_blank" class="text-light"><i class="fab fa-linkedin m-r-5"></i><?php echo Configuration::$vars['rrss']['linkedin']['user']; ?></a></li>
                                <li><a href="<?php echo Configuration::$vars['rrss']['whatsapp']['url']; ?>" target="_blank" class="text-light"><i class="fab fa-whatsapp m-r-5"></i><?php echo Configuration::$vars['rrss']['whatsapp']['user']; ?></a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-md-3 m-b-20 m-b-md-0">
                        <h6 class="m-b-5 text-uppercase text-light">{$lang.website}</h6>
                        <nav>
                            <ul class="list-unstyled">
                                <li class="m-b-5"><a href="#inicio" class="text-light">{$lang.home}</a></li>
            					<li class="m-b-5"><a href="#covid-19" class="text-light">{$lang.covid_19}</a></li>
            					<li class="m-b-5"><a href="#otros-servicios" class="text-light">{$lang.other_services}</a></li>
            					<li class="m-b-5"><a href="#cotiza-ahora" class="text-light">{$lang.quote_now}</a></li>
            					<li class="m-b-5"><a href="https://skylab.setmore.com/" target="_blank" class="text-light">{$lang.book_now}</a></li>
            					<li class="m-b-5"><a href="/vcard" class="text-light">{$lang.vcard}</a></li>
                                <li><a href="/aviso-de-privacidad" class="text-light">{$lang.privacy_notice}</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-md-6 d-flex justify-content-end">
                        <figure style="width:100%;max-width:100px;">
                            <img src="{$path.images}imagotype_white_2.png" alt="Logotype" style="width:100%;">
                        </figure>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 order-2 order-md-1">
                        <p class="text-light">Copyright © 2021 <a href="https://one-consultores.com" target="_blank" class="text-light"><strong>One Consultores</strong></a> <i data-desktop class="fas fa-heart" style="color:#f44336;"></i> <br data-mobile-block> {$lang.website} {$lang.development_by} <a href="https://codemonkey.com.mx" target="_blank" class="text-light"><strong>Code Monkey</strong></a></p>
                    </div>
                    <div class="col-md-6 order-1 order-md-2 m-b-10 m-b-md-0">
                        <p class="text-left text-md-right text-light">Dictámen sanitario: DPCRS-CZNCS-1029-2021 <span data-desktop>|</span> <br data-mobile-block> MSA1907259GA <span data-desktop>|</span> Marbu Salud S.A. de C.V.</p>
                    </div>
                </div>
            </div>
        </footer>
        <script src="{$path.js}jquery-3.4.1.min.js"></script>
        <script src="https://cdn.codemonkey.com.mx/js/valkyrie.js"></script>
        <script src="https://cdn.codemonkey.com.mx/js/codemonkey.js"></script>
        <script src="{$path.js}scripts.js?v=1.0"></script>
        <script defer src="https://kit.fontawesome.com/743152b0c5.js"></script>
        {$dependencies.js}
        {$dependencies.other}
    </body>
</html>
