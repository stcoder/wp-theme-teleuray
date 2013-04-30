<!-- footer -->
<div class="footer">
    <div class="page nuclear">
        <div class="f-l">© Телеканал «ТелеУрай» Мы в эфире с 2010</div>
        <div class="f-r"><a href="#">Понравился дизайн?</a></div>
    </div>
</div>
<!--/ footer -->
<script type="text/javascript">
    (function ($){
        $(function (){
            $('.browse').each(function (){
                var self = this;
                $('input[type=file]', this).change(function (){
                    // remove existing file info
                    $(self).next().remove();
                    // get value
                    var value = $(this).val();
                    // get file name
                    var fileName = value.substring(value.lastIndexOf('/')+1);
                    // get file extension
                    var fileExt = fileName.split('.').pop().toLowerCase();
                    // append file info
                    $('<span style="margin-left: 10px; color: #fff;"></i> ' + value + '</span>').insertAfter(self);
                });
            });
        });
    })(jQuery);
</script>
<?php wp_footer() ?>
</body>
</html>