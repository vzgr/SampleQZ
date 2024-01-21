<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>CodeQZ</title>

<!-- Подключаем Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link href="https://cdn.jsdelivr.net/npm/aos@2.3.1/dist/aos.css" rel="stylesheet">
<link href="https://fonts.cdnfonts.com/css/made-soulmaze" rel="stylesheet">
<link href="../Css/Style.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Необходимо подключить jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Popper.js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Добавляем Bootstrap JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


</head>
<body>

<header>
    <!-- Bootstrap навигационная панель -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-success">
        <div class="container">
            <a class="navbar-brand" href="../Index.html">
                <img src="../Images/Logo.png" alt="Logo", class="navbar-brand">
                <h1 class="logotexto inline">Code</h1>
                <h1 class="logotexts inline">QZ</h1>
            </a>
            <script>
                const appearance = (element, timeout) => { // убрал неиспользуемый параметр display
                    element.style.opacity = '0';
                    element.style.transition = `opacity ${timeout}s`; // исправил на шаблонную строку с обратными кавычками
                    setTimeout(() => {
                        element.style.opacity = '1';
                    }, 10);
                }
                const brand1 = document.querySelector('.navbar-brand');
                appearance(brand1, 2);
                const brand2 = document.querySelector('.logotexto');
                appearance(brand2, 2);
                const brand3 = document.querySelector('.logotexts');
                appearance(brand3, 2);
            </script>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ml-auto">
                    <a class="nav-link" href="Tests.html">Test's <span class="sr-only">(current)</span></a>
                    <a class="nav-link" href="About.html">About us</a>
                    <a class="nav-link" href="#">You are here</a>
                    <a class="nav-link" href="Login.html">Sign In</a>
                </div>
            </div>
        </div>
    </nav>
</header>

<!-- Добавьте ваш контент здесь -->
<div class="modal modal-sheet position-static d-block bg-body-secondary p-4 py-md-5" tabindex="-1" role="dialog" id="modalSignin">
    <div class="modal-dialog" role="document", id="register">
        <div class="modal-content rounded-4 shadow">
            <div class="modal-header p-5 pb-4 border-bottom-0">
                <h1 class="fw-bold mb-0 fs-2 logotexto inline">REGISTER</h1>
            </div>

        <div class="modal-body p-5 pt-0">
        <form class="">
            <div class="form-floating mb-3">
                <input type="email" class="form-control rounded-3" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">эл. почта</label>
            </div>
            <div class="form-floating mb-3">
                <input type="password" class="form-control rounded-3" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">пароль</label>
            </div>
            <button class="w-100 mb-2 btn btn-lg rounded-3 btn-primary" type="submit">Зарегистроваться</button>
        </form>
        </div>
    </div>
</div>




<footer class="footer bg-success py-3">
    <div class="container">
        <span>&copy; 2024 NExt team. <a href="https://github.com/vzgr/CodeQZ"><img src="https://cdn-icons-png.flaticon.com/512/25/25231.png", class="githublogo"></a></span>
    </div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.1/dist/aos.js"></script>
<script>AOS.init();</script>

<!-- Подключаем Bootstrap JavaScript -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.1.9/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doMkKqN5JWi1toQdP5VTp0oGdjl5jBP4epzj1K9phqgwwHJT6/7P4ps" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8sh+JS80GB+8llPCS7lxIHE2eN4HaojKE3agorz" crossorigin="anonymous"></script>

</body>
</html>
