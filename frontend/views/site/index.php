<?php
/** @var yii\web\View $this */
/** @var common\models\CoursesSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

?>

<div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white me-2">
                  <i class="mdi mdi-home"></i>
                </span> Bosh menyu
              </h3>
              
              <?php //echo $this->render('_search',['model' => $searchModel]); ?>

              <nav aria-label="breadcrumb">
                <ul class="breadcrumb">
                  <li class="breadcrumb-item active" aria-current="page">
                    <span></span>Overview <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
                  </li>
                </ul>
              </nav>
            </div>
            <div class="row">
              <div class="col-md-4 stretch-card grid-margin">
                <div class="card bg-gradient-info card-img-holder text-white">
                  <div class="card-body">
                    <img src="asset/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                    <h4 class="font-weight-normal mb-3">Oxirgi bir oylik Kirim <i class="mdi mdi-bookmark-outline mdi-24px float-right"></i>
                    </h4>
                    <h2 class="mb-5"> <?= number_format($input[0]['kirim'] +0 ,0,',', ' ') ?> so'm</h2>
                  </div>
                </div>
              </div>
              <div class="col-md-4 stretch-card grid-margin">
                <div class="card bg-gradient-danger card-img-holder text-white">
                  <div class="card-body">
                    <img src="asset/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                    <h4 class="font-weight-normal mb-3">Oxirgi bir oylik Chiqim <i class="mdi mdi-chart-line mdi-24px float-right"></i>
                    </h4>
                    <h2 class="mb-5"><?= number_format($output[0]['chiqim'] + 0,0,',', ' ') ?> so'm</h2>
                  </div>
                </div>
              </div>
              <div class="col-md-4 stretch-card grid-margin">
                <div class="card bg-gradient-success card-img-holder text-white">
                  <div class="card-body">
                    <img src="asset/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                    <h4 class="font-weight-normal mb-3">Qolgan summa <i class="mdi mdi-diamond mdi-24px float-right"></i>
                    </h4>
                    <h2 class="mb-5"><?= number_format($input[0]['kirim'] - $output[0]['chiqim'] + 0,0,',', ' ') ?> so'm</h2>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                  <div class="  card-body">
                    <div class="clearfix">
                      <h4 class="card-title float-left">Kirim va Chiqim statistikasi</h4>
                      <div id="columnchart_material" class="rounded-legend legend-horizontal legend-top-right float-right" style="width: 1500px; height: 500px;"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>