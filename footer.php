<div id="preloader" class="loader">
    <div class="loader-inner">
        <div class="loader-line-wrap">
            <div class="loader-line"></div>
        </div>
        <div class="loader-line-wrap">
            <div class="loader-line"></div>
        </div>
        <div class="loader-line-wrap">
            <div class="loader-line"></div>
        </div>
        <div class="loader-line-wrap">
            <div class="loader-line"></div>
        </div>
        <div class="loader-line-wrap">
            <div class="loader-line"></div>
        </div>
    </div>
</div>


<!-- jQuery CDN-->

<!-- jQuery CDN end-->
<!-- jQuery-->
<script src="libs/jquery-1.11.2.min.js"></script>
<!-- jQuery end-->

<script src="libs/jquery-ui.min.js"></script>

<script src="libs/jquery.matchHeight-min.js"></script>
<script src="libs/jquery.mousewheel.min.js"></script>
<script src="libs/jquery.viewportchecker.min.js"></script>
<script src="libs/typed.js/lib/typed.min.js"></script>
<script src="libs/vivus.min.js"></script>

<script src="js/main.js"></script>

<script>
    (function (i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
        a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

    ga('create', 'UA-91878547-1', 'auto');
    ga('send', 'pageview');

</script>
<script>
    function getUrlVars() {
        var vars = {};
        var parts = window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi,
            function (m, key, value) {
                vars[key] = value;
            });
        return vars;
    }

    var fType = getUrlVars()["type"],
        messageStatus = getUrlVars()["mail"];

    if (messageStatus == 'send') {

        $('.success').show();
        $('#contact').find('form').hide();

    } else if (messageStatus == 'error') {
        $('.error').show();
    }


</script>
</body>
</html>