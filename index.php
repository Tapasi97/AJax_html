<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Dashboard with Data Table</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/15.6.1/nouislider.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./assets/style.css">
</head>

<body>
    <div class="container mt-4">
        <div class="row">

            <!-- Main Content -->
            <main class="col-12">
                <div
                    class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-3 mb-4 border-bottom">
                    <h1 class="h2">Dashboard</h1>
                    <div class="d-flex align-items-center">
                        <!-- Range Slider -->
                        <div id="range-slider" class="me-3"></div>
                        <!-- Search and Add Button -->
                        <div class="d-flex search-container">
                            <input type="text" class="form-control me-2 flex-grow-1" id="searchInput"
                                placeholder="Search...">
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#formModal">Add New</button>
                        </div>
                    </div>
                </div>

                <!-- Data Table -->
                <div class="table-responsive">
                    <table class="table table-bordered table-data">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Gender</th>
                                <th>Age</th>
                                <th>Languages</th>
                                <th>Country</th>
                                <th>City</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>John Doe</td>
                                <td>Male</td>
                                <td>29</td>
                                <td>English, Spanish</td>
                                <td>USA</td>
                                <td>New York</td>
                            </tr>
                            <!-- More data rows can go here -->
                        </tbody>
                    </table>
                </div>

                <!-- Pagination Section -->
                <div id="pagination" class="d-flex justify-content-center">
                    <a href="#" class="btn pagebtn btn-secondary mx-1 active" id="1">1</a>
                    <a href="#" class="btn pagebtn btn-secondary mx-1" id="2">2</a>
                    <a href="#" class="btn pagebtn btn-secondary mx-1" id="3">3</a>
                    <!-- Add more pagination links as needed -->
                </div>
            </main>
        </div>
    </div>

    <!-- Modal with Form in Tabular Layout -->
    <div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="formModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="formModalLabel">Add New Data</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Form inside the modal in a table format -->
                    <form>
                        <table class="table table-bordered table-form">
                            <tbody>
                                <tr>
                                    <td><strong>Name</strong></td>
                                    <td>
                                        <input type="text" class="form-control" id="nameInput" placeholder="Enter name">
                                    </td>
                                </tr>

                                <tr>
                                    <td><strong>Gender</strong></td>
                                    <td>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="genderOptions"
                                                id="genderMale" value="Male">
                                            <label class="form-check-label" for="genderMale">Male</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="genderOptions"
                                                id="genderFemale" value="Female">
                                            <label class="form-check-label" for="genderFemale">Female</label>
                                        </div>
                                    </td>

                                </tr>
                                <tr>
                                    <td><strong>Age</strong></td>
                                    <td>
                                        <input type="number" class="form-control" id="ageInput" placeholder="Enter age">
                                    </td>
                                </tr>
                                <tr>
                                    <td><strong>Languages</strong></td>
                                    <td>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="languageEnglish"
                                                value="English">
                                            <label class="form-check-label" for="languageEnglish">English</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="languageSpanish"
                                                value="Spanish">
                                            <label class="form-check-label" for="languageSpanish">Spanish</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="languageFrench"
                                                value="French">
                                            <label class="form-check-label" for="languageFrench">French</label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><strong>Country</strong></td>
                                    <td>
                                        <select class="form-select" id="countrySelect">
                                            <option selected disabled>Select a country</option>
                                            <option value="USA">USA</option>
                                            <option value="Canada">Canada</option>
                                            <option value="UK">UK</option>
                                            <option value="Australia">Australia</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td><strong>City</strong></td>
                                    <td>
                                        <select class="form-select" id="citySelect">
                                            <option selected disabled>Select a city</option>
                                            <option value="New York">New York</option>
                                            <option value="Toronto">Toronto</option>
                                            <option value="London">London</option>
                                            <option value="Sydney">Sydney</option>
                                        </select>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="text-end">
                            <button type="submit" class="btn btn-primary">Save Data</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="./assets/script.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/15.6.1/nouislider.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="ajax-script.js"></script>
</body>

</html>