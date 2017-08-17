
				<?php if(Auth::user()->skill->isEmpty()): ?>
					<h6 class="text-center" style="color:silver;"><em>click the <b>plus</b> sign to add a skill.</em></h6>
				<?php else: ?>

					<?php $__currentLoopData = $loopSkills; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $skill): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

						<div class="col-xs-12 t">
							<h4>
								<label class="label label-default"><?php echo e(ucfirst(str_limit("$skill->skill_name", 25))); ?>

								</label>
								<a style="font-size: 14px;" href="<?php echo e(route('skill.edit', $skill->id)); ?>">
								<span class="fa fa-pencil pull-right"></span></a>
								
									
							</h4>
							
						</div>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

				<?php endif; ?>

<?php echo $__env->make('view_applicant.skill.skill_modal', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

