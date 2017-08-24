<div class="row">
	<div class="col-md-12">
		<!-- Modal for tertiary-->
			
			<?php if(is_null($getApply)): ?>

			<?php else: ?>

				<!-- Modal -->
				<div class="modal fade" id="areyousure1-<?php echo e($getApply->id); ?>" tabindex="1" role="dialog" aria-labelledby="myModalLabel">
				  <div class="modal-dialog modal-xs" role="document">
				    <div class="modal-content">
				      <div class="modal-header">
				        
				        <h4 class="modal-title" id="myModalLabel"><i class="fa fa-question-circle fa-2x pull-right" style="color:#2e7489;"></i> &nbsp;Cancel application?</h4>
				      </div>
				      <div class="modal-body">
				      	<div class="row">
							
							<div class="text-center">
								<div class="row">
									<div class="btn-group" style="width: 90%; margin:20px 0px;">
										
														
														
													<?php echo Form::open(['route'=> ['apply.destroy', $getApply->id,$job->user_id], 'method' => 'POST']); ?>

														<?php echo e(method_field('delete')); ?>

												    	<?php echo Form::submit('cancel application', ["class" => 'btn btn-flat btn-danger pull-left']); ?>


										    		<?php echo Form::close(); ?>

									</div>
										
									
								</div>
								
							</div>
								
							

				      	</div>
				      </div>
				    </div>
				  </div>
				</div>
			<?php endif; ?>
			

		<!--End Modal-->



	</div>
</div>