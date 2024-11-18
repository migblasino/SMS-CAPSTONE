<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>Login Page</title>
</head>
<body>
    <div class="container">
        <form class="login-form" action="{{ route('login') }}" method="POST">
            @csrf   
            <h5>BSMCMMS: Children's Malnutrition Monitoring System – United for a Healthier Future.</h5>   
            <h2>Administrator Login</h2>
            <div class="form-group">
                <div class="input-icon">
                    <i class="fas fa-envelope"></i>
                    <input type="email" id="email" name="email" class="@error('email') is-invalid @enderror" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="e.g bsmcmms@gmail.com">
                </div>
            </div>
            <div class="form-group">
                <div class="input-icon">
                    <i class="fas fa-eye" id="togglePassword" onclick="togglePassword()"></i>
                    <input id="password" type="password" class="@error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">
                </div>
            </div>
            <div class="form-group">
                <label>
                    <input type="checkbox" id="remember" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                </label>
            </div>
            <button type="submit">LOGIN</button>  




            <div class="form-links">
                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}">Forgot Password?</a>
                @endif
                <span>  </span>
                <a href="{{ route('register') }}">Create a New Account</a> 
            </div>


            <div class="terms-container">
    <p>By logging in, you agree to our <a href="#" class="terms-link" onclick="showModal(event, 'terms')">Terms of Service </a>and you have read our <a href="#" class="terms-link" onclick="showModal(event, 'privacy')">Privacy Policy</a>.</p>
</div>          
        </form>
    </div>

    <div id="termsModal" class="modal" style="display: none;">
        <div class="modal-content">
            <div class="modal-header">
    <h3 class="modal-title">Terms of Service</h3>
    <p class="last-updated">Last updated: 12th November 2024</p>
</div>

<div class="modal-body">
    <div class="section">
        <h3 class="section-title">Understanding Our Terms of Service</h3>
        <p class="section-content">
        Welcome to the BSMCMMS: Children's Malnutrition Monitoring System Admin Portal. As an administrator, you have access to sensitive health and nutrition data for children, and it is crucial that you follow our Terms of Service and privacy guidelines to ensure the safe and legal handling of this information.
        </p>
        <p class="section-content">
        Before proceeding, please review our Terms of Service. These terms outline the responsibilities and legal obligations of administrators using the system.
        </p>
    </div>

    <div class="section">
        <h3 class="section-title">What Are Terms of Service?</h3>
        <p class="section-content">
        The Terms of Service (TOS) are the legal agreements between you (the administrator) and BSMCMMS. They govern your use of the platform and by accessing the Admin Portal, you are agreeing to comply with these terms. Your use of the system implies that you understand your role and responsibilities in managing sensitive health data for children.
        </p>
    </div>

    <div class="section">
        <h3 class="section-title">Key Points of Our Terms:</h3>
        <p class="section-content">
            <strong>Admin Responsibilities:</strong>
        </p>
        <p class="section-content">
        As an administrator, you are responsible for managing access, ensuring accurate data entry, and protecting the privacy of children’s health information. You agree not to misuse your administrative access to the system or share sensitive data without proper authorization.
        </p>
    </div>
    <p class="section-content">
            <strong>Data Security and Privacy:</strong>
        </p>
        <p class="section-content">
        The health and nutrition data of children is extremely sensitive. You are required to follow strict data protection protocols in line with our Privacy Policy. Your actions must comply with applicable data protection laws to safeguard this information.
        </p>
        <p class="section-content">
            <strong>Intellectual Property:</strong>
        </p>
        <p class="section-content">
        All technology, content, and data within BSMCMMS are the property of BSMCMMS or its partners. As an admin, you are granted limited access to manage the system for the intended purposes but cannot reproduce, distribute, or alter system content without prior consent.
        </p>
        <p class="section-content">
            <strong>Prohibited Activities:</strong>
        </p>
        <p class="section-content">
        You agree not to modify, reverse-engineer, or otherwise attempt to tamper with the system’s security. Accessing data or performing actions outside your authorized role is strictly prohibited.
        </p>
        <p class="section-content">
            <strong>Dispute Resolution:</strong>
        </p>
        <p class="section-content">
        Any legal disputes will be resolved according to the procedures outlined in the Terms of Service, with an emphasis on confidentiality and data protection.
        </p>




    <div class="section">
        <h2 class="section-title">Why Are the Terms of Service Important?</h2>
        <p class="section-content">
            These Terms of Service are designed to ensure that BSMCMMS is used responsibly, ethically, and in full compliance with privacy laws. As an admin, you are entrusted with sensitive data and play a key role in maintaining the integrity and security of the platform. Your adherence to these terms is crucial to the success of the system and the safety of children’s health data.
        </p>
        <p class="section-content">
        Agree to the Terms
        By clicking Got it, you acknowledge that you have read, understood, and agree to our Terms of Service and Privacy Policy.
        </p>
    </div>
    </div>
