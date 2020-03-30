<div class="container-fluid">
            <div class="block-header">
                <h2>
                    Team
                </h2>
            </div>
            <!-- Basic Validation -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <?php $this->view('messages')?>
                    <div class="card">
                        <div class="header">
                            <h2><?=ucfirst($page)?> Team</h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <ul class="pull-right">
                                        <!-- <a href="site_url('team')" type="button" class="btn btn-warning waves-effect">
                                        <i class="material-icons">undo</i>back
                                        </a> -->
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
						<?php //echo validation_errors(); ?>
                            <?php echo form_open_multipart('team/process')?>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="hidden" class="form-control" name="id" value="<?=$row->team_id?>">
                                        <input type="text" class="form-control" name="nama" value="<?=$row->nama?>" required>
                                        <label class="form-label">Nama</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="jabatan" value="<?=$row->jabatan?>" required>
                                        <label class="form-label">Jabatan</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
									<div class="form-line">
                                        <?php if($page == 'edit'){
                                            if($row->image) { ?> 
                                                <div style="margin-bottom: 5px">
                                                <img src="<?=base_url('images/team/'.$row->image)?>" style="width:80px" >
                                                </div>
                                            <?php
                                            }
                                        } ?>
                                        <input type="file" class="form-control" name="image" >
                                        <label class="form-label"></label>
                                    </div>
                                </div>
                                <button class="btn btn-primary waves-effect" type="submit" name="<?=$page?>">SUBMIT</button>
                                <button class="btn btn-danger waves-effect" type="reset">RESET</button>
                            <?php echo form_close() ?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Basic Validation -->
            <!-- Advanced Validation -->