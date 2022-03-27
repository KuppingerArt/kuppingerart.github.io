
<script src="js/imagesloaded.pkgd.min.js"></script>
<script src="js/gallery.js"></script>
<script src="js/app.js"></script>
<script>
  var container = document.querySelector('#masonry');
  var masonry = new Masonry(container, {
    columnWidth: 50,
    itemSelector: '.item'
  });
</script>
</body>
</html>