<div class="modal-footer">
    <button class="btn btn-accept" id="acceptTerms">
        Got it
    </button>
</div>
        </div>
    </div>
<div id="privacyModal" class="modal" style="display: none;">
    <div class="modal-content">
       
        
        <div class="modal-header">
            <h2 class="modal-title">Privacy Policy</h2>
            <p class="last-updated">Last updated: 12th November 2024</p>
        </div>

        <div class="modal-body">
        <div class="section">
    <h2 class="section-title">Understanding Our Privacy Policy</h2>
    <p class="section-content">
        Welcome to the BSMCMMS: Children's Malnutrition Monitoring System Admin Portal. As an administrator, you are entrusted with sensitive health and nutrition data of children. It is essential that you comply with our Privacy Policy to ensure the proper handling, protection, and privacy of this information.
    </p>
    <p class="section-content">
        Before proceeding, please review our Privacy Policy. These guidelines outline how we collect, store, and protect data within the system, as well as your responsibilities in ensuring that sensitive information remains confidential.
    </p>
</div>

<div class="section">
    <h3 class="section-title">What Is a Privacy Policy?</h3>
    <p class="section-content">
        A Privacy Policy is a legal document that explains how we collect, use, and safeguard your personal data, as well as the data of children monitored in the system. By accessing the Admin Portal, you agree to follow our privacy guidelines and respect the confidentiality of all data handled within the system.
    </p>
</div>

<div class="section">
    <h3 class="section-title">Key Points of Our Privacy Policy:</h3>
    <p class="section-content">
        <strong>Data Collection and Usage:</strong>
    </p>
    <p class="section-content">
        We collect sensitive health and nutrition data for the purpose of monitoring and improving children's well-being. As an administrator, you may access, modify, and analyze this data to ensure accurate and timely health assessments. You agree not to misuse this data for unauthorized purposes.
    </p>

    <p class="section-content">
        <strong>Data Security and Protection:</strong>
    </p>
    <p class="section-content">
        The health and nutritional data of children is highly sensitive. You are required to adhere to strict data protection protocols and follow industry best practices for securing this information. This includes using encrypted channels, ensuring data is stored securely, and limiting access to only authorized individuals.
    </p>

    <p class="section-content">
        <strong>Data Sharing and Third-Party Access:</strong>
    </p>
    <p class="section-content">
        BSMCMMS does not share sensitive data with third parties unless required by law or with your express consent. As an administrator, you are prohibited from sharing or disclosing personal health data to unauthorized parties.
    </p>

    <p class="section-content">
        <strong>Data Retention:</strong>
    </p>
    <p class="section-content">
        Personal health data will be retained for as long as necessary to fulfill its purpose and in accordance with legal requirements. Once the data is no longer needed, it will be securely deleted or anonymized.
    </p>

    <p class="section-content">
        <strong>Confidentiality:</strong>
    </p>
    <p class="section-content">
        As an administrator, you are entrusted with maintaining the confidentiality of all personal health and nutrition data. Any breach of this confidentiality may result in severe consequences, including termination of access to the system and potential legal action.
    </p>

    <p class="section-content">
        <strong>Prohibited Activities:</strong>
    </p>
    <p class="section-content">
        You agree not to engage in activities that may compromise the privacy or security of children's data, such as unauthorized data access, data modification, or disclosure of sensitive information.
    </p>

    <p class="section-content">
        <strong>Dispute Resolution:</strong>
    </p>
    <p class="section-content">
        Any disputes related to the privacy of data or breaches of this Privacy Policy will be handled in accordance with the procedures outlined in our Privacy Policy and relevant data protection laws.
    </p>
