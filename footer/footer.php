<script>
$("#com_som").css('display','none');




var c_com_som = 0;
var s_com_som = 0;



var count_a=0;


$("#sem_som").on('click', function(e)
{
	count_a++;

	if (count_a == 1)
	{
		$.playSound("toyota.mp3");
	}
	

	c_com_som=1;
    if (c_com_som == 1)
    {
       $("#com_som").css('display','inline-block');
       $("#sem_som").css('display','none');
    }
		
		
		$.offmuteSound();
});

$("#com_som").on('click', function(e)
{
	count_a++;
	if (count_a == 1)
	{
		$.playSound("toyota.mp3");
	}
	
	s_com_som=1;
    if (s_com_som == 1)
    {
       $("#com_som").css('display','none');
       $("#sem_som").css('display','inline-block');
    }
		$.muteSound();

		
});




 
</script> 

<!-- //modal --> 
	<!-- timer scripts --> 
	<script type="text/javascript" src=" js/moment.js"></script>
	<script type="text/javascript" src=" js/moment-timezone-with-data.js"></script>
	<!-- //timer scripts -->
	<!-- start-smooth-scrolling --> 
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>	
	<script type="text/javascript" src="admin/js/storageInfo.js"></script>	

	


	<script type="text/javascript">
			jQuery(document).ready(function($) {
				
				$(".scroll").click(function(event){		
					event.preventDefault();
			
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
	</script>
	<!-- //end-smooth-scrolling -->	 
	<!-- smooth-scrolling-of-move-up -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
			var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
			};
			*/
			
			$().UItoTop({ easingType: 'easeOutQuart' });
			
		});
	</script>
	<!-- //smooth-scrolling-of-move-up -->   
	<!-- Scrolling Nav JavaScript --> 
    <script src="js/scrolling-nav.js"></script>  
	<!-- //fixed-scroll-nav-js -->  
	<!-- bth hover effect --> 
	<script>
	$(function() {
		$('.btn-6')
		.on('mouseenter', function(e) {
			var parentOffset = $(this).offset(),
			relX = e.pageX - parentOffset.left,
			relY = e.pageY - parentOffset.top;
		  $(this).find('span').css({
			top: relY,
			left: relX
		  })
		})
		.on('mouseout', function(e) {
		  var parentOffset = $(this).offset(),
			relX = e.pageX - parentOffset.left,
			relY = e.pageY - parentOffset.top;
		  $(this).find('.btn-6 span').css({
			top: relY,
			left: relX
		  })
		}); 
	});
	</script>	
	<!-- //bth hover effect --> 
	<!-- jarallax -->
	<script src="js/jarallax.js"></script>
	<script type="text/javascript">
		/* init Jarallax */
		$('.jarallax').jarallax({
			speed: 0.5,
			imgWidth: 1366,
			imgHeight: 768
		})
	</script>
	<!-- //jarallax -->   
	<!-- FlexSlider --> 
	<script defer src="js/jquery.flexslider.js"></script>
	<script type="text/javascript">
		$(window).load(function(){
		  $('.flexslider').flexslider({
			animation: "slide",
			start: function(slider){
			  $('body').removeClass('loading');
			}
		  });
		});
	</script>
	<!-- //End-FlexSlider -->  
	<!-- pop-up-script -->
	<script src="js/jquery.chocolat.js"></script>
	<script type="text/javascript">
	$(function() {
		$('.view-seventh a').Chocolat();
	});
	</script>
    <script>
        var myIndex = 0;
        carousel();

        function carousel() {
        var i;
        var x = document.getElementsByClassName("mySlides");
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";  
        }
        myIndex++;
        if (myIndex > x.length) {myIndex = 1}    
        x[myIndex-1].style.display = "block";  
        setTimeout(carousel, 2000); // Change image every 2 seconds
        }
</script>




	<script type="text/javascript">

 	var box = $('#box');
 	var into = $('#intro');
		setTimeout(function(){ box.toggleClass('hidden'); into.toggleClass('into_display_block');   }, 2500);
		
		/*$(document).ready(function() 
		{
 			var url = "images/sd.svg?rnd="+Math.random();
			 $('#mainLogo').attr("src",url);
			 var url2 = "images/toyota.svg?rnd="+Math.random();
			 $('#logoToyota').attr("src",url2);
			 
		 });*/
		 
		 setTimeout(function() {$(".back").fadeOut(); }, 8000);
		 

 </script>

	<!-- //pop-up-script -->  
	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
		<script src="js/bootstrap.js"></script>
		<script src="js/storageInfo.js"></script>

		<script src="admin/js/select2.full.min.js"></script>
<script src="admin/js/bootbox.min.js"></script>
<script src="admin/js/momentjs/moment-with-locales.min.js"></script>
<script src="admin/js/bootstrap-datetimepicker.min.js"></script>
<script src="admin/js/bootstrap-switch.min.js"></script>


		<script>

