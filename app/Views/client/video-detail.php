<?= $this->extend('client/_Layout') ?>
<?= $this->section('content_Blog') ?>

<!-- Import code hereeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeee -->

<section id="content">
	<h2 class="hide-accessible" role="heading" aria-level="1"><?php $video_result['title'] ?></h2>
	<div class="container" id="8_2_contain" role="main">
		<div class="portlet-layout row">
			<div class="col-md-9 portlet-column portlet-column-first" id="column-1">
				<div class="portlet-dropzone portlet-column-content portlet-column-content-first" id="layout-column_column-1">
					<div class="portlet-boundary portlet-boundary_com_liferay_asset_publisher_web_portlet_AssetPublisherPortlet_  portlet-static portlet-static-end decorate portlet-asset-publisher " id="p_p_id_com_liferay_asset_publisher_web_portlet_AssetPublisherPortlet_INSTANCE_hyvGyPUjuRrN_">
						<span id="p_com_liferay_asset_publisher_web_portlet_AssetPublisherPortlet_INSTANCE_hyvGyPUjuRrN"></span>
						<section class="portlet" id="portlet_com_liferay_asset_publisher_web_portlet_AssetPublisherPortlet_INSTANCE_hyvGyPUjuRrN">
							<div class="portlet-content">
								<div class="autofit-float autofit-row portlet-header">
									<div class="autofit-col autofit-col-end">
										<div class="autofit-section">
										</div>
									</div>
								</div>
								<div class=" portlet-content-container">
									<?php ?>
									<div class="portlet-body">
										<div class="asset-full-content clearfix mb-5 default-asset-publisher show-asset-title " data-fragments-editor-item-id="20109-7282215" data-fragments-editor-item-type="fragments-editor-mapped-item">
											<div class="mb-2">
												<h4 class="component-title">
													<span class="asset-title d-inline">
														<?= $video_result['title'] ?>
													</span>
													<span class="d-inline-flex">
													</span>
												</h4>
											</div>
											<span class="asset-anchor lfr-asset-anchor" id="7282220"></span>
											<div class="asset-content mb-3">
												<div class="journal-content-article " data-analytics-asset-id="7282213" data-analytics-asset-title="<?= $video_result['title'] ?>" data-analytics-asset-type="web-content">
													<div>
														<section>
															<span class="text-ngayxam-page"><?= $video_result['time'] ?></span>
															<p class="text-justify"><strong class="text-muted"><?= $video_result['heading'] ?></strong></p>
															<p><strong class="text-muted"></strong></p>
															<div class="embed-responsive embed-responsive-16by9 mb-5">
																<video poster="/image/journal/article?img_id=7282216&t=1620621467076" controls preload="none">
																	<source src="<?= $video_result['video'] ?>" type="video/mp4" autostart="false">
																</video>
															</div>
															<div>
																<p><?= $video_result['content'] ?></p>
															</div>
														</section>
													</div>
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
			<div class="col-md-3 portlet-column portlet-column-last" id="column-2">
				<div class="portlet-dropzone portlet-column-content portlet-column-content-last" id="layout-column_column-2">
					<div class="portlet-boundary portlet-boundary_com_liferay_journal_content_web_portlet_JournalContentPortlet_  portlet-static portlet-static-end decorate portlet-journal-content " id="p_p_id_com_liferay_journal_content_web_portlet_JournalContentPortlet_INSTANCE_yuXZ5OkWTASo_">
						<span id="p_com_liferay_journal_content_web_portlet_JournalContentPortlet_INSTANCE_yuXZ5OkWTASo"></span>
						<section class="portlet" id="portlet_com_liferay_journal_content_web_portlet_JournalContentPortlet_INSTANCE_yuXZ5OkWTASo">
							<div class="portlet-content">
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