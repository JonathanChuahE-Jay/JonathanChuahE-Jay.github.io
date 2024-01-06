// Scroll effect
document.addEventListener('DOMContentLoaded', function () {
  const fadeElement = document.querySelector('.target-fade');
  const zoomElement = document.querySelector('.target-zoom');

  function handleScroll() {
    const fadeScrollPosition = window.scrollY;
    const fadeTargetOffset = fadeElement.offsetTop;
    const fadeDistance = fadeTargetOffset - fadeScrollPosition;

    if (fadeDistance < window.innerHeight - 50) {
      fadeElement.classList.add('a-fade-in');
    } else {
      fadeElement.classList.remove('a-fade-in');
    }
    const zoomScrollPosition = window.scrollY;
    const zoomTargetOffset = zoomElement.offsetTop;
    const zoomDistance = zoomTargetOffset - zoomScrollPosition;

    if (zoomDistance < window.innerHeight - 50) {
      zoomElement.classList.add('a-zoom-out');
    } else {
      zoomElement.classList.remove('a-zoom-out');
    }
  }


  window.addEventListener('scroll', handleScroll);

});
  function start(){
    alert("dsa");
    let old_password = document.getElementById("oldPassword");
}

// Hamburger
function HamburgerToggle(){
	const hamburgerMenu = document.querySelector(".hamburger_menu");
	const hamburgerButton = document.querySelector(".hamburger_icon");
 	hamburgerButton.classList.toggle("change");
	if(!hamburgerMenu.style.width || hamburgerMenu.style.width === "0px"){
		hamburgerMenu.style.width = "20%";
	}else{
		hamburgerMenu.style.width = "0px"
	}
}
function Home(){
	window.location.href="index.html";
}
function Login_Home(){
    window.location.href="home.php";
}
function About(){
	window.location.href="about.html";
}
function Login_About(){
    window.location.href="about.php";
}
function Contact(){
    window.location.href="contact.html";
}
function Login_Contact(){
    window.location.href="contact.php";
}
function ProfilePage(){
    window.location.href="profile.php";
}
function Login_JoinUs(){
    window.location.href= "join_us.php";
}
function Shop(){
    window.location.href="shopping.html";
}
function Login_Shop(){
    window.location.href="shopping.php";
}


// Profile
function Profile() {
	const hamburgerMenu = document.querySelector(".hamburger_menu");
    const profileWrapper = document.querySelector(".profile-wrapper");
    const profileBlur = document.querySelector(".profile-blur");
    const hamburgerButton = document.querySelector(".hamburger_icon");
        profileWrapper.style.display = "flex";
        profileBlur.style.filter ="blur(10px)";
        hamburgerMenu.style.width = "0px";
        hamburgerButton.classList.toggle("change"); 
}
function profileClose(){
	const profileWrapper = document.querySelector(".profile-wrapper");
	const profileBlur = document.querySelector(".profile-blur");
    profileWrapper.style.display = "none";
    profileBlur.style.filter = "none";
}
function Register(){
	const profileWrapper = document.querySelector(".profile-wrapper");
	const hamburgerMenu = document.querySelector(".hamburger_menu");
    const registerWrapper = document.querySelector(".register-wrapper");
    registerWrapper.style.display = "flex";
    profileWrapper.style.display = "none";
    hamburgerMenu.style.width = "0px"
}
function registerBack(){
	const profileWrapper = document.querySelector(".profile-wrapper");
	profileWrapper.style.display = "flex";
	const registerWrapper = document.querySelector(".register-wrapper");
	registerWrapper.style.display = "none";
}
function registerClose(){
	const registerWrapper = document.querySelector(".register-wrapper");
	const profileBlur = document.querySelector(".profile-blur");
    registerWrapper.style.display = "none";
    profileBlur.style.filter = "none";
}

// Slides
let slideIndex = 1;
showSlides(slideIndex);
function currentSlide(n) {
  	showSlides(slideIndex = n);
}
function showSlides(n) {
  	let i;
  	let slides = document.getElementsByClassName("mySlides");
  	let dots = document.getElementsByClassName("dot");
  	if (n > slides.length) {slideIndex = 1}

  	for (i = 0; i < slides.length; i++) {
  	  slides[i].style.display = "none";
  	}
  	for (i = 0; i < dots.length; i++) {
  	  dots[i].className = dots[i].className.replace(" active", "");
  	}
  	slides[slideIndex-1].style.display = "block";
  	dots[slideIndex-1].className += " active";

  	slideIndex++;
    if (slideIndex > slides.length) {
        slideIndex = 1;
    }

}
setInterval(showSlides, 5000);


//Aritcle links
function A1(){
    window.location.href="free_palestine.html";
}
function A2(){
    window.location.href="donate_blood.html";
}
function A3(){
    window.location.href="donate_clothes.html";
}
function A4(){
    window.location.href="funding_in_ghana.html";
}
function A5(){
    window.location.href="orphanage_donation.html";
}


