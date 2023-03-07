// Select the HTML element you want to add a hover effect to
const element = document.querySelector('.wallpaper');

// Add an event listener for mouseover (hover)
element.addEventListener('mouseover', function() {
  // Select the image you want to move
  const image = document.querySelector('.wallpaper-image');
  const element = document.querySelector('.wallpaper');
  const cardCrossway = document.querySelector('.card-crossway');

  // Hide the text
  const text = document.querySelector('.upper-text');
  text.style.display = 'none';
  cardCrossway.style.display = 'grid';

  // Move the image
  image.style.transition = 'transform 0.7s ease';
  image.style.transform = 'translateX(25rem)';

  element.style.transition = "background-color 0.5s ease";
  element.style.backgroundColor = "rgba(255, 255, 255, 0.3)";


});

// Add an event listener for mouseout (when the mouse leaves the element)
element.addEventListener('mouseout', function() {
  // Select the image
  const image = document.querySelector('.wallpaper-image');
  const element = document.querySelector('.wallpaper');
  const cardCrossway = document.querySelector('.card-crossway');

  // Show the text
  const text = document.querySelector('.upper-text');

  text.style.display = 'block';
  cardCrossway.style.display = 'none';

  // Set the image width back to its original value and animate it smoothly
  image.style.transition = 'transform 0.7s ease';
  image.style.transform = 'translateX(0px)';

  element.style.transition = "background-color 0.5s ease";
  element.style.backgroundColor = "rgba(108, 87, 87, 0.336)";

  
});
