<!DOCTYPE html>
<html>
<head>
    <base href="<?= URL; ?>">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>مدیریت مشتریان | <?= $data['getPublicInfo']['site']; ?></title>
    <!-- Favicon -->
    <?php require('app/views/include/favicon.php'); ?>

    <?php require('app/views/admin/include/publicCSS.php'); ?>
</head>
<body class="hold-transition skin-blue fixed sidebar-mini">

<div class="wrapper">

    <header class="main-header">
        <?php require('app/views/admin/include/header.php'); ?>
    </header>

    <aside class="main-sidebar direction">
        <?php require('app/views/admin/include/sidebar.php'); ?>
    </aside>

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                <small>لیست مشتریان</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="<?= URL; ?><?= ADMIN_PATH; ?>/dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="<?= URL; ?><?= ADMIN_PATH; ?>/users"><i class="fa fa-users"></i> Users</a></li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">

                <!-- left column -->
                <div class="col-md-4">
                    <!-- general form elements disabled -->
                    <div class="box box-warning">
                        <div class="box-header with-border">
                            <h3 class="box-title">ثبت مشتری جدید</h3>
                        </div>
                        <!-- /.box-header -->
                        <div data-step="1" data-intro="برای افزودن مشتری جدید می بایست اطلاعات خواسته شده را تکمیل نمایید." class="box-body">
                            <div class="box-body">
                                <div class='row'>
                                    <div class="col-lg-12">
                                        <div class="cu personal-pro ajaxform">

                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group" style="text-align:right">
                                                        <div class="input text">
                                                            <label for="name" class="">نام</label>
                                                            <input id="name" type="text" name="name" class="form-control" style="text-align: start;unicode-bidi: plaintext;border-radius: 3px;width: 100%;direction: rtl" required="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group" style="text-align:right">
                                                        <div class="input text">
                                                            <label for="family" class="">نام خانوادگی</label>
                                                            <input id="family" type="text" name="family" class="form-control" style="text-align: start;unicode-bidi: plaintext;border-radius: 3px;width: 100%;direction: rtl" required="">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group" style="text-align:right">
                                                        <div class="input text">
                                                            <label for="mobile" class="">شماره موبایل</label>
                                                            <input id="mobile" type="text" name="mobile" class="form-control" style="text-align: start;unicode-bidi: plaintext;border-radius: 3px;width: 100%;direction: ltr" required="">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group" style="text-align:right">
                                                        <div class="input text">
                                                            <label for="phone" class="">شماره ثابت</label>
                                                            <input id="phone" type="text" name="phone" class="form-control" style="text-align: start;unicode-bidi: plaintext;border-radius: 3px;width: 100%;direction: ltr" required="">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-12">
                                                    <div class="form-group" style="text-align:right">
                                                        <div class="input text">
                                                            <label for="email" class="">ایمیل</label>
                                                            <input id="email" type="text" name="email" class="form-control" style="text-align: start;unicode-bidi: plaintext;border-radius: 3px;width: 100%;direction: ltr" required="">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class='col-md-12'>
                                                    <div class="form-group" style="text-align:right">
                                                        <label for="birthday">تاریخ تولد</label>
                                                        <input style="border-radius: 0 3px 3px 0;text-align:left" type="text" class="form-control DatePickerPersian" id="birthday" name="birthday">
                                                    </div>
                                                </div>

                                                <div class='col-md-6'>
                                                    <div class="form-group" style="text-align:right">
                                                        <label for="provinceId">: استان</label>
                                                        <select id="provinceId" name="provinceId" class="form-control select2Class" style="border-radius: 3px;width: 100%;direction: rtl" required>
                                                            <option value="" disabled="" selected="" hidden=""></option>
                                                            <?php foreach ($data['provinces'] as $province) { ?>
                                                                <option data-id="<?= $province['pro_id']; ?>" value="<?= $province['pro_id']; ?>"><?= $province['pro_name']; ?></option>
                                                            <?php } ?>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class='col-md-6'>
                                                    <div class="form-group" style="text-align:right">
                                                        <label for="cityId">: شهر</label>
                                                        <select id="cityId" name="cityId" class="form-control select2Class"
                                                                style="border-radius: 3px;width: 100%;direction: rtl" required>
                                                            <option value="" disabled="" selected="" hidden=""></option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class='col-md-12'>
                                                    <div class="form-group" style="text-align:right">
                                                        <label align="right" for="no_card">شماره کارت</label>
                                                        <div class="input-group">
                                                            <input style="border-radius: 0 3px 3px 0;text-align:left;direction: ltr;" type="tel" maxlength="19" onkeyup="setBankLogo();" class="form-control" id="no_card" name="no_card">
                                                            <span style="border-radius: 3px 0 0 3px;padding: 6px;" id="no_card_img" class="input-group-addon">
                                                                <img id="bankLogo" style="width: 20px" src="public/images/onlinePayment3.png">
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class='col-md-12'>
                                                    <div class="form-group" style="text-align:right">
                                                        <label style="width: 100%" align="right" for="cover">تصویر پروفایل</label>

                                                        <div class="file-upload">
                                                            <div class="image-upload-wrap image-upload-wrap-add">
                                                                <input class="file-upload-input file-upload-input-add" type="file" id="cover" name="cover" onchange="readURL(this, 'add');" accept="image/*">
                                                                <div class="drag-text">
                                                                    <h5 class=" text-center">عکس مورد نظر را انتخاب کنید</h5>
                                                                </div>
                                                            </div>
                                                            <div class="file-upload-content file-upload-content-add">
                                                                <img class="file-upload-image file-upload-image-add" alt="your image">
                                                                <div class="image-title-wrap">
                                                                    <button type="button" onclick="removeUpload('add')" class="remove-image">حذف</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div data-step="2" data-intro="بعد از تکمیل فرم با استفاده از این دکمه می توانید اطلاعات را ثبت نمایید.<br/>فقط توجه داشته باشید که برای ثبت موفقیت آمیز اطلاعات حتما باید اینترنت شما وصل باشد." class="box-footer">
                                                <input id="btn-submit-mobile" class="btn btn-dropbox" value="ثبت" type="submit">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.box-body -->
                            </div>
                            <!-- /.box-body -->
                        </div>

                    </div>
                    <!--/.col (left) -->
                </div>

                <div class="col-md-8">
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">مدیریت مشتریان</h3>
                        </div>
                        <!-- /.box-header -->
                        <div data-step="1" data-intro="در این بخش لیست کامل مشتریان به شما نمایش داده می شود که به نکات زیر توجه نمایید:<br/><br/>1- برای گرفتن خروجی می توانید از دکمه های خروجی اکسل و یا خروجی csv بسته به نیاز استفاده نمایید.<br/><br/>2- برای پرینت اطلاعات می توانید از دکمه پرینت استفاده نمایید.<br/><br/>3- در صورتی که در هنگام گرفتن خروجی یا پرینت خواستید ستونی نمایش داده نشود می توانید از بخش فیلتر ستون ها، ستون مورد نظر خود را غیرفعال نمایید تا در خروجی مورد نظر نمایش داده نشود<br/><br/>4- به علت افزایش سرعت لود اطلاعات، اطلاعات به صورت محدود از دیتابیس خوانده می شود در صورتی که می خواهید لیست کامل اطلاعات را خروجی بگیرید کافیست از قسمت نمایش در پایین جدول گزینه همه را انتخاب و سپس اقدام به گرفتن خروجی نمایید.<br/><br/>5- برای جستجو و فیلتر کردن اطلاعات می توانید از فیلدهای موجود در زیر عنوان هر ستون استفاده نمایید و در صورت تمایل می توانید به صورت همزمان چند ستون را فیلتر نمایید تا اطلاعات مد نظر شما نمایش داده شود." class="box-body">
                            <div class="table-responsive direction">
                                <table id="example1" class="table table-bordered table-striped" style="width: 100%">
                                    <thead>
                                    <tr>
                                        <th class="priority-1" style="text-align:center;width: 50px">ردیف</th>
                                        <th class="priority-1" style="text-align:center">نام و نام خانوادگی</th>
                                        <th class="priority-1" style="text-align:center">نام نمایشی</th>
                                        <th class="priority-1" style="text-align:center">شماره موبایل</th>
                                        <th class="priority-1" style="text-align:center">تاریخ ثبت نام</th>
                                        <th class="priority-1" style="text-align:center;width: 100px">عملیات</th>
                                    </tr>
                                    </thead>
                                    <tfoot>
                                    <tr>
                                        <th class="priority-1" style="text-align:center;width: 50px">ردیف</th>
                                        <th class="priority-1" style="text-align:center">نام و نام خانوادگی</th>
                                        <th class="priority-1" style="text-align:center">نام نمایشی</th>
                                        <th class="priority-1" style="text-align:center">شماره موبایل</th>
                                        <th class="priority-1" style="text-align:center">تاریخ ثبت نام</th>
                                        <th class="priority-1" style="text-align:center;width: 100px">عملیات</th>
                                    </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </section>
        <!-- /.content -->
    </div>

    <div dir="rtl" class="modal fade" id="del-Modal" role="dialog">
        <div class="modal-dialog" style="width: 300px;">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header" style="color: #fff;background: #2484c6;">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title">حذف مشتری</h4>
                </div>
                <div class="modal-body" style="padding: 0 15px;text-align: right;text-align: right;">
                    <div id="form-regular-delete" class="login-fold" style="display: inline;block">
                        <p class="email-wrap">
                            <label style="font-size: .9em;color: #777;display: inline-block;margin-top: 10px;font-weight: 700;">آیا
                                از حذف این مشتری اطمینان دارید؟</label>
                            <input id="del-val" type="hidden" value="#"/>
                        </p>
                        <div class="row" style="margin-right: 0;margin-left: 15px;">
                            <div class="sign-up-inside-login">
                                <button id="delete-submit" class="btn btn-danger">حذف</button>
                                <button type="button" class="btn btn-default" data-dismiss="modal">انصراف</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer"
                     style="margin-top: 10px !important;font-size: .8em;background: #f8f8f8;padding: 15px;text-align: right;border-bottom: 1px solid #e5e5e5;">
                    <span>توجه کنید در صورت حذف تمامی اطلاعات مربوط به این مشتری نیز حذف میگردد و امکان بازیابی نیز وجود ندارد.</span>
                </div>
            </div>
        </div>
    </div>

    <!-- /.content-wrapper -->
    <footer class="main-footer">
        <?php require('app/views/admin/include/footer.php'); ?>
    </footer>
    <?php require('app/views/admin/include/skinSidebar.php'); ?>
