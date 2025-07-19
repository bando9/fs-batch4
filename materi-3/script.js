const scriptURL =
  "https://script.google.com/macros/s/AKfycbx7HvrYSj-q3pBlBgn6zI8RZ5gciLGWWA7IsV3PjnEt2KWYWcsc9ug6frPYXaNUkzUqHw/exec";
const form = document.getElementById("contactForm");

form.addEventListener("submit", async (e) => {
  e.preventDefault();

  const data = {
    name: document.getElementById("name").value,
    email: document.getElementById("email").value,
    message: document.getElementById("message").value,
  };

  try {
    const response = await fetch(scriptURL, {
      method: "POST",
      body: JSON.stringify(data),
      headers: { "Content-Type": "application/json" },
    });

    const result = await response.json();
    if (result.result === "success") {
      alert("Pesan berhasil dikirim!");
      form.reset();
    } else {
      alert("Gagal mengirim pesan.");
    }
  } catch (error) {
    console.error("Error:", error);
    alert("Terjadi kesalahan!");
  }
});
