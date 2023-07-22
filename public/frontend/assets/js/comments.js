$(document).ready(function() {
    // When the "Comment" icon is clicked, toggle the visibility of the comment form
    $(".comment-icon").on("click", function() {
        $(".comment-form").toggle(); // Toggles the visibility of the comment form
    });

    // Handle the "Comment" button inside the comment form
    $(".comment-form button[type='button']").on("click", function() {
        // Here, you can add the logic to submit the comment form to your server
        // For simplicity, let's just hide the comment form when the "Comment" button is clicked
        $(".comment-form").hide();
    });
});

// jQuery code for comment-options dropdown
$(document).ready(function() {
    $(".mai-chevron-down").click(function() {
      $(this).siblings(".comment-options").toggle();
    });

    $(document).click(function(e) {
        const target = $(e.target);
        if (!target.closest(".options").length) {
        $(".comment-options").hide();
        }
    });
});



