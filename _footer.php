<!-- Bootstrap core JS-->
<script src="administrator/bootstrap/js/jquery-3.5.1.min.js"></script>
<script src="administrator/bootstrap/js/bootstrap.min.js"></script>

<script src="administrator/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Core theme JS-->
<script src="dist/bootstrap/js/scripts.js"></script>
<!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
<!-- * *                               SB Forms JS                               * *-->
<!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
<!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
<script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
<script src="toastr/toastr.min.js"></script>

<!--ajax-->
<script>
    $("#contactForm").submit(function (e) {
        e.preventDefault();
        var name = $('#name').val();
        var email = $('#email').val();
        var phone = $('#phone').val();
        var message = $('#message').val();
        var url = $("#contactForm").attr('action');
        $.ajax({
            url: url,
            type: 'Post',
            data: {name: name, email: email, phone: phone, message: message}
        }).done(function (data) {
            if (data == 1) {
                alert('درخواست شما با موفقیت ثبت شد.');
                $('#name').val('');
                $('#email').val('');
                $('#phone').val('');
                $('#message').val('');
            } else {
                alert("متاسفانه درخواست شما با خطا رو به روشد. لطفا دوباره تلاش کنید");
            }

        })
    })
</script>
</body>
</html>