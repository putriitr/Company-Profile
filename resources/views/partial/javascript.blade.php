<script src="{{asset('template/js/jquery.min.js')}}"></script>
<script src="{{asset('template/js/popper.min.js')}}"></script>
<script src="{{asset('template/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('template/js/jquery-3.0.0.min.js')}}"></script>
<script src="{{asset('template/js/plugin.js')}}"></script>
<script src="{{asset('template/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
<script src="{{asset('template/js/custom.js')}}"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
    const aboutLink = document.getElementById('about-link');
    const aboutSection = document.getElementById('about');

    aboutLink.addEventListener('click', function (event) {
        event.preventDefault(); // Prevent default anchor behavior

        window.scrollTo({
            top: aboutSection.offsetTop,
            behavior: 'smooth' // Smooth scroll
        });

        // Add active class to the About link
        document.querySelectorAll('.nav-link').forEach(link => link.classList.remove('active'));
        aboutLink.classList.add('active');
    });
});
</script>

<script>
    document.getElementById('searchForm').addEventListener('submit', function(event) {
        event.preventDefault(); // Mencegah pengiriman form standar

        var query = document.getElementById('searchInput').value.trim().toLowerCase(); // Ambil nilai dari input dan hapus spasi di sekitar
        var sections = document.querySelectorAll('.content-section'); // Ambil semua elemen dengan kelas .content-section

        var found = false;

        sections.forEach(function(section) {
            if (section.textContent.toLowerCase().includes(query)) {
                section.scrollIntoView({ behavior: 'smooth', block: 'start' });
                found = true;
                return; // Keluar dari loop setelah menemukan elemen yang cocok
            }
        });

        if (!found) {
            alert('Tidak ada elemen yang cocok ditemukan');
        }
    });
</script>
