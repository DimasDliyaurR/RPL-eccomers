// Dropdown Effect
const drop = document.querySelector("#dropdown");
const lists = document.querySelector("#lists");
const category = document.querySelector("#menu-category");

drop.addEventListener("mouseover", () => {
    lists.classList.add("over");
    category.classList.add("change-color");
});

drop.addEventListener("mouseout", () => {
    lists.classList.remove("over", "change-color");
    category.classList.remove("change-color");
});

// Account Click
const boxAcc = document.querySelector("#box-acc");
const acc = document.querySelector("#acc");

boxAcc.addEventListener("click", () => {
    acc.classList.toggle("raise");
});

document.addEventListener("click", function (e) {
    if (!boxAcc.contains(e.target) && !acc.contains(e.target)) {
        acc.classList.remove("raise");
    }
});

// Carousel
// Get the DOM elements for the image carousel
const wrapper = document.querySelector(".left-side"),
    carousel = document.querySelector(".carousel"),
    images = document.querySelectorAll("img"),
    buttons = document.querySelectorAll(".btn");

let imageIndex = 1,
    intervalId;

// Define function to start automatic image slider
const autoSlide = () => {
    // Start the slideshow by calling slideImage() every 2 seconds
    intervalId = setInterval(() => slideImage(++imageIndex), 2000);
};
// Call autoSlide function on page load
autoSlide();

// A function that updates the carousel display to show the specified image
const slideImage = () => {
    // Calculate the updated image index
    imageIndex =
        imageIndex === images.length
            ? 0
            : imageIndex < 0
            ? images.length - 1
            : imageIndex;
    // Update the carousel display to show the specified image
    carousel.style.transform = `translate(-${imageIndex * 100}%)`;
};

// A function that updates the carousel display to show the next or previous image
const updateClick = (e) => {
    // Stop the automatic slideshow
    clearInterval(intervalId);
    // Calculate the updated image index based on the button clicked
    imageIndex += e.target.id === "next" ? 1 : -1;
    slideImage(imageIndex);
    // Restart the automatic slideshow
    autoSlide();
};

// Add event listeners to the navigation buttons
buttons.forEach((button) => button.addEventListener("click", updateClick));

// Add mouseover event listener to wrapper element to stop auto sliding
wrapper.addEventListener("mouseover", () => clearInterval(intervalId));
// Add mouseleave event listener to wrapper element to start auto sliding again
wrapper.addEventListener("mouseleave", autoSlide);

// Detail Page
// Warna
const warna = document.querySelectorAll(".part-warna");
const tipe = document.querySelectorAll(".part-tipe");

let currentColor = 1;

warna.forEach((warna, colIndex) => {
    warna.addEventListener("click", () => {
        currentColor = colIndex;

        document
            .querySelector(".warna-active")
            .classList.remove("warna-active");

        warna.classList.add("warna-active");
    });
});

// Tipe
let currentTipe = 1;

tipe.forEach((tipe, colIndex) => {
    tipe.addEventListener("click", () => {
        currentTipe = colIndex;

        document.querySelector(".tipe-active").classList.remove("tipe-active");

        tipe.classList.add("tipe-active");
    });
});

// Quantity
const quan = document.getElementById("quan");
const plus = document.getElementById("plus");
const minus = document.getElementById("minus");

let currentQuan = 1;
quan.innerHTML = currentQuan;

plus.addEventListener("click", () => {
    currentQuan += 1;
    quan.innerHTML = currentQuan;
});

min.addEventListener("click", () => {
    if (currentQuan === 1) {
        quan.innerHTML = 1;
    } else {
        currentQuan -= 1;
        quan.innerHTML = currentQuan;
    }
});

// Rating
// Mengambil referensi ke elemen-elemen HTML yang diperlukan
const ratingStars = document.querySelectorAll("#ratingStars svg");
const ratingValue = document.getElementById("ratingValue");
const currentRating = document.getElementById("currentRating");
let index = 0;

// Menambahkan event listener untuk setiap bintang
ratingStars.forEach((star, index) => {
    star.addEventListener("mouseover", () => {
        highlightStars(index);
    });

    star.addEventListener("mouseout", () => {
        resetStars();
    });
});

// Mewarnai bintang sesuai rating yang dihover
function highlightStars(index) {
    ratingStars.forEach((star, i) => {
        if (i <= index) {
            star.classList.add("fill-yellow-500");
        } else {
            star.classList.remove("fill-yellow-500");
        }
    });
}

// Mengatur ulasan rating kembali ke nilai awal saat keluar dari bintang
function resetStars() {
    ratingStars.forEach((star, index) => {
        star.classList.remove("fill-yellow-500");
    });
}

// Mengosongkan ulasan rating saat halaman dimuat
resetStars();
