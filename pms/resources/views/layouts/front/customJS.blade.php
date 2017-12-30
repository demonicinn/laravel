<script>
var sidebar_scroll = $(".menu-scroll");
sidebar_scroll.slimScroll({
   position: 'right',
   height: 'auto',
   wheelStep: 2,
   touchScrollStep: 100
});
$('div.alert').not('.alert-important').delay(3000).fadeOut(500);
</script>