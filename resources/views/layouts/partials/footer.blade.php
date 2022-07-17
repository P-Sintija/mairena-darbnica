<footer>
    <div id="footer-grid">
        <footer-grid :menu-left="{{ json_encode($footerMenuLeft) }}"
                     :menu-right="{{ json_encode($footerMenuRight) }}"
                     :social-media="{{ json_encode($socialMedia) }}"
        ></footer-grid>
    </div>
</footer>
