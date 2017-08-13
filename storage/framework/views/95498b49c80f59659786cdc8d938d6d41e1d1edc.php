
	<?php echo $__env->make('view_applicant.experience.experience_modal', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

						<?php if(Auth::user()->experience->isEmpty()): ?>
							<h6 class="text-center" style="color:silver;"><em>click the <b>plus</b> sign to add some experience.</em></h6>
						<?php else: ?>
							<?php $__currentLoopData = $loopExp; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $exp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								
									<div class="box-body">
										<a href="#"><?php echo e($exp->exp_title); ?> </a>at  <?php echo e($exp->exp_company); ?> <br>
										<?php echo e($exp->exp_activities); ?> <br>
										<?php echo e($exp->exp_span_time); ?>

									</div>

								
						
								
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						<?php endif; ?>
					