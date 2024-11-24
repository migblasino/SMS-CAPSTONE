@include('includes.base')
  <body>
      <!-- partial:partials/_navbar.html -->
      @include('includes.navbar')
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        @include('includes.sidebar')
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="row">
              <div class="col-md-12 grid-margin">
                <div class="row">
                  <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                    <h3 class="font-weight-bold">Mabuhay mga Kabarangay!</h3>
                    <h6 class="font-weight-normal mb-0">Every action taken towards addressing malnutrition brings hope for a healthier future.</h6>
                  </div>
                  <div class="col-12 col-xl-4">
                    <div class="justify-content-end d-flex">
                      <div class="dropdown flex-md-grow-1 flex-xl-grow-0">
                        <button class="btn btn-sm btn-light bg-white dropdown-toggle" type="button" id="dropdownMenuDate2" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                          <i class="mdi mdi-calendar"></i> Today (10 Jan 2021) </button>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuDate2">
                          <a class="dropdown-item" href="#">January - March</a>
                          <a class="dropdown-item" href="#">March - June</a>
                          <a class="dropdown-item" href="#">June - August</a>1
                          <a class="dropdown-item" href="#">August - November</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 grid-margin stretch-card">
                <div class="card tale-bg">
                  <div class="card-people mt-auto">
                    <img src="{{ asset('img/dashboard/people.svg') }}" alt="people">
                    <div class="weather-info">
                      <div class="d-flex">
                        <div>
                          <h2 class="mb-0 font-weight-normal"><i class=""></i><sup></sup></h2>
                        </div>
                        <div class="ms-2">
                          <h4 class="location font-weight-normal"></h4>
                          <h6 class="font-weight-normal"></h6>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6 grid-margin transparent">
                <div class="row">
                  <div class="col-md-6 mb-4 stretch-card transparent">
                    <div class="card card-tale">
                      <div class="card-body">
                        <p class="mb-4">Total Patient</p>
                        <p class="fs-30 mb-2">{{$countTotalPatients}}</p>
                        
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 mb-4 stretch-card transparent">
                    <div class="card card-dark-blue">
                      <div class="card-body">
                        <p class="mb-4">Appointed Event</p>
                        <p class="fs-30 mb-2">65</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6 mb-4 mb-lg-0 stretch-card transparent">
                    <div class="card card-light-blue">
                      <div class="card-body">
                        <p class="mb-4">Registered Admin</p>
                        <p class="fs-30 mb-2">6</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 stretch-card transparent">
                    <div class="card card-light-danger">
                      <div class="card-body">
                        <p class="mb-4">Malnutrition Reports</p>
                        <p class="fs-30 mb-2">200</p>
          
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
              <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

   <div class="row">
    <!-- Weight for Age Card -->
    <div class="col-md-6 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <!-- Flexbox container for title and select -->
                <div class="d-flex justify-content-between align-items-center">
                    <p class="card-title mb-0" style="flex-grow: 1;">Weight for Age</p>
                    <select id="weight-category" name="category" class="form-select text-info" style="width: 150px; font-size: 0.9em; margin-left: 10px;">
                        <option value="Normal" selected>Normal</option>
                        <option value="Overweight">Overweight</option>
                        <option value="Underweight">Underweight</option>
                        <option value="Severely Underweight">Severely Underweight</option>
                    </select>
                </div>

                <!-- Description paragraph -->
                <p class="font-weight-500 mt-3 mb-4">
                    The total number of sessions within the date range. It is the period time a user is actively engaged with your website, page or app, etc.
                </p>

                <!-- Chart Legend and Canvas -->
                <div id="sales-chart-legend" class="chartjs-legend mt-4 mb-2"></div>
                <canvas id="sales-chart"></canvas>
                <p class="text-center mt-2" style="font-size: 0.8em;">Age in Months</p>
            </div>
        </div>
    </div>
              <script>
                
                  document.addEventListener('DOMContentLoaded', function () {
                      // Initial data passed from the controller
                      const countsByAgeRangeN = @json($countsByAgeRangeN);

                      // Render the chart initially
                      const ctx = document.getElementById('sales-chart');
                      const salesChart = new Chart(ctx, {
                          type: 'bar',
                          data: {
                              labels: ["0-5", "6-11", "12-23", "24-35", "36-47", "48-59"],
                              datasets: [
                                  {
                                      label: 'Boys',
                                      data: countsByAgeRangeN.map(range => range.boys),
                                      backgroundColor: '#4B49AC',
                                      borderRadius: 5,
                                  },
                                  {
                                      label: 'Girls',
                                      data: countsByAgeRangeN.map(range => range.girls),
                                      backgroundColor: '#FF6384',
                                      borderRadius: 5,
                                  }
                              ]
                          },
                          options: {
                              responsive: true,
                              maintainAspectRatio: true,
                              scales: {
                                  x: {
                                      grid: { display: false },
                                      ticks: { color: "#6C7383" },
                                  },
                                  y: {
                                      grid: { display: true },
                                      ticks: {
                                          color: "#6C7383",
                                          min: 0,
                                          callback: function (value) { return value; }
                                      }
                                  }
                              },
                              plugins: {
                                  legend: {
                                      display: true,
                                      labels: { color: '#6C7383' }
                                  }
                              }
                          }
                      });

                      // Event listener for the dropdown to filter data
                      document.getElementById('weight-category').addEventListener('change', function () {
                          const selectedCategory = this.value;

                          // Fetch the filtered data via AJAX
                          fetch(`/dashboard/filter-wfa?category=${selectedCategory}`)
                              .then(response => response.json())
                              .then(data => {
                                  // Update the chart data
                                  salesChart.data.datasets[0].data = data.map(range => range.boys);
                                  salesChart.data.datasets[1].data = data.map(range => range.girls);
                                  salesChart.update();
                              })
                              .catch(error => console.error('Error fetching data:', error));
                      });
                  });
                  </script>      
           <div class="col-md-6 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <!-- Flexbox container for title and select -->
            <div class="d-flex justify-content-between align-items-center">
                <p class="card-title mb-0" style="flex-grow: 1;">Length for Age</p>
                <select id="height-category" name="hcategory" class="form-select text-info" style="width: 150px; font-size: 0.9em; margin-left: 10px;">
                    <option value="Normal" selected>Normal</option>
                    <option value="Stunted">Stunted</option>
                    <option value="Severely Stunted">Severely Stunted</option>
                    <option value="Tall">Tall</option>
                </select>
            </div>

            <!-- Description paragraph -->
            <p class="font-weight-500 mt-3 mb-4">
                The total number of sessions within the date range. It is the period time a user is actively engaged with your website, page or app, etc.
            </p>

            <!-- Chart Legend and Canvas -->
            <div id="lfa-chart-legend" class="chartjs-legend mt-4 mb-2"></div>
            <canvas id="lfa-chart"></canvas>
            <p class="text-center mt-2" style="font-size: 0.8em;">Age in Months</p>
        </div>
    </div>
