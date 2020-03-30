<div class="container-fluid">
    <div class="block-header">
        <h2>DASHBOARD</h2>
    </div>

    <!-- Widgets -->
    <div class="row clearfix">
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="info-box bg-pink hover-expand-effect">
                <div class="icon">
                    <i class="material-icons">shop</i>
                </div>
                <div class="content">
                    <div class="text">Produk</div>
                    <?php $dat = 0;
                    foreach($produk->result() as $key => $data) { ?>
                    <?php $dat++;?>
                    <?php } ?>
                    <div class="number count-to" data-from="0" data-to="<?=$dat?>" data-speed="1000" data-fresh-interval="20"></div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="info-box bg-cyan hover-expand-effect">
                <div class="icon">
                    <i class="material-icons">photo_library</i>
                </div>
                <div class="content">
                    <div class="text">Galeri</div>
                    <?php $dat = 0;
                    foreach($galeri->result() as $key => $data) { ?>
                    <?php $dat++;?>
                    <?php } ?>
                    <div class="number count-to" data-from="0" data-to="<?=$dat?>" data-speed="1000" data-fresh-interval="20"></div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="info-box bg-light-green hover-expand-effect">
                <div class="icon">
                    <i class="material-icons">people</i>
                </div>
                <div class="content">
                    <div class="text">Team</div>
                    <?php $dat = 0;
                    foreach($row->result() as $key => $data) { ?>
                    <?php $dat++;?>
                    <?php } ?>
                    <div class="number count-to" data-from="0" data-to="<?=$dat?>" data-speed="1000" data-fresh-interval="20"></div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="info-box bg-orange hover-expand-effect">
                <div class="icon">
                    <i class="material-icons">message</i>
                </div>
                <div class="content">
                    <div class="text">Inbox</div>
                    <?php $dat = 0;
                    foreach($contact->result() as $key => $data) { ?>
                    <?php $dat++;?>
                    <?php } ?>
                    <div class="number count-to" data-from="0" data-to="<?=$dat?>" data-speed="1000" data-fresh-interval="20"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- #END# Widgets -->
</div>