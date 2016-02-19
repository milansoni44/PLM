        <script type="text/javascript">
        $(document).ready(function() {
            var oTable = $('#accountgroup_details_view').dataTable( {
                "aLengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
                dom: 'T<"clear">lfrtip',
                tableTools: {
                    "sSwfPath": "http://cdnjs.cloudflare.com/ajax/libs/datatables-tabletools/2.1.5/swf/copy_csv_xls_pdf.swf",
                    "aButtons": [
                        "copy",
                        "csv",
                        "xls",
                        {
                            "sExtends": "pdf",
                            "sPdfOrientation": "landscape",
                            "sPdfMessage": "Your custom message would go here."
                        },
                        "print"
                    ]
                }
            } );
        } );
        </script>
        
        <div class="page-heading">
            <?php if($this->session->flashdata('success')) { ?>
            <div class="alert alert-success fade in">
                <button type="button" class="close close-sm" data-dismiss="alert">
                    <i class="fa fa-times"></i>
                </button>
                <?php echo $this->session->flashdata('success');?>
            </div>
            <?php 
            }
            ?>
            <h3>
                <?php echo $page_title; ?>
            </h3>
            <ul class="breadcrumb">
                <li>
                    <a href="<?php echo base_url(); ?>">Home</a>
                </li>
                <li class="active"> <?php echo $page_title; ?> </li>
            </ul>
        </div>
        
        <!--body wrapper start-->
        <div class="wrapper">
            <div class="row">
                <div class="col-sm-12">
                    <section class="panel">
                        <header class="panel-heading">
                            <?php echo $page_title; ?>
                            <?php
                                if($this->ion_auth->in_group(array('admin','manager'))){
                            ?>
                            <span class="tools pull-right">
                                <a class="custom-button" href="<?php echo base_url(); ?>index.php/accountgroup/add"> Add Account Group</a>
                            </span>
                            <?php
                                }
                            ?>
                        </header>
                        <div class="panel-body">
                            <div class="adv-table">
                                <table id="accountgroup_details_view" class="table table-bordered table-hover">
                                    <thead>
										<tr>
											<th>AccountGroup No</th>
                                            <th>Branch</th>
                                            <th>Group Title</th>
											<th>Category</th>
											<th>Opening Balance</th>
											<th>Action</th>
										</tr>
									</thead>
                                    <tbody>
                                        <!-- Data goes here -->
                                        <?php
                                            if(!empty($acc_group)){
                                                foreach($acc_group as $row){
                                        ?>
                                        <tr>
                                            <td><?php echo $row->id; ?></td>
                                            <td><?php echo $row->branchName; ?></td>
                                            <td><?php echo $row->group_title; ?></td>
                                            <td><?php echo $row->category; ?></td>
                                            <td><?php echo $row->opening_balance; ?></td>
                                            <td><a href="<?php echo base_url(); ?>index.php/accountgroup/view/<?php echo $row->id; ?>"><i class='fa fa-eye'></i></a>&nbsp;&nbsp;<a href="<?php echo base_url(); ?>index.php/accountgroup/edit/<?php echo $row->id; ?>"><i class='fa fa-pencil-square-o'></i></a>&nbsp;&nbsp;<a href="<?php echo base_url(); ?>index.php/accountgroup/delete/<?php echo $row->id; ?>" onclick="return confirm('Are you sure you want to delete?');"><i class='fa fa-trash-o'></i></a></td>
                                        </tr>
                                        <?php
                                                }
                                            }
                                        ?>
									</tbody>
                                </table>
                            </div>
                        </div>
                    </section>
                </div>
                    
            </div>
        </div>