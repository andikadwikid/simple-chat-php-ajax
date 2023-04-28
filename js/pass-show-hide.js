const password_field = document.querySelector(
  ".form .field input[type='password']"
);
const toggleBtn = document.querySelector(".form .field i");

toggleBtn.onclick = () => {
  if (password_field.type == "password") {
    password_field.type = "text";
    toggleBtn.classList.add("active");
  } else {
    password_field.type = "password";
    toggleBtn.classList.remove("active");
  }
};
