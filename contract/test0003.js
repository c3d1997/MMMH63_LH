var currentYear = new Date().getFullYear();
    var currentMonth = new Date().getMonth() + 1;
    var currentDay = new Date().getDate();
    var currentWeek = new Date().getDay();

    // 年份
    for (i = currentYear; i <= currentYear +10; i++) {
        addOption(meetYear2, i, i);
    }

    // 新增月份
    for (i = currentMonth; i <= 12; i++) {
        addOption(meetMonth2, i, i);
    }

    // 設定每個月份的天數
    function setDays(year, month, day) {
        var monthDays = [31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31];
        var yea = year.options[year.selectedIndex].text;
        var mon = month.options[month.selectedIndex].text;
        var num = monthDays[mon - 1];
        if (mon == 2 && isLeapYear(yea)) {
            num++;
        }
        for (var j = day.options.length - 1 ; j >= num; j--) {
            day.remove(j);
        }
        for (var i = day.options.length + 1; i <= num; i++) {
            addOption(meetDay2, i, i);
        }
    }
    // 限定每個月份的天數
    function currentDays(year, month, day) {
        var monthDays = [31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31];
        var yea = year.options[year.selectedIndex].text;
        var mon = month.options[month.selectedIndex].text;
        var num = monthDays[mon - 1];
        if (mon == 2 && isLeapYear(yea)) {
            num++;
        }
        for (var j = currentDay  ; j >= num; j--) {
            day.remove(j);
        }
        for (var i = currentDay ; i <= num; i++) {
            addOption(meetDay2, i, i);
        }
    }

    // 判斷是否閏年
    function isLeapYear(year) {
        return (year % 4 == 0 || (year % 100 == 0 && year % 400 == 0));
    }
    // 向select尾部新增option
    function addOption(selectbox, text, value) {
        var option = document.createElement("option");
        option.text = text;
        option.value = value;
        selectbox.options.add(option);
    }

// 以上下拉選單程式碼參考 https://www.itread01.com/content/1550230923.html

    // 將今天月份設為預設
    $("select[name=meetDay2MM] option").each(function () {
        if ($(this).text() == currentMonth)
            $(this).attr("selected", "selected");
    });

    window.onload = setDays(meetYear2, meetMonth2, meetDay2);

    // 今天日期設為預設
    $("select[name=meetDay2DD] option").each(function () {
        if ($(this).text() == currentDay)
            $(this).attr("selected", "selected");
    });

    // 取得星期並切換選項
    function getDay() {
        // 取得選取的 年份 月份 日期
        var selectYY = $('select[name=meetDay2YY] option').filter(':selected').val()
        var selectMM = $('select[name=meetDay2MM] option').filter(':selected').val()
        var selectDD = $('select[name=meetDay2DD] option').filter(':selected').val()

        // 取得選取的月份名稱
        function getMonthName(selectMM) {
            return ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'][selectMM - 1];
        }
        var monthName = getMonthName(selectMM);

        // 取得選取之星期
        var selectDay = new Date(monthName + ' ' + selectDD + ',' + selectYY + ' 23:15:30');
        var dayOfWeek = selectDay.getDay();
        //console.log(dayOfWeek);

        // 6 = Saturday, 0 = Sunday
        if ((dayOfWeek === 6) || (dayOfWeek === 0)) {
            $('#weekDaily').attr('class', 'form-group col-12 d-none');
            $('#weekend').attr('class', 'form-group col-12 d-block');
        } else {
            $('#weekDaily').attr('class', 'form-group col-12 d-block');
            $('#weekend').attr('class', 'form-group col-12 d-none');
        }
    }

    function changeYear() {
        var selectYY = $('select[name=meetDay2YY] option').filter(':selected').val()
        // 僅顯示當年度大於今日之月份
        if (selectYY == currentYear) {
            $('#meetMonth2').find('option').remove().end();
            for (i = currentMonth; i <= 12; i++) {
                addOption(meetMonth2, i, i);
            }
        } else {
            $('#meetMonth2').find('option').remove().end();
            for (i = 1; i <= 12; i++) {
                addOption(meetMonth2, i, i);
            }
        }
        changeMonth();
    }

    function changeMonth() {
        var selectYY = $('select[name=meetDay2YY] option').filter(':selected').val()
        var selectMM = $('select[name=meetDay2MM] option').filter(':selected').val()
        // 僅顯示當年度大於今日之日期
        if (selectMM == currentMonth && selectYY == currentYear) {
            $('#meetDay2').find('option').remove().end();
            currentDays(meetYear2, meetMonth2, meetDay2);
        } else {
            $('#meetDay2').find('option').remove().end();
            setDays(meetYear2, meetMonth2, meetDay2);
        }
    }

    window.onload = getDay(), changeMonth();