mostrarReservaCarros ();
mostrarComentarios ();
			GetCarroNome(); GetModeloNome(); GetIDModelo(); GetIDUsername();

			var date = new Date();
          d = date.setDate(date.getDate());
          h = date.setHours(date.getHours());
    
    // Datas usando no datetimepicker

    $("#data_reseva_dt").datetimepicker({ ignoreReadonly: true, format: 'DD/MM/YYYY', 
    locale: 'pt', showTodayButton: true, minDate: h, defaultDate: h, widgetPositioning: { horizontal: 'right', vertical: 'bottom' }});

  // Datas usando no datetimepicker

  $("#hora_reseva_dt").datetimepicker({ ignoreReadonly: true, format: 'HH:mm', 
		locale: 'pt', showTodayButton: true, minDate: h, defaultDate: h, widgetPositioning: { horizontal: 'right', vertical: 'bottom' }});
		
		$("#data_comentario_dt").datetimepicker({ ignoreReadonly: true, format: 'DD/MM/YYYY', 
    locale: 'pt', showTodayButton: true, minDate: h, defaultDate: h, widgetPositioning: { horizontal: 'right', vertical: 'bottom' }});
		
		
			arr_carros = JSON.parse(localStorage.getItem("Carro"));
        console.log(arr_carros);
        opt_carro='<option selected value="">Titulo</option>';   
        for (i=0;i<arr_carros.length;i++){
          opt_carro +='<option value="'+arr_carros[i].nome_carro+'">'+arr_carros[i].nome_carro+'</option>';
        }
				$('#car_id').html(opt_carro).select2();

				


	function NomeCarroValueById(vl1){
    var link;
  setTimeout(function(){ 
      
  dataValue='&action=1&nome='+vl1;
  //console.log(dataValue);
    $.ajax({ url:'../admin/reserva/action/action_reserva.php',
    data:dataValue,
    type:'POST', 
    cache:false,
    success: function(data){
      $('.back').fadeOut();
      arr = JSON.parse(data);
      $("#id_carro_obs").val(arr[0].id);  
          
    },
    error:function(data){
        $('#Modalko .debug-url').html('Não foi possivel obter dados dos Clientes, verifique a ligação Wi-Fi.');
        $("#mensagem_ko").trigger('click');
         $('.back').fadeOut();
      }
    });

}, 1000);
}

$( "#car_id" ).change(function() {
          if ($("#car_id").val() != "")
          {
                NomeCarroValueById($("#car_id").val());
          }
          else
          {
              $("#id_carro_obs").val('');
          }
          

});

$('#Modalko').on('hidden.bs.modal', function () {
					$('#a_reserve').modal('show');
				});


function mostrarReservaCarros ()
{
	var s = '';
  setTimeout(function(){ 
  dataValue='action=6';
    $.ajax({ url:'../admin/reserva/action/action_reserva.php',
    data:dataValue,
    type:'POST', 
    cache:false,
    success: function(data){
      $('.back').fadeOut();

      arr = JSON.parse(data);
      


          if (arr.length == null || arr.length < 1 )
          {
            
            $('#Modalko .debug-url').html('Não existe nenhuma reserva na base de dados. Crie primeiro');
            $("#mensagem_ko").trigger('click');
             $('.back').fadeOut();
          }
          else 
          {
            console.log(arr);
            for(i=0;i<arr.length;i++)
            {
							nome_carro = arr[i].nome_carro;
							img = arr[i].img;
							data_reserva = moment(arr[i].data_reserva*1000).format("DD/MM/YYYY");
							hora_reserva = moment(arr[i].hora_reserva*1000).format("HH:mm");
							obs = arr[i].observacoes;
							nome = arr[i].nome;
							telefone = arr[i].telefone;



							
                
                
								/*s += '<div class="col-md-6 col-xs-12 w3-row-padding"><div class="w3-panel w3-card-4 border_reserve" style="background:#fff; padding: 1.01em 16px; box-shadow: 0px 0px 0px!important;"><h4 class="cent"><a>'+nome_carro+'</a></h4><div class="cent"><img src="carros_toyota_reserva/admin/definitions/'+img+'" class="img-responsive"></div><h5 class="cent"><b>Nome & Contactos Info:</b> '+nome+' - '+telefone+' - '+arr[i].email +'</h5></div><h6 class="cent"><b>Data e Hora:</b> '+data_reserva+' '+hora_reserva+' </h6><p>'+obs+'</p></div></div>';*/
								
								s+='<div class="col-md-6 col-xs-12 w3-row-padding"><div class="w3-panel w3-card-4 border_reserve" style="background:#fff; padding: 1.01em 16px; box-shadow: 0px 0px 0px!important;"><h4 class="cent">'+nome_carro+'</h4><div class="cent"><img src="admin/definitions/upload/'+img+'" class="img-responsive">	</div><h6 class="cent"><p style="color:#000;"><b>Nome:</b> '+nome+' - '+arr[i].email+' </p></h6><p style="color: #000; text-align: center;"><p style="color:#000;"><b>Data e Hora: </b>'+data_reserva+' '+hora_reserva+'</p></p><p><b style="color:#000;">Descrição:</b> '+obs+'.</p></div></div> ';
 
                
                
                
            

						}
						
						$("#list_reserves").html(s);


            
            
            
          }
        },
        error:function(data){
            $('#Modalko .debug-url').html('Nao foi possivel mostrar o conteudo da reserva de carros, p.f. verifique a ligação Wi-Fi.');
            $("#mensagem_ko").trigger('click');
             $('.back').fadeOut();
          }
        });
    
    }, 1000);
}

