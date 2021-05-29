<?= $this->extend('admin/_Layout') ?>
<?= $this->section('content_Admin') ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h3>Add Admin Form</h3>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="<?= base_url()?>/admin/Home">Home</a></li>
                <li class="breadcrumb-item active">Add Admin</li>
              </ol>
            </div>
          </div>
        </div>
      </section>

      


        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-md-12">
              <div class="card card-outline card-info">
                <div class="card-header">
                  <h3 class="card-title">
                    Summernote
                  </h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <textarea style="width: 100%; height: 500px" id="summernote">
              Place <em>some</em> <u>text</u> <strong>here</strong>
            </textarea>

                  <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </div>

              </div>
            </div>
            <!-- /.col-->
          </div>
          <!-- ./row -->
        </section>

        
<?= $this->endSection() ?>