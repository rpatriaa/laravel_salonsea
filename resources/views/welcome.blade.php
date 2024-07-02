<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SEA Salon</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container-fluid bg-dark text-white">

        {{-- Navbar Start --}}
        <nav class="navbar navbar-expand-lg bg-transparent">
            <div class="container">
                <a class="navbar-brand fs-3 fw-medium text-white" href="#">SEA Salon</a>
                <button class="navbar-toggler bg-light" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                    <ul class="navbar-nav ms-auto mb-2 gap-3 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link text-white" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#">Contact</a>
                        </li>
                    </ul>
                    <div class="d-flex ms-auto">
                        <a class="btn btn-outline-light" href="{{ route('reservation.form') }}">Reserve Now</a>
                    </div>
                </div>
            </div>
        </nav>
        {{-- Navbar End --}}


        {{-- Main Content Start --}}
        <div class="container">
            <div class="row text-white vh-100 text-center align-items-center justify-content-center"
                style="background-image: url('{{ asset('assets/img/salon1.jpg') }}'); background-size: cover; background-position: center;">
                <div class="col-auto">
                    <h1 class="fw-bold">Welcome to SEA Salon</h1>
                    <p class="pt-5 mt-5 fs-5 shadow-sm fw-medium text-opacity-75 bg-dark-emphasis">Beauty and Elegance
                        Redefined</p>
                </div>
            </div>
            <div class="row bg-light py-5 justify-content-center align-items-center" style="height: auto;">
                <div class="text-dark col-lg-6 h-75">
                    <h2 class="text-center">Our Services</h2>
                    <p>Haircuts and Styling</p>
                    <p>Manicure and Pedicure</p>
                    <p>Facial Treatments</p>
                </div>
            </div>
            <div class="row py-5 justify-content-center align-items-center">
                <div class="col-md-6">
                    <h3 class="card-title text-center">Contact Us</h3>
                    <p class="card-text text-center">Feel free to reach out to us for appointments and inquiries.</p>
                    <div class="d-flex justify-content-around mt-4">
                        <div>
                            <h5>Thomas</h5>
                            <p>08123456789</p>
                        </div>
                        <div>
                            <h5>Sekar</h5>
                            <p>08164829372</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row pb-3 justify-content-center align-items-center">
                <div class="col-md-6">
                    <h3 class="card-title text-center">Customer Reviews</h3>
                    <div class="card mt-4 shadow-sm border-0">
                        <div class="card-body p-4">
                            <h5 class="card-title mb-4 text-center">Leave a Review</h5>
                            <form id="review-form" action="{{ route('reviews.store') }}" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label for="customer-name" class="form-label">Customer Name</label>
                                    <input type="text" class="form-control" id="customer-name" name="customer_name"
                                        placeholder="Your name" required>
                                </div>
                                <div class="mb-3">
                                    <label for="star-rating" class="form-label">Star Rating</label>
                                    <select class="form-select" id="star-rating" name="star_rating" required>
                                        <option value="">Select a rating</option>
                                        <option value="1">1 - Poor</option>
                                        <option value="2">2 - Fair</option>
                                        <option value="3">3 - Good</option>
                                        <option value="4">4 - Very Good</option>
                                        <option value="5">5 - Excellent</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="comment" class="form-label">Comment</label>
                                    <textarea class="form-control" id="comment" name="comment" rows="3" placeholder="Your comments" required></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary w-100">Submit Review</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- Customer Reviews End --}}

        {{-- Main Content End --}}

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>


</body>

</html>