</div>

              <script>
                  document.addEventListener('DOMContentLoaded', function () {
                      // Initial data passed from the controller
                      const countsByAgeRangeLfaN = @json($countsByAgeRangeLfaN);

                      // Render the chart initially
                      const ctx = document.getElementById('lfa-chart');
                      const lfaChart = new Chart(ctx, {
                          type: 'bar',
                          data: {
                              labels: ["0-5", "6-11", "12-23", "24-35", "36-47", "48-59"],
                              datasets: [
                                  {
                                      label: 'Boys',
                                      data: countsByAgeRangeLfaN.map(range => range.boys),
                                      backgroundColor: '#228C22',
                                      borderRadius: 5,
                                  },
                                  {
                                      label: 'Girls',
                                      data: countsByAgeRangeLfaN.map(range => range.girls),
                                      backgroundColor: '#FF964F',
                                      borderRadius: 5,
                                  }
                              ]
                          },
                          options: {
                              responsive: true,
                              maintainAspectRatio: true,
                              scales: {
                                  x: {
                                      grid: { display: false },
                                      ticks: { color: "#6C7383" },
                                  },
                                  y: {
                                      grid: { display: true },
                                      ticks: {
                                          color: "#6C7383",
                                          min: 0,
                                          callback: function (value) { return value; }
                                      }
                                  }
                              },
                              plugins: {
                                  legend: {
                                      display: true,
                                      labels: { color: '#6C7383' }
                                  }
                              }
                          }
                      });

                      // Event listener for the dropdown to filter data
                      document.getElementById('height-category').addEventListener('change', function () {
                          const selectedHeightCategory = this.value;

                          // Fetch the filtered data via AJAX
                          fetch(`/dashboard/filter-lfa?hcategory=${selectedHeightCategory}`)
                              .then(response => response.json())
                              .then(data => {
                                  // Update the chart data
                                  lfaChart.data.datasets[0].data = data.map(range => range.boys);
                                  lfaChart.data.datasets[1].data = data.map(range => range.girls);
                                  lfaChart.update();
                              })
                              .catch(error => console.error('Error fetching data:', error));
                      });
                  });
              </script>
           <div class="col-md-6 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <!-- Flexbox container for title and select -->
            <div class="d-flex justify-content-between align-items-center">
                <p class="card-title mb-0" style="flex-grow: 1;">Weight for Length/Height</p>
                <select id="wfl-category" name="wflcategory" class="form-select text-info" style="width: 150px; font-size: 0.9em; margin-left: 10px;">
                    <option value="Normal" selected>Normal</option>
                    <option value="SAM">SAM</option>
                    <option value="MAM">MAM</option>
                    <option value="Overweight">Overweight</option>
                    <option value="Obese">Obese</option>
                </select>
            </div>

            <!-- Description paragraph -->
            <p class="font-weight-500 mt-3 mb-4">
                The total number of sessions within the date range. It is the period time a user is actively engaged with your website, page or app, etc.
            </p>

            <!-- Chart Legend and Canvas -->
            <div id="wfl-sales-chart-legend" class="chartjs-legend mt-4 mb-2"></div>
            <canvas id="wfl-sales-chart"></canvas>
            <p class="text-center mt-2" style="font-size: 0.8em;">Age in Months</p>
        </div>
    </div>
