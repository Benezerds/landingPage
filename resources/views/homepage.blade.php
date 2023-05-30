<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/homepage.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Benezer</title>
</head>

<body>
    @include('navbar')
    <h2 class="main-text">Hi! My name is Ben, known online as Benezer. Welcome to my Landing Page</h2>

    <div class="row">
        <div class="column-img">
            <img src="{{ url('/images/benezerlogo.jpg') }}" alt="">
        </div>

        <div class="column">
            <h3>Biography</h3>
            <p>Chill person, programming, Gym enthusiast. Fav programming language is Java</p>
        </div>

        <div class="column">
            <h3>Lets Connect</h3>
            <div class="social-icons">
                <a href="">
                    <img src="{{ url('/images/facebook.png') }}" alt="My image">
                </a>
                <a href="">
                    <img src="{{ url('/images/instagram.png') }}" alt="My image">
                </a>
                <a href=""><i class="fab fa-instagram"></i></a>
            </div>
        </div>
    </div>

    <div class="edu-section">
        <h3>What I Do / Education</h3>

        <div class="edu-row">
            <div class="edu-column">
                <a href="{{ route('appdev') }}">
                    <img src="{{ url('/images/mobiledev-card.png') }}" alt="">
                </a>
            </div>
            

            <div class="edu-column">
                <img src="{{ url('/images/binus-card.png') }}" alt="">
            </div>

            <div class="edu-column">
                <img src="{{ url('/images/school-card.png') }}" alt="">
            </div>
        </div>
    </div>

    <div class="project-section">
        <h2>Featured Project</h2>

        <h3>No Projects For Now ^ ^</h3>


        @include('footer')



    </div>

</body>

</html>
