<script language="javascript" type="text/javascript">
var slideShowSpeed = 4000;
var crossFadeDuration = 3;
var Pic = new Array();
Pic[0] = 'ForGallery/1.gif'
Pic[1] = 'ForGallery/2.jpg'
Pic[2] = 'ForGallery/3.GIF'
Pic[3] = 'ForGallery/4.jpg'
Pic[4] = 'ForGallery/5.jpg'
Pic[5] = 'ForGallery/6.gif'
Pic[6] = 'ForGallery/7.jpg'
Pic[7] = 'ForGallery/8.jpg'
Pic[8] = 'ForGallery/9.jpg'
Pic[9] = 'ForGallery/10.jpeg'
Pic[10] = 'ForGallery/11.jpg'
Pic[11] = 'ForGallery/12.jpg'
Pic[12] = 'ForGallery/13.jpg'
Pic[13] = 'ForGallery/14.jpg'
Pic[14] = 'ForGallery/15.jpg'
Pic[15] = 'ForGallery/16.jpg'
Pic[16] = 'ForGallery/17.jpg'
Pic[17] = 'ForGallery/18.jpg'
Pic[18] = 'ForGallery/19.jpg'
Pic[18] = 'ForGallery/77.jpg'
// do not edit anything below this line
var t;
var j = 0;
var p = Pic.length;
var preLoad = new Array();
for (i = 0; i < p; i++) {
preLoad[i] = new Image();
preLoad[i].src = Pic[i];
}
function runSlideShow() {
if (document.all) {
document.images.SlideShow.style.filter="blendTrans(duration=3)";
document.images.SlideShow.style.filter="blendTrans(duration=crossFadeDuration)";
document.images.SlideShow.filters.blendTrans.Apply();
}
document.images.SlideShow.src = preLoad[j].src;
if (document.all) {
document.images.SlideShow.filters.blendTrans.Play();
}
j = j + 1;
if (j > (p - 1)) j = 0;
t = setTimeout('runSlideShow()', slideShowSpeed);
}
window.onload=runSlideShow;
//  End -->
</script>
<img src="1.jpg" name='SlideShow' width=100% height=550>