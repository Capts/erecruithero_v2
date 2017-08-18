<div class="active tab-pane" id="education">
									<?php echo $__env->make('view_applicant.school.terModal', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
									<div class="box-body">
										<div class="row">
											<div class="colmd-12">
												<button type="button" class="btn btn-box-tool pull-right" title="Add school" data-toggle="modal" data-target="#terModal-<?php echo e(Auth::user()->id); ?>"><i class="fa fa-plus fa-2x"></i></button>
											</div>
											<div class="col-md-12">
												
												<?php if(is_null($schoolT)): ?>
												<?php else: ?>
													<p style="font-size: 16px;" class="label label-primary">Tertiary</p>
													
													<?php $__currentLoopData = $getAndLoopT; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $loopTer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

														<div class="box-body">
															<div class="box-header  with-border">
																<?php echo e($loopTer->ter_school); ?><br>
																<?php echo e($loopTer->ter_address); ?> <br> 
																<?php echo e(ucfirst($loopTer->ter_degree) . ' in '  . ucfirst($loopTer->ter_field_of_study)); ?> <br> 
																<?php echo e($loopTer->ter_major); ?> <br> 
																<?php echo e($loopTer->ter_address); ?> <br> 
																<?php echo e($loopTer->ter_start_year. ' - ' .$loopTer->ter_end_year); ?> <br> 
																<div class="box-tools pull-right">
																	<button class="btn btn-flat btn-xs btn-default" title="edit"><i class="fa fa-pencil"></i></button>
																</div>
															</div>
														</div>
													<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
													
												<?php endif; ?>


												
												<?php if(is_null($schoolS)): ?>
												<?php else: ?>
													<p style="font-size: 16px;" class="label label-primary">Secondary</p>
													<?php $__currentLoopData = $getAndLoopS; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $loopSec): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
														<div class="box-body">
															<div class="box-header  with-border">
																<?php echo e($loopSec->sec_school); ?><br>
																<?php echo e($loopSec->sec_address); ?><br>
																<?php echo e($loopSec->sec_start . ' - ' . $loopSec->sec_end); ?> 
																<div class="box-tools pull-right">
																	<button class="btn btn-flat btn-xs btn-default" title="edit"><i class="fa fa-pencil"></i></button>
																</div>
															</div>
															
															
														</div>
													<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
												<?php endif; ?>

												
												<?php if(is_null($schoolP)): ?>
												<?php else: ?>
													<p style="font-size: 16px;" class="label label-primary">Primary</p>
													<?php $__currentLoopData = $getAndLoopP; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $loopPri): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
														<div class="box-body">
															<div class="box-header  with-border">
		
																<?php echo e($loopPri->pri_school); ?> <br>
																<?php echo e($loopPri->pri_address); ?><br>
																<?php echo e($loopPri->pri_start . ' - ' . $loopPri->pri_end); ?>

																<div class="box-tools pull-right">
																	<button class="btn btn-flat btn-xs btn-default" title="edit"><i class="fa fa-pencil"></i></button>
																</div>
															</div>
														</div>
													<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
												<?php endif; ?>

													
											</div>
										</div>

									</div>
								</div>
								<!-- /.tab-pane -->