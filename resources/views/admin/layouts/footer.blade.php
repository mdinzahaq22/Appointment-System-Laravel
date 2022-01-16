<footer class="footer">
    <div class="w-100 clearfix">
        <span class="float-none float-sm-right mt-1 mt-sm-0 text-center">Created by <i
                class="fa fa-heart text-danger"></i> by <a href="http://lavalite.org/" class="text-dark"
                target="_blank">Injamam</a></span>
    </div>
</footer>

</div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script>
    window.jQuery || document.write('<script src="src/js/vendor/jquery-3.3.1.min.js"><\/script>')

</script>
<script src="{{ asset('template/plugins/popper.js/dist/umd/popper.min.js') }}"></script>
<script src="{{ asset('template/plugins/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('template/plugins/perfect-scrollbar/dist/perfect-scrollbar.min.js') }}"></script>
<script src="{{ asset('template/plugins/screenfull/dist/screenfull.js') }}"></script>
<script src="{{ asset('template/plugins/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('template/plugins/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('template/plugins/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('template/plugins/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js') }}"></script>
<script src="{{ asset('template/plugins/jvectormap/jquery-jvectormap.min.js') }}"></script>
<script src="{{ asset('template/plugins/jvectormap/tests/assets/jquery-jvectormap-world-mill-en.js') }}"></script>
<script src="{{ asset('template/plugins/moment/moment.js') }}"></script>
<script src="{{ asset('template/plugins/tempusdominus-bootstrap-4/build/js/tempusdominus-bootstrap-4.min.js') }}">
</script>
<script src="{{ asset('template/plugins/d3/dist/d3.min.js') }}"></script>
<script src="{{ asset('template/plugins/c3/c3.min.js') }}"></script>
<script src="{{ asset('template/js/tables.js') }}"></script>
<script src="{{ asset('template/js/widgets.js') }}"></script>
<script src="{{ asset('template/js/charts.js') }}"></script>
<script src="{{ asset('template/dist/js/theme.min.js') }}"></script>
{{-- Format date for date picker --}}
<script type="text/javascript">
    $(document).ready(function() {
        $("#datepicker").datetimepicker({
            format: 'MM-DD-YYYY'
        })
    })

</script>
<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
<script>
    (function(b, o, i, l, e, r) {
        b.GoogleAnalyticsObject = l;
        b[l] || (b[l] =
            function() {
                (b[l].q = b[l].q || []).push(arguments)
            });
        b[l].l = +new Date;
        e = o.createElement(i);
        r = o.getElementsByTagName(i)[0];
        e.src = 'https://www.google-analytics.com/analytics.js';
        r.parentNode.insertBefore(e, r)
    }(window, document, 'script', 'ga'));
    ga('create', 'UA-XXXXX-X', 'auto');
    ga('send', 'pageview');

</script>
</body>

</html>