</div>

<div class="section">
    <h3 class="section-title">Why Is the Privacy Policy Important?</h3>
    <p class="section-content">
        The Privacy Policy ensures that BSMCMMS is used responsibly, ethically, and in full compliance with privacy laws and regulations. As an administrator, you have access to sensitive data, and it is your responsibility to protect that information from unauthorized access or misuse. By adhering to this policy, you contribute to maintaining the trust and integrity of the system and ensure that children's health data remains secure.
    </p>
    <p class="section-content">
        Agree to the Privacy Policy
        By clicking Login, you acknowledge that you have read, understood, and agree to our Privacy Policy and Terms of Service.
    </p>
</div>
</div>
        <div class="modal-footer">
            <button class="btn btn-accept" id="acceptPrivacy">
                Got it
            </button>
        </div>
    </div>
</div>

    <div class="onboarding-container" id="onboarding">
        <div class="slide-container">
            <div class="slide active">
                <div class="slide-image">
                    <i class="fas fa-rocket"></i>
                </div>
                <div class="slide-content">
                    <h2>Welcome to Our Platform</h2>
                    <p>Discover a new way to manage your tasks and boost your productivity</p>
                </div>
            </div>

            <div class="slide">
                <div class="slide-image">
                    <i class="fas fa-tasks"></i>
                </div>
                <div class="slide-content">
                    <h2>Stay Organized</h2>
                    <p>Keep track children's nutrition and health progress, in one place.</p>
                </div>
            </div>

            <div class="slide">
                <div class="slide-image">
                    <i class="fas fa-users"></i>
                </div>
                <div class="slide-content">
                    <h2>Collaborate with Team</h2>
                    <p>Partner with health workers to boost children's nutrition.</p>
                </div>
            </div>
        </div>

        <div class="navigation-dots">
            <span class="dot active"></span>
            <span class="dot"></span>
            <span class="dot"></span>
        </div>

        <div class="onboardbuttons">
            <button class="btn btn-skip" onclick="skipOnboarding()">Skip</button>
            <button class="btn btn-next" onclick="nextSlide()">Next</button>
        </div>
    </div> 

  <!-- Enhanced Top Notification with Header -->
  <div id="topNotification" class="top-notification">
        <div class="notification-header">Something Went Wrong</div>
        <span id="notificationMessage"></span>
    </div>

    <script>
        // Function to show the top notification
        function showTopNotification(message) {
            var notification = document.getElementById('topNotification');
            var messageElement = document.getElementById('notificationMessage');
            messageElement.textContent = message;
            notification.classList.add("show");  // Show the notification
            setTimeout(function () {
                notification.classList.remove("show");  // Hide the notification after animation
            }, 3000);  // Duration of the slide-out animation (3 seconds)
        }

        @if ($errors->has('email') || $errors->has('password'))
            showTopNotification("{{ $errors->first() }}");
        @elseif(session('error'))
            showTopNotification("{{ session('error') }}");
        @endif
    </script>


 <script>
const hasSeenOnboarding = localStorage.getItem('hasSeenOnboarding');

// If user has seen onboarding, hide the onboarding container and show the main content
if (hasSeenOnboarding) {
    document.getElementById('onboarding').classList.add('onboarding-hidden');
    document.querySelector('.container').style.display = 'block'; // Show main content
} else {
    // Otherwise, show the onboarding process
    document.querySelector('.container').style.display = 'none'; // Hide main content
}

let currentSlide = 0;
const slides = document.querySelectorAll('.slide');
const dots = document.querySelectorAll('.dot');
const nextBtn = document.querySelector('.btn-next');

let touchStartX = 0;
let touchEndX = 0;

document.addEventListener('touchstart', e => {
    touchStartX = e.changedTouches[0].screenX;
});

document.addEventListener('touchend', e => {
    touchEndX = e.changedTouches[0].screenX;
    handleSwipe();
});

