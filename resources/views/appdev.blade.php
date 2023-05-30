<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/appdev.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Benezer - App Development</title>
</head>

<body>
    @include('navbar')

    <div class="hero-section">
        <h2 class="main-text">App Development</h2>
        <p>Being an app developer has always been passion ever since I was young. I even started to learn programming
            because I want to build my own app. Being able to imagine and transform idea into a functional app that can
            be used and downloaded by people whole around the world feels incredible</p>
    </div>

    <div class="knowledge-section">
        <h2>Knowledge</h2>

        <div class="know-row">
            <img src="{{ url('/images/flutter.png') }}" alt="">

            <div class="know-details">
                <h2>Flutter</h2>

                <p>Flutter is an amazing framework that makes it easy to build quick mobile application.
                    I still had little experience with flutter. Currently building recipe apps for bulking or cutting
                    and integrating it with firebase for the backend.
                </p>
            </div>
        </div>

        <div class="know-row">
            <img src="{{ url('/images/java.png') }}" alt="">

            <div class="know-details">
                <h2>Java</h2>

                <p>
                    Java programming language is where I am most proficient at. I may not be an expert yet, but I am
                    really confident that I have a strong base. Equipped with knowledge of the concepts of MVC, OOP,
                    version control,
                    and database connectivity, I am able to implement this knowledge in my projects to make my codes
                    more maintainable and easier to understand.
                </p>
            </div>
        </div>

    </div>

    @include ('footer')

</body>

</html>
