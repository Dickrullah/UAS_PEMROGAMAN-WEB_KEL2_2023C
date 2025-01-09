function scrollToTop() {
    window.scrollTo({ top: 0, behavior: 'smooth' }); // Scroll ke atas dengan efek halus
}

let slideIndex = 0;
showSlides();

function showSlides() {
    let slides = document.getElementsByClassName("slide");
    
    // menyembunyikan slide
    for (let i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";  
    }

    // ke next slide
    slideIndex++;
    
    // kembali ke gambar utama jika sudah masuk yang terakhir
    if (slideIndex > slides.length) {
        slideIndex = 1;
    }
    
    // menampilkan slide saat ini
    slides[slideIndex - 1].style.display = "block";
    
    // mengatur agar 3 detik
    setTimeout(showSlides, 3000); 
}