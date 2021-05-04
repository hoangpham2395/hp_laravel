<footer class="footer mt-auto">
    <div class="copyright bg-white">
        <p>
            &copy; <span id="copy-year"></span> Copyright  by {{getAppName()}}.
        </p>
    </div>
    <script>
        var d = new Date();
        var year = d.getFullYear();
        document.getElementById("copy-year").innerHTML = year;
    </script>
</footer>
