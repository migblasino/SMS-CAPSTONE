@include ('includes.base')
<style>
   /* Reset and Base Styles */
   * {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
}

body {
    font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
    line-height: 1.6;
    color: #333;
}

.container-fluid {
    width: 100%;
    padding-right: 0px;
    padding-left: 0px;
    margin-right: auto;
    margin-left: auto;
}

.container.mt-5 {
    max-width: 1200px;
    background-color: white;
    border-radius: 16px;
    padding: 5px;
    margin-top: 0rem !important;

}

/* Card Styles */
.card {
    border: none;
    background-color: transparent;
}

.card-title {
    color: #333;
    font-weight: 600;
    border-bottom: 2px solid #007bff;
    padding-bottom: 10px;
    margin-bottom: 20px;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

/* Form Styles */
.form-label {
    display: block;
    margin-bottom: 0.5rem;
    font-weight: 500;
    color: #495057;
}

.form-control, .form-select {
    display: block;
    width: 100%;
    padding: 0.575rem 0.75rem;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #495057;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #ced4da;
    appearance: none;
    border-radius: 0.375rem;
    transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}

.form-control:focus, .form-select:focus {
    color: #495057;
    background-color: #fff;
    border-color: #007bff;
    outline: 0;
    box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
}

.form-control.is-invalid, .form-select.is-invalid {
    border-color: #dc3545;
}

.invalid-feedback {
    display: none;
    width: 100%;
    margin-top: 0.25rem;
    font-size: 80%;
    color: #dc3545;
}

.form-control.is-invalid ~ .invalid-feedback,
.form-select.is-invalid ~ .invalid-feedback {
    display: block;
}

/* Button Styles */
.btn {
    display: inline-block;
    font-weight: 400;
    text-align: center;
    vertical-align: middle;
    user-select: none;
    border: 1px solid transparent;
    padding: 0.575rem 1.25rem;
    font-size: 1rem;
    line-height: 1.5;
    border-radius: 0.375rem;
    transition: all 0.3s ease;
}

.btn-primary {
    color: #fff;
    background-color: #007bff;
    border-color: #007bff;
}

.btn-primary:hover {
    color: #fff;
    background-color: #0056b3;
    border-color: #0056b3;
}

.btn-info {
    display: flex;
    align-items: center;
    gap: 0px;
    color: #fff;
    background-color: #17a2b8;
    border-color: #17a2b8;
}

.btn-info:hover {
    color: #fff;
    background-color: #138496;
    border-color: #117a8b;
}

.btn-secondary {
    color: #fff;
    background-color: #6c757d;
    border-color: #6c757d;
}

.btn-secondary:hover {
    color: #fff;
    background-color: #545b62;
    border-color: #4e555b;
}

/* Responsive Layout */
.row {
    display: flex;
    flex-wrap: wrap;
    margin-right: -15px;
    margin-left: -15px;
}

.col-md-3, .col-md-4, .col-md-6, .col-md-12 {
    position: relative;
    width: 100%;
    padding-right: 15px;
    padding-left: 15px;
}

@media (min-width: 768px) {
    .col-md-3 {
        flex: 0 0 25%;
        max-width: 25%;
    }
    .col-md-4 {
        flex: 0 0 33.333333%;
        max-width: 33.333333%;
    }
    .col-md-6 {
        flex: 0 0 50%;
        max-width: 50%;
    }
    .col-md-12 {
        flex: 0 0 100%;
        max-width: 100%;
    }
}


    /* Custom Modal Styles */
    .modal-content {
        border-radius: 8px;
        box-shadow: 0 4px 6px rgba(0,0,0,0.1);
    }

    .modal-header {
        background-color: #f8f9fa;
        border-bottom: 1px solid #e9ecef;
        padding: 15px;
    }

    .modal-body {
        padding: 20px;
    }

    .form-control, .form-select {
        transition: all 0.3s ease;
        border-color: #ced4da;
    }

    .form-control:focus, .form-select:focus {
        border-color: #007bff;
        box-shadow: 0 0 0 0.2rem rgba(0,123,255,0.25);
    }

    .form-control.is-invalid, .form-select.is-invalid {
        border-color: #dc3545;
    }

    .invalid-feedback {
        color: #dc3545;
        display: none;
    }

    .form-control.is-invalid ~ .invalid-feedback,
    .form-select.is-invalid ~ .invalid-feedback {
        display: block;
    }

    .btn-primary {
        background-color: #007bff;
        border-color: #007bff;
        transition: all 0.3s ease;
        border-radius: 13px;
    }

    .btn-primary:hover {
        background-color: #0056b3;
        border-color: #0056b3;
    }

    .btn-secondary {
        background-color: #6c757d;
        border-color: #6c757d;
    }

    .btn-secondary:hover {
        background-color: #545b62;
        border-color: #545b62;
    }

    @media (max-width: 576px) {
        .modal-dialog {
            margin: 1.75rem 0.5rem;
            max-width: calc(100% - 1rem);
        }

        .row > div {
            margin-bottom: 0.5rem;
        }
    }
/* General top notification style */
/* General top notification style */
.top-notification {
    visibility: hidden;                   /* Initially hidden */
    position: fixed;
    top: -100px;                           /* Initially off-screen */
    left: 50%;                             /* Center horizontally */
    transform: translateX(-50%);           /* Adjust for exact centering */
    background-color: rgba(255, 255, 255, 0.8);  /* White background with transparency */
    color: #e74c3c;                        /* Default text color (will be overridden for the header) */
    padding: 20px 30px;
    font-size: 16px;
    font-weight: 500;
    border-radius: 15px;                   /* Rounded corners */
    z-index: 10000;                        /* Ensure it's on top */
    width: 90%;                            /* Responsive width */
    max-width: 400px;                      /* Maximum width */
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1); /* Soft shadow */
    display: flex;
    flex-direction: column;                /* Stack content vertically */
    align-items: center;                   /* Center items horizontally */
    justify-content: flex-start;           /* Align content to the top */
    text-align: center;                    /* Center text */
    transition: top 0.5s ease, visibility 0s linear 0.5s; /* Smooth transition for visibility */
    /* Apply backdrop blur effect */
    backdrop-filter: blur(8px);            /* 8px blur for the frosted-glass effect */
    -webkit-backdrop-filter: blur(8px);     /* For Safari compatibility */
}

