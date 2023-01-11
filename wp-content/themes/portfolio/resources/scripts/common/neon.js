function enableNeon (element) {
  element.classList.add('neon-box');
}

function disableNeon (element) {
  element.classList.remove('neon-box');
}

function isInViewport(element) {
  const rect = element.getBoundingClientRect();
  /*
  return (
      rect.top >= 0 &&
      rect.left >= 0 &&
      rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
      rect.right <= (window.innerWidth || document.documentElement.clientWidth)
  );
  */

  const middleWindow = (window.innerHeight || document.documentElement.clientHeight)/2;

  return (
    rect.top >= 0 &&
    rect.left >= 0 &&
    rect.y <= middleWindow &&
    rect.right <= (window.innerWidth || document.documentElement.clientWidth)
  );
}

function init() {
  let who = document.getElementById('home-who');
  let neonObjs = document.querySelectorAll('.neon-object');

  window.addEventListener('scroll', function() {
    isInViewport(who) ? enableNeon(who) : disableNeon(who);

    neonObjs.forEach((neonObj) => {
      isInViewport(neonObj) ? enableNeon(neonObj) : disableNeon(neonObj);
    })
  });

}

export default {
  init,
}

