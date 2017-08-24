<a data-toggle="modal" data-target="#areyousure" >
	
	<img src="<?php echo e(Storage::url($notif->data['applying']['invited_by_avatar'])); ?>"  class="img-circle" height="30px" width="30px" class="user-image" alt="User Image">
		<?php echo e($notif->data['applying']['invited_by_name']); ?> wants to apply for this job <?php echo e($notif->data['applying']['job_id']); ?>

</a>