/* Header style */
.notification-header {
    color: #333;  
    font-size: 18px;
    font-weight: 600;                      /* Bold header */
    margin-bottom: 10px;                   /* Space below the header */
}

/* Body style (for message content) */
.notification-body {
    font-size: 16px;
    font-weight: 400;
    color: #333;                                 /* Slightly muted color for the message */
}

/* Success Notification (Light Green) */
.top-notification.notification-success .notification-header {
    color: #4CAF50; /* Light Green */
}

/* Warning Notification (Soft Orange) */
.top-notification.notification-warning .notification-header {
    color: #FF9800; /* Soft Orange */
}

/* Error Notification (Soft Red) */
.top-notification.notification-error .notification-header {
    color: #F44336; /* Soft Red */
}

/* Show notification when active */
.top-notification.show {
    visibility: visible;                  /* Make visible */
    top: 20px;                             /* Slide down to this position */
    transition: top 0.5s ease, visibility 0s; /* Smooth transition for visibility */
}

/* Fade-out and slide-up effect */
.top-notification.hide {
    visibility: hidden;
    top: -100px; /* Slide back off-screen */
    transition: top 0.5s ease, visibility 0s linear 0.5s; /* Smooth transition back */
}


</style>

  <body>
  <div class="container-scroller">
        @include('includes.navbar')
        <div class="container-fluid page-body-wrapper">
            @include('includes.sidebar')
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="row">
                        <div class="col-12 grid-margin">
              <div class="container mt-5">
                <div class="card">
                    <div class="card-body">
                    <h4 class="card-title d-flex justify-content-between align-items-center">
    Edit Patient
    <div class="ms-auto d-flex gap-2">
        <a href="{{route('view.profile', ['id' => $patient->id ])}}" class="btn btn-warning btn-sm text-dark" style="border-radius: 0.50rem; padding: 0.5rem 1.25rem;">
            View Profile
        </a>
        <a href="#" data-bs-toggle="modal" data-bs-target="#myModal" class="btn btn-info btn-sm text-white" style="border-radius: 0.50rem; padding: 0.5rem 1.25rem;">
            Add Parent
        </a>
    </div>
