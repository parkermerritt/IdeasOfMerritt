<!DOCTYPE html>
<html>
<title>Ideas of Merritt</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:wght@600&display=swap" rel="stylesheet">
<style>
    h1 {
        font-family: 'IBM Plex Sans', sans-serif;
        font-size: 420%;
        line-height: 60px;
    }

    h2 {
        font-family: 'IBM Plex Sans', sans-serif;
        font-size: 40px;
        line-height: 45px;
        margin-top: -10px;
        text-align: left;
        padding-right: 15px;
        margin-right: 15px;

    }

    h3 {
        font-family: 'IBM Plex Sans', sans-serif;
        margin-top: -5px;
        font-size: 18px;
        text-align: left;
        width: 66%;
    }

    h4 {
        font-family: 'IBM Plex Sans', sans-serif;
        margin-top: -5px;
        font-size: 17px;
        text-align: left;
        width: 66%;
    }

    p {
        font-family: 'IBM Plex Sans', sans-serif;
        font-size: 17px;
        text-align: left;
        margin-left: 18px;
        width: 90%;
    }

    label,
    button {
        font-family: 'IBM Plex Sans', sans-serif;
    }


    .padded {
        padding-top: 20px;
        padding-left: 16px;
        padding-bottom: 2px;
    }

    img {
        min-width: 250px;
        max-width: 300px;
    }

    .bg {
        background-color: #ffffff;
        background-repeat: no-repeat;
        background-attachment: relative;
        background-position: 102% 101%;

    }

    .container {
        display: -webkit-box;
        display: -moz-box;
        display: -ms-flexbox;
        display: -webkit-flex;
        display: flex;
        -webkit-box-orient: vertical;
        -moz-box-orient: vertical;
        -webkit-flex-direction: column;
        -ms-flex-direction: column;
        flex-direction: column;
        /* optional */
        -webkit-box-align: start;
        -moz-box-align: start;
        -ms-flex-align: start;
        -webkit-align-items: flex-start;
        align-items: flex-start;
    }

    a:hover div h2,
    a:hover div h4 {
        transition: all .3s ease-in-out;
        transform: scale(1.015);
    }

    a div h2,
    a div h4 {
        transition: all .3s ease-in-out;
    }

    @media only screen and (min-width: 600px) {
        .bg {
            background-size: 48%;
        }
        .hidden-1 {
            display: none;
        }

    }

    .row {
        display: flex;
    }

    @media only screen and (max-width: 600px) {
        .bg {
            background-size: 58%;
        }
        .reverse {
            flex-direction: row-reverse;
        }
        .short {
            height: 290px !important;
        }
        .mid {
            height: 370px !important;
        }
        .hidden-2 {
            display: none;
        }

    }
</style>

<body style="max-width:100%">

    <!-- First Grid: Logo & About -->
    <div>
        <div class="w3-half short container w3-black w3-container " style="height:450px; ">
            <div class="padded ">
                <h1>Ideas of Merritt</h1>
                <h3>A collection of thoughts about technology and business.</h3>
            </div>

        </div>
        <a href="https://medium.com/swlh/artificial-intelligence-will-catalyze-a-remote-work-revolution-9d46c2319f52?source=friends_link&sk=57b880bf7bbb7482e3e0d395cce22a60 ">
            <div class="w3-half container bg padded " style="height:450px; background-image: url( 'AI_Rem.png'); ">
                <div class="padded">
                    <h2>Artificial Intelligence Will Catalyze a Remote Work Revolution</h2>
                    <h4>Feb 14, 2020</h4>
                </div>
            </div>
        </a>
        <!-- Second Grid: Work & Resume -->
        <div class=" reverse ">
            <a href="https://medium.com/swlh/the-secret-innovation-technique-behind-silicon-valleys-creativity-91fe6e7c1526?source=friends_link&sk=3f3efc66e50b0178c7a14739e334a82e">
                <div class="w3-half hidden-2 bg padded " style="height:450px; background-image: url( 'SIT_Solo.png'); ">
                    <div class="padded ">
                        <h2>The Hidden Innovation Technique Behind Silicon Valley’s Creativity</h2>
                        <h4>Feb 24, 2020</h4>
                    </div>
                </div>
            </a>

            <a href="https://medium.com/ibm-dcpe-group/building-automated-ai-pipelines-with-multi-cloud-data-581424dfd31">
                <div class="w3-half bg w3-black padded" style="min-height:450px;background-image: url( 'Pipe_Solo.png'); ">
                    <div class="padded">
                        <h2>Automating AI Pipelines with Multi-Cloud Data</h2>
                        <h4>April 23, 2020</h4>

                    </div>
                </div>
            </a>

            <a href="https://medium.com/swlh/the-secret-innovation-technique-behind-silicon-valleys-creativity-91fe6e7c1526?source=friends_link&sk=3f3efc66e50b0178c7a14739e334a82e">
                <div class="w3-half bg padded hidden-1" style="height:450px; background-image: url( 'SIT_Solo.png'); ">
                    <div class="padded ">
                        <h2>The Hidden Innovation Technique Behind Silicon Valley’s Creativity</h2>
                        <h4>Feb 24, 2020</h4>
                    </div>
                </div>
            </a>



        </div>

        <!-- Third Grid: Swing By & Contact -->
        <div class="w3-row " id="contact ">
            <div class="w3-half mid w3-black w3-container padded " style="height:500px ">
                <div class="padded ">
                    <h1>Parker Merritt</h1>
                </div>
                <p>I provide a variety of writing services, including copywriting, social media marketing, and creative technical
                    documentation.
                </p>
                <div class="padded ">
                    <h3>Atlanta, USA</h3>
                    <h3>+1 407 572 5874</h3>
                    <h3>parker.merritt@gmail.com</h3>
                </div>
            </div>
            <div class="w3-half w3-white w3-container " style="height:500px ">
                <div class="w3-padding-64 w3-padding-large ">
                    <h1>Contact</h1>
                    <h4>Schedule a free consultation.</h4>
                    <form class="w3-container w3-card w3-padding-32 w3-white " action="/action_page.php " target="_blank ">
                        <div class="w3-section ">
                            <label>Name</label>
                            <input class="w3-input " style="width:100%; " type="text " required name="Name ">
                        </div>
                        <div class="w3-section ">
                            <label>Email</label>
                            <input class="w3-input " style="width:100%; " type="text " required name="Email ">
                        </div>
                        <div class="w3-section ">
                            <label>Message</label>
                            <input class="w3-input " style="width:100%; " type="text " required name="Message ">
                        </div>
                        <button type="submit " class="w3-button w3-black w3-right ">Send</button>
                    </form>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <footer class="w3-container w3-black w3-padding-64 ">
            <h3 class="padded ">Read more of my work on </h3>
            <a href="https://medium.com/@parkermerritt ">
                <img style="margin-left:14px; width:25px; " src="medium-white.svg ">
            </a>
        </footer>

</body>