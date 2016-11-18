//https://css-tricks.com/snippets/jquery/horz-scroll-with-mouse-wheel/
var doScroll = function(e) {

  e = window.event || e;
  var delta = Math.max(-1, Math.min(1, (e.wheelDelta || -e.detail)));

  window.scrollBy(-delta * 550, 0);
  e.preventDefault();
};

if (window.addEventListener) {
  window.addEventListener("mousewheel", doScroll, false);
  window.addEventListener("DOMMouseScroll", doScroll, false);
} else {
  window.attachEvent("onmousewheel", doScroll);
}