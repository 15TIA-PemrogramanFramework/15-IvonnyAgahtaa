<?php 
$datakuu['alamat']="dashboard"; 
?>

<?php $this->load->view('Benar/Header',$datakuu) ?>


<div class="content">
            <div class="container-fluid">
                
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                               <center> <h4 class="title">LARSEN DESIGN</h4>
                                <p class="category">24 Hours performance</p>
                            </div>
                            <div class="content">
                                <img src="assets_admin/img/b.jpg"  height="400"  width="1000" >
                                    <hr>
                                    <div class="stats">
                                       </center>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


       <?php $this->load->view('Benar/Footer') ?>

       <script type="text/javascript">
    	$(document).ready(function(){

        	demo.initChartist();

        	$.notify({
            	icon: 'ti-gift',
            	message: "Welcome to <b> Larsen Design Application </b> -  <br> ©Ivonny_Agahta. 2017."

            },{
                type: 'success',
                timer: 4000
            });

    	});
	</script>            