$("#adicionar_reserva").on ('click', function(e)
{
	e.preventDefault();
	$(".back").show(); 
	$(".load").show();
	
	dataValue='action=4&nome='+$("#nome_reserva").val()+'&pais='+$("#pais").val()+'&email='+$("#email").val()+'&telefone='+$("#telefone").val()+'&data_reserva='+$("#data_reserva").val()+'&hora_reserva='+$("#hora_reserva").val()+'&carro_id='+$("#id_carro_obs").val()+'&observacao='+$("#observacao").val();
	console.log(dataValue);

	$.ajax({ url:'../admin/reserva/action/action_reserva.php',
    data:dataValue,
    type:'POST', 

    success: function(data){
           arr=[];
			arr =  JSON.parse(data);
			console.log(data);
      if (arr.error){
          $(".back").hide(); 
        $(".load").hide();
				$('.debug-url').html('Foram Encontrados os seguintes erros:<br><br>'+arr.error+'<br> Retifique o errro e tente novamente');
				$('#a_reserve').modal('hide');
				$('#Modalko').modal('show');

      }

      else if (arr.success == 0){
          $(".back").hide(); 
        $(".load").hide();
				$('.debug-url').html('Houve um Erro. A Reserva '+arr.id+ ' não foi criado com sucesso.');
				$('#a_reserve').modal('hide');
        $('#Modalko').modal('show');
				
				
				
      }

      else if(arr.success == 1){
          $(".back").hide(); 
        $(".load").hide();
          $('.debug-url').html('A Reserva <strong class="cpt">'+arr.id+'</strong> foi criada com sucesso. Iria receve o email: <strong>'+arr.email+'</strong> sobre os detalhes da reserva.');
          $('html, body').animate({ scrollTop: 0 }, 500);
          $('#Modalok').modal();
          setTimeout(function(){
          $('#Modalok').modal('hide');},2500);
          
					$('#a_reserve').modal('hide');
					mostrarReservaCarros ();
          
      }
    },
    error: function(){
        $(".back").hide(); 
        $(".load").hide();
				$('.debug-url').html('A Reserva numero: #<strong>'+id+'</strong> não foi criado, p.f. verifique a ligação Wi-Fi.');
				$("#mensagem_ko").trigger('click');
    }
  });


});

$('#Modalko2').on('hidden.bs.modal', function () {
					$('#adicionar_Comentario').modal('show');
				});



$("#addit_comentario").on ('click', function(e)
{
	e.preventDefault();
	$(".back").show(); 
	$(".load").show();
	
	dataValue='action=5&titulo='+$("#titulo").val()+'&username='+$("#username_comentario").val()+'&data_comentario='+$("#data_comentario_value").val()+'&descricao='+$("#descricao_value").val();
	console.log(dataValue);

	$.ajax({ url:'../admin/comentario/action/action_comentario.php',
    data:dataValue,
    type:'POST', 

    success: function(data){
           arr=[];
			arr =  JSON.parse(data);
			console.log(data);
      if (arr.error){
          $(".back").hide(); 
        $(".load").hide();
				$('.debug-url').html('Foram Encontrados os seguintes erros:<br><br>'+arr.error+'<br> Retifique o errro e tente novamente');
				$('#adicionar_Comentario').modal('hide');
				$('#Modalko2').modal('show');

      }

      else if (arr.success == 0){
          $(".back").hide(); 
        $(".load").hide();
				$('.debug-url').html('Houve um Erro. A Comentario '+arr.id+ ' não foi criado com sucesso.');
				$('#adicionar_Comentario').modal('hide');
        $('#Modalko2').modal('show');
				
				
				
			}
			
			else if (data == 100){
          $(".back").hide(); 
        $(".load").hide();
				$('.debug-url').html('O Comentario nao contem este nome do utilizador '+$("#username_comentario").val()+' na base de dados. Contacte com o administrador do sistema do backoffice Toyota Rental Cars');
				$('#adicionar_Comentario').modal('hide');
        $('#Modalko2').modal('show');
				
				
				
      }

      else if(arr.success == 1){
          $(".back").hide(); 
        $(".load").hide();
          $('.debug-url').html('O Comentario <strong class="cpt">'+arr.id+'</strong> do utilizador '+arr.nome+' foi criado com sucesso');
          $('html, body').animate({ scrollTop: 0 }, 500);
          $('#Modalok').modal();
          setTimeout(function(){
          $('#Modalok2').modal('hide');},2500);
          
					$('#adicionar_Comentario').modal('hide');
					mostrarComentarios ();
          
      }
    },
    error: function(){
        $(".back").hide(); 
        $(".load").hide();
				$('.debug-url').html('A Comentario numero: #<strong>'+id+'</strong> não foi criado, p.f. verifique a ligação Wi-Fi.');
				$("#mensagem_ko2").trigger('click');
    }
  });
});



