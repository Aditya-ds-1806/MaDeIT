var slider = document.querySelector('div.scrolling-wrapper');

window.addEventListener('load', function () {
    var max = 0, cycles = 0;
    cardSlide('right');
    cardSlide('left');
    setInterval(function () {
        if (slider.scrollLeft - slider.offsetWidth !== max && cycles === 0) {
            max = slider.scrollLeft - slider.offsetWidth;
        } else {
            if (cycles === 0)
                cycles++;
            slider.scrollLeft = 0;
        }
        computeScrollPos('right');
    }, 3000);
});

function cardSlide(dir) {
    var dirBtn;
    if (dir === 'right') {
        dirBtn = document.querySelector('i.fa-chevron-circle-right');
    } else if (dir === 'left') {
        dirBtn = document.querySelector('i.fa-chevron-circle-left');
    }
    dirBtn.addEventListener('click', function (e) {
        e.preventDefault();
        computeScrollPos(dir);
    });
}

function computeScrollPos(dir) {
    if (dir === 'right') {
        slider.scrollLeft = slider.scrollLeft + slider.offsetWidth / 3;
    } else if (dir === 'left') {
        slider.scrollLeft = slider.scrollLeft - slider.offsetWidth / 3;
    }
}