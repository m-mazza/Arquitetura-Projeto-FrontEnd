
<?php if (@$_GET['envio'] == 'true') { ?>
<script>
    $(document).ready(function() {
        setTimeout(function() {
            $('.modal-header p').html('ENVIO COMPLETO').css('color','green');
            $('.modal-body p').html('Seu contato foi enviado com sucesso!').css('text-align','center');
            $('#modal_validation').modal('toggle');
            window.history.pushState("", "", "./");
        }, 2550); 
    })
</script>
<?php };?>
