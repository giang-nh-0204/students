<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title;?></title>

    <!-- Bootstrap CSS -->
    <link href="<?= base_url(); ?>assets/extend/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Boostrap -->
    <script src="<?= base_url(); ?>assets/extend/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- JQuery -->
    <script src="<?= base_url(); ?>assets/extend/jquery/jquery.min.js"></script>
    <link rel="stylesheet" href="<?= base_url(); ?>assets/extend/jquery/jquery-ui.css">
    <script src="<?= base_url(); ?>assets/extend/jquery/jquery-ui.js"></script>
    <!-- DataTables -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/extend/dataTables/dataTables.dataTables.css" />
    <script src="<?= base_url(); ?>assets/extend/dataTables/dataTables.js"></script>
    <!-- Toastr -->
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/extend/toastr/toastr.min.css">
    <script src="<?= base_url(); ?>/assets/extend/toastr/toastr.min.js"></script>

    <?php if(isset($css)) getcss($css);?>

    <style>
        *,
        html,
        body {
            padding: 0px;
            margin: 0px;
        }

        .row {
            max-width: 100%;
        }

        /* Custom scrollbar */

        /* width */
        ::-webkit-scrollbar {
            width: 10px;
        }

        /* Track */
        ::-webkit-scrollbar-track {
            background: #ddd;
        }

        /* Handle */
        ::-webkit-scrollbar-thumb {
            background: #888;
        }

        /* Handle on hover */
        ::-webkit-scrollbar-thumb:hover {
            background: #555;
        }
    </style>
</head>

<body>