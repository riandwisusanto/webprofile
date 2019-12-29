@include('lib.csslib')
@include('template.header')


      <div class="container pt-5 mt-5" >
        <div class="row">
        	@foreach($port as $p)
			<div class="col-sm-6 text-center mt-2 p-2">
				<?php 
                    echo '<img width="100%" src="data:image/jpg;base64,'.base64_encode( $p->foto ).'" alt="">';
              	?>
			</div>

          	<div class="col-sm-6 mt-2 p-2">
            	
            	<h2>{{$p->nama}}</h2>
            	<hr>	
            	<p><b>INFO</b><br>{{$p->deskripsi}}</p>
            	<hr>	
            	<p><b>KOTA</b><br>{{$p->kota}}</p>
            	<hr>		
            	<p><b>PROJEK TIPE</b><br>{{$p->tipe}}</p>
            	<hr>	
            	<p><b>TEAM</b><br>{{$p->tim}}</p>
            	

  			</div>
  		</div>
  		@endforeach

      </div>


  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

@include('template.footer')
@include('lib.scriptlib')

