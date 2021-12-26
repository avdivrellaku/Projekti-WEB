var sliderArray = ['url(images/slider1.png)', 'url(images/slider2.png)', 'url(images/slider3.png)', 'url(images/slider4.png)'];

var i = 0;

function slideShow() {
    document.getElementById('slides-pics').style.backgroundImage = sliderArray[i];
    if (i < sliderArray.length - 1) {
        i++;
        document.getElementById('slides-pics').style.transition = "0.5s ease-in-out";
    }
    else {
        i = 0;
    }


    setTimeout('slideShow()', 2000);

}


slideShow();