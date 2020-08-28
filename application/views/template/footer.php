<footer class="footer">
    <div class="container-fluid bg-dark mt-5" style="height: 3rem;">
        <div class="container-xl">
            <div class="row">
                <div class="col-lg-12">

                </div>
            </div>
        </div>
    </div>
</footer>

<script src="<?= base_url('asset/js/'); ?>jquery.min.js"></script>
<script src="<?= base_url('asset/js/'); ?>popper.js"></script>
<script src="<?= base_url('asset/js/'); ?>bootstrap.min.js"></script>
<script src="<?= base_url('asset/datepicker/js/'); ?>bootstrap-datepicker.min.js"></script>
<script type="text/javascript">
    $(function() {
        $(".datepicker").datepicker({
            format: 'yyyy-mm-dd',
            autoclose: true,
            todayHighlight: true,
        });
    });
</script>
</body>

</html>