$(document).ready(function () {
  $(".owl-carousel").owlCarousel({
    autoPlayHoverPause: false,
    items: 3,
    margin: 10,
    itemsDesktop: [1199, 3],
    itemsDesktopSmall: [979, 3],
    center: true,
    nav: true,
    dots: true,
    loop: true,
    responsive: {
      0: {
        items: 1,
      },
      600: {
        items: 2,
      },
      1000: {
        items: 3,
      },
    },
  });
});

// Get the modal
var modal = document.getElementById("myModal");

// Get the image and insert it inside the modal - use its "alt" text as a caption
var standardImg = document.querySelector("#standard-img");
var vipImg = document.querySelector("#vip-img");
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");

standardImg.addEventListener("click", () => {
  displayImg(event);
});

vipImg.addEventListener("click", () => {
  displayImg(event);
});

function displayImg(e) {
  console.log(e.target);
  modal.style.display = "block";
  modalImg.src = e.target.src;
  captionText.innerHTML = e.target.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function () {
  modal.style.display = "none";
};
