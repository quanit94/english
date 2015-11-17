<h3>Các dữ liệu này đc lấy từ API (Application Programing Interface)</h3>
<span>My name: </span><span id="name"></span><br>
<span>School: </span><span id="school"></span><br>
<span>Age: </span><span id="age"></span><br>


<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
<script type="text/javascript">
    var base_url = "<?php echo url('getFirst'); ?>";
    $.ajax({
        url: base_url,
        type: "get",
        async: true,
        success:function(dataJson){
            document.getElementById("name").innerHTML = dataJson.name;
            document.getElementById("school").innerHTML = dataJson.school;
            document.getElementById("age").innerHTML = dataJson.age;
            return false;
        },
        error: function(){
            alert("Error Ajax");
            return false;
        }
    });
</script>