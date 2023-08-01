@extends('main')
@section('content')

<div class="row register-form" style="margin: 0px;width: auto;">
    <div class="col" style="height: 616px;width: auto;padding-left: 0px;min-width: 412px;">
        <form class="shadow-none custom-form" name="formLead" style="width: auto;padding: 24px;padding-top: 55px;padding-left: 55px;border-color: rgba(0,0,0,0);height: 634px;margin-top: 20px;min-width: 412;margin-right: 19px;margin-left: 109px;">
            <h1 style="height: 34px;padding-left: 11px;padding-bottom: 25px;border-style: none;">Formulário</h1>
            <div class="form-row d-flex d-sm-flex d-md-flex d-lg-flex d-xl-flex flex-column flex-sm-column flex-md-column flex-lg-column flex-xl-column form-group" style="margin-top: -20px;margin-left: -64px;margin-bottom: 20px;">
                <div class="col-sm-4 label-column">
                    <label class="col-form-label" for="name-input-field">Nome</label>
                </div>
                <div class="col-sm-6 input-column" style="min-width: 200px;">
                    <input class="shadow form-control" type="text" name="nome">
                </div>
            </div>
            <div class="form-row d-flex d-sm-flex d-md-flex d-lg-flex d-xl-flex flex-column flex-sm-column flex-md-column flex-lg-column flex-xl-column form-group" style="margin-top: -7px;margin-left: -64px;margin-bottom: 20px;">
                <div class="col-sm-4 label-column">
                    <label class="col-form-label" for="email-input-field">Celular</label>
                </div>
                <div class="col-sm-6 input-column" style="min-width: 200px;">
                    <input class="shadow form-control" type="text"name="telefone">
                </div>
            </div>
            <div class="form-row d-flex d-sm-flex d-md-flex d-lg-flex d-xl-flex flex-column flex-sm-column flex-md-column flex-lg-column flex-xl-column form-group" style="margin-top: -7px;margin-left: -64px;margin-bottom: 20px;">
                <div class="col-sm-4 label-column">
                    <label class="col-form-label" for="pawssword-input-field">Email</label>
                </div>
                <div class="col-sm-6 input-column" style="min-width: 200px;">
                    <input class="shadow form-control" type="text"name="email">
                </div>
            </div>
            <div class="form-row d-flex d-sm-flex d-md-flex d-lg-flex d-xl-flex flex-column flex-sm-column flex-md-column flex-lg-column flex-xl-column form-group" style="margin-top: -7px;margin-left: -64px;margin-bottom: 20px;">
                <div class="col-sm-4 label-column"><label class="col-form-label" for="repeat-pawssword-input-field">Empresa</label></div>
                <div class="col-sm-6 input-column" style="min-width: 200px;"><input class="shadow form-control" type="text" name="empresa"></div>
            </div>
        </form>
        <button class="btn btn-light shadow submit-button" name="save" style="background: rgb(230,44,41);padding: 14px;">Enviar</button>
    </div>
</div>


    
@endsection
@push('links')
<link rel="stylesheet" href="//cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
@endpush
@push('scripts')
<script src="//cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
<script>
    $('[name="save"]').on('click', function(){
        try{
            //verifyForm();
            Swal.fire({
                title: 'Do you want to save the note?',
                // showDenyButton: true,
                showCancelButton: true,
                confirmButtonText: 'Ok',
            }).then((result) => {
                /* Read more about isConfirmed, isDenied below */
                if (result.isConfirmed) {
                    $.ajax({
                        url: '{{route('saveLead')}}',
                        data: $('[name="formLead"]').serialize(),
                        method: 'post',
                        assync: false,
                        success: function(returned){
                            window.location.href = '/iko'
                           
                        },
                        error: function(error, jhrx){
                            Swal.fire('Error!',"'"+error.responseText+"'" , 'error')
                            console.log(error, jhrx);
                        }
                    });
                    
                }
            });
        }catch(e){
            Swal.fire('Error! ' + e, '', 'error')
        }
    });



</script>
@endpush