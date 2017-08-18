<!-- Modal for tertiary-->

	<!-- Modal -->
	<div class="modal fade" id="sure" tabindex="1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        
	        <h4 class="modal-title" id="myModalLabel"><i class="fa fa-question-circle fa-2x pull-right" style="color:#2e7489;"></i> &nbsp;Delete this skill?</h4>
	      </div>
	      <div class="modal-body">
	      	<div class="row">
				
				<div class="text-center">
					<div class="row">
						<div class="col-md-6" style="padding-right: 0px; padding-left: 35px;">
							
								<a href="" class="btn btn-flat btn-default btn-block btn-lg" data-dismiss="modal">No</a>
						</div>
						<?php $__currentLoopData = $skill; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

						<div class="col-md-6" style="padding-left: 0px; padding-right: 35px;">
									    	
									    <?php echo Form::open(['route'=> ['skill.destroy', $s->id], 'method' => 'POST']); ?>

									    	

									    	<?php echo Form::submit('delete skill', ["class" => 'btn btn-flat btn-danger pull-left btn-block btn-lg']); ?>


							    			<?php echo Form::close(); ?>

						</div>
							
						</div>
					</div>
					
				</div>
					
				

	      	</div>
	      </div>
	    </div>
	  </div>
	</div>

<!--End Modal-->