</h4>

                        <form class="form-sample" method="POST" action="{{ route('patient.update', ['id' => $patient->id]) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <p class="card-description"> Personal information </p>
                            <div class="row">
                                <!-- Last Name -->
                                <div class="col-md-3">
                                    <div class="form-group mb-3">
                                        <label for="lastname" class="form-label">Last Name</label>
                                        <input type="text" class="form-control @error('lastname') is-invalid @enderror" 
                                               id="lastname" name="lastname" 
                                               value="{{ old('lastname', $patient->lastname) }}" 
                                               required placeholder="Enter last name"/>
                                        @error('lastname')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <!-- First Name -->
                                <div class="col-md-3">
                                    <div class="form-group mb-3">
                                        <label for="firstname" class="form-label">First Name</label>
                                        <input type="text" class="form-control @error('firstname') is-invalid @enderror" 
                                               id="firstname" name="firstname" 
                                               value="{{ old('firstname', $patient->firstname) }}" 
                                               required placeholder="Enter first name"/>
                                        @error('firstname')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <!-- Middle Name -->
                                <div class="col-md-3">
                                    <div class="form-group mb-3">
                                        <label for="middlename" class="form-label">Middle Name</label>
                                        <input type="text" class="form-control" 
                                               id="middlename" name="middlename" 
                                               value="{{ old('middlename', $patient->middlename) }}" 
                                               placeholder="Enter middle name"/>
                                    </div>
                                </div>

                                <!-- Suffix -->
                                <div class="col-md-3">
                                    <div class="form-group mb-3">
                                        <label for="suffix" class="form-label">Suffix</label>
                                        <input type="text" class="form-control" 
                                               id="suffix" name="suffix" 
                                               value="{{ old('suffix', $patient->suffix) }}" 
                                               placeholder="Jr., Sr., etc."/>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <!-- Birthday -->
                                <div class="col-md-4">
                                    <div class="form-group mb-3">
                                        <label for="birthday" class="form-label">Birthday</label>
                                        <input type="date" class="form-control @error('birthday') is-invalid @enderror" 
                                               id="birthday" name="birthday" 
                                               value="{{ old('birthday', $patient->birthday) }}" 
                                               required max="{{ now()->format('Y-m-d') }}"/>
                                        @error('birthday')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <!-- Gender -->
                                <div class="col-md-4">
                                    <div class="form-group mb-3">
                                        <label for="gender" class="form-label">Gender</label>
                                        <select class="form-select @error('gender') is-invalid @enderror" 
                                                id="gender" name="gender" 
                                                required>
                                            <option value="">Select Gender</option>
                                            <option value="male" {{ old('gender', $patient->gender) == 'male' ? 'selected' : '' }}>Male</option>
                                            <option value="female" {{ old('gender', $patient->gender) == 'female' ? 'selected' : '' }}>Female</option>
                                        </select>
                                        @error('gender')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <!-- District -->
                                <div class="col-md-4">
                                    <div class="form-group mb-3">
                                        <label for="district_id" class="form-label">District</label>
                                        <select class="form-select @error('district_id') is-invalid @enderror" 
                                                id="district_id" name="district_id" required>
                                            <option value="">Select District</option>
                                            @foreach($districts as $district)
                                                <option value="{{ $district->id }}" 
                                                    {{ old('district_id', $patient->district_id) == $district->id ? 'selected' : '' }}>
                                                    {{ $district->district_name }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('district_id')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <!-- Parent/Guardian -->
                                <div class="col-md-4">
                                    <div class="form-group mb-3">
                                        <label for="parent_id" class="form-label">Parent/Guardian</label>
                                        <select class="form-select @error('parent_id') is-invalid @enderror" 
                                                id="parent_id" name="parent_id" 
                                                required>
                                            <option value="">Select Parent/Guardian</option>
                                            @foreach($parents as $parent)
                                                <option value="{{ $parent->id }}" 
                                                    {{ old('parent_id', $patient->parent_id) == $parent->id ? 'selected' : '' }}>
                                                    {{ $parent->lastname }}, {{ $parent->firstname }} {{ $parent->middlename }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('parent_id')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <!-- Height -->
                                <div class="col-md-4">
                                    <div class="form-group mb-3">
                                        <label for="height" class="form-label">Height (cm)</label>
                                        <input type="number" step="0.1" min="0" max="250" 
                                               class="form-control @error('height') is-invalid @enderror" 
                                               id="height" name="height" 
                                               value="{{ old('height', $patient->height) }}" 
                                               placeholder="Enter height in cm"/>
                                        @error('height')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <!-- Weight -->
                                <div class="col-md-4">
                                    <div class="form-group mb-3">
                                        <label for="weight" class="form-label">Weight (kg)</label>
                                        <input type="number" step="0.1" min="0" max="500" 
                                               class="form-control @error('weight') is-invalid @enderror" 
                                               id="weight" name="weight" 
                                               value="{{ old('weight', $patient->weight) }}" 
                                               placeholder="Enter weight in kg"/>
                                        @error('weight')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <!-- Profile Picture -->
                                <div class="col-md-12">
                                    <div class="form-group mb-3">
                                        <label for="profile_pic" class="form-label">Profile Picture</label>
                                        <input type="file" class="form-control @error('profile_pic') is-invalid @enderror" 
                                               id="profile_pic" name="profile_pic" 
                                               accept="image/*"/>
                                        @error('profile_pic')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="text-end">
                                <button type="submit" name="submit" class="btn btn-primary">Save Changes</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

   <!-- Parent Modal -->
<div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myModalLabel">Add Parent</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="post" action="{{ route('add.parent') }}">
                    @csrf
                    <!-- Last Name and First Name -->
                    <div class="row g-3">
                        <div class="col-md-6 mb-3">
                            <input type="text" class="form-control @error('lastname') is-invalid @enderror" 
                                   name="lastname" placeholder="Last Name" required 
                                   value="{{ old('lastname') }}">
                            @error('lastname')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <input type="text" class="form-control @error('firstname') is-invalid @enderror" 
                                   name="firstname" placeholder="First Name" required 
                                   value="{{ old('firstname') }}">
                            @error('firstname')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Middle Name and Birthday -->
                        <div class="col-md-6 mb-3">
                            <input type="text" class="form-control @error('middlename') is-invalid @enderror" 
                                   name="middlename" placeholder="Middle Name" required 
                                   value="{{ old('middlename') }}">
                            @error('middlename')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <input type="date" class="form-control @error('birthday') is-invalid @enderror" 
                                   name="birthday" placeholder="Birthday" required 
                                   value="{{ old('birthday') }}"
                                   max="{{ now()->subYears(18)->format('Y-m-d') }}">
                            @error('birthday')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Civil Status and Contact No. -->
                        <div class="col-md-6 mb-3">
                            <select class="form-select @error('civil_stat') is-invalid @enderror" 
                                    name="civil_stat" required>
                                <option value="">Civil Status</option>
                                <option value="Single" {{ old('civil_stat') == 'Single' ? 'selected' : '' }}>Single</option>
                                <option value="Married" {{ old('civil_stat') == 'Married' ? 'selected' : '' }}>Married</option>
                                <option value="Widowed" {{ old('civil_stat') == 'Widowed' ? 'selected' : '' }}>Widowed</option>
                                <option value="Legally separated" {{ old('civil_stat') == 'Legally separated' ? 'selected' : '' }}>Legally Separated</option>
                            </select>
                            @error('civil_stat')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <input type="text" class="form-control @error('contact_no') is-invalid @enderror" 
                                   name="contact_no" placeholder="Mobile/Tel No." required 
                                   value="{{ old('contact_no') }}">
                               @error('contact_no')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <!-- Modal Footer with Margin -->
                    <div class="modal-footer mt-3">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

    











<script>
        $(document).ready(function() {
            $('.js-example-basic-single').select2();
            $('.js-example-basic-multiple').select2();
        });
        </script>

        
<div id="topNotification" class="top-notification">
    <div class="notification-header" id="notificationHeader">Notification</div>
    <div class="notification-body" id="notificationMessage"></div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Function to show top notification
        function showTopNotification(message, type = 'error', header = null) {
            const notification = document.getElementById('topNotification');
            const messageElement = document.getElementById('notificationMessage');
            const headerElement = document.getElementById('notificationHeader');

            // Reset previous classes
            notification.className = 'top-notification';

            // Set type-specific styling
            switch(type) {
                case 'success':
                    notification.classList.add('notification-success');
                    headerElement.textContent = header || 'Success';
                    break;
                case 'warning':
                    notification.classList.add('notification-warning');
                    headerElement.textContent = header || 'Warning';
                    break;
                case 'error':
                default:
                    notification.classList.add('notification-error');
                    headerElement.textContent = header || 'Error';
            }

            // Decode the message to handle HTML entities
            message = message.replace(/&#039;/g, "'").replace(/&quot;/g, '"').replace(/&amp;/g, '&').replace(/&lt;/g, '<').replace(/&gt;/g, '>');

            // Set message
            messageElement.textContent = message;

            // Show notification
            notification.classList.add('show');

            // Auto-hide after 2.5 seconds
            setTimeout(() => {
                notification.classList.remove('show');
            }, 2500);
        }

        // Listen for Laravel flash messages and trigger the notification
        @if(session('success'))
            showTopNotification('{{ session('success') }}', 'success');
        @endif

        @if(session('error'))
            showTopNotification('{{ session('error') }}', 'error');
        @endif

        @if(session('warning'))
            showTopNotification('{{ session('warning') }}', 'warning');
        @endif

        // Expose function globally if needed
        window.showTopNotification = showTopNotification;
    });
</script>



    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="{{ asset ('vendors/js/vendor.bundle.base.js') }}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- Vendor JS -->
    <script src="{{ asset('vendors/typeahead.js/typeahead.bundle.min.js') }}"></script>
    <script src="{{ asset('vendors/select2/select2.min.js') }}"></script>
    <!-- End plugin js for this page -->

    <!-- inject:js -->
    <script src="{{ asset('js/off-canvas.js') }}"></script>
    <script src="{{ asset('js/template.js') }}"></script>
    <script src="{{ asset('js/settings.js') }}"></script>
    <script src="{{ asset('js/todolist.js') }}"></script>
    <!-- endinject -->

    <!-- Custom js for this page-->
    <script src="{{ asset('js/file-upload.js') }}"></script>
    <script src="{{ asset('js/typeahead.js') }}"></script>
    <script src="{{ asset('js/select2.js') }}"></script>
    <!-- End custom js for this page-->
    <!-- Include jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Include Select2 JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
  </body>
</html>