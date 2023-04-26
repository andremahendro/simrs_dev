<?= $this->include('_layout/main') ?>

<head>

    <?php echo view('_layout/title-meta', array('title' => 'CRM')); ?>

    <?= $this->include('_layout/head-css') ?>

</head>

<body>

    <!-- Begin page -->
    <div id="layout-wrapper">

        <?= $this->include('_layout/menu') ?>

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">
            <div class="page-content">
                <div class="container-fluid">

                    <?php echo view('_layout/page-title', array('pagetitle' => 'Dashboards', 'title' => 'CRM')); ?>

                    <?php include($content); ?>

                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->

            <?= $this->include('_layout/footer') ?>
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->

    <?= $this->include('_layout/customizer') ?>

    <?= $this->include('_layout/vendor-scripts') ?>

    <!-- apexcharts -->
    <script src="/assets/libs/apexcharts/apexcharts.min.js"></script>

    <!-- Dashboard init -->
    <script src="/assets/js/pages/dashboard-crm.init.js"></script>

    <!-- App js -->
    <script src="/assets/js/app.js"></script>
</body>

</html>