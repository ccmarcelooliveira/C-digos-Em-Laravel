 
@extends('master.layoutAnexo')

@section('conteudo')
<script>
$(function(){
    
     $("#dataInclusao").datepicker({
        dateFormat : 'dd/mm/yy'
    });
   
});
</script>


            <?php echo $barra_funcionalidade ?>       
            

            <div class='col-lg-12'>
                    <div class='panel panel-primary'>
                        <div class='panel-heading'>
                            Edição do Documento
                        </div>
                            <div class='panel-body'>

                                    <form method="post" id="registration-form" name="form" data-toggle="validator" enctype="multipart/form-data" >

                                            <?php echo $formulario; ?>                      


                                            <!--
                                                faz a validacao para erro crsf. tokenizacao
                                            -->                    

                                            {{csrf_field()}}


                                       
                                    </form>

                            </div>                                                
                </div>
            </div>
            
                
         

         
@endsection
