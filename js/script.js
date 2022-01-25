// event saat link di klik
/*  
    $ = jQuery
    ('.pagescroll') = element yang memiliki class pagescroll
    .on = ketika
    'click' = di klik
    function() = jalankan fungsi ini 
    {...} = tempat menampung fungsi 
*/
$('.pagescroll').on('click',function(event){
    // function(e) digunakan untuk menandai event


    // console Log untuk debugging dengan tampilan pada console
    // console.log('OK');


    /*
    Ambil isi href
    var = membuat/memanggil variabel
    href = nama variabel
    $ = jQuery
    this = cari elemen yang bersangkutan
    .attr = untuk mengambil isi dari atribut
    'href' = nama atribut
    */
    var dst = $(this).attr('href');
    // console.log(dst);


    // Tangkap isi dst
    var elementdst = $(dst);
    // console.log(elementdst);

    /*
    .offset() = untuk menghitung jarak dari elementdst
    .top = ke bagian paling atas
    console.log(elementdst.offset().top);
    */

    /*
    $('html,body') = mencari elemen html kemudian elemen body dengan jQuery
    .scrollTop = untuk mengetahui jarak sebuah elemen ke bagian paling atas sesuai scroll
    () = untuk menjalankanfungsi
    */
    console.log($('html,body').scrollTop());


    /* 
    Rubah ScrollTop
    Membuat halaman loncat ke posisi (...) saat link di klik
    (...) untuk mendapatkan jarak yg diperoleh dengan var elemendst
    */
    // $('html,body').scrollTop(elementdst.offset().top);
    
    /*
    ScrollTop dengan animasi 
    function .animate
    ,1000 = untuk mengatur kecepatan dalam satuan milisekon
    ,swing = gerakan animasinya
    ,easeInOutExpo = sama seperti swing, namun harus memiliki jquery easing terlebih dahulu
    */
    $('html,body').animate({
        scrollTop : elementdst.offset().top-50
    }, 1300, 'easeInOutExpo');

    // e.preventDefault(); digunakan untuk membajak dan mematikan fungsi hyperlink
    event.preventDefault();

})


// Paralax


// About
// .on('load') = event untuk menangkap pada saat halaman dibuka
$(window).on('load', function() {
    $('.pKiri').addClass('pMuncul');
    $('.pKanan').addClass('pMuncul');
});



// skills
// .scroll = event untuk menangkap pada saat halaman di scroll
$(window).scroll(function() {
    // membuat variabel bernama wScroll = cari elemen di sini kemudian tangkap scrolltopnya
    var wScroll = $(this).scrollTop();

    // console.log(wScroll);

    // jumbotron
    // menangkap elemen img pada jumbotron menggunakan jQuery
    // kemudian merubah fungsi css
    // transform = properti css untuk merubah pergerakan
    // translate = mentranslasikan
    // (0px...) = koordinat sumbu x
    // +wScroll/4.5+ = sumbu y mengambil dari variabel wScroll dan dibagi 4.5
    $('.jumbotron img').css({
        'transform': 'translate(0px,'+wScroll/5+'%)'
    });

    $('.jumbotron h1').css({
        'transform': 'translate(0px,'+wScroll/2.2+'%)'
    });

    $('.jumbotron p').css({
        'transform': 'translate(0px,'+wScroll/1.5+'%)'
    });

    // skills
    if(wScroll > $('.skills').offset().top - 250) {
        // console.log('OK');
        
        // each = mengambil setiap elemen yang ada pada class thumbnail dalam class skills
        // i = index, misal di dalam thumbnail ada 6 elemen maka indexnya ada 6 (1-6) (index dimulai dari 0)
        $('.skills .thumbnail').each(function(i){
            // setTimeout = memberikan waktu untuk menunggu untuk menjalankan sesuatu yang ada di dalamnya
            // di dalam setTimeout akan ada fungsi
            // setelah fungsi tambahkan ',' lalu isi waktu tunggunya. Misalnya 2000 (2 detik)
            setTimeout(function() {
                console.log('OK');
                
                // eq = untuk menentukan elemen yang keberapa
                /* addClass = untuk menambahkan class */
                $('.skills .thumbnail').eq(i).addClass('muncul');

            // 300 * (i+1) = waktu 300 detik berlipat untuk setiap i. misal i1 = 300, i2 = 600, i3 = 900, dst
            // gunanya +1 = karna setiap index diawali angka 0, agar hasilnya 1 maka perlu ditambah 1
            }, 300 * (i+1)); 


        });

        
    }

})

// Lightbox
lightbox.option({
    'resizeDuration': 200,
    'wrapAround': true
  })