</div>
<?php require('app/views/admin/include/publicJS.php'); ?>

<script>
    $('.image-upload-wrap-add').bind('dragover', function() {
        $('.image-upload-wrap-add').addClass('image-dropping');
    });

    $('.image-upload-wrap-add').bind('dragleave', function() {
        $('.image-upload-wrap-add').removeClass('image-dropping');
    });
</script>

<script>
    $(document).ready(function() {
        $("#mobile,#phone,#no_card").inputFilter(function(value) {
            return /^[0-9,-]*$/.test(value);    // Allow digits only, using a RegExp
        });

        DP_Persian();
    });
</script>

<script type="text/javascript">
    $(document).ready(function () {
        setBankLogo();
    });
</script>

<script>
    function getCity(th, id, editBtn='') {
        var formData = new FormData();
        formData.append("states", $(th).find(':selected').attr('data-id'));
        $.ajax({
            url: "<?= ADMIN_PATH; ?>/getCityByProvince",
            data: formData,
            type: "POST",
            dataType: "json",
            processData: false,
            contentType: false,
            success: function (data) {
                $('#'+id).html('');
                $('#'+id).val(null).trigger("change");

                $.each(data, function (key, value) {
                    $.each(value, function (key, item) {
                        $('#'+id).append($('<option>', {
                            value: item.id,
                            text: item.name,
                            "data-name": item.name
                        }));
                        $("#"+id).select2({
                            placeholder: "انتخاب نمایید...",
                            allowClear: true
                        });
                    });
                });

                if(editBtn != ''){
                    $("#cityIdEdit").val(editBtn).change();
                }
            },
        });
    }

    $(document).on('change', '#provinceId', function (e) {
        getCity(this, "cityId");
    });
