<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact Me</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        @font-face {
            font-family: 'sora-bold';
            src: url('/fonts/Sora-Bold.ttf') format('truetype');
            font-weight: normal;
            font-style: normal;
        }

        * {
            background-color: #272727 !important;
        }

        html {
            padding-top: 1%;
            padding-left: 8%;
            padding-right: 8%;
        }

        body {
            color: #FFFFFF !important;
        }

        .main-text {
            margin-top: 3%;
            width: 75%;
            height: auto;
            background: linear-gradient(90deg, #3BF686, #4CA9FF);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            font-family: 'sora-bold', sans-serif !important;
            font-size: 51px;
        }

        .contact-form {
            margin-top: 2%;
        }

        .form-group {
            margin-top: 2%;
        }

        .form-control {
            color: white !important;
        }

        .btn-submit {
            background: linear-gradient(90deg, #3BF686, #4CA9FF);
            font-family: 'sora-bold', sans-serif !important;
            border: none;
        }

        .btn-submit:hover {
            box-shadow: 0 0 10px 5px rgba(255, 255, 255, 0.7);
            z-index: 1;
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                <h1 class="main-text">Contact Me</h1>

                <form class="contact-form">
                    <div class="form-group">
                        <label for="name">Your Name</label>
                        <input type="text" class="form-control" id="name" placeholder="Your Name">
                    </div>

                    <div class="form-group">
                        <label for="email">Email Address</label>
                        <input type="email" class="form-control" id="email" placeholder="Your Email">
                    </div>

                    <div class="form-group">
                        <label for="subject">Subject</label>
                        <input type="text" class="form-control" id="subject" placeholder="Subject">
                    </div>

                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea class="form-control" id="message" rows="3" placeholder="Your Message"></textarea>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-submit mt-3">Send Message</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
