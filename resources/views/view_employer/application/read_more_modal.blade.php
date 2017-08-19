<div class="row">
	<div class="col-md-12">
		<!-- Modal for tertiary-->

			<!-- Modal -->
			<div class="modal fade" id="readmore1" tabindex="1" role="dialog" aria-labelledby="myModalLabel">
			  <div class="modal-dialog modal-xs" role="document">
			    <div class="modal-content">
			     
			      <div class="modal-body">
			      	 <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			      	<div class="row">
						
						<div class="">
							<div class="row">
									<div class="col-md-10 col-md-offset-1">
										<h2 class="summary-heading text-left" >{{ $thisUser->firstname . ' '  . $thisUser->lastname }}<br><small>{{ $thisUser->email }}</small></h2>
										<img class="summary-image img-circle img-thumbnail img-responsive pull-left" src="{{ Storage::url($thisUser->avatar) }}" height="200px" width="200px" style="margin-right:20px;"></img>
										
										<h3>{{ ucfirst($thisUser->profile->bio) }}</h3>
										
									<div class="box-footer">
										<button class="btn btn-flat btn-primary btn-block"><i class="fa fa-calendar pull-left">&nbsp;</i>Invite for interview</button>
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



	</div>
</div>