// vendor/js/pop-upswitch.js


document.addEventListener("DOMContentLoaded", function () {
  const imageInput = document.getElementById("imageInput");
  const imagePreview = document.getElementById("imagePreview");

  imageInput.addEventListener("change", function () {
    const file = this.files[0];
    if (file) {
      const reader = new FileReader();
      reader.onload = function (e) {
        imagePreview.src = e.target.result;
        localStorage.setItem("imagePreview", e.target.result);
      };
      reader.readAsDataURL(file);
    }
  });
  const storedImagePreview = localStorage.getItem("imagePreview");
  if (storedImagePreview) {
    imagePreview.src = storedImagePreview;
  }
});

// ================Create User Form================
document.addEventListener("DOMContentLoaded", function () {
  let addUserBtn = document.getElementById("add-user-btn");
  let addUserCancelBtn = document.getElementById("add-user-cancel");
  let updateUserCancelBtn = document.getElementById("update-user-cancel");
  let addUserPopup = document.getElementById("add-user-popup");
  let updateUserPopup = document.getElementById("update-user-popup");

  // =================Show popup admin_user===============
  let btnUpInfo = document.getElementById("popInfo");
  let popUpInfo = document.getElementById("profile-admin-popup");
  let btnHidePopup = document.getElementById("btn-user-cancel");
  function showProfilePopup() {
    popUpInfo.style.display = "block";
  }

  function hideProfilePopup() {
    popUpInfo.style.display = "none";
  }
  btnHidePopup.addEventListener("click", hideProfilePopup);
  btnUpInfo.addEventListener("click", showProfilePopup);

  function showAddUserPopup() {
    addUserPopup.style.display = "block";
  }
  function hideAddUserPopup() {
    addUserPopup.style.display = "none";
  }
  function hideUpdateUserPopup() {
    updateUserPopup.style.display = "none";
  }
  addUserBtn.addEventListener("click", showAddUserPopup);
  addUserCancelBtn.addEventListener("click", hideAddUserPopup);
  updateUserCancelBtn.addEventListener("click", hideUpdateUserPopup);
  let updateUserBtn = document.querySelectorAll("#update-user");

  // ===============Update User ====================
  function showUpdateUserPopup() {
    updateUserPopup.style.display = "block";
  }
  for (let i = 0; i < updateUserBtn.length; i++) {
    updateUserBtn[i].addEventListener("click", showUpdateUserPopup);
  }
  let updateUserPopupVisible = false;
  updateUserBtn.addEventListener("click", function () {
    if (updateUserPopupVisible) {
      updateUserPopup.style.display = "none";
    } else {
      updateUserPopup.style.display = "block";
    }
    updateUserPopupVisible = !updateUserPopupVisible;
  });
  // Close dropdown when clicking outside
  document.addEventListener("click", function (event) {
    let dropdown = document.querySelector(".users-item-dropdown.dropdown");
    let isClickInsideDropdown = dropdown.contains(event.target);
    if (!isClickInsideDropdown) {
      dropdown.style.display = "none";
    }
  });
});

document.addEventListener("DOMContentLoaded", function () {
  let addUserBtn = document.getElementById("add-user-btn");
  let addUserCancelBtn = document.getElementById("add-user-cancel");
  let updateUserCancelBtn = document.getElementById("update-user-cancel");
  let addUserPopup = document.getElementById("add-user-popup");
  let updateUserPopup = document.getElementById("update-user-popup");

  function showAddUserPopup() {
    addUserPopup.style.display = "block";
  }

  function hideAddUserPopup() {
    addUserPopup.style.display = "none";
  }

  function hideUpdateUserPopup() {
    updateUserPopup.style.display = "none";
  }

  addUserBtn.addEventListener("click", showAddUserPopup);
  addUserCancelBtn.addEventListener("click", hideAddUserPopup);
  updateUserCancelBtn.addEventListener("click", hideUpdateUserPopup);

  // Function to toggle password visibility for updating a user

  function togglePasswordVisibilityUpdate(input, button) {
    if (input.type === "password") {
      // Show password
      input.type = "text";
      button.innerHTML = '<i class="fa-regular fa-eye"></i>';
    } else {
      // Hide password
      input.type = "password";
      button.innerHTML = '<i class="fa-regular fa-eye-slash"></i>';
    }
  }

  // Event listener for toggle password button in Update User form
  document
    .getElementById("toggle-update-password-btn")
    .addEventListener("click", function () {
      let passwordInputUpdate = document.getElementById("update-password");
      togglePasswordVisibilityUpdate(passwordInputUpdate, this);
    });
});

// Function to toggle password visibility for creating a user

function togglePasswordVisibilityCreate() {
  let passwordInputCreate = document.getElementById("create-password");
  let buttonIcon = document
    .getElementById("toggle-create-password-btn")
    .querySelector("i");
  if (passwordInputCreate.type === "password") {
    // Show password
    passwordInputCreate.type = "text";
    buttonIcon.classList.remove("fa-eye-slash");
    buttonIcon.classList.add("fa-eye");
  } else {
    // Hide password
    passwordInputCreate.type = "password";
    buttonIcon.classList.remove("fa-eye");
    buttonIcon.classList.add("fa-eye-slash");
  }
}
// Event listener for toggle password button in Create User form

document
  .getElementById("toggle-create-password-btn")
  .addEventListener("click", togglePasswordVisibilityCreate);
