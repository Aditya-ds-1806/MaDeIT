var hero = document.querySelector('header.hero-image');

bgImageResize();

window.addEventListener('resize', function (e) {
    e.preventDefault();
    bgImageResize();
});

function bgImageResize() {
    var bottomBgSize = (Math.pow(window.innerWidth, -0.859) * 32155).toString() + '%';
    var rightBgSize = (Math.pow(window.innerWidth, -0.829) * 5367.88).toString() + '%, ';
    var topBgSize = (Math.pow(window.innerWidth, -0.615) * 4051.19).toString() + '%, ';
    hero.style.backgroundSize = topBgSize + rightBgSize + bottomBgSize;
}