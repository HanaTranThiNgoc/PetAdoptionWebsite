document.getElementById("contact-form").addEventListener("submit", handleSubmit);
function handleSubmit(event) {
    event.preventDefault();
    const form = event.target;
    const formData = new FormData(form);
    fetch("contactprocess.php", {
      method: "POST",
      body: formData
    })
    .then(response => response.json())
    .then(data => {
      // Xử lý phản hồi từ server
      console.log(data);
    })
    .catch(error => console.error(error));
  }