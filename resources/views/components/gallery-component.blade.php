<div>
    <style>
        .gallery-component-wrapper{
            margin: 1rem 0;
        }
        /* Style the tab */
        .tab-wrapper {
            overflow: hidden;
            background-color: #f1f1f1;
        }

        /* Style the buttons that are used to open the tab content */
        .tab-wrapper button {
            background-color: inherit;
            float: left;
            border: none;
            outline: none;
            cursor: pointer;
            padding: 14px 16px;
            transition: 0.3s;
        }

        /* Change background color of buttons on hover */
        .tab-wrapper button:hover {
            background-color: #ddd;
        }

        /* Create an active/current tablink class */
        .tab-wrapper button.active {
            background-color: #ccc;
        }

        /* Style the tab content */
        .tabcontent {
            display: none;
            padding: 1rem 0;
            border-top: none;
            animation: fadeEffect 1s; /* Fading effect takes 1 second */
        }

        /* Go from zero to full opacity */
        @keyframes fadeEffect {
            from {opacity: 0;}
            to {opacity: 1;}
        }

        /* gallery item */
        .gallery-item-wrapper{
            width: 100%;
            height: 320px;
            background-color: whitesmoke;
            margin-bottom: 2.5rem;
        }

        /* MEDIA QUERIES */
        @media (max-width: 475px){
            .col-sm-6{
                width: 100% !important;
            }
            .gallery-item-wrapper{
                height: 340px;
            }
        }
        @media (max-width: 575.98px){
            .col-sm-6{
                width: 50%;
            }
        }
    </style>

    <div class="gallery-component-wrapper">
        <div class="page-section-heading">
            <h1>Styles Gallery 2</h1>

            <p class="lead">Browse through some of our beaitufully delivered services.</p>
        </div>


        <!-- Tab links -->
        <div class="tab-wrapper">
            <button class="tablinks" onclick="openCity(event, 'Braids')" id="defaultOpen">Braids</button>
            <button class="tablinks" onclick="openCity(event, 'Weave-On')">Weave-On</button>
            <button class="tablinks" onclick="openCity(event, 'Wigcaps')">Wigcaps</button>
        </div>

        <!-- Tab content -->
        <div id="Braids" class="tabcontent">
            <h3>Braids</h3>
            <div class="row">
                <div class="col-sm-6 col-xl-4 col-xxl-3">
                    <div class="gallery-item-wrapper">

                    </div>
                </div>

                <div class="col-sm-6 col-xl-4 col-xxl-3">
                    <div class="gallery-item-wrapper">

                    </div>
                </div>

                <div class="col-sm-6 col-xl-4 col-xxl-3">
                    <div class="gallery-item-wrapper">

                    </div>
                </div>

                <div class="col-sm-6 col-xl-4 col-xxl-3">
                    <div class="gallery-item-wrapper">

                    </div>
                </div>

                <div class="col-sm-6 col-xl-4 col-xxl-3">
                    <div class="gallery-item-wrapper">

                    </div>
                </div>

                <div class="col-sm-6 col-xl-4 col-xxl-3">
                    <div class="gallery-item-wrapper">

                    </div>
                </div>

                <div class="col-sm-6 col-xl-4 col-xxl-3">
                    <div class="gallery-item-wrapper">

                    </div>
                </div>

                <div class="col-sm-6 col-xl-4 col-xxl-3">
                    <div class="gallery-item-wrapper">

                    </div>
                </div><div class="col-sm-6 col-xl-4 col-xxl-3">
                    <div class="gallery-item-wrapper">

                    </div>
                </div>

                <div class="col-sm-6 col-xl-4 col-xxl-3">
                    <div class="gallery-item-wrapper">

                    </div>
                </div>

                <div class="col-sm-6 col-xl-4 col-xxl-3">
                    <div class="gallery-item-wrapper">

                    </div>
                </div>

                <div class="col-sm-6 col-xl-4 col-xxl-3">
                    <div class="gallery-item-wrapper">

                    </div>
                </div>
            </div>
        </div>

        <div id="Weave-On" class="tabcontent">
            <h3>Weave-On</h3>
            <div class="row">
                <div class="col-sm-6 col-xl-4 col-xxl-3">
                    <div class="gallery-item-wrapper">

                    </div>
                </div>

                <div class="col-sm-6 col-xl-4 col-xxl-3">
                    <div class="gallery-item-wrapper">

                    </div>
                </div>

                <div class="col-sm-6 col-xl-4 col-xxl-3">
                    <div class="gallery-item-wrapper">

                    </div>
                </div>

                <div class="col-sm-6 col-xl-4 col-xxl-3">
                    <div class="gallery-item-wrapper">

                    </div>
                </div>

                <div class="col-sm-6 col-xl-4 col-xxl-3">
                    <div class="gallery-item-wrapper">

                    </div>
                </div>

                <div class="col-sm-6 col-xl-4 col-xxl-3">
                    <div class="gallery-item-wrapper">

                    </div>
                </div>

                <div class="col-sm-6 col-xl-4 col-xxl-3">
                    <div class="gallery-item-wrapper">

                    </div>
                </div>

                <div class="col-sm-6 col-xl-4 col-xxl-3">
                    <div class="gallery-item-wrapper">

                    </div>
                </div><div class="col-sm-6 col-xl-4 col-xxl-3">
                    <div class="gallery-item-wrapper">

                    </div>
                </div>

                <div class="col-sm-6 col-xl-4 col-xxl-3">
                    <div class="gallery-item-wrapper">

                    </div>
                </div>

                <div class="col-sm-6 col-xl-4 col-xxl-3">
                    <div class="gallery-item-wrapper">

                    </div>
                </div>

                <div class="col-sm-6 col-xl-4 col-xxl-3">
                    <div class="gallery-item-wrapper">

                    </div>
                </div>
            </div>
        </div>

        <div id="Wigcaps" class="tabcontent">
            <h3>Wigcaps</h3>
            <div class="row">
                <div class="col-sm-6 col-xl-4 col-xxl-3">
                    <div class="gallery-item-wrapper">

                    </div>
                </div>

                <div class="col-sm-6 col-xl-4 col-xxl-3">
                    <div class="gallery-item-wrapper">

                    </div>
                </div>

                <div class="col-sm-6 col-xl-4 col-xxl-3">
                    <div class="gallery-item-wrapper">

                    </div>
                </div>

                <div class="col-sm-6 col-xl-4 col-xxl-3">
                    <div class="gallery-item-wrapper">

                    </div>
                </div>

                <div class="col-sm-6 col-xl-4 col-xxl-3">
                    <div class="gallery-item-wrapper">

                    </div>
                </div>

                <div class="col-sm-6 col-xl-4 col-xxl-3">
                    <div class="gallery-item-wrapper">

                    </div>
                </div>

                <div class="col-sm-6 col-xl-4 col-xxl-3">
                    <div class="gallery-item-wrapper">

                    </div>
                </div>

                <div class="col-sm-6 col-xl-4 col-xxl-3">
                    <div class="gallery-item-wrapper">

                    </div>
                </div><div class="col-sm-6 col-xl-4 col-xxl-3">
                    <div class="gallery-item-wrapper">

                    </div>
                </div>

                <div class="col-sm-6 col-xl-4 col-xxl-3">
                    <div class="gallery-item-wrapper">

                    </div>
                </div>

                <div class="col-sm-6 col-xl-4 col-xxl-3">
                    <div class="gallery-item-wrapper">

                    </div>
                </div>

                <div class="col-sm-6 col-xl-4 col-xxl-3">
                    <div class="gallery-item-wrapper">

                    </div>
                </div>
            </div>
        </div>


    </div>


    <script>
        function openCity(evt, cityName) {
            // Declare all variables
            var i, tabcontent, tablinks;

            // Get all elements with class="tabcontent" and hide them
            tabcontent = document.getElementsByClassName("tabcontent");
                for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }

            // Get all elements with class="tablinks" and remove the class "active"
            tablinks = document.getElementsByClassName("tablinks");
                for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }

            // Show the current tab, and add an "active" class to the button that opened the tab
            document.getElementById(cityName).style.display = "block";
            evt.currentTarget.className += " active";
        }

        // Get the element with id="defaultOpen" and click on it
        document.getElementById("defaultOpen").click();
    </script>
</div>
