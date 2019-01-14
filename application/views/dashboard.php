<div class="row no-gutters">
    <div class="col p-3">
        <h3 class="text-uppercase"><i class="fas fa-home text-info f4 mr-2"></i>Tableau de bord</h3>
        <section class="section section-sm">
            <div class="d-flex align-items-baseline justify-content-between mb-3">
                <h4>Projets en cours</h4>
                <a href="" class="">Voir tous mes projets<i class="fas fa-angle-right ml-2"></i></a>
            </div>
            <div class="card p-3"></div>
        </section>
        <section class="section section-sm">
            <div class="d-flex align-items-baseline justify-content-between mb-3">
                <h4>Propositions de collaboration</h4>
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
            <div class="row">
                <?php for ($i = 0; $i < 4; $i++): ?>
                <div class="col-lg-6 mb-4">
                    <div class="card shadow--hover border-0 bg-white p-3">
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
                                    <div class="d-flex justify-content-between align-items-baseline mb-3">
                                        <span>2 ans d'expérience</span>
                                        <span><span class="lead font-weight-bold">300€</span>/j</span>
                                    </div>
                                    <p class="flex-grow-1 small text-muted">Lorem ipsum dolor sit amet, consectetur
                                        adipisicing elit.
                                        Minus similique commodi magni, aliquam, omnis rem vel sunt libero
                                        incidunt quis velit! Dicta amet quod delectus vel laborum, at possimus...</p>
                                    <a href="">
                                        <p class="text-right small">Voir le profil<i class="fas fa-angle-right ml-2"></i></p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endfor?>
            </div>
        </section>
    </div>
    <div class="col-3 bg-secondary p-3">
        <h4>Notifications</h4>
    </div>
</div>