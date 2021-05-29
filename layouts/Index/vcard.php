<?php

defined('_EXEC') or die;

$this->dependencies->add(['js', '{$path.js}Index/vcard.js?v=1.0']);

?>

<main>
    <section class="d-flex align-items-end justify-content-center p-20" style="height:40vh;background-color:#ff5722;">
        <div class="p-5 m-b-20" style="width:160px;height:160px;border:2px solid #fff;border-radius:50%;">
            <figure style="width:100%;height:100%;border-radius:50%;">
                <img src="{$path.images}icontype.png" alt="Logotype" class="img-fluid">
            </figure>
        </div>
    </section>
    <section class="p-t-20 p-r-20 p-l-20">
        <div class="row">
            <div class="col-4 m-b-20 text-center">
                <a href="tel:<?php echo Configuration::$vars['contact']['phone']; ?>" target="_blank" class="text-dark" style="font-size:40px;"><i class="fas fa-phone-alt"></i></a>
                <p>{$lang.call}</p>
            </div>
            <div class="col-4 m-b-20 text-center">
                <a href="mailto:<?php echo Configuration::$vars['contact']['email']; ?>" target="_blank" class="text-dark" style="font-size:40px;"><i class="fas fa-envelope"></i></a>
                <p>E-mail</p>
            </div>
            <div class="col-4 m-b-20 text-center">
                <a href="<?php echo Configuration::$vars['rrss']['whatsapp']['url']; ?>" target="_blank" class="text-dark" style="font-size:40px;"><i class="fab fa-whatsapp"></i></a>
                <p>Whatsapp</p>
            </div>
            <div class="col-12 m-b-20">
                <div class="p-20" style="border-radius:5px;background-color:#f5f5f5;">
                    <p class="text-dark"><strong>{$lang.phone}</strong></p>
                    <a href="tel:<?php echo Configuration::$vars['contact']['phone']; ?>" target="_blank" class="text-dark"><?php echo Configuration::$vars['contact']['phone']; ?></a>
                </div>
            </div>
            <div class="col-12 m-b-20">
                <div class="p-20" style="border-radius:5px;background-color:#f5f5f5;">
                    <p class="text-dark"><strong>{$lang.email}</strong></p>
                    <a href="mailto:<?php echo Configuration::$vars['contact']['email']; ?>" target="_blank" class="text-dark"><?php echo Configuration::$vars['contact']['email']; ?></a>
                </div>
            </div>
            <div class="col-12 m-b-20">
                <div class="p-20" style="border-radius:5px;background-color:#f5f5f5;">
                    <p class="text-dark"><strong>Whatsapp</strong></p>
                    <a href="<?php echo Configuration::$vars['rrss']['whatsapp']['url']; ?>" target="_blank" class="text-dark"><?php echo Configuration::$vars['rrss']['whatsapp']['user']; ?></a>
                </div>
            </div>
            <div class="col-4 m-b-20">
                <div class="p-10 text-center" style="border-radius:5px;background-color:#f5f5f5;">
                    <a href="https://www.google.com.mx/maps/dir//<?php echo Configuration::$vars['location']['lat']; ?>,<?php echo Configuration::$vars['location']['lng']; ?>/@<?php echo Configuration::$vars['location']['lat']; ?>,<?php echo Configuration::$vars['location']['lng']; ?>,20z/" target="_blank" class="text-dark" style="font-size:40px;"><i class="fas fa-map-marker-alt"></i></a>
                    <p>{$lang.location}</p>
                </div>
            </div>
            <div class="col-4 m-b-20">
                <div class="p-10 text-center" style="border-radius:5px;background-color:#f5f5f5;">
                    <a href="/" class="text-dark" style="font-size:40px;"><i class="fas fa-globe"></i></a>
                    <p>{$lang.website}</p>
                </div>
            </div>
            <div class="col-4 m-b-20">
                <div class="p-10 text-center" style="border-radius:5px;background-color:#f5f5f5;">
                    <a data-action="share" data-title="SkyLab" data-text="¡{$lang.know} SkyLab!" data-url="https://<?php echo Configuration::$domain; ?>/vcard" class="text-dark" style="font-size:40px;"><i class="fas fa-share-alt"></i></a>
                    <p>{$lang.share}</p>
                </div>
            </div>
            <div class="col-12">
                <figure>
                    <img src="{$path.images}vcard_qr.png" alt="Qr" style="width:100%;">
                </figure>
            </div>
        </div>
    </section>
    <section class="p-20" style="background-color:#2196F3;">
        <p class="text-center text-light">www.<?php echo Configuration::$domain; ?></p>
    </section>
</main>
