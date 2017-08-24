<a data-toggle="modal" data-target="#areyousure" >
	{{-- {{ $notif->data['invitation']['invited_by_avatar'] }}  --}}
	<img src="{{ Storage::url($notif->data['invitation']['invited_by_avatar']) }}"  class="img-circle" height="30px" width="30px" class="user-image" alt="User Image">
		{{ $notif->data['invitation']['invited_by_name'] }} invited you for an interview
</a>

