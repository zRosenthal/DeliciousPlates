/**
 * Created by zacharyrosenthal on 12/5/15.
 */

var dataSpace = {
    slide: 0,
    maxSlide: 12
};

function iterImg(direction) {
    dataSpace.slide = dataSpace.slide + direction;
    document.getElementById('img-holder').src = "http://127.0.0.1:8080/assets/img/" + dataSpace.slide + ".jpg";


}