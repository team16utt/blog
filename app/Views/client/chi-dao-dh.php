<?= $this->extend('client/_Layout') ?>
<?= $this->section('content_Blog') ?>

<!-- Import code hereeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeee -->

<section id="content">
	<h2 class="hide-accessible" role="heading" aria-level="1">CHỈ ĐẠO ĐIỀU HÀNH</h2>
	<div class="container" id="10_contain" role="main">
		<div class="portlet-layout row">
			<div class="col-md-12 portlet-column portlet-column-only" id="column-1">
				<div class="portlet-dropzone portlet-column-content" id="layout-column_column-1">
					<div class="portlet-boundary portlet-boundary_com_liferay_site_navigation_site_map_web_portlet_SiteNavigationSiteMapPortlet_  portlet-static portlet-static-end decorate portlet-site-map " id="p_p_id_com_liferay_site_navigation_site_map_web_portlet_SiteNavigationSiteMapPortlet_INSTANCE_IhutZ3bsjOlB_">
						<span id="p_com_liferay_site_navigation_site_map_web_portlet_SiteNavigationSiteMapPortlet_INSTANCE_IhutZ3bsjOlB"></span>
						<section class="portlet" id="portlet_com_liferay_site_navigation_site_map_web_portlet_SiteNavigationSiteMapPortlet_INSTANCE_IhutZ3bsjOlB">
							<div class="portlet-content">
								<div class="autofit-float autofit-row portlet-header">
									<div class="autofit-col autofit-col-end">
										<div class="autofit-section">
										</div>
									</div>
								</div>
								<div class=" portlet-content-container">
									<div class="portlet-body">
										<style>
											ul.oep-breadcrumbs {
												overflow: hidden;
												width: 100%;
												list-style-type: none;
												display: inline-block;
												margin-left: -43px;
												margin-bottom: 0px;
											}

											ul.oep-breadcrumbs li {
												float: left;
												margin: 0 .5em 0 1em;
											}

											ul.oep-breadcrumbs a {
												background: #ddd;
												padding: .3em 1em;
												float: left;
												text-decoration: none;
												color: #444;
												text-shadow: 0 1px 0 rgba(255, 255, 255, .5);
												position: relative;
											}

											ul.oep-breadcrumbs a:hover {
												background: #50a2f5;
												cursor: pointer;
												color: #fff;
											}

											ul.oep-breadcrumbs a.active {
												background: #50a2f5;
												cursor: pointer;
												color: #fff;
											}

											ul.oep-breadcrumbs a::before {
												content: "";
												position: absolute;
												top: 50%;
												margin-top: -1.5em;
												border-width: 1.5em 0 1.5em 1em;
												border-style: solid;
												border-color: #ddd #ddd #ddd transparent;
												left: -1em;
											}

											ul.oep-breadcrumbs a:hover::before {
												border-color: #50a2f5 #50a2f5 #50a2f5 transparent;
											}

											ul.oep-breadcrumbs a.active::before {
												border-color: #50a2f5 #50a2f5 #50a2f5 transparent;
											}

											ul.oep-breadcrumbs a::after {
												content: "";
												position: absolute;
												top: 50%;
												margin-top: -1.5em;
												border-top: 1.5em solid transparent;
												border-bottom: 1.5em solid transparent;
												border-left: 1em solid #ddd;
												right: -1em;
											}

											ul.oep-breadcrumbs a.active::after {
												border-left-color: #50a2f5;
												font-weight: bold;
											}

											ul.oep-breadcrumbs a:hover::after {
												border-left-color: #50a2f5;
												font-weight: bold;
											}

											ul.oep-breadcrumbs .current,
											ul.oep-breadcrumbs .current:hover {
												font-weight: bold;
												background: none;
												font-weight: bold;
												font-weight: bold;
											}

											ul.oep-breadcrumbs .current::after,
											ul.oep-breadcrumbs .current::before {
												content: normal;
												font-weight: bold;
											}
										</style>
										<ul class="oep-breadcrumbs">
											<li><a href="<?= base_url() ?>/Chidaodieuhanh" class="active">CHỈ ĐẠO ĐIỀU HÀNH</a></li>
											<li><a href="<?= base_url() ?>/Chinhsach">CHÍNH SÁCH PHÒNG CHỐNG
													DỊCH</a></li>
										</ul>
									</div>
								</div>
							</div>
						</section>
					</div>
					<div class="portlet-boundary portlet-boundary_com_liferay_asset_publisher_web_portlet_AssetPublisherPortlet_  portlet-static portlet-static-end decorate portlet-asset-publisher " id="p_p_id_com_liferay_asset_publisher_web_portlet_AssetPublisherPortlet_INSTANCE_q4USy75NdpUZ_">
						<span id="p_com_liferay_asset_publisher_web_portlet_AssetPublisherPortlet_INSTANCE_q4USy75NdpUZ"></span>
						<section class="portlet" id="portlet_com_liferay_asset_publisher_web_portlet_AssetPublisherPortlet_INSTANCE_q4USy75NdpUZ">
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
											<img src="<?= $AllCDDH[0]['image'] ?>" class="lazy img-responsive" data-src="<?= $AllCDDH[0]['image'] ?>" alt="">
											<a href="<?= base_url() ?>/Postdetail?id=<?= $AllCDDH[0]['id'] ?>">
												<h2 class="mt-3"><?= $AllCDDH[0]['title'] ?></h2>
											</a>
											<small class="text-muted"><?= $AllCDDH[0]['time'] ?></small>
											<p>
											<p><?= $AllCDDH[0]['heading'] ?></p>
											</p>
											<?php ?>
										</div>
										<div>
											<?php foreach ($AllCDDH as $key => $item) : ?>
												<?php if ($key > 0) : ?>
													<div class="row mb-1">
														<div class="col-xs-5">
															<img src="<?= $item['image'] ?>" class="lazy img-responsive" data-src="<?= $item['image'] ?>" alt="">
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
														Trước
													</a>
												</li>
												<li class="">
													<a href="https://ncov.moh.gov.vn/web/guest/chi-dao-dh?p_p_id=com_liferay_asset_publisher_web_portlet_AssetPublisherPortlet_INSTANCE_q4USy75NdpUZ&amp;p_p_lifecycle=0&amp;p_p_state=normal&amp;p_p_mode=view&amp;_com_liferay_asset_publisher_web_portlet_AssetPublisherPortlet_INSTANCE_q4USy75NdpUZ_delta=5&amp;p_r_p_resetCur=false&amp;_com_liferay_asset_publisher_web_portlet_AssetPublisherPortlet_INSTANCE_q4USy75NdpUZ_cur=2" onclick="" tabIndex="0" target="_self">
														Tiếp theo
													</a>
												</li>
											</ul>
										</div>
										<script>
											function _com_liferay_asset_publisher_web_portlet_AssetPublisherPortlet_INSTANCE_q4USy75NdpUZ_submitForm(curParam, cur) {
												var data = {};
												data[curParam] = cur;
												Liferay.Util.postForm(
													document.dfpx__com_liferay_asset_publisher_web_portlet_AssetPublisherPortlet_INSTANCE_q4USy75NdpUZ_pageIteratorFm, {
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
		</div>
	</div>
</section>
<?= $this->endSection() ?>