
@extends('administracaoDagoba.layout2')

@section('conteudo')
<script>
$(function(){
    
     $("#dataInclusao").datepicker({
        dateFormat : 'dd/mm/yy'
    });
   
});
</script>
<script type="text/javascript">
$(document).ready(function(){

$('.demo1').on('click', function(){
$.goNotification('jQueryScript.net');
});

});


});
</script>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>



<div id="page-wrapper">
 
    <div class="col-xs-12">  
        <!-- /.row -->
           
        <div class='col-lg-12'>
                <div class='panel panel-primary'>
                    <div class='panel-heading'>
                        Cadastro de Plano de Conta
                    </div>
                            <div class='panel-body'>

                                <form method="post" id="registration-form" data-toggle="validator" enctype="multipart/form-data">
                                    <div class="col-lg-12">

                                        

                                            <P><P>
                                                <?php echo $formulario; ?>                          


                                                <!--
                                                    faz a validacao para erro crsf. tokenizacao
                                                -->
                                                {{csrf_field()}}
                                        


                                    </div>
                                    


                                </form> 
                            </div>
                    </div>                                                
                </div>
        </div>
    </div>     
        
        
@endsection