<?php
echo '<nav class="navbar navbar-expand-lg navbar-dark bg-success">
<div class="container-fluid">
    <a class="navbar-brand pocket-light" href="#"><img src="src/logo.png" alt="" class="avatar"><b>Pocket, Inc.</b></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarToggler">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link" href="#">Home</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="solutionsDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Solutions
                </a>
                <ul class="dropdown-menu" aria-labelledby="solutionsDropdown">
                    <li><a class="dropdown-item" href="bin/">Code Bin</a></li>
                    <li><a class="dropdown-item" href="manager/">Team Manager</a></li>
                    <li><a class="dropdown-item" href="https://pocket-inc.ml/cloud">Cloud Drive</a></li>
                    <li><a class="dropdown-item" href="code/">Web Code</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="productsDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Products
                </a>
                <ul class="dropdown-menu" aria-labelledby="productsDropdown">
                    <li><a class="dropdown-item" href="browser/">Pocket Browser</a></li>
                    <li><a class="dropdown-item" href="meet/">Pocket Meet</a></li>
                    <div class="dropdown-divider"></div>
                    <li><a class="dropdown-item" href="#">File Transfer</a></li>
                    <li><a class="dropdown-item" href="#">FrontDis</a></li>
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="donate/">Donate</a>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="aboutDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    About
                </a>
                <ul class="dropdown-menu" aria-labelledby="aboutDropdown">
                    <li><a class="dropdown-item" href="#">About Us</a></li>
                    <li><a class="dropdown-item" href="#">Contact Us</a></li>
                    <div class="dropdown-divider"></div>
                    <li><a class="dropdown-item" href="#">GitHub</a></li>
                    <li><a class="dropdown-item" href="#">Twitter</a></li>
                </ul>
            </li>
        </ul>
        <form class="d-flex">
            <button class="btn btn-outline-light" type="submit">Login</button>
        </form>
    </div>
</div>
</nav>';
?>