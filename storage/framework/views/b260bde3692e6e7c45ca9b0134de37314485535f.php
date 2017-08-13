
				<?php if(Auth::user()->skill->isEmpty()): ?>
					<h6 class="text-center" style="color:silver;"><em>click the <b>plus</b> sign to add a skill.</em></h6>
				<?php else: ?>

				
					<?php $__currentLoopData = $loopSkills; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $skill): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<div class="col-xs-5">
							<h4 ><p class="label label-info"><?php echo e(ucfirst(str_limit("$skill->skill_name", 11))); ?></p></h4>
						</div>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

				<?php endif; ?>


<?php echo $__env->make('view_applicant.skill.skill_modal', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

