    <footer>
        <ul>
            <li>olympbooks.com</li>
            <li><a href="#">home</a></li>
            <li>© Mayo 21, 2023</li>
        </ul>
    </footer>

    <script>
        const toggleButton = document.getElementsByClassName("toggle-button")[0];
        const navbarLinks = document.getElementsByClassName("navbar-links")[0];

        toggleButton.addEventListener("click", () => {
        navbarLinks.classList.toggle("active");
        });
    </script>
</body>
</html>