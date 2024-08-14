<main class="section content-padding">
    <div class="container pb-5">
        <div class="row mt-4">
            <div class="col-12 col-xl-9">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="d-flex py-1 gap-2 align-items-center fs-5">
                        <div>👋</div>
                        <div>Xin Chào, Khánh!</div>
                    </div>
                    <div id="date-display" class="text-end"></div>
                </div>
            </div>
            <div class="col-xl-3 d-none d-xl-block">
                <div class="progressbar">
                    <p id="progress-text"></p>
                    <div id="progress-container">
                        <div id="progress-bar"></div>
                    </div>

                    <!-- Xử lí hiển thị text Học kỳ và thanh quá trình -->
                    <?php
                    $currentSemester = 3;  // Học kỳ hiện tại
                    $totalSemesters = 8;   // Tổng số học kỳ
                    ?>
                    <script>
                        // Truyền dữ liệu từ PHP sang biến JavaScript
                        const currentSemester = <?php echo $currentSemester; ?>;
                        const totalSemesters = <?php echo $totalSemesters; ?>;
                    </script>
                    <!-- End Xử lí hiển thị text Học kỳ và thanh quá trình -->
                </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-12 col-xl-9">
                <div class="welcome-box bg-light rounded">
                    <div class="d-flex">
                        <div class="p-4">
                            <div class="d-flex align-items-start flex-column">
                                <div class="mt-1 mb-4">
                                    <h5 class="fw-bold m-0">Bạn có lịch học vào 7:30 hôm nay!</h5>
                                </div>
                                <div class="mb-4">
                                    <span class="text-break">
                                        Hãy chuẩn bị tinh thần và sắp xếp thời gian để đến lớp đúng giờ.
                                        Đừng quên mang theo đầy đủ tài liệu và dụng cụ học tập cần thiết. Hãy bắt đầu ngày mới với tinh thần học tập hăng say và năng lượng tích cực nhé!
                                    </span>
                                </div>
                                <div class="">
                                    <button class="btn btn-dark py-2 px-3">
                                        Xem lịch học
                                        <i class="fas fa-arrow-right mx-2"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-end">
                            <div class="me-4 d-none d-xl-block">
                                <img src="<?= base_url('assets/images/Isolation_Mode.png') ?>" alt="...">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 d-none d-xl-block">
                <div class="calendar">
                    <div class="calendar-inner">
                        <div class="calendar-header d-flex align-items-center justify-content-center gap-3">
                            <span class="calendar-icon left"><i class="fas fa-chevron-left"></i></span>
                            <span class="calendar-title"></span>
                            <span class="calendar-icon right"><i class="fas fa-chevron-right"></i></span>
                        </div>
                        <hr class="calendar-separator">
                        <div class="calendar-body">
                            <div class="calendar-weekdays">
                                <span>T2</span><span>T3</span><span>T4</span>
                                <span>T5</span><span>T6</span><span>T7</span><span class="sunday">CN</span>
                            </div>
                            <div class="calendar-days"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 order-2 order-xl-1 col-xl-9 mt-4">
                <div class="list-hp pb-1">
                    <div class="head-func pb-3 mb-3">
                        <div class="d-flex justify-content-between">
                            <div class="title d-flex align-items-center gap-2">
                                <i class="fas fa-book"></i>
                                <span>Học phần học kỳ này</span>
                            </div>
                            <div>
                                <a href="#">
                                    <span class="me-2">Xem tất cả</span>
                                    <i class="fas fa-chevron-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="grid-container">
                        <div class="box-hp">
                            <div class="bg-purple-custom rounded-1 p-4">
                                <p class="text-truncate fw-bolder">Dược lâm sàn 1</p>
                                <hr class="bg-dark">
                                <p class="text-capitalize m-1 d-flex gap-2">
                                    <span class="w-0.5 d-flex justify-content-center align-items-center">
                                        <i class="fas fa-user"></i>
                                    </span>
                                    <span class="text-truncate">Nguyễn hai khoa</span>
                                </p>
                                <p class="text-capitalize m-1 d-flex gap-2">
                                    <span class="w-0.5 d-flex justify-content-center align-items-center">
                                        <i class="fas fa-calendar-alt"></i>
                                    </span>
                                    <span>Thứ 2 & Thứ 6</span>
                                </p>
                                <p class="text-capitalize m-1 d-flex gap-2">
                                    <span class="w-0.5 d-flex justify-content-center align-items-center">
                                        <i class="fas fa-clock"></i>
                                    </span>
                                    <span>7:30 - 9:15</span>
                                </p>
                                <p class="text-capitalize m-1 d-flex gap-2">
                                    <span class="w-0.5 d-flex justify-content-center align-items-center">
                                        <i class="fas fa-map-marker-alt"></i>
                                    </span>
                                    <span>D3-08</span>
                                </p>
                            </div>
                        </div>
                        <div class="box-hp">
                            <div class="bg-organ-custom rounded-1 p-4">
                                <p class="text-truncate fw-bolder">Hoá đại cương vô cơ 1</p>
                                <hr class="bg-dark">
                                <p class="text-capitalize m-1 d-flex gap-2">
                                    <span class="w-0.5 d-flex justify-content-center align-items-center">
                                        <i class="fas fa-user"></i>
                                    </span>
                                    <span class="text-truncate">Nguyễn Duy Tuấn</span>
                                </p>
                                <p class="text-capitalize m-1 d-flex gap-2">
                                    <span class="w-0.5 d-flex justify-content-center align-items-center">
                                        <i class="fas fa-calendar-alt"></i>
                                    </span>
                                    <span>Thứ 3 & Thứ 6</span>
                                </p>
                                <p class="text-capitalize m-1 d-flex gap-2">
                                    <span class="w-0.5 d-flex justify-content-center align-items-center">
                                        <i class="fas fa-clock"></i>
                                    </span>
                                    <span>15:30 - 17:45</span>
                                </p>
                                <p class="text-capitalize m-1 d-flex gap-2">
                                    <span class="w-0.5 d-flex justify-content-center align-items-center">
                                        <i class="fas fa-map-marker-alt"></i>
                                    </span>
                                    <span>D2-07</span>
                                </p>
                            </div>
                        </div>
                        <div class="box-hp">
                            <div class="bg-info-custom rounded-1 p-4">
                                <p class="text-truncate fw-bolder">Anh văn căn bản 1</p>
                                <hr class="bg-dark">
                                <p class="text-capitalize m-1 d-flex gap-2">
                                    <span class="w-0.5 d-flex justify-content-center align-items-center">
                                        <i class="fas fa-user"></i>
                                    </span>
                                    <span class="text-truncate">Nguyễn hai khoa</span>
                                </p>
                                <p class="text-capitalize m-1 d-flex gap-2">
                                    <span class="w-0.5 d-flex justify-content-center align-items-center">
                                        <i class="fas fa-calendar-alt"></i>
                                    </span>
                                    <span>Thứ 4 & Thứ 7 </span>
                                </p>
                                <p class="text-capitalize m-1 d-flex gap-2">
                                    <span class="w-0.5 d-flex justify-content-center align-items-center">
                                        <i class="fas fa-clock"></i>
                                    </span>
                                    <span>7:30 - 9:15</span>
                                </p>
                                <p class="text-capitalize m-1 d-flex gap-2">
                                    <span class="w-0.5 d-flex justify-content-center align-items-center">
                                        <i class="fas fa-map-marker-alt"></i>
                                    </span>
                                    <span>D3-02</span>
                                </p>
                            </div>
                        </div>
                        <div class="box-hp">
                            <div class="bg-success-custom rounded-1 p-4">
                                <p class="text-truncate fw-bolder">Giáo dục thể chất 1</p>
                                <hr class="bg-dark">
                                <p class="text-capitalize m-1 d-flex gap-2">
                                    <span class="w-0.5 d-flex justify-content-center align-items-center">
                                        <i class="fas fa-user"></i>
                                    </span>
                                    <span class="text-truncate">Nguyễn Hoàng Giang</span>
                                </p>
                                <p class="text-capitalize m-1 d-flex gap-2">
                                    <span class="w-0.5 d-flex justify-content-center align-items-center">
                                        <i class="fas fa-calendar-alt"></i>
                                    </span>
                                    <span>Thứ 2</span>
                                </p>
                                <p class="text-capitalize m-1 d-flex gap-2">
                                    <span class="w-0.5 d-flex justify-content-center align-items-center">
                                        <i class="fas fa-clock"></i>
                                    </span>
                                    <span>7:30 - 9:15</span>
                                </p>
                                <p class="text-capitalize m-1 d-flex gap-2">
                                    <span class="w-0.5 d-flex justify-content-center align-items-center">
                                        <i class="fas fa-map-marker-alt"></i>
                                    </span>
                                    <span>Sân 8</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="list-lh mt-4">
                    <div class="head-func pb-3 mb-3">
                        <div class="d-flex justify-content-between">
                            <div class="title d-flex align-items-center gap-2">
                                <i class="fas fa-calendar-alt"></i>
                                <span>Lịch học sắp đến</span>
                            </div>
                            <div>
                                <a href="#">
                                    <span class="me-2">Xem tất cả</span>
                                    <i class="fas fa-chevron-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive-lg">
                        <table class="lh-table table table-striped table-hover table-borderless align-middle text-small">
                            <thead>
                                <tr>
                                    <th class="text-secondary">Học phần</th>
                                    <th class="text-secondary">Tiết học</th>
                                    <th class="text-secondary">Ngày</th>
                                    <th class="text-secondary">Thời gian</th>
                                    <th class="text-secondary">Phòng học</th>
                                    <th class="text-secondary">Trạng thái</th>
                                </tr>
                            </thead>
                            <tbody class="">
                                <tr class="">
                                    <td scope="row">
                                        <span>Dược lâm sàng 1</span>
                                    </td>
                                    <td>
                                        <span>1 - 3</span>
                                    </td>
                                    <td>
                                        <span> 09/08/2024 </span>
                                    </td>
                                    <td>
                                        <span> 07:00 - 09:15 </span>
                                    </td>
                                    <td>
                                        <span>D3-08</span>
                                    </td>
                                    <td>
                                        <span class="badge bg-success-custom text-success p-1">Hôm nay</span>
                                    </td>
                                </tr>
                                <tr class="">
                                    <td scope="row">
                                        <span>Hóa đại cương vô cơ</span>
                                    </td>
                                    <td>
                                        <span>10 - 12</span>
                                    </td>
                                    <td>
                                        <span> 09/08/2024 </span>
                                    </td>
                                    <td>
                                        <span> 15:30 - 17:45 </span>
                                    </td>
                                    <td>
                                        <span>D2-07</span>
                                    </td>
                                    <td>
                                        <span class="badge bg-success-custom text-success p-1">Hôm nay</span>
                                    </td>
                                </tr>
                                <tr class="">
                                    <td scope="row">
                                        <span>Anh văn căn bản 1</span>
                                    </td>
                                    <td>
                                        <span>1 - 3</span>
                                    </td>
                                    <td>
                                        <span> 10/08/2024 </span>
                                    </td>
                                    <td>
                                        <span> 07:00 - 09:15 </span>
                                    </td>
                                    <td>
                                        <span>D3-02</span>
                                    </td>
                                    <td>
                                        <span class="badge bg-primary-custom text-primary p-1">Tuần này</span>
                                    </td>
                                </tr>
                                <tr class="">
                                    <td scope="row">
                                        <span>Sinh học và di truyền</span>
                                    </td>
                                    <td>
                                        <span>10 - 12</span>
                                    </td>
                                    <td>
                                        <span> 10/08/2024 </span>
                                    </td>
                                    <td>
                                        <span> 15:30 - 17:45 </span>
                                    </td>
                                    <td>
                                        <span>D3-03</span>
                                    </td>
                                    <td>
                                        <span class="badge bg-primary-custom text-primary p-1">Tuần này</span>
                                    </td>
                                </tr>
                                <tr class="">
                                    <td scope="row">
                                        <span>Giáo dục thể chất 1</span>
                                    </td>
                                    <td>
                                        <span>1 - 3</span>
                                    </td>
                                    <td>
                                        <span>12/08/2024</span>
                                    </td>
                                    <td>
                                        <span>07:00 - 09:15</span>
                                    </td>
                                    <td>
                                        <span>Sân 8</span>
                                    </td>
                                    <td>
                                        <span class="badge bg-primary-custom text-primary p-1">Tuần sau</span>
                                    </td>
                                </tr>
                                <tr class="">
                                    <td scope="row">
                                        <span>Triết học Mac-Lenin</span>
                                    </td>
                                    <td>
                                        <span>10 - 12</span>
                                    </td>
                                    <td>
                                        <span> 12/08/2024 </span>
                                    </td>
                                    <td>
                                        <span> 15:30 - 17:45 </span>
                                    </td>
                                    <td>
                                        <span>D2-07</span>
                                    </td>
                                    <td>
                                        <span class="badge bg-primary-custom text-primary p-1">Tuần sau</span>
                                    </td>
                                </tr>
                                <tr class="">
                                    <td scope="row">
                                        <span>Dược lâm sàng 1</span>
                                    </td>
                                    <td>
                                        <span>1 - 3</span>
                                    </td>
                                    <td>
                                        <span> 13/08/2024 </span>
                                    </td>
                                    <td>
                                        <span> 07:00 - 09:15 </span>
                                    </td>
                                    <td>
                                        <span>D3-08</span>
                                    </td>
                                    <td>
                                        <span class="badge bg-primary-custom text-primary p-1">Tuần sau</span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-12 order-1 order-xl-2 col-xl-3 mt-4">
                <div class="col-12">
                    <div class="list-notification">
                        <div class="head-func pb-3 mb-3">
                            <div class="d-flex justify-content-between">
                                <div class="title d-flex align-items-center gap-2">
                                    <i class="fas fa-bell"></i>
                                    <span>Thông báo</span>
                                </div>
                                <div>
                                    <a href="#">
                                        <span class="me-2">Xem tất cả</span>
                                        <i class="fas fa-chevron-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="row g-0">
                            <div class="col-12 mb-3">
                                <div class="p-2 border border-success rounded text-small">
                                    <div class="notification-header pb-2 mb-2 d-flex justify-content-between align-items-center">
                                        <span class="badge badge-success text-success">Thông báo</span>
                                        <div class="date fst-italic">09 / 08 / 2024</div>
                                    </div>
                                    <div class="notification-body">
                                        <div class="title mb-3 d-flex flex-column w-100"><span>Đã có điểm học phần Pháp luật đại cương</span></div>
                                        <div class="content w-100"><span>Bạn đã có điểm học phần Pháp luật đại cương - Lớp DH18QLD01</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="p-2 border border-danger rounded text-small">
                                    <div class="notification-header pb-2 mb-2  d-flex justify-content-between align-items-center">
                                        <span class="badge badge-danger text-danger">Nhắc nhở</span>
                                        <div class="date fst-italic">09 / 08 / 2024</div>
                                    </div>
                                    <div class="notification-body">
                                        <div class="title mb-3 d-flex flex-column w-100"><span>Chưa thanh toán học phí</span></div>
                                        <div class="content w-100"><span>Bạn chưa thanh toán học phí học kỳ 2 - 2023. Vui lòng thanh toán</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>