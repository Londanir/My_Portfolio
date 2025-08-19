<html lang="en">
<head>
    <meta charset="UTF-8" lang="en">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A brief description of my portfolio.">
    <meta name="author" content="Benedicto, Ira">
    <meta name="keywords" content="portfolio, web development, C#, Python, PHP, SQL, XAMPP">
    <title>My Portfolio</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
</head>
<body>
    <!-- HEADER -->
    <header class="sticky-top">
        <nav id="nav-scroll" class="navbar navbar-expand-md navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">IMB</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav nav-pills">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#home">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#about">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#dev-and-env">Development and Environments</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contact">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- END HEADER -->
    <!-- MAIN CONTENT -->
    <main class="container mt-5" data-bs-spy="scroll" data-bs-target="#nav-scroll">
        <section id="home" class="vh-100">
            <div class="row">
                <div class="col-md-4 text-center">
                    <img src="{{ asset('images/profile.jpg') }}" alt="Profile Picture" class="img-fluid rounded-circle mb-3" style="width: 150px; height: 150px;">
                    <p class="text-muted">Welcome to my portfolio!</p>
                </div>
                <div class="col-md-8">
                    <h1 class="">I'm Ira M. Benedicto<br>a Coder</h1>
                    <p class="fs-2">I specialize in C# and developing web application development, with additional knowledge in Python, PHP, and SQL databases.</p>
                </div>
            </div>
        </section>
        <section id="about">
            <h2>About Me</h2>
            <p>I am proficient in <strong>C#</strong> for software development, <strong>HTML, CSS</strong> for web applications. I also have experience with <strong>Python</strong> for scripting and automation, <strong>PHP</strong> for backend development, and working with <strong>SQL databases</strong> for data management.</p>
        </section>
        <section id="dev-and-env">
            <h2>Development and Environments</h2>
            <p>I work with <strong>XAMPP</strong> for local server setup and testing web applications, ensuring smooth backend functionality and database integration.</p>

            <h3 class="text-primary">Coding Environments</h3>
            <ul>
                <li><strong>Visual Studio</strong> - Used for C# (.NET) development.</li>
                <li><strong>VS Code</strong> - Preferred for PHP, HTML, CSS, and JavaScript.</li>
            </ul>

            <h3 class="text-success">Database Management</h3>
            <ul>
                <li><strong>MySQL Workbench</strong> - Ideal for database administration and query execution.</li>
                <li><strong>HeidiSQL</strong> - Useful for managing SQL databases efficiently.</li>
            </ul>
        </section>
        <section id="contact">
            <h2>Contact</h2>
            <p>If you would like to get in touch, please reach out via email at <a href="mailto:ira.benedicto@example.com">ira.benedicto@example.com</a>.</p>
        </section>
    </main>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</html>