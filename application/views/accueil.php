<!-- bannière -->
<section class="section section-lg banner banner-main">
	<div class="container text-white">
		<div class="row">
			<div class="col-lg-6">
				<h1 class="display-2 text-white text-shadow mb-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-5">
				<p class="text-shadow mb-5">Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
					Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
					nisi ut aliquip ex ea commodo consequat.</p>
				<button type="button" class="btn btn-primary">EXPECTEUR</button>
				<button type="button" class="btn btn-secondary">CUPIDATAT</button>
			</div>
		</div>
	</div>
	<img src="<?=base_url()?>assets/img/people/happy_guy.png" alt="happy guy" class="parallax">
</section>
<section class="section section-md bg-secondary p-rel">
	<div class="people-background mb-5">
		<div class="container z-index-1 p-rel">
			<h3 class="text-center mb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h3>
			<p class="text-center mb-5">Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. <br>
				Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
			</p>
			<div class="card rounded-4 bg-white shadow border-0 p-4 mx-5 mb-4">
				<p><img src="<?=base_url()?>assets/img/icons/quotes.svg" alt="quotes" class="quotes">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
					Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
					Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
			</div>
			<div class="row">
				<div class="col-lg-3">
					<div class="card bg-default shadow border-0 mt-5 ml-4 position-relative">
						<img src="<?=base_url()?>assets/img/people/people_vert_1.jpg" alt="happy client" class="card-img-top">
						<div class="position-absolute text-white text-center text-shadow people-card mb-3">
							<p class="mb-0 font-weight-bold">Lorem</p>
							<small>Lorem, ipsum.</small>
						</div>
					</div>
				</div>
				<div class="col-lg-3">
					<div class="card bg-default shadow border-0 position-relative">
						<img src="<?=base_url()?>assets/img/people/people_vert_2.jpg" alt="happy client" class="card-img-top">
						<div class="position-absolute text-white text-center text-shadow people-card mb-3">
							<p class="mb-0 font-weight-bold">Lorem</p>
							<small>Lorem, ipsum.</small>
						</div>
					</div>
				</div>
				<div class="col-lg-3">
					<div class="card bg-default shadow border-0 mt-5 position-relative">
						<img src="<?=base_url()?>assets/img/people/people_vert_3.jpg" alt="happy client" class="card-img-top">
						<div class="position-absolute text-white text-center text-shadow people-card mb-3">
							<p class="mb-0 font-weight-bold">Lorem</p>
							<small>Lorem, ipsum.</small>
						</div>
					</div>
				</div>
				<div class="col-lg-3">
					<div class="card bg-default shadow border-0 mt-4 mr-4 position-relative">
						<img src="<?=base_url()?>assets/img/people/people_vert_4.jpg" alt="happy client" class="card-img-top">
						<div class="position-absolute text-white text-center text-shadow people-card mb-3">
							<p class="mb-0 font-weight-bold">Lorem</p>
							<small>Lorem, ipsum.</small>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row py-5">
			<div class="col-lg-4 text-center">
				<p class="display-3">4542</p>
				<p class="small">projets réalisés</p>
			</div>
			<div class="col-lg-4 text-center">
				<p class="display-3">671</p>
				<p class="small">freelances disponibles <br>pour réaliser le votre</p>
			</div>
			<div class="col-lg-4 text-center">
				<p class="display-3">94%</p>
				<p class="small">de notre clients sont satisfaits</p>
			</div>
		</div>
		<div class="row align-items-center">
			<div class="col-lg-4">
				<h3 class="">Lorem ipsum dolor sit amet.</h3>
				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
					<br>Deserunt necessitatibus voluptate minima pariatur dignissimos, vitae dolorem excepturi earum iusto officia?</p>
			</div>
			<div class="col-lg-8">
				<img src="<?=base_url()?>assets/img/brands/showcase.png" alt="brands showcase">
			</div>
		</div>
	</div>
</section>
<section class="section section-md bg-secondary">
	<div class="fade-bottom fade-secondary">
		<div class="container">
			<h3 class="text-center mb-3">Ils pourraient vous intéresser.</h3>
			<div class="row">
				<?php for ($i = 0; $i < 4; $i++): ?>
				<div class="col-lg-6 mb-4">
					<div class="card shadow border-0 bg-white p-3">
						<div class="row">
							<div class="col-6">
								<div class="text-center">
									<img src="<?=base_url()?>assets/img/people/people_square_1.jpg" alt="" class="img-fluid rounded-circle" width="70px">
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
									<p class="flex-grow-1 small text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
										Minus similique commodi magni, aliquam, omnis rem vel sunt libero
										incidunt quis velit! Dicta amet quod delectus vel laborum, at possimus...</p>
									<a href=""><p class="text-right small">Voir le profil<i class="fas fa-angle-right ml-2"></i></p></a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<?php endfor?>
			</div>
		</div>
	</div>
</section>
