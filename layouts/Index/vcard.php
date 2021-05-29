<?php defined('_EXEC') or die; ?>

<main>
    <section class="pos-relative d-flex align-items-center justify-content-center flex-column p-40" style="height:calc(100vh - 60px);background-color:#ff5722;">
        <figure class="pos-absolute" style="right:0px;bottom:0px;opacity:0.1;">
            <img src="{$path.images}vcard_background.png" alt="Background" class="img-fluid">
        </figure>
        <div class="p-5 m-b-20" style="width:160px;height:160px;border:4px solid #fff;border-radius:50%;">
            <figure style="width:100%;height:100%;border-radius:50%;">
                <img src="{$path.images}icontype.png" alt="Logotype" class="img-fluid">
            </figure>
        </div>
        <h1 class="m-b-20 text-uppercase text-light"><strong>SkyLab</strong></h1>
        <div class="row">
            <div class="col-4">
                <a href="<?php echo Configuration::$vars['rrss']['whatsapp']['url']; ?>"><i class="fab fa-whatsapp"></i><span>Whatsapp</span></a>
            </div>
            <div class="col-4">
                <a href="tel:<?php echo Configuration::$vars['contact']['phone']; ?>"><i class="fas fa-phone-alt"></i><span>Llamada</span></a>
            </div>
            <div class="col-4">
                <a href="mailto:<?php echo Configuration::$vars['contact']['email']; ?>"><i class="fas fa-envelope"></i><span>Email</span></a>
            </div>
            <div class="col-4">
                <a href="https://www.google.com.mx/maps/dir//21.1487581,-86.8450274/@21.1490613,-86.8451551,18z/data=!4m2!4m1!3e0" target="_blank"><i class="fas fa-map-marked-alt"></i><span>Ubicación</span></a>
            </div>
            <div class="col-4">
                <a href="https://skylabs.mx" target="_blank"><i class="fas fa-globe"></i><span>Sitio web</span></a>
            </div>
            <div class="col-4">
                <a data-action="share" data-title="SkyLab" data-text="¡Conóce SkyLab!" data-url="https://skylabs.mx/vcard"><i class="fas fa-share-alt"></i><span>Compartir</span></a>
            </div>
        </div>
    </section>
    <section class="d-flex align-items-center justify-content-center" style="height:60px;border-top:4px solid #fff;background-color:#2196F3;">
        <p class="text-light">www.skylabs.mx</p>
    </section>
</main>
