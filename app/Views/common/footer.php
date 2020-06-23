
<!-- SCRIPTS -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

<!-- custom -->
<script>
    $(document).on('change', '.cat_select', function (e) {
        const select_form = $(this).parent();
        const select = $(this);
        const select_val = select.val();
        select.nextAll().remove();

        // make the ajax request
        $.ajax({
            url : "/get-sub-cats/" + select_val,
            success : function (response) {
                select_form.append(response);
            }
        })


    });
</script>


</body>
</html>
