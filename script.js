function validateForm() {
  const name = document.getElementById("name").value;
  const email = document.getElementById("email").value;
  const phone = document.getElementById("phone").value;
  const dob = document.getElementById("dob").value;
  const checkin = document.getElementById("checkin").value;
  const symptoms = document.getElementById("symptoms").value;
  const address = document.getElementById("address").value;

  // Basic validation
  if (name === "") {
    alert("Please enter your name.");
    return false;
  }

  if (email === "") {
    alert("Please enter your email address.");
    return false;
  }

  if (!isValidEmail(email)) {
    alert("Please enter a valid email address.");
    return false;
  }

  if (phone === "") {
    alert("Please enter your phone number.");
    return false;
  }

  if (dob === "") {
    alert("Please enter your date of birth.");
    return false;
  }

  if (checkin === "") {
    alert("Please select suitable date.");
    return false;
  }

  if (symptoms === "") {
    alert("Please enter your symptoms.");
    return false;
  }

  if (address === "") {
    alert("Please enter your address.");
    return false;
  }

  // Additional validation (e.g., date range, room availability) can be added here

  return true;
}

function isValidEmail(email) {
  // Regular expression for email validation
  const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  return emailRegex.test(email);
}