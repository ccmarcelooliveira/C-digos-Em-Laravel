 
@extends('master.layout')

@section('conteudo')
<script>
$(function(){
    
     $("#dataInclusao").datepicker({
        dateFormat : 'dd/mm/yy'
    });
   
});
</script>


<div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <?php echo $barra_funcionalidade ?>
        <!-- /.row -->
        
        
    <div id="page-wrapper">
        
        <form method="post" id="registration-form" data-toggle="validator" enctype="multipart/form-data" >
                   <P><P>
                    <center>                        
                            @if(isset($imagem))
                                <img id="thumb" src="{{asset($imagem)}}" height="250" alt=""><p><P>
                            @endif            
                            <input type='file' name="anexo1" onchange="readURL(this);" />

                                <script>
                                function readURL(input) {
                                            if (input.files && input.files[0]) {
                                                var reader = new FileReader();

                                                reader.onload = function (e) {
                                                    $('#thumb')
                                                        .attr('src', e.target.result)
                                                        .width(280)
                                                        .height(250);
                                                };

                                                reader.readAsDataURL(input.files[0]);
                                            }
                                        }
                            </script>
                    </center>  
                    <P><P>
                     <?php echo $formulario; ?>                       
                
                    <a href="{{ route('logar') }}" class="btn btn-primary">Voltar</a>  
        
                    <!--
                        faz a validacao para erro crsf. tokenizacao
                    -->                    
                    
                    {{csrf_field()}}
                </form> 
        
            
              
        </form>                        
                 
        <!--
            permite que o codigo html seja impresso sem os comandos de html. so o conteudo.
        -->
        {!! isset($resp)?$resp:"" !!}
        

    </div>
        
@endsection