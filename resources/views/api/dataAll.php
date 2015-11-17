<h3>Các dữ liệu này đc lấy từ API (Application Programing Interface)</h3>

<table border="solid" id="dataTable">
    <tr>
        <td>STT</td>
        <td>Username</td>
        <td>Password</td>
        <td>Level</td>
    </tr>

</table>


<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
<script type="text/javascript">
    var base_url = "<?php echo url('getAll'); ?>";
    $.ajax({
        url: base_url,
        type: "get",
        async: true,
        success:function(dataJson){
            // alert(A);
            for(i=0; i< dataJson.length;i++){

                $('#dataTable').append(            
                    "<tr>"+
                        "<td>"+ (i+1) +"</td>"+
                        "<td>"+dataJson[i].username+"</td>"+
                        "<td>"+dataJson[i].password+"</td>"+
                        "<td>"+dataJson[i].level+"</td>"+
                    "</tr>"
                );
            }
            return false;
        },
        error: function(){
            alert("Error Ajax");
            return false;
        }
    });
</script>