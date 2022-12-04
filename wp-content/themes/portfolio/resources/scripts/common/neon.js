function enableNeon (element) {
  element.classList.add('neon-box');
}

function disableNeon (element) {
  element.classList.remove('neon-box');
}

function isInViewport(element) {
  const rect = element.getBoundingClientRect();
  return (
      rect.top >= 0 &&
      rect.left >= 0 &&
      rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
      rect.right <= (window.innerWidth || document.documentElement.clientWidth)
  );
}

function init() {
  console.log('Neon JS');
  let who = document.getElementById('home-who');

  window.addEventListener('scroll', function() {
    isInViewport(who) ? enableNeon(who) : disableNeon(who);
  });
}

export default {
  init,
}

