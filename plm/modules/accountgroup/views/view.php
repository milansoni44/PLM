        <!-- page heading start-->
        <div class="page-heading">
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
        <!-- page heading end-->

        <!--body wrapper start-->
        <section class="wrapper">
        <?php echo $this->session->flashdata('success');?>
        <?php echo validation_errors();?>
        <?php if(isset($error)) { echo $error; }?>
        <!-- page start-->

            <div class="row">
                <div class="col-lg-6">
                    <section class="panel">
                        <header class="panel-heading">
                            <?php echo $page_title; ?>
                            <span class="tools pull-right">
                            <a class="custom-button" href="<?php echo base_url(); ?>index.php/accountgroup/edit/<?php echo $id; ?>"> Edit Account Group</a>
                        </span>
                        </header>
                        <div class="panel-body">
                            <form class="form-horizontal" role="form" method="post" action="../edit/<?php echo $id ?>">
                                <div class="form-group">
                                    <label class="col-sm-2 control-label col-lg-3" for="branch">Branch</label>
                                    <div class="col-lg-9">
                                        <input type="text" class="form-control" placeholder="Group Title" id="branch" name="branch" value="<?php echo $accountgroup->branch_name; ?>" disabled>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label  class="col-lg-3 col-sm-3 control-label" for="group_title">Group Title</label>
                                    <div class="col-lg-9">
                                        <input type="text" class="form-control" placeholder="Group Title" id="group_title" name="group_title" value="<?php echo $accountgroup->group_title; ?>" disabled>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label col-lg-3" for="category">Category</label>
                                    <div class="col-lg-9">
                                        <input type="text" class="form-control" id="category" name="category" value="<?php echo $accountgroup->category; ?>" disabled>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label  class="col-lg-3 col-sm-3 control-label" for="opening_balance">Opening Balance Amount</label>
                                    <div class="col-lg-9">
                                        <input type="text" class="form-control" placeholder="Opening Balance Amount" id="opening_balance" name="opening_balance" value="<?php echo $accountgroup->opening_balance; ?>" disabled>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </section>
                </div>
            </div>
        <!-- page end-->
        </section>
        <!--body wrapper end-->