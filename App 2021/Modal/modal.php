<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title></title>

</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <!-- Button trigger modal -->
                <button data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-warning">Register</button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header bg-danger text-light">
                                <h5 class="modal-title" id="exampleModalLabel">REGISTER HERE...</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <input type="text" class="form-control" placeholder="First Name">
                                <br>
                                <input type="text" class="form-control" placeholder="Last Name">
                                <br>
                                <input type="email" class="form-control" placeholder="Email">
                                <br>
                                <input type="password" name="" id="" class="form-control" placeholder="Create Password">
                                <br>
                                <input type="password" name="" id="" class="form-control" placeholder="Confirm Password">
                                <br>
                            </div>
                            <div class="modal-footer">
                                <p>Have an account? Please</p><a href="#" style="text-decoration: none;">Sign in</a>
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Register</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Modal -->
            </div>
        </div>
    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <script src="js/bootstrap.js"></script>
</body>

</html>