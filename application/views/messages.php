<?php if ($this->session->has_userdata('success')) { ?>
<div class="alert alert-success alert-dismissible" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <!-- <i class="material-icons">done</i> -->
    <span><?=$this->session->flashdata('success');?></span>
</div>
<?php } ?>

<?php if ($this->session->has_userdata('error')) { ?>
<div class="alert alert-danger alert-dismissible" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <!-- <i class="material-icons">error</i> <?=strip_tags(str_replace('</p>', '', $this->session->flashdata('error')));?> -->
</div>
<?php } ?>