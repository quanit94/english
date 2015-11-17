<h3>Các dữ liệu này đc lấy từ API (Application Programing Interface)</h3>

<table border="solid">
    <tr>
        <td>STT</td>
        <td>Username</td>
        <td>Password</td>
        <td>Level</td>
    </tr>
    <tr>
        <td>1</td>
        <td><span class="username"></span></td>
        <td><span class="password"></span></td>
        <td><span class="level"></span></td>
    </tr>
</table>


<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
<script type="text/javascript">
    var base_url = "<?php echo url('getFinal'); ?>";
    $.ajax({
        url: base_url,
        type: "get",
        async: true,
        success:function(dataJson){
            $('.username').text(dataJson.username);
            $('.password').text(dataJson.password);
            $('.level').text(dataJson.level);
            return false;
        },
        error: function(){
            alert("Error Ajax");
            return false;
        }
    });
</script>