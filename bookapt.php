<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dr. Zafar Ahmed - Dermatologist</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <style>

/* Existing CSS styles remain unchanged */

.book-appointment {
    margin-top: 20px;
}

.book-appointment h2 {
    margin: 0;
}

.book-appointment form {
    display: flex;
    flex-direction: column;
}

.book-appointment label {
    margin-bottom: 5px;
}

.book-appointment input[type="date"],
.book-appointment input[type="time"],
.book-appointment button {
    margin-bottom: 10px;
    padding: 8px;
}

.book-appointment button {
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
}

.profile {
    max-width: 600px;
    margin: 50px auto;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

.profile-header {
    display: flex;
    align-items: center;
}

.profile-header img {
    width: 150px;
    height: 150px;
    border-radius: 50%;
    margin-right: 20px;
}

.profile-info {
    flex-grow: 1;
}

.profile-info h1 {
    margin: 0;
}

.profile-reviews,
.profile-experience,
.profile-satisfaction,
.profile-video-call {
    margin-top: 20px;
}

.profile-reviews h2,
.profile-experience h2,
.profile-satisfaction h2,
.profile-video-call h2 {
    margin: 0;
}

.profile-reviews p,
.profile-experience p,
.profile-satisfaction p {
    margin: 0;
    font-weight: bold;
}

.profile-video-call button {
    background-color: #007bff;
    color: #fff;
    border: none;
    padding: 10px 20px;
    border-radius: 5px;
    cursor: pointer;
}

.profile-video-call p {
    margin-top: 10px;
}






</style>

    <div class="profile">
        <div class="profile-header">
            <<img src="https://hips.hearstapps.com/hmg-prod/images/portrait-of-a-happy-young-doctor-in-his-clinic-royalty-free-image-1661432441.jpg" alt="Dr. Zafar Ahmed " width>
            <div class="profile-info">
                <h1>Dr. Zafar Ahmed</h1>
                <p>Dermatologist</p>
                <p>MBBS, CRCP, D.DERM (Thailand), Diploma in Dermato-Surgery (Bangkok), Research Course (UK)</p>
            </div>
        </div>
        <div class="profile-reviews">
            <h2>Reviews</h2>
            <p>2,645</p>
        </div>
        <div class="profile-experience">
            <h2>Experience</h2>
            <p>27 Yrs</p>
        </div>
        <div class="profile-satisfaction">
            <h2>Satisfaction</h2>
            <p>97%</p>
        </div>
        <div class="profile-video-call">
            <button>Video Call</button>
            <p>View Timings</p>
        </div>
        <div class="book-appointment">
            <h2>Book Appointment</h2>
            <form action="book_appointment.php" method="POST">
                <label for="date">Date:</label>
                <input type="date" id="date" name="date" required>
                <label for="time">Time:</label>
                <input type="time" id="time" name="time" required>
                <button type="submit">Book Now</button>
            </form>
        </div>
    </div>
</body>
</html>
