@extends('main')
@section('content')
<br>
<div class="container" id="#container">
    <div class="row" name="rowPesquisa">
        <div class="col-lg-1"></div>
        <div class="col-lg-8">
            <div class="row">
                <h1 >Formulário</h1>
                    <form method="post"class="shadow-none custom-form">
                        <input class="form-control" type="text" name="search" id="search" placeholder="Pesquisar">
                    </form>
            </div>
            <br>
            <div class="row">
                <button type="button" class="btn btn-danger" name="pesquisar">Pesquisar</button>

            </div>
            <div class="row">
                <div class="accordion accordion-flush" id="accordionFlushExample">
                    <br>
                    <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingOne">
                        <button class="accordion-button collapsed" name="collapse" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne"></button>
                    </h2>
                    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                        <br>
                        <div class="container">
                            <div class="row">
                                <table id="table_berings" >
                                    <thead>
                                        <tr>
                                            <th rowspan="2">Ref IKO</th>
                                            <th rowspan="2">Peso(g)</th>
                                            <th colspan="3">Dimensões</th>
                                            <th rowspan="2">Carga dinamica</th>
                                            <th rowspan="2">Carga estatica</th>
                                        </tr>
                                        <tr>
                                            <th>FW</th>
                                            <th>d</th>
                                            <th>c</th>
                                        </tr>
                                    </thead>
                                    <tbody>
    
                                    </tbody>
                                   
                                </table>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-1"></div>
       
            
            
    </div>
    <br>
    <div id="divPesquisa">

        
    </div>
</div>














    
@endsection
@push('links')
<link rel="stylesheet" href="//cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
@endpush
@push('scripts')
<script src="//cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
<script>
    
 var tableBearings = null;
    $('[name="collapse"]').hide()
    function carregamentoPesquisa(){
        var divCollapse = $('<div></div>',{
            class: 'spinner-border',
            role: 'status',
            id: 'divRemove'
        })
        var spanCollapse = $('<div></div>',{
            class: 'visually-hidden',
            id: 'spanRemove'
        })
        divCollapse.append(spanCollapse);
        $('#divPesquisa').append(divCollapse)
    }




    $(document).ready(function() {
        tableBearings = $('#table_berings').DataTable({
                columns:[{
                    data:'iko_ref'
                },{
                    data:'weight'
                },{
                    data:'dimension_fw'
                },{
                    data:'dimension_d'
                },{
                    data:'dimension_c'
                },{
                    data: 'dynamic_load'
                },{
                    data:'static_load'
                }]
            });
        });

 
$(document).on('click','[name="pesquisar"] ',function(){
    carregamentoPesquisa()
    $.ajax({
        url: '{{route('selectBearing')}}',
        data: $('[name="search"]'),
        method: 'post',
        assync: false,
        success: function(returned){
             tableBearings.clear().rows.add(returned).draw()
            $('#divPesquisa').remove()
            $('[name="collapse"]').show()
            $('[name="collapse"]').click()

            
        
        },
        error: function(error, jhrx){
            Swal.fire('Error!',"'"+error.responseText+"'" , 'error')
        }
    });


})











</script>
@endpush