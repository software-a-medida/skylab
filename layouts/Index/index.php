<?php defined('_EXEC') or die; ?>

<main>
    <section class="pos-relative" style="height:100vh;">
        <figure style="height:100%;">
            <img src="{$path.images}home.jpg" class="img-cover">
        </figure>
        <div class="pos-absolute d-flex align-items-end p-20 p-md-40" style="top:0px;right:0px;bottom:0px;left:0px;background-color:rgba(0,0,0,0.2);">
            <div class="container">
                <h1 class="m-b-20 text-center text-light">{$lang.hm_tt_1}</h1>
                <p class="m-b-20 text-center text-light">{$lang.hm_tt_2}</p>
                <div class="d-flex justify-content-center m-b-20 m-b-md-40">
                    <a href="/contactanos" class="btn" style="width:100%;max-width:200px;border:0px;border-radius:40px;background-color:#263689;">{$lang.contact_us}</a>
                </div>
            </div>
        </div>
    </section>
</main>
