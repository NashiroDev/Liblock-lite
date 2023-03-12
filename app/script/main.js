
const element = document.querySelector('.wallpaper');

// Add an event listener for mouseover (hover)
element.addEventListener('mouseover', function() {


  const image = document.querySelector('.wallpaper-image');
  const element = document.querySelector('.wallpaper');
  const cardCrossway = document.querySelector('.card-crossway');

  const text = document.querySelector('.upper-text');
  text.style.width = '0%';
  text.style.opacity = '0';
  cardCrossway.style.width = '25%';
  cardCrossway.style.opacity = '1';

  image.style.transition = 'transform 0.7s ease';
  image.style.transform = 'translateX(40rem)';

  element.style.backgroundColor = "rgba(0, 0, 0, 0)";

});

// Add an event listener for mouseout (when the mouse leaves the element)
element.addEventListener('mouseout', function() {

  const image = document.querySelector('.wallpaper-image');
  const element = document.querySelector('.wallpaper');
  const cardCrossway = document.querySelector('.card-crossway');

  const text = document.querySelector('.upper-text');

  text.style.display = 'block';
  text.style.width = '100%';
  text.style.opacity = '1';
  cardCrossway.style.width = '0';
  cardCrossway.style.opacity = '0';

  image.style.transition = 'transform 0.7s ease';
  image.style.transform = 'translateX(0px)';

  element.style.backgroundColor = "var(--secondary)";
  
});
