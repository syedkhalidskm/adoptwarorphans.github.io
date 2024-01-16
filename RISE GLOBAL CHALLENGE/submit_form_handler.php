<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect all form data
    $childFirstName = $_POST["childFirstName"];
    $childLastName = $_POST["childLastName"];
    $childAge = $_POST["childAge"];
    $childDOB = $_POST["childDOB"];
    $childGender = $_POST["childGender"];
    $childCountry = $_POST["childCountry"];
    $otherCountry = $_POST["otherCountry"];
    $childSpecialNeeds = $_POST["childSpecialNeeds"];
    $childBackground = $_POST["childBackground"];
    $adoptionReasons = $_POST["adoptionReasons"];
    $preferredCharacteristics = $_POST["preferredCharacteristics"];
    $yourFirstName = $_POST["yourFirstName"];
    $yourLastName = $_POST["yourLastName"];
    $yourPhoneNumber = $_POST["yourPhoneNumber"];
    $yourEmailAddress = $_POST["yourEmailAddress"];
    $additionalInfo = $_POST["additionalInfo"];

    // Prepare email content
    $subject = "New War Orphan Submission";
    $message = "Child's Name: $childFirstName $childLastName\n";
    $message .= "Child's Age: $childAge\n";
    $message .= "Child's Date of Birth: $childDOB\n";
    $message .= "Child's Gender: $childGender\n";
    $message .= "Child's Country: $childCountry\n";
    if ($childCountry == "other") {
        $message .= "Other Country Mentioned: $otherCountry\n";
    }
    $message .= "Special Needs or Medical Considerations: $childSpecialNeeds\n";
    $message .= "Child's Background and Circumstances: $childBackground\n";
    $message .= "Reasons for Considering Adoption: $adoptionReasons\n";
    $message .= "Preferred Characteristics in Adoptive Parents: $preferredCharacteristics\n";
    $message .= "Your Name: $yourFirstName $yourLastName\n";
    $message .= "Your Phone Number: $yourPhoneNumber\n";
    $message .= "Your Email Address: $yourEmailAddress\n";
    $message .= "Additional Information: $additionalInfo\n";

    // Set the recipient email address
    $to = "syedkhalid3393@gmail.com
    "; // Replace with your actual email address

    // Send email
    mail($to, $subject, $message);

    // Optionally, you can redirect the user to a thank you page
    header("Location: thank_you.html");
    exit();
}
?>