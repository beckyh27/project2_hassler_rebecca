
var scene = document.getElementById('scene');
var parallax = new Parallax(scene);



$('.paralax-background').parallaxBackground({
event: 'mouse_move',
animation_type: 'shift',
animate_duration: 2
});
