 @extends('master.layout2')

@section('conteudo')
<script>
$(function(){
    
     $("#dataInclusao").datepicker({
        dateFormat : 'dd/mm/yy'
    });
   
});
</script>

<script type="text/javascript">

    function pesquisa_modelo_carro(){

            var idMarca = $("#marca").val();                    
            var get_token = $('input[name="_token"]').val();


            $.ajax({
                headers: {
                    'X-CSRF-Token': get_token
                },
                url: "{{ URL::to('ajax/pesquisaModelo') }}",
                type: "POST",
                dataType: 'html',
                data: {
                    "id": idMarca
                },
                beforeSend: function () {
                    //mostrando/883/ um gif de enviando
                    //document.getElementById("enviando").style.display = "block";
                },
                success: function(result) {
                   
                      $("#modelo").html('');
                      $("#modelo").append(result);
                },
                error: function () {

                }


            });

    }
</script>
       
        
        <?php echo $pageHeader; ?>
       
        
       <section class="content">
            <div class="container-fluid">
                     
            
                    <div class='col-lg-12'>
                                                
                            <div class="card card-primary">
                                <div class="card-header">
                                  <h3 class="card-title"> Edição de Proprietário</h3>
                                </div>
                                <!-- /.card-header -->
                                <!-- form start --> 
                                <form method="post" id="registration-form" name="form" data-toggle="validator" enctype="multipart/form-data" >
                                    <div class='col-lg-4'>
                                        <center>
                                            <P><P>
                                             @if(isset($imagem))
                                                 <img id="thumb3" src="{{asset($imagem)}}" height="150" alt=""><p><P>
                                             @endif            
                                             <input type='file' name="anexo1" onchange="readURL(this);" />

                                                 <script>
                                                     function readURL(input) {
                                                         if (input.files && input.files[0]) {
                                                             var reader = new FileReader();

                                                             reader.onload = function (e) {
                                                                 $('#thumb3')
                                                                     .attr('src', e.target.result)
                                                                     .width(280)
                                                                     .height(250);
                                                             };

                                                             reader.readAsDataURL(input.files[0]);
                                                         }
                                                     }
                                                 </script>
                                        </center>    
                                     </div>
                                     <div class='col-lg-8'> 
                                         <?php echo $formulario; ?>   
                                         {{csrf_field()}}
                                     </div>    


                                 </form> 
                            
                          
                    </div>

                </div>
            </div>
       </section>             
@endsection