<?= $this->extend($config->viewLayout) ?>
<?= $this->section('main') ?>

<div class="container">
<!-- Outer Row -->
<div class="row justify-content-center">

<div class="col-md-6">

	<div class="card o-hidden border-0 shadow-lg my-5">
		<div class="card-body p-0">
			<!-- Nested Row within Card Body -->
			<div class="row">
			  
				<div class="col-lg">
					<div class="p-5">
						<div class="text-center">
							<h1 class="h4 text-gray-900 mb-4">Selamat Datang</h1>
							
							<h6 class="h5 text-gray-900 mb-4">Bright Gas Distribution System <br> PT.Kalco Patra Energi Palu</h6>
						</div>

					<?= view('Myth\Auth\Views\_message_block') ?>

					<form class="user" action="<?= route_to('login') ?>" method="post">
						<?= csrf_field() ?>

<?php if ($config->validFields === ['email']): ?>
						<div class="form-group">
							<label for="login">Email Atau Nama Pengguna</label>
							<input  id="exampleInputEmail" aria-describedby="emailHelp" type="email" class="form-control  form-control-user <?php if(session('errors.login')) : ?>is-invalid<?php endif ?>"
								   name="login" placeholder="<?=lang('Auth.email')?>">
							<div class="invalid-feedback">
								<?= session('errors.login') ?>
							</div>
						</div>
<?php else: ?>
						<div class="form-group">
							<label for="login">Email Atau Nama Pengguna</label>
							<input type="text" class="form-control <?php if(session('errors.login')) : ?>is-invalid<?php endif ?>"
								   name="login" placeholder="<?=lang('Auth.emailOrUsername')?>">
							<div class="invalid-feedback">
								<?= session('errors.login') ?>
							</div>
						</div>
<?php endif; ?>

						<div class="form-group">
							<label for="password">Kata Sandi</label>
							<input type="password" name="password" class="form-control  <?php if(session('errors.password')) : ?>is-invalid<?php endif ?>" placeholder="<?=lang('Auth.password')?>">
							<div class="invalid-feedback">
								<?= session('errors.password') ?>
							</div>
						</div>

<?php if ($config->allowRemembering): ?>
						<div class="form-check">
							<label class="form-check-label">
								<input type="checkbox" name="remember" class="form-check-input" <?php if(old('remember')) : ?> checked <?php endif ?>>
								Ingat Saya
							</label>
						</div>
<?php endif; ?>

						<br>

						<button type="submit" class="btn btn-primary btn-block">Masuk</button>
					</form>

					<hr>


<?php if ($config->activeResetter): ?>
					<p><a href="<?= route_to('forgot') ?>">Lupa Kata Sandi ?</a></p>
<?php endif; ?>
				</div>
			</div>

		</div>
	</div>
</div>

<?= $this->endSection() ?>
