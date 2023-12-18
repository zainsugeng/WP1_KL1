<!-- -----JAVASCRIPT FOR TOGGLE MENU------ -->
<script>
    var navLinks = document.getElementById("navLinks");

    function showMenu() {
        navLinks.style.right = "0";
    }
    function hideMenu() {
        navLinks.style.right = "-200px";
    }
    window.addEventListener("scroll", function () {
        var navbar = document.querySelector(".navbar.fixed-top");
        if (window.scrollY > 0) {
            navbar.classList.add("scrolled");
        } else {
            navbar.classList.remove("scrolled");
        }
    });
</script>

<!-- --------footer--------- -->

<section class="footer">
        <div class="icons">
            <i class="fa fa-facebook"></i>
            <i class="fa fa-twitter"></i>
            <i class="fa fa-instagram"></i>
            <i class="fa fa-linkedin"></i>
        </div>
        <p>Made with <i class="fa fa-heart-o"></i> kelompok 1</p>
    </section>
    
</body>

</html>