$(document).ready(function() {
    // Open profile modal
    $("#openProfileModal").click(function() {
        $("#profileModal").modal("show");
    });

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

    $("#closeProfileModal").click(function() {
        $("#profileModal").modal("hide"); // Close the profile modal
    });
});

