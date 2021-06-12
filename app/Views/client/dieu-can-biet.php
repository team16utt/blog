<?= $this->extend('client/_Layout') ?>
<?= $this->section('content_Blog') ?>

<!-- Import code hereeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeee -->

<section id="content">
	<h2 class="hide-accessible" role="heading" aria-level="1">Điều cần biết</h2>
	<div class="container" id="8_2_contain" role="main">
		<div class="portlet-layout row">
			<div class="col-md-9 portlet-column portlet-column-first" id="column-1">
				<div class="portlet-dropzone portlet-column-content portlet-column-content-first" id="layout-column_column-1">
					<div class="portlet-boundary portlet-boundary_com_liferay_asset_publisher_web_portlet_AssetPublisherPortlet_  portlet-static portlet-static-end decorate portlet-asset-publisher " id="p_p_id_com_liferay_asset_publisher_web_portlet_AssetPublisherPortlet_INSTANCE_f0F16up2JteV_">
						<span id="p_com_liferay_asset_publisher_web_portlet_AssetPublisherPortlet_INSTANCE_f0F16up2JteV"></span>
						<section class="portlet" id="portlet_com_liferay_asset_publisher_web_portlet_AssetPublisherPortlet_INSTANCE_f0F16up2JteV">
							<div class="portlet-content">
								<div class="autofit-float autofit-row portlet-header">
									<div class="autofit-col autofit-col-end">
										<div class="autofit-section">
										</div>
									</div>
								</div>
								<div class=" portlet-content-container">
									<div class="portlet-body">
										<div>
											<?php ?>
											<img style="width:100%; float:left;" src="<?= $DCB[0]['image'] ?>" alt="">
											<a href="<?= base_url() ?>/Postdetail?id=<?= $DCB[0]['id'] ?>">
												<h2 class="mt-3"><?= $DCB[0]['title'] ?></h2>
											</a>
											<small class="text-muted"><?= $DCB[0]['time'] ?></small>
											<p>
											<p><?= $DCB[0]['heading'] ?></p>
											</p>
											<?php ?>
										</div>
										<div>
											<?php foreach ($DCB as $key => $item) : ?>
												<?php if ($key > 0) : ?>
													<div class="row mb-1">
														<div class="col-xs-5">
															<img style="width:100%; float:left;" src="<?= $item['image'] ?>" alt="">
														</div>
														<div class="col-xs-7">
															<a class="text-tletin" href="<?= base_url() ?>/Postdetail?id=<?= $item['id'] ?>"><?= $item['title'] ?></a>
															<br>
															<small class="text-muted"><?= $item['time'] ?></small>
															<div class="text-muted mt-15 d-none d-lg-block">
																<p><?= $item['heading'] ?></p>
															</div>
														</div>
														<div class="col-xs-12 text-muted mt-1 mb-1 d-none d-block d-lg-none">
															<p><?= $item['heading'] ?></p>
														</div>
													</div>
												<?php endif ?>
											<?php endforeach; ?>

										</div>
										<div class="clearfix lfr-pagination">
											<ul class="lfr-pagination-buttons pager">
												<li class="disabled">
													<a href="javascript:;" onclick="" tabIndex="-1" target="_self">
														Previous
													</a>
												</li>
												<li class="">
													<a href="https://ncov.moh.gov.vn/en/web/guest/-ieu-can-biet?p_p_id=com_liferay_asset_publisher_web_portlet_AssetPublisherPortlet_INSTANCE_f0F16up2JteV&amp;p_p_lifecycle=0&amp;p_p_state=normal&amp;p_p_mode=view&amp;_com_liferay_asset_publisher_web_portlet_AssetPublisherPortlet_INSTANCE_f0F16up2JteV_delta=5&amp;p_r_p_resetCur=false&amp;_com_liferay_asset_publisher_web_portlet_AssetPublisherPortlet_INSTANCE_f0F16up2JteV_cur=2" onclick="" tabIndex="0" target="_self">
														Next
													</a>
												</li>
											</ul>
										</div>
										<script>
											function _com_liferay_asset_publisher_web_portlet_AssetPublisherPortlet_INSTANCE_f0F16up2JteV_submitForm(curParam, cur) {
												var data = {};
												data[curParam] = cur;
												Liferay.Util.postForm(
													document.goit__com_liferay_asset_publisher_web_portlet_AssetPublisherPortlet_INSTANCE_f0F16up2JteV_pageIteratorFm, {
														data: data
													}
												);
											}
										</script>
									</div>
								</div>
							</div>
						</section>
					</div>
				</div>
			</div>
			<div class="col-md-3 portlet-column portlet-column-last" id="column-2">
				<div class="portlet-dropzone portlet-column-content portlet-column-content-last" id="layout-column_column-2">
					<div class="portlet-boundary portlet-boundary_com_liferay_journal_content_web_portlet_JournalContentPortlet_  portlet-static portlet-static-end decorate portlet-journal-content " id="p_p_id_com_liferay_journal_content_web_portlet_JournalContentPortlet_INSTANCE_demai3t2MENP_">
						<span id="p_com_liferay_journal_content_web_portlet_JournalContentPortlet_INSTANCE_demai3t2MENP"></span>
						<section class="portlet" id="portlet_com_liferay_journal_content_web_portlet_JournalContentPortlet_INSTANCE_demai3t2MENP">
							<div class="portlet-content">
								<div class="autofit-float autofit-row portlet-header">
									<div class="autofit-col autofit-col-end">
										<div class="autofit-section">
											<div class="visible-interaction">
											</div>
										</div>
									</div>
								</div>
								<div class=" portlet-content-container">
									<div class="portlet-body">
										<div class="" data-fragments-editor-item-id="20109-6848020" data-fragments-editor-item-type="fragments-editor-mapped-item">
											<div class="journal-content-article " data-analytics-asset-id="6848018" data-analytics-asset-title="Đường dây nóng" data-analytics-asset-type="web-content">
												<div class="box-ddn"><span class="text-vang">Đường dây nóng</span><br />
													<a class="hotline1" href="tel:19009095">19009095</a><br />
												</div>
												<div>
													<a href="https://ncov.moh.gov.vn/documents/20182/6848000/Duongdaynong/69d6a130-defa-4cbc-92f7-67d50937d68f?t=1581123135834"><img alt="" src="https://ncov.moh.gov.vn/documents/20182/6848000/dnnong.jpg/4cf1fea6-7856-4fe0-bbef-50a7c2dc0ba8?t=1581317123857" width="100%" /></a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</section>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<?= $this->endSection() ?>