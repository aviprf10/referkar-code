<?php
include 'common/config.php';
include 'common/check_login.php';
if ($admin == 1 || ($sub_admin == 1 && $is_country_read == 1))
{
    $module_full_name = "Category";
    $module_short_name = 'Category';
    $module_name = "category";
    ?> 
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php echo $company_title; ?>  - Add <?php echo $module_full_name; ?></title>
        <?php include('common/header-css.php'); ?>
        <style>
        table#all-<?php echo $module_name; ?>-table tr td:first-child{display:none;}
        table#all-<?php echo $module_name; ?>-table th:first-child{display:none;} 
        <?php if($page_layout == 1){ ?>
        .page-title 
        {
            padding: 15px 36px 15px 0;
        }     
        .content:first-child
        {
            padding-top: 2px;
        }

        .heading-elements > a
        {
            padding: 7px 15px;
        }
        <?php } ?>
    </style>
    </head>
    <body>
    <?php include('common/header.php'); ?> 
    <?php include('common/side-menu.php'); ?>
    <div class="content-wrapper">
        <!-- Page header -->
        <div class="page-header page-header-light">
            <!-- <div class="page-header-content header-elements-md-inline">
                <div class="page-title d-flex">
                    <h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Home</span> - Dashboard</h4>
                    <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
                </div>

                <div class="header-elements d-none">
                    <div class="d-flex justify-content-center">
                        <a href="#" class="btn btn-link btn-float text-default"><i class="icon-bars-alt text-primary"></i><span>Statistics</span></a>
                        <a href="#" class="btn btn-link btn-float text-default"><i class="icon-calculator text-primary"></i> <span>Invoices</span></a>
                        <a href="#" class="btn btn-link btn-float text-default"><i class="icon-calendar5 text-primary"></i> <span>Schedule</span></a>
                    </div>
                </div>
            </div> -->

            <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
                <div class="d-flex">
                    <div class="breadcrumb">
                        <a href="index.html" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
                        <span class="breadcrumb-item active">Add <?php echo $module_full_name; ?></span>
                    </div>

                    <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
                </div>

                <!-- <div class="header-elements d-none">
                    <div class="breadcrumb justify-content-center">
                        <a href="#" class="breadcrumb-elements-item">
                            <i class="icon-comment-discussion mr-2"></i>
                            Support
                        </a>

                        <div class="breadcrumb-elements-item dropdown p-0">
                            <a href="#" class="breadcrumb-elements-item dropdown-toggle" data-toggle="dropdown">
                                <i class="icon-gear mr-2"></i>
                                Settings
                            </a>

                            <div class="dropdown-menu dropdown-menu-right">
                                <a href="#" class="dropdown-item"><i class="icon-user-lock"></i> Account security</a>
                                <a href="#" class="dropdown-item"><i class="icon-statistics"></i> Analytics</a>
                                <a href="#" class="dropdown-item"><i class="icon-accessibility"></i> Accessibility</a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item"><i class="icon-gear"></i> All settings</a>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
        <!-- /page header -->

        <!-- Content area -->
        <div class="content"> <!-- content Start -->

            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <?php if($admin == 1 || ($sub_admin == 1 && $is_country_write == 1)){?> 
                            <div class="heading-elements" style="float: right;">
                                 <a href="<?php echo $base_url; ?>view-<?php echo $module_name; ?>">
                                    <button type="button"
                                            class="btn bg-<?php echo $theme_color; ?> heading-btn">
                                        <i class="icon-file-plus position-left"></i>
                                        View <?php echo $module_full_name; ?>
                                    </button>
                                </a><br><br>
                            </div>
                            <?php }?>
                        </div>
                        
                        <div class="panel-body">
                            <div class="table-responsive">
                                <div class="card">
                                    <div class="card-header header-elements-inline">
                                        <h6 class="card-title">Left aligned buttons</h6>
                                        <div class="header-elements">
                                            <div class="list-icons">
                                                <a class="list-icons-item" data-action="collapse"></a>
                                                <a class="list-icons-item" data-action="reload"></a>
                                                <a class="list-icons-item" data-action="remove"></a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card-body">
                                        <form  id="<?php echo $module_name; ?>_form" method="POST" data-parsley-validate>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label><?php echo $module_full_name; ?> Name : <span
                                                                    class="text-danger">*</span></label>
                                                        <input type="text" class="form-control" id="category_name"
                                                               name="category_name"
                                                               placeholder="Enter <?php echo $module_full_name; ?> Name"
                                                               data-parsley-required="true">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                 <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label>Meta Title :</label>
                                                        <input type="text" class="form-control"id="meta_title" name="meta_title"
                                                               placeholder="Enter Meta Title ">                                                
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                 <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label>Meta Description :</label>
                                                        <textarea type="text" class="form-control"id="meta_description" name="meta_description" placeholder="Enter Meta Description">   </textarea>                                             
                                                    </div>
                                                </div>
                                            </div>
                                             <div class="row">
                                                 <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label>Meta Keywords :</label>
                                                        <input id="search_keywords" name="search_keywords[]" type="text"
                                                                   class="form-control tags" 
                                                                   placeholder="Enter Search Terms"/>
                                                        <span class="help-block">Note:Help someone to find your products - Use the 13 tags to optimize your listings.</span>
                                                        <div id="tag_error_div">
                                                        </div>                                             
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="checkbox-inline">
                                                    <input type="checkbox" name="status" class="styled" id="status" value="1" checked="checked">
                                                    Active
                                                </label>
                                            </div>

                                            <div class="d-flex justify-content-start align-items-center">
                                                <button type="reset" class="btn btn-light">Reset</button>
                                                <button type="submit" class="btn bg-blue ml-3">Submit <i class="icon-paperplane ml-2"></i></button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div id="modal_response_search_modules_div"></div>
            <?php include('common/footer.php'); ?>
        </div>
        <script src="<?php echo $base_url_js; ?>plugins/parsley/parsley.min.js"></script>
    <script type="text/javascript" src="<?php echo $base_url_js; ?>tag/jquery.tagsinput.js"></script>
    <script type="text/javascript" src="<?php echo $base_url_js_upload; ?>ajaxupload.3.5.js"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo $base_url_css_upload; ?>styles.css"/>
    <script type="text/javascript">
        $(document).ready(function ()
        {
            $('#<?php echo $module_name; ?>_form').parsley();
            $('#<?php echo $module_name; ?>_form').on('submit', function (e)
            {
                e.preventDefault();
                var f = $(this);
                f.parsley().validate();
                if (f.parsley().isValid())
                {
                    $.ajax(
                        {
                            url: "<?php echo $base_url; ?>add-<?php echo $module_name; ?>-submit.php",
                            type: "POST",
                            data: $('#<?php echo $module_name; ?>_form').serialize(),
                            dataType: 'json',
                            encode: true,
                            beforeSend: function ()
                            {
                                $.blockUI({message: '<i class="icon-spinner3 spinner position-left" style="font-size:21px"></i>'});
                            },
                            success: function (data)
                            {
                                $.unblockUI();
                                if (data.status == 'success')
                                {
                                    $.notifyBar({cssClass: "success", html: data.html_message});
                                    setTimeout(function ()
                                    {
                                        location.reload();
                                    }, 3000);
                                    //dataTable.ajax.reload();
                                }
                                else
                                {
                                    $.notifyBar({cssClass: "error", html: data.html_message});
                                    //dataTable.ajax.reload();
                                }
                            },
                            error: function (data, errorThrown)
                            {
                                $.unblockUI();
                                $.notifyBar({cssClass: "error", html: "Error occured!"});
                            }

                        });
                }
                else
                {
                    e.preventDefault();
                }
            });
        });

        $("#category_reset").click(function ()
        {
            $('#selected_category_id').select2("val", "0");
            $('#<?php echo $module_name; ?>_form').parsley().destroy();
        });


        
        function reset_photo()
        {
            $('#<?php echo $module_name;?>_form').trigger("reset");
            $('#<?php echo $module_name; ?>_form').parsley().destroy();
        }

        $('#search_keywords').tagsInput({
            width: 'auto', height: '44px'
        });
    </script>
    </body>
</html>

    <?php
}
else
{
    echo '<META HTTP-EQUIV="Refresh" Content="0; URL=' . $base_url . 'logout">';
}
?>
