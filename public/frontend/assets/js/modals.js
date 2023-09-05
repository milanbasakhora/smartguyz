$(document).ready(function() {
    // Open the login modal
    $("#openLoginModal").click(function() {
        $("#loginModal").modal("show");
        $('#registerModal').modal('hide');
    });

    // Open the login modal from register page
    $("#openLoginModalFromRegister").click(function() {
        $("#loginModal").modal("show");
        $('#registerModal').modal('hide');
    });

    // Open the register modal
    $("#openRegisterModal").click(function() {
        $("#registerModal").modal("show");
        $("#loginModal").modal("hide");
    });

    $("#closeLoginModal").click(function() {
        $("#loginModal").modal("hide"); // Close the login modal
    });

    $("#closeRegisterModal").click(function() {
        $("#registerModal").modal("hide"); // Close the register modal
    });
});

document.addEventListener('DOMContentLoaded', function() {
    const modal = document.getElementById('popModel');

    // Show the modal with a fade-in effect
    modal.style.display = 'block';
    setTimeout(function() {
        modal.style.opacity = '1';
    }, 10);

    // Close the modal with a fade-out effect when clicking outside of it
    modal.addEventListener('click', function(event) {
        if (event.target === modal) {
            modal.style.opacity = '0';
            setTimeout(function() {
                modal.style.display = 'none';
            }, 500); // Wait for the transition to complete (0.5 seconds)
        }
    });
});


