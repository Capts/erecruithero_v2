<?php echo $__env->make('view_applicant.school.school_modal', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

			
					<?php if(is_null($schoolT) and is_null($schoolS) and is_null($schoolP) ): ?>
						<h6 class="text-center" style="color:silver;"><em>click the <b>plus</b> sign to add a school</em></h6>
					<?php else: ?>
						<?php if(is_null($schoolT)): ?>
							
						<?php else: ?>
						<h4><span class="badge" style="background-color: #357ecc;">3</span>&nbsp;Tertiary </h4>

						<?php $__currentLoopData = $getAndLoopT; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $loopTer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

						<div class="box-body">
							<div class="box-header with-border" style="">
							
								<p>Attended <a href="#"><?php echo e($loopTer->ter_school); ?></a><br></p>
								<?php echo e($loopTer->ter_address); ?> <br> 
								<?php echo e(ucfirst($loopTer->ter_degree) . ' in '  . ucfirst($loopTer->ter_field_of_study)); ?> <br> 
								<?php echo e($loopTer->ter_major); ?> <br> 
								<?php echo e($loopTer->ter_start_year. ' - ' .$loopTer->ter_end_year); ?> <br> 
							
								
								
							</div>
						</div>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

						<?php endif; ?>



						<?php if(is_null($schoolS)): ?>

						<?php else: ?>
						<h4><span class="badge" style="background-color: #357ecc;">2</span>&nbsp;Secondary </h4>
						<?php $__currentLoopData = $getAndLoopS; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $loopSec): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<div class="box-body">
							<div class="box-header ">
								<p>Attended &nbsp; <a href="#"><?php echo e($loopSec->sec_school); ?></a>&nbsp;in <?php echo e($loopSec->sec_address); ?></p>
								<?php echo e($loopSec->sec_start . ' - ' . $loopSec->sec_end); ?> 
								
							</div>


						</div>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						<?php endif; ?>


						<?php if(is_null($schoolP)): ?>

						<?php else: ?>
						<h4><span class="badge" style="background-color: #357ecc;">1</span>&nbsp;Primary </h4>
						<?php $__currentLoopData = $getAndLoopP; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $loopPri): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<div class="box-body">
							<div class="box-header  with-border">

								<p>Attended&nbsp; <a href="#"><?php echo e($loopPri->pri_school); ?></a>&nbsp;in <?php echo e($loopPri->pri_address); ?></p>
								
								<?php echo e($loopPri->pri_start . ' - ' . $loopPri->pri_end); ?>

								
							</div>
						</div>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						<?php endif; ?>
					<?php endif; ?>
				

