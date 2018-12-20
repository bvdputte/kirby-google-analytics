<?php if (c::get('ga.propId') !== ""): ?>
<script async src="https://www.googletagmanager.com/gtag/js?id=<?= c::get('ga.propId'); ?>"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', '<?= c::get('ga.propId'); ?>');
</script>
<?php endif; ?>