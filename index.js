//TypeIt in jQuery
jQuery(document).ready(function($) {
  new TypeIt("#type-it", {
      strings: ["GEOID, Geodetski inženiring d.o.o."],
      speed: 100,
      waitUntilVisible: true,
      loop: false,
      html: true,
  })
  .go();
});


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



