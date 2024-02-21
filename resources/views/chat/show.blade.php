@extends('layouts.app')

@push('styles')
<style type="text/css">
	
</style>
@endpush

@section('content')
<div class="container-fluid">
	<div class="row justify-content-center">
		<div class="col-12">
			<div class="card">
				<div class="card-header">Chat</div>
				<div class="card-body">			
					<div class="row p-2">
						<div class="col-10">
							<div class="row">
								<div class="col-12 border rounded-lg p-3">
									<ul id="messages" class="list-unstyled overflow-auto" style="height: 45vh;">
										<li>Test 1: hola</li>
										<li>Test 2: holaaaa</li>
									</ul>
								</div>
							</div>

							<form action="">
								<div class="row py-3">
									<div class="col-10 pl-0">
										<input id="message" type="text" class="form-control">
									</div>
									<div class="col-2 pr-0">
										<button id="send" type="submit" class="btn btn-primary btn-block">Enviar</button>
									</div>
								</div>
							</form>

						</div>
						<div class="col-2">
							<p><strong>Online now</strong></p>
							<ul id="users" class="list-unstyled overflow-auto text-info" style="height: 45vh;">
								<li>test1</li>
								<li>test2</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection


@push('scripts')
<script>
	
</script>
@endpush