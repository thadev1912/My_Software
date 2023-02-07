<!DOCTYPE html>
<html>
<head>
    <title>Laravel 8 Ajax Validation</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
    <style type="text/css">
        .error_msg {color: red;}
    </style>
</head>
<body>
       
<div class="container">
    <h2>Laravel 8 Ajax Validation</h2>
       
    <div class="alert alert-danger print-error-msg" style="display:none">
        <ul></ul>
    </div>
       
    <form>
        {{ csrf_field() }}
        <div class="form-group">
            <label>First Name:</label>
            <input type="text" name="first_name" class="form-control" placeholder="First Name">
        </div>
        <p class="error_msg" id="first_name"></p>
       
        <div class="form-group">
            <label>Last Name:</label>
            <input type="text" name="last_name" class="form-control" placeholder="Last Name">
        </div>
        <p class="error_msg" id="last_name"></p>
       
        <div class="form-group">
            <strong>Email:</strong>
            <input type="text" name="email" class="form-control" placeholder="Email">
        </div>
        <p class="error_msg" id="email"></p>
       
        <div class="form-group">
            <strong>Address:</strong>
            <textarea class="form-control" name="address" placeholder="Address"></textarea>
        </div>
        <p class="error_msg" id="address"></p>
       
        <div class="form-group">
            <button class="btn btn-success btn-submit">Submit</button>
        </div>
    </form>
</div>
       
<script type="text/javascript">
       
    $(document).ready(function() {
        $(".btn-submit").click(function(e){
            e.preventDefault();
       
            var _token = $("input[name='_token']").val();
            var first_name = $("input[name='first_name']").val();
            var last_name = $("input[name='last_name']").val();
            var email = $("input[name='email']").val();
            var address = $("textarea[name='address']").val();
       
            $.ajax({
                url: "{{ route('my.form') }}",
                type:'POST',
                data: {_token:_token, first_name:first_name, last_name:last_name, email:email, address:address},
                success: function(data) {
                    if($.isEmptyObject(data.errors)){
                        $(".error_msg").html('');
                        alert(data.success);
                    }else{
                        let resp = data.errors;
                        for (index in resp) {
                            $("#" + index).html(resp[index]);
                        }
                    }
                }
            });
       
        }); 
    });


</script>


</body>
</html>