function LA1(){
    window.location.href ="free_palestine.php";
}
function LA2(){
    window.location.href="donate_blood.php";
}
function LA3(){
    window.location.href="donate_clothes.php";
}
function LA4(){
    window.location.href="funding_in_ghana.php";
}
function LA5(){
    window.location.href="orphanage_donation.php";
}






// DONATE
// ||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||
function donateArrow() {
    const cardFront = document.querySelector(".donate-wrapper");
    cardFront.classList.toggle('flipped');
}

function showTextInput() {
    var selectElement = document.getElementById("amount");
    var otherAmountInput = document.getElementById("otherAmount");

    if (selectElement.value === "Others") {
        otherAmountInput.style.display = "inline-block";
    } else {
        otherAmountInput.style.display = "none";
    }
}

// Shop
// |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||

function changeImage() {
    let selectedImage = document.querySelector('input[name="image_header"]:checked');
    if (selectedImage) {
        let imgElement = document.getElementById('headerImage');
        if (imgElement) {
            imgElement.src = selectedImage.value;
        }
    }
}
// item
function decrement(button){
    let quantityElement = button.nextElementSibling;
    let currentQuantity = parseInt(quantityElement.textContent);
    if(currentQuantity>0){
        quantityElement.textContent = currentQuantity -1;
    }

}
function increment(button){
    let quantityElement = button.previousElementSibling;
    let currentQuantity = parseInt(quantityElement.textContent,);
    quantityElement.textContent = currentQuantity + 1;
}
function shopATC(button) {
    let sizeElement = button.parentElement.querySelector('.shop-item-tag input[type="radio"]:checked');
    let size = sizeElement.value;
    let quantityElement = button.parentElement.querySelector(".shop-item-quantity p");
    let quantity = parseInt(quantityElement.textContent);
    alert("Adding " + quantity + " with size of " + size + " items to the cart.");
    quantityElement.textContent = "0";
}    
// filter
function hideAllItems() {
    let allItems = document.querySelectorAll(".shop-item");
    allItems.forEach(item => {
    item.style.display = "none";
    });
}

function showItems(items) {
    items.forEach(item => {
    item.style.display = "block";
    });
}

function shopAll(){
    let allItems = document.querySelectorAll(".shop-item");
    allItems.forEach(item => {
    item.style.display = "block";
    });
}
function shopShirt(){
    hideAllItems();
    let shirts = document.querySelectorAll(".shirt");
    showItems(shirts);
}
function shopKC(){
    hideAllItems();
    let Keychain = document.querySelectorAll(".KC");
    showItems(Keychain);
}
function shopAccessories(){
    hideAllItems();
    let accessories = document.querySelectorAll(".accessories");
    showItems(accessories);
}
function filterItems(){
    let searchInput = document.getElementById("searchInput").value.toLowerCase();
    let allItems = document.querySelectorAll(".shop-item");
    allItems.forEach(item => {
        let itemName = item.querySelector(".shop-item h4").textContent.toLowerCase();
        if (itemName.includes(searchInput)) {
            item.style.display = "block";
        } else {
            item.style.display = "none";
        }
    });
}
// ||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||\
// Profile main
var deleteEventConfirmationVariable;
function deleteEventConfirmation(input){
    event.preventDefault();
    let confirmation = document.querySelector(".profile-confirm-delete-wrapper");
    let confirmationEventName = document.getElementById("profile-confirm-text");
    confirmation.style.display = "flex";
    confirmationEventName.textContent = input;
    deleteEventConfirmationVariable = input;
}
function deleteEventClose(){
    let confirmation = document.querySelector(".profile-confirm-delete-wrapper");
    confirmation.style.display = "none";
}
function deleteEvent()
{
    event.preventDefault();
    let Event;
    let confirmation = document.querySelector(".profile-confirm-delete-wrapper");
    if(deleteEventConfirmationVariable==="Donation to Orphanage"){
        Event = "event1";
    }else if(deleteEventConfirmationVariable === "Clothes Donation"){
        Event = "event2";
    }else if(deleteEventConfirmationVariable === "Blood Donation"){
        Event = "event3";
    }else if(deleteEventConfirmationVariable === "Funding for Palestine"){
        Event = "event4";
    }
    let id = document.getElementById(Event);
    if (id) {
        id.textContent = "";
    }
    confirmation.style.display = "none";
}

function logoutEventConfirmation(){
    event.preventDefault();
    let confirmation = document.querySelector(".profile-confirm-logout-wrapper");
    confirmation.style.display = "flex";
}
function logoutClose() {
    document.querySelector(".profile-confirm-logout-wrapper").style.display = "none";
}