</script>

<script>
    $("#btn-submit-mobile").on('click', function () {
        var name = document.getElementById("name").value;
        var family = document.getElementById("family").value;
        var mobile = document.getElementById("mobile").value;
        var phone = document.getElementById("phone").value;
        var email = document.getElementById("email").value;
        var no_card = document.getElementById("no_card").value;
        var provinceId = document.getElementById("provinceId").value;
        var cityId = document.getElementById("cityId").value;
        var birthday = toEnglishNumber(document.getElementById("birthday").value);
        var coverBrand = document.getElementById("cover");
        var cover = coverBrand.files[0];

        if (name == "") {
            $.wnoty({type: 'warning', message: 'نام مشتری را وارد کنید.'});
        } else if (family == "") {
            $.wnoty({type: 'warning', message: 'نام خانوادگی مشتری را وارد کنید.'});
        } else if (mobile == "") {
            $.wnoty({type: 'warning', message: 'شماره موبایل را وارد کنید.'});
        } else if (provinceId == "") {
            $.wnoty({type: 'warning', message: 'استان مورد نظر را انتخاب کنید.'});
        } else if (cityId == "") {
            $.wnoty({type: 'warning', message: 'شهر مورد نظر را انتخاب کنید.'});
        } else if (no_card!="" && !checkCartDigit(no_card.replace(/-/g, ""))) {
            $.wnoty({type: 'warning', message: 'شماره کارت صحیح نمی باشد.'});
        } else {
            $("#btn-submit-mobile").attr("disabled", "disabled");
            document.getElementById("btn-submit-mobile").value =("در حال ثبت...");

            var formData = new FormData();
            formData.append("name", name);
            formData.append("family", family);
            formData.append("mobile", mobile);
            formData.append("phone", phone);
            formData.append("provinceId", provinceId);
            formData.append("cityId", cityId);
            formData.append("email", email);
            formData.append("no_card", no_card);
            formData.append("birthday", birthday);
            formData.append("cover", cover);

            if (navigator.onLine) {
                $.ajax({
                    url: "<?= ADMIN_PATH; ?>/addUser",
                    type: "POST",
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function (data) {
                        data = JSON.parse(data);
                        $.wnoty({type: data.noty_type, message: data.msg});

                        if (data.status == "ok") {
                            location.reload();
                        }
                    }
                });
            } else {
                $.wnoty({type: 'error', message: 'وضعیت شما آفلاین می باشد و امکان افزودن وجود ندارد.'});
            }

            $("#btn-submit-mobile").removeAttr("disabled");
            document.getElementById("btn-submit-mobile").value =("ثبت");
        }
    });
