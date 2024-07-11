window.addEventListener('load', function() {
    function addClassesToElementorElements() {
        // پیدا کردن تمام المان‌های المنتور
        let elementorElements = document.querySelectorAll('.elementor-element');

        // اضافه کردن کلاس به هر المان
        elementorElements.forEach(function(element) {
            element.setAttribute(':class', "isDarkness ? 'razmnixDark' : 'razmnixLight'")
        });
        if (localStorage.getItem('color-theme') === 'dark'){
            document.documentElement.classList.add('dark');

        }else {
            document.documentElement.classList.remove('dark');
        }
    }

    // بررسی مداوم تا زمانی که تمام المان‌های المنتور پیدا شوند
    function checkAndAddClasses() {
        if (document.querySelectorAll('.elementor-element').length > 0) {
            addClassesToElementorElements();
        } else {
            setTimeout(checkAndAddClasses, 100); // بررسی مجدد پس از 100 میلی‌ثانیه
        }
    }

    checkAndAddClasses();
});