function mostrarComentarios ()
{
	var s = '';
  setTimeout(function(){ 
  dataValue='action=6';
    $.ajax({ url:'../admin/comentario/action/action_comentario.php',
    data:dataValue,
    type:'POST', 
    cache:false,
    success: function(data){
      $('.back').fadeOut();

      arr = JSON.parse(data);
      


          if (arr.length == null || arr.length < 1 )
          {
            
            $('#Modalko .debug-url').html('Não existe nenhuma reserva na base de dados. Crie primeiro');
            $("#mensagem_ko").trigger('click');
             $('.back').fadeOut();
          }
          else 
          {
            console.log(arr);
            for(i=0;i<arr.length;i++)
            {
								titulo = arr[i].titulo;
								nome = arr[i].nome;
								descricao = arr[i].descricao;
								data_comentario = moment(arr[i].data*1000).format("DD/MM/YYYY");
	
	s += '<div class="w3-card-4" style="margin-bottom: 20px"><header class="w3-container w3-orange"><h1>'+titulo+'</h1></header><div class="w3-container"><p style="color: #000"><b>Descriçao:</b> '+descricao+'</p></div><footer class="w3-container w3-orange"><h6><b>Nome do Utilizador:</b> '+nome+' - <b>Data:</b> '+data_comentario+'</h6></footer></div>';




							
                
                
								/*s += '<div class="col-md-6 col-xs-12 w3-row-padding"><div class="w3-panel w3-card-4 border_reserve" style="background:#fff; padding: 1.01em 16px; box-shadow: 0px 0px 0px!important;"><h4 class="cent"><a>'+nome_carro+'</a></h4><div class="cent"><img src="carros_toyota_reserva/admin/definitions/'+img+'" class="img-responsive"></div><h5 class="cent"><b>Nome & Contactos Info:</b> '+nome+' - '+telefone+' - '+arr[i].email +'</h5></div><h6 class="cent"><b>Data e Hora:</b> '+data_reserva+' '+hora_reserva+' </h6><p>'+obs+'</p></div></div>';*/
								
 
                
                
                
            

						}
						
						$("#comment_view").html(s);


            
            
            
          }
        },
        error:function(data){
            $('#Modalko .debug-url').html('Nao foi possivel mostrar o conteudo da reserva de carros, p.f. verifique a ligação Wi-Fi.');
            $("#mensagem_ko").trigger('click');
             $('.back').fadeOut();
          }
        });
    
    }, 1000);
}


$("#submit_info").submit(function(e){
$(".back").show();
$(".load").show();
e.preventDefault();
dataValue = $(this).serialize();
console.log(dataValue);
$.ajax({ url:'info/resp.php',
data:dataValue,
    type:'POST', 
    cache: false,
    success:function(data){
    	console.log(data);
       if(data == 0)
      {
          $(".back").hide();
          $(".load").show();
        $('.debug-url').html("O Pedido de Informações foi submtido com sucesso. Verifique a mensagem no email: <b>"+$("#input-26").val()+"</b>.");
          $('#submit_info')[0].reset();
          $("#mensagem_ok3").trigger('click');
          setTimeout(function(){
          $('#Modalok3').modal('hide');},2500);
     }
     else
     {
      $(".back").hide();
      $(".load").show();
      $('.debug-url').html("Por favor verifique os seguintes campos:<br><br>"+data+"<br> e tente novamente.");
        $('#Modalko3').modal();
     }
     
   },
 error:function(){
     $(".back").hide();
     $(".load").show();
     $('.debug-url').html("O Pedido de Informações não foi submtido com sucesso. Verifique a conexão WI-FI e tente novamente.");
        $('#Modalko3').modal();
    }
  });
});

				
		</script>




</body> 
</html>

		
