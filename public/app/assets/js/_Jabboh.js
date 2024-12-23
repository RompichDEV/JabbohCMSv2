const togglePassword = document.getElementById("togglePassword");
      const togglePasswordConfirm = document.getElementById(
        "togglePasswordConfirm"
      );
      const passwordInput = document.getElementById("password");
      const confirmPasswordInput = document.getElementById(
        "password-confirmation"
      );
      const themeToggler = document.getElementById("theme-toggler");
      const themeTooltip = document.getElementById("theme-tooltip");
      const registerForm = document.getElementById("register-form");

      // Fonction pour basculer le thème
      function toggleTheme() {
        const isDarkMode = document.body.classList.toggle("bg-dark");
        document.body.classList.toggle("text-light");

        // Mettre à jour tous les champs de formulaire pour passer en mode sombre
        const inputs = document.querySelectorAll("input, textarea");
        inputs.forEach((input) => {
          if (isDarkMode) {
            input.classList.add("form-control-dark");
          } else {
            input.classList.remove("form-control-dark");
          }
        });

        // Mettre à jour l'icône et l'info-bulle
        if (isDarkMode) {
          themeToggler.classList.replace("fa-moon", "fa-sun");
          themeTooltip.textContent = "Passer au mode clair";
          localStorage.setItem("theme", "dark");
        } else {
          themeToggler.classList.replace("fa-sun", "fa-moon");
          themeTooltip.textContent = "Passer au mode sombre";
          localStorage.setItem("theme", "light");
        }
      }

      // Initialisation du thème depuis le localStorage
      const savedTheme = localStorage.getItem("theme");
      if (savedTheme === "dark") {
        document.body.classList.add("bg-dark", "text-light");
        const inputs = document.querySelectorAll("input, textarea");
        inputs.forEach((input) => input.classList.add("form-control-dark"));
        themeToggler.classList.replace("fa-moon", "fa-sun");
        themeTooltip.textContent = "Passer au mode clair";
      }

      themeToggler.addEventListener("click", toggleTheme);

      // Afficher et cacher l'info-bulle avec une animation
      themeToggler.addEventListener("mouseover", () => {
        themeTooltip.classList.add("tooltip-visible");
      });

      themeToggler.addEventListener("mouseout", () => {
        themeTooltip.classList.remove("tooltip-visible");
      });

      // Basculer le type de mot de passe visible/masqué
      togglePassword.addEventListener("click", () => {
        const type =
          passwordInput.getAttribute("type") === "password"
            ? "text"
            : "password";
        passwordInput.setAttribute("type", type);
        togglePassword.classList.toggle("fa-eye-slash");
      });

      togglePasswordConfirm.addEventListener("click", () => {
        const type =
          confirmPasswordInput.getAttribute("type") === "password"
            ? "text"
            : "password";
        confirmPasswordInput.setAttribute("type", type);
        togglePasswordConfirm.classList.toggle("fa-eye-slash");
      });

      // Validation du formulaire
      registerForm.addEventListener("submit", (event) => {
        if (passwordInput.value !== confirmPasswordInput.value) {
          event.preventDefault();
          alert("Les mots de passe ne correspondent pas.");
        }
      });