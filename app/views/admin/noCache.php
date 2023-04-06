<!DOCTYPE html>
<html>
<head>
    <base href="<?= URL; ?>">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>وضعیت آفلاین | <?= $data['getPublicInfo']['site']; ?></title>
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
                <small>وضعیت شما آفلاین است</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="<?= URL; ?><?= ADMIN_PATH; ?>/dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Information not available</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- general form elements disabled -->
                    <div class="box box-warning">
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="box-body">
                                <div class='row'>
                                    <div class='col-md-3'></div>
                                    <div class='col-md-6'>
                                        <div class="form-group" style="text-align:center">
                                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 796.647 387.71" enable-background="new 0 0 796.647 387.71" xml:space="preserve"><rect id="Rectangle_2033" x="346.077" y="224.668" fill="#808080" stroke="#4D4D4D" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" width="113.779" height="9.151"/><rect id="Rectangle_2034" x="346.077" y="269.105" fill="#808080" stroke="#4D4D4D" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" width="113.779" height="9.151"/><path id="Path_4088" fill="#E6E6E6" d="M47.363,191.295h51.883c0.429,0.026,0.798-0.3,0.824-0.729c0.002-0.032,0.002-0.063,0-0.095 v-17.459c0.026-0.429-0.3-0.798-0.729-0.824c-0.032-0.002-0.063-0.002-0.095,0H47.363c-0.429-0.026-0.798,0.3-0.824,0.729 c-0.002,0.032-0.002,0.063,0,0.095v17.459c-0.026,0.429,0.3,0.798,0.729,0.824C47.3,191.297,47.331,191.297,47.363,191.295z"/><path id="Path_4089" fill="#E6E6E6" d="M100.904,209.741h51.883c0.429,0.026,0.798-0.3,0.824-0.729c0.002-0.032,0.002-0.063,0-0.095 v-17.458c0.026-0.429-0.3-0.798-0.729-0.824c-0.032-0.002-0.063-0.002-0.095,0h-51.883c-0.429-0.026-0.798,0.3-0.824,0.729 c-0.002,0.032-0.002,0.063,0,0.095v17.459c-0.026,0.429,0.301,0.797,0.73,0.823C100.841,209.743,100.873,209.743,100.904,209.741z"/><path id="Path_4090" fill="#E6E6E6" d="M624.847,181.085h51.883c0.429,0.026,0.798-0.3,0.824-0.729c0.002-0.032,0.002-0.063,0-0.095 v-17.458c0.026-0.429-0.3-0.798-0.729-0.824c-0.032-0.002-0.063-0.002-0.095,0h-51.883c-0.429-0.026-0.797,0.301-0.823,0.73 c-0.002,0.031-0.002,0.063,0,0.094v17.459C624.025,180.716,624.393,181.084,624.847,181.085z"/><path id="Path_4091" fill="#E6E6E6" d="M678.379,200.027h51.883c0.429,0.026,0.798-0.3,0.824-0.729c0.002-0.032,0.002-0.063,0-0.095 v-17.458c0.026-0.429-0.3-0.798-0.729-0.824c-0.032-0.002-0.063-0.002-0.095,0h-51.883c-0.429-0.026-0.798,0.3-0.824,0.729 c-0.002,0.032-0.002,0.063,0,0.095v17.459C677.556,199.658,677.925,200.026,678.379,200.027z"/><path id="Path_4092" fill="#FFFFFF" stroke="#4D4D4D" stroke-width="3" stroke-miterlimit="10" d="M360.225,338.189l8.202,5.87 c0.228,0.162,0.491,0.267,0.768,0.306l7.914,0.972c0.459,0.055,0.877-0.271,0.935-0.73l2.046-16.665 c0.055-0.459-0.271-0.877-0.73-0.935l-7.916-0.972c-0.278-0.03-0.559,0.008-0.82,0.111l-9.378,3.712l-1.023,8.331L360.225,338.189z"/><rect id="Rectangle_2069" x="333.838" y="308.406" transform="matrix(0.1219 -0.9925 0.9925 0.1219 -32.1851 626.3522)" fill="#FFFFFF" stroke="#4D4D4D" stroke-width="3" stroke-miterlimit="10" width="8.101" height="45.919"/><path id="Path_4093" fill="#B4B4B4" stroke="#4D4D4D" stroke-width="3" stroke-miterlimit="10" d="M312.765,314.854L312.765,314.854 c2.063,0.244,3.538,2.115,3.293,4.178c-0.001,0.011-0.003,0.021-0.004,0.032l-2.148,17.497c-0.244,2.063-2.115,3.538-4.178,3.293 c-0.011-0.001-0.021-0.003-0.032-0.004l0,0c-2.063-0.244-3.538-2.115-3.293-4.178c0.001-0.011,0.003-0.021,0.004-0.032l2.148-17.498 c0.245-2.063,2.116-3.537,4.179-3.292C312.745,314.851,312.755,314.853,312.765,314.854z"/><path id="Path_4094" fill="#FFFFFF" stroke="#4D4D4D" stroke-width="3" stroke-miterlimit="10" d="M273.285,335.38l22.247,2.732 c0.215,0.025,0.432,0.009,0.641-0.048l10.244-2.847l2.046-16.665l-9.503-5.268c-0.189-0.106-0.396-0.174-0.61-0.202l-22.455-2.757 c-6.672-0.814-12.743,3.93-13.565,10.601l-0.051,0.417C261.456,328.254,266.377,334.53,273.285,335.38z"/><path id="Path_4095" fill="#F9A01B" stroke="#4D4D4D" stroke-width="3" stroke-miterlimit="10" d="M273.035,335.349l3.069-24.996 l-0.167-0.02c-6.671-0.814-12.741,3.928-13.565,10.598l-0.051,0.417C261.507,328.147,266.259,334.357,273.035,335.349z"/><line id="Line_93" fill="none" stroke="#4D4D4D" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="292.518" y1="330.975" x2="278.353" y2="329.235"/><line id="Line_94" fill="none" stroke="#4D4D4D" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="293.234" y1="325.142" x2="279.069" y2="323.403"/><line id="Line_95" fill="none" stroke="#4D4D4D" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="294.001" y1="318.893" x2="279.836" y2="317.154"/><path id="Path_4096" fill="#322E63" d="M508.641,343.283"/><path id="Path_4097" fill="none" stroke="#4D4D4D" stroke-width="3" stroke-linecap="round" stroke-miterlimit="10" d=" M581.207,343.283c-0.031,5.693-4.638,10.3-10.331,10.331H538.29"/><path id="Path_4098" fill="#4D4D4D" d="M520.876,356.244v3.621h-10.381c-0.99-0.002-1.79-0.806-1.788-1.796c0-0.005,0-0.01,0-0.015 l0,0c-0.01-0.99,0.783-1.8,1.773-1.811c0.005,0,0.01,0,0.015,0L520.876,356.244z"/><path id="Path_4099" fill="#4D4D4D" d="M520.876,345.933v3.621h-10.381c-0.99-0.002-1.79-0.806-1.788-1.796c0-0.005,0-0.01,0-0.015 l0,0c-0.01-0.99,0.783-1.8,1.773-1.811c0.005,0,0.01,0,0.015,0L520.876,345.933z"/><path id="Path_4101" fill="#F9A01B" d="M518.426,364.84v-23.093c0-0.3,0.3-0.5,0.646-0.5h5.613c0.348,0,0.646,0.2,0.646,0.5v23.1 c0,0.3-0.3,0.5-0.646,0.5h-5.559C518.726,365.336,518.426,365.088,518.426,364.84z"/><path id="Path_4102" fill="#36C8E3" stroke="#322E63" stroke-width="7" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d=" M531.538,342.836"/><path id="Path_4105" fill="#FFFFFF" stroke="#4D4D4D" stroke-width="3" stroke-miterlimit="10" d="M542.184,352.824v0.2 c0,5.734-5.911,10.462-11.176,10.462h-5.96v-21.124h5.96C536.273,342.362,542.184,347.04,542.184,352.824z"/><path id="Path_4106" fill="none" stroke="#4D4D4D" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d=" M517.896,341.202v23.388c0,0.3,0.3,0.5,0.646,0.5h5.613c0.348,0,0.646-0.2,0.646-0.5v-23.388c0-0.3-0.3-0.5-0.646-0.5h-5.559 C518.196,340.702,517.896,340.953,517.896,341.202z"/><path id="Path_4120" fill="none" stroke="#4D4D4D" stroke-width="3" stroke-linecap="round" stroke-miterlimit="10" d=" M581.03,343.513c0.031-5.693,4.638-10.3,10.331-10.331h32.583"/><line id="Line_39" fill="none" stroke="#4D4D4D" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="80.04" y1="295.329" x2="720.214" y2="295.329"/><line id="Line_40" fill="none" stroke="#4D4D4D" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="795.147" y1="295.329" x2="730.315" y2="295.329"/><line id="Line_41" fill="none" stroke="#4D4D4D" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="66.435" y1="295.329" x2="1.5" y2="295.329"/><rect id="Rectangle_2070" x="346.077" y="180.668" fill="#808080" stroke="#4D4D4D" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" width="113.779" height="9.151"/><path id="Path_3989" fill="#B4B4B4" stroke="#4E4E4E" stroke-width="3" stroke-miterlimit="10" d="M471.797,225.162H335.251 c-1.846-0.005-3.341-1.499-3.348-3.345v-28.852c0.005-1.847,1.501-3.343,3.348-3.348h136.546c1.847,0.005,3.342,1.501,3.348,3.348 v28.852C475.138,223.663,473.643,225.156,471.797,225.162z"/><ellipse id="Ellipse_915" opacity="0.5" fill="#E6E6E6" enable-background="new    " cx="359.581" cy="202.898" rx="2.567" ry="2.567"/><ellipse id="Ellipse_916" opacity="0.5" fill="#E6E6E6" enable-background="new    " cx="351.434" cy="202.898" rx="2.567" ry="2.567"/><ellipse id="Ellipse_917" opacity="0.5" fill="#E6E6E6" enable-background="new    " cx="343.286" cy="202.898" rx="2.567" ry="2.567"/><path id="Path_3978" fill="#B4B4B4" stroke="#4D4D4D" stroke-width="3" d="M462.226,199.452c2.079,0,3.765,1.686,3.765,3.765 s-1.686,3.765-3.765,3.765c-2.079,0-3.765-1.686-3.765-3.765c0,0,0,0,0,0C458.461,201.138,460.147,199.452,462.226,199.452z"/><line id="Line_33" fill="none" stroke="#4D4D4D" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="451.262" y1="202.898" x2="426.877" y2="202.898"/><path id="Path_3991" fill="none" stroke="#4E4E4E" stroke-width="3" stroke-miterlimit="10" d="M471.797,225.162H335.251 c-1.846-0.005-3.341-1.499-3.348-3.345v-28.852c0.005-1.847,1.501-3.343,3.348-3.348h136.546c1.847,0.005,3.342,1.501,3.348,3.348 v28.852C475.138,223.663,473.643,225.156,471.797,225.162z"/><path id="Path_3992" fill="#E6E6E6" stroke="#4D4D4D" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d=" M414.265,217.521h-66.4c-1.237,0.008-2.236,1.013-2.237,2.25v4.895h70.257v-5.457c0.044-0.887-0.639-1.642-1.526-1.686 C414.328,217.521,414.296,217.521,414.265,217.521z"/><path id="Path_3993" fill="#B4B4B4" stroke="#4E4E4E" stroke-width="3" stroke-miterlimit="10" d="M471.797,269.6H335.251 c-1.846-0.005-3.341-1.499-3.348-3.345v-28.852c0.005-1.847,1.501-3.343,3.348-3.348h136.546c1.847,0.005,3.342,1.501,3.348,3.348 v28.852C475.138,268.101,473.643,269.595,471.797,269.6z"/><ellipse id="Ellipse_918" opacity="0.4" fill="#E6E6E6" enable-background="new    " cx="359.581" cy="247.335" rx="2.567" ry="2.567"/><ellipse id="Ellipse_919" opacity="0.4" fill="#E6E6E6" enable-background="new    " cx="351.434" cy="247.335" rx="2.567" ry="2.567"/><ellipse id="Ellipse_920" opacity="0.4" fill="#E6E6E6" enable-background="new    " cx="343.286" cy="247.335" rx="2.567" ry="2.567"/><path id="Path_3997" fill="#B4B4B4" stroke="#4D4D4D" stroke-width="3" d="M462.226,243.889c2.079,0,3.765,1.686,3.765,3.765 s-1.686,3.765-3.765,3.765c-2.079,0-3.765-1.686-3.765-3.765c0,0,0,0,0,0C458.461,245.575,460.147,243.889,462.226,243.889z"/><line id="Line_34" fill="none" stroke="#4D4D4D" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="451.262" y1="247.335" x2="426.877" y2="247.335"/><path id="Path_3998" fill="none" stroke="#4E4E4E" stroke-width="3" stroke-miterlimit="10" d="M471.797,269.6H335.251 c-1.846-0.005-3.341-1.499-3.348-3.345v-28.852c0.005-1.847,1.501-3.343,3.348-3.348h136.546c1.847,0.005,3.342,1.501,3.348,3.348 v28.852C475.138,268.101,473.643,269.595,471.797,269.6z"/><path id="Path_3999" fill="#FFFFFF" stroke="#4D4D4D" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d=" M414.265,261.958h-66.4c-1.237,0.008-2.236,1.013-2.237,2.25v4.895h70.257v-5.457c0.044-0.887-0.639-1.642-1.526-1.686 C414.328,261.958,414.296,261.958,414.265,261.958z"/><path id="Path_4000" fill="#B4B4B4" stroke="#4E4E4E" stroke-width="3" stroke-miterlimit="10" d="M472.218,313.409H335.672 c-1.846-0.005-3.341-1.499-3.348-3.345v-28.852c0.005-1.847,1.501-3.343,3.348-3.348h136.546c1.847,0.005,3.342,1.501,3.348,3.348 v28.852C475.559,311.91,474.064,313.404,472.218,313.409z"/><ellipse id="Ellipse_921" opacity="0.4" fill="#E6E6E6" enable-background="new    " cx="359.581" cy="291.145" rx="2.567" ry="2.567"/><ellipse id="Ellipse_922" opacity="0.4" fill="#E6E6E6" enable-background="new    " cx="351.434" cy="291.145" rx="2.567" ry="2.567"/><ellipse id="Ellipse_923" opacity="0.4" fill="#E6E6E6" enable-background="new    " cx="343.286" cy="291.145" rx="2.567" ry="2.567"/><path id="Path_4004" fill="#B4B4B4" stroke="#4D4D4D" stroke-width="3" d="M462.226,287.699c2.079,0,3.765,1.686,3.765,3.765 s-1.686,3.765-3.765,3.765c-2.079,0-3.765-1.686-3.765-3.765c0,0,0,0,0,0C458.461,289.385,460.147,287.699,462.226,287.699z"/><line id="Line_35" fill="none" stroke="#4D4D4D" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="451.262" y1="291.145" x2="426.877" y2="291.145"/><path id="Path_4005" fill="none" stroke="#4E4E4E" stroke-width="3" stroke-miterlimit="10" d="M471.797,313.409H335.251 c-1.846-0.005-3.341-1.499-3.348-3.345v-28.852c0.005-1.847,1.501-3.343,3.348-3.348h136.546c1.847,0.005,3.342,1.501,3.348,3.348 v28.852C475.138,311.91,473.643,313.404,471.797,313.409z"/><path id="Path_4006" fill="#E6E6E6" stroke="#4D4D4D" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d=" M414.265,305.768h-66.4c-1.237,0.008-2.236,1.013-2.237,2.25v4.895h70.257v-5.457c0.044-0.887-0.639-1.642-1.526-1.686 C414.328,305.768,414.296,305.768,414.265,305.768z"/><path id="Path_3989-2" fill="#B4B4B4" stroke="#4E4E4E" stroke-width="3" stroke-miterlimit="10" d="M471.797,181.162H335.251 c-1.846-0.005-3.341-1.499-3.348-3.345v-28.852c0.005-1.847,1.501-3.343,3.348-3.348h136.546c1.847,0.005,3.342,1.501,3.348,3.348 v28.852C475.138,179.663,473.643,181.156,471.797,181.162z"/><ellipse id="Ellipse_915-2" opacity="0.5" fill="#E6E6E6" enable-background="new    " cx="359.581" cy="158.898" rx="2.567" ry="2.567"/><ellipse id="Ellipse_916-2" opacity="0.5" fill="#E6E6E6" enable-background="new    " cx="351.434" cy="158.898" rx="2.567" ry="2.567"/><ellipse id="Ellipse_917-2" opacity="0.5" fill="#E6E6E6" enable-background="new    " cx="343.286" cy="158.898" rx="2.567" ry="2.567"/><path id="Path_3978-2" fill="#B4B4B4" stroke="#4D4D4D" stroke-width="3" d="M462.226,155.452c2.079,0,3.765,1.686,3.765,3.765 s-1.686,3.765-3.765,3.765c-2.079,0-3.765-1.686-3.765-3.765c0,0,0,0,0,0C458.461,157.138,460.147,155.452,462.226,155.452z"/><line id="Line_33-2" fill="none" stroke="#4D4D4D" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="451.262" y1="158.898" x2="426.877" y2="158.898"/><path id="Path_3991-2" fill="none" stroke="#4E4E4E" stroke-width="3" stroke-miterlimit="10" d="M471.797,181.162H335.251 c-1.846-0.005-3.341-1.499-3.348-3.345v-28.852c0.005-1.847,1.501-3.343,3.348-3.348h136.546c1.847,0.005,3.342,1.501,3.348,3.348 v28.852C475.138,179.663,473.643,181.156,471.797,181.162z"/><path id="Path_3992-2" fill="#E6E6E6" stroke="#4D4D4D" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d=" M414.265,173.521h-66.4c-1.237,0.008-2.236,1.013-2.237,2.25v4.895h70.257v-5.457c0.044-0.887-0.639-1.642-1.526-1.686 C414.328,173.521,414.296,173.521,414.265,173.521z"/><linearGradient id="Path_4069_1_" gradientUnits="userSpaceOnUse" x1="91.431" y1="588.7749" x2="91.431" y2="589.7749" gradientTransform="matrix(86.06 0 0 -164.07 -7465.5239 96805.9609)"><stop offset="0" style="stop-color:#FFFFFF;stop-opacity:0"/><stop offset="1" style="stop-color:#FFFFFF"/></linearGradient><path class="hide-ie" id="Path_4069" fill="url(#Path_4069_1_)" d="M446.056,205.653h-86.06l20.836-164.07h44.307L446.056,205.653z"/><linearGradient id="Path_4070_1_" gradientUnits="userSpaceOnUse" x1="91.431" y1="588.7749" x2="91.431" y2="589.7749" gradientTransform="matrix(86.06 0 0 -164.07 -7465.5239 96805.9609)"><stop offset="0" style="stop-color:#FFFFFF;stop-opacity:0"/><stop offset="1" style="stop-color:#FFFFFF"/></linearGradient><path class="hide-ie" id="Path_4070" fill="url(#Path_4070_1_)" d="M446.056,205.653h-86.06l20.836-164.07h44.307L446.056,205.653z"/><linearGradient class="hide-ie" id="Path_4071_1_" gradientUnits="userSpaceOnUse" x1="91.431" y1="588.7749" x2="91.431" y2="589.7749" gradientTransform="matrix(86.06 0 0 -164.07 -7465.5239 96805.9609)"><stop offset="0" style="stop-color:#FFFFFF;stop-opacity:0"/><stop offset="1" style="stop-color:#F9A01B"/></linearGradient><path class="hide-ie" id="Path_4071" opacity="0.2" fill="url(#Path_4071_1_)" enable-background="new    " d="M446.056,205.653h-86.06 l20.836-164.07h44.307L446.056,205.653z"/><line id="Line_64" fill="none" stroke="#4D4D4D" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="340.963" y1="1.5" x2="455.518" y2="1.5"/><line id="Line_65" fill="none" stroke="#4D4D4D" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="334.704" y1="1.5" x2="317.08" y2="1.5"/><line id="Line_66" fill="none" stroke="#4D4D4D" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="402.646" y1="1.5" x2="402.646" y2="37.324"/><path id="Path_4072" fill="#B3B2B3" stroke="#4D4D4D" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d=" M369.293,70.678c-0.101-18.421,14.75-33.435,33.171-33.536c18.421-0.101,33.435,14.75,33.536,33.171 c0.001,0.122,0.001,0.244,0,0.365H369.293z"/><path id="Path_4073" fill="#F89F1B" stroke="#4D4D4D" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d=" M413.352,71.172c0.007,5.913-4.781,10.711-10.694,10.718c-5.913,0.007-10.711-4.781-10.718-10.694c0-0.008,0-0.016,0-0.024H413.352z "/><path id="Path_4074" fill="none" stroke="#4D4D4D" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d=" M379.505,64.996c-0.003-12.141,9.838-21.986,21.979-21.989c0.003,0,0.007,0,0.01,0"/><line id="Line_67" fill="none" stroke="#4D4D4D" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="479.401" y1="1.5" x2="461.777" y2="1.5"/><path id="Path_4108" fill="#FFFFFF" stroke="#4D4D4D" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d=" M568.233,245.653h-33.142c-1.892-0.005-3.424-1.537-3.429-3.429v-33.142c0.005-1.892,1.537-3.424,3.429-3.429h33.142 c1.892,0.005,3.424,1.537,3.429,3.429v33.143C571.656,244.116,570.124,245.648,568.233,245.653z"/><ellipse id="Ellipse_938" fill="#E6E6E6" stroke="#4D4D4D" stroke-width="3" stroke-miterlimit="10" cx="551.819" cy="225.812" rx="12.955" ry="12.955"/><ellipse id="Ellipse_936" fill="#4D4D4D" cx="548.064" cy="223.812" rx="2.205" ry="2.205"/><ellipse id="Ellipse_937" fill="#4D4D4D" cx="555.576" cy="223.812" rx="2.205" ry="2.205"/><path id="Path_4109" fill="none" stroke="#4D4D4D" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d=" M548.368,231.584c2.018-2.019,5.291-2.02,7.31-0.001c0,0,0.001,0.001,0.001,0.001"/><path fill="#E6E6E6" d="M189.328,59.099l56.311-6.914c1.645-0.202,3.141,0.968,3.343,2.612l7.733,62.983 c0.202,1.645-0.968,3.141-2.612,3.343l-56.311,6.914c-1.645,0.202-3.141-0.968-3.343-2.612l-7.733-62.983 C186.514,60.798,187.684,59.301,189.328,59.099z"/><path fill="none" stroke="#4D4D4D" stroke-width="3" d="M189.511,60.588l56.311-6.914c0.822-0.101,1.571,0.484,1.672,1.306 l7.733,62.983c0.101,0.822-0.484,1.571-1.306,1.672l-56.311,6.914c-0.822,0.101-1.571-0.484-1.672-1.306l-7.733-62.983 C188.104,61.438,188.689,60.689,189.511,60.588z"/><path fill="#FFFFFF" d="M197.444,65.44L239.3,60.3c1.645-0.202,3.141,0.968,3.343,2.612l5.958,48.528 c0.202,1.645-0.968,3.141-2.612,3.343l-41.857,5.139c-1.645,0.202-3.141-0.968-3.343-2.612l-5.958-48.528 C194.63,67.138,195.799,65.642,197.444,65.44z"/><path fill="none" stroke="#4D4D4D" stroke-width="3" d="M197.626,66.928l41.857-5.139c0.822-0.101,1.571,0.484,1.672,1.306 l5.958,48.528c0.101,0.822-0.484,1.571-1.306,1.672l-41.857,5.139c-0.822,0.101-1.571-0.484-1.672-1.306L196.32,68.6 C196.219,67.778,196.804,67.029,197.626,66.928z"/><path id="Path_16_2_" fill="none" stroke="#4D4D4D" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" d=" M200.961,102.41l7.555-12.715l23.535,16.899"/><path id="Path_4067" fill="none" stroke="#4D4D4D" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" d=" M231.583,106.085l-6.087-4.443l7.294-9.862l12.815,8.415"/><ellipse id="Ellipse_5_2_" transform="matrix(0.9925 -0.1219 0.1219 0.9925 -8.8143 27.8597)" fill="#F89F1B" stroke="#4D4D4D" stroke-width="3" stroke-linecap="round" cx="223.344" cy="85.986" rx="3.985" ry="4.293"/><circle fill="#E6E6E6" cx="571.662" cy="87.869" r="36"/><circle fill="none" stroke="#4D4D4D" stroke-width="3" cx="571.662" cy="87.869" r="34.5"/><circle id="Ellipse_658_1_" fill="#FFFFFF" stroke="#4D4D4D" stroke-width="3" stroke-miterlimit="10" cx="571.662" cy="87.869" r="25.091"/><line id="Line_96" fill="none" stroke="#4D4D4D" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="560.207" y1="99.324" x2="571.5" y2="88.193"/><line id="Line_97" fill="none" stroke="#4D4D4D" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="571.5" y1="88.193" x2="583.803" y2="88.193"/><path id="Path_3276_1_" fill="#F9A01B" d="M571.824,91.915c-2.056,0-3.723-1.667-3.723-3.723c0-2.056,1.667-3.723,3.723-3.723 c2.056,0,3.723,1.667,3.723,3.723l0,0C575.524,90.239,573.871,91.892,571.824,91.915z"/><path id="Path_4110" fill="#E6E6E6" d="M125.816,376.856c-8.165-9.285-11.7-0.677-20.419,0s-36.346,4.849-39.276-5 s-1.462-9.967,16.928-20.046s22.023,2.58,36.24,0s10-7.743,30.7-9.014s26.453-4.3,21.342,9.014s5.356,12.369-7.9,20.046 S133.977,386.141,125.816,376.856z"/><path id="Path_4061" fill="#F89F1B" stroke="#4D4D4D" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d=" M138.186,326.506v42.881h31.768c11.825-0.039,21.401-9.615,21.44-21.44l0,0c-0.039-11.825-9.615-21.401-21.44-21.44L138.186,326.506 z"/><path id="Path_4062" fill="#F89F1B" stroke="#4D4D4D" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d=" M176.464,320.333v6.286h-27.951v-6.286c0.022-7.43,6.04-13.448,13.47-13.47h1.01C170.424,306.884,176.442,312.902,176.464,320.333z"/><path id="Path_4063" fill="#F7F8F8" stroke="#4D4D4D" stroke-width="3" stroke-miterlimit="10" d="M170.066,320.445v6.174h-15.491 v-6.174c0.011-3.715,3.02-6.724,6.735-6.735h2.021c3.691-0.028,6.707,2.941,6.735,6.633 C170.066,320.377,170.066,320.411,170.066,320.445z"/><line id="Line_57" fill="none" stroke="#4D4D4D" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="145.931" y1="359.06" x2="161.085" y2="359.06"/><line id="Line_58" fill="none" stroke="#4D4D4D" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="169.392" y1="359.06" x2="173.658" y2="359.06"/><path id="Path_4111" fill="#808080" stroke="#4D4D4D" stroke-width="3" d="M450.505,340.667l-2.005-7.48l-23.518,6.373 c-0.583,0.167-1.083,0.544-1.405,1.057c-0.28,0.511-0.341,1.113-0.17,1.67l0.851,3.177c0.275,1.163,1.441,1.883,2.604,1.607 c0.041-0.01,0.082-0.021,0.123-0.033L450.505,340.667z"/><path id="Path_4119" fill="#B4B4B4" stroke="#4D4D4D" stroke-width="3" d="M445.671,327.803c0.854-0.248,1.748,0.243,1.997,1.097 c0.006,0.022,0.012,0.044,0.018,0.066l4.258,15.89c0.248,0.854-0.243,1.748-1.097,1.997c-0.022,0.006-0.044,0.012-0.066,0.018 l-4.767,1.277c-0.854,0.248-1.748-0.243-1.997-1.097c-0.006-0.022-0.012-0.044-0.018-0.066l-4.258-15.89 c-0.248-0.854,0.243-1.748,1.097-1.997c0.022-0.006,0.044-0.012,0.066-0.018L445.671,327.803z"/><path id="Path_4111-2" fill="#808080" stroke="#4D4D4D" stroke-width="3" d="M224.917,364.767l0.001,7.744l24.366-0.069 c0.606-0.011,1.187-0.245,1.631-0.658c0.402-0.421,0.617-0.987,0.596-1.569v-3.289c0.035-1.195-0.905-2.192-2.099-2.227 c-0.042-0.001-0.085-0.001-0.127,0L224.917,364.767z"/><path id="Path_4119-2" fill="#B4B4B4" stroke="#4D4D4D" stroke-width="3" d="M226.257,378.445c-0.89,0.019-1.626-0.687-1.645-1.577 c0-0.023,0-0.045,0-0.068v-16.45c-0.019-0.89,0.687-1.626,1.577-1.645c0.023,0,0.045,0,0.068,0h4.936 c0.89-0.019,1.626,0.687,1.645,1.577c0,0.023,0,0.045,0,0.068v16.45c0.019,0.89-0.687,1.626-1.577,1.645c-0.023,0-0.045,0-0.068,0 H226.257z"/><path id="Path_4111-3" fill="#808080" stroke="#4D4D4D" stroke-width="3" d="M393.24,366.849l2.265,7.405l23.281-7.19 c0.576-0.187,1.063-0.581,1.367-1.106c0.262-0.52,0.302-1.124,0.111-1.675l-0.962-3.146c-0.316-1.153-1.506-1.831-2.659-1.516 c-0.041,0.011-0.081,0.024-0.122,0.037L393.24,366.849z"/><path id="Path_4119-3" fill="#B4B4B4" stroke="#4D4D4D" stroke-width="3" d="M398.521,379.537c-0.845,0.278-1.756-0.182-2.034-1.027 c-0.007-0.022-0.014-0.043-0.02-0.065l-4.81-15.731c-0.278-0.845,0.182-1.756,1.027-2.034c0.022-0.007,0.043-0.014,0.065-0.02 l4.72-1.443c0.845-0.278,1.756,0.182,2.034,1.027c0.007,0.022,0.014,0.043,0.02,0.065l4.81,15.731 c0.278,0.845-0.182,1.756-1.027,2.034c-0.022,0.007-0.043,0.014-0.065,0.02L398.521,379.537z"/></svg>
                                            <p style="text-align: center;">متاسفانه وضعیت شما <span class="btn btn-danger btn-xs">آفلاین</span> می باشد.</p>
                                            <p style="text-align: center;">به دلیل اینکه قبلا این صفحه را باز نکرده اید در حال حاضر به صورت آفلاین به این بخش دسترسی ندارید.</p>
                                        </div>
                                    </div>
                                    <div class='col-md-3'> </div>
                                </div>
                                <!-- /.box-body -->
                            </div>

                        </div>
                        <!--/.col (left) -->
                    </div>
                    <!-- /.row -->
                </div>
            </div>
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
</div>
<!-- /.content-wrapper -->
<footer class="main-footer">
    <?php require('app/views/admin/include/footer.php'); ?>
</footer>
<?php require('app/views/admin/include/skinSidebar.php'); ?>
</div>
<?php require('app/views/admin/include/publicJS.php'); ?>

</body>
</html>