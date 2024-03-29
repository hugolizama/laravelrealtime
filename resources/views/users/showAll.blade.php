@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="card">
				<div class="card-header">Usuarios</div>
				<div class="card-body">
					<p>Indicaciones: Las modificaciones a esta lista de realizan a través de la api Users.</p>
					<ul id="users"></ul>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection

@push('scripts')
<script>
	window.axios.get('/api/users')
		.then((response) => {
			
			const usersElement = document.getElementById('users');

			let users = response.data;

			users.forEach(function(user, index) {
				let element = document.createElement('li');

				element.setAttribute('id', user.id);
				element.innerText = user.name;

				usersElement.appendChild(element);
			});
		});
</script>

<script>
	Echo.channel('users')
		.listen('UserCreated', (e) => {
			const usersElement = document.getElementById('users');

			let element = document.createElement('li');

			element.setAttribute('id', e.user.id);
			element.innerText = e.user.name;

			usersElement.appendChild(element);

		})
		.listen('UserUpdated', (e) => {
			let element = document.getElementById(e.user.id);
			element.innerText = e.user.name;

		})
		.listen('UserDeleted', (e) => {
			let element = document.getElementById(e.user.id);
			element.parentNode.removeChild(element);
		});
</script>
@endpush