document.addEventListener('DOMContentLoaded', function() {
    const socialIcons = document.querySelectorAll('.social-media img');
    
    socialIcons.forEach(function(icon) {
        icon.addEventListener('mouseover', function() {
            icon.style.transform = "scale(1.3)";  // Increase size
            icon.style.boxShadow = "0px 4px 15px rgba(0, 0, 0, 0.7)";  // Add shadow
            icon.style.transition = "transform 0.3s ease, box-shadow 0.3s ease";  // Smooth animation
        });

        icon.addEventListener('mouseout', function() {
            icon.style.transform = "scale(1)";  // Return to original size
            icon.style.boxShadow = "none";  // Remove shadow
        });
    });
});
