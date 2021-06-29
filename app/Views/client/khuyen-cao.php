<?= $this->extend('client/_Layout') ?>
<?= $this->section('content_Blog') ?>

<!-- Import code hereeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeee -->

<section id="content">
	<h2 class="hide-accessible" role="heading" aria-level="1">Khuyến cáo</h2>
	<div class="container" id="8_2_contain" role="main">
		<div class="portlet-layout row">
			<div class="col-md-9 portlet-column portlet-column-first" id="column-1">
				<div class="portlet-dropzone portlet-column-content portlet-column-content-first" id="layout-column_column-1">
					<div class="portlet-boundary portlet-boundary_com_liferay_asset_publisher_web_portlet_AssetPublisherPortlet_  portlet-static portlet-static-end decorate portlet-asset-publisher " id="p_p_id_com_liferay_asset_publisher_web_portlet_AssetPublisherPortlet_INSTANCE_0XHNjAbqHvlQ_">
						<span id="p_com_liferay_asset_publisher_web_portlet_AssetPublisherPortlet_INSTANCE_0XHNjAbqHvlQ"></span>
						<section class="portlet" id="portlet_com_liferay_asset_publisher_web_portlet_AssetPublisherPortlet_INSTANCE_0XHNjAbqHvlQ">
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
											<img style="width:100%; float:left;" src="<?= $recommandation[0]['image'] ?>" alt="">
											<a href="<?= base_url() ?>/Postdetail?id=<?= $recommandation[0]['id'] ?>">
												<h2 class="mt-3"><?= $recommandation[0]['title'] ?></h2>
											</a>
											<small class="text-muted"><?= $recommandation[0]['time'] ?></small>
											<p>
											<p><?= $recommandation[0]['heading'] ?></p>
											</p>
											<?php ?>
										</div>
										<div>
											<?php foreach ($recommandation as $key => $item) : ?>
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
												<?php if ($page > 1) : ?>
													<li class="page-item"><a class="page-link" href="<?= "?page=1" ?>">Trang đầu<i class="linearicons-arrow-left"></i></a></li>
												<?php endif; ?>
												<?php
												for ($i = 1; $i < $total_pages + 1; $i++) {
													if ($page == $i) {
														echo "<li class='page-item active'><a class='page-link' href='#'>" . $i . "</a></li>";
													} else {
														echo "<li class='page-item'><a class='page-link' href='?page=" . $i . "'>" . $i . "</a></li>";
													}
												}
												?>
												<?php if ($page < $total_pages) : ?>
													<li class="page-item"><a class="page-link" href="<?= "?page=" . $total_pages ?>"> Trang cuối<i class="linearicons-arrow-right"></i></a></li>
												<?php endif; ?>
											</ul>
										</div>
										<script>
											function _com_liferay_asset_publisher_web_portlet_AssetPublisherPortlet_INSTANCE_0XHNjAbqHvlQ_submitForm(curParam, cur) {
												var data = {};
												data[curParam] = cur;
												Liferay.Util.postForm(
													document.qvog__com_liferay_asset_publisher_web_portlet_AssetPublisherPortlet_INSTANCE_0XHNjAbqHvlQ_pageIteratorFm, {
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
					<div class="portlet-boundary portlet-boundary_com_liferay_journal_content_web_portlet_JournalContentPortlet_  portlet-static portlet-static-end decorate portlet-journal-content " id="p_p_id_com_liferay_journal_content_web_portlet_JournalContentPortlet_INSTANCE_1w7WxDoZ3p9g_">
						<span id="p_com_liferay_journal_content_web_portlet_JournalContentPortlet_INSTANCE_1w7WxDoZ3p9g"></span>
						<section class="portlet" id="portlet_com_liferay_journal_content_web_portlet_JournalContentPortlet_INSTANCE_1w7WxDoZ3p9g">
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
	<form action="#" aria-hidden="true" class="hide" id="hrefFm" method="post" name="hrefFm"><span></span><input hidden type="submit" /></form>
</section>
<?= $this->endSection() ?>