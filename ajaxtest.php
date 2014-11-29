<html>
<script>
    url = '../donatorinfo.php';
    xmlhttp = new XMLHttpRequest();
    xmlhttp.open('get',url,false);
    xmlhttp.send();
    alert(xmlhttp.responseText);
</script>
</html>