
<footer class="footer bg-dark text-light">
        <div class="container text-center">
            <p>&copy; <script>
                    document.write(new Date().getFullYear())
                </script> Tous droits réservés Copyright Inc.</p>
        </div>
        <button onclick="topFunction()" id="myBtn" title="Go to top" class="btn btn-dark" style="position: fixed; bottom: 20px; right: 20px;">
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-up">
        <line x1="12" y1="19" x2="12" y2="5"></line>
        <polyline points="5 12 12 5 19 12"></polyline>
    </svg>
</button>
<div class="language-switch">
    <a href="{{ route('set-locale', ['locale' => 'fr']) }}">FRANÇAIS</a> | <a href="{{ route('set-locale', ['locale' => 'en']) }}">ENGLISH</a>
</div>

    </footer>