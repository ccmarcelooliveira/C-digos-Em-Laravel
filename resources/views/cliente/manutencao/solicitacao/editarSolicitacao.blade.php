 
@extends('master.layoutAnexo')

@section('conteudo')
<script>
$(function(){
    
     $("#dataInclusao").datepicker({
        dateFormat : 'dd/mm/yy'
    });
   
});
</script>


        <!-- Page Heading/Breadcrumbs -->
       <?php echo $barra_funcionalidade ?>
        <!-- /.row -->
 
        <div class='col-lg-12'>
                <div class='panel panel-primary'>
                    <div class='panel-heading'>
                        Edição da Solicitação
                    </div>
                    <div class='panel-body'>

                            <form method="post" id="registration-form" name="form" data-toggle="validator" enctype="multipart/form-data" >
                                    <div class='col-lg-4'>
                                        <P><P>
                                        <center>
                                                <img id="thumb3" src="{{asset($imagem)}}" height="250" alt=""><p>

                                                
                                        </center>  
                                    </div>
                                    <div class='col-lg-8'>    
                                        <P><P>
                                        <?php echo $formulario; ?>                      

                                    </div>    
                                        {{csrf_field()}}
                            </form>

                     </div>                                                
                </div>
        </div>
        
@endsection