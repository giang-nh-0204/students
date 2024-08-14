<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title; ?></title>
    <link rel="icon" href="<?= base_url(); ?>assets/images/logo.ico" type="image/x-icon">

    <!-- Bootstrap CSS -->
    <link href="<?= base_url(); ?>assets/extend/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Boostrap -->
    <script src="<?= base_url(); ?>assets/extend/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
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
    <!-- Font Poppins -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">

    <?php if (isset($css)) getcss($css); ?>

    <style>
        *,
        html,
        body {
            padding: 0px;
            margin: 0px;
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