</div>

            <script>
                  document.addEventListener('DOMContentLoaded', function () {
                      // Initial data passed from the controller
                      const countsByAgeRangeWflN = @json($countsByAgeRangeWflN);

                      // Render the chart initially
                      const ctx = document.getElementById('wfl-sales-chart');
                      const wflChart = new Chart(ctx, {
                          type: 'bar',
                          data: {
                              labels: ["0-5", "6-11", "12-23", "24-35", "36-47", "48-59"],
                              datasets: [
                                  {
                                      label: 'Boys',
                                      data: countsByAgeRangeWflN.map(range => range.boys),
                                      backgroundColor: '#F52F57',
                                      borderRadius: 5,
                                  },
                                  {
                                      label: 'Girls',
                                      data: countsByAgeRangeWflN.map(range => range.girls),
                                      backgroundColor: '#FFEE8C',
                                      borderRadius: 5,
                                  }
                              ]
                          },
                          options: {
                              responsive: true,
                              maintainAspectRatio: true,
                              scales: {
                                  x: {
                                      grid: { display: false },
                                      ticks: { color: "#6C7383" },
                                  },
                                  y: {
                                      grid: { display: true },
                                      ticks: {
                                          color: "#6C7383",
                                          min: 0,
                                          callback: function (value) { return value; }
                                      }
                                  }
                              },
                              plugins: {
                                  legend: {
                                      display: true,
                                      labels: { color: '#6C7383' }
                                  }
                              }
                          }
                      });

                      // Event listener for the dropdown to filter data
                      document.getElementById('wfl-category').addEventListener('change', function () {
                          const selectedWflCategory = this.value;

                          // Fetch the filtered data via AJAX
                          fetch(`/dashboard/filter-wfl?wflcategory=${selectedWflCategory}`)
                              .then(response => response.json())
                              .then(data => {
                                  // Update the chart data
                                  wflChart.data.datasets[0].data = data.map(range => range.boys);
                                  wflChart.data.datasets[1].data = data.map(range => range.girls);
                                  wflChart.update();
                              })
                              .catch(error => console.error('Error fetching data:', error));
                      });
                  });
              </script>
            <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <p class="card-title">Malnourished Gender Report </p>
                    <p class="font-weight-500">The BNS quarterly status report provides a comprehensive analytical overview of malnutrition among children aged 0-5, including the status of malnourished children based on gender.</p>
                    <div class="d-flex flex-wrap mb-5">
                      <div class="me-5 mt-3">
                      </div>
                      <div class="mt-3">
                    
                        
                      </div>
                    </div>
                    <canvas id="order-chart"></canvas>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 grid-margin stretch-card">
                <div class="card position-relative">
                  <div class="card-body">
                    <div id="detailedReports" class="carousel slide detailed-report-carousel position-static pt-2" data-bs-ride="carousel">
                      <div class="carousel-inner">
                        <div class="carousel-item active">
                          <div class="row">
                            <div class="col-md-12 col-xl-3 d-flex flex-column justify-content-start">
                              <div class="ml-xl-4 mt-3">
                                <p class="card-title">Malnutrition Reports</p>
                                
                                <h1 class="text-primary">$34040</h1>
                                <h3 class="font-weight-500 mb-xl-4 text-primary">North America</h3>
                                <p class="mb-2 mb-xl-0">The total number of sessions within the date range. It is the period time a user is actively engaged with your website, page or app, etc</p>
                              </div>
                            </div>
                            <div class="col-md-12 col-xl-9">
                              <div class="row">
                                <div class="col-md-6 border-right">
                                  <div class="table-responsive mb-3 mb-md-0 mt-3">
                                    <table class="table table-borderless report-table">
                                      <tr>
                                        <td class="text-muted">Illinois</td>
                                        <td class="w-100 px-0">
                                          <div class="progress progress-md mx-4">
                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                          </div>
                                        </td>
                                        <td>
                                          <h5 class="font-weight-bold mb-0">713</h5>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td class="text-muted">Washington</td>
                                        <td class="w-100 px-0">
                                          <div class="progress progress-md mx-4">
                                            <div class="progress-bar bg-warning" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                          </div>
                                        </td>
                                        <td>
                                          <h5 class="font-weight-bold mb-0">583</h5>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td class="text-muted">Mississippi</td>
                                        <td class="w-100 px-0">
                                          <div class="progress progress-md mx-4">
                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                                          </div>
                                        </td>
                                        <td>
                                          <h5 class="font-weight-bold mb-0">924</h5>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td class="text-muted">California</td>
                                        <td class="w-100 px-0">
                                          <div class="progress progress-md mx-4">
                                            <div class="progress-bar bg-info" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                          </div>
                                        </td>
                                        <td>
                                          <h5 class="font-weight-bold mb-0">664</h5>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td class="text-muted">Maryland</td>
                                        <td class="w-100 px-0">
                                          <div class="progress progress-md mx-4">
                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                          </div>
                                        </td>
                                        <td>
                                          <h5 class="font-weight-bold mb-0">560</h5>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td class="text-muted">Alaska</td>
                                        <td class="w-100 px-0">
                                          <div class="progress progress-md mx-4">
                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                          </div>
                                        </td>
                                        <td>
                                          <h5 class="font-weight-bold mb-0">793</h5>
                                        </td>
                                      </tr>
                                    </table>
                                  </div>
                                </div>
                                <div class="col-md-6 mt-3">
                                  <div class="daoughnutchart-wrapper">
                                    <canvas id="north-america-chart"></canvas>
                                  </div>
                                  <div id="north-america-chart-legend">
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="carousel-item">
                          <div class="row">
                            <div class="col-md-12 col-xl-3 d-flex flex-column justify-content-start">
                              <div class="ml-xl-4 mt-3">
                                <p class="card-title">Detailed Reports</p>
                                <h1 class="text-primary">$34040</h1>
                                <h3 class="font-weight-500 mb-xl-4 text-primary">North America</h3>
                                <p class="mb-2 mb-xl-0">The total number of sessions within the date range. It is the period time a user is actively engaged with your website, page or app, etc</p>
                              </div>
                            </div>
                            <div class="col-md-12 col-xl-9">
                              <div class="row">
                                <div class="col-md-6 border-right">
                                  <div class="table-responsive mb-3 mb-md-0 mt-3">
                                    <table class="table table-borderless report-table">
                                      <tr>
                                        <td class="text-muted">Illinois</td>
                                        <td class="w-100 px-0">
                                          <div class="progress progress-md mx-4">
                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                          </div>
                                        </td>
                                        <td>
                                          <h5 class="font-weight-bold mb-0">713</h5>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td class="text-muted">Washington</td>
                                        <td class="w-100 px-0">
                                          <div class="progress progress-md mx-4">
                                            <div class="progress-bar bg-warning" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                          </div>
                                        </td>
                                        <td>
                                          <h5 class="font-weight-bold mb-0">583</h5>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td class="text-muted">Mississippi</td>
                                        <td class="w-100 px-0">
                                          <div class="progress progress-md mx-4">
                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                                          </div>
                                        </td>
                                        <td>
                                          <h5 class="font-weight-bold mb-0">924</h5>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td class="text-muted">California</td>
                                        <td class="w-100 px-0">
                                          <div class="progress progress-md mx-4">
                                            <div class="progress-bar bg-info" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                          </div>
                                        </td>
                                        <td>
                                          <h5 class="font-weight-bold mb-0">664</h5>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td class="text-muted">Maryland</td>
                                        <td class="w-100 px-0">
                                          <div class="progress progress-md mx-4">
                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                          </div>
                                        </td>
                                        <td>
                                          <h5 class="font-weight-bold mb-0">560</h5>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td class="text-muted">Alaska</td>
                                        <td class="w-100 px-0">
                                          <div class="progress progress-md mx-4">
                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                          </div>
                                        </td>
                                        <td>
                                          <h5 class="font-weight-bold mb-0">793</h5>
                                        </td>
                                      </tr>
                                    </table>
                                  </div>
                                </div>
                                <div class="col-md-6 mt-3">
                                  <div class="daoughnutchart-wrapper">
                                    <canvas id="south-america-chart"></canvas>
                                  </div>
                                  <div id="south-america-chart-legend"></div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <a class="carousel-control-prev" href="#detailedReports" role="button" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      </a>
                      <a class="carousel-control-next" href="#detailedReports" role="button" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
   
            <footer class="footer">
                                    <div class="d-sm-flex justify-content-center justify-content-sm-between">
                                        <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">© 2024 Brgy. San Manuel Malnutrition Monitoring System. All rights reserved.</span>
                                        <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">
                                            <a href="{{ route('termsprivacy.index') }}" class="footer-link">Terms of Service</a>  |  
                                            <a href="{{ route('termsprivacy.index') }}" class="footer-link">Privacy Policy</a>
                                        </span>
                                    </div>
                                </footer>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- Vendor JS -->
<script src="{{ asset('vendors/js/vendor.bundle.base.js') }}"></script>
<!-- endinject -->

<!-- Plugin JS for this page -->
<script src="{{ asset('vendors/chart.js/chart.umd.js') }}"></script>
<script src="{{ asset('vendors/datatables.net/jquery.dataTables.js') }}"></script>
{{-- Uncomment if needed --}}
{{-- <script src="{{ asset('vendors/datatables.net-bs4/dataTables.bootstrap4.js') }}"></script> --}}
<script src="{{ asset('vendors/datatables.net-bs5/dataTables.bootstrap5.js') }}"></script>
<script src="{{ asset('js/dataTables.select.min.js') }}"></script>
<!-- End plugin JS for this page -->

<!-- Core JS (injected JS) -->
<script src="{{ asset('js/off-canvas.js') }}"></script>
<script src="{{ asset('js/template.js') }}"></script>
<script src="{{ asset('js/settings.js') }}"></script>
<script src="{{ asset('js/todolist.js') }}"></script>
<!-- endinject -->

<!-- Custom JS for this page -->
<script src="{{ asset('js/jquery.cookie.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/dashboard.js') }}"></script>

  </body>
</html>