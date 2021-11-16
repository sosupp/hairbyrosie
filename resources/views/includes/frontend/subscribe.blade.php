
<style>
    /* Button used to open the contact form - fixed at the bottom of the page */
    .open-button {
        background-color: #555;
        color: white;
        padding: 16px 20px;
        border: none;
        cursor: pointer;
        opacity: 0.8;
        /* position: fixed; */
        bottom: 23px;
        /* right: 28px; */
        width: 300px;
    }

    /* The popup form - hidden by default */
    .form-popup {
        display: none;
        border: 3px solid #f1f1f1;
        z-index: 9;
    }

    /* Add styles to the form container */
    .form-container {
        max-width: 300px;
        padding: 10px;
        background-color: white;
    }

    /* Full-width input fields */
        .form-container input[type=text], .form-container input[type=password] {
        width: 100%;
        padding: 15px;
        margin: 5px 0 22px 0;
        border: none;
        background: #f1f1f1;
    }

    /* When the inputs get focus, do something */
        .form-container input[type=text]:focus, .form-container input[type=password]:focus {
        background-color: #ddd;
        outline: none;
    }

    /* Set a style for the submit/login button */
    .form-container .btn {
        background-color: #04AA6D;
        color: white;
        padding: 16px 20px;
        border: none;
        cursor: pointer;
        width: 100%;
        margin-bottom:10px;
        opacity: 0.8;
    }

    /* Add a red background color to the cancel button */
    .form-container .cancel {
        background-color: red;
    }

    /* Add some hover effects to buttons */
    .form-container .btn:hover, .open-button:hover {
        opacity: 1;
    }

</style>

<div class="max-w-6xl mx-auto sm:px-6 lg:px-8">

    <button href="" class="btn btn-warning btn-lg open-button" onclick="openForm()">SUBSCRIBE</button>

    <div class="form-popup mt-2" id="myForm">
        <form action="{{route('public.subscriber.store')}}" method="POST" class="form-container">
            @csrf
          <label for="email"><b>Email</b></label>
          <input type="text" placeholder="Enter Email" name="email" required><br>

          <label for="name"><b>Name (optional)</b></label>
          <input type="text" placeholder="You can use a nickname (option)" name="name" required>
          <br>

          <button type="submit" class="btn">Subscribe</button>
          <button type="button" class="btn cancel" onclick="closeForm()">Maybe Later</button>
        </form>
      </div>
</div>

<script>
    function openForm() {
        document.getElementById("myForm").style.display = "block";
    }

    function closeForm() {
        document.getElementById("myForm").style.display = "none";
    }
</script>
