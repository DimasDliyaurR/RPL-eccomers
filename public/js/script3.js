// Dropdown Effect
const drop = document.querySelector('#dropdown');
const lists = document.querySelector('#lists');
const category = document.querySelector('#menu-category');

drop.addEventListener('mouseover', ()=>{
  lists.classList.add('over');
  category.classList.add('change-color');
});

drop.addEventListener('mouseout', ()=>{
  lists.classList.remove('over', 'change-color');
  category.classList.remove('change-color');
});

// Account Click
const boxAcc = document.querySelector('#box-acc');
const acc = document.querySelector('#acc');

boxAcc.addEventListener('click', ()=>{
  acc.classList.toggle('raise');
});

document.addEventListener('click', function(e){
  if (!boxAcc.contains(e.target) && !acc.contains(e.target)){
    acc.classList.remove('raise');
  }
});

// Countdown
  // Memperbarui countdown setiap detik
// Tanggal dan waktu akhir countdown (24 jam dari sekarang)
var countDownDate = new Date().getTime() + (24 * 60 * 60 * 1000);

// Memperbarui countdown setiap detik
var countdown = setInterval(function() {

  // Dapatkan tanggal dan waktu saat ini
  var now = new Date().getTime();

  // Hitung selisih antara waktu sekarang dan waktu akhir countdown
  var distance = countDownDate - now;

  // Hitung waktu dalam jam, menit, dan detik
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  // Tampilkan countdown dalam elemen dengan id "countdown"
  document.getElementById("count").innerHTML = hours + ":" + minutes + ":" + seconds;

  // Jika waktu countdown telah habis, tampilkan pesan
  if (distance < 0) {
    clearInterval(countdown);
    document.getElementById("count").innerHTML = "Transaksi Kadaluarsa";
  }
}, 1000);
