@extends('main')
@section('content')

    <div class="row register-form" style="padding: 16px;">
        <div class="col-md-8 offset-md-2" style="border-style: none;border-color: #ffffff;margin: -45px;">
            <form class="border-white shadow-none custom-form" style="border-color: #ffffff;width: 520px;margin: 76px;padding: 44px;">
                <div class="form-row form-group" style="width: 200px;">
                    <div class="col-sm-4 label-column" style="text-align: left;"><label class="col-form-label" for="name-input-field">Name </label></div>
                    <div class="col-sm-6 input-column"><input class="form-control" type="text" style="width: 500px;"></div>
                </div>
                <div class="form-row form-group" style="width: 200px;">
                    <div class="col-sm-4 label-column" style="text-align: left;"><label class="col-form-label" for="email-input-field">Celular</label></div>
                    <div class="col-sm-6 input-column"><input class="form-control" type="email" style="width: 500px;"></div>
                </div>
                <div class="form-row form-group" style="width: 200px;">
                    <div class="col-sm-4 label-column" style="text-align: left;"><label class="col-form-label" for="pawssword-input-field">Email</label></div>
                    <div class="col-sm-6 input-column"><input class="form-control" type="password" style="width: 500px;"></div>
                </div>
                <div class="form-row form-group" style="width: 200px;">
                    <div class="col-sm-4 label-column" style="text-align: left;"><label class="col-form-label" for="repeat-pawssword-input-field">Empresa</label></div>
                    <div class="col-sm-6 input-column"><input class="form-control" type="password" style="width: 500px;"></div>
                </div>
                <button class="btn btn-light float-right submit-button" id="ready" style="background: rgb(226,46,40);margin: 4px;padding: 5px;font-size: 12px;height: 35px;width: 64px;">ENVIAR</button></form>
        </div>
    </div>


    
@endsection
@push('links')
<link rel="stylesheet" href="//cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
@endpush
@push('scripts')
<script src="//cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
<script>




</script>
@endpush