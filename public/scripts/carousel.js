window.addEventListener('load', function (e) {
    e.preventDefault();
    var options = {
        interval: 5000,
        keyboard: false,
        pause: false,
        touch: true
    };
    for (let i = 0; i < 3; i++) {
        $('#carousel' + (i + 1)).carousel(options);
        $('#carousel' + (i + 1)).carousel('cycle');
    }
});