<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SEA Salon - Reservation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container-fluid bg-dark text-white">

        {{-- Navbar Start --}}
        <nav class="navbar navbar-expand-lg navbar-dark bg-transparent">
            <div class="container">
                <a class="navbar-brand fs-3 fw-bold" href="{{ url('/') }}">SEA Salon</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{ url('/') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact</a>
                        </li>
                    </ul>
                    <div class="d-flex ms-auto">
                        <a class="btn btn-outline-light" href="{{ route('reservation.form') }}">Reserve Now</a>
                    </div>
                </div>
            </div>
        </nav>
        {{-- Navbar End --}}

        {{-- Reservation Form Start --}}
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="card-title text-center mb-4">Make a Reservation</h3>
                            <form action="{{ route('reservations.store') }}" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label for="name" class="form-label">Name</label>
                                    <input type="text" class="form-control" id="name" name="name" required>
                                </div>
                                <div class="mb-3">
                                    <label for="phone" class="form-label">Active Phone Number</label>
                                    <input type="text" class="form-control" id="phone" name="phone" required>
                                </div>
                                <div class="mb-3">
                                    <label for="service" class="form-label">Type of Service</label>
                                    <select class="form-select" id="service" name="service" required>
                                        <option value="Haircuts and Styling">Haircuts and Styling</option>
                                        <option value="Manicure and Pedicure">Manicure and Pedicure</option>
                                        <option value="Facial Treatments">Facial Treatments</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="datetime" class="form-label">Date and Time</label>
                                    <input type="datetime-local" class="form-control" id="datetime" name="datetime"
                                        required>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary">Submit Reservation</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- Reservation Form End --}}

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
