/* ====================Start JS Side Bar Student============================= */

/**
 * Xử lí đóng mở dropdown của side bar
 */
document.querySelectorAll('.dropdown-title').forEach(function (title) {
    title.addEventListener('click', function () {
        // Hiển thị hoặc ẩn dropdown hiện tại
        var dropdownContent = this.nextElementSibling
        dropdownContent.classList.toggle('show')
        this.classList.toggle('show')
    })
})

/**
 * Xử lí khi click nút đóng thì đóng side bar
 */
document.getElementById('close-side-bar').addEventListener('click', function () {
    var sidebar = document.getElementById('sidebar')

    sidebar.style.transform = 'translateX(-100%)'
})

/**
 * Xử lí kiểm tra tất cả class hoặc style của sidebar có css transform translate thì đè lại với transform translate mong muốn
 */
document.getElementById('toggleSidebar').addEventListener('click', function () {
    var sidebar = document.getElementById('sidebar')

    var computedStyle = window.getComputedStyle(sidebar)
    var currentTransform = computedStyle.transform

    // Lấy danh sách các class hiện tại
    var classes = sidebar.classList
    var hasTransformClass = false

    // Duyệt qua tất cả các class để kiểm tra thuộc tính transform
    for (var i = 0; i < classes.length; i++) {
        var className = classes[i]

        // Tạo một element tạm để kiểm tra giá trị transform của class đó
        var tempDiv = document.createElement('div')
        tempDiv.className = className
        document.body.appendChild(tempDiv)

        var tempTransform = window.getComputedStyle(tempDiv).transform

        // Kiểm tra xem class có thuộc tính transform translateX hay không
        if (tempTransform !== 'none' && tempTransform.includes('matrix')) hasTransformClass = true

        // Xóa element tạm
        document.body.removeChild(tempDiv)

        // Nếu đã tìm thấy class có transform, thoát khỏi vòng lặp
        if (hasTransformClass) break
    }

    // Gán ngược lại transform hiện tại
    if (hasTransformClass) {
        if (currentTransform === 'matrix(1, 0, 0, 1, 0, 0)') {
            sidebar.style.transform = 'translateX(-100%)'
        } else {
            sidebar.style.transform = 'translateX(0)'
        }
    }
})

/* ====================End JS Side Bar Student============================= */

/* ====================Start JS Index Student============================= */

/* ========Đoạn JS lấy ngày hiện tại======= */
// Hàm trả về text ngày hiện tại
function formatDate() {
    // Các ngày trong tuần tiếng Việt
    const daysOfWeek = ['Chủ Nhật', 'Thứ 2', 'Thứ 3', 'Thứ 4', 'Thứ 5', 'Thứ 6', 'Thứ 7']

    // Lấy ngày hôm nay
    const today = new Date()

    // Lấy ngày, tháng, năm
    const day = String(today.getDate()).padStart(2, '0')
    const month = String(today.getMonth() + 1).padStart(2, '0') // Tháng bắt đầu từ 0
    const year = today.getFullYear()

    // Lấy tên thứ
    const dayOfWeek = daysOfWeek[today.getDay()]

    // Kết hợp thành chuỗi định dạng
    return `${dayOfWeek}, ${day}/${month}/${year}`
}

// Lấy thẻ div và xuất text ngày lên
document.getElementById('date-display').textContent = formatDate()

/* =======End Đoạn JS lấy ngày hiện tại====== */

/* =====Đoạn JS hiển thị text Học kỳ và thanh quá trình==== */
document.addEventListener('DOMContentLoaded', function () {
    function updateProgressBar(currentSemester, totalSemesters) {
        // Tính toán phần trăm hoàn thành
        const percentage = (currentSemester / totalSemesters) * 100

        // Cập nhật chiều rộng của thanh quá trình
        const progressBar = document.getElementById('progress-bar')
        progressBar.style.width = percentage + '%'

        // Cập nhật text hiển thị
        const progressText = document.getElementById('progress-text')
        progressText.textContent = `Học kỳ ${currentSemester} trên ${totalSemesters}`
    }

    // Gọi hàm updateProgressBar với dữ liệu từ PHP
    updateProgressBar(currentSemester, totalSemesters)
})
/* =====End JS hiển thị text Học kỳ và thanh quá trình==== */

/* ========Start JS tạo lịch ngày hôm nay =========*/
document.addEventListener('DOMContentLoaded', function () {
    const calendarTitle = document.querySelector('.calendar-title')
    const calendarDays = document.querySelector('.calendar-days')
    const prevButton = document.querySelector('.left')
    const nextButton = document.querySelector('.right')

    let currentDate = new Date()

    function renderCalendar(date) {
        const month = date.getMonth()
        const year = date.getFullYear()

        // Cập nhật tiêu đề tháng
        const monthNames = [
            'Tháng 01',
            'Tháng 02',
            'Tháng 03',
            'Tháng 04',
            'Tháng 05',
            'Tháng 06',
            'Tháng 07',
            'Tháng 08',
            'Tháng 09',
            'Tháng 10',
            'Tháng 11',
            'Tháng 12'
        ]
        calendarTitle.textContent = `${monthNames[month]} ${year}`

        // Xóa các ngày cũ
        calendarDays.innerHTML = ''

        // Lấy ngày đầu tiên và ngày cuối cùng của tháng hiện tại
        const firstDayOfMonth = new Date(year, month, 1)
        const lastDayOfMonth = new Date(year, month + 1, 0)

        // Tìm ngày đầu tiên của tuần (T2)
        const startDayOfWeek = firstDayOfMonth.getDay() === 0 ? 7 : firstDayOfMonth.getDay()

        // Tính toán số ngày của tháng trước cần hiển thị
        const lastDateOfPrevMonth = new Date(year, month, 0).getDate()
        for (let i = startDayOfWeek - 1; i > 0; i--) {
            const day = lastDateOfPrevMonth - i + 1
            const dayElement = document.createElement('span')
            dayElement.classList.add('prev-month')
            dayElement.textContent = day
            calendarDays.appendChild(dayElement)
        }

        // Hiển thị các ngày của tháng hiện tại
        for (let i = 1; i <= lastDayOfMonth.getDate(); i++) {
            const dayElement = document.createElement('span')
            dayElement.textContent = i

            // Xác định ngày Chủ nhật
            const dayOfWeek = new Date(year, month, i).getDay()
            if (dayOfWeek === 0) {
                dayElement.classList.add('sunday')
            }

            if (i === currentDate.getDate() && year === currentDate.getFullYear() && month === currentDate.getMonth()) {
                dayElement.classList.add('current-day')
            }

            calendarDays.appendChild(dayElement)
        }

        // Hiển thị các ngày của tháng sau (mờ)
        const remainingDays = 42 - calendarDays.children.length // 42 = 7 cột * 6 hàng (tối đa)
        for (let i = 1; i <= remainingDays; i++) {
            const dayElement = document.createElement('span')
            dayElement.classList.add('next-month')
            dayElement.textContent = i
            calendarDays.appendChild(dayElement)
        }
    }

    // Điều hướng tháng
    prevButton.addEventListener('click', function () {
        currentDate.setMonth(currentDate.getMonth() - 1)
        renderCalendar(currentDate)
    })

    nextButton.addEventListener('click', function () {
        currentDate.setMonth(currentDate.getMonth() + 1)
        renderCalendar(currentDate)
    })

    // Hiển thị lịch ban đầu
    renderCalendar(currentDate)
})
/* ========Start JS tạo lịch ngày hôm nay =========*/
/* ====================End JS Index Student============================= */
