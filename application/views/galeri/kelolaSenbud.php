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
                            <h3 class="panel-title">Galeri Seni Budaya</h3>
                            
                        </div>
                        <div class="panel-body">
                           <div class="table-responsive">
                            <table class="display" id="data">
                                <thead>
                                    <tr>
                                        <th>Dokumentasi</th>
                                        <th>Nama Seni Budaya</th>
                                        <th>Action</th>
                                            
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                    <?php  foreach($set as $row){ ?>
                                     
                                    <tr>
                                        <td><img src="<?php echo base_url($row->path);?>" alt="<?php echo $row->nama_senbud;?>" class="img-thumbnail" width="100" height="100"></td>
                                        <td><?php echo $row->nama_senbud;?></td>
                                        <td>
							                 <?php echo anchor('dokumentasi/deleteDokumentasiSenbud/'.$row->id_dokumentasi_senbud,'<button class="btn btn-danger"><i class="fa fa-trash"></i> Hapus</button>');
                                             ?></td>
                                       
                                        </tr>
                                     <?php } ?>   
                                    
                                </tbody>
                            </table>
                        </div>
                        </div>
                    </div>
                

<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Tambah Dokumentasi</h4>
            </div>
            <div class="modal-body">
                <?php echo form_open('dokumentasi/createDokumentasiSenbud',array('id' => 'form','enctype' => 'multipart/form-data'));?>
                <select name="id_senbud" id="id_senbud">
                    <?php  foreach($senbud as $row){ ?>
                        <option value="<?php echo $row->id_senbud;?>"><?php echo $row->nama_senbud;?></option>
                    <?php } ?>   
                </select>
                <input type="file" class="dropzone" name="file">
            </div>
            <div class="modal-footer">
            <input type="submit" name="submit" value="Selesai" class="btn btn-success" id="button-disabled">
            <?php echo form_close();?>
        </div>
        </div>
    </div>
</div>
            <!-- END MAIN CONTENT -->
        </div>
    </div>
</div>