function handleSwipe() {
    const swipeThreshold = 50;
    const diff = touchStartX - touchEndX;

    if (Math.abs(diff) > swipeThreshold) {
        if (diff > 0) {
            nextSlide();
        } else {
            previousSlide();
        }
    }
}

function showSlide(index) {
    slides.forEach(slide => slide.classList.remove('active'));
    dots.forEach(dot => dot.classList.remove('active'));

    slides[index].classList.add('active');
    dots[index].classList.add('active');

    if (index === slides.length - 1) {
        nextBtn.textContent = 'Get Started'; // Change button text on last slide
    } else {
        nextBtn.textContent = 'Next';
    }
}

function nextSlide() {
    currentSlide++;
    if (currentSlide >= slides.length) {
        completeOnboarding();
        return;
    }
    showSlide(currentSlide);
}

function previousSlide() {
    if (currentSlide > 0) {
        currentSlide--;
        showSlide(currentSlide);
    }
}

dots.forEach((dot, index) => {
    dot.addEventListener('click', () => {
        currentSlide = index;
        showSlide(currentSlide);
    });
});

function skipOnboarding() {
    completeOnboarding();
}

function completeOnboarding() {
    // Set localStorage item to prevent showing onboarding again
    localStorage.setItem('hasSeenOnboarding', 'true');
    document.getElementById('onboarding').classList.add('onboarding-hidden');
    document.querySelector('.container').style.display = 'block'; // Show main content
}


        function togglePassword() {
            const passwordInput = document.getElementById('password');
            const toggleIcon = document.getElementById('togglePassword');
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                toggleIcon.classList.remove('fa-eye');
                toggleIcon.classList.add('fa-eye-slash');
            } else {
                passwordInput.type = 'password';
                toggleIcon.classList.remove('fa-eye-slash');
                toggleIcon.classList.add('fa-eye');
            }
        }

        const modal = document.getElementById('termsModal');
const privacyModal = document.getElementById('privacyModal');
const modalContent = document.querySelector('.modal-content');
const acceptTermsBtn = document.getElementById('acceptTerms');
const acceptPrivacyBtn = document.getElementById('acceptPrivacy');

function showModal(event, type) {
    if (event) event.preventDefault();

    modal.style.display = 'none';
    privacyModal.style.display = 'none';

    if (type === 'terms') {
        modal.style.display = 'flex';
    } else if (type === 'privacy') {
        privacyModal.style.display = 'flex';
    }

    document.body.style.overflow = 'hidden';
}

function closeModal() {
    modal.style.display = 'none';
    privacyModal.style.display = 'none';
    document.body.style.overflow = 'auto';
}

acceptTermsBtn.addEventListener('click', () => {
    console.log('Terms accepted');
    closeModal();
});

acceptPrivacyBtn.addEventListener('click', () => {
    console.log('Privacy Policy accepted');
    closeModal();
});

window.addEventListener('click', (e) => {
    if (e.target === modal || e.target === privacyModal) {
        closeModal();
    }
});

document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape') {
        closeModal();
    }
});

let startY = 0;
let currentY = 0;
let isDragging = false;
const closeThreshold = 100;

function addDragEventListeners(modalToDrag) {
    const modalContent = modalToDrag.querySelector('.modal-content');
    
    modalContent.addEventListener('touchstart', (e) => {
        if (window.innerWidth <= 767) {
            startY = e.touches[0].clientY;
            isDragging = true;
        }
    });

    modalContent.addEventListener('touchmove', (e) => {
        if (window.innerWidth <= 767 && isDragging) {
            currentY = e.touches[0].clientY;
            let deltaY = currentY - startY;

            e.preventDefault();

            if (deltaY > 0) {
                modalContent.style.transform = `translateY(${deltaY}px)`;
            }
        }
    });

    modalContent.addEventListener('touchend', () => {
        if (isDragging) {
            const deltaY = currentY - startY;
            if (deltaY > closeThreshold) {
                closeModal();
            } else {
                modalContent.style.transform = 'translateY(0)';
            }

            isDragging = false;
        }
    });
}

addDragEventListeners(modal);
addDragEventListeners(privacyModal);

    </script>
</body>
</html>
