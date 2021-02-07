<?php
/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Servicio técnico PC';
?>

<!-- Banner -->
<section class="slice-xl page-title border-bottom has-bg-cover bg-size-cover" style="background-image: url(../images/banners/banner-pc.jpg);">
    <span class="mask mask-dark--style-2"></span>
    <div class="container mask-container">
        <div class="row justify-content-end">
            <div class="col-md-6 text-center">
                <h4 class="heading heading-3 strong-600 mb-1 text-light text-uppercase">
                    Servicio Técnico
                </h4>
                <h3 class="heading heading-1 strong-600 mb-1 text-light text-uppercase">
                    Profesional
                </h3>
                <h4 class="heading heading-3 strong-600 mb-1 text-light text-uppercase">
                    a domicilio
                </h4>
            </div>
        </div>
    </div>
</section>
<!-- / Banner -->

<span class="space-xs-md"></span>

<div class="container">
    <div class="row">

        <!-- Servicios -->
        <div class="col-lg-9 mx-auto">
            <section class="text-center text-uppercase">
                <h5>!Nuestros <b>profesionales</b> se transladan a su oficina o domicilio <b>sin costo adicional</b> para solucionar cualquier tipo de problema que presente!</h5>
            </section>
            <section class="slice sct-color-1 services-boxes">
                <div class="container">
                    <!-- Mantencion logica -->
                    <div class="row row-no-padding">
                        <div class="col-lg-8 service-title right bg-primary">
                            <div class="pl-2 pr-2">
                                <h3 class="heading heading-3 text-uppercase text-light m-1">Mantención Lógica</h3>
                            </div>
                        </div>
                    </div>

                    <div class="row row-no-padding">
                        <div class="col-lg-6">
                            <div class="block block-image-holder">
                                <div class="block-image">
                                <?=
                                    Html::a(
                                        Html::img("../images/support/mant-logica.jpg", ['class' => 'img-fluid img-center']),
                                        ['services/contact', 'id' => 1]
                                    )
                                ?>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 ml-auto left align-self-lg-start">
                            <div class="py-2 px-5">
                                <ul>
                                    <li><strong>Visita a domicilio u oficina.</strong></li>
                                    <li><strong>Remoción de virus.</strong></li>
                                    <li><strong>Limpieza de registros y archivos temporales.</strong></li>
                                    <li><strong>Actualización de aplicaciones.</strong></li>
                                    <li><strong>Optimización de apps en "inicio automático"</strong></li>
                                </ul>
                                <p>Si desea mantenimiento a su sistema actual, éste es el servicio que usted necesita.</p>
                                <p class="font-weight-bold">Costo servicio: $19.900</p>
                                <?=
                                    Html::a('CONTRATAR', ['services/contact', 'id' => 1], ['class' => 'btn btn-styled btn-primary btn-block'])
                                ?>
                            </div>
                        </div>
                    </div>
                    <!-- / Mantencion logica -->

                    <span class="space-xs-lg"></span>

                    <!-- Formateo de notebook - pc -->
                    <div class="row row-no-padding">
                        <div class="col-lg-8 ml-auto service-title left bg-primary">
                            <div class="pl-2 pr-2">
                                <h3 class="heading heading-3 text-uppercase text-light m-1">Formateo de Notebook - PC</h3>
                            </div>
                        </div>
                    </div>

                    <div class="row row-no-padding">
                        <div class="col-lg-6 order-lg-2 ml-lg-auto">
                            <div class="block block-image-holder">
                                <div class="block-image">
                                    <?=
                                        Html::a(
                                            Html::img("../images/support/formateo.jpg", ['class' => 'img-fluid img-center']),
                                            ['services/contact', 'id' => 2]
                                        )
                                    ?>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 order-lg-1 right align-self-lg-start">
                            <div class="py-2 px-5">
                                <ul>
                                    <li><strong>Visita a domicilio u oficina.</strong></li>
                                    <li><strong>Respaldo de datos.</strong></li>
                                    <li><strong>Instalación de Microsoft Office.</strong></li>
                                    <li><strong>Instalación de controladores.</strong></li>
                                    <li><strong>Instalación de Antivirus.</strong></li>
                                </ul>
                                <p>Si su sistema presenta lentitud, tarda en partir o en responder como debe, ésta opción es la mejor. Instalar su sistema nuevo, limpio y sin problemas.</p>
                                <p class="font-weight-bold">Costo servicio: $24.900</p>
                                <?=
                                    Html::a('CONTRATAR', ['services/contact', 'id' => 2], ['class' => 'btn btn-styled btn-primary btn-block'])
                                ?>
                            </div>
                        </div>
                    </div>
                    <!-- / Formateo de notebook - pc -->

                    <span class="space-xs-lg"></span>

                    <!-- Mantencion termica -->
                    <div class="row row-no-padding">
                        <div class="col-lg-8 service-title right bg-primary">
                            <div class="pl-2 pr-2">
                                <h3 class="heading heading-3 text-uppercase text-light m-1">Mantención Térmica</h3>
                            </div>
                        </div>
                    </div>

                    <div class="row row-no-padding">
                        <div class="col-lg-6">
                            <div class="block block-image-holder">
                                <div class="block-image">
                                    <?=
                                        Html::a(
                                            Html::img("../images/support/mant-termica-pc.jpg", ['class' => 'img-fluid img-center']),
                                            ['services/contact', 'id' => 3]
                                        )
                                    ?>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 ml-auto left align-self-lg-start">
                            <div class="py-2 px-5">
                                <ul>
                                    <li><strong>Visita a domicilio u oficina.</strong></li>
                                    <li><strong>Remoción de polvo y suciedad.</strong></li>
                                    <li><strong>Limpieza y lubricación de ventiladores.</strong></li>
                                    <li><strong>Cambio de pasta térmica disipadora.</strong></li>
                                    <!-- <li><strong>Optimización de apps en "inicio automático"</strong></li> -->
                                </ul>
                                <p>Cuando el equipo sufre de recalentamiento, FPS bajos, sonidos extraños en ventiladores o está en un entorno de mucho polvo, necesita mantención térmica ¡URGENTE!.</p>
                                <p class="font-weight-bold">Costo PC: $29.900 - Notebook: $39.900</p>
                                <?=
                                    Html::a('CONTRATAR', ['services/contact', 'id' => 3], ['class' => 'btn btn-styled btn-primary btn-block'])
                                ?>
                            </div>
                        </div>
                    </div>
                    <!-- / Mantencion termica -->

                    <span class="space-xs-lg"></span>

                    <!-- Reparacion de bisagras de notebook -->
                    <div class="row row-no-padding">
                        <div class="col-lg-8 ml-auto service-title left bg-primary">
                            <div class="pl-2 pr-2">
                                <h3 class="heading heading-3 text-uppercase text-light m-1">Reparación de bisagras Notebook</h3>
                            </div>
                        </div>
                    </div>

                    <div class="row row-no-padding">
                        <div class="col-lg-6 order-lg-2 ml-lg-auto">
                            <div class="block block-image-holder">
                                <div class="block-image">
                                    <?=
                                        Html::a(
                                            Html::img("../images/support/bisagras.jpg", ['class' => 'img-fluid img-center']),
                                            ['services/contact', 'id' => 4]
                                        )
                                    ?>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 order-lg-1 right align-self-lg-start">
                            <div class="py-2 px-5">
                                <ul>
                                    <li><strong>Visita a domicilio u oficina.</strong></li>
                                </ul>
                                <p>Falla común en muchos modelos de notebooks. SIEMPRE tienen reparación, trabajamos con todos los equipos y todas las marcas.</p>
                                <p>Si la carcasa de tu notebook se abre o levanta al abrir y cerrar el equipo, éste es el servicio para ti.</p>
                                <p class="font-weight-bold">¡TODOS nuestros trabajos son garantizados!</p>
                                <p class="font-weight-bold">Costo servicio: $19.900</p>
                                <?=
                                    Html::a('CONTRATAR', ['services/contact', 'id' => 4], ['class' => 'btn btn-styled btn-primary btn-block'])
                                ?>
                            </div>
                        </div>
                    </div>
                    <!-- / Reparacion de bisagras de notebook -->

                    <span class="space-xs-lg"></span>

                    <!-- Cambio de disco duro -->
                    <div class="row row-no-padding">
                        <div class="col-lg-8 service-title right bg-primary">
                            <div class="pl-2 pr-2">
                                <h3 class="heading heading-3 text-uppercase text-light m-1">Cambio de disco duro</h3>
                            </div>
                        </div>
                    </div>

                    <div class="row row-no-padding">
                        <div class="col-lg-6">
                            <div class="block block-image-holder">
                                <div class="block-image">
                                    <?=
                                        Html::a(
                                            Html::img("../images/support/ssd.jpg", ['class' => 'img-fluid img-center']),
                                            ['services/contact', 'id' => 5]
                                        )
                                    ?>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 ml-auto left align-self-lg-start">
                            <div class="py-2 px-5">
                                <ul>
                                    <li><strong>Visita a domicilio u oficina.</strong></li>
                                    <li><strong>Instalacion de unidad de estado sólido (SSD).</strong></li>
                                    <li><strong>Ó instalación de disco duro mecánico (HDD)</strong></li>
                                    <li><strong>Instalación de MS Windows y aplicaciones</strong></li>
                                </ul>
                                <p>¿Quieres optimizar tu equipo actual?</p>
                                <p>Instalando un SSD te garantizamos: Aumento de rapidez, menos consumo de energía, menos producción de calor, menos pero, más resistente y sin ruidos.</p>
                                <p class="font-weight-bold">Costo servicio: $59.900</p>
                                <?=
                                    Html::a('CONTRATAR', ['services/contact', 'id' => 5], ['class' => 'btn btn-styled btn-primary btn-block'])
                                ?>
                            </div>
                        </div>
                    </div>
                    <!-- / Cambio de disco duro -->

                    <span class="space-xs-lg"></span>

                </div>
            </section>
        </div>
        <!-- / Servicios -->

        <!-- Sidebar -->
        <div class="col-lg-3 mx-auto">
            <div class="card text-white bg-blue">
                <div class="card-body">
                    <h5 class="card-title text-uppercase text-center heading heading-5 heading-inverse">
                        Lo que opinan nuestros clientes
                    </h5>
                </div>
            </div>
            <div class="block block--style-4 block--style-4-v1 bg-white">
                <div class="block-body">
                    <div class="text-center mt-4">
                        <h4 class="heading heading-6 strong-600 mb-0">
                            David Wally, CEO
                        </h4>
                        <h4 class="heading heading-6 c-gray-light strong-400">
                            Google
                        </h4>
                        <p class="mt-3">
                            Lorem ipsum dolor consectetur adipiscing elit eiusmod tempor incididunt ut labore.
                        </p>
                    </div>
                </div>
                <div class="info-author">
                    <div class="author-img">
                        <img src="../images/prv/people/person-1-75x75.png">
                    </div>
                </div>
            </div>

            <div class="block bg-white">
                <h3 class="text-uppercase text-center heading heading-5">También contamos con</h3>
                <div class="card text-white bg-primary">
                    <div class="card-body">
                        <h5 class="card-title text-uppercase text-center heading heading-5 heading-inverse">Reparaciones a nivel de hardware/físico</h5>
                    </div>
                </div>
                <div class="m-3">
                    <ul class="list-unstyled">
                        <li><i class="ion ion-checkmark mr-2 text-success"></i>Reparación de placa madre.</li>
                        <li><i class="ion ion-checkmark mr-2 text-success"></i>Cambio de pantalla.</li>
                        <li><i class="ion ion-checkmark mr-2 text-success"></i>Cambio de teclado.</li>
                        <li><i class="ion ion-checkmark mr-2 text-success"></i>Cambio de jack de carga.</li>
                        <li><i class="ion ion-checkmark mr-2 text-success"></i>Cambio de batería.</li>
                        <li><i class="ion ion-checkmark mr-2 text-success"></i>Cambio de disco duro.</li>
                        <li><i class="ion ion-checkmark mr-2 text-success"></i>Aumento de memoria RAM.</li>
                    </ul>
                </div>
                <p class="text-center">TODOS nuestros trabajos son GARANTIZADOS</p>
                <img src="../images/support/otras-reparaciones.jpg" class="img-fluid img-center mb-3">
                <p class="text-center">Trabajamos con TODAS las marcas del mercado.</p>
                <!-- marcas -->
                <div class="row">
                <?php foreach ($brands as $brand) : ?>
                    <div class="col-6">
                        <img class="img-fluid" src=".<?= $brand ?>"/>
                    </div>
                <?php endforeach; ?>
                </div>
            </div>
        </div>
        <!-- / Sidebar -->

    </div>
</div>
