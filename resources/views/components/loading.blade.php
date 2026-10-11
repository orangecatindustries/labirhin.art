<div class="loading-meow">
    <img id="loading-image" src="{{ asset('imgs/labiPoint.webp') }}" alt="">
    <h2 id="loading-text">we're loading sum epikness....</h2>
</div>

<script>
    const loadingTexts = [
        "we're making things awesum,,",
        "we're loading sum epikness....",
        "meow meow mrrrp!",
        "laaaaaaaaaaaaabirhin.",
        "it's revision.. after revision.. after revision..",
        "everything, only from jaya abadi!",
        "let jaya blow your mind!"
    ];
    document.getElementById("loading-text").textContent =
        loadingTexts[Math.floor(Math.random() * loadingTexts.length)];

    const loadingImages = [
        "{{ asset('imgs/WEEWEE.webp') }}",
        "{{ asset('imgs/kepala_lobi.webp') }}",
        "{{ asset('imgs/EXOHEAD.webp') }}",
        "{{ asset('imgs/GIXHEAD.webp') }}",
        "{{ asset('imgs/ERIKAHEAD.webp') }}"
    ];
    const diceroll = Math.floor(Math.random() * 10);
    if (diceroll < loadingImages.length) {
        document.getElementById("loading-image").src = loadingImages[diceroll];
    }

    const loadingscreen = document.querySelector(".loading-meow");
    window.addEventListener('load', () => {
        loadingscreen.style.opacity = "0";
        setTimeout(() => { loadingscreen.style.display = "none"; }, 1000);
    });
</script>