<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!----======== CSS ======== -->
    <link rel="stylesheet" href="public/dist/register.css">

    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="icon" type="image/png" href="https://www.kbcambodia.com/wp-content/uploads/2016/08/Norton-University.png">
    <!-- <link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.3/dist/css/bootstrap.min.css"> -->
    <title>Responsive Regisration Form </title>
</head>

<body style="overflow-x: hidden;">
    <section>
        <div>
            <div class="row justify-content-center">
                <div class="col-12 col-sm-10 col-md-8 col-lg-6 col-xl-5 col-xxl-4">
                    <div class="card border border-light-subtle rounded-3 shadow-sm">
                        <div class="card-body p-3 p-md-4 p-xl-5">
                            <div class="text-center mb-3">
                                <!-- <a href="#!"> -->
                                    <img src="public/images/login.png" class="w-25 h-25 rounded rounded-circle" alt="Login-logo" >
                                <!-- </a> -->
                            </div>
                            <h2 class="fs-6 fw-normal text-center text-secondary mb-4">Enter your details to register</h2>
                            <form  action="signup.php" method="POST">
                                <div class="row gy-2 overflow-hidden">
                                    <div class="col-12">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" name="firstName" id="firstName" placeholder="First Name" required>
                                            <label for="firstName" class="form-label">ឈ្មោះនិស្សិត</label>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="form-floating mb-3">
                                            <input type="email" class="form-control" name="email" id="email" placeholder="name@example.com" required>
                                            <label for="email" class="form-label">អុីមែល</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating mb-3">
                                            <input type="password" class="form-control" name="password" id="password" value="" placeholder="Password" required>
                                            <label for="password" class="form-label">ពាក្យសំងាត់</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" name="iAgree" id="iAgree" required>
                                            <label class="form-check-label text-secondary" for="iAgree">
                                                I agree to the <a href="#!" class="link-primary text-decoration-none">terms and conditions</a>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="d-grid my-3">
                                            <button class="btn btn-primary btn-lg" type="submit">ចុះឈ្មោះ</button>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <p class="m-0 text-secondary text-center">មានគណនីហើយ? <a href="index.php" class="link-primary text-decoration">ចូល</a></p>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
    </section>

   
    <script src="public/assets/jquery.js"></script>
    <script src="public/dist/script.js"></script>
    <script src="public/dist/request.js"></script>
    <script src="public/assets/sweetalert.min.js"></script>
</body>

</html>


<script>
    document.addEventListener("DOMContentLoaded", function() {
        const form = document.querySelector("form");

        form.addEventListener("submit", function(event) {
            event.preventDefault(); // Prevent the default form submission

            // Create a FormData object from the form
            const formData = new FormData(form);

            // Send the data using fetch API
            fetch("signup.php", {
                method: "POST",
                body: formData
            })
            .then(response => response.json()) // Parse JSON response
            .then(data => {
                if (data.success) {
                    alert("Account created successfully!");
                    // Optionally redirect or clear the form
                } else {
                    alert("Error: " + data.message);
                }
            })
            .catch(error => {
                console.error("Error:", error);
                alert("An error occurred. Please try again later.");
            });
        });
    });
</script>