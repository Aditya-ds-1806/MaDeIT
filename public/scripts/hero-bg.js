var hero = document.querySelector('header.hero-image');

bgImageResize();
bgPosAdjust();

window.addEventListener('resize', function (e) {
    e.preventDefault();
    bgImageResize();
    bgPosAdjust();
    if (this.window.innerWidth < 576) {
        hero.style.backgroundImage = "url(/public/images/Mask_Group_9.svg), none, url(/public/images/Mask_Group_7.svg)"
    } else {
        hero.style.backgroundImage = "url(/public/images/Mask_Group_9.svg), url(/public/images/Mask_Group_8.svg), url(/public/images/Mask_Group_7.svg)"
    }
});

function bgImageResize() {
    var bottomBgSize = (Math.pow(window.innerWidth, -0.859) * 32155).toString() + '%';
    var rightBgSize = (Math.pow(window.innerWidth, -0.829) * 5367.88).toString() + '%, ';
    var topBgSize = (Math.pow(window.innerWidth, -0.615) * 4051.19).toString() + '%, ';
    hero.style.backgroundSize = topBgSize + rightBgSize + bottomBgSize;
}

function bgPosAdjust() {
    var bottomBgPosY = 100 + 0.1 * (Math.pow(window.innerWidth, -0.859) * 32155);
    if (window.innerHeight < 675) {
        hero.style.backgroundPositionY = 'top, center, ' + bottomBgPosY.toString() + '%';

    } else {
        hero.style.backgroundPositionY = 'top, center, bottom';
    }
}