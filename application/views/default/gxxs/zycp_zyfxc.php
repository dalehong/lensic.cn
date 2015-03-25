<?php $this->load->view('header'); ?>

<script type="text/javascript">
<?php if(isset($power_ids)): ?>
default_sel('<?php echo $power_ids; ?>');
<?php endif; ?>
</script>
<?php $this->load->view('footer'); ?>