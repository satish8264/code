<script>
/*
* HOW TO ABORT A PREVIOUS AJAX REQUEST AND CALL NEW ONE IN JQUERY?
* our handler to the ajax request
*/

var xhr = null;
function goAjax()
{
        /* if there is a previous ajax request, then we abort it and then set xhr to null */
        if( xhr != null ) {
                xhr.abort();
                xhr = null;
        }
        /* and now we can safely make another ajax request since the previous one is aborted */
        xhr = $.ajax({
                type: “POST”,
                url: “/some/url”,
                data: “variables=whatever&var2=something”,
                success: function(msg) {
                        /* handle the ajax response */
                }
        });
}
</script>