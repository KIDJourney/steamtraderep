<html>
<script>
    url ="<?php echo base_url('ajax/donator');?>";
    xmlhttp = new XMLHttpRequest();
    xmlhttp.open("get",url,false);
    xmlhttp.send();
    alert(xmlhttp.responseText);
</script>
</html>
