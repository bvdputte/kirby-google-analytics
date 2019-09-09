<?php if (option("bvdputte.ga.propId") !== ""): ?>
<script async src="https://www.googletagmanager.com/gtag/js?id=<?= option("bvdputte.ga.propId") ?>"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', '<?= option("bvdputte.ga.propId") ?>');
</script>
<?php endif; ?>