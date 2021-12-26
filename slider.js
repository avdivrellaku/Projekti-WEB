var sliderArray = ['images/slider1.png', 'images/slider2.png', 'images/slider3.png', 'images/slider4.png'];

var i = 0;

function slideShow() {
    document.getElementById('slider').src = sliderArray[i];
    if (i < sliderArray.length - 1) {
        i++;

    }
    else {
        i = 0;
    }
    document.getElementById('slider').style.transition = "opacity 2s";

    setTimeout('slideShow()', 2000);

}


slideShow();