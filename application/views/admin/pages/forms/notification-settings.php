<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <!-- Main content -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h4>Notification Settings</h4>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url('admin/home') ?>">Home</a>
                        </li>
                        <li class="breadcrumb-item active">Notification Settings</li>
                    </ol>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-info">
                        <form class="form-horizontal form-submit-event" action="<?= base_url('admin/Notification_settings/update_notification_settings'); ?>" method="POST" id="payment_setting_form" enctype="multipart/form-data">
                            <div class="card-body">
                                <div class="form-group">
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="fcm_server_key">FCM Server Key : </label>
                                            <textarea class="form-control" name="fcm_server_key" placeholder='FCM Server Key' rows="5"><?= $fcm_server_key ?></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="vap_id_Key">Vap Id Key : </label>
                                            <textarea class="form-control" name="vap_id_Key" placeholder='Vap Id Key ' rows="5"><?= $vap_id_Key ?></textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <button type="reset" class="btn btn-warning">Reset</button>
                                    <button type="submit" class="btn btn-success" id="submit_btn">Update Notification Settings</button>
                                </div>


                            </div>
                        </form>
                    </div>
                    <!--/.card-->
                </div>
                <!--/.col-md-12-->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>