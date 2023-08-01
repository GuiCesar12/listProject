@extends('main')
@section('content')
<br>
<div class="container" id="#container">
    <div class="row" name="rowPesquisa">
        <form method="post">
            <label for="">
                Pesquisar oq precisa
            </label>
            <input type="text" name="search" id="search">
        </form>
            <button name="pesquisar">Pesquisar</button>
            
            <div class="accordion accordion-flush" id="accordionFlushExample">
                <br>
                <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingOne">
                    <button class="accordion-button collapsed" name="collapse" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                    Resultados da pesquisa
                    </button>
                </h2>
                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                    <br>
                    <div class="container">
                        <div class="row">
                            <table id="table_berings">
                                <thead>
                                    <td>Campo1</td>
                                    <td>Campo2</td>
                                    <td>Campo3</td>
                                    <td>Campo4</td>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
                </div>
            </div>
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
    // Inicializa a tabela utilizando o plugin DataTables
    var table_berings = $('#table_berings').DataTable({
        // Configurações da tabela
    });

    // Adiciona o evento de clique no botão de pesquisa
    $(document).on('click','[name="pesquisar"] ',function(){
        carregamentoPesquisa()
        $.ajax({
            url: '{{route('selectBearing')}}',
            data: $('[name="search"]'),
            method: 'post',
            assync: false,
            success: function(returned){
                $('#divPesquisa').remove()
                $('[name="collapse"]').show()
                $('[name="collapse"]').click()

                
            
            },
            error: function(error, jhrx){
                Swal.fire('Error!',"'"+error.responseText+"'" , 'error')
            }
        });


    })
});











</script>
@endpush