</script>

<script>
    $(function () {
        $('#example1 tfoot th').each(function () {
            var title = $(this).text();
            if (title == "ردیف") {
                $(this).html('-');
            } else if (title == "عملیات") {
                $(this).html('-');
            } else {
                $(this).html('<input style="text-align: start;unicode-bidi: plaintext;" type="text" placeholder="جستجو ' + title + '" />');
            }
        });

        $.fn.dataTable.pipeline = function (opts) {
            var conf = $.extend({
                pages: 5,     // number of pages to cache
                url: '',      // script url
                data: null,   // function or object with parameters to send to the server matching how `ajax.data` works in DataTables
                method: 'GET' // Ajax HTTP method
            }, opts);

            // Private variables for storing the cache
            var cacheLower = -1;
            var cacheUpper = null;
            var cacheLastRequest = null;
            var cacheLastJson = null;

            return function (request, drawCallback, settings) {
                var ajax = false;
                var requestStart = request.start;
                var drawStart = request.start;
                var requestLength = request.length;
                var requestEnd = requestStart + requestLength;

                if (settings.clearCache) {
                    ajax = true;
                    settings.clearCache = false;
                } else if (cacheLower < 0 || requestStart < cacheLower || requestEnd > cacheUpper) {
                    ajax = true;
                } else if (JSON.stringify(request.order) !== JSON.stringify(cacheLastRequest.order) ||
                    JSON.stringify(request.columns) !== JSON.stringify(cacheLastRequest.columns) ||
                    JSON.stringify(request.search) !== JSON.stringify(cacheLastRequest.search)
                ) {
                    ajax = true;
                }

                cacheLastRequest = $.extend(true, {}, request);

                if (ajax) {
                    if (requestStart < cacheLower) {
                        requestStart = requestStart - (requestLength * (conf.pages - 1));

                        if (requestStart < 0) {
                            requestStart = 0;
                        }
                    }

                    cacheLower = requestStart;
                    cacheUpper = requestStart + (requestLength * conf.pages);

                    request.start = requestStart;
                    request.length = requestLength * conf.pages;

                    if (typeof conf.data === 'function') {
                        var d = conf.data(request);
                        if (d) {
                            $.extend(request, d);
                        }
                    } else if ($.isPlainObject(conf.data)) {
                        $.extend(request, conf.data);
                    }

                    settings.jqXHR = $.ajax({
                        "type": conf.method,
                        "url": conf.url,
                        "data": request,
                        "dataType": "json",
                        "cache": true,
                        "success": function (json) {
                            cacheLastJson = $.extend(true, {}, json);

                            if (cacheLower != drawStart) {
                                json.data.splice(0, drawStart - cacheLower);
                            }
                            if (requestLength >= -1) {
                                json.data.splice(requestLength, json.data.length);
                            }

                            drawCallback(json);
                        }
                    });
                } else {
                    json = $.extend(true, {}, cacheLastJson);
                    json.draw = request.draw;
                    json.data.splice(0, requestStart - cacheLower);
                    json.data.splice(requestLength, json.data.length);

                    drawCallback(json);
                }
            }
        };

        $.fn.dataTable.Api.register('clearPipeline()', function () {
            return this.iterator('table', function (settings) {
                settings.clearCache = true;
            });
        });

        var table = $('#example1').DataTable({
            "paging": true,
            "lengthChange": true,
            "searching": true,
            "ordering": true,
            "info": true,
            "rowReorder": true,
            "stateSave": true,
            "stateLoadParams": function(settings, data) {
                const  select_array = [0, 1, 2, 3, 4, 5];
                for (i = 0; i < data.columns["length"]; i++) {
                    var col_search_val = data.columns[i].search.search;
                    if (col_search_val != "") {
                        if (select_array[i] !== "") {
                            $("input", $("tfoot th")[i]).val(col_search_val);
                        }
                    }
                }
            },
            "pageLength": 10,
            "autoWidth": true,
            "processing": true,
            "fixedHeader": true,
            "serverSide": true,
            "lengthMenu": [[10, 25, 50, 100, 99999999], [10, 25, 50, 100, "همه"]],
            "dom": '<"top"Bf>rt<"bottom"lip><"clear">',
            "buttons": [
                {
                    extend: 'collection',
                    text: '<span class="fa fa-download"></span> خروجی اطلاعات',
                    buttons: [
                        {
                            extend: 'print',
                            text: '<span class="fa fa-print"></span> پرینت',
                            exportOptions: {
                                columns: ':visible',
                                modifier: {
                                    search: 'applied',
                                    order: 'applied'
                                }
                            }
                        },
                        {
                            extend: 'excel',
                            text: '<span class="fa fa-file-excel-o"></span> خروجی اکسل',
                            exportOptions: {
                                columns: ':visible',
                                modifier: {
                                    search: 'applied',
                                    order: 'applied'
                                }
                            }
                        },
                        {
                            extend: 'csv',
                            text: '<span class="fa fa-file-excel-o"></span> خروجی csv',
                            "charset": "utf-8",
                            exportOptions: {
                                columns: ':visible',
                                modifier: {
                                    search: 'applied',
                                    order: 'applied'
                                }
                            }
                        }
                    ]
                },
                {
                    extend: 'colvis',
                    // collectionLayout: 'two-column',
                    postfixButtons: [ 'colvisRestore' ],
                    text: '<span class="fa fa-filter"></span> فیلتر ستون ها'
                },
                {
                    text: 'حذف موارد انتخابی',
                    action: function ( e, dt, node, config ) {
                        deleteSelected(e);
                    }
                }
            ],
            "columnDefs": [
                {orderable: false, targets: [5]},
                {className: "priority-1", "targets": [1, 0, 2, 3, 4, 5]},
            ],
            "ajax": $.fn.dataTable.pipeline({
                url: '<?= ADMIN_PATH; ?>/getUsersAjax',
                pages: 5
            })
        });

        table.on('draw.dt', function () {
            var info = table.page.info();
            table.column(0, {search: 'applied', order: 'applied', page: 'applied'}).nodes().each(function (cell, i) {
                cell.innerHTML = i + 1 + info.start;
            });
        });

        table.columns().every(function () {
            var column = this;
            $('input', this.footer()).on('keyup change', function () {
                if (column.search() !== this.value) {
                    column.search(this.value).draw();
                }
            });
        });

        $('#example1 tfoot tr').appendTo('#example1 thead');

    });
</script>

<script>
    $(document).on("click", "[id*=btn-del-style-]", function () {
        document.getElementById("del-val").value = $(this).data('id');
    });

    $(document).on("click", "#delete-submit", function () {
        $('#del-Modal').modal('hide');
        var id = document.getElementById('del-val').value;
        if (navigator.onLine) {
            var formData = new FormData();
            formData.append("id", id);
            $.ajax({
                url: "<?= ADMIN_PATH; ?>/delUser",
                data: formData,
                type: "POST",
                processData: false,
                contentType: false,
                success: function (data) {
                    data = JSON.parse(data);
                    $.wnoty({type: data.noty_type, message: data.msg});

                    if (data.status == "ok") {
                        $("#btn-del-style-"+id).parent().parent().remove();
                    }
                },
            });
        } else {
            $.wnoty({type: 'error', message: 'وضعیت شما آفلاین می باشد و امکان حذف وجود ندارد.'});
        }
    });
</script>

</body>
</html>