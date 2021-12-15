<!-- jQuery CDN -->
<script src="{{ asset('js/jquery.min.js') }}" ></script>
<!-- Bootstrap JS -->
<script src="{{ asset('js/bootstrap.bundle.min.js') }}" ></script>


<script type="text/javascript">
    $(document).ready(function () {

        $('#sidebarCollapse').on('click', function () {
            $('#sidebar, #content').toggleClass('active');
            $('.collapse.in').toggleClass('in');
            $('a[aria-expanded=true]').attr('aria-expanded', 'false');
        });


    });

</script>
