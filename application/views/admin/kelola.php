<?php 
date_default_timezone_set('UTC')
 ?>
<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
                <a href="#" class="act-btn" data-toggle="modal" data-target="#myModal">+</a>
				    <?php echo $this->session->flashdata('notify');?>
				    <?php echo validation_errors();?>
					<!-- OVERVIEW -->
					<div class="panel panel-headline">
						<div class="panel-heading">
							<h3 class="panel-title">Kelola Administrator</h3>
							<p class="panel-subtitle">Admininistrator</p>
						</div>
						<div class="panel-body">
						   <div class="table-responsive">
							<table class="display" id="data">
							    <thead>
							        <tr>
							            <th>Username</th>
							            <th>Password</th>
                                        <!-- <th>Tanggal Dibuat</th> -->
                                        <th>Opsi</th>
							        </tr>
							    </thead>
							    <tbody>
                                    <!-- <?php $date = date(d-m-Y ); ?> -->
                                    <?php  foreach($set as $row){ ?>
                                    <tr>
                                        <td><?php echo $row->username;?></td>
							            <td><?php echo $row->password;?></td> 
							            <!-- <td><?= $date ?></td> -->
							             <td>
							                 <?php echo anchor('admin/deleteadmin/'.$row->id_user,'<button class="btn btn-danger"><i class="fa fa-trash"></i> Hapus</button>');?>
							            </td>
							            </tr>
							         <?php } ?>   
							        
							    </tbody>
							</table>
						</div>
                        </div>
					</div>
				
			<!-- END MAIN CONTENT -->
		</div>
    </div>
</div>


<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Tambah Administrator</h4>
      </div>
      <div class="modal-body">
        <?php echo form_open('admin/addadmin',array('id' => 'form'));?>
        <div class="row">
            <div class="col-md-6">
                <input type="hidden"  name="id_user"/>

                    <div class="form-group" id="pengguna">
                    <label>Username</label>
                    <input type="text" name="username" class="form-control">
                </div>
               
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control">
                </div>
            </div>
                </div>
            </div>
        </div>
        
        
        <div class="modal-footer">
            <input type="submit" name="submit" value="Tambah" class="btn btn-success" id="button-disabled">
            <?php echo form_close();?>
        </div>
      </div>
      
    </div>

  </div>
</div>

