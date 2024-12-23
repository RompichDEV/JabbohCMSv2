<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Jabboh - Connexion</title>
    <link rel="stylesheet" href="./app/assets/css/_JabbohCSSall.css" />

    <style></style>
  </head>
  <body class="animated-fade">
    <div style="position: relative">
      <i class="fas fa-moon theme-icon" id="theme-toggler"></i>
      <div id="theme-tooltip" class="tooltip-custom">Passer au mode sombre</div>
    </div>

    <div class="container d-flex align-items-center justify-content-center">
      <div class="row w-100">
        <div
          class="col-md-6 d-flex flex-column align-items-start justify-content-center p-5 animated-fade"
        >
          <div class="d-flex align-items-center mb-4 flex-wrap">
            <img
              src="./app/assets/images/jabboh.gif"
              alt="Logo"
              class="logo me-1 mb-3 mb-md-1"
            />
            <div class="online-user-box d-flex align-items-center">
              <img
                src="./app/assets/images/online.png"
                alt="Online Icon"
                class="icon me-2"
              />
              <p class="mb-0">
                Rejoins les <strong>100 Jabboh connectés !</strong>
              </p>
            </div>
          </div>

          <h1 class="mb-3">Bienvenue sur Jabboh!</h1>
          <p class="mb-4">
            Inscris-toi gratuitement dans le meilleur hôtel habbo ! Tu pourras
            devenir célèbre, faire de nouvelles rencontres, tchater ...
          </p>
          <form action="/login" method="POST" class="w-100 position-relative">
  <div class="mb-3">
    <label for="usernameOrEmail" class="form-label">
      Pseudonyme ou adresse mail *
    </label>
    <input
      type="text"
      name="usernameOrEmail"
      class="form-control"
      id="usernameOrEmail"
      placeholder="Pseudonyme ou email"
      required
    />
  </div>
  <div class="mb-3 position-relative">
    <label for="password" class="form-label">Mot de passe *</label>
    <input
      type="password"
      name="password"
      class="form-control"
      id="password"
      placeholder="Mot de passe"
      required
    />
    <i class="fas fa-eye toggle-password" id="togglePassword"></i>
  </div>
  <a href="#" class="text-primary mb-3 d-block">Mot de passe oublié?</a>
  <button type="submit" class="btn btn-primary w-100 animated-bounce">
    <i class="fas fa-sign-in-alt"></i> Se connecter
  </button>
</form>
        </div>

        <div
          class="col-md-6 d-flex align-items-center justify-content-center position-relative"
        >
          <img
            src="./app/assets/images/header-connexion-jabboh.png"
            alt="Image d'illustration"
            class="img-fluid rounded animated-fade"
          />
          <a href="/register.html" class="btn-icon-link">
            <button class="btn-icon">
              <img
                src="./app/assets/images/sign-in.png"
                alt="Sign In Icon"
                class="btn-icon-img"
              />
              <span class="btn-text">Se créer un compte gratuitement !</span>
            </button>
          </a>
        </div>
      </div>
    </div>

    <footer class="footer">
      <div class="footer-links">
        <a href="#about" class="footer-link">À propos</a>
        <a href="#terms" class="footer-link">Conditions</a>
        <a href="#privacy" class="footer-link">Confidentialité</a>
        <a href="#support" class="footer-link">Support</a>
      </div>
      <div class="footer-text">
        <p>
          &copy; 2024 Jabboh Hôtel. <br />
          Jabboh est un projet indépendant, à but non lucratif. <br />
          Nous ne sommes pas approuvés, affiliés, ou offerts par Sulake
          Corporation LTD. <br />
          <br />
          <b>JabbohCMS</b> fait avec ❤️ par <b>Emp0rR-</b>.
        </p>
      </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="./app/assets/js/_Jabboh.js"></script>
  </body>
</html>
