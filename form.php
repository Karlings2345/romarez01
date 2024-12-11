<!DOCTYPE html>
<html>
<head>
    <title>Example Form</title>
</head>
<body>
    <h1>Example Form</h1>
    <form action="submit.php" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="message">Message:</label>
        <textarea id="message" name="message" rows="5" cols="30" required></textarea><br><br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>