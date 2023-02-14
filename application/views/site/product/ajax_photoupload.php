<?php $product = $product_details->row(); ?>
<div class="container mob_nopadd">

	<div class="upload_photos_base col-md-12  col-sm-12 col-xs-12 mob_nopadd">
		<h3><?php echo get_lang_site_key($lang_key,"product_lang","upload_title"); ?></h3>
		<div class="col-md-12 col-sm-12 col-xs-12 upload_images_div mob_nopadd">
			<div class="col-md-12 col-sm-12 col-xs-12 upload_images_base" data-cv-img="<?php echo $product->cover_photo ?>" <?php if ($product->cover_photo != "") {
																																echo 'style="background:url(' . base_url() . 'images/site/product/' . $product->cover_photo . ')"';
																															} ?>>
				<div class="delete_photo_cover" data-name="<?php echo $product->cover_photo; ?>">
					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20" height="20" viewBox="0 0 20 20">
						<defs>
							<path id="4xzqa" d="M390.14 599.1v1.82c0 .4-.32.72-.72.72h-1.35v10.7c0 .39-.33.71-.72.71H376.5a.72.72 0 0 1-.72-.72v-10.69h-1.35a.72.72 0 0 1-.72-.72v-1.82c0-1.1.9-1.99 2-1.99h4.34c.1-.28.37-.48.68-.48h2.38c.31 0 .57.2.67.48h4.36a2 2 0 0 1 1.99 2zm-3.51 2.54h-9.4v9.97h9.4zm2.07-1.44v-1.1c0-.3-.25-.55-.55-.55H375.7c-.3 0-.55.25-.55.55v1.1zm-9.38 8.2v-4.86a.72.72 0 1 1 1.44 0v4.86a.72.72 0 1 1-1.44 0zm3.78 0v-4.86a.72.72 0 1 1 1.44 0v4.86a.72.72 0 1 1-1.44 0z" />
						</defs>
						<g>
							<g transform="translate(-372 -595)">
								<use fill="#fff" xlink:href="#4xzqa" />
							</g>
						</g>
					</svg>
					<span class="addtext_del"></span>
				</div>
				<div class="upload_images_content">
					<div class="browse_photo">
						<label for="upload_img_single">
							<span class="browse_photo_inner cvphoto" <?php if ($product->cover_photo != "") {
																			echo 'style="display:none"';
																		} ?>><?php echo get_lang_site_key($lang_key,"product_lang","upload_photos"); ?></span> </label>
						<?php
						$attributes = array('method' => 'post', 'id' => 'uploadimage_single', 'enctype' => 'multipart/form-data');
						echo form_open('#', $attributes); ?>

						<input type="file" class="browse_img" id="upload_img_single" />
						</form>
					</div>

				</div>
				<p <?php if ($product->cover_photo != "") {
						echo 'style="display:none"';
					} ?> class="cvphoto"><?php echo get_lang_site_key($lang_key,"product_lang","drag_drop"); ?></p>
			</div>
		</div>
		<div class="col-md-12 col-xs-12 col-sm-12 photo_preview_base">

			<ul class="list-inline photo_preview_ul" id="imgupload_ul">
				<?php if (!empty(json_decode($product->photos))) {
					$product_img_array = json_decode($product->photos);
					foreach ($product_img_array as $pimg) {
				?>
						<li class="col-md-3 col-sm-3 col-xs-12" data-img-name="<?php echo $pimg; ?>">
							<div class="photo_inner_li">
								<div class="photo_preview_inner">
									<div class="photo_container" style="background: url(<?php echo base_url(); ?>images/site/product/<?php echo $pimg; ?>)">
									</div>
									<div class="delete_photo" data-name="<?php echo $pimg; ?>">
										<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20" height="20" viewBox="0 0 20 20">
											<defs>
												<path id="4xzqa" d="M390.14 599.1v1.82c0 .4-.32.72-.72.72h-1.35v10.7c0 .39-.33.71-.72.71H376.5a.72.72 0 0 1-.72-.72v-10.69h-1.35a.72.72 0 0 1-.72-.72v-1.82c0-1.1.9-1.99 2-1.99h4.34c.1-.28.37-.48.68-.48h2.38c.31 0 .57.2.67.48h4.36a2 2 0 0 1 1.99 2zm-3.51 2.54h-9.4v9.97h9.4zm2.07-1.44v-1.1c0-.3-.25-.55-.55-.55H375.7c-.3 0-.55.25-.55.55v1.1zm-9.38 8.2v-4.86a.72.72 0 1 1 1.44 0v4.86a.72.72 0 1 1-1.44 0zm3.78 0v-4.86a.72.72 0 1 1 1.44 0v4.86a.72.72 0 1 1-1.44 0z" />
											</defs>
											<g>
												<g transform="translate(-372 -595)">
													<use fill="#fff" xlink:href="#4xzqa" />
												</g>
											</g>
										</svg>
										<span class="addtext_del"></span>
									</div>
								</div>
							</div>
						</li>
				<?php }
				} ?>
				<li class="col-md-3 col-sm-3 col-xs-12 last_photo_li addcvphoto mob_nopadd" <?php if ($product->cover_photo == "") { ?> style="display:none;" <?php } ?>>
					<div class="photo_inner_li">
						<div class="photo_preview_inner">
							<div class="last_photo_plus">

								<div class="browse_photo" id="add_last_index">
									<label for="upload_img">
										<span class="browse_photo_inner"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="47" height="47" viewBox="0 0 47 47">
												<defs>
													<path id="4yiva" d="M684 650h1v22h22v1h-22v21h-1v-21h-21v-1h21z" />
												</defs>
												<g>
													<g transform="translate(-661 -648)">
														<use fill="#c4c4c4" xlink:href="#4yiva" />
													</g>
												</g>
											</svg></span> </label>
											<?php
									$attributes = array( 'id' => 'uploadimage','method'=>'post','enctype'=>'multipart/form-data');
									echo form_open(base_url().'site/product/ajax_img_upload', $attributes); ?>
									
										<input type="hidden" value="<?php echo $product->id; ?>" name="pid" />
										<input type="file" onchange="preview_image()" class="browse_img" name="upload_file[]" id="upload_img" multiple />
									</form>
								</div>

							</div>
						</div>
					</div>
				</li>
			</ul>

		</div>


	</div>

</div>