<div class="container-fluid">
            <div class="block-header">
                <h2>
                    User
                </h2>
            </div>
            <!-- Basic Validation -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2><?=ucfirst($page)?> User</h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <ul class="pull-right">
                                        <!-- <a href="site_url('produk')" type="button" class="btn btn-warning waves-effect">
                                        <i class="material-icons">undo</i>back
                                        </a> -->
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                        <?php //echo validation_errors(); ?>
                            <form id="form_advanced_validation" action="<?=site_url(('produk/process'))?>" method="post">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="hidden" class="form-control" name="id" value="<?=$row->produk_id?>">
                                        <input type="text" class="form-control" name="nama_produk" value="<?=$row->nama_produk?>" required>
                                        <label class="form-label">Nama Produk</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <select class="form-control show-tick" name="kategori" required>
                                        <option value="">-- Please select kategori --</option>
                                        <option value="pembuatan" <?=$row->kategori == 'pembuatan' ? 'selected' : ''?>>Pembuatan</option>
                                        <option value="servis" <?=$row->kategori == 'servis' ? 'selected' : ''?>>Servis</option>
                                        <option value="lain-lain" <?=$row->kategori == 'lain-lain' ? 'selected' : ''?>>Lain-Lain</option>
                                    </select>
                                </div>
                                <button class="btn btn-primary waves-effect" type="submit" name="<?=$page?>">SUBMIT</button>
                                <button class="btn btn-danger waves-effect" type="reset">RESET</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Basic Validation -->
            <!-- Advanced Validation -->