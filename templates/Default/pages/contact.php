    <?= $this->include('Default/elements/header') ?>
    <?= $this->include('Default/elements/menu') ?>
<!-- /contact-grid1 -->

	<section class="w3l-contact-section-main">
		<div class="contact-sec-inner">			
			<?= $page->content ?>			
		</div>
	</section>
    <!-- /contact-form -->
	<section class="w3l-contact-section-form">
		<div class="contact-sec-inner py-5">
			<div class="container py-lg-5">
				<div class="contact-form-mainv">
					<span class="sub-title">Contact Us</span>
					<p class="hny-title h3">Keep In Touch With Us.</p>
					
					<?= $this->include('Webly\Core\Views\Elements\flash') ?>
                                <form action="/form/contact-us" method="post"  enctype="multipart/form-data">
                                <?= csrf_field() ?>
                                <?php $validation =  \Config\Services::validation(); ?>
								<div class="row">
									<div class="form-group col-lg-12  " >
                                        <input name="name" class="form-control"  placeholder="Name*" value="<?= old('name') ?>" />
                                        <span class="help-block"><?= validation_show_error('name') ?></span>
                                    </div>
									<div class="form-group col-lg-6 " >
                                        <input name="mobile" class="form-control"  placeholder="Mobile No.*" value="<?= old('mobile') ?>" />
                                        <span class="help-block"><?= validation_show_error('mobile') ?></span>
                                    </div>
                                    <div class="form-group col-lg-6 " >
                                        <input name="email" class="form-control"   placeholder="Email ID*" value="<?= old('email') ?>" />
                                        <span class="help-block"><?= validation_show_error('email') ?></span>
                                    </div>
									<div class="form-group col-lg-12 " >
                                        <textarea name="message"  placeholder="Enquiry For"  class="textarea form-control rounded-0 p-3" rows="2" cols="30"><?= old('message') ?></textarea>
                                        <span class="help-block"><?= validation_show_error('message') ?></span>	
                                    </div>
                                    <div class="form-group col-lg-12  text-center">
									<div class="form-submit text-center mt-4">
								<button type="submit" class="btn submit">Submit</button>
							</div>
                                    </div>
								</div>
							
						</form>
				</div>
			</div>
		</div>
	</section>
	<!-- //contact-form -->
 
        <?= $this->include('Default/elements/footer') ?>