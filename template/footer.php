

<script src="<?php echo $url; ?>assets/vendor/jquery.js"></script>
<script src="<?php echo $url; ?>assets/vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
<script src="<?php echo $url; ?>assets/js/app.js"></script>
<script>

       let currentPlace = location.href;
       $(".menu-item-link").each(function () {
            let links = $(this).attr("href");
            if (currentPlace === links){
                $(this).addClass("active");
            }
       })

</script>

</body>
</html>