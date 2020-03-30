<div class="container-fluid">
    <div class="row clearfix">
        <div class="col-xs-12 col-sm-3">
            <div class="card profile-card">
                <div class="profile-header">&nbsp;</div>
                <div class="profile-body">
                    <?php
                    foreach($row->result() as $key => $data) { ?>
                    <div class="image-area">
                        <img src="<?=base_url('assets/images/user.png')?>" width="100" height="100" alt="AdminBSB - Profile Image" />
                    </div>
                    <div class="content-area">
                        <h3><?=$data->nama?></h3>
                        <p>Eskasaba Comti</p>
                        <p>Administrator</p>
                    </div>
                </div>
                <div class="profile-footer">
                    <ul>
                        <li>
                            <span>Username</span>
                            <span><?=$data->username?></span>
                        </li>
                        <li>
                            <span>Telepon</span>
                            <span><?=$data->telepon?></span>
                        </li>
                        <li>
                            <span>Alamat</span>
                            <span><?=$data->alamat?></span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-9">
            <div class="card">
                <div class="body">
                    <div>
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active"><a href="#profile_settings" aria-controls="settings" role="tab" data-toggle="tab">Profile Settings</a></li>
                        </ul>

                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade in active" id="profile_settings">
                                <form class="form-horizontal" action="user/process" method="post">
                                    <div class="form-group">
                                        <label for="Name" class="col-sm-2 control-label">Nama</label>
                                        <div class="col-sm-10">
                                            <div class="form-line">
                                                <input type="hidden" class="form-control" name="id_user" value="<?=$data->id_user?>">
                                                <input type="text" class="form-control" name="name" value="<?=$data->nama?>" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="Username" class="col-sm-2 control-label">Username</label>
                                        <div class="col-sm-10">
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="username" value="<?=$data->username?>" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="Password" class="col-sm-2 control-label">Password</label>
                                        <div class="col-sm-10">
                                            <div class="form-line">
                                                <input type="password" class="form-control" name="pass" value="">
                                            </div>
                                            (<small>Jika tidak diganti biarkan kosong</small>)  
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="Telepon" class="col-sm-2 control-label">Telepon</label>
                                        <div class="col-sm-10">
                                            <div class="form-line">
                                                <input type="number" class="form-control" name="telepon" value="<?=$data->telepon?>" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="InputExperience" class="col-sm-2 control-label">Alamat</label>

                                        <div class="col-sm-10">
                                            <div class="form-line">
                                                <textarea class="form-control" id="InputExperience" name="alamat" rows="3"><?=$data->alamat?></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <?php } ?>
                                    <div class="form-group">
                                        <div class="col-sm-offset-2 col-sm-10">
                                            <button type="submit" name="edit" class="btn btn-danger">SUBMIT</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
 
