<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Arquivos oriundos da pasta: dagoba/congig/application.ini  - Anders -->
        <title>{{(Config::get('application.web.html.titulo'))}}</title>
        <meta name='keywords' content="{{(Config::get('application.web.html.keywords'))}}" lang="pt" />
        <meta name="description" content="{{(Config::get('application.web.html.description'))}}" lang="pt" />
        <meta name='url' content="{{(Config::get('application.web.html.url'))}}" />
        <meta name='author' content="{{(Config::get('application.web.html.author'))}}" />
        <meta name='distribution' content='web' />
        <meta name='copyright' content="{{(Config::get('application.web.html.copyright'))}}" />
        <meta name='robots' content='ALL' />
        <meta name='reply-to' content="{{(Config::get('application.web.html.reply_to'))}}" />
        <meta name='company' content="{{(Config::get('application.web.html.company'))}}" />
        <!-- Fim -->

        <link rel="stylesheet" type="text/css" href="{{ asset('bootstrap/css/bootstrap.css') }} ">
        <!-- Custom CSS -->
        <link href="{{ asset('layout_business/css/modern-business.css') }}" rel="stylesheet">        
        <!-- Custom Fonts -->
        <link href="{{ asset('layout_business/font-awesome/css/font-awesome.min.css') }}"  rel="stylesheet" type="text/css">        
        <!-- MetisMenu CSS -->
        <link href="{{ asset('bower_components/metisMenu/dist/metisMenu.min.css') }}" rel="stylesheet">
        <!-- DataTables CSS -->
        <link href="{{ asset('bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css') }}" rel="stylesheet">
        <!-- DataTables Responsive CSS -->
        <link href="{{ asset('bower_components/datatables-responsive/css/responsive.dataTables.scss') }}" rel="stylesheet">
        <!-- DataTables Responsive CSS -->
        <link href="{{ asset('bower_components/morrisjs/morris.css') }}" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="{{ asset('jquery-ui/jquery-ui.min.css') }}">    
        <link href="{{ asset('dist/css/dashboard.css') }}" rel="stylesheet">
        
        
         <!-- Custom CSS -->
         <link href="{{ asset('css/sb-admin-2.css') }}" rel="stylesheet">
        
        <!-- USER INTERFACE : para o calendario por exemplo -->
        <link rel="stylesheet" type="text/css"  href="{{ asset('jquery-ui/jquery-ui.min.css') }}">
        <script src="{{ asset('jquery-ui/external/jquery/jquery.js') }}" type="text/javascript"></script>
        <script src="{{ asset('jquery-ui/jquery-ui.min.js') }}"   type="text/javascript"></script>
        
        <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.2/summernote.css" rel="stylesheet">
        <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.2/summernote.js"></script>
 
        
     
        <link href="{{ asset('js/popup/goNotification.css') }}" rel="stylesheet" type="text/css">
        <script src="{{ asset('js/popup/ga.js') }}" async="" type="text/javascript"></script>        
        <script src="{{ asset('js/popup/goNotification.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/webcam.min.js') }}"></script>
       
        
        <style>
            li { cursor:pointer}
        </style>
        
        
        <!-- SALVAR IMAGEM COM WEBCAM -->
        
        <!-- Code to handle taking the snapshot and displaying it locally -->
        
        
	<script language="JavaScript">
		// preload shutter audio clip
		var shutter = new Audio();
		shutter.autoplay = false;
		shutter.src = navigator.userAgent.match(/Firefox/) ? 'shutter.ogg' : 'shutter.mp3';
		
		function preview_snapshot() {
			// play sound effect
			try { shutter.currentTime = 0; } catch(e) {;} // fails in IE
			shutter.play();
			
			// freeze camera so user can preview current frame
			Webcam.freeze();
			
			// swap button sets
			document.getElementById('pre_take_buttons').style.display = 'none';
			document.getElementById('post_take_buttons').style.display = '';
		}
		
		function cancel_preview() {
			// cancel preview freeze and return to live camera view
			Webcam.unfreeze();
			
			// swap buttons back to first set
			document.getElementById('pre_take_buttons').style.display = '';
			document.getElementById('post_take_buttons').style.display = 'none';
		}
		
		function save_photo() {
			// actually snap photo (from preview freeze) and display it
			Webcam.snap( function(data_uri) {
				// display results in page
				document.getElementById('results').innerHTML = '<img src="'+data_uri+'"/><br/>';
				
                                document.getElementById('imagem_canvas').value = data_uri;
                                //alert(data_uri);
				// shut down camera, stop capturing
				Webcam.reset();
				
				// show results, hide photo booth
				document.getElementById('capturar').style.display = '';
                                document.getElementById('camera').style.display = 'none';
				document.getElementById('my_photo_booth').style.display = 'none';
			} );
		}
	</script>
    </head>

    <body>

        <!-- Navigation -->

        @extends($linha)

        @yield("conteudo")
        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>{{(Config::get('application.web.html.rodape'))}}</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

      
    <!--VALIDADOR DE FORMULÁRIO -->
    <script src="{{ asset('bootstrap-validator-master/dist/validator.js') }}" type="text/javascript"></script>
    <script src="{{ asset('bootstrap-validator-master/dist/validator.min.js') }}" type="text/javascript"></script>   
    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset('bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>     	    
    <!-- Metis Menu Plugin JavaScript -->
    <script src="{{ asset('bower_components/metisMenu/dist/metisMenu.min.js') }}"></script>
    <!-- DataTables JavaScript -->
    <script src="{{ asset('bower_components/datatables/media/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js') }}"></script>
    <!-- Custom Theme JavaScript -->
    <script src="{{ asset('dist/js/sb-admin-2.js') }}"></script>   
   
     
    
      
    
    <!-- Page-Level Demo Scripts - Tables - Use for reference -- EXIBE O MODELO DE TABELA -->
    <script>
        $(document).ready(function () {
          $('#dataTables-example').DataTable({
            responsive: true
          });
        });
    </script>    
   
    <!-- VALIDACAO DE FORMULARIOS -->

    <script src="{{ asset('validacao/form/assets/js/jquery.validate.js') }}"></script>
    <script src="{{ asset('validacao/form/script.js') }}"></script>
    
    <script>
        addEventListener('load', prettyPrint, false);
        $(document).ready(function () {
          $('pre').addClass('prettyprint linenums');
        });
    </script>
    
    <?php 
    
            //TESTE PARA ENVIO DE MENSAGEM
        if(isset($msg)){  
            if($msg != "" && strlen($msg) > 5){
                echo $msg;
    ?>    
        <div class="jquery-script-ads">
            <script type="text/javascript">
                $(document).ready(function(){

                    $.goNotification('{{ $msg }}');

                });
            </script>
        </div> 
    <?php 
            }
        }            
    ?> 

</body>

</html>
