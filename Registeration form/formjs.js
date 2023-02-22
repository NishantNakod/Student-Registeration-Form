window.onload = function() {
  document.querySelector('form').addEventListener('submit', function(event) {
    event.preventDefault();
    let form = document.querySelector('form');
    let formData = new FormData(form);

    fetch('submit.php', {
      method: 'POST',
      body: formData
    })
    .then(() => {
      console.log('Form data submitted successfully!');
      window.location.href = 'success.html'; // Redirect to success.html
    })
    .catch(error => {
      console.error('Error submitting form data:', error);
    });
  });
};
