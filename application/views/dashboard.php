<div class="row no-gutters">
    <div class="col p-4">
        <h3 class="text-uppercase"><i class="fas fa-home text-info f4 mr-2"></i>Tableau de bord</h3>
        <section class="section section-sm">
            <div class="d-flex align-items-baseline justify-content-between mb-3">
                <h4>Projets en cours</h4>
                <a href="" class="">Voir tous mes projets<i class="fas fa-angle-right ml-2"></i></a>
            </div>
            <div class="card p-4"></div>
        </section>
        <section class="section section-sm">
            <div class="d-flex align-items-baseline justify-content-between mb-3">
                <h4>Nouvelle proposition de collaboration</h4>
                <a href="" class="">Voir toutes mes propositions<i class="fas fa-angle-right ml-2"></i></a>
            </div>
            <!-- <div class="card p-3">
                    <div class="row">
                        <div class="col-4 row">
                            <div class="col-4"><img src="<?=base_url()?>/assets/img/people/people_square_1.jpg" alt="" class="img-fluid rounded-circle"></div>
                            <div class="col-8"></div>
                        </div>
                        <div class="col-8">jhjghf</div>
                    </div>
                </div> -->
            <div class="card p-4 mb-4">
                <div class="row">
                    <div class="col-3">
                        <div class="text-center">
                            <img src="<?=base_url()?>/assets/img/people/people_square_1.jpg" alt="" class="img-fluid rounded-circle"
                                width="70px">
                            <h5>James Trudaut</h5>
                            <p class="text-muted font-weight-bold">Front Engineer</p>
                            <div class="small mb-2">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star text-light"></i>
                                <i class="fas fa-star text-light"></i>
                                <i class="fas fa-acorn"></i>
                            </div>
                        </div>
                        <div class="mb-2">
                            <span class="badge badge-pill badge-info mr-1 mb-1">Lorem</span>
                            <span class="badge badge-pill badge-info mr-1 mb-1">Ipsum Amet</span>
                            <span class="badge badge-pill badge-info mr-1 mb-1">Dolor sit</span>
                            <span class="badge badge-pill badge-info mr-1 mb-1">Amet consectetur</span>
                            <span class="small text-info text-no-wrap">+ 4 autres</span>
                        </div>
                        <a href="" class="">
                            <p class="text-center">Voir le profil<i class="fas fa-angle-right ml-2"></i></p>
                        </a>
                    </div>
                    <div class="col">
                        <div class="row mb-3">
                            <!-- <span>2 ans d'expérience</span> -->
                            <span class="col-2"><span class="lead font-weight-bold">4</span> jalons</span>
                            <span class="col-2"><span class="lead font-weight-bold">22</span> jours</span>
                            <span class="col-2"><span class="lead font-weight-bold">300€</span>/j</span>
                            <span class="col text-right"><span class="h4">6000</span>€</span>
                        </div>
                        <p class="text-muted description mb-3">Lorem ipsum dolor sit amet, consectetur
                            adipisicing elit.
                            Minus similique commodi magni, aliquam, omnis rem vel sunt libero
                            incidunt quis velit! Dicta amet quod delectus vel laborum, at possimus...</p>
                        <div class="">
                            <?php for ($j = 0; $j < 4; $j++): ?>
                            <div class="mb-3">
                                <div class="d-flex justify-content-between text-muted">
                                    <p class="font-weight-bold">
                                        <span class="icon-sm icon-shape bg-gradient-primary rounded-circle text-white mr-2">
                                            <?=$j + 1?></span>Nostrud exercitation
                                    </p>
                                    <span>4 jours</span>
                                </div>
                                <ul>
                                    <li>Lorem ipsum dolor sit amet.</li>
                                    <li>Lorem ipsum dolor sit amet.</li>
                                    <li>Lorem ipsum dolor sit amet.</li>
                                </ul>
                            </div>
                            <?php endfor?>
                        </div>
                        <div class="text-right">
                            <button type="button" class="btn btn-warning">REFUSER</button>
                            <button type="button" class="btn btn-primary">ACCEPTER</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section section-sm">
            <div class="d-flex align-items-baseline justify-content-between mb-3">
                <h4>Ils pourraient vous intéresser</h4>
                <a href="" class="">Rechercher un freelance<i class="fas fa-angle-right ml-2"></i></a>
            </div>
            <?php for ($i = 0; $i < 2; $i++): ?>
            <div class="card p-4 mb-4">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="row">
                            <div class="col-6">
                                <div class="text-center">
                                    <img src="<?=base_url()?>/assets/img/people/people_square_1.jpg" alt="" class="img-fluid rounded-circle"
                                        width="70px">
                                    <h5>James Trudaut</h5>
                                    <p class="text-muted font-weight-bold">Front Engineer</p>
                                    <div class="small mb-2">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star text-light"></i>
                                        <i class="fas fa-star text-light"></i>
                                        <i class="fas fa-acorn"></i>
                                    </div>
                                </div>
                                <div>
                                    <span class="badge badge-pill badge-info mr-1 mb-1">Lorem</span>
                                    <span class="badge badge-pill badge-info mr-1 mb-1">Ipsum Amet</span>
                                    <span class="badge badge-pill badge-info mr-1 mb-1">Dolor sit</span>
                                    <span class="badge badge-pill badge-info mr-1 mb-1">Amet consectetur</span>
                                    <span class="small text-info text-no-wrap">+ 4 autres</span>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="d-flex flex-column h-100">

                                    <p class="font-weight-bold text-uppercase text-muted small">Présentation</p>
                                    <div class="d-flex justify-content-between align-items-baseline mb-3">
                                        <!-- <span>2 ans d'expérience</span> -->
                                        <span><span class="lead font-weight-bold">300€</span>/j</span>
                                    </div>
                                    <p class="flex-grow-1 description text-muted">Lorem ipsum dolor sit amet,
                                        consectetur
                                        adipisicing elit.
                                        Minus similique commodi magni, aliquam, omnis rem vel sunt libero
                                        incidunt quis velit! Dicta amet quod delectus vel laborum, at possimus...</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 d-flex flex-column">
                        <p class="font-weight-bold text-uppercase text-muted small">Dernières réalisations</p>
                        <div class="row flex-grow-1">
                            <?php for ($i = 0; $i < 2; $i++): ?>
                            <div class="col-lg-6 mb-4">
                                <p class="font-weight-bold description">Lorem ipsum dolor sit amet.</p>
                                <img src="<?=base_url()?>/assets/img/desktops/desktop.jpg" alt="">
                                <p class=" text-right text-muted small">il y a 8 jours</p>
                            </div>
                            <?php endfor?>
                        </div>
                        <a href="">
                            <p class="text-right">
                                <button type="button" class="btn btn-info btn-sm">Voir le profil<i class="fas fa-angle-right ml-2"></i></button>
                            </p>
                        </a>
                    </div>
                </div>
            </div>
            <?php endfor?>
        </section>
        <section class="section section-sm">
            <div class="d-flex align-items-baseline justify-content-between mb-3">
                <h4>Nouveaux arrivants</h4>
                <a href="" class="">Rechercher un freelance<i class="fas fa-angle-right ml-2"></i></a>
            </div>
            <div class="row">
                <?php for ($i = 0; $i < 4; $i++): ?>
                <div class="col-3">
                    <div class="card p-4 mb-4">
                        <div class="text-center">
                            <img src="<?=base_url()?>/assets/img/people/people_square_1.jpg" alt="" class="img-fluid rounded-circle"
                                width="70px">
                            <h5>James Trudaut</h5>
                            <p class="text-muted font-weight-bold">Front Engineer</p>
                            <div class="small mb-2">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star text-light"></i>
                                <i class="fas fa-star text-light"></i>
                                <i class="fas fa-acorn"></i>
                            </div>
                        </div>
                        <div>
                            <span class="badge badge-pill badge-info mr-1 mb-1">Lorem</span>
                            <span class="badge badge-pill badge-info mr-1 mb-1">Ipsum Amet</span>
                            <span class="badge badge-pill badge-info mr-1 mb-1">Dolor sit</span>
                            <span class="badge badge-pill badge-info mr-1 mb-1">Amet consectetur</span>
                            <span class="small text-info text-no-wrap">+ 4 autres</span>
                        </div>
                    </div>
                </div>
                <?php endfor?>
            </div>
        </section>
    </div>
    <div class="col-3 bg-secondary p-4">
        <h4>Notifications</h4>
    </div>
</div>