const carousel = document.querySelector(".carousel"),
firstImg = carousel.querySelectorAll("img")[0],
arrowIcons = document.querySelectorAll(".wrapper i");

let isDragStart = false, isDragging = false, prevPageX, prevScrollLeft, positionDiff;

const showHideIcons = () => {
    // showing and hiding prev/next icon according to carousel scroll left value
    let scrollWidth = carousel.scrollWidth - carousel.clientWidth; // getting max scrollable width
    arrowIcons[0].style.display = carousel.scrollLeft == 0 ? "none" : "block";
    arrowIcons[1].style.display = carousel.scrollLeft == scrollWidth ? "none" : "block";
}

arrowIcons.forEach(icon => {
    icon.addEventListener("click", () => {
        let firstImgWidth = firstImg.clientWidth + 14; // getting first img width & adding 14 margin value
        // if clicked icon is left, reduce width value from the carousel scroll left else add to it
        carousel.scrollLeft += icon.id == "left" ? -firstImgWidth : firstImgWidth;
        setTimeout(() => showHideIcons(), 60); // calling showHideIcons after 60ms
    });
});

const autoSlide = () => {
    // if there is no image left to scroll then return from here
    if(carousel.scrollLeft - (carousel.scrollWidth - carousel.clientWidth) > -1 || carousel.scrollLeft <= 0) return;

    positionDiff = Math.abs(positionDiff); // making positionDiff value to positive
    let firstImgWidth = firstImg.clientWidth + 14;
    // getting difference value that needs to add or reduce from carousel left to take middle img center
    let valDifference = firstImgWidth - positionDiff;

    if(carousel.scrollLeft > prevScrollLeft) { // if user is scrolling to the right
        return carousel.scrollLeft += positionDiff > firstImgWidth / 3 ? valDifference : -positionDiff;
    }
    // if user is scrolling to the left
    carousel.scrollLeft -= positionDiff > firstImgWidth / 3 ? valDifference : -positionDiff;
}

const dragStart = (e) => {
    // updatating global variables value on mouse down event
    isDragStart = true;
    prevPageX = e.pageX || e.touches[0].pageX;
    prevScrollLeft = carousel.scrollLeft;
}

const dragging = (e) => {
    // scrolling images/carousel to left according to mouse pointer
    if(!isDragStart) return;
    e.preventDefault();
    isDragging = true;
    carousel.classList.add("dragging");
    positionDiff = (e.pageX || e.touches[0].pageX) - prevPageX;
    carousel.scrollLeft = prevScrollLeft - positionDiff;
    showHideIcons();
}

const dragStop = () => {
    isDragStart = false;
    carousel.classList.remove("dragging");

    if(!isDragging) return;
    isDragging = false;
    autoSlide();
}

carousel.addEventListener("mousedown", dragStart);
carousel.addEventListener("touchstart", dragStart);

document.addEventListener("mousemove", dragging);
carousel.addEventListener("touchmove", dragging);

document.addEventListener("mouseup", dragStop);
carousel.addEventListener("touchend", dragStop);
//---------------------------------------------------------------------------

function adjustFadeHeight(newHeight) {
    var fadeElement = document.querySelector('.fade-effect');
    fadeElement.style.height = newHeight + 'px';
}
/* Set the width of the side panel to 250px (show it) */
function openNav() {
    document.getElementById("mySidepanel").style.width = "350px";
}

/* Set the width of the side panel to 0 (hide it) */
function closeNav() {
    document.getElementById("mySidepanel").style.width = "0";
}


// JavaScript to handle the Add to Cart action
document.addEventListener('DOMContentLoaded', function() {
    var addToCartButtons = document.querySelectorAll('.add-to-cart-btn');

    addToCartButtons.forEach(function(button) {
        button.addEventListener('click', function(event) {
            var productId = this.getAttribute('data-id');

            // AJAX request to add the product to the cart
            var xhr = new XMLHttpRequest();
            xhr.open('POST', 'category.php', true);
            xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
            xhr.onload = function() {
                if (this.status === 200) {
                    // Update the side panel with the new cart details
                    updateCartSidePanel(this.responseText);
                }
            };
            xhr.send('id=' + productId);
        });
    });
});

function updateCartSidePanel(cartHtml) {
    // Update the side panel with new cart details
    var sidePanel = document.getElementById('mySidepanel');
    sidePanel.innerHTML = cartHtml;
}


// JavaScript functionality
let slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}

//------------------------------------------------------------------------

// JavaScript for Pop-up Behavior
const popupLinks = document.querySelectorAll('.popup-link');
const popupContainer = document.querySelector('.popup-container');
const popupImage = document.querySelector('.popup-image');
const closePopupButton = document.querySelector('.close-button');

popupLinks.forEach(link => {
   link.addEventListener('click', e => {
      e.preventDefault(); // Prevent default link behavior
      const imageUrl = link.getAttribute('href');
      popupImage.src = imageUrl;
      popupContainer.style.display = 'block';
   });
});

// Close the pop-up when clicking the close button
closePopupButton.addEventListener('click', () => {
   popupContainer.style.display = 'none';
});

// Close the pop-up when clicking outside the image
popupContainer.addEventListener('click', e => {
   if (e.target === popupContainer) {
      popupContainer.style.display = 'none';
   }
});

// Close the pop-up when clicking the close button
closePopupButton.addEventListener('click', () => {
    closePopup();
 });
 
 // Close the pop-up when clicking outside the image
 popupContainer.addEventListener('click', e => {
    if (e.target === popupContainer) {
       closePopup();
    }
 });
 
 // Close the pop-up when clicking on the image
 popupImage.addEventListener('click', () => {
    closePopup();
 });
 
 function closePopup() {
    popupContainer.style.display = 'none';
 }
 