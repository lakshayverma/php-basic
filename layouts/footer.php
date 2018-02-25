<?php
if (isset($custom_footer) && $custom_footer) :
?>
<?php
else :
?>
    <hr>
    <footer class="container-fluid" id="page_footer">
        <address class="col-md-3">
            <h3><?= DEVELOPER_NAME; ?></h3>
            <br/>
            <br/>
            <a class="btn btn-primary"
                href="mailto:<?= DEVELOPER_MAIL; ?>?subject=Support&body=Sent from <?= $_SERVER['REMOTE_ADDR']; ?>"
            >
                <span class="glyphicon glyphicon-envelope"></span>
                <strong><?= DEVELOPER_NAME; ?></strong>
            </a>
        </address>


    </footer>

<?php endif; ?>

<script>
    $('select').select2();


    jQuery.validator.addMethod("greaterThan",
            function (value, element, params) {
                if (!/Invalid|NaN/.test(new Date(value))) {
                    return new Date(value) > new Date($(params).val());
                }
                return isNaN(value) && isNaN($(params).val())
                        || (Number(value) > Number($(params).val()));
            },
            function (params) {
                return "Date is required to be greater than " + $(params).val().replace("T", " ");
            });

</script>


</body>
</html>

<?php $database->close_connection(); ?>
