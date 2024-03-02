//TypeIt in jQuery
jQuery(document).ready(function($) {
  new TypeIt("#type-it", {
      strings: ["GEOID, Geodetski inženiring d.o.o."],
      speed: 200,
      waitUntilVisible: true,
      loop: false,
      html: true,
  })
  .go();
});

// Contact form

saveBtn.addEventListener('click', () => {
  console.log('Button clicked');
  const MailInput = document.getElementById('mail');
    const FirstInput = document.getElementById('fname');
    const LastInput = document.getElementById('sname');
    const MsgInput = document.getElementById('msg');
    const saveBtn = document.getElementById('saveBtn');

    saveBtn.addEventListener('click', () => {
      const name = FirstInput.value;
      const email = MailInput.value;
      const sname = LastInput.value;
      const additionalData = MsgInput.value;

      // Combine data into an object to store in localStorage
      const userData = { name, email, sname, additionalData };
      localStorage.setItem('savedUserData', JSON.stringify(userData));
      window.location.href = 'admin.html'; // Redirect to admin page after saving data
    });
});


// Menu

function toggleMenu() {
  document.getElementById("items-menu-mobile").classList.toggle('items-menu-mobile')
  document.getElementById("items-menu-mobile").id = "items-menu-mobile-open"
  document.getElementById("menuIcon").style.display = "none"
  document.getElementById("closeIcon").style.display = "block"
}

function closeMenu() {
  document.getElementById("items-menu-mobile-open").classList.toggle('items-menu-mobile')
  document.getElementById("items-menu-mobile-open").id = "items-menu-mobile"
  document.getElementById("menuIcon").style.display = "block"
  document.getElementById("closeIcon").style